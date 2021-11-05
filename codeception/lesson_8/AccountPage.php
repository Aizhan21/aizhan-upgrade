<?php
namespace Page\Acceptance;
 
/**
 * Локаторы страниц: авторизации, личного кабинета, избранных (записала все в одну, чтобы не плодить Page'ы)
 */
class AccountPage 
{
     /**
     * Логин юзера для успешной авторизации
     */
    public const EMAIL = 'test_testov98@mail.ru';

    /**
     * Пароль юзера для успешной авторизации
     */
    public const PASSWORD = '123789';

    /**
     * URL страницы авторизации
     */
    public static $URL = '?controller=authentication&back=my-account';

    /**
     * Локатор поля логин
     */
    public static $emailField = '//*[@id="email"]';

    /**
     * Локатор поля пароля
     */
    public static $passwordField = '//*[@id="passwd"]';

    /**
     * Локатор кнопки авторизации
     */
    public static $signInButton = '//*[@id="SubmitLogin"]';

    /**
     * Локатор кнопки возврата на главную страницу
     */
    public static $homeButton = '//*[@title="Home"]';

    /**
     * Локатор кнопки перехода на страницу избранных
     */
    public static $myWishlistButton = '//*[@title="My wishlists"]';

    /**
     * Локатор кол-ва товаров, добавленных в избранное
     */
    public static $productsNum = '//td[2]';

    /**
     * Локатор кнопки удаления товаров, добавленных в избранное
     */
    public static $deleteWishlistButton = '//*[@class="icon-remove"]';

    /**
     * Локатор кнопки логаута
     */
    public static $signOutButton = '//nav//*[@class="logout"]';
}
