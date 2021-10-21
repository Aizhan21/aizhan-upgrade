<?php

use Page\Acceptance\ProductPage;

/**
 * Класс для проверки смены раскладки отображения товаров 
 */

class ProductViewCest
{
    /**
     * Проверяет смену раскладки отображения товаров в одной категории
     */

    public function ChangeProductsViewCest(AcceptanceTester $I)
    {
        $productPage = New ProductPage($I);

        $I->amOnPage(ProductPage::$URL);
        $productPage->HoverDresses()
                    ->ClickSummerDresses()
                    ->SeeGridDefault()
                    ->ProductsShownGrid()
                    ->ClickList()
                    ->ProductsShownList(); //Проверка того, что товары отображены в виде списка

    }
}