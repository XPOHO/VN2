<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
echo 1;
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
CModule::IncludeModule("iblock");
CModule::IncludeModule("catalog");
CModule::IncludeModule('sale');
CModule::IncludeModule('highloadblock');


$json=file_get_contents("VERY NEAT (1).Json");

$arrAll = \Bitrix\Main\Web\Json::decode($json);

echo "<pre>";




foreach ($arrAll["goods"] as $itemProd){

    foreach ($itemProd["good"]["sizes"] as $sizeProd){

        $arSize[$sizeProd["size"]["value"]]=1;

    }

}

print_r($arSize);

