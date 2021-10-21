<?php

use Page\Acceptance\LoginPage;

/**
 * Класс для проверки закрытия блока об ошибке при неуспешной авторизации
 */

class ErrorAlertCest
{
    /**
     * Проверяет закрытие блока об ошибке при неуспешной авторизации
     */

    public function CheckErrorAlertCloseCest(AcceptanceTester $I)
    {
        $loginPage = New LoginPage($I);

        $I->amOnPage(LoginPage::$URL);
        $loginPage->FillUserNameInput()
                ->FillPasswordInput()
                ->ClickLoginButton()
                ->SeeError()
                ->ClickErrorCloseButton()
                ->DontSeeError(); //Проверка того, что на стр нет блока с ошибкой

    }
}