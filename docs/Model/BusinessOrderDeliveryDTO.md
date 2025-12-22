# # BusinessOrderDeliveryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\YandexMarketApi\Model\OrderDeliveryType**](OrderDeliveryType.md) |  |
**service_name** | **string** | Название службы доставки. |
**delivery_service_id** | **int** | Идентификатор службы доставки. |
**warehouse_id** | **string** | Идентификатор склада в системе магазина, на который сформирован заказ. | [optional]
**delivery_partner_type** | [**\YandexMarketApi\Model\OrderDeliveryPartnerType**](OrderDeliveryPartnerType.md) |  |
**dispatch_type** | [**\YandexMarketApi\Model\OrderDeliveryDispatchType**](OrderDeliveryDispatchType.md) |  | [optional]
**dates** | [**\YandexMarketApi\Model\BusinessOrderDeliveryDatesDTO**](BusinessOrderDeliveryDatesDTO.md) |  |
**shipment** | [**\YandexMarketApi\Model\BusinessOrderShipmentDTO**](BusinessOrderShipmentDTO.md) |  | [optional]
**courier** | [**\YandexMarketApi\Model\BusinessOrderCourierDeliveryDTO**](BusinessOrderCourierDeliveryDTO.md) |  | [optional]
**pickup** | [**\YandexMarketApi\Model\BusinessOrderPickupDeliveryDTO**](BusinessOrderPickupDeliveryDTO.md) |  | [optional]
**transfer** | [**\YandexMarketApi\Model\BusinessOrderTransferDTO**](BusinessOrderTransferDTO.md) |  | [optional]
**boxes_layout** | [**\YandexMarketApi\Model\BusinessOrderBoxLayoutDTO[]**](BusinessOrderBoxLayoutDTO.md) | Раскладка товаров по коробкам. | [optional]
**tracks** | [**\YandexMarketApi\Model\OrderTrackDTO[]**](OrderTrackDTO.md) | Информация для отслеживания посылки. | [optional]
**estimated** | **bool** | Приблизительная ли дата доставки. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
