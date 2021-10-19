<?php

class PrintedDressCest
{
    /*
        Проверка поиска по тексту
    */


    public function searchByText(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('//input[@id="search_query_top"]');
        $I->fillField('//input[@id="search_query_top"]', 'printed dress');
        $I->seeElement('//*[@id="searchbox"]/button');
        $I->click('//*[@id="searchbox"]/button');
        $I->seeNumberOfElements('//*[@class="product-container"]', 5);
        
    }
} 