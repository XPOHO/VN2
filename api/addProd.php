<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
CModule::IncludeModule("iblock");
CModule::IncludeModule("catalog");
CModule::IncludeModule('sale');
CModule::IncludeModule('highloadblock');


$json = file_get_contents("VERY NEAT (1).Json");

$arrAll = \Bitrix\Main\Web\Json::decode($json);

echo "<pre>";

//print_r($arrAll);


foreach ($arrAll['goods'] as $itemProd) {


    $offers = [];
    //print_r($itemProd["good"]);


    foreach ($arrAll['goods'] as $itemOffers) {


        $ArImages = [];
        if ($itemProd["good"]["article"] == $itemOffers["good"]["article"]) {
            foreach ($itemOffers["good"]["images"] as $itemImg) {

                $ArImages[] = $itemImg["src"];

            }


            foreach ($itemOffers["good"]["sizes"] as $itemSize) {

                if (isset($kod77Dub[$itemSize["size"]["kod77"]])) {
                    continue;
                } else {
                    $kod77Dub[$itemSize["size"]["kod77"]] = true;
                }

                $offers[] = [
                    "NAME" => $itemOffers["good"]["nameSite"],
                    "SIZE" => $itemSize["size"]["value"],
                  //  "COLOR" => $itemOffers["good"]["color"],
                    "COLOR" => $itemOffers["good"]["realColor"],
                    "PRICE" => "666",
                    "ORT" => "777",
                    "RETAIL" => "888",
                    "Code_77" => $itemSize["size"]["kod77"],
                    "QUANTITY" => 0,
                    "COLLECTION" => $itemOffers["good"]["season"],
                    'DETAIL_PICTURE' => $itemOffers["good"]["images"][0]["src"],
                    'PICTURES' => $ArImages,
                ];
            }
        }
    }

    if (isset($prodDub[$itemProd["good"]["article"]])) {
        continue;
    } else {
        $prodDub[$itemProd["good"]["article"]] = true;
    }

$code=translit($itemProd["good"]["article"]);
    $code = str_replace("/", "-", "$code");
    $code = str_replace(" ", "-", "$code");
    $arrProd[] = [
        "section" => [
            $itemProd["good"]["parentCategory"],
            $itemProd["good"]["CategorySite"],
            //  $itemProd["good"]["nameSite"]
        ],
        "params" => [
            "NAME" => $itemProd["good"]["nameSite"],
            "DETAIL_TEXT" => $itemProd["good"]["description"],
            "DIS" => $itemProd["good"]["artname"],
            "CODE" => $code,
            "BRAND" => $itemProd["good"]["brand"],
            //"HIT" => "??????, ????????????????",
            "ARTICLE" => $itemProd["good"]["article"],
            "COMPOUND" => $itemProd["good"]["content"],
            "SEASON" => $itemProd["good"]["season"],
            "POLOTNO" => $itemProd["good"]["canvas"],
            // "BEZ_SHOV" => true,
            // "UTEPLITEL" => "????????",
            "YEAR" => $itemProd["good"]["year"],
            "COLLECTION" => $itemProd["good"]["collection"],
            "COUNTRY" => $itemProd["good"]["country"],
        ],
        "offers" => $offers


    ];
}

//print_r($arrProd);



