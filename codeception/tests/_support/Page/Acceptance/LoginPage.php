<?php
namespace Page\Acceptance;
/**
 * Страница авторизации
 */

class LoginPage
{
    /**
     * Стандартный юзернейм для неуспешной авторизации
     */
    public const USERNAME = 'locked_out_user';

    /**
     * Стандартный пароль для успешной авторизации
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * URL страницы авторизации
     */
    public static $URL = 'https://www.saucedemo.com/';

    /**
     * Селектор поля ввода логина
     */
    public static $userNameInput = '#user-name';

    /**
     * Селектор поля ввода пароля
     */
    public static $passwordInput = '#password';

    /**
     * Селектор кнопки авторизации
     */
    public static $loginButton = '#login-button';

    /**
     * Селектор блока с уведомлением об ошибке
     */
    public static $error = '[data-test="error"]';

    /**
     * Селектор кнопки закрытия блока с уведомлением об ошибке
     */
    public static $errorButton = '.error-button';

    /**
     * Метод заполнения поля логином 
     */
    public function FillUserNameInput()
    {
        $this->acceptanceTester->fillField(self::$userNameInput, self::USERNAME);
        return $this;
    }

    /**
     * Метод заполнения поля паролем 
     */
    public function FillPasswordInput()
    {
        $this->acceptanceTester->fillField(self::$passwordInput, self::PASSWORD);
        return $this;
    }

    /**
     * Метод клика на кнопку авторизации
     */
    public function ClickLoginButton()
    {
        $this->acceptanceTester->click(self::$loginButton);
        return $this;
    }

    /**
     * Метод проверки отображения ошибки
     */
    public function SeeError()
    {
        $this->acceptanceTester->seeElement(LoginPage::$error);
        return $this;
    }

    /**
     * Метод клика на кнопку закрытия блока об ошибке
     */
    public function ClickErrorCloseButton()
    {
        $this->acceptanceTester->click(self::$errorButton);
        return $this;
    }

    /**
     * Метод проверки, что блока об ошибке нет на стр
     */
    public function DontSeeError()
    {
        $this->acceptanceTester->dontSeeElement(LoginPage::$error);
    }

    /**
     * Объект тестера
     */
    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
