<?php
/**
 * OrderSubsidyType
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
 * Do not edit the class manually.
 */

namespace YandexMarketApi\Model;
use \YandexMarketApi\ObjectSerializer;

/**
 * OrderSubsidyType Class Doc Comment
 *
 * @category Class
 * @description Тип субсидии.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderSubsidyType
{
    /**
     * Possible values of this enum
     */
    public const NOT_SUBSIDY = 'NOT_SUBSIDY';

    public const SBER_SPASIBO = 'SBER_SPASIBO';

    public const YANDEX_CASHBACK = 'YANDEX_CASHBACK';

    public const SUBSIDY = 'SUBSIDY';
}


