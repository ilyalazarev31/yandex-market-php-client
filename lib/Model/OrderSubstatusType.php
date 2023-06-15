<?php
/**
 * OrderSubstatusType
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
 * OrderSubstatusType Class Doc Comment
 *
 * @category Class
 * @description Этап обработки заказа (если он имеет статус &#x60;PROCESSING&#x60;) или причина отмены заказа (если он имеет статус &#x60;CANCELLED&#x60;).  Возможные значения для заказа в статусе &#x60;PROCESSING&#x60;:  * &#x60;STARTED&#x60; — заказ подтвержден, его можно начать обрабатывать. * &#x60;READY_TO_SHIP&#x60; — заказ собран и готов к отправке.  Возможные значения для заказа в статусе &#x60;CANCELLED&#x60;:  * &#x60;PROCESSING_EXPIRED&#x60; — магазин не обработал заказ в течение семи дней.  * &#x60;REPLACING_ORDER&#x60; — покупатель решил заменить товар другим по собственной инициативе.  * &#x60;RESERVATION_EXPIRED&#x60; — покупатель не завершил оформление зарезервированного заказа в течение 10 минут.  * &#x60;SHOP_FAILED&#x60; — магазин не может выполнить заказ.  * &#x60;USER_CHANGED_MIND&#x60; — покупатель отменил заказ по личным причинам.  * &#x60;USER_NOT_PAID&#x60; — покупатель не оплатил заказ (для типа оплаты &#x60;PREPAID&#x60;) в течение 30 минут.  * &#x60;USER_REFUSED_DELIVERY&#x60; — покупателя не устроили условия доставки.  * &#x60;USER_REFUSED_PRODUCT&#x60; — покупателю не подошел товар.  * &#x60;USER_REFUSED_QUALITY&#x60; — покупателя не устроило качество товара.  * &#x60;USER_UNREACHABLE&#x60; — не удалось связаться с покупателем.  Также могут возвращаться другие значения. Обрабатывать их не требуется.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderSubstatusType
{
    /**
     * Possible values of this enum
     */
    public const RESERVATION_EXPIRED = 'RESERVATION_EXPIRED';

    public const USER_NOT_PAID = 'USER_NOT_PAID';

    public const USER_UNREACHABLE = 'USER_UNREACHABLE';

    public const USER_CHANGED_MIND = 'USER_CHANGED_MIND';

    public const USER_REFUSED_DELIVERY = 'USER_REFUSED_DELIVERY';

    public const USER_REFUSED_PRODUCT = 'USER_REFUSED_PRODUCT';

    public const SHOP_FAILED = 'SHOP_FAILED';

    public const USER_REFUSED_QUALITY = 'USER_REFUSED_QUALITY';

    public const REPLACING_ORDER = 'REPLACING_ORDER';

    public const PROCESSING_EXPIRED = 'PROCESSING_EXPIRED';

    public const PENDING_EXPIRED = 'PENDING_EXPIRED';

    public const SHOP_PENDING_CANCELLED = 'SHOP_PENDING_CANCELLED';

    public const PENDING_CANCELLED = 'PENDING_CANCELLED';

    public const USER_FRAUD = 'USER_FRAUD';

    public const RESERVATION_FAILED = 'RESERVATION_FAILED';

    public const USER_PLACED_OTHER_ORDER = 'USER_PLACED_OTHER_ORDER';

    public const USER_BOUGHT_CHEAPER = 'USER_BOUGHT_CHEAPER';

    public const MISSING_ITEM = 'MISSING_ITEM';

    public const BROKEN_ITEM = 'BROKEN_ITEM';

    public const WRONG_ITEM = 'WRONG_ITEM';

    public const PICKUP_EXPIRED = 'PICKUP_EXPIRED';

    public const DELIVERY_PROBLEMS = 'DELIVERY_PROBLEMS';

    public const LATE_CONTACT = 'LATE_CONTACT';

    public const CUSTOM = 'CUSTOM';

    public const DELIVERY_SERVICE_FAILED = 'DELIVERY_SERVICE_FAILED';

    public const WAREHOUSE_FAILED_TO_SHIP = 'WAREHOUSE_FAILED_TO_SHIP';

    public const DELIVERY_SERIVCE_UNDELIVERED = 'DELIVERY_SERIVCE_UNDELIVERED';

    public const DELIVERY_SERVICE_UNDELIVERED = 'DELIVERY_SERVICE_UNDELIVERED';

    public const PREORDER = 'PREORDER';

    public const AWAIT_CONFIRMATION = 'AWAIT_CONFIRMATION';

    public const STARTED = 'STARTED';

    public const PACKAGING = 'PACKAGING';

    public const READY_TO_SHIP = 'READY_TO_SHIP';

    public const SHIPPED = 'SHIPPED';

    public const ASYNC_PROCESSING = 'ASYNC_PROCESSING';

    public const USER_REFUSED_TO_PROVIDE_PERSONAL_DATA = 'USER_REFUSED_TO_PROVIDE_PERSONAL_DATA';

    public const WAITING_USER_INPUT = 'WAITING_USER_INPUT';

    public const WAITING_BANK_DECISION = 'WAITING_BANK_DECISION';

    public const BANK_REJECT_CREDIT_OFFER = 'BANK_REJECT_CREDIT_OFFER';

    public const CUSTOMER_REJECT_CREDIT_OFFER = 'CUSTOMER_REJECT_CREDIT_OFFER';

    public const CREDIT_OFFER_FAILED = 'CREDIT_OFFER_FAILED';

    public const AWAIT_DELIVERY_DATES_CONFIRMATION = 'AWAIT_DELIVERY_DATES_CONFIRMATION';

    public const SERVICE_FAULT = 'SERVICE_FAULT';

    public const DELIVERY_SERVICE_RECEIVED = 'DELIVERY_SERVICE_RECEIVED';

    public const USER_RECEIVED = 'USER_RECEIVED';

    public const WAITING_FOR_STOCKS = 'WAITING_FOR_STOCKS';

    public const AS_PART_OF_MULTI_ORDER = 'AS_PART_OF_MULTI_ORDER';

    public const READY_FOR_LAST_MILE = 'READY_FOR_LAST_MILE';

    public const LAST_MILE_STARTED = 'LAST_MILE_STARTED';

    public const ANTIFRAUD = 'ANTIFRAUD';

    public const DELIVERY_USER_NOT_RECEIVED = 'DELIVERY_USER_NOT_RECEIVED';

    public const DELIVERY_SERVICE_DELIVERED = 'DELIVERY_SERVICE_DELIVERED';

    public const DELIVERED_USER_NOT_RECEIVED = 'DELIVERED_USER_NOT_RECEIVED';

    public const USER_WANTED_ANOTHER_PAYMENT_METHOD = 'USER_WANTED_ANOTHER_PAYMENT_METHOD';

    public const USER_RECEIVED_TECHNICAL_ERROR = 'USER_RECEIVED_TECHNICAL_ERROR';

    public const USER_FORGOT_TO_USE_BONUS = 'USER_FORGOT_TO_USE_BONUS';

    public const RECEIVED_ON_DISTRIBUTION_CENTER = 'RECEIVED_ON_DISTRIBUTION_CENTER';

    public const DELIVERY_SERVICE_NOT_RECEIVED = 'DELIVERY_SERVICE_NOT_RECEIVED';

    public const DELIVERY_SERVICE_LOST = 'DELIVERY_SERVICE_LOST';

    public const SHIPPED_TO_WRONG_DELIVERY_SERVICE = 'SHIPPED_TO_WRONG_DELIVERY_SERVICE';

    public const DELIVERED_USER_RECEIVED = 'DELIVERED_USER_RECEIVED';

    public const WAITING_TINKOFF_DECISION = 'WAITING_TINKOFF_DECISION';

    public const COURIER_SEARCH = 'COURIER_SEARCH';

    public const COURIER_FOUND = 'COURIER_FOUND';

    public const COURIER_IN_TRANSIT_TO_SENDER = 'COURIER_IN_TRANSIT_TO_SENDER';

    public const COURIER_ARRIVED_TO_SENDER = 'COURIER_ARRIVED_TO_SENDER';

    public const COURIER_RECEIVED = 'COURIER_RECEIVED';

    public const COURIER_NOT_FOUND = 'COURIER_NOT_FOUND';

    public const COURIER_NOT_DELIVER_ORDER = 'COURIER_NOT_DELIVER_ORDER';

    public const COURIER_RETURNS_ORDER = 'COURIER_RETURNS_ORDER';

    public const COURIER_RETURNED_ORDER = 'COURIER_RETURNED_ORDER';

    public const WAITING_USER_DELIVERY_INPUT = 'WAITING_USER_DELIVERY_INPUT';

    public const PICKUP_SERVICE_RECEIVED = 'PICKUP_SERVICE_RECEIVED';

    public const PICKUP_USER_RECEIVED = 'PICKUP_USER_RECEIVED';

    public const CANCELLED_COURIER_NOT_FOUND = 'CANCELLED_COURIER_NOT_FOUND';

    public const COURIER_NOT_COME_FOR_ORDER = 'COURIER_NOT_COME_FOR_ORDER';

    public const DELIVERY_NOT_MANAGED_REGION = 'DELIVERY_NOT_MANAGED_REGION';

    public const INCOMPLETE_CONTACT_INFORMATION = 'INCOMPLETE_CONTACT_INFORMATION';

    public const INCOMPLETE_MULTI_ORDER = 'INCOMPLETE_MULTI_ORDER';

    public const INAPPROPRIATE_WEIGHT_SIZE = 'INAPPROPRIATE_WEIGHT_SIZE';

    public const TECHNICAL_ERROR = 'TECHNICAL_ERROR';

    public const SORTING_CENTER_LOST = 'SORTING_CENTER_LOST';

    public const COURIER_SEARCH_NOT_STARTED = 'COURIER_SEARCH_NOT_STARTED';

    public const LOST = 'LOST';

    public const AWAIT_PAYMENT = 'AWAIT_PAYMENT';

    public const AWAIT_LAVKA_RESERVATION = 'AWAIT_LAVKA_RESERVATION';

    public const USER_WANTS_TO_CHANGE_ADDRESS = 'USER_WANTS_TO_CHANGE_ADDRESS';

    public const FULL_NOT_RANSOM = 'FULL_NOT_RANSOM';

    public const PRESCRIPTION_MISMATCH = 'PRESCRIPTION_MISMATCH';

    public const DROPOFF_LOST = 'DROPOFF_LOST';

    public const DROPOFF_CLOSED = 'DROPOFF_CLOSED';

    public const DELIVERY_TO_STORE_STARTED = 'DELIVERY_TO_STORE_STARTED';

    public const USER_WANTS_TO_CHANGE_DELIVERY_DATE = 'USER_WANTS_TO_CHANGE_DELIVERY_DATE';

    public const WRONG_ITEM_DELIVERED = 'WRONG_ITEM_DELIVERED';

    public const DAMAGED_BOX = 'DAMAGED_BOX';

    public const AWAIT_DELIVERY_DATES = 'AWAIT_DELIVERY_DATES';

    public const LAST_MILE_COURIER_SEARCH = 'LAST_MILE_COURIER_SEARCH';

    public const PICKUP_POINT_CLOSED = 'PICKUP_POINT_CLOSED';

    public const LEGAL_INFO_CHANGED = 'LEGAL_INFO_CHANGED';

    public const USER_HAS_NO_TIME_TO_PICKUP_ORDER = 'USER_HAS_NO_TIME_TO_PICKUP_ORDER';

    public const DELIVERY_CUSTOMS_ARRIVED = 'DELIVERY_CUSTOMS_ARRIVED';

    public const DELIVERY_CUSTOMS_CLEARED = 'DELIVERY_CUSTOMS_CLEARED';

    public const FIRST_MILE_DELIVERY_SERVICE_RECEIVED = 'FIRST_MILE_DELIVERY_SERVICE_RECEIVED';

    public const AWAIT_AUTO_DELIVERY_DATES = 'AWAIT_AUTO_DELIVERY_DATES';

    public const AWAIT_USER_PERSONAL_DATA = 'AWAIT_USER_PERSONAL_DATA';

    public const UNKNOWN = 'UNKNOWN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RESERVATION_EXPIRED,
            self::USER_NOT_PAID,
            self::USER_UNREACHABLE,
            self::USER_CHANGED_MIND,
            self::USER_REFUSED_DELIVERY,
            self::USER_REFUSED_PRODUCT,
            self::SHOP_FAILED,
            self::USER_REFUSED_QUALITY,
            self::REPLACING_ORDER,
            self::PROCESSING_EXPIRED,
            self::PENDING_EXPIRED,
            self::SHOP_PENDING_CANCELLED,
            self::PENDING_CANCELLED,
            self::USER_FRAUD,
            self::RESERVATION_FAILED,
            self::USER_PLACED_OTHER_ORDER,
            self::USER_BOUGHT_CHEAPER,
            self::MISSING_ITEM,
            self::BROKEN_ITEM,
            self::WRONG_ITEM,
            self::PICKUP_EXPIRED,
            self::DELIVERY_PROBLEMS,
            self::LATE_CONTACT,
            self::CUSTOM,
            self::DELIVERY_SERVICE_FAILED,
            self::WAREHOUSE_FAILED_TO_SHIP,
            self::DELIVERY_SERIVCE_UNDELIVERED,
            self::DELIVERY_SERVICE_UNDELIVERED,
            self::PREORDER,
            self::AWAIT_CONFIRMATION,
            self::STARTED,
            self::PACKAGING,
            self::READY_TO_SHIP,
            self::SHIPPED,
            self::ASYNC_PROCESSING,
            self::USER_REFUSED_TO_PROVIDE_PERSONAL_DATA,
            self::WAITING_USER_INPUT,
            self::WAITING_BANK_DECISION,
            self::BANK_REJECT_CREDIT_OFFER,
            self::CUSTOMER_REJECT_CREDIT_OFFER,
            self::CREDIT_OFFER_FAILED,
            self::AWAIT_DELIVERY_DATES_CONFIRMATION,
            self::SERVICE_FAULT,
            self::DELIVERY_SERVICE_RECEIVED,
            self::USER_RECEIVED,
            self::WAITING_FOR_STOCKS,
            self::AS_PART_OF_MULTI_ORDER,
            self::READY_FOR_LAST_MILE,
            self::LAST_MILE_STARTED,
            self::ANTIFRAUD,
            self::DELIVERY_USER_NOT_RECEIVED,
            self::DELIVERY_SERVICE_DELIVERED,
            self::DELIVERED_USER_NOT_RECEIVED,
            self::USER_WANTED_ANOTHER_PAYMENT_METHOD,
            self::USER_RECEIVED_TECHNICAL_ERROR,
            self::USER_FORGOT_TO_USE_BONUS,
            self::RECEIVED_ON_DISTRIBUTION_CENTER,
            self::DELIVERY_SERVICE_NOT_RECEIVED,
            self::DELIVERY_SERVICE_LOST,
            self::SHIPPED_TO_WRONG_DELIVERY_SERVICE,
            self::DELIVERED_USER_RECEIVED,
            self::WAITING_TINKOFF_DECISION,
            self::COURIER_SEARCH,
            self::COURIER_FOUND,
            self::COURIER_IN_TRANSIT_TO_SENDER,
            self::COURIER_ARRIVED_TO_SENDER,
            self::COURIER_RECEIVED,
            self::COURIER_NOT_FOUND,
            self::COURIER_NOT_DELIVER_ORDER,
            self::COURIER_RETURNS_ORDER,
            self::COURIER_RETURNED_ORDER,
            self::WAITING_USER_DELIVERY_INPUT,
            self::PICKUP_SERVICE_RECEIVED,
            self::PICKUP_USER_RECEIVED,
            self::CANCELLED_COURIER_NOT_FOUND,
            self::COURIER_NOT_COME_FOR_ORDER,
            self::DELIVERY_NOT_MANAGED_REGION,
            self::INCOMPLETE_CONTACT_INFORMATION,
            self::INCOMPLETE_MULTI_ORDER,
            self::INAPPROPRIATE_WEIGHT_SIZE,
            self::TECHNICAL_ERROR,
            self::SORTING_CENTER_LOST,
            self::COURIER_SEARCH_NOT_STARTED,
            self::LOST,
            self::AWAIT_PAYMENT,
            self::AWAIT_LAVKA_RESERVATION,
            self::USER_WANTS_TO_CHANGE_ADDRESS,
            self::FULL_NOT_RANSOM,
            self::PRESCRIPTION_MISMATCH,
            self::DROPOFF_LOST,
            self::DROPOFF_CLOSED,
            self::DELIVERY_TO_STORE_STARTED,
            self::USER_WANTS_TO_CHANGE_DELIVERY_DATE,
            self::WRONG_ITEM_DELIVERED,
            self::DAMAGED_BOX,
            self::AWAIT_DELIVERY_DATES,
            self::LAST_MILE_COURIER_SEARCH,
            self::PICKUP_POINT_CLOSED,
            self::LEGAL_INFO_CHANGED,
            self::USER_HAS_NO_TIME_TO_PICKUP_ORDER,
            self::DELIVERY_CUSTOMS_ARRIVED,
            self::DELIVERY_CUSTOMS_CLEARED,
            self::FIRST_MILE_DELIVERY_SERVICE_RECEIVED,
            self::AWAIT_AUTO_DELIVERY_DATES,
            self::AWAIT_USER_PERSONAL_DATA,
            self::UNKNOWN
        ];
    }
}


