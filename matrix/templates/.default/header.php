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

    <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top shadow">
        <a class="navbar-brand" href="#">penetron</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample06">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown06">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

        </div>
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