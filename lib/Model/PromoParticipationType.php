<?php
/**
 * PromoParticipationType
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
 * PromoParticipationType Class Doc Comment
 *
 * @category Class
 * @description Какие акции вернутся:  * &#x60;PARTICIPATING_NOW&#x60; — текущие и будущие акции продавца.  * &#x60;PARTICIPATED&#x60; — завершенные акции продавца за последний год. Если за год их было меньше 15, в ответе придут 15 последних акций за все время.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PromoParticipationType
{
    /**
     * Possible values of this enum
     */
    public const PARTICIPATING_NOW = 'PARTICIPATING_NOW';

    public const PARTICIPATED = 'PARTICIPATED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PARTICIPATING_NOW,
            self::PARTICIPATED
        ];
    }
}


