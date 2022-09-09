<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule("iblock");
CModule::IncludeModule("catalog");
CModule::IncludeModule('sale');

use Bitrix\Sale;


header('Content-Type: application/json');
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();


$productId = $request->getPost("prod");
$quantity = $request->getPost("quantity");
$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());


if ($item = $basket->getExistsItem('catalog', $productId)) {
    $item->setField('QUANTITY', $item->getQuantity() + 1);
} else {
    $item = $basket->createItem('catalog', $productId);
    $item->setFields(array(
        'QUANTITY' => $quantity,
        'CURRENCY' => Bitrix\Currency\CurrencyManager::getBaseCurrency(),
        'LID' => Bitrix\Main\Context::getCurrent()->getSite(),
        'PRODUCT_PROVIDER_CLASS' => 'CCatalogProductProvider',
    ));
}

$basket->save();
$idBasket = $item->getId();
$IDHighload = 2;
Bitrix\Main\Loader::includeModule("sale");
Bitrix\Main\Loader::includeModule("catalog");
$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
$countProdBasket = count($basket->getQuantityList());
CModule::IncludeModule('highloadblock');
$hldata = Bitrix\Highloadblock\HighloadBlockTable::getById($IDHighload)->fetch();
$hlentity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);
$hlDataClass = $hldata["NAME"] . "Table";
$priceBasket = $basket->getPrice();


$idItemBasket = $productId;
$arSelect = array("ID", "IBLOCK_ID", "CODE", "NAME", "DETAIL_PICTURE", "PROPERTY_*");
$arFilter = array("IBLOCK_ID" => 3, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "ID" => $idItemBasket);
$resOffer = CIblockElement::GetList(array("DATE_CREATE" => "DESC"), $arFilter, false, [], $arSelect);
$Photo = "";
$sizesArr = [];
$article = "";
$url = "";


if ($obOffer = $resOffer->GetNextElement()) {
    $arFieldsOffer = $obOffer->GetFields();
    $arProps = $obOffer->GetProperties();
    $arSelect = array("ID", "IBLOCK_ID", "CODE", "NAME", "DETAIL_PAGE_URL", "PROPERTY_*");
    $arFilter = array("IBLOCK_ID" => 2, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "ID" => $arProps["CML2_LINK"]["VALUE"]);
    $resProd = CIblockElement::GetList(array("DATE_CREATE" => "DESC"), $arFilter, false, [], $arSelect);
    if ($obProd = $resProd->GetNextElement()) {
        $arFieldsProd = $obProd->GetFields();
        $arPropsProd = $obProd->GetProperties();
        $url = $arFieldsProd["DETAIL_PAGE_URL"];
        $article = $arPropsProd['ARTNUMBER']['VALUE'];
        $nameProd = $arFieldsProd['NAME'];
        $idProd = $arFieldsProd['ID'];
    }

    if (empty($Photo)) {
        $renderImage = CFile::ResizeImageGet($arFieldsOffer["DETAIL_PICTURE"], array("width" => 100, "height" => 140), BX_RESIZE_IMAGE_PROPORTIONAL);
        $Photo = $renderImage["src"];
    }
    $BasketItemSize = $arProps['SIZES_CLOTHES']['VALUE'];
    $allProductPrices = \Bitrix\Catalog\PriceTable::getList([
        "select" => ["*"],
        "filter" => [
            "=PRODUCT_ID" => $arFieldsOffer["ID"],
        ],
        "order" => ["CATALOG_GROUP_ID" => "ASC"]
    ])->fetchAll();
    $salePrice = "";
    $retailPrice = "";
    foreach ($allProductPrices as $itemPrice) {
        if ($itemPrice['CATALOG_GROUP_ID'] == 1)
            $salePrice = round($itemPrice['PRICE']);
        if ($itemPrice['CATALOG_GROUP_ID'] == 2)
            $retailPrice = round($itemPrice['PRICE']);
    }
    $resultColor = $hlDataClass::getList(array(
        "select" => array("ID", "UF_NAME", "UF_XML_ID", "UF_COLORCOD"), // Поля для выборки
        "order" => array(),
        "filter" => array("UF_XML_ID" => $arProps["COLOR_REF"]['VALUE']),
    ));
    if ($resp = $resultColor->fetch()) {
        $mainColor = $resp['UF_COLORCOD'];
        $mainColorName = $resp['UF_NAME'];
    }
    if (empty($mainColor)) {
        $mainColor = "#8A8972";
    }
}

$json = [
    "id" => $idBasket,
    "idprod" => $idProd,
    "name" => $nameProd,
    "photo" => $Photo,
    "url" => $url,
    "colorcode" => $mainColor,
    "colorname" => $mainColorName,
    "size"=>$BasketItemSize,
    "sale"=>$salePrice,
    "retail"=>$retailPrice
];

$result=\Bitrix\Main\Web\Json::encode($json);
echo $result;