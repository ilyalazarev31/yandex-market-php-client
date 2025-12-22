# # GetBusinessOrdersRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_ids** | **int[]** | Идентификаторы заказов. | [optional]
**external_order_ids** | **string[]** | Внешние идентификаторы заказов. | [optional]
**program_types** | [**\YandexMarketApi\Model\SellingProgramType[]**](SellingProgramType.md) | Модели работы магазина на Маркете. | [optional]
**campaign_ids** | **int[]** | Идентификаторы кампаний магазинов. | [optional]
**statuses** | [**\YandexMarketApi\Model\OrderStatusType[]**](OrderStatusType.md) | Статусы заказов. | [optional]
**substatuses** | [**\YandexMarketApi\Model\OrderSubstatusType[]**](OrderSubstatusType.md) | Этапы обработки или причины отмены заказов. | [optional]
**dates** | [**\YandexMarketApi\Model\OrderDatesFilterDTO**](OrderDatesFilterDTO.md) |  | [optional]
**fake** | **bool** | Тип заказа:  * &#x60;false&#x60; — настоящий заказ покупателя.  * &#x60;true&#x60; — [тестовый заказ](../../concepts/sandbox.md) Маркета. | [optional]
**waiting_for_cancellation_approve** | **bool** | **Только для модели DBS**  Фильтр для получения заказов, по которым есть запросы на отмену.  При значении &#x60;true&#x60; возвращаются только те заказы, которые находятся в статусе &#x60;DELIVERY&#x60; или &#x60;PICKUP&#x60;, и пользователи решили их отменить. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
