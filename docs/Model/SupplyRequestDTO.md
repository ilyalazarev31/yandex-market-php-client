# # SupplyRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\YandexMarketApi\Model\SupplyRequestIdDTO**](SupplyRequestIdDTO.md) |  |
**type** | [**\YandexMarketApi\Model\SupplyRequestType**](SupplyRequestType.md) |  |
**subtype** | [**\YandexMarketApi\Model\SupplyRequestSubType**](SupplyRequestSubType.md) |  |
**status** | [**\YandexMarketApi\Model\SupplyRequestStatusType**](SupplyRequestStatusType.md) |  |
**updated_at** | **\DateTime** | Дата и время последнего обновления заявки. |
**counters** | [**\YandexMarketApi\Model\SupplyRequestCountersDTO**](SupplyRequestCountersDTO.md) |  |
**parent_link** | [**\YandexMarketApi\Model\SupplyRequestReferenceDTO**](SupplyRequestReferenceDTO.md) |  | [optional]
**children_links** | [**\YandexMarketApi\Model\SupplyRequestReferenceDTO[]**](SupplyRequestReferenceDTO.md) | Ссылки на дочерние заявки. | [optional]
**target_location** | [**\YandexMarketApi\Model\SupplyRequestLocationDTO**](SupplyRequestLocationDTO.md) |  |
**transit_location** | [**\YandexMarketApi\Model\SupplyRequestLocationDTO**](SupplyRequestLocationDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
