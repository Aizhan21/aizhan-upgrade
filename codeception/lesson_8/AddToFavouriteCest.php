<?php

use Page\Acceptance\MainPage;
use Page\Acceptance\AccountPage;
use Step\Acceptance\ShopStep;

/**
 * Класс для проверки добавления товаров в избранное
 * @group t1
 */
class AddToFavouriteCest
{
    /**
     * Авторизуется успешно
     */
    protected function signIn(AcceptanceTester $I)
    {
        $I->amOnPage(AccountPage::$URL);
        $I->fillField(AccountPage::$emailField, AccountPage::EMAIL);
        $I->fillField(AccountPage::$passwordField, AccountPage::PASSWORD);
        $I->click(AccountPage::$signInButton);
        $I->click(AccountPage::$homeButton);
    }

    /**
     * Чистит данные и логаутится
     */
    protected function clearData(AcceptanceTester $I)
    {
        $I->click(AccountPage::$deleteWishlistButton);
        $I->acceptPopup();
        $I->click(AccountPage::$signOutButton);
    }

    /**
     * Проверяет добавление товаров в избранное
     * @before signIn
     * @after clearData
     */
    public function checkProductAddingToFavourite(\Step\Acceptance\ShopStep $I)
    {
        $I->addProductToMyWishlist();
        $I->waitForElementVisible(MainPage::$accountButton);
        $I->click(MainPage::$accountButton);
        $I->click(AccountPage::$myWishlistButton);
        $I->waitForElementVisible(AccountPage::$productsNum);
        $productAmount = $I->grabTextFrom(AccountPage::$productsNum);
        $I->assertEquals($productAmount, ShopStep::PRODUCTS_NMB, "checks that products' amount is correct");
    }
}