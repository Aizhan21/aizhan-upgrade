<?php
namespace Step\Acceptance;

use Page\Acceptance\MainPage;
use Page\Acceptance\SignInPage;

/**
 * Класс добавления товаров в избранное
 */
class ShopStep extends \AcceptanceTester
{
    public const PRODUCTS_NMB = 2;

    /**
     * Добавляет товары в избранное
     */
    public function addProductToMyWishlist() {
        $I = $this;

        for ($i = 1; $i <= self::PRODUCTS_NMB; $i++){
            $I->waitForElement(sprintf(MainPage::$firstProductCard, $i));
            $I->moveMouseOver(sprintf(MainPage::$firstProductCard, $i));
            $I->wait(3);
            $I->click(sprintf(MainPage::$quickViewButton, $i));
            $I->wait(3);
            $I->switchToIFrame(MainPage::$iframe);
            $I->click(MainPage::$addToFavouriteButton);
            $I->waitForElement(MainPage::$closeSuccessButton);
            $I->click(MainPage::$closeSuccessButton);
            $I->switchToWindow();
            $I->click(MainPage::$iframeCloseButton);
        }
    }
}
