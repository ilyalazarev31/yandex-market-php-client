# # ReturnDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор невыкупа или возврата. |
**order_id** | **int** | Номер заказа. |
**creation_date** | **\DateTime** | Дата создания невыкупа или возврата.  Формат даты: ISO 8601 со смещением относительно UTC. | [optional]
**update_date** | **\DateTime** | Дата обновления невыкупа или возврата.  Формат даты: ISO 8601 со смещением относительно UTC. | [optional]
**refund_status** | [**\YandexMarketApi\Model\RefundStatusType**](RefundStatusType.md) |  | [optional]
**logistic_pickup_point** | [**\YandexMarketApi\Model\LogisticPickupPointDTO**](LogisticPickupPointDTO.md) |  | [optional]
**pickup_till_date** | **\DateTime** | Дата, до которой можно забрать товар.  Только для невыкупов и возвратов в логистическом статусе &#x60;READY_FOR_PICKUP&#x60;.  Формат даты: ISO 8601 со смещением относительно UTC. | [optional]
**shipment_recipient_type** | [**\YandexMarketApi\Model\RecipientType**](RecipientType.md) |  | [optional]
**shipment_status** | [**\YandexMarketApi\Model\ReturnShipmentStatusType**](ReturnShipmentStatusType.md) |  | [optional]
**refund_amount** | **int** | {% note warning \&quot;Вместо него используйте &#x60;amount&#x60;.\&quot; %}     {% endnote %}  Сумма возврата в копейках. | [optional]
**amount** | [**\YandexMarketApi\Model\CurrencyValueDTO**](CurrencyValueDTO.md) |  | [optional]
**items** | [**\YandexMarketApi\Model\ReturnItemDTO[]**](ReturnItemDTO.md) | Список товаров в невыкупе или возврате. |
**return_type** | [**\YandexMarketApi\Model\ReturnType**](ReturnType.md) |  |
**fast_return** | **bool** | Используется ли опция **Быстрый возврат денег за дешевый брак**.  Актуально только для &#x60;returnType&#x3D;RETURN&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
