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

   // if ("ЕВТ 3078"!=$itemProd["good"]["article"]){continue;}
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
                    "COLOR" => $itemOffers["good"]["color"],
                    "REAL_COLOR" => $itemOffers["good"]["realColor"],
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
            "CODE" => "",
            "BRAND" => $itemProd["good"]["brand"],
            //"HIT" => "Хит, Советуем",
            "ARTICLE" => $itemProd["good"]["article"],
            "COMPOUND" => $itemProd["good"]["content"],
            "SEASON" => $itemProd["good"]["season"],
            "POLOTNO" => $itemProd["good"]["canvas"],
            // "BEZ_SHOV" => true,
            // "UTEPLITEL" => "Перо",
            "YEAR" => $itemProd["good"]["year"],
            "COLLECTION" => $itemProd["good"]["collection"],
            "COUNTRY" => $itemProd["good"]["country"],
        ],
        "offers" => $offers


    ];
}

print_r($arrProd);