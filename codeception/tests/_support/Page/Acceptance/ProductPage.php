<?php
namespace Page\Acceptance;

/**
 * Страница товаров
 */

class ProductPage
{
    /**
     * Атрибут, указывающий, что элемент по умолчанию выбран на стр 
     */
    public const SELECTED = ['class' => 'selected'];

    /**
     * Главная страница товаров
     */
    public static $URL = 'http://automationpractice.com/index.php';

    /**
     * Xpath кнопки товара "Dresses"
     */
    public static $dressesButton = '//*[@id="block_top_menu"]/ul/li[2]';

    /**
     * Xpath кнопки товара "Summer Dresses"
     */
    public static $summerDressesButton = '//*[@id="block_top_menu"]/ul/li[2]/ul/li[3]/a';

    /**
     * Xpath кнопки раскладки "Grid" - товары в виде сетки
     */
    public static $grid = '//*[@id="grid"]';

    /**
     * Xpath элемента, указывающий, что товары отображены в виде сетки
     */
    public static $productsGrid = "//ul[contains(@class,'grid')]";

    /**
     * Xpath кнопки раскладки "List" - товары в виде списка
     */
    public static $list = '//*[@id="list"]';

    /**
     * Xpath элемента, указывающий, что товары отображены в виде списка
     */
    public static $productsList = "//ul[contains(@class,'list')]";
    

    /**
     * Метод наведения мышкой на кнопку "Dresses"
     */
    public function HoverDresses()
    {
        $this->acceptanceTester->moveMouseOver(self::$dressesButton);
        return $this;
    }

    /**
     * Метод клика на кнопку "Summer Dresses"
     */
    public function ClickSummerDresses()
    {
        $this->acceptanceTester->click(ProductPage::$summerDressesButton);
        return $this;
    }

    /**
     * Метод проверки, что кнопка "Grid" выбрана по умолчанию
     */
    public function SeeGridDefault()
    {
        $this->acceptanceTester->seeElement(ProductPage::$grid, ProductPage::SELECTED);
        return $this;
    }

    /**
     * Метод проверки, что товары отображены в виде сетки = grid
     */
    public function ProductsShownGrid()
    {
        $this->acceptanceTester->seeElement(ProductPage::$productsGrid);
        return $this;
    }

    /**
     * Метод клика на кнопку "List"
     */
    public function ClickList()
    {
        $this->acceptanceTester->click(ProductPage::$list);
        return $this;
    }

    /**
     * Метод проверки, что товары отображены в виде списка = list
     */
    public function ProductsShownList()
    {
        $this->acceptanceTester->seeElement(ProductPage::$productsList);
    }

   /**
     * Объект тестера
     */
    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
