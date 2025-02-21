<?php
/**
 * ShipmentActionType
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
 * ShipmentActionType Class Doc Comment
 *
 * @category Class
 * @description Действия с отгрузкой:  * &#x60;CONFIRM&#x60; — подтвердить отгрузку. * &#x60;DOWNLOAD_ACT&#x60; — скачать акт приема-передачи отгрузки. * &#x60;DOWNLOAD_INBOUND_ACT&#x60; — скачать список принятых заказов. * &#x60;DOWNLOAD_DISCREPANCY_ACT&#x60; — скачать акт расхождений. * &#x60;CHANGE_PALLETS_COUNT&#x60; — указать количество палет.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentActionType
{
    /**
     * Possible values of this enum
     */
    public const CONFIRM = 'CONFIRM';

    public const DOWNLOAD_ACT = 'DOWNLOAD_ACT';

    public const DOWNLOAD_INBOUND_ACT = 'DOWNLOAD_INBOUND_ACT';

    public const DOWNLOAD_DISCREPANCY_ACT = 'DOWNLOAD_DISCREPANCY_ACT';

    public const CHANGE_PALLETS_COUNT = 'CHANGE_PALLETS_COUNT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONFIRM,
            self::DOWNLOAD_ACT,
            self::DOWNLOAD_INBOUND_ACT,
            self::DOWNLOAD_DISCREPANCY_ACT,
            self::CHANGE_PALLETS_COUNT
        ];
    }
}


