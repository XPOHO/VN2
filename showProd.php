<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

CModule::IncludeModule("iblock");
CModule::IncludeModule("catalog");
CModule::IncludeModule('sale');
CModule::IncludeModule('highloadblock');
use Bitrix\Sale;
header('Content-Type: application/json');
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
$productId = $request->getPost("prod");
$productId = 1196;
$IDHighload = 2;
$hldata = Bitrix\Highloadblock\HighloadBlockTable::getById($IDHighload)->fetch();
$hlentity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);
$hlDataClass = $hldata["NAME"] . "Table";
$arSelect = array("ID", "IBLOCK_ID", "CODE", "NAME", "DETAIL_PAGE_URL", "PROPERTY_*");
$arFilter = array("IBLOCK_ID" => 2, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "ID" => $productId);
$resProd = CIblockElement::GetList(array("DATE_CREATE" => "DESC"), $arFilter, false, [], $arSelect);
if ($obProd = $resProd->GetNextElement()) {
    $arFieldsProd = $obProd->GetFields();
    $arPropsProd = $obProd->GetProperties();
    $idProd = $arFieldsProd["ID"];
    $code = $arFieldsProd["CODE"];
    $url = $arFieldsProd["DETAIL_PAGE_URL"];
    $arSelect = array("ID", "IBLOCK_ID", "CODE", "NAME", "DETAIL_PICTURE", "PROPERTY_*");
    $arFilter = array("IBLOCK_ID" => 3, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "PROPERTY_CML2_LINK" => $arFieldsProd["ID"]);
    $resOffer = CIblockElement::GetList(array("DATE_CREATE" => "DESC"), $arFilter, false, [], $arSelect);
    $Photo = "";
    $sizesArr=[];
    while ($obOffer = $resOffer->GetNextElement()) {
        $arFieldsOffer = $obOffer->GetFields();
        /// print_r($arFieldsOffer);
        if (empty($Photo)) {
            $renderImage = CFile::ResizeImageGet($arFieldsOffer["DETAIL_PICTURE"], array("width" => 372, "height" => 600), BX_RESIZE_IMAGE_PROPORTIONAL);
            $Photo = $renderImage["src"];
        }
        $arProps = $obOffer->GetProperties();
        $sizesArr[]=$arProps['SIZES_CLOTHES']['VALUE'];
        if (empty($mainColor)){
        $resultColor = $hlDataClass::getList(array(
            "select" => array("ID", "UF_NAME", "UF_XML_ID", "UF_COLORCOD"), // Поля для выборки
            "order" => array(),
            "filter" => array("UF_XML_ID" => $arProps["COLOR_REF"]['VALUE']),
        ));
        if ($resp = $resultColor->fetch()) {
            $mainColor = $resp['UF_COLORCOD'];
        }}
    }
    $arCart[] = [
        "id" => $idProd,
        "art"=>$arPropsProd['ARTNUMBER']['VALUE'],
        "year"=>$arPropsProd['YEAR']['VALUE'],
        "polotno"=>$arPropsProd['POLOTNO']['VALUE'],
        "season"=>$arPropsProd['SEASON']['VALUE'],
        "country"=>$arPropsProd['COUNTRY']['VALUE'],
        "code" => $code,
        "img" => "$Photo",
        "color" => "$mainColor",
        "sizes"=> $sizesArr,
        "href" => $url
    ];
    $Json = \Bitrix\Main\Web\Json::encode($arCart);
    echo $Json;
}