$logJson = [];
$IDHighload = 2;
$hldata = Bitrix\Highloadblock\HighloadBlockTable::getById($IDHighload)->fetch();
$hlentity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hldata);
$hlDataClass = $hldata["NAME"] . "Table";
//?????????????? ???????????????????????? ?????????????????????? ????????.
function translit($s)
{
    $s = (string)$s; // ?????????????????????? ?? ?????????????????? ????????????????
    $s = trim($s); // ?????????????? ?????????????? ?? ???????????? ?? ?????????? ????????????
    $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // ?????????????????? ???????????? ?? ???????????? ?????????????? (???????????? ???????? ???????????? ????????????)
    $s = strtr($s, array('??' => 'a', '??' => 'b', '??' => 'v', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'e', '??' => 'j', '??' => 'z', '??' => 'i', '??' => 'y', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => 'o', '??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u', '??' => 'f', '??' => 'h', '??' => 'c', '??' => 'ch', '??' => 'sh', '??' => 'shch', '??' => 'y', '??' => 'e', '??' => 'yu', '??' => 'ya', '??' => '', '??' => ''));
    return $s; // ???????????????????? ??????????????????
}
//echo "<pre>";
$IBLOCK_ID = 2;
$IBLOCK_OFFERS_ID = 3;
$ciBlockElement = new CIBlockElement;
$bs = new CIBlockSection;
$arrAll = $arrProd;
//?????????????? ?????????? ??????????????
foreach ($arrAll as $arr) {



//print_r($arr);
    //?????????????????? ???????????????? ?? ?????????????????????????? ??????????????????.
   // $arr["params"]['HIT'] = mb_strtolower($arr["params"]['HIT']);
    $arr["params"]['BRAND'] = mb_strtolower($arr["params"]['BRAND']);
    //?????????????????????? ?????????????? ?????? ????????????. ???????? ???? ??????????????, ??????????????
    $SECTION_ID = false;
    foreach ($arr['section'] as $sectionName) {
        $arFilter = array('IBLOCK_ID' => $IBLOCK_ID, 'NAME' => $sectionName, "SECTION_ID" => $SECTION_ID);
        $db_list = CIBlockSection::GetList(array($by => $order), $arFilter, true);
        if ($ar_result = $db_list->GetNext()) {
            $SECTION_ID = $ar_result['ID'];
//            $logJson["SECTION"][]=[
//                "stat"=>"success",
//                "idSection"=>$SECTION_ID
//            ];
        } else {
            $code = translit($sectionName);
            $arFields = array(
                "ACTIVE" => "Y",
                "IBLOCK_SECTION_ID" => $SECTION_ID,
                "CODE" => $code,
                "IBLOCK_ID" => $IBLOCK_ID,
                "NAME" => $sectionName,
                "SORT" => 100,
            );
            {
                $SECTION_ID = $bs->Add($arFields);
                $res = ($SECTION_ID > 0);
            }
        }
    }
// ?????????? ???????????? ???? ???????? ??????????????!!!

     if ("?????? 3078"!=$arr["params"]['ARTICLE']){continue;}
   // var_dump($SECTION_ID);
    $arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_*");//IBLOCK_ID ?? ID ?????????????????????? ???????????? ???????? ??????????????, ????. ???????????????? arSelectFields ????????
    $arFilter = array("IBLOCK_ID" => IntVal($IBLOCK_ID), "PROPERTY_ARTNUMBER" => $arr["params"]['ARTICLE']);
    $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
    if ($ob = $res->GetNextElement()) {
        $arFieldsProd = $ob->GetFields();
        //???????????????????? ???????????????????? ???????????? ????????????????
        /// //?????????????????? ??????????
//        if (!empty($arr["params"]['BRAND'])) {
//            $idBrand = '';
//            $arSelect = array("ID", "NAME", "DATE_ACTIVE_FROM");
//            $arFilter = array("IBLOCK_ID" => IntVal(481), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
//            $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
//            while ($ob = $res->GetNextElement()) {
//                $arFields = $ob->GetFields();
//                $arFields["NAME"] = mb_strtolower($arFields["NAME"]);
//                if ($arFields["NAME"] == $arr["params"]['BRAND']) {
//                    $idBrand = $arFields["ID"];
//                }
//            }
//            // ?????? ????????????????
//            $PROPERTY_CODE = "BRAND";  // ?????? ????????????????
//            $PROPERTY_VALUE = $idBrand;  // ???????????????? ????????????????
//// ?????????????????? ?????????? ???????????????? ?????? ?????????????? ???????????????? ?????????????? ????????????????
//            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $PROPERTY_VALUE));
//        }
//?????????????????? ?????? ?????? ???? ??????
//        if (!empty($arr["params"]['HIT'])) {
//            $hitValuep = [];
//            $property_enums = CIBlockPropertyEnum::GetList(array("DEF" => "DESC", "SORT" => "ASC"), array("IBLOCK_ID" => $IBLOCK_ID, "CODE" => "HIT"));
//            while ($enum_fields = $property_enums->GetNext()) {
//                $enum_fields["VALUE"] = mb_strtolower($enum_fields["VALUE"]);
//                $mystring = $arr["params"]['HIT'];
//                $findme = $enum_fields['VALUE'];
//                $pos = strpos($mystring, $findme);
//                if ($pos === false) {
//                } else {
//                    $hitValuep[] = $enum_fields["ID"];
//                }
//            }
//            if ((!empty($arr["params"]['HIT'])) && (empty($hitValuep))) {
////                $logJson[] = [
////                    "stat" => "error",
////                    "art" => $arFieldsProd["ID"],
////                    "message" => '?????? ???? ????????????'
////                ];
//                continue;
//            }
//            $PROPERTY_CODE = "HIT";
//// ?????????????????? ?????????? ???????????????? ?????? ?????????????? ???????????????? ?????????????? ????????????????
//            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $hitValuep));
//        }
        if (!empty($arr["params"]['COMPOUND'])) {
            $PROPERTY_CODE = "CANVAS";
            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $arr["params"]['COMPOUND']));
        }

        if (!empty($arr["params"]['COMPOUND'])) {
            $PROPERTY_CODE = "BRAND_REF";
            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => "veryneat"));
        }
