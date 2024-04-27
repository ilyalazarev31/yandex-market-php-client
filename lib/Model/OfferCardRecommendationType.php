<?php
/**
 * OfferCardRecommendationType
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
 * OfferCardRecommendationType Class Doc Comment
 *
 * @category Class
 * @description Рекомендация по дополнению или замене контента.  Часть рекомендаций относятся к **основным параметрам**, которые есть у товаров любых категорий. Другие — к тем **характеристикам**, которые есть у товара потому, что он относится к определенной категории.  **1. Рекомендации, относящиеся к основным параметрам**  Каждая такая рекомендация относится к **единственному параметру**. Чтобы заполнить этот параметр, пользуйтесь запросом [POST businesses/{businessId}/offer-mappings/update](../../reference/business-assortment/updateOfferMappings.md).  Рекомендации по заполнению параметров в &#x60;updateOfferMappings&#x60;:  * &#x60;HAS_VIDEO&#x60; — добавьте на карточку видео (параметр &#x60;videos&#x60;). * &#x60;RECOGNIZED_VENDOR&#x60; — напишите название производителя так, как его пишет сам производитель (параметр &#x60;vendor&#x60;). * &#x60;PICTURE_COUNT&#x60; — добавьте изображения (параметр &#x60;pictures&#x60;). * &#x60;HAS_DESCRIPTION&#x60; — заполните описание (параметр &#x60;description&#x60;). * &#x60;HAS_BARCODE&#x60; — укажите штрихкод (параметр &#x60;barcode&#x60;). * &#x60;FIRST_PICTURE_SIZE&#x60; — замените первое изображение более крупным (параметр &#x60;pictures&#x60;).  **2. Рекомендации, относящиеся к характеристикам по категориям**  Каждая такая рекомендация предполагает заполнение **одной или нескольких характеристик**. Чтобы узнать, какие именно характеристики нужно заполнить, воспользуйтесь запросом [POST category/{categoryId}/parameters](../../reference/content/getCategoryContentParameters.md). Например, если вы получили рекомендацию &#x60;MAIN&#x60;, нужно заполнить характеристики, имеющие &#x60;MAIN&#x60; в массиве &#x60;recommendationTypes&#x60;.  Рекомендации:  * &#x60;MAIN&#x60; — заполните ключевые характеристики товара. * &#x60;ADDITIONAL&#x60; — заполните дополнительные характеристики товара. * &#x60;FILTERABLE&#x60; — заполните характеристики, используемые в фильтрах. * &#x60;DISTINCTIVE&#x60; — заполните характеристики, которыми отличаются друг от друга варианты товара.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferCardRecommendationType
{
    /**
     * Possible values of this enum
     */
    public const HAS_VIDEO = 'HAS_VIDEO';

    public const RECOGNIZED_VENDOR = 'RECOGNIZED_VENDOR';

    public const MAIN = 'MAIN';

    public const ADDITIONAL = 'ADDITIONAL';

    public const DISTINCTIVE = 'DISTINCTIVE';

    public const FILTERABLE = 'FILTERABLE';

    public const PICTURE_COUNT = 'PICTURE_COUNT';

    public const HAS_DESCRIPTION = 'HAS_DESCRIPTION';

    public const HAS_BARCODE = 'HAS_BARCODE';

    public const FIRST_PICTURE_SIZE = 'FIRST_PICTURE_SIZE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HAS_VIDEO,
            self::RECOGNIZED_VENDOR,
            self::MAIN,
            self::ADDITIONAL,
            self::DISTINCTIVE,
            self::FILTERABLE,
            self::PICTURE_COUNT,
            self::HAS_DESCRIPTION,
            self::HAS_BARCODE,
            self::FIRST_PICTURE_SIZE
        ];
    }
}


