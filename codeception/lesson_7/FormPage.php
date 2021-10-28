<?php
namespace Page\Acceptance;

/**
 * Страница формы
 */
class FormPage
{
    /**
     * Объект тестера
     */
    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;
    
    /**
     * URL страницы формы 
     */
    public static $URL = 'https://prostochizh.github.io/form/';

    /**
     * Локатор поля имени 
     */
    public static $firstName = '//*[@id="firstName"]';

    /**
     * Локатор поля фамилии 
     */
    public static $lastName = '//*[@id="lastName"]';

    /**
     * Локатор поля email
     */
    public static $email = '//*[@type="email"]';

    /**
     * Локатор поля номера телефона
     */
    public static $phoneNumber = '//*[@id="phoneNumber"]';

    /**
     * Локатор поля адреса
     */
    public static $address = '//*[@id="address"]';

    /**
     * Локатор поля города
     */
    public static $city = '//*[@id="city"]';

    /**
     * Локатор поля региона
     */
    public static $state = '//*[@id="state"]';

    /**
     * Локатор поля почтового индекса
     */
    public static $zipCode = '//*[@id="postal"]';

    /**
     * Локатор кнопки выбора оплаты посредством кредитной карты
     */
    public static $creditCardButton = '//*[@value="credit"]';

    /**
     * Локатор поля имени на кредитной карте
     */
    public static $firstNameCard = '//*[@id="input_32_cc_firstName"]';

    /**
     * Локатор поля фамилии на кредитной карте
     */
    public static $lastNameCard = '//*[@id="input_32_cc_lastName"]';

    /**
     * Локатор поля номера кредитной карты
     */
    public static $cardNumber = '//*[@id="input_32_cc_number"]';

    /**
     * Локатор поля CCV-кода кредитной карты
     */
    public static $ccv = '//*[@id="input_32_cc_ccv"]';

    /**
     * Локатор select-поля месяц для карты
     */
    public static $monthSelect = '//*[@id="input_32_cc_exp_month"]';

    /**
     * Локатор всех значений select-поля месяц для карты
     */
    public static $monthOptions = '//*[@id="input_32_cc_exp_month"]//following-sibling::option[2]';

    /**
     * Локатор select-поля год для карты
     */
    public static $yearSelect = '//*[@id="input_32_cc_exp_year"]';

    /**
     * Локатор значений select-поля год для карты
     */
    public static $yearOptions = '//*[@id="input_32_cc_exp_year"]//following-sibling::option[2]';

    /**
     * Локатор поля адреса для карты
     */
    public static $billingAddress = '//*[@id="input_32_addr_line1"]';

    /**
     * Локатор поля город для карты
     */
    public static $cardCity = '//*[@id="input_32_city"]';

    /**
     * Локатор поля регион для карты
     */
    public static $cardState = '//*[@id="input_32_state"]';

    /**
     * Локатор поля почтового индекса для карты
     */
    public static $cardZipCode = '//*[@id="input_32_postal"]';

    /**
     * Локатор select-поля страны для карты
     */
    public static $countrySelect = '//*[@id="input_32_country"]';

    /**
     * Локатор значений select-поля страны для карты
     */
    public static $countryOptions = '//*[@id="input_32_country"]//following-sibling::option[2]';

    /**
     * Локатор поля кнопки отправки формы
     */
    public static $submitButton = '//*[@type="submit"]';

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Выбирает рандомный месяц из значений селект-поля
     */
    public function getMonth()
    {
        $month = $this->acceptanceTester->grabMultiple(self::$monthOptions, 'value');
        $this->acceptanceTester->selectOption(self::$monthSelect, $month[array_rand($month)]);
    }

    /**
     * Выбирает рандомный год из значений селект-поля
     */
    public function getYear()
    {
        $year = $this->acceptanceTester->grabMultiple(self::$yearOptions, 'value');
        $this->acceptanceTester->selectOption(self::$yearSelect, $year[array_rand($year)]);
    }

    /**
     * Выбирает рандомную страну из значений селект-поля
     */
    public function getCardCountry()
    {
        $cardCountry = $this->acceptanceTester->grabMultiple(self::$countryOptions, 'value');
        $this->acceptanceTester->selectOption(self::$countrySelect, $cardCountry[array_rand($cardCountry)]);
    }
}