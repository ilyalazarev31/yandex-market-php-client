<?php
/**
 * OrderVatTypeTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace YandexMarketApi\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * OrderVatTypeTest Class Doc Comment
 *
 * @category    Class
 * @description Ставка налога на добавленную стоимость (НДС) на услугу доставки заказа:  * &#x60;NO_VAT&#x60; — НДС не облагается, используется только для отдельных видов услуг.  * &#x60;VAT_0&#x60; — НДС 0%. Например, используется при продаже товаров, вывезенных в таможенной процедуре экспорта, или при оказании услуг по международной перевозке товаров.  * &#x60;VAT_10_110&#x60; — НДС 10/110. Расчетная ставка НДС 10%, применяется только для случая предоплаты.  * &#x60;VAT_20_120&#x60; — НДС 20/120. Расчетная ставка НДС 20%, применяется только для случая предоплаты.  * &#x60;VAT_18_118&#x60; — НДС 18/118. Ставка использовалась до 1 января 2019 года.  Используется только совместно с параметром &#x60;payment-method&#x3D;YANDEX&#x60;.
 * @package     YandexMarketApi
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class OrderVatTypeTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "OrderVatType"
     */
    public function testOrderVatType()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
