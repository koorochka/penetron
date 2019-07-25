<?
use Matrix\Main\Application;

class SystemAuthFormComponent extends CMatrixComponent
{
    /**
     * Execute
     */
    public function executeComponent()
    {
        global $APPLICATION, $USER;

        $request = Application::getInstance()->getContext()->getRequest();
        if($request->isPost()){
            $this->arResult["USER_LOGIN"] = $request->getPost("USER_LOGIN");
            $this->arResult["USER_PASSWORD"] = $request->getPost("USER_PASSWORD");
        }

        if($APPLICATION->NeedCAPTHAForLogin($this->arResult["USER_LOGIN"]))
            $this->arResult["CAPTCHA_CODE"] = $APPLICATION->CaptchaGetCode();
        else
            $this->arResult["CAPTCHA_CODE"] = false;

        if(isset($APPLICATION->arAuthResult) && $APPLICATION->arAuthResult !== true)
            $this->arResult['ERROR_MESSAGE'] = $APPLICATION->arAuthResult;

        $this->includeComponentTemplate();
    }
}
?>