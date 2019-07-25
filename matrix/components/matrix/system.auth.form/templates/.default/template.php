<?
/**
 * @var array $arResult
 * @var array $arParams
 */
use Matrix\Main\Localization\Loc;
Loc::loadLanguageFile(__FILE__);
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<form class="form-signin"
      action="<?=$arParams["ACTION"]?>"
      method="post">

    <?if(is_array($arResult['ERROR_MESSAGE'])):?>
        <div class="alert <?=$arResult['ERROR_MESSAGE']["TYPE"] == "ERROR" ? "alert-danger" : "alert-warning"?>">
            <?=$arResult['ERROR_MESSAGE']["MESSAGE"]?>
        </div>
    <?endif;?>

    <input type="hidden"
           name="AUTH_FORM"
           value="Y">
    <input type="hidden"
           name="TYPE"
           value="AUTH">

    <div class="text-center mb-4">
        <img class="mb-4"
             src="<?=SITE_TEMPLATE_PATH?>/images/home.svg"
             alt="<?=Loc::getMessage("AUTH_TITLE")?>"
             title="<?=Loc::getMessage("AUTH_TITLE")?>"
             width="72"
             height="72" />
        <h1 class="h3 mb-3 font-weight-normal"><?=Loc::getMessage("AUTH_TITLE")?></h1>
        <p><?=Loc::getMessage("AUTH_DESCRIPTION")?></p>
    </div>

    <div class="form-label-group">
        <input type="email"
               id="USER_LOGIN"
               name="USER_LOGIN"
               class="form-control"
               placeholder="<?=Loc::getMessage("AUTH_EMAIL_PLACEHOLDER")?>"
               required=""
               autofocus="">
        <label for="inputEmail"><?=Loc::getMessage("AUTH_EMAIL")?></label>
    </div>

    <div class="form-label-group">
        <input type="password"
               id="USER_PASSWORD"
               name="USER_PASSWORD"
               class="form-control"
               placeholder="<?=Loc::getMessage("AUTH_PASSWORD_PLACEHOLDER")?>"
               required="">
        <label for="inputPassword"><?=Loc::getMessage("AUTH_PASSWORD")?></label>
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox"
                   name="USER_REMEMBER"
                   value="Y">
            <?=Loc::getMessage("AUTH_REMEMBER_ME")?>
        </label>
    </div>

    <button class="btn btn-lg btn-primary btn-block"
            name="Login"
            type="submit"><?=Loc::getMessage("AUTH_LOGIN_BUTTON")?></button>

    <p class="mt-5 mb-3 text-muted text-center">
        <?$APPLICATION->IncludeComponent("koorochka:copyrights", null, null)?>
    </p>

</form>