//?????????????????? ???????????? ????????????????????????
        if (!empty($arr["params"]['COUNTRY'])) {
            $PROPERTY_CODE = "COUNTRY";
            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $arr["params"]['COUNTRY']));
        }
// ??????????
        if (!empty($arr["params"]['SEASON'])) {
            $PROPERTY_CODE = "SEASON";


            if ($arr["params"]['SEASON']=="??????????-????????"){

                $arr["params"]['SEASON']=18;

            }
            elseif ($arr["params"]['SEASON']=="??????????-????????"){
                $arr["params"]['SEASON']=19;
            }


            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $arr["params"]['SEASON']));
        }
// ??????????????
        if (!empty($arr["params"]['POLOTNO'])) {
            $PROPERTY_CODE = "MATERIAL";
            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $arr["params"]['POLOTNO']));
        }
//??????
        if (!empty($arr["params"]['YEAR'])) {
            $PROPERTY_CODE = "YEAR";
            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $arr["params"]['YEAR']));
        }
//???????????? ????/??????
//        if (!empty($arr["params"]['BEZ_SHOV'])) {
//            if ($arr["params"]['BEZ_SHOV']==1) {
//                $arr["params"]['BEZ_SHOV'] = 4196;
//            } else {
//                $arr["params"]['BEZ_SHOV'] = 4195;
//            }
//            $PROPERTY_CODE = "BEZ_SHOV";
//            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $arr["params"]['BEZ_SHOV']));
//        }
//????????????????????
//        if (!empty($arr["params"]['UTEPLITEL'])) {
//            $sizeUtep = "";
//            $property_enums = CIBlockPropertyEnum::GetList(array("DEF" => "DESC", "SORT" => "ASC"), array("IBLOCK_ID" => $IBLOCK_ID, "CODE" => "UTEPL"));
//            while ($enum_fields = $property_enums->GetNext()) {
//                $arr["params"]['UTEPLITEL'] = mb_strtolower($arr["params"]['UTEPLITEL']);
//                $enum_fields["VALUE"] = mb_strtolower($enum_fields["VALUE"]);
//                if ($enum_fields["VALUE"] == $arr["params"]['UTEPLITEL']) {
//                    $sizeUtep = $enum_fields["ID"];
//                    break;
//                }
//            }
//            $PROPERTY_CODE = "UTEPL";
//            CIBlockElement::SetPropertyValuesEx($arFieldsProd["ID"], false, array($PROPERTY_CODE => $sizeUtep));
//        }
//?????????????????? ????????????????
        if (!empty($arr["params"]['DETAIL_TEXT'])) {
            $arLoadProductArray = array(
                "DETAIL_TEXT" => $arr["params"]['DETAIL_TEXT'],
            );
            $res = $ciBlockElement->Update($arFieldsProd["ID"], $arLoadProductArray);
        }
