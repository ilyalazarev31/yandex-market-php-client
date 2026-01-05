# # UpdateOfferDTOAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parameter_values** | [**\YandexMarketApi\Model\ParameterValueDTO[]**](ParameterValueDTO.md) | Список характеристик с их значениями.  {% note warning \&quot;Всегда передавайте вместе с &#x60;marketCategoryId&#x60;\&quot; %}  Если не передать &#x60;marketCategoryId&#x60; при изменении характеристик, они обновятся, но в ответе придет предупреждение (параметр &#x60;warnings&#x60;).  Если не передать их оба, будет использована информация из устаревших параметров &#x60;params&#x60; и &#x60;category&#x60;, а &#x60;marketCategoryId&#x60; будет определен автоматически.  {% endnote %}  При **изменении** характеристик передавайте только те, значение которых нужно обновить. Если в &#x60;marketCategoryId&#x60; вы меняете категорию, значения общих характеристик для старой и новой категории сохранятся, передавать их не нужно.  Подробнее читайте в [«Передача значений характеристики»](../../step-by-step/parameter-values.md). | [optional]
**basic_price** | [**\YandexMarketApi\Model\PriceWithDiscountDTO**](PriceWithDiscountDTO.md) |  | [optional]
**purchase_price** | [**\YandexMarketApi\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**additional_expenses** | [**\YandexMarketApi\Model\BasePriceDTO**](BasePriceDTO.md) |  | [optional]
**first_video_as_cover** | **bool** | Использовать первое видео в карточке как видеообложку.  Передайте &#x60;true&#x60;, чтобы первое видео использовалось как видеообложка, или &#x60;false&#x60;, чтобы видеообложка не отображалась в карточке товара. | [optional]
**delete_parameters** | [**\YandexMarketApi\Model\DeleteOfferParameterType[]**](DeleteOfferParameterType.md) | Параметры, которые вы ранее передали в &#x60;UpdateOfferDTO&#x60;, а теперь хотите удалить.  Если передать &#x60;adult&#x60;, &#x60;downloadable&#x60; и &#x60;firstVideoAsCover&#x60;, они не удалятся — их значение изменится на &#x60;false&#x60;.  Можно передать сразу несколько значений.  Не используйте вместе с соответствующим параметром в &#x60;UpdateOfferDTO&#x60;. Это приведет к ошибке &#x60;400&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
