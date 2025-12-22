# # OrderItemModificationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор товара в рамках заказа.  Получить идентификатор можно с помощью метода:  * [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md).  Обязательный параметр. |
**count** | **int** | Новое количество товара. |
**instances** | [**\YandexMarketApi\Model\BriefOrderItemInstanceDTO[]**](BriefOrderItemInstanceDTO.md) | Информация о маркировке единиц товара.  Передавайте в запросе все единицы товара, который подлежит маркировке.  Обязательный параметр, если в заказе от бизнеса есть товары, подлежащие маркировке в системе [:no-translate[«Честный ЗНАК»]](https://честныйзнак.рф/) или [:no-translate[«ASL BELGISI»]](https://aslbelgisi.uz) (для продавцов :no-translate[Market Yandex Go]). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
