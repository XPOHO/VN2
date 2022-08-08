<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
echo 1;
$request = \Bitrix\Main\Application::getInstance()->getContext()->getRequest();
CModule::IncludeModule("iblock");
CModule::IncludeModule("catalog");
CModule::IncludeModule('sale');
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;


function translit($s)
{
    $s = (string)$s; // преобразуем в строковое значение
    $s = trim($s); // убираем пробелы в начале и конце строки
    $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
    $s = strtr($s, array('а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'j', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', 'ъ' => '', 'ь' => ''));
    return $s; // возвращаем результат
}

CModule::IncludeModule('highloadblock');
$json = file_get_contents("VERY NEAT (1).Json");
$arrAll = \Bitrix\Main\Web\Json::decode($json);
echo "<pre>";
foreach ($arrAll["goods"] as $itemProd) {
    if (!empty($itemProd["good"]["color"])) {
        $arrColor[$itemProd["good"]["color"]] = true;
    }
    if (!empty($itemProd["good"]["realColor"])) {
        $arrRealColor[$itemProd["good"]["realColor"]] = true;
    }
}

print_r($arrColor);
print_r($arrRealColor);
foreach ($arrRealColor as $color=>$item){



    $hlbl = 2; // Указываем ID нашего highloadblock блока к которому будет делать запросы.
    $hlblock = HL\HighloadBlockTable::getById($hlbl)->fetch();

    $entity = HL\HighloadBlockTable::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();

    $xml_id=translit($color);

    // Массив полей для добавления
    $data = array(
        "UF_NAME"=>$color,
        "UF_XML_ID"=>$xml_id
    );

    $result = $entity_data_class::add($data);

}