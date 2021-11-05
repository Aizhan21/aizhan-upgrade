<?php
namespace Page\Acceptance;

/**
 * Главная страница automationpractice
 */
class MainPage
{
    /**
     * Урл главной страницы
     */
    public static $URL = '';

    /**
     * Локатор товара
     */
    public static $firstProductCard = '//*[@id="homefeatured"]/li[%s]';

    /**
     * Локатор кнопки "quick view"
     */
    public static $quickViewButton = '//*[@id="homefeatured"]/li[%s]//*[@class="quick-view"]';

    /**
     * Локатор iframe
     */
    public static $iframe = '//*[@class="fancybox-iframe"]';

    /**
     * Локатор кнопки добавления в избранное
     */
    public static $addToFavouriteButton = '//*[@id="wishlist_button"]';

    /**
     * Локатор кнопки закрытия модалки об успешном добавлении в избранное
     */
    public static $closeSuccessButton = '//*[@id="product"]//a[@title="Close"]';

    /**
     * Локатор кнопки закрытия iframe
     */
    public static $iframeCloseButton = '//*[@id="index"]//a[@title="Close"]';
    
    /**
     * Локатор кнопки перехода на страницу личного кабинета
     */
    public static $accountButton = '//*[@class="account"]';
}
