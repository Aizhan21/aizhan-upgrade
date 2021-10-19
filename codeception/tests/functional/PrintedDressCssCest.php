<?php

class PrintedDressCest
{
    /*
        Проверка поиска по тексту
    */


    public function searchByText(FunctionalTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'printed dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('.product-container', 5);
        
    }
} 