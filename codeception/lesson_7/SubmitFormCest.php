<?php

use Faker\Factory;
use Page\Acceptance\FormPage;
use Helper\CustomFakerProvider;

/**
 * Класс для проверки успешной отправки формы
 * @group test1
 */
class SubmitFormCest
{
    /**
     * Заполняет поля формы и успешно сабмитит
     */
    public function CheckFormSuccesSubmit(AcceptanceTester $I)
    {
        $formPage = New FormPage($I);
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));

        $name = $faker->firstName;
        $surname = $faker->lastName;
        $email = $faker->email;
        $phone = $faker->getPhoneKz();
        $address = $faker->address;
        $city = $faker->city;
        $region = $faker->region;
        $zipCode = $faker->postCode;
        $nameCard = $faker->firstName;
        $surnameCard = $faker->lastName;
        $cardNumber = $faker->getCardNumber();
        $ccvCode = $faker->getCcv();
        $billingAddress = $faker->address;
        $cardCity = $faker->city;
        $cardRegion = $faker->region;
        $cardZipCode = $faker->postCode;
    
        $I->amOnPage('');
        $I->fillField(FormPage::$firstName, $name);
        $I->fillField(FormPage::$lastName, $surname);
        $I->fillField(FormPage::$email, $email);
        $I->fillField(FormPage::$phoneNumber, $phone);
        $I->fillField(FormPage::$address, $address);
        $I->fillField(FormPage::$city, $city);
        $I->fillField(FormPage::$state, $region);
        $I->fillField(FormPage::$zipCode, $zipCode);
        $I->click(FormPage::$creditCardButton);
        $I->fillField(FormPage::$firstNameCard, $nameCard);
        $I->fillField(FormPage::$lastNameCard, $surnameCard);
        $I->fillField(FormPage::$cardNumber, $cardNumber);
        $I->fillField(FormPage::$ccv, $ccvCode);
        $formPage->getMonth();
        $formPage->getYear();
        $I->fillField(FormPage::$billingAddress, $billingAddress);
        $I->fillField(FormPage::$cardCity, $cardCity);
        $I->fillField(FormPage::$cardState, $cardRegion);
        $I->fillField(FormPage::$cardZipCode, $cardZipCode);
        $formPage->getCardCountry();
        $I->click(FormPage::$submitButton);
        $I->waitForText('Good job');
    }
}