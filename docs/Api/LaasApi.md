# YandexMarketApi\LaasApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCampaignOffers()**](LaasApi.md#deleteCampaignOffers) | **POST** /v2/campaigns/{campaignId}/offers/delete | Удаление товаров из ассортимента магазина |
| [**deleteOffers()**](LaasApi.md#deleteOffers) | **POST** /v2/businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога |
| [**generateBarcodesReport()**](LaasApi.md#generateBarcodesReport) | **POST** /v1/reports/documents/barcodes/generate | Получение файла со штрихкодами |
| [**generateClosureDocumentsDetalizationReport()**](LaasApi.md#generateClosureDocumentsDetalizationReport) | **POST** /v2/reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами |
| [**generateClosureDocumentsReport()**](LaasApi.md#generateClosureDocumentsReport) | **POST** /v2/reports/closure-documents/generate | Закрывающие документы |
| [**generateGoodsMovementReport()**](LaasApi.md#generateGoodsMovementReport) | **POST** /v2/reports/goods-movement/generate | Отчет по движению товаров |
| [**generateOfferBarcodes()**](LaasApi.md#generateOfferBarcodes) | **POST** /v1/businesses/{businessId}/offer-mappings/barcodes/generate | Генерация штрихкодов |
| [**generateStocksOnWarehousesReport()**](LaasApi.md#generateStocksOnWarehousesReport) | **POST** /v2/reports/stocks-on-warehouses/generate | Отчет по остаткам на складах |
| [**generateUnitedMarketplaceServicesReport()**](LaasApi.md#generateUnitedMarketplaceServicesReport) | **POST** /v2/reports/united-marketplace-services/generate | Отчет по стоимости услуг |
| [**generateUnitedReturnsReport()**](LaasApi.md#generateUnitedReturnsReport) | **POST** /v2/reports/united-returns/generate | Отчет по невыкупам и возвратам |
| [**getAuthTokenInfo()**](LaasApi.md#getAuthTokenInfo) | **POST** /v2/auth/token | Получение информации о токене авторизации |
| [**getBusinessOrders()**](LaasApi.md#getBusinessOrders) | **POST** /v1/businesses/{businessId}/orders | Информация о заказах в кабинете |
| [**getBusinessSettings()**](LaasApi.md#getBusinessSettings) | **POST** /v2/businesses/{businessId}/settings | Настройки кабинета |
| [**getCampaign()**](LaasApi.md#getCampaign) | **GET** /v2/campaigns/{campaignId} | Информация о магазине |
| [**getCampaignOffers()**](LaasApi.md#getCampaignOffers) | **POST** /v2/campaigns/{campaignId}/offers | Информация о товарах, которые размещены в заданном магазине |
| [**getCampaignSettings()**](LaasApi.md#getCampaignSettings) | **GET** /v2/campaigns/{campaignId}/settings | Настройки магазина |
| [**getCampaigns()**](LaasApi.md#getCampaigns) | **GET** /v2/campaigns | Список магазинов пользователя |
| [**getCategoriesTree()**](LaasApi.md#getCategoriesTree) | **POST** /v2/categories/tree | Дерево категорий |
| [**getCategoryContentParameters()**](LaasApi.md#getCategoryContentParameters) | **POST** /v2/category/{categoryId}/parameters | Списки характеристик товаров по категориям |
| [**getDefaultPrices()**](LaasApi.md#getDefaultPrices) | **POST** /v2/businesses/{businessId}/offer-prices | Просмотр цен на указанные товары во всех магазинах |
| [**getFulfillmentWarehouses()**](LaasApi.md#getFulfillmentWarehouses) | **GET** /v2/warehouses | Идентификаторы складов Маркета |
| [**getOfferCardsContentStatus()**](LaasApi.md#getOfferCardsContentStatus) | **POST** /v2/businesses/{businessId}/offer-cards | Получение информации о заполненности карточек магазина |
| [**getOfferMappings()**](LaasApi.md#getOfferMappings) | **POST** /v2/businesses/{businessId}/offer-mappings | Информация о товарах в каталоге |
| [**getOrder()**](LaasApi.md#getOrder) | **GET** /v2/campaigns/{campaignId}/orders/{orderId} | Информация об одном заказе в магазине |
| [**getOrderIdentifiersStatus()**](LaasApi.md#getOrderIdentifiersStatus) | **POST** /v2/campaigns/{campaignId}/orders/{orderId}/identifiers/status | Статусы проверки кодов маркировки |
| [**getOrders()**](LaasApi.md#getOrders) | **GET** /v2/campaigns/{campaignId}/orders | Информация о заказах в магазине |
| [**getPricesByOfferIds()**](LaasApi.md#getPricesByOfferIds) | **POST** /v2/campaigns/{campaignId}/offer-prices | Просмотр цен на указанные товары в конкретном магазине |
| [**getRegionsCodes()**](LaasApi.md#getRegionsCodes) | **POST** /v2/regions/countries | Список допустимых кодов стран |
| [**getReportInfo()**](LaasApi.md#getReportInfo) | **GET** /v2/reports/info/{reportId} | Получение заданного отчета или документа |
| [**getReturn()**](LaasApi.md#getReturn) | **GET** /v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId} | Информация о невыкупе или возврате |
| [**getReturns()**](LaasApi.md#getReturns) | **GET** /v2/campaigns/{campaignId}/returns | Список невыкупов и возвратов |
| [**getStocks()**](LaasApi.md#getStocks) | **POST** /v2/campaigns/{campaignId}/offers/stocks | Информация об остатках и оборачиваемости |
| [**getSupplyRequestDocuments()**](LaasApi.md#getSupplyRequestDocuments) | **POST** /v2/campaigns/{campaignId}/supply-requests/documents | Получение документов по заявке на поставку, вывоз или утилизацию |
| [**getSupplyRequestItems()**](LaasApi.md#getSupplyRequestItems) | **POST** /v2/campaigns/{campaignId}/supply-requests/items | Получение товаров в заявке на поставку, вывоз или утилизацию |
| [**getSupplyRequests()**](LaasApi.md#getSupplyRequests) | **POST** /v2/campaigns/{campaignId}/supply-requests | Получение информации о заявках на поставку, вывоз и утилизацию |
| [**searchRegionChildren()**](LaasApi.md#searchRegionChildren) | **GET** /v2/regions/{regionId}/children | Информация о дочерних регионах |
| [**searchRegionsById()**](LaasApi.md#searchRegionsById) | **GET** /v2/regions/{regionId} | Информация о регионе |
| [**searchRegionsByName()**](LaasApi.md#searchRegionsByName) | **GET** /v2/regions | Поиск регионов по их имени |
| [**updateBusinessPrices()**](LaasApi.md#updateBusinessPrices) | **POST** /v2/businesses/{businessId}/offer-prices/updates | Установка цен на товары для всех магазинов |
| [**updateCampaignOffers()**](LaasApi.md#updateCampaignOffers) | **POST** /v2/campaigns/{campaignId}/offers/update | Изменение условий продажи товаров в магазине |
| [**updateOfferContent()**](LaasApi.md#updateOfferContent) | **POST** /v2/businesses/{businessId}/offer-cards/update | Редактирование категорийных характеристик товара |
| [**updateOfferMappings()**](LaasApi.md#updateOfferMappings) | **POST** /v2/businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них |
| [**updateOrderStatus()**](LaasApi.md#updateOrderStatus) | **PUT** /v2/campaigns/{campaignId}/orders/{orderId}/status | Изменение статуса одного заказа |
| [**updateOrderStatuses()**](LaasApi.md#updateOrderStatuses) | **POST** /v2/campaigns/{campaignId}/orders/status-update | Изменение статусов нескольких заказов |
| [**updatePrices()**](LaasApi.md#updatePrices) | **POST** /v2/campaigns/{campaignId}/offer-prices/updates | Установка цен на товары в конкретном магазине |


## `deleteCampaignOffers()`

```php
deleteCampaignOffers($campaign_id, $delete_campaign_offers_request): \YandexMarketApi\Model\DeleteCampaignOffersResponse
```

Удаление товаров из ассортимента магазина

{% include notitle [:no-translate[access]](../../_auto/method_scopes/deleteCampaignOffers.md) %}  Удаляет заданные товары из заданного магазина.  {% note warning \"Запрос удаляет товары из конкретного магазина\" %}  На продажи в других магазинах и на наличие товара в общем каталоге он не влияет.  {% endnote %}  Товар не получится удалить, если он хранится на складах Маркета.  |**⚙️ Лимит:** 10 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$delete_campaign_offers_request = new \YandexMarketApi\Model\DeleteCampaignOffersRequest(); // \YandexMarketApi\Model\DeleteCampaignOffersRequest

try {
    $result = $apiInstance->deleteCampaignOffers($campaign_id, $delete_campaign_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->deleteCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **delete_campaign_offers_request** | [**\YandexMarketApi\Model\DeleteCampaignOffersRequest**](../Model/DeleteCampaignOffersRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\DeleteCampaignOffersResponse**](../Model/DeleteCampaignOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOffers()`

```php
deleteOffers($business_id, $delete_offers_request): \YandexMarketApi\Model\DeleteOffersResponse
```

Удаление товаров из каталога

{% include notitle [:no-translate[access]](../../_auto/method_scopes/deleteOffers.md) %}  Удаляет товары из каталога.  |**⚙️ Лимит:** 10 000 товаров в минуту, не более 200 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$delete_offers_request = new \YandexMarketApi\Model\DeleteOffersRequest(); // \YandexMarketApi\Model\DeleteOffersRequest

try {
    $result = $apiInstance->deleteOffers($business_id, $delete_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->deleteOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **delete_offers_request** | [**\YandexMarketApi\Model\DeleteOffersRequest**](../Model/DeleteOffersRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\DeleteOffersResponse**](../Model/DeleteOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateBarcodesReport()`

```php
generateBarcodesReport($generate_barcodes_report_request): \YandexMarketApi\Model\GenerateReportResponse
```

Получение файла со штрихкодами

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateBarcodesReport.md) %}  Запускает генерацию PDF-файла со штрихкодами переданных товаров или товаров в указанной заявке на поставку.  Файл не получится сгенерировать, если в нем будет более 1 500 штрихкодов.  Узнать статус генерации и получить ссылку на готовый файл можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_barcodes_report_request = new \YandexMarketApi\Model\GenerateBarcodesReportRequest(); // \YandexMarketApi\Model\GenerateBarcodesReportRequest

try {
    $result = $apiInstance->generateBarcodesReport($generate_barcodes_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->generateBarcodesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_barcodes_report_request** | [**\YandexMarketApi\Model\GenerateBarcodesReportRequest**](../Model/GenerateBarcodesReportRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateClosureDocumentsDetalizationReport()`

```php
generateClosureDocumentsDetalizationReport($generate_closure_documents_detalization_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по схождению с закрывающими документами

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateClosureDocumentsDetalizationReport.md) %}  Запускает генерацию отчета по схождению с закрывающими документами в зависимости от типа договора.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Договор на размещение    {% include notitle [:no-translate[reports]](../../_auto/reports/period_closure/period_closure_income.md) %}  - Договор на продвижение    {% include notitle [:no-translate[reports]](../../_auto/reports/period_closure/period_closure_outcome.md) %}  - Договор на маркетинг    {% include notitle [:no-translate[reports]](../../_auto/reports/advertiser_billing_operations/advertiser_billing_operations.md) %}  {% endlist %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_closure_documents_detalization_request = new \YandexMarketApi\Model\GenerateClosureDocumentsDetalizationRequest(); // \YandexMarketApi\Model\GenerateClosureDocumentsDetalizationRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateClosureDocumentsDetalizationReport($generate_closure_documents_detalization_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->generateClosureDocumentsDetalizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_closure_documents_detalization_request** | [**\YandexMarketApi\Model\GenerateClosureDocumentsDetalizationRequest**](../Model/GenerateClosureDocumentsDetalizationRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateClosureDocumentsReport()`

```php
generateClosureDocumentsReport($generate_closure_documents_request): \YandexMarketApi\Model\GenerateReportResponse
```

Закрывающие документы

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateClosureDocumentsReport.md) %}  Возвращает ZIP-архив с закрывающими документами в формате PDF за указанный месяц.  {% cut \"Состав документов в зависимости от типа договора\" %}  * **Договор на размещение**    * [акт об оказанных услугах](*acts-main-act)   * [счет-фактура](*acts-main-invoice)   * [сводный отчет по данным статистики](*acts-main-report)   * [отчет об исполнении поручения и о зачете взаимных требований](*acts-main-agent) (отчет агента)  * **Договор на продвижение** (в России не заключается после 30 сентября 2024 года)    * [акт об оказании услуг](*acts-discounts-act)   * [счет-фактура](*acts-discounts-invoice), если этого требует схема налогообложения  * **Договор на маркетинг**    * [акт об оказанных услугах](*acts-marketing-act)   * [счет-фактура](*acts-main-invoice)   * [счет-фактура на аванс](*acts-marketing-invoice)   * [выписка по лицевому счету](*acts-marketing-account)   * [детализация к акту](*acts-marketing-details)  {% endcut %}  Узнать статус генерации и получить ссылку на архив можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_closure_documents_request = new \YandexMarketApi\Model\GenerateClosureDocumentsRequest(); // \YandexMarketApi\Model\GenerateClosureDocumentsRequest

try {
    $result = $apiInstance->generateClosureDocumentsReport($generate_closure_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->generateClosureDocumentsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_closure_documents_request** | [**\YandexMarketApi\Model\GenerateClosureDocumentsRequest**](../Model/GenerateClosureDocumentsRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateGoodsMovementReport()`

```php
generateGoodsMovementReport($generate_goods_movement_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по движению товаров

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateGoodsMovementReport.md) %}  Запускает генерацию отчета по движению товаров. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/reports-fby-fbs.html#flow)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/sku/movement/movement_config.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_movement_report_request = new \YandexMarketApi\Model\GenerateGoodsMovementReportRequest(); // \YandexMarketApi\Model\GenerateGoodsMovementReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsMovementReport($generate_goods_movement_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->generateGoodsMovementReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_movement_report_request** | [**\YandexMarketApi\Model\GenerateGoodsMovementReportRequest**](../Model/GenerateGoodsMovementReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOfferBarcodes()`

```php
generateOfferBarcodes($business_id, $generate_offer_barcodes_request): \YandexMarketApi\Model\GenerateOfferBarcodesResponse
```

Генерация штрихкодов

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateOfferBarcodes.md) %}  Генерирует штрихкоды и присваивает их указанным товарам.  Если у товара на упаковке уже есть штрихкод производителя, передайте его в параметре `barcodes` в методе [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-assortment/updateOfferMappings.md). Генерировать новый не нужно.  |**⚙️ Лимит:** 10 000 товаров в минуту, не более 100 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$generate_offer_barcodes_request = new \YandexMarketApi\Model\GenerateOfferBarcodesRequest(); // \YandexMarketApi\Model\GenerateOfferBarcodesRequest

try {
    $result = $apiInstance->generateOfferBarcodes($business_id, $generate_offer_barcodes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->generateOfferBarcodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **generate_offer_barcodes_request** | [**\YandexMarketApi\Model\GenerateOfferBarcodesRequest**](../Model/GenerateOfferBarcodesRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\GenerateOfferBarcodesResponse**](../Model/GenerateOfferBarcodesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateStocksOnWarehousesReport()`

```php
generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по остаткам на складах

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateStocksOnWarehousesReport.md) %}  Запускает генерацию отчета по остаткам на складах. [Что это за отчет](https://yandex.ru/support/marketplace/ru/storage/logistics#remains-history)  **Какая информация вернется:**  * Для модели FBY, если указать `campaignId`, — об остатках на складах Маркета. * Для остальных моделей, если указать `campaignId`, — об остатках на соответствующем складе магазина. * Для остальных моделей, если указать `businessId`, — об остатках на всех складах магазинов в кабинете, кроме FBY. Используйте фильтр `campaignIds`, чтобы указать определенные магазины.  ⚠️ Не передавайте одновременно `campaignId` и `businessId`.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Склад Маркета    {% include notitle [:no-translate[reports]](../../_auto/reports/stocks/stocks_on_warehouses.md) %}  - Склад магазина    {% include notitle [:no-translate[reports]](../../_auto/reports/offers/mass/mass_shared_stocks_business_csv_config.md) %}  - Все склады магазинов в кабинете, кроме FBY    {% include notitle [:no-translate[reports]](../../_auto/reports/offers/stocks_business_config.md) %}  {% endlist %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_stocks_on_warehouses_report_request = new \YandexMarketApi\Model\GenerateStocksOnWarehousesReportRequest(); // \YandexMarketApi\Model\GenerateStocksOnWarehousesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateStocksOnWarehousesReport($generate_stocks_on_warehouses_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->generateStocksOnWarehousesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_stocks_on_warehouses_report_request** | [**\YandexMarketApi\Model\GenerateStocksOnWarehousesReportRequest**](../Model/GenerateStocksOnWarehousesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedMarketplaceServicesReport()`

```php
generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format, $language): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по стоимости услуг

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateUnitedMarketplaceServicesReport.md) %}  Запускает генерацию отчета по стоимости услуг за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#reports)  Тип отчета зависит от того, какие поля заполнены в запросе:  |**Тип отчета**               |**Какие поля нужны**             | |-----------------------------|---------------------------------| |По дате начисления услуги    |`dateFrom` и `dateTo`            | |По дате формирования акта    |`year` и `month`                 |  Заказать отчеты обоих типов одним запросом нельзя.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/united/services/generator/united_marketplace_services.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_marketplace_services_report_request = new \YandexMarketApi\Model\GenerateUnitedMarketplaceServicesReportRequest(); // \YandexMarketApi\Model\GenerateUnitedMarketplaceServicesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.
$language = new \YandexMarketApi\Model\ReportLanguageType(); // ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedMarketplaceServicesReport($generate_united_marketplace_services_report_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->generateUnitedMarketplaceServicesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_marketplace_services_report_request** | [**\YandexMarketApi\Model\GenerateUnitedMarketplaceServicesReportRequest**](../Model/GenerateUnitedMarketplaceServicesReportRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |
| **language** | [**ReportLanguageType**](../Model/.md)| Язык отчета или документа. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateUnitedReturnsReport()`

```php
generateUnitedReturnsReport($generate_united_returns_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по невыкупам и возвратам

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateUnitedReturnsReport.md) %}  Запускает генерацию сводного отчета по невыкупам и возвратам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/orders/returns/logistic#rejected-orders)  Отчет содержит информацию о невыкупах и возвратах за указанный период, а также о тех, которые готовы к выдаче.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/united/returns/generator/united_returns.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_returns_request = new \YandexMarketApi\Model\GenerateUnitedReturnsRequest(); // \YandexMarketApi\Model\GenerateUnitedReturnsRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateUnitedReturnsReport($generate_united_returns_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->generateUnitedReturnsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_returns_request** | [**\YandexMarketApi\Model\GenerateUnitedReturnsRequest**](../Model/GenerateUnitedReturnsRequest.md)|  | |
| **format** | [**ReportFormatType**](../Model/.md)| Формат отчета или документа. | [optional] |

### Return type

[**\YandexMarketApi\Model\GenerateReportResponse**](../Model/GenerateReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuthTokenInfo()`

```php
getAuthTokenInfo(): \YandexMarketApi\Model\GetTokenInfoResponse
```

Получение информации о токене авторизации

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getAuthTokenInfo.md) %}  {% note info \"Метод доступен только для Api-Key-токена.\" %}     {% endnote %}  Возвращает информацию о переданном токене авторизации.  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthTokenInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getAuthTokenInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\YandexMarketApi\Model\GetTokenInfoResponse**](../Model/GetTokenInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessOrders()`

```php
getBusinessOrders($business_id, $get_business_orders_request, $page_token, $limit): \YandexMarketApi\Model\GetBusinessOrdersResponse
```

Информация о заказах в кабинете

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getBusinessOrders.md) %}  Возвращает информацию о заказах в кабинете. Запрос можно использовать для отслеживания заказов и их статусов.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый заказ или изменится его статус. А полную информацию можно получить с помощью этого метода.  [{#T}](../../push-notifications/index.md)  {% endnote %}  Доступна фильтрация по параметрам:  * дата оформления заказа;  * дата и время обновления заказа;  * дата отгрузки;  * статусы заказов (`statuses`);  * этапы обработки или причины отмены (`substatuses`);  * идентификаторы кампаний;  * идентификаторы заказов;  * внешние идентификаторы заказов;  * тип заказа (настоящий или тестовый);  * тип покупателя;  * модели размещения;  * наличие запросов от покупателей на отмену заказа.  Максимальный диапазон дат за один запрос — 30 дней (передается в параметрах `fromDate` и `toDate`). Если их не передать, возвращается информация за последние 30 дней.  Результаты возвращаются постранично. Для навигации используйте параметры `page_token` и `limit`.  Получить более подробную информацию о покупателе и его номере телефона можно с помощью запроса [GET v2/campaigns/{campaignId}/orders/{orderId}/buyer](../../reference/orders/getOrderBuyerInfo.md).  {% note warning \"Ограничение для параметра `limit`\" %}  Не передавайте значение больше 50.  {% endnote %}  |**⚙️ Лимит:** 10 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$get_business_orders_request = new \YandexMarketApi\Model\GetBusinessOrdersRequest(); // \YandexMarketApi\Model\GetBusinessOrdersRequest | Параметры фильтрации заказов.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->getBusinessOrders($business_id, $get_business_orders_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getBusinessOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **get_business_orders_request** | [**\YandexMarketApi\Model\GetBusinessOrdersRequest**](../Model/GetBusinessOrdersRequest.md)| Параметры фильтрации заказов. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetBusinessOrdersResponse**](../Model/GetBusinessOrdersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBusinessSettings()`

```php
getBusinessSettings($business_id): \YandexMarketApi\Model\GetBusinessSettingsResponse
```

Настройки кабинета

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getBusinessSettings.md) %}  Возвращает информацию о настройках кабинета, идентификатор которого указан в запросе. |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)

try {
    $result = $apiInstance->getBusinessSettings($business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getBusinessSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |

### Return type

[**\YandexMarketApi\Model\GetBusinessSettingsResponse**](../Model/GetBusinessSettingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($campaign_id): \YandexMarketApi\Model\GetCampaignResponse
```

Информация о магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getCampaign.md) %}  Возвращает информацию о магазине. |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |

### Return type

[**\YandexMarketApi\Model\GetCampaignResponse**](../Model/GetCampaignResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignOffers()`

```php
getCampaignOffers($campaign_id, $get_campaign_offers_request, $page_token, $limit): \YandexMarketApi\Model\GetCampaignOffersResponse
```

Информация о товарах, которые размещены в заданном магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getCampaignOffers.md) %}  Возвращает список товаров, которые размещены в заданном магазине. Для каждого товара указываются параметры размещения.  |**⚙️ Лимит:** 10 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$get_campaign_offers_request = new \YandexMarketApi\Model\GetCampaignOffersRequest(); // \YandexMarketApi\Model\GetCampaignOffersRequest
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->getCampaignOffers($campaign_id, $get_campaign_offers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **get_campaign_offers_request** | [**\YandexMarketApi\Model\GetCampaignOffersRequest**](../Model/GetCampaignOffersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetCampaignOffersResponse**](../Model/GetCampaignOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignSettings()`

```php
getCampaignSettings($campaign_id): \YandexMarketApi\Model\GetCampaignSettingsResponse
```

Настройки магазина

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getCampaignSettings.md) %}  Возвращает информацию о настройках магазина, идентификатор которого указан в запросе. |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.

try {
    $result = $apiInstance->getCampaignSettings($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getCampaignSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |

### Return type

[**\YandexMarketApi\Model\GetCampaignSettingsResponse**](../Model/GetCampaignSettingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaigns()`

```php
getCampaigns($page, $page_size): \YandexMarketApi\Model\GetCampaignsResponse
```

Список магазинов пользователя

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getCampaigns.md) %}  **Для Api-Key-токена:** возвращает список магазинов в кабинете, для которого выдан токен. Нельзя получить список только подагентских магазинов.  **Для OAuth-токена:** возвращает список магазинов, к которым имеет доступ пользователь — владелец токена авторизации, использованного в запросе. Для агентских пользователей список состоит из подагентских магазинов.  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | {% note warning \"Если в методе есть `page_token`\" %}  Используйте его вместо параметра `page`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром `pageSize`.  `page` игнорируется, если задан `page_token` или `limit`.
$page_size = 56; // int | Размер страницы.  Используется вместе с параметром `page`.  `pageSize` игнорируется, если задан `page_token` или `limit`.

try {
    $result = $apiInstance->getCampaigns($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| {% note warning \&quot;Если в методе есть &#x60;page_token&#x60;\&quot; %}  Используйте его вместо параметра &#x60;page&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром &#x60;pageSize&#x60;.  &#x60;page&#x60; игнорируется, если задан &#x60;page_token&#x60; или &#x60;limit&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Размер страницы.  Используется вместе с параметром &#x60;page&#x60;.  &#x60;pageSize&#x60; игнорируется, если задан &#x60;page_token&#x60; или &#x60;limit&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetCampaignsResponse**](../Model/GetCampaignsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesTree()`

```php
getCategoriesTree($get_categories_request): \YandexMarketApi\Model\GetCategoriesResponse
```

Дерево категорий

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getCategoriesTree.md) %}  Возвращает дерево категорий Маркета.  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_categories_request = new \YandexMarketApi\Model\GetCategoriesRequest(); // \YandexMarketApi\Model\GetCategoriesRequest

try {
    $result = $apiInstance->getCategoriesTree($get_categories_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getCategoriesTree: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_categories_request** | [**\YandexMarketApi\Model\GetCategoriesRequest**](../Model/GetCategoriesRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetCategoriesResponse**](../Model/GetCategoriesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryContentParameters()`

```php
getCategoryContentParameters($category_id, $business_id): \YandexMarketApi\Model\GetCategoryContentParametersResponse
```

Списки характеристик товаров по категориям

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getCategoryContentParameters.md) %}  Возвращает список характеристик с допустимыми значениями для заданной [листовой категории](*list-category).  Поля в ответе определяют правила передачи характеристики в методах: - [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-assortment/updateOfferMappings.md) - [POST v2/businesses/{businessId}/offer-cards/update](../../reference/content/updateOfferContent.md)  |**⚙️ Лимит:** 100 категорий в минуту | |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | Идентификатор категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится интересующий вас товар, воспользуйтесь запросом [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md).
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  Передайте параметр, чтобы получить характеристики, которые являются особенностями варианта товара в данном кабинете.

try {
    $result = $apiInstance->getCategoryContentParameters($category_id, $business_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getCategoryContentParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category_id** | **int**| Идентификатор категории на Маркете.  Чтобы узнать идентификатор категории, к которой относится интересующий вас товар, воспользуйтесь запросом [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md). | |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  Передайте параметр, чтобы получить характеристики, которые являются особенностями варианта товара в данном кабинете. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetCategoryContentParametersResponse**](../Model/GetCategoryContentParametersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultPrices()`

```php
getDefaultPrices($business_id, $page_token, $limit, $get_default_prices_request): \YandexMarketApi\Model\GetDefaultPricesResponse
```

Просмотр цен на указанные товары во всех магазинах

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getDefaultPrices.md) %}  Возвращает список цен, которые вы установили для всех магазинов любым способом. Например, через API или с помощью Excel-шаблона.  О способах установки цен читайте [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/assortment/operations/prices.html).  |**⚙️ Лимит:** 10 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_default_prices_request = new \YandexMarketApi\Model\GetDefaultPricesRequest(); // \YandexMarketApi\Model\GetDefaultPricesRequest

try {
    $result = $apiInstance->getDefaultPrices($business_id, $page_token, $limit, $get_default_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getDefaultPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_default_prices_request** | [**\YandexMarketApi\Model\GetDefaultPricesRequest**](../Model/GetDefaultPricesRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetDefaultPricesResponse**](../Model/GetDefaultPricesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFulfillmentWarehouses()`

```php
getFulfillmentWarehouses($campaign_id): \YandexMarketApi\Model\GetFulfillmentWarehousesResponse
```

Идентификаторы складов Маркета

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getFulfillmentWarehouses.md) %}  Возвращает список складов Маркета с их идентификаторами.  |**⚙️ Лимит:** 100 запросов в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании магазина.  Указывается, если нужно вернуть все склады Маркета, которые привязаны к определенной кампании магазина.

try {
    $result = $apiInstance->getFulfillmentWarehouses($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getFulfillmentWarehouses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании магазина.  Указывается, если нужно вернуть все склады Маркета, которые привязаны к определенной кампании магазина. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetFulfillmentWarehousesResponse**](../Model/GetFulfillmentWarehousesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferCardsContentStatus()`

```php
getOfferCardsContentStatus($business_id, $page_token, $limit, $get_offer_cards_content_status_request): \YandexMarketApi\Model\GetOfferCardsContentStatusResponse
```

Получение информации о заполненности карточек магазина

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getOfferCardsContentStatus.md) %}  Возвращает сведения о состоянии контента для заданных товаров:  * создана ли карточка товара и в каком она статусе; * рейтинг карточки — на сколько процентов она заполнена; * переданные характеристики товаров; * есть ли ошибки или предупреждения, связанные с контентом; * рекомендации по заполнению карточки.  Чтобы получить другие характеристики товаров, воспользуйтесь методом [POST v2/businesses/{businessId}/offer-mappings](../../reference/business-assortment/getOfferMappings.md).  |**⚙️ Лимит:** 600 запросов в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_offer_cards_content_status_request = new \YandexMarketApi\Model\GetOfferCardsContentStatusRequest(); // \YandexMarketApi\Model\GetOfferCardsContentStatusRequest

try {
    $result = $apiInstance->getOfferCardsContentStatus($business_id, $page_token, $limit, $get_offer_cards_content_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getOfferCardsContentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_offer_cards_content_status_request** | [**\YandexMarketApi\Model\GetOfferCardsContentStatusRequest**](../Model/GetOfferCardsContentStatusRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOfferCardsContentStatusResponse**](../Model/GetOfferCardsContentStatusResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOfferMappings()`

```php
getOfferMappings($business_id, $page_token, $limit, $language, $get_offer_mappings_request): \YandexMarketApi\Model\GetOfferMappingsResponse
```

Информация о товарах в каталоге

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getOfferMappings.md) %}  Возвращает список товаров в каталоге, их категории на Маркете и характеристики каждого товара.  Можно использовать тремя способами: * задать список интересующих SKU; * задать фильтр — в этом случае результаты возвращаются постранично; * не передавать тело запроса, чтобы получить список всех товаров в каталоге.  Чтобы получить категорийные характеристики товаров, воспользуйтесь методом [POST v2/businesses/{businessId}/offer-cards](../../reference/content/getOfferCardsContentStatus.md).  |**⚙️ Лимит:** 600 запросов в минуту, не более 200 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$language = new \YandexMarketApi\Model\CatalogLanguageType(); // CatalogLanguageType | Язык, на котором принимаются и возвращаются значения в параметрах `name` и `description`.  Значение по умолчанию: `RU`.
$get_offer_mappings_request = new \YandexMarketApi\Model\GetOfferMappingsRequest(); // \YandexMarketApi\Model\GetOfferMappingsRequest

try {
    $result = $apiInstance->getOfferMappings($business_id, $page_token, $limit, $language, $get_offer_mappings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getOfferMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **language** | [**CatalogLanguageType**](../Model/.md)| Язык, на котором принимаются и возвращаются значения в параметрах &#x60;name&#x60; и &#x60;description&#x60;.  Значение по умолчанию: &#x60;RU&#x60;. | [optional] |
| **get_offer_mappings_request** | [**\YandexMarketApi\Model\GetOfferMappingsRequest**](../Model/GetOfferMappingsRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOfferMappingsResponse**](../Model/GetOfferMappingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($campaign_id, $order_id): \YandexMarketApi\Model\GetOrderResponse
```

Информация об одном заказе в магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getOrder.md) %}  {% note warning \"Какой метод использовать вместо устаревшего\" %}  [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md)  {% endnote %}  Возвращает информацию о заказе в магазине.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый заказ или изменится его статус. А полную информацию можно получить с помощью метода [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md).  [{#T}](../../push-notifications/index.md)  {% endnote %}  Получить более подробную информацию о покупателе и его номере телефона можно с помощью запроса [GET v2/campaigns/{campaignId}/orders/{orderId}/buyer](../../reference/orders/getOrderBuyerInfo.md).  |**⚙️ Лимит:** 100 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrder($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\YandexMarketApi\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderIdentifiersStatus()`

```php
getOrderIdentifiersStatus($campaign_id, $order_id): \YandexMarketApi\Model\GetOrderIdentifiersStatusResponse
```

Статусы проверки кодов маркировки

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getOrderIdentifiersStatus.md) %}  Возвращает статусы проверки кодов маркировки в заказе.  Заказ, в котором есть ювелирные изделия или товары с обязательной маркировкой в системе [:no-translate[«Честный ЗНАК»]](https://честныйзнак.рф/), можно перевести в статус `READY_TO_SHIP`, только когда:  1. В методе [PUT v2/campaigns/{campaignId}/orders/{orderId}/boxes](../../reference/orders/setOrderBoxLayout.md) вы передадите Маркету:      * [УИНы](:no-translate[*uin]) по каждому ювелирному изделию в заказе;      * коды маркировки в системе :no-translate[«Честный ЗНАК»] по всем товарам в заказе, для которых она обязательна. 2. Все коды маркировки успешно пройдут проверку.  |**⚙️ Лимит:** 100 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.

try {
    $result = $apiInstance->getOrderIdentifiersStatus($campaign_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getOrderIdentifiersStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |

### Return type

[**\YandexMarketApi\Model\GetOrderIdentifiersStatusResponse**](../Model/GetOrderIdentifiersStatusResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($campaign_id, $order_ids, $status, $substatus, $from_date, $to_date, $supplier_shipment_date_from, $supplier_shipment_date_to, $updated_at_from, $updated_at_to, $dispatch_type, $fake, $has_cis, $only_waiting_for_cancellation_approve, $only_estimated_delivery, $buyer_type, $page, $page_size, $page_token, $limit): \YandexMarketApi\Model\GetOrdersResponse
```

Информация о заказах в магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getOrders.md) %}  {% note warning \"Какой метод использовать вместо устаревшего\" %}  [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md)  {% endnote %}  Возвращает информацию о заказах в магазине. Запрос можно использовать для отслеживания заказов и их статусов.  По умолчанию данные о тестовых заказах не приходят. Чтобы их получить, передайте значение `true` в параметре `fake`.  {% note tip \"Вы также можете настроить API-уведомления\" %}  Маркет отправит вам [запрос](../../push-notifications/reference/sendNotification.md), когда появится новый заказ или изменится его статус. А полную информацию можно получить с помощью метода [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md).  [{#T}](../../push-notifications/index.md)  {% endnote %}  Доступна фильтрация по параметрам:  * дата оформления заказа;  * дата и время обновления заказа;  * дата отгрузки;  * статусы заказов (`statuses`);  * этапы обработки или причины отмены (`substatuses`);  * идентификаторы заказов;  * тип заказа (настоящий или тестовый).  Не возвращается информация о заказах, которые доставили или отменили больше 30 дней назад. Как ее получить:  * [POST v1/businesses/{businessId}/orders](../../reference/orders/getBusinessOrders.md); * [POST v2/campaigns/{campaignId}/stats/orders](../../reference/stats/getOrdersStats.md).  Максимальный диапазон дат за один запрос — 30 дней (передается в параметрах `fromDate` и `toDate`). Если их не передать, возвращается информация за последние 30 дней.  Результаты возвращаются постранично. Для навигации используйте параметры `page_token` и `limit`.  Получить более подробную информацию о покупателе и его номере телефона можно с помощью запроса [GET v2/campaigns/{campaignId}/orders/{orderId}/buyer](../../reference/orders/getOrderBuyerInfo.md).  {% note warning \"Ограничение для параметра `limit`\" %}  Не передавайте значение больше 50.  {% endnote %}  |**⚙️ Лимит:** 100 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_ids = array(56); // int[] | Фильтрация заказов по идентификаторам. <br><br> ⚠️ Не используйте это поле одновременно с другими фильтрами. Если вы хотите воспользоваться ими, оставьте поле пустым.
$status = array(new \YandexMarketApi\Model\\YandexMarketApi\Model\OrderStatusType()); // \YandexMarketApi\Model\OrderStatusType[] | Статус заказа:  * `CANCELLED` — заказ отменен.  * `DELIVERED` — заказ получен покупателем.  * `DELIVERY` — заказ передан в службу доставки.  * `PICKUP` — заказ доставлен в пункт выдачи.  * `PROCESSING` — заказ находится в обработке.  * `UNPAID` — заказ оформлен, но еще не оплачен (если выбрана оплата при оформлении).
$substatus = array(new \YandexMarketApi\Model\\YandexMarketApi\Model\OrderSubstatusType()); // \YandexMarketApi\Model\OrderSubstatusType[] | Этап обработки заказа (статус `PROCESSING`) или причина отмены заказа (статус `CANCELLED`).  Возможные значения для заказа в статусе `PROCESSING`:  * `STARTED` — заказ подтвержден, его можно начать обрабатывать. * `READY_TO_SHIP` — заказ собран и готов к отправке. * `SHIPPED` — заказ передан службе доставки.  Возможные значения для заказа в статусе `CANCELLED`:  * `RESERVATION_EXPIRED` — покупатель не завершил оформление зарезервированного заказа в течение 10 минут.  * `USER_NOT_PAID` — покупатель не оплатил заказ (для типа оплаты `PREPAID`) в течение 30 минут.  * `USER_UNREACHABLE` — не удалось связаться с покупателем. Для отмены с этой причиной необходимо выполнить условия:    * не менее 3 звонков с 8 до 21 в часовом поясе покупателя;   * перерыв между первым и третьим звонком не менее 90 минут;   * соединение не короче 5 секунд.    Если хотя бы одно из этих условий не выполнено (кроме случая, когда номер недоступен), отменить заказ не получится. Вернется ответ с кодом ошибки 400  * `USER_CHANGED_MIND` — покупатель отменил заказ по личным причинам.  * `USER_REFUSED_DELIVERY` — покупателя не устроили условия доставки.  * `USER_REFUSED_PRODUCT` — покупателю не подошел товар.  * `SHOP_FAILED` — магазин не может выполнить заказ.  * `USER_REFUSED_QUALITY` — покупателя не устроило качество товара.  * `REPLACING_ORDER` — покупатель решил заменить товар другим по собственной инициативе.  * `PROCESSING_EXPIRED` — значение более не используется.  * `PICKUP_EXPIRED` — закончился срок хранения заказа в ПВЗ.  * `DELIVERY_SERVICE_UNDELIVERED` — служба доставки не смогла доставить заказ.  * `CANCELLED_COURIER_NOT_FOUND` — не удалось найти курьера.  * `USER_WANTS_TO_CHANGE_DELIVERY_DATE` — покупатель хочет получить заказ в другой день.  * `RESERVATION_FAILED` — Маркет не может продолжить дальнейшую обработку заказа.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начальная дата для фильтрации заказов по дате оформления.  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной и конечной датой (параметр `toDate`) должно быть не больше 30 дней.  Значение по умолчанию: 30 дней назад от текущей даты.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конечная дата для фильтрации заказов по дате оформления.  Показываются заказы, созданные до 00:00 указанного дня.  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной (параметр `fromDate`) и конечной датой должно быть не больше 30 дней.  Значение по умолчанию: текущая дата.  Если промежуток времени между `toDate` и `fromDate` меньше суток, то `toDate` равен `fromDate` + сутки.
$supplier_shipment_date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начальная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр `shipmentDate`).  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной и конечной датой (параметр `supplierShipmentDateTo`) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации.
$supplier_shipment_date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конечная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр `shipmentDate`).  Формат даты: `ДД-ММ-ГГГГ`.  Между начальной (параметр `supplierShipmentDateFrom`) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации.  Если промежуток времени между `supplierShipmentDateTo` и `supplierShipmentDateFrom` меньше суток, то `supplierShipmentDateTo` равен `supplierShipmentDateFrom` + сутки.
$updated_at_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Начальная дата для фильтрации заказов по дате и времени обновления (параметр `updatedAt`).  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:42:42+03:00`.  Между начальной и конечной датой (параметр `updatedAtTo`) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации.
$updated_at_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Конечная дата для фильтрации заказов по дате и времени обновления (параметр `updatedAt`).  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:42:42+03:00`.  Между начальной (параметр `updatedAtFrom`) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации.
$dispatch_type = new \YandexMarketApi\Model\OrderDeliveryDispatchType(); // OrderDeliveryDispatchType | Способ отгрузки
$fake = false; // bool | Фильтрация заказов по типам:  * `false` — настоящий заказ покупателя.  * `true` — [тестовый заказ](../../concepts/sandbox.md) Маркета.
$has_cis = false; // bool | Фильтр для получения заказов, в которых есть хотя бы один товар с кодом идентификации в системе [:no-translate[«Честный ЗНАК»]](https://честныйзнак.рф/) или [:no-translate[«ASL BELGISI»]](https://aslbelgisi.uz) (для продавцов :no-translate[Market Yandex Go]):  * `true` — да.  * `false` — нет.  Такие коды присваиваются товарам, которые подлежат маркировке и относятся к определенным категориям.
$only_waiting_for_cancellation_approve = false; // bool | **Только для модели DBS**  Фильтр для получения заказов, по которым был запрос на отмену.  При значении `true` возвращаются только заказы, которые находятся в статусе `DELIVERY` или `PICKUP` и которые пользователи решили отменить.  Чтобы подтвердить или отклонить отмену, отправьте запрос [PUT v2/campaigns/{campaignId}/orders/{orderId}/cancellation/accept](../../reference/orders/acceptOrderCancellation).
$only_estimated_delivery = false; // bool | Фильтрация заказов с долгой доставкой (31-60 дней) по подтвержденной дате доставки:  * `true` — возвращаются только заказы с неподтвержденной датой доставки. * `false` — фильтрация не применяется.
$buyer_type = new \YandexMarketApi\Model\OrderBuyerType(); // OrderBuyerType | Фильтрация заказов по типу покупателя.
$page = 1; // int | {% note warning \"Если в методе есть `page_token`\" %}  Используйте его вместо параметра `page`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром `pageSize`.  `page` игнорируется, если задан `page_token` или `limit`.
$page_size = 56; // int | Размер страницы.  Используется вместе с параметром `page`.  `pageSize` игнорируется, если задан `page_token` или `limit`.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->getOrders($campaign_id, $order_ids, $status, $substatus, $from_date, $to_date, $supplier_shipment_date_from, $supplier_shipment_date_to, $updated_at_from, $updated_at_to, $dispatch_type, $fake, $has_cis, $only_waiting_for_cancellation_approve, $only_estimated_delivery, $buyer_type, $page, $page_size, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_ids** | [**int[]**](../Model/int.md)| Фильтрация заказов по идентификаторам. &lt;br&gt;&lt;br&gt; ⚠️ Не используйте это поле одновременно с другими фильтрами. Если вы хотите воспользоваться ими, оставьте поле пустым. | [optional] |
| **status** | [**\YandexMarketApi\Model\OrderStatusType[]**](../Model/\YandexMarketApi\Model\OrderStatusType.md)| Статус заказа:  * &#x60;CANCELLED&#x60; — заказ отменен.  * &#x60;DELIVERED&#x60; — заказ получен покупателем.  * &#x60;DELIVERY&#x60; — заказ передан в службу доставки.  * &#x60;PICKUP&#x60; — заказ доставлен в пункт выдачи.  * &#x60;PROCESSING&#x60; — заказ находится в обработке.  * &#x60;UNPAID&#x60; — заказ оформлен, но еще не оплачен (если выбрана оплата при оформлении). | [optional] |
| **substatus** | [**\YandexMarketApi\Model\OrderSubstatusType[]**](../Model/\YandexMarketApi\Model\OrderSubstatusType.md)| Этап обработки заказа (статус &#x60;PROCESSING&#x60;) или причина отмены заказа (статус &#x60;CANCELLED&#x60;).  Возможные значения для заказа в статусе &#x60;PROCESSING&#x60;:  * &#x60;STARTED&#x60; — заказ подтвержден, его можно начать обрабатывать. * &#x60;READY_TO_SHIP&#x60; — заказ собран и готов к отправке. * &#x60;SHIPPED&#x60; — заказ передан службе доставки.  Возможные значения для заказа в статусе &#x60;CANCELLED&#x60;:  * &#x60;RESERVATION_EXPIRED&#x60; — покупатель не завершил оформление зарезервированного заказа в течение 10 минут.  * &#x60;USER_NOT_PAID&#x60; — покупатель не оплатил заказ (для типа оплаты &#x60;PREPAID&#x60;) в течение 30 минут.  * &#x60;USER_UNREACHABLE&#x60; — не удалось связаться с покупателем. Для отмены с этой причиной необходимо выполнить условия:    * не менее 3 звонков с 8 до 21 в часовом поясе покупателя;   * перерыв между первым и третьим звонком не менее 90 минут;   * соединение не короче 5 секунд.    Если хотя бы одно из этих условий не выполнено (кроме случая, когда номер недоступен), отменить заказ не получится. Вернется ответ с кодом ошибки 400  * &#x60;USER_CHANGED_MIND&#x60; — покупатель отменил заказ по личным причинам.  * &#x60;USER_REFUSED_DELIVERY&#x60; — покупателя не устроили условия доставки.  * &#x60;USER_REFUSED_PRODUCT&#x60; — покупателю не подошел товар.  * &#x60;SHOP_FAILED&#x60; — магазин не может выполнить заказ.  * &#x60;USER_REFUSED_QUALITY&#x60; — покупателя не устроило качество товара.  * &#x60;REPLACING_ORDER&#x60; — покупатель решил заменить товар другим по собственной инициативе.  * &#x60;PROCESSING_EXPIRED&#x60; — значение более не используется.  * &#x60;PICKUP_EXPIRED&#x60; — закончился срок хранения заказа в ПВЗ.  * &#x60;DELIVERY_SERVICE_UNDELIVERED&#x60; — служба доставки не смогла доставить заказ.  * &#x60;CANCELLED_COURIER_NOT_FOUND&#x60; — не удалось найти курьера.  * &#x60;USER_WANTS_TO_CHANGE_DELIVERY_DATE&#x60; — покупатель хочет получить заказ в другой день.  * &#x60;RESERVATION_FAILED&#x60; — Маркет не может продолжить дальнейшую обработку заказа. | [optional] |
| **from_date** | **\DateTime**| Начальная дата для фильтрации заказов по дате оформления.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной и конечной датой (параметр &#x60;toDate&#x60;) должно быть не больше 30 дней.  Значение по умолчанию: 30 дней назад от текущей даты. | [optional] |
| **to_date** | **\DateTime**| Конечная дата для фильтрации заказов по дате оформления.  Показываются заказы, созданные до 00:00 указанного дня.  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной (параметр &#x60;fromDate&#x60;) и конечной датой должно быть не больше 30 дней.  Значение по умолчанию: текущая дата.  Если промежуток времени между &#x60;toDate&#x60; и &#x60;fromDate&#x60; меньше суток, то &#x60;toDate&#x60; равен &#x60;fromDate&#x60; + сутки. | [optional] |
| **supplier_shipment_date_from** | **\DateTime**| Начальная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр &#x60;shipmentDate&#x60;).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной и конечной датой (параметр &#x60;supplierShipmentDateTo&#x60;) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации. | [optional] |
| **supplier_shipment_date_to** | **\DateTime**| Конечная дата для фильтрации заказов по дате отгрузки в службу доставки (параметр &#x60;shipmentDate&#x60;).  Формат даты: &#x60;ДД-ММ-ГГГГ&#x60;.  Между начальной (параметр &#x60;supplierShipmentDateFrom&#x60;) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации.  Если промежуток времени между &#x60;supplierShipmentDateTo&#x60; и &#x60;supplierShipmentDateFrom&#x60; меньше суток, то &#x60;supplierShipmentDateTo&#x60; равен &#x60;supplierShipmentDateFrom&#x60; + сутки. | [optional] |
| **updated_at_from** | **\DateTime**| Начальная дата для фильтрации заказов по дате и времени обновления (параметр &#x60;updatedAt&#x60;).  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:42:42+03:00&#x60;.  Между начальной и конечной датой (параметр &#x60;updatedAtTo&#x60;) должно быть не больше 30 дней.  Начальная дата включается в интервал для фильтрации. | [optional] |
| **updated_at_to** | **\DateTime**| Конечная дата для фильтрации заказов по дате и времени обновления (параметр &#x60;updatedAt&#x60;).  Формат даты: ISO 8601 со смещением относительно UTC. Например, &#x60;2017-11-21T00:42:42+03:00&#x60;.  Между начальной (параметр &#x60;updatedAtFrom&#x60;) и конечной датой должно быть не больше 30 дней.  Конечная дата не включается в интервал для фильтрации. | [optional] |
| **dispatch_type** | [**OrderDeliveryDispatchType**](../Model/.md)| Способ отгрузки | [optional] |
| **fake** | **bool**| Фильтрация заказов по типам:  * &#x60;false&#x60; — настоящий заказ покупателя.  * &#x60;true&#x60; — [тестовый заказ](../../concepts/sandbox.md) Маркета. | [optional] [default to false] |
| **has_cis** | **bool**| Фильтр для получения заказов, в которых есть хотя бы один товар с кодом идентификации в системе [:no-translate[«Честный ЗНАК»]](https://честныйзнак.рф/) или [:no-translate[«ASL BELGISI»]](https://aslbelgisi.uz) (для продавцов :no-translate[Market Yandex Go]):  * &#x60;true&#x60; — да.  * &#x60;false&#x60; — нет.  Такие коды присваиваются товарам, которые подлежат маркировке и относятся к определенным категориям. | [optional] [default to false] |
| **only_waiting_for_cancellation_approve** | **bool**| **Только для модели DBS**  Фильтр для получения заказов, по которым был запрос на отмену.  При значении &#x60;true&#x60; возвращаются только заказы, которые находятся в статусе &#x60;DELIVERY&#x60; или &#x60;PICKUP&#x60; и которые пользователи решили отменить.  Чтобы подтвердить или отклонить отмену, отправьте запрос [PUT v2/campaigns/{campaignId}/orders/{orderId}/cancellation/accept](../../reference/orders/acceptOrderCancellation). | [optional] [default to false] |
| **only_estimated_delivery** | **bool**| Фильтрация заказов с долгой доставкой (31-60 дней) по подтвержденной дате доставки:  * &#x60;true&#x60; — возвращаются только заказы с неподтвержденной датой доставки. * &#x60;false&#x60; — фильтрация не применяется. | [optional] [default to false] |
| **buyer_type** | [**OrderBuyerType**](../Model/.md)| Фильтрация заказов по типу покупателя. | [optional] |
| **page** | **int**| {% note warning \&quot;Если в методе есть &#x60;page_token&#x60;\&quot; %}  Используйте его вместо параметра &#x60;page&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром &#x60;pageSize&#x60;.  &#x60;page&#x60; игнорируется, если задан &#x60;page_token&#x60; или &#x60;limit&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Размер страницы.  Используется вместе с параметром &#x60;page&#x60;.  &#x60;pageSize&#x60; игнорируется, если задан &#x60;page_token&#x60; или &#x60;limit&#x60;. | [optional] |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetOrdersResponse**](../Model/GetOrdersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricesByOfferIds()`

```php
getPricesByOfferIds($campaign_id, $page_token, $limit, $get_prices_by_offer_ids_request): \YandexMarketApi\Model\GetPricesByOfferIdsResponse
```

Просмотр цен на указанные товары в конкретном магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getPricesByOfferIds.md) %}  Возвращает список цен на указанные товары в магазине.  {% note warning \"Метод только для отдельных магазинов\" %}  Используйте этот метод, только если в кабинете установлены уникальные цены в отдельных магазинах.  Для просмотра цен, которые действуют во всех магазинах, используйте [POST v2/businesses/{businessId}/offer-mappings](../../reference/business-assortment/getOfferMappings.md).  {% endnote %}  |**⚙️ Лимит:** 150 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_prices_by_offer_ids_request = new \YandexMarketApi\Model\GetPricesByOfferIdsRequest(); // \YandexMarketApi\Model\GetPricesByOfferIdsRequest

try {
    $result = $apiInstance->getPricesByOfferIds($campaign_id, $page_token, $limit, $get_prices_by_offer_ids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getPricesByOfferIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_prices_by_offer_ids_request** | [**\YandexMarketApi\Model\GetPricesByOfferIdsRequest**](../Model/GetPricesByOfferIdsRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetPricesByOfferIdsResponse**](../Model/GetPricesByOfferIdsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRegionsCodes()`

```php
getRegionsCodes(): \YandexMarketApi\Model\GetRegionsCodesResponse
```

Список допустимых кодов стран

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getRegionsCodes.md) %}  Возвращает список стран с их кодами в формате :no-translate[ISO 3166-1 alpha-2].  Страна производства `countryCode` понадобится при продаже товаров из-за рубежа для бизнеса. [Инструкция](../../step-by-step/business-info.md)  |**⚙️ Лимит:** 100 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRegionsCodes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getRegionsCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\YandexMarketApi\Model\GetRegionsCodesResponse**](../Model/GetRegionsCodesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportInfo()`

```php
getReportInfo($report_id): \YandexMarketApi\Model\GetReportInfoResponse
```

Получение заданного отчета или документа

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getReportInfo.md) %}  Возвращает статус генерации заданного отчета или документа и, если он готов, ссылку для скачивания.  Чтобы воспользоваться этим запросом, вначале нужно запустить генерацию отчета или документа. [Инструкция](../../step-by-step/reports.md)  |**⚙️ Лимит:** 100 запросов в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | Идентификатор отчета или документа, который вы получили после запуска генерации.

try {
    $result = $apiInstance->getReportInfo($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getReportInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| Идентификатор отчета или документа, который вы получили после запуска генерации. | |

### Return type

[**\YandexMarketApi\Model\GetReportInfoResponse**](../Model/GetReportInfoResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturn()`

```php
getReturn($campaign_id, $order_id, $return_id): \YandexMarketApi\Model\GetReturnResponse
```

Информация о невыкупе или возврате

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getReturn.md) %}  Получает информацию по одному невыкупу или возврату.  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый невыкуп или возврат.  [{#T}](../../push-notifications/index.md)  {% endnote %}  |**⚙️ Лимит:** 10 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$return_id = 56; // int | Идентификатор невыкупа или возврата.

try {
    $result = $apiInstance->getReturn($campaign_id, $order_id, $return_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getReturn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **return_id** | **int**| Идентификатор невыкупа или возврата. | |

### Return type

[**\YandexMarketApi\Model\GetReturnResponse**](../Model/GetReturnResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReturns()`

```php
getReturns($campaign_id, $page_token, $limit, $order_ids, $statuses, $shipment_statuses, $type, $from_date, $to_date, $from_date2, $to_date2): \YandexMarketApi\Model\GetReturnsResponse
```

Список невыкупов и возвратов

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getReturns.md) %}  Получает список невыкупов и возвратов.  Чтобы получить информацию по одному невыкупу или возврату, выполните запрос [GET v2/campaigns/{campaignId}/orders/{orderId}/returns/{returnId}](../../reference/orders/getReturn.md).  {% note tip \"Подключите API-уведомления\" %}  Маркет отправит вам запрос [POST notification](../../push-notifications/reference/sendNotification.md), когда появится новый невыкуп или возврат.  [{#T}](../../push-notifications/index.md)  {% endnote %}  {% note warning \"Ограничение для параметра `limit`\" %}  Не передавайте значение больше 100.  {% endnote %}  |**⚙️ Лимит:** 10 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$order_ids = array(56); // int[] | Идентификаторы заказов — для фильтрации результатов.  Несколько идентификаторов перечисляются через запятую без пробела.
$statuses = [STARTED_BY_USER, WAITING_FOR_DECISION]; // \YandexMarketApi\Model\RefundStatusType[] | Фильтр по статусам возврата денег за возвраты.  Несколько статусов перечисляются через запятую.
$shipment_statuses = [READY_FOR_PICKUP, IN_TRANSIT]; // \YandexMarketApi\Model\ReturnShipmentStatusType[] | Фильтр по логистическим статусам невыкупов и возвратов.  Несколько статусов перечисляются через запятую.
$type = new \YandexMarketApi\Model\ReturnType(); // ReturnType | Тип заказа для фильтрации:  * `UNREDEEMED` — невыкуп.  * `RETURN` — возврат.  Если не указать, в ответе будут и невыкупы, и возвраты.
$from_date = 2022-10-31; // \DateTime | Начальная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: `ГГГГ-ММ-ДД`.
$to_date = 2022-11-30; // \DateTime | Конечная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: `ГГГГ-ММ-ДД`.
$from_date2 = 2022-10-31; // \DateTime | {% note warning \"Вместо него используйте `fromDate`.\" %}     {% endnote %}  Начальная дата для фильтрации невыкупов или возвратов по дате обновления.
$to_date2 = 2022-11-30; // \DateTime | {% note warning \"Вместо него используйте `toDate`.\" %}     {% endnote %}  Конечная дата для фильтрации невыкупов или возвратов по дате обновления.

try {
    $result = $apiInstance->getReturns($campaign_id, $page_token, $limit, $order_ids, $statuses, $shipment_statuses, $type, $from_date, $to_date, $from_date2, $to_date2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **order_ids** | [**int[]**](../Model/int.md)| Идентификаторы заказов — для фильтрации результатов.  Несколько идентификаторов перечисляются через запятую без пробела. | [optional] |
| **statuses** | [**\YandexMarketApi\Model\RefundStatusType[]**](../Model/\YandexMarketApi\Model\RefundStatusType.md)| Фильтр по статусам возврата денег за возвраты.  Несколько статусов перечисляются через запятую. | [optional] |
| **shipment_statuses** | [**\YandexMarketApi\Model\ReturnShipmentStatusType[]**](../Model/\YandexMarketApi\Model\ReturnShipmentStatusType.md)| Фильтр по логистическим статусам невыкупов и возвратов.  Несколько статусов перечисляются через запятую. | [optional] |
| **type** | [**ReturnType**](../Model/.md)| Тип заказа для фильтрации:  * &#x60;UNREDEEMED&#x60; — невыкуп.  * &#x60;RETURN&#x60; — возврат.  Если не указать, в ответе будут и невыкупы, и возвраты. | [optional] |
| **from_date** | **\DateTime**| Начальная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: &#x60;ГГГГ-ММ-ДД&#x60;. | [optional] |
| **to_date** | **\DateTime**| Конечная дата для фильтрации невыкупов или возвратов по дате обновления.  Формат: &#x60;ГГГГ-ММ-ДД&#x60;. | [optional] |
| **from_date2** | **\DateTime**| {% note warning \&quot;Вместо него используйте &#x60;fromDate&#x60;.\&quot; %}     {% endnote %}  Начальная дата для фильтрации невыкупов или возвратов по дате обновления. | [optional] |
| **to_date2** | **\DateTime**| {% note warning \&quot;Вместо него используйте &#x60;toDate&#x60;.\&quot; %}     {% endnote %}  Конечная дата для фильтрации невыкупов или возвратов по дате обновления. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetReturnsResponse**](../Model/GetReturnsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStocks()`

```php
getStocks($campaign_id, $page_token, $limit, $get_warehouse_stocks_request): \YandexMarketApi\Model\GetWarehouseStocksResponse
```

Информация об остатках и оборачиваемости

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getStocks.md) %}  Возвращает данные об остатках товаров (для всех моделей) и об [оборачиваемости](*turnover) товаров (для модели FBY).  {% note info \"По умолчанию данные по оборачивамости не возращаются\" %}  Чтобы они были в ответе, передавайте `true` в поле `withTurnover`.  {% endnote %}  **Для модели FBY:** информация об остатках может возвращаться с нескольких складов Маркета, у которых будут разные `warehouseId`. Получить список складов Маркета можно с помощью метода [GET v2/warehouses](../../reference/warehouses/getFulfillmentWarehouses.md).  **Для модели FBS:** в ответе может вернуться не только партнерский склад, но и склад возвратов Маркета. Это возможно, если возврат поступил в указанную продавцом точку возвратов и долго не был забран.  {% note warning \"Ограничение для параметра `limit`\" %}  Не передавайте значение больше 200.  {% endnote %}  |**⚙️ Лимит:** 100 000 товаров в минуту| |-|  [//]: <> (turnover: Среднее количество дней, за которое товар продается. Подробно об оборачиваемости рассказано в Справке Маркета для продавцов https://yandex.ru/support/marketplace/analytics/turnover.html.)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_warehouse_stocks_request = new \YandexMarketApi\Model\GetWarehouseStocksRequest(); // \YandexMarketApi\Model\GetWarehouseStocksRequest

try {
    $result = $apiInstance->getStocks($campaign_id, $page_token, $limit, $get_warehouse_stocks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getStocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_warehouse_stocks_request** | [**\YandexMarketApi\Model\GetWarehouseStocksRequest**](../Model/GetWarehouseStocksRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetWarehouseStocksResponse**](../Model/GetWarehouseStocksResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplyRequestDocuments()`

```php
getSupplyRequestDocuments($campaign_id, $get_supply_request_documents_request): \YandexMarketApi\Model\GetSupplyRequestDocumentsResponse
```

Получение документов по заявке на поставку, вывоз или утилизацию

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSupplyRequestDocuments.md) %}  Возвращает документы по заявке.  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$get_supply_request_documents_request = new \YandexMarketApi\Model\GetSupplyRequestDocumentsRequest(); // \YandexMarketApi\Model\GetSupplyRequestDocumentsRequest

try {
    $result = $apiInstance->getSupplyRequestDocuments($campaign_id, $get_supply_request_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getSupplyRequestDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **get_supply_request_documents_request** | [**\YandexMarketApi\Model\GetSupplyRequestDocumentsRequest**](../Model/GetSupplyRequestDocumentsRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\GetSupplyRequestDocumentsResponse**](../Model/GetSupplyRequestDocumentsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplyRequestItems()`

```php
getSupplyRequestItems($campaign_id, $get_supply_request_items_request, $page_token, $limit): \YandexMarketApi\Model\GetSupplyRequestItemsResponse
```

Получение товаров в заявке на поставку, вывоз или утилизацию

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSupplyRequestItems.md) %}  Возвращает список товаров в заявке и информацию по ним.  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$get_supply_request_items_request = new \YandexMarketApi\Model\GetSupplyRequestItemsRequest(); // \YandexMarketApi\Model\GetSupplyRequestItemsRequest
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->getSupplyRequestItems($campaign_id, $get_supply_request_items_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getSupplyRequestItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **get_supply_request_items_request** | [**\YandexMarketApi\Model\GetSupplyRequestItemsRequest**](../Model/GetSupplyRequestItemsRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetSupplyRequestItemsResponse**](../Model/GetSupplyRequestItemsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplyRequests()`

```php
getSupplyRequests($campaign_id, $page_token, $limit, $get_supply_requests_request): \YandexMarketApi\Model\GetSupplyRequestsResponse
```

Получение информации о заявках на поставку, вывоз и утилизацию

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSupplyRequests.md) %}  По указанным фильтрам возвращает заявки на поставку, вывоз и утилизацию, а также информацию по ним.  |**⚙️ Лимит:** 1 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.
$get_supply_requests_request = new \YandexMarketApi\Model\GetSupplyRequestsRequest(); // \YandexMarketApi\Model\GetSupplyRequestsRequest

try {
    $result = $apiInstance->getSupplyRequests($campaign_id, $page_token, $limit, $get_supply_requests_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->getSupplyRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |
| **get_supply_requests_request** | [**\YandexMarketApi\Model\GetSupplyRequestsRequest**](../Model/GetSupplyRequestsRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetSupplyRequestsResponse**](../Model/GetSupplyRequestsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchRegionChildren()`

```php
searchRegionChildren($region_id, $page, $page_size): \YandexMarketApi\Model\GetRegionWithChildrenResponse
```

Информация о дочерних регионах

{% include notitle [:no-translate[access]](../../_auto/method_scopes/searchRegionChildren.md) %}  Возвращает информацию о регионах, являющихся дочерними по отношению к региону, идентификатор которого указан в запросе.  Для методов `GET v2/regions`, `GET v2/regions/{regionId}` и `GET v2/regions/{regionId}/children` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество регионов, информация о которых запрошена при помощи этих методов (не более 100 000 регионов).  Объем запросов к ресурсу, который возможно выполнить в течение суток, зависит от суммарного количества регионов.  |**⚙️ Лимит:** 50 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [GET v2/regions](../../reference/regions/searchRegionsByName.md).
$page = 1; // int | {% note warning \"Если в методе есть `page_token`\" %}  Используйте его вместо параметра `page`.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром `pageSize`.  `page` игнорируется, если задан `page_token` или `limit`.
$page_size = 56; // int | Размер страницы.  Используется вместе с параметром `page`.  `pageSize` игнорируется, если задан `page_token` или `limit`.

try {
    $result = $apiInstance->searchRegionChildren($region_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->searchRegionChildren: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [GET v2/regions](../../reference/regions/searchRegionsByName.md). | |
| **page** | **int**| {% note warning \&quot;Если в методе есть &#x60;page_token&#x60;\&quot; %}  Используйте его вместо параметра &#x60;page&#x60;.  [Подробнее о типах пагинации и их использовании](../../concepts/pagination.md)  {% endnote %}  Номер страницы результатов.  Используется вместе с параметром &#x60;pageSize&#x60;.  &#x60;page&#x60; игнорируется, если задан &#x60;page_token&#x60; или &#x60;limit&#x60;. | [optional] [default to 1] |
| **page_size** | **int**| Размер страницы.  Используется вместе с параметром &#x60;page&#x60;.  &#x60;pageSize&#x60; игнорируется, если задан &#x60;page_token&#x60; или &#x60;limit&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetRegionWithChildrenResponse**](../Model/GetRegionWithChildrenResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchRegionsById()`

```php
searchRegionsById($region_id): \YandexMarketApi\Model\GetRegionsResponse
```

Информация о регионе

{% include notitle [:no-translate[access]](../../_auto/method_scopes/searchRegionsById.md) %}  Возвращает информацию о регионе.  Для методов `GET v2/regions`, `GET v2/regions/{regionId}` и `GET v2/regions/{regionId}/children` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество регионов, информация о которых запрошена при помощи этих методов (не более 100 000 регионов).  Объем запросов к ресурсу, который возможно выполнить в течение суток, зависит от суммарного количества регионов.  |**⚙️ Лимит:** 50 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region_id = 56; // int | Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [GET v2/regions](../../reference/regions/searchRegionsByName.md).

try {
    $result = $apiInstance->searchRegionsById($region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->searchRegionsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **region_id** | **int**| Идентификатор региона.  Идентификатор региона можно получить c помощью запроса [GET v2/regions](../../reference/regions/searchRegionsByName.md). | |

### Return type

[**\YandexMarketApi\Model\GetRegionsResponse**](../Model/GetRegionsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchRegionsByName()`

```php
searchRegionsByName($name, $page_token, $limit): \YandexMarketApi\Model\GetRegionsResponse
```

Поиск регионов по их имени

{% include notitle [:no-translate[access]](../../_auto/method_scopes/searchRegionsByName.md) %}  Возвращает информацию о регионе, удовлетворяющем заданным в запросе условиям поиска.  Если найдено несколько регионов, удовлетворяющих условиям поиска, возвращается информация по каждому найденному региону (но не более десяти регионов) для возможности определения нужного региона по родительским регионам.  Для методов `GET v2/regions`, `GET v2/regions/{regionId}` и `GET v2/regions/{regionId}/children` действует групповое ресурсное ограничение. Ограничение вводится на суммарное количество регионов, информация о которых запрошена при помощи этих методов (не более 100 000 регионов).  Объем запросов к ресурсу, который возможно выполнить в течение суток, зависит от суммарного количества регионов.  {% note warning \"Ограничение для параметра `limit`\" %}  Не передавайте значение больше 20.  {% endnote %}  |**⚙️ Лимит:** 50 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Название региона.  Важно учитывать регистр: первая буква должна быть заглавной, остальные — строчными. Например, `Москва`.
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->searchRegionsByName($name, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->searchRegionsByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Название региона.  Важно учитывать регистр: первая буква должна быть заглавной, остальные — строчными. Например, &#x60;Москва&#x60;. | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetRegionsResponse**](../Model/GetRegionsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBusinessPrices()`

```php
updateBusinessPrices($business_id, $update_business_prices_request): \YandexMarketApi\Model\EmptyApiResponse
```

Установка цен на товары для всех магазинов

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateBusinessPrices.md) %}  Устанавливает цены, которые действуют во всех магазинах. Чтобы получить рекомендации Маркета, касающиеся цен, выполните запрос [POST v2/businesses/{businessId}/offers/recommendations](../../reference/business-assortment/getOfferRecommendations.md).  При необходимости передавайте НДС с помощью параметра `vat` в запросе [POST v2/campaigns/{campaignId}/offers/update](../../reference/assortment/updateCampaignOffers.md).  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  |**⚙️ Лимит:** 10 000 товаров в минуту, не более 500 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$update_business_prices_request = new \YandexMarketApi\Model\UpdateBusinessPricesRequest(); // \YandexMarketApi\Model\UpdateBusinessPricesRequest

try {
    $result = $apiInstance->updateBusinessPrices($business_id, $update_business_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->updateBusinessPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **update_business_prices_request** | [**\YandexMarketApi\Model\UpdateBusinessPricesRequest**](../Model/UpdateBusinessPricesRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaignOffers()`

```php
updateCampaignOffers($campaign_id, $update_campaign_offers_request): \YandexMarketApi\Model\EmptyApiResponse
```

Изменение условий продажи товаров в магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateCampaignOffers.md) %}  Изменяет параметры размещения товаров в конкретном магазине: доступность товара, продажа квантами и применяемый НДС.  |**⚙️ Лимит:** 10 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_campaign_offers_request = new \YandexMarketApi\Model\UpdateCampaignOffersRequest(); // \YandexMarketApi\Model\UpdateCampaignOffersRequest

try {
    $result = $apiInstance->updateCampaignOffers($campaign_id, $update_campaign_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->updateCampaignOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **update_campaign_offers_request** | [**\YandexMarketApi\Model\UpdateCampaignOffersRequest**](../Model/UpdateCampaignOffersRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferContent()`

```php
updateOfferContent($business_id, $update_offer_content_request): \YandexMarketApi\Model\UpdateOfferContentResponse
```

Редактирование категорийных характеристик товара

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateOfferContent.md) %}  Редактирует характеристики товара, которые специфичны для категории, к которой он относится.  {% note warning \"Здесь только то, что относится к конкретной категории\" %}  Если вам нужно изменить основные параметры товара (название, описание, изображения, видео, производитель, штрихкод), воспользуйтесь запросом [POST v2/businesses/{businessId}/offer-mappings/update](../../reference/business-assortment/updateOfferMappings.md).  {% endnote %}  Чтобы удалить характеристики, которые заданы в параметрах с типом `string`, передайте пустое значение.  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  |**⚙️ Лимит:** 10 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$update_offer_content_request = new \YandexMarketApi\Model\UpdateOfferContentRequest(); // \YandexMarketApi\Model\UpdateOfferContentRequest

try {
    $result = $apiInstance->updateOfferContent($business_id, $update_offer_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->updateOfferContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **update_offer_content_request** | [**\YandexMarketApi\Model\UpdateOfferContentRequest**](../Model/UpdateOfferContentRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\UpdateOfferContentResponse**](../Model/UpdateOfferContentResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOfferMappings()`

```php
updateOfferMappings($business_id, $update_offer_mappings_request, $language): \YandexMarketApi\Model\UpdateOfferMappingsResponse
```

Добавление товаров в каталог и изменение информации о них

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateOfferMappings.md) %}  Добавляет товары в каталог и передает:  * их [листовые категории](*list-categories) на Маркете и категорийные характеристики; * основные характеристики; * цены на товары в кабинете.  Также объединяет товары на карточке, редактирует и удаляет информацию об уже добавленных товарах, в том числе цены в кабинете и категории товаров.  Список категорий Маркета можно получить с помощью запроса [POST v2/categories/tree](../../reference/categories/getCategoriesTree.md), а характеристики товаров по категориям с помощью [POST v2/category/{categoryId}/parameters](../../reference/content/getCategoryContentParameters.md).  {% cut \"Добавить новый товар\" %}  Передайте его с новым идентификатором, который раньше никогда не использовался в каталоге.  Обязательно укажите параметры: `offerId`, `name`, `marketCategoryId`, `pictures`, `vendor`, `description`.  Старайтесь сразу передать как можно больше информации — она потребуется Маркету для подбора подходящей карточки или создания новой.  Если известно, какой карточке на Маркете соответствует товар, можно сразу указать идентификатор этой карточки (SKU на Маркете) в поле `marketSKU`.  **Для продавцов Market Yandex Go:**  Когда вы добавляете товары в каталог, указывайте значения параметров `name` и `description` на русском языке. Чтобы на витрине они отображались и на другом языке, еще раз выполните запрос `POST v2/businesses/{businessId}/offer-mappings/update`, где укажите:    * язык в параметре `language`;   * значения параметров `name` и `description` на указанном языке.    Повторно передавать остальные характеристики товара не нужно.  {% endcut %}  {% cut \"Изменить информацию о товаре\" %}  Передайте новые данные, указав в `offerId` SKU товара в вашей системе.  Поля, в которых ничего не меняется, можно не передавать.  {% endcut %}  {% cut \"Удалить переданные ранее параметры товара\" %}  В `deleteParameters` укажите значения параметров, которые хотите удалить. Можно передать сразу несколько значений.  Для параметров с типом `string` также можно передать пустое значение.  {% endcut %}  Параметр `offerId` (SKU товара в вашей системе) должен быть **уникальным** для всех товаров, которые вы передаете.  {% note warning \"Правила использования SKU\" %}  * У каждого товара SKU должен быть свой.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  SKU товара можно изменить в кабинете продавца на Маркете. О том, как это сделать, читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/assortment/operations/edit-sku).  {% endnote %}  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  |**⚙️ Лимит:** 10 000 товаров в минуту, не более 100 товаров в одном запросе| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$update_offer_mappings_request = new \YandexMarketApi\Model\UpdateOfferMappingsRequest(); // \YandexMarketApi\Model\UpdateOfferMappingsRequest
$language = new \YandexMarketApi\Model\CatalogLanguageType(); // CatalogLanguageType | Язык, на котором принимаются и возвращаются значения в параметрах `name` и `description`.  Значение по умолчанию: `RU`.

try {
    $result = $apiInstance->updateOfferMappings($business_id, $update_offer_mappings_request, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->updateOfferMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **update_offer_mappings_request** | [**\YandexMarketApi\Model\UpdateOfferMappingsRequest**](../Model/UpdateOfferMappingsRequest.md)|  | |
| **language** | [**CatalogLanguageType**](../Model/.md)| Язык, на котором принимаются и возвращаются значения в параметрах &#x60;name&#x60; и &#x60;description&#x60;.  Значение по умолчанию: &#x60;RU&#x60;. | [optional] |

### Return type

[**\YandexMarketApi\Model\UpdateOfferMappingsResponse**](../Model/UpdateOfferMappingsResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStatus()`

```php
updateOrderStatus($campaign_id, $order_id, $update_order_status_request): \YandexMarketApi\Model\UpdateOrderStatusResponse
```

Изменение статуса одного заказа

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateOrderStatus.md) %}  Изменяет статус заказа. Возможные изменения статусов:  * Если магазин подтвердил и подготовил заказ к отправке, то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"PROCESSING\"` и этап обработки `\"substatus\": \"READY_TO_SHIP\"`. * Если магазин подтвердил заказ, но не может его выполнить (например, товар числится в базе, но отсутствует на складе или нет нужного цвета), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`. * Если магазин подготовил заказ к отгрузке, но не может его выполнить (например, последний товар был поврежден или оказался с браком), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"READY_TO_SHIP\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`.  |**⚙️ Лимит:** 100 000 запросов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$order_id = 56; // int | Идентификатор заказа.
$update_order_status_request = new \YandexMarketApi\Model\UpdateOrderStatusRequest(); // \YandexMarketApi\Model\UpdateOrderStatusRequest

try {
    $result = $apiInstance->updateOrderStatus($campaign_id, $order_id, $update_order_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->updateOrderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **order_id** | **int**| Идентификатор заказа. | |
| **update_order_status_request** | [**\YandexMarketApi\Model\UpdateOrderStatusRequest**](../Model/UpdateOrderStatusRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\UpdateOrderStatusResponse**](../Model/UpdateOrderStatusResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrderStatuses()`

```php
updateOrderStatuses($campaign_id, $update_order_statuses_request): \YandexMarketApi\Model\UpdateOrderStatusesResponse
```

Изменение статусов нескольких заказов

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updateOrderStatuses.md) %}  Изменяет статусы нескольких заказов.  Возможные изменения статусов:  * Если магазин подтвердил и подготовил заказ к отправке, то заказ из статуса `\"status\": \"PROCESSING\"`и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"PROCESSING\"` и этап обработки `\"substatus\": \"READY_TO_SHIP\"`. * Если магазин подтвердил заказ, но не может его выполнить (например, товар числится в базе, но отсутствует на складе или нет нужного цвета), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"STARTED\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`. * Если магазин подготовил заказ к отгрузке, но не может его выполнить (например, последний товар был поврежден или оказался с браком), то заказ из статуса `\"status\": \"PROCESSING\"` и этапа обработки `\"substatus\": \"READY_TO_SHIP\"` нужно перевести в статус `\"status\": \"CANCELLED\"` с причиной отмены заказа `\"substatus\": \"SHOP_FAILED\"`.  |**⚙️ Лимит:** 100 000 заказов в час| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_order_statuses_request = new \YandexMarketApi\Model\UpdateOrderStatusesRequest(); // \YandexMarketApi\Model\UpdateOrderStatusesRequest

try {
    $result = $apiInstance->updateOrderStatuses($campaign_id, $update_order_statuses_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->updateOrderStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **update_order_statuses_request** | [**\YandexMarketApi\Model\UpdateOrderStatusesRequest**](../Model/UpdateOrderStatusesRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\UpdateOrderStatusesResponse**](../Model/UpdateOrderStatusesResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePrices()`

```php
updatePrices($campaign_id, $update_prices_request): \YandexMarketApi\Model\EmptyApiResponse
```

Установка цен на товары в конкретном магазине

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updatePrices.md) %}  Устанавливает цены на товары в магазине. Чтобы получить рекомендации Маркета, касающиеся цен, выполните запрос [POST v2/businesses/{businessId}/offers/recommendations](../../reference/business-assortment/getOfferRecommendations.md).  {% note warning \"Метод только для отдельных магазинов\" %}  Вам доступен этот метод, если в кабинете продавца на Маркете есть возможность установить уникальные цены в отдельных магазинах. Как это проверить — в методе [POST v2/businesses/{businessId}/settings](../../reference/businesses/getBusinessSettings.md) в параметре `onlyDefaultPrice` возвращается значение `false`.  В ином случае используйте метод управления ценами, которые действуют во всех магазинах, — [POST v2/businesses/{businessId}/offer-prices/updates](../../reference/business-assortment/updateBusinessPrices.md).  {% endnote %}  {% note info \"Данные в каталоге обновляются не мгновенно\" %}  Это занимает до нескольких минут.  {% endnote %}  |**⚙️ Лимит:** 10 000 товаров в минуту| |-|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKey('Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = YandexMarketApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Api-Key', 'Bearer');

// Configure OAuth2 access token for authorization: OAuth
$config = YandexMarketApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YandexMarketApi\Api\LaasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями.
$update_prices_request = new \YandexMarketApi\Model\UpdatePricesRequest(); // \YandexMarketApi\Model\UpdatePricesRequest

try {
    $result = $apiInstance->updatePrices($campaign_id, $update_prices_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LaasApi->updatePrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| Идентификатор кампании (магазина) — технический идентификатор, который представляет ваш магазин в системе Яндекс Маркета при работе через API. Он однозначно связывается с вашим магазином, но предназначен только для автоматизированного взаимодействия.  Его можно узнать с помощью запроса [GET v2/campaigns](../../reference/campaigns/getCampaigns.md) или найти в кабинете продавца на Маркете. Нажмите на иконку вашего аккаунта → **Настройки** и в меню слева выберите **API и модули**:  * блок **Идентификатор кампании**; * вкладка **Лог запросов** → выпадающий список в блоке **Показывать логи**.  ⚠️ Не путайте его с: - идентификатором магазина, который отображается в личном кабинете продавца; - рекламными кампаниями. | |
| **update_prices_request** | [**\YandexMarketApi\Model\UpdatePricesRequest**](../Model/UpdatePricesRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\EmptyApiResponse**](../Model/EmptyApiResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
