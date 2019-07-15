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
?>

<header id="header">
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>
</header>

<div class="container-fluid">

    <div class="row">
        <div id="sidebur-activity"
             class="col-md-2 d-none d-md-block bg-warning">
            <?for($i=0; $i< 3; $i++):?>
                <?d("sidebur")?>
            <?endfor;?>



        </div>
        <main role="main"
              class="col-md-9 ml-sm-auto col-lg-10 px-4"
              id="main-activity">

            <?for($i=0; $i< 6; $i++):?>
                <?d("Main")?>
            <?endfor;?>


        </main>
    </div>
</div>