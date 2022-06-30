<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$APPLICATION->SetTitle("very neat");
$APPLICATION->ShowHead();
use Bitrix\Main\Page\Asset;

$APPLICATION->ShowPanel();
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/css.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/js.js");
Asset::getInstance()->addString("<meta>");
Asset::getInstance()->addString("<link>");
CJSCore::Init("jquery");