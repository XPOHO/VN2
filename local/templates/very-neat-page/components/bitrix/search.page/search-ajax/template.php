<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<?
?><div class="products-wrapper"><?php
echo "<pre>";
print_r($arResult["SEARCH"]);
    CModule::IncludeModule("iblock");
    CModule::IncludeModule("catalog");
    CModule::IncludeModule('sale');
    CModule::IncludeModule('highloadblock');
    use Bitrix\Sale;
    \Bitrix\Main\Loader::includeModule("catalog");

    $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
    $IDHighload = 2;



foreach ($arResult["SEARCH"] as $searchItem) {


//header('Content-Type: application/json');



    if(!$USER->IsAuthorized()) // Для неавторизованного
    {

        $request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
        $favCookie=    $request->getCookie('favorites');

        $arFavorites=  unserialize($favCookie);
        $favoritesAr=[];
        foreach ($arFavorites as $itemFav){
            $favoritesAr[$itemFav]=true;
        }
    }
    else{

        $idUser = $USER->GetID();
        $rsUser = CUser::GetByID($idUser);
        $arUser = $rsUser->Fetch();
        $arFavorites = $arUser['UF_FAVORITES'];  // Достаём избранное пользователя

        $favoritesAr=[];
        foreach ($arFavorites as $itemFav){
            $favoritesAr[$itemFav]=true;
        }

    }

    $hldata = Bitrix\Highloadblock\HighloadBlockTable::getById($IDHighload)->fetch();
    $hlentity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);
    $hlDataClass = $hldata["NAME"] . "Table";
    $arSelect = array("ID", "IBLOCK_ID", "CODE", "NAME", "DETAIL_PAGE_URL", "PROPERTY_*");
    $arFilter = array("IBLOCK_ID" => 2, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "ID" => $searchItem["ITEM_ID"]);
    $resProd = CIblockElement::GetList(array("DATE_CREATE" => "DESC"), $arFilter, false, [], $arSelect);
    if ($obProd = $resProd->GetNextElement()) {
        $arFieldsProd = $obProd->GetFields();
        $title=$arFieldsProd['NAME'];
        $arPropsProd = $obProd->GetProperties();
        $idProd = $arFieldsProd["ID"];
        $code = $arFieldsProd["CODE"];
        $url = $arFieldsProd["DETAIL_PAGE_URL"];
        $arSelect = array("ID", "IBLOCK_ID", "CODE", "NAME", "DETAIL_PICTURE", "PROPERTY_*");
        $arFilter = array("IBLOCK_ID" => 3, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "PROPERTY_CML2_LINK" => $arFieldsProd["ID"]);
        $resOffer = CIblockElement::GetList(array("DATE_CREATE" => "DESC"), $arFilter, false, [], $arSelect);
        $Photo = "";
        $sizesArr = [];
        if ($obOffer = $resOffer->GetNextElement()) {
            $arFieldsOffer = $obOffer->GetFields();
            //  echo "<pre>";
            // print_r($arFieldsOffer);
            $test= CFile::GetPath($arFieldsOffer["DETAIL_PICTURE"]);
            // var_dump($test);
            if (empty($Photo)) {
                $renderImage = CFile::ResizeImageGet($arFieldsOffer["DETAIL_PICTURE"], array("width" => 400, "height" => 700), BX_RESIZE_IMAGE_PROPORTIONAL);
                $Photo = $renderImage["src"];
            }
            $arProps = $obOffer->GetProperties();
            $sizesArr[$arProps['SIZES_CLOTHES']['VALUE']]["id"] = $arFieldsOffer["ID"];


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
            $sizesArr[$arProps['SIZES_CLOTHES']['VALUE']]["price"]["retail"] = $retailPrice;
            $sizesArr[$arProps['SIZES_CLOTHES']['VALUE']]["price"]["sale"] = $salePrice;
            if (empty($mainColor)) {
                $resultColor = $hlDataClass::getList(array(
                    "select" => array("ID", "UF_NAME", "UF_XML_ID", "UF_COLORCOD"), // Поля для выборки
                    "order" => array(),
                    "filter" => array("UF_XML_ID" => $arProps["COLOR_REF"]['VALUE']),
                ));
                if ($resp = $resultColor->fetch()) {
                    $mainColor = $resp['UF_COLORCOD'];
                    $mainColorName = $resp['UF_NAME'];
                }
            }
        }
        //  echo "<pre>";
        // print_r($favoritesAr);
        $arCart[] = [
            "id" => $idProd,
            "title" => $title,
            "art" => $arPropsProd['ARTNUMBER']['VALUE'],
            "year" => $arPropsProd['YEAR']['VALUE'],
            "polotno" => $arPropsProd['POLOTNO']['VALUE'],
            "season" => $arPropsProd['SEASON']['VALUE'],
            "country" => $arPropsProd['COUNTRY']['VALUE'],
            "code" => $code,
            "img" => "$Photo",
            "color" => [
                'name' => $mainColorName,
                'code' => $mainColor
            ],
            "sizes" => $sizesArr,
            "href" => $url
        ];
    }
echo "<pre>";
print_r($arCart);

    ?>
    <div class="product-item">
        <div class="image-block">
            <a href="<?=$searchItem['URL']?>" class="product-link">
                <img src="<?= DEFAULT_TEMPLATE_PATH ?>/images/main/main_page/search/item_image.jpg" alt="product-image"
                     class="product-image">
            </a>
        </div>
        <div class="descr-block">
            <a href="#" class="product-name">Сорочка</a>
            <span class="article">АРТ 7002950M</span>
            <div class="properties">
                <span class="properties__item">XL</span>
                <span class="properties__color"><span style="background-color: #8A8972;"></span>Хаки</span>
            </div>
        </div>
        <div class="price-block">
            <span class="price">1 749 ₽</span>
        </div>
    </div>
    <?php
}
?>
</div>






