<?
/**
 * @var CMain $APPLICATION
 * @var CUser $USER
 */
global $currentUrl;
use Matrix\Main\Page\Asset;

$currentUrl = $APPLICATION->GetCurPage(true);

echo "<!doctype html>";
echo "<html lang=\"" . LANGUAGE_ID . "\">";
echo "<head>";

Asset::getInstance()->addString("<meta charset=\"UTF-8\">");
Asset::getInstance()->addString("<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">");
Asset::getInstance()->addString("<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">");

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.slim.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/matrix.js");

echo "<title>";
$APPLICATION->ShowTitle();
echo "</title>";
$APPLICATION->ShowCSS();
$APPLICATION->ShowHeadStrings();
echo "</head>";
echo "<body>";

$APPLICATION->IncludeComponent("matrix:admin.header", null, null);
$APPLICATION->IncludeComponent("matrix:admin.page", null, null);
?>
