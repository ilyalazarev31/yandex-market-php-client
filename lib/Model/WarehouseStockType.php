<?php
/**
 * WarehouseStockType
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
 * WarehouseStockType Class Doc Comment
 *
 * @category Class
 * @description Тип остатков товаров на складе:  * &#x60;AVAILABLE&#x60; (соответствует типу «Доступный к заказу» в отчете «Остатки на складе» в кабинете продавца на Маркете) — товар, доступный для продажи.  * &#x60;DEFECT&#x60; (соответствует типу «Брак») — товар с браком.  * &#x60;EXPIRED&#x60; (соответствует типу «Просрочен») — товар с истекшим сроком годности.  * &#x60;FIT&#x60; (соответствует типу «Годный») — товар, который доступен для продажи или уже зарезервирован.  * &#x60;FREEZE&#x60; — товар, который зарезервирован для заказов.  * &#x60;QUARANTINE&#x60; (соответствует типу «Карантин») — товар, временно недоступный для продажи (например, товар перемещают из одного помещения склада в другое).  * &#x60;UTILIZATION&#x60; — товар, который будет утилизирован.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WarehouseStockType
{
    /**
     * Possible values of this enum
     */
    public const FIT = 'FIT';

    public const FREEZE = 'FREEZE';

    public const AVAILABLE = 'AVAILABLE';

    public const QUARANTINE = 'QUARANTINE';

    public const UTILIZATION = 'UTILIZATION';

    public const DEFECT = 'DEFECT';

    public const EXPIRED = 'EXPIRED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIT,
            self::FREEZE,
            self::AVAILABLE,
            self::QUARANTINE,
            self::UTILIZATION,
            self::DEFECT,
            self::EXPIRED
        ];
    }
}


