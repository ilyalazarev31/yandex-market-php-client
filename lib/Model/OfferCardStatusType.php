<?php
/**
 * OfferCardStatusType
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
 * OfferCardStatusType Class Doc Comment
 *
 * @category Class
 * @description Статус карточки товара:  * &#x60;HAS_CARD_CAN_NOT_UPDATE&#x60; — Карточка Маркета. * &#x60;HAS_CARD_CAN_UPDATE&#x60; — Можно дополнить. * &#x60;HAS_CARD_CAN_UPDATE_ERRORS&#x60; — Изменения не приняты. * &#x60;HAS_CARD_CAN_UPDATE_PROCESSING&#x60; — Изменения на проверке. * &#x60;NO_CARD_NEED_CONTENT&#x60; — Создайте карточку. * &#x60;NO_CARD_MARKET_WILL_CREATE&#x60; — Создаст Маркет. * &#x60;NO_CARD_ERRORS&#x60; — Не создана из-за ошибки. * &#x60;NO_CARD_PROCESSING&#x60; — Проверяем данные. * &#x60;NO_CARD_ADD_TO_CAMPAIGN&#x60; — Разместите товар в магазине.  [Что обозначает каждый из статусов](https://yandex.ru/support/marketplace/assortment/content/statuses.html)
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferCardStatusType
{
    /**
     * Possible values of this enum
     */
    public const HAS_CARD_CAN_NOT_UPDATE = 'HAS_CARD_CAN_NOT_UPDATE';

    public const HAS_CARD_CAN_UPDATE = 'HAS_CARD_CAN_UPDATE';

    public const HAS_CARD_CAN_UPDATE_ERRORS = 'HAS_CARD_CAN_UPDATE_ERRORS';

    public const HAS_CARD_CAN_UPDATE_PROCESSING = 'HAS_CARD_CAN_UPDATE_PROCESSING';

    public const NO_CARD_NEED_CONTENT = 'NO_CARD_NEED_CONTENT';

    public const NO_CARD_MARKET_WILL_CREATE = 'NO_CARD_MARKET_WILL_CREATE';

    public const NO_CARD_ERRORS = 'NO_CARD_ERRORS';

    public const NO_CARD_PROCESSING = 'NO_CARD_PROCESSING';

    public const NO_CARD_ADD_TO_CAMPAIGN = 'NO_CARD_ADD_TO_CAMPAIGN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HAS_CARD_CAN_NOT_UPDATE,
            self::HAS_CARD_CAN_UPDATE,
            self::HAS_CARD_CAN_UPDATE_ERRORS,
            self::HAS_CARD_CAN_UPDATE_PROCESSING,
            self::NO_CARD_NEED_CONTENT,
            self::NO_CARD_MARKET_WILL_CREATE,
            self::NO_CARD_ERRORS,
            self::NO_CARD_PROCESSING,
            self::NO_CARD_ADD_TO_CAMPAIGN
        ];
    }
}


