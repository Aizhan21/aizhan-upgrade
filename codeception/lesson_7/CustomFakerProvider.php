<?php
namespace Helper;

use Faker\Provider\Base;

/**
 * Предоставляет кастомные рандомные данные
 */
class CustomFakerProvider extends Base
{
    /**
     * Хранит казахстанские коды номеров
     */
    protected $phoneCodes = [
        '771',
        '775',
        '701',
        '702',
        '776'
    ];

    /**
     * Возвращает рандомный казахстанский номер
     */
    public function getPhoneKz()
    {
        return sprintf(
            '7%d%d%d',
            $this->phoneCodes[array_rand($this->phoneCodes)],
            random_int(100, 999),
            random_int(10, 99),
            random_int(10, 99)
        );
    }

    /**
     * Хранит номера банковских карт
     */
    protected $cardNumbers = [
        '424242424242',
        '707070707070',
        '808080808080',
        '505050505050',
        '212121212121'
    ];

    /**
     * Возвращает рандомный банковский номер
     */
    public function getCardNumber()
    {
        return sprintf(
            '%d',
            $this->cardNumbers[array_rand($this->cardNumbers)]
        );
    }

    /**
     * Возвращает рандомный ccv-код
     */
    public function getCcv()
    {
        return sprintf(
            '%d',
            random_int(100, 999)
        );
    }
}
