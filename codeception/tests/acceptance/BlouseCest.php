<?php

class BlouseCest
{
    /*
        Проверка открытия pop-up'а товара и наличия в нем его названия
    */


    public function checkPopUp(AcceptanceTester $I)
    {
        //Поиск товара
        $I->amOnPage('');
        $I->waitForElement('//*[@id="search_query_top"]');
        $I->fillField('//*[@id="search_query_top"]', 'blouse');
        $I->pressKey('//*[@id="search_query_top"]', \Facebook\WebDriver\WebDriverKeys::ENTER);

        //Открытие поп-апа
        $I->waitForElement('//*[@id="center_column"]//div[@class="product-container"]');
        $I->moveMouseOver('//*[@id="center_column"]//img');
        $I->waitForElement('//*[@class="quick-view"]', 30);
        $I->click('//*[@class="quick-view"]');

        //Проверка наличия названия в поп-апе
        $I->switchToIFrame('//iframe');
        $I->waitForElement('//*[@id="product"]//h1[@itemprop="name"]');
        codecept_debug($I->grabTextFrom('//*[@id="product"]//h1[@itemprop="name"]'));
    }
} 