//        $logJson[] = [
//            "stat" => "success",
//            "art" => $arr["params"]['ARTICLE'],
//        ];
//???????????????????? ???????????????? ??????????????????????
        foreach ($arr['offers'] as $offer) {
            $sizeValue = "";
//?????????????????????? ???????????????? (?????? ???? ???????? ???????????? ???? ????????????, ?? ?????????? id ???????????????? ????????????????)
            $property_enums = CIBlockPropertyEnum::GetList(array("DEF" => "DESC", "SORT" => "ASC"), array("IBLOCK_ID" => $IBLOCK_OFFERS_ID, "CODE" => "SIZES_CLOTHES"));
            while ($enum_fields = $property_enums->GetNext()) {
                $offer['SIZE'] = mb_strtolower($offer['SIZE']);
                $enum_fields["VALUE"] = mb_strtolower($enum_fields["VALUE"]);
                if ($offer['SIZE'] == "no size") {
                    $offer['SIZE'] = "?????? ??????????????";
                }
                if ($offer['SIZE'] == "no-size") {
                    $offer['SIZE'] = "?????? ??????????????";
                }
                if ($enum_fields["VALUE"] == $offer['SIZE']) {
                    $sizeValue = $enum_fields["ID"];
                    break;
                }
            }
            if (empty($sizeValue)) {
                $logJson[] = [
                    "stat" => "error",
                    "Kod77" => $offer['Code_77'],
                    "message" => '???????????? ???? ????????????'
                ];
                continue;
            }
            if (!empty($offer['COLOR'])) {
                $resultColor = $hlDataClass::getList(array(
                    "select" => array("ID", "UF_NAME", "UF_XML_ID"), // ???????? ?????? ??????????????
                    "order" => array(),
                    "filter" => array("UF_NAME" => $offer['COLOR']),
                ));
                $colorValue = [];
                if ($resp = $resultColor->fetch()) {
                    $colorValue = $resp["UF_XML_ID"];
                }
            }
            if (empty($colorValue)) {
                $logJson[] = [
                    "stat" => "error",
                    "Kod77" => $offer['Code_77'],
                    "message" => '???????? ???? ????????????'
                ];
                continue;
            }
//?????????? ???????????????? ???????????????????? ?? ?????? ?????????????????? ???????????? ???? ????????77.
            $arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_*");
            $arFilter = array("IBLOCK_ID" => IntVal($IBLOCK_OFFERS_ID), "PROPERTY_KOD77" => $offer['Code_77']);
            $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
            if ($ob = $res->GetNextElement()) {
                $arFields = $ob->GetFields();
                $i = 0;
                $photos = [];
                foreach ($offer["PICTURES"] as $foto) {
                    $imgArr=[];
                    $imgArr=CFile::MakeFileArray($foto);
                    if ($imgArr["size"]<100){
                        continue;
                    }
                    $photos["n$i"] = array(
                        "VALUE" => $imgArr
                    );
                    $i++;
                }
                \CIBlockElement::SetPropertyValuesEx(
                    $arFields["ID"],
                    $IBLOCK_OFFERS_ID,
                    array(
                        "MORE_PHOTO" => array( // ???????????????? ????????????????
                            "VALUE" => array( // ???????????????? ????????????????
                                "del" => "Y" // ???????????????? ???? ????????????????
                            )
                        )
                    )
                );
                $imgDetaile=[];
                $imgDetaile=CFile::MakeFileArray($offer['DETAIL_PICTURE']);
                if ($imgDetaile["size"]<100){
                    $imgDetaile=[];
                }
                $arLoadProductArray = array(
                    "IBLOCK_ID" => $IBLOCK_OFFERS_ID, // IBLOCK ???????????????? ??????????????????????
                    "NAME" => $offer["NAME"],
                    "ACTIVE" => "Y",
                    'DETAIL_PICTURE' => $imgDetaile,
                    //'PREVIEW_PICTURE' => CFile::MakeFileArray($offer['DETAIL_PICTURE']),
                    'DETAIL_TEXT' => $arr["params"]['DETAIL_TEXT'],
                    'PROPERTY_VALUES' => array(
                        'CML2_LINK' => $arFieldsProd["ID"],
                        'SIZES_CLOTHES' => $sizeValue,
                        'ARTNUMBER' => $arr["params"]['ARTICLE'],
                        'KOD77' => $offer['Code_77'],
                        "MORE_PHOTO" => $photos,
                        "COLOR_REF" => $colorValue,
                    //    "FRCOLLECTION" => $offer['COLLECTION'],
                    //    "ALL_ARTICLE" => $offer['FULL_ARTICLE'],
                    )
                );
                $ciBlockElement->Update($arFields["ID"], $arLoadProductArray);
// ???????????????? ???? ????????????
                if (!empty($ciBlockElement->LAST_ERROR)) {
                    $logJson[] = [
                        "stat" => "error",
                        "Kod77" => $offer['Code_77'],
                        "message" => $ciBlockElement->LAST_ERROR
                    ];
                    continue;
                } else {
                    $logJson[] = [
                        "stat" => "success",
                        "Kod77" => $offer['Code_77'],
                    ];
                };
                $arFieldsPrice = array(
                    "PRODUCT_ID" => $arFields["ID"],
                    "CATALOG_GROUP_ID" => 1,
                    "PRICE" => $offer["PRICE"],
                    "CURRENCY" => "RUB",
                );
                $resPrice = CPrice::GetList(
                    array(),
                    array(
                        "PRODUCT_ID" => $arFields["ID"],
                        "CATALOG_GROUP_ID" => 1
                    )
                );
                if ($arrPrice = $resPrice->Fetch()) {
                    $test = CPrice::Update($arrPrice["ID"], $arFieldsPrice);
                }
                $arFieldsPrice = array(
                    "PRODUCT_ID" => $arFields["ID"],
                    "CATALOG_GROUP_ID" => 2,
                    "PRICE" => $offer["ORT"],
                    "CURRENCY" => "RUB",
                );
                $arFieldsPrice = array(
                    "PRODUCT_ID" => $arFields["ID"],
                    "CATALOG_GROUP_ID" => 3,
                    "PRICE" => $offer["RETAIL"],
                    "CURRENCY" => "RUB",
                );
                $resPrice = CPrice::GetList(
                    array(),
                    array(
                        "PRODUCT_ID" => $arFields["ID"],
                        "CATALOG_GROUP_ID" => 3
                    )
                );
                if ($arrPrice = $resPrice->Fetch()) {
                    $test = CPrice::Update($arrPrice["ID"], $arFieldsPrice);
                }


            } else {
                $imgDetaile=[];
                $imgDetaile=CFile::MakeFileArray($arr["params"]['DETAIL_PICTURE']);
                if ($imgDetaile["size"]<100){
                    $imgDetaile=[];
                }
// ???????????????????????? ???????????????? ?????? ???????????? ?????????????????? ??????????????????????
                $arLoadProductArray = array(
                    "IBLOCK_ID" => $IBLOCK_OFFERS_ID, // IBLOCK ???????????????? ??????????????????????
                    "NAME" => $offer["NAME"],
                 //   "CODE" => $offer["CODE"],
                    "ACTIVE" => "Y",
                    'DETAIL_TEXT' => $arr["params"]['DETAIL_TEXT'],
                    "ARTICLE" => $arr["params"]["ARTICLE"],
                    'DETAIL_PICTURE' => $imgDetaile,
                    'PROPERTY_VALUES' => array(
                        'CML2_LINK' => $product_id,
                        'SIZES_SHOES' => $sizeValue,
                        "MORE_PHOTO" => $photos,
                        'KOD77' => $offer['Code_77'],
                        "COLOR_REF" => $colorValue,
                        //"FRCOLLECTION" => $offer['COLLECTION'],
                       // "ALL_ARTICLE" => $offer['FULL_ARTICLE'],
                    )
                );
                $product_offer_id = $ciBlockElement->Add($arLoadProductArray);
// ???????????????? ???? ????????????
                if (!empty($ciBlockElement->LAST_ERROR)) {
                    //echo "???????????? ???????????????????? ?????????????????? ??????????????????????: " . ;
                    $logJson[] = [
                        "stat" => "error",
                        "Kod77" => $offer['Code_77'],
                        "message" => $ciBlockElement->LAST_ERROR
                    ];
                    continue;
                } else {
                    $logJson[] = [
                        "stat" => "success",
                        "Kod77" => $offer['Code_77'],
                    ];
                }
// ?????????????????? ?????????????????? ????????????????????
                CCatalogProduct::Add(
                    array(
                        "ID" => $product_offer_id,
                        "QUANTITY" => $offer["QUANTITY"]
                    )
                );
// ?????????????????? ????????
                CPrice::Add(
                    array(
                        "CURRENCY" => "RUB",
                        "PRICE" => $offer["PRICE"],
                        "CATALOG_GROUP_ID" => 1,
                        "PRODUCT_ID" => $product_offer_id,
                    )
                );
                CPrice::Add(
                    array(
                        "CURRENCY" => "RUB",
                        "PRICE" => $offer["RETAIL"],
                        "CATALOG_GROUP_ID" => 3,
                        "PRODUCT_ID" => $product_offer_id,
                    )
                );
            }
        }
    } else {
//???????????? ???????????? ???? ??????????????
//?????????????????????? ?????? ?????? ???? ??????.

     //   print_r($arr);
        $hitValuep = [];
        $property_enums = CIBlockPropertyEnum::GetList(array("DEF" => "DESC", "SORT" => "ASC"), array("IBLOCK_ID" => $IBLOCK_ID, "CODE" => "HIT"));
        while ($enum_fields = $property_enums->GetNext()) {
            $enum_fields["VALUE"] = mb_strtolower($enum_fields["VALUE"]);
//            $mystring = $arr["params"]['HIT'];
//            $findme = $enum_fields['VALUE'];
//            $pos = strpos($mystring, $findme);
//            if ($pos === false) {
//            } else {
//                $hitValuep[] = $enum_fields["ID"];
//            }
        }
//?????????????????????? ????????????
//        $idBrand = '';
//        $arSelect = array("ID", "NAME", "DATE_ACTIVE_FROM");
//        $arFilter = array("IBLOCK_ID" => IntVal(481), "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
//        $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
//        while ($ob = $res->GetNextElement()) {
//            $arFields = $ob->GetFields();
//            $arFields["NAME"] = mb_strtolower($arFields["NAME"]);
//            if ($arFields["NAME"] == $arr["params"]['BRAND']) {
//                $idBrand = $arFields["ID"];
//            }
//        }
        $PROP = [];
        $PROP[9] = $arr["params"]['ARTICLE'];
    //    $PROP[7701] = $arr["params"]['COMPOUND'];
        $PROP[29] = $arr["params"]['COUNTRY'];
        $PROP[5] = [8];
      //  $PROP[7652] = $hitValuep;
        if ($arr["params"]['SEASON']=="??????????-????????"){

            $arr["params"]['SEASON']=18;

        }
        elseif ($arr["params"]['SEASON']=="??????????-????????"){
            $arr["params"]['SEASON']=19;
        }

        $PROP[28] = $arr["params"]['SEASON'];

        $PROP[30] = $arr["params"]['POLOTNO'];
        $PROP[33] = $arr["params"]['YEAR'];
//        if ($arr["params"]['BEZ_SHOV']==1) {
//            $arr["params"]['BEZ_SHOV'] = 4196;
//        } else {
//            $arr["params"]['BEZ_SHOV'] = 4195;
//        }
//        $sizeUtep = "";
//        $property_enums = CIBlockPropertyEnum::GetList(array("DEF" => "DESC", "SORT" => "ASC"), array("IBLOCK_ID" => $IBLOCK_ID, "CODE" => "UTEPL"));
//        while ($enum_fields = $property_enums->GetNext()) {
//            $arr["params"]['UTEPLITEL'] = mb_strtolower($arr["params"]['UTEPLITEL']);
//            $enum_fields["VALUE"] = mb_strtolower($enum_fields["VALUE"]);
//            if ($enum_fields["VALUE"] == $arr["params"]['UTEPLITEL']) {
//                $sizeUtep = $enum_fields["ID"];
//                break;
//            }
//        }
//        $PROP[8045] = $arr["params"]['BEZ_SHOV'];
//        $PROP[8046] = $sizeUtep;
        $product_id = $ciBlockElement->Add(
            array(
                'IBLOCK_ID' => $IBLOCK_ID, // IBLOCK ??????????????
                'NAME' => $arr["params"]['NAME'],
                "CODE" => $arr["params"]['CODE'],
                'DETAIL_TEXT' => $arr["params"]['DETAIL_TEXT'],
                "ACTIVE" => "Y",
                "PROPERTY_VALUES" => $PROP,
                "IBLOCK_SECTION_ID" => $SECTION_ID,
            )
        );
// ???????????????? ????????????
        if (!empty($ciBlockElement->LAST_ERROR)) {
        //     echo "???????????? ???????????????????? ????????????: " . $ciBlockElement->LAST_ERROR;
           $logJson[] = [
                "stat" => "error",
                "art" => $arr["params"]['ARTICLE'],
            "message" => $ciBlockElement->LAST_ERROR
            ];
            continue;
        } else {
            $logJson[] = [
                "stat" => "success",
                "art" => $arr["params"]['ARTICLE'],
            ];
        }
// ?????????????????? ???????????????? ??????????????????????
        foreach ($arr['offers'] as $offer) {
            $sizeValue = "";
//?????????????????????? ???????????????? (?????? ???? ???????? ???????????? ???? ????????????, ?? ?????????? id ???????????????? ????????????????)
            $property_enums = CIBlockPropertyEnum::GetList(array("DEF" => "DESC", "SORT" => "ASC"), array("IBLOCK_ID" => $IBLOCK_OFFERS_ID, "CODE" => "SIZES_CLOTHES"));
            while ($enum_fields = $property_enums->GetNext()) {
                if ($enum_fields["VALUE"] == $offer['SIZE']) {
                    $sizeValue = $enum_fields["ID"];
                    break;
                }
            }
            if (empty($sizeValue)) {
                //  echo "???????????? ???? ???????????? " . $offer['Code_77'];
                $logJson[] = [
                    "stat" => "error",
                    "Kod77" => $offer['Code_77'],
                    "message" => '???????????? ???? ????????????'
                ];
                continue;
            }
//?????????????????????? ??????????
            $colorValue = "";
            if (!empty($offer['COLOR'])) {
                $result = $hlDataClass::getList(array(
                    "select" => array("ID", "UF_NAME", "UF_XML_ID"), // ???????? ?????? ??????????????
                    "order" => array(),
                    "filter" => array("UF_NAME" => $offer['COLOR']),
                ));
                if ($resp = $result->fetch()) {
                    $colorValue = $resp["UF_XML_ID"];
                }
            }
            $arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_SIZES_CLOTHES");//IBLOCK_ID ?? ID ?????????????????????? ???????????? ???????? ??????????????, ????. ???????????????? arSelectFields ????????
            $arFilter = array("IBLOCK_ID" => IntVal($IBLOCK_OFFERS_ID), "PROPERTY_KOD77" => $offer['Code_77']);
            $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
            if ($ob = $res->GetNextElement()) {
            } else {
//???????????????? ?????????????????????? ???? ??????????????
//???????????????????? ?????????????????????????? ????????
                $photos = [];
                $i = 0;
                foreach ($offer["PICTURES"] as $foto) {
                    $arrFoto=[];
                    $arrFoto=CFile::MakeFileArray($foto);
                    if ($arrFoto["size"]<100){
                        continue;
                    }
                    $photos["n$i"] = array(
                        "VALUE" => $arrFoto
                    );
                    $i++;
                }
                $imgDetaile=[];
                $imgDetaile=CFile::MakeFileArray($offer['DETAIL_PICTURE']);
                if ($imgDetaile["size"]<100){
                    $imgDetaile=[];
                }
                $arLoadProductArray = array(
                    "IBLOCK_ID" => $IBLOCK_OFFERS_ID, // IBLOCK ???????????????? ??????????????????????
                    "NAME" => $offer["NAME"],
                    "ACTIVE" => "Y",
                    'DETAIL_PICTURE' => $imgDetaile,
                    //'PREVIEW_PICTURE' => CFile::MakeFileArray($offer['DETAIL_PICTURE']),
                    'PROPERTY_VALUES' => array(
                        'CML2_LINK' => $product_id,
                        'SIZES_CLOTHES' => $sizeValue,
                        'ARTNUMBER' => $arr["params"]['ARTICLE'],
                        'KOD77' => $offer['Code_77'],
                        "MORE_PHOTO" => $photos,
                        "COLOR_REF" => $colorValue,
                        //"FRCOLLECTION" => $offer['COLLECTION'],
                        //"ALL_ARTICLE" => $offer['FULL_ARTICLE'],
                    )
                );
                $product_offer_id = $ciBlockElement->Add($arLoadProductArray);
// ???????????????? ???? ????????????
                if (!empty($ciBlockElement->LAST_ERROR)) {
                    //  echo "???????????? ???????????????????? ?????????????????? ??????????????????????: " . $ciBlockElement->LAST_ERROR;
                    $logJson[] = [
                        "stat" => "error",
                        "Kod77" => $offer['Code_77'],
                        "message" => $ciBlockElement->LAST_ERROR
                    ];
                    continue;
                } else {
                    $logJson[] = [
                        "stat" => "success",
                        "Kod77" => $offer['Code_77'],
                    ];
                }
// ?????????????????? ???????????????? ????????????????????
                CCatalogProduct::Add(
                    array(
                        "ID" => $product_offer_id,
                        "QUANTITY" => $offer["QUANTITY"]
                    )
                );
// ?????????????????? ????????
                CPrice::Add(
                    array(
                        "CURRENCY" => "RUB",
                        "PRICE" => $offer["PRICE"],
                        "CATALOG_GROUP_ID" => 1,
                        "PRODUCT_ID" => $product_offer_id,
                        'PROPERTY_VALUES' => array(
                            'CML2_LINK' => $product_id,
                           // 'TP_Code77' => $offer['Code_77'],
                        ),
                    )
                );
//                CPrice::Add(
//                    array(
//                        "CURRENCY" => "RUB",
//                        "PRICE" => $offer["ORT"],
//                        'PROPERTY_VALUES' => array(
//                            'CML2_LINK' => $product_id,
//                           // 'TP_Code77' => $offer['Code_77'],
//                        ),
//                        "CATALOG_GROUP_ID" => 2,
//                        "PRODUCT_ID" => $product_offer_id,
//                    )
//                );
                CPrice::Add(
                    array(
                        "CURRENCY" => "RUB",
                        "PRICE" => $offer["RETAIL"],
                        'PROPERTY_VALUES' => array(
                            'CML2_LINK' => $product_id,
                          //  'TP_Code77' => $offer['RETAIL'],
                        ),
                        "CATALOG_GROUP_ID" => 3,
                        "PRODUCT_ID" => $product_offer_id,
                    )
                );
//                CPrice::Add(
//                    array(
//                        "CURRENCY" => "RUB",
//                        "PRICE" => $offer["PRICE"],
//                        'PROPERTY_VALUES' => array(
//                            'CML2_LINK' => $product_id,
//                       //     'TP_Code77' => $offer['RETAIL'],
//                        ),
//                        "CATALOG_GROUP_ID" => 4,
//                        "PRODUCT_ID" => $product_offer_id,
//                    )
 //               );
            }
        }
    }
}
$Json = \Bitrix\Main\Web\Json::encode($logJson);
echo $Json;
$today = date("Y-m-d H:i:s");
$JsonLog = "$today
$Json
";
file_put_contents("odin-s-log.txt", $JsonLog, FILE_APPEND);?>