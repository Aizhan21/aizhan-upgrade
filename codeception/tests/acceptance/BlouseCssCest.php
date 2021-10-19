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
        $I->waitForElement('#search_query_top');
        $I->fillField('#search_query_top', 'blouse');
        $I->pressKey('#search_query_top', \Facebook\WebDriver\WebDriverKeys::ENTER);

        //Открытие поп-апа
        $I->waitForElement('#center_column img');
        $I->moveMouseOver('#center_column img');
        $I->waitForElement('a.quick-view', 30);
        $I->click('a.quick-view');

        //Проверка наличия названия в поп-апе
        $I->switchToIFrame('iframe');
        $I->waitForElement('#product h1[itemprop="name"]');
        codecept_debug($I->grabTextFrom('#product h1[itemprop="name"]'));
    }
} 