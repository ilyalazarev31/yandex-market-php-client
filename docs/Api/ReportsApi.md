# YandexMarketApi\ReportsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**generateBannersStatisticsReport()**](ReportsApi.md#generateBannersStatisticsReport) | **POST** /v2/reports/banners-statistics/generate | Отчет по охватному продвижению |
| [**generateBarcodesReport()**](ReportsApi.md#generateBarcodesReport) | **POST** /v1/reports/documents/barcodes/generate | Получение файла со штрихкодами |
| [**generateBoostConsolidatedReport()**](ReportsApi.md#generateBoostConsolidatedReport) | **POST** /v2/reports/boost-consolidated/generate | Отчет по бусту продаж |
| [**generateClosureDocumentsDetalizationReport()**](ReportsApi.md#generateClosureDocumentsDetalizationReport) | **POST** /v2/reports/closure-documents/detalization/generate | Отчет по схождению с закрывающими документами |
| [**generateClosureDocumentsReport()**](ReportsApi.md#generateClosureDocumentsReport) | **POST** /v2/reports/closure-documents/generate | Закрывающие документы |
| [**generateCompetitorsPositionReport()**](ReportsApi.md#generateCompetitorsPositionReport) | **POST** /v2/reports/competitors-position/generate | Отчет «Конкурентная позиция» |
| [**generateGoodsFeedbackReport()**](ReportsApi.md#generateGoodsFeedbackReport) | **POST** /v2/reports/goods-feedback/generate | Отчет по отзывам о товарах |
| [**generateGoodsMovementReport()**](ReportsApi.md#generateGoodsMovementReport) | **POST** /v2/reports/goods-movement/generate | Отчет по движению товаров |
| [**generateGoodsPricesReport()**](ReportsApi.md#generateGoodsPricesReport) | **POST** /v2/reports/goods-prices/generate | Отчет «Цены» |
| [**generateGoodsRealizationReport()**](ReportsApi.md#generateGoodsRealizationReport) | **POST** /v2/reports/goods-realization/generate | Отчет по реализации |
| [**generateGoodsTurnoverReport()**](ReportsApi.md#generateGoodsTurnoverReport) | **POST** /v2/reports/goods-turnover/generate | Отчет по оборачиваемости |
| [**generateJewelryFiscalReport()**](ReportsApi.md#generateJewelryFiscalReport) | **POST** /v2/reports/jewelry-fiscal/generate | Отчет по заказам с ювелирными изделиями |
| [**generateKeyIndicatorsReport()**](ReportsApi.md#generateKeyIndicatorsReport) | **POST** /v2/reports/key-indicators/generate | Отчет по ключевым показателям |
| [**generateMassOrderLabelsReport()**](ReportsApi.md#generateMassOrderLabelsReport) | **POST** /v2/reports/documents/labels/generate | Готовые ярлыки‑наклейки на все коробки в нескольких заказах |
| [**generatePricesReport()**](ReportsApi.md#generatePricesReport) | **POST** /v2/reports/prices/generate | Отчет «Цены на рынке» |
| [**generateSalesGeographyReport()**](ReportsApi.md#generateSalesGeographyReport) | **POST** /v2/reports/sales-geography/generate | Отчет по географии продаж |
| [**generateShelfsStatisticsReport()**](ReportsApi.md#generateShelfsStatisticsReport) | **POST** /v2/reports/shelf-statistics/generate | Отчет по полкам |
| [**generateShipmentListDocumentReport()**](ReportsApi.md#generateShipmentListDocumentReport) | **POST** /v2/reports/documents/shipment-list/generate | Получение листа сборки |
| [**generateShowsBoostReport()**](ReportsApi.md#generateShowsBoostReport) | **POST** /v2/reports/shows-boost/generate | Отчет по бусту показов |
| [**generateShowsSalesReport()**](ReportsApi.md#generateShowsSalesReport) | **POST** /v2/reports/shows-sales/generate | Отчет «Аналитика продаж» |
| [**generateStocksOnWarehousesReport()**](ReportsApi.md#generateStocksOnWarehousesReport) | **POST** /v2/reports/stocks-on-warehouses/generate | Отчет по остаткам на складах |
| [**generateUnitedMarketplaceServicesReport()**](ReportsApi.md#generateUnitedMarketplaceServicesReport) | **POST** /v2/reports/united-marketplace-services/generate | Отчет по стоимости услуг |
| [**generateUnitedNettingReport()**](ReportsApi.md#generateUnitedNettingReport) | **POST** /v2/reports/united-netting/generate | Отчет по платежам |
| [**generateUnitedOrdersReport()**](ReportsApi.md#generateUnitedOrdersReport) | **POST** /v2/reports/united-orders/generate | Отчет по заказам |
| [**generateUnitedReturnsReport()**](ReportsApi.md#generateUnitedReturnsReport) | **POST** /v2/reports/united-returns/generate | Отчет по невыкупам и возвратам |
| [**getReportInfo()**](ReportsApi.md#getReportInfo) | **GET** /v2/reports/info/{reportId} | Получение заданного отчета или документа |


## `generateBannersStatisticsReport()`

```php
generateBannersStatisticsReport($generate_banners_statistics_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по охватному продвижению

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateBannersStatisticsReport.md) %}  Запускает генерацию сводного отчета по охватному продвижению. Что это за отчет: [для баннеров](https://yandex.ru/support/marketplace/ru/marketing/advertising-tools/banner#statistics), [для пуш-уведомлений](https://yandex.ru/support/marketplace/ru/marketing/advertising-tools/push-notifications#statistics).  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/incuts/banners_statistics.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_banners_statistics_request = new \YandexMarketApi\Model\GenerateBannersStatisticsRequest(); // \YandexMarketApi\Model\GenerateBannersStatisticsRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateBannersStatisticsReport($generate_banners_statistics_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateBannersStatisticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_banners_statistics_request** | [**\YandexMarketApi\Model\GenerateBannersStatisticsRequest**](../Model/GenerateBannersStatisticsRequest.md)|  | |
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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
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
    echo 'Exception when calling ReportsApi->generateBarcodesReport: ', $e->getMessage(), PHP_EOL;
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

## `generateBoostConsolidatedReport()`

```php
generateBoostConsolidatedReport($generate_boost_consolidated_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по бусту продаж

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateBoostConsolidatedReport.md) %}  Запускает генерацию сводного отчета по бусту продаж за заданный период. [Что такое буст продаж](https://yandex.ru/support/marketplace/ru/marketing/campaigns)  Отчет содержит информацию по всем кампаниям, созданным и через API, и в кабинете.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/boost/consolidated/business_boost_consolidated.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_boost_consolidated_request = new \YandexMarketApi\Model\GenerateBoostConsolidatedRequest(); // \YandexMarketApi\Model\GenerateBoostConsolidatedRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateBoostConsolidatedReport($generate_boost_consolidated_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateBoostConsolidatedReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_boost_consolidated_request** | [**\YandexMarketApi\Model\GenerateBoostConsolidatedRequest**](../Model/GenerateBoostConsolidatedRequest.md)|  | |
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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
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
    echo 'Exception when calling ReportsApi->generateClosureDocumentsDetalizationReport: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
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
    echo 'Exception when calling ReportsApi->generateClosureDocumentsReport: ', $e->getMessage(), PHP_EOL;
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

## `generateCompetitorsPositionReport()`

```php
generateCompetitorsPositionReport($generate_competitors_position_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет «Конкурентная позиция»

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateCompetitorsPositionReport.md) %}  Запускает генерацию отчета «Конкурентная позиция» за заданный период. [Что это за отчет](https://yandex.ru/support2/marketplace/ru/analytics/competitors.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% note info \"Значение -1 в отчете\" %}  Если в CSV-файле в столбце :no-translate[**POSITION**] стоит -1, в этот день не было заказов с товарами в указанной категории.  {% endnote %}  {% include notitle [:no-translate[reports]](../../_auto/reports/masterstat/competitors_position.md) %}  |**⚙️ Лимит:** 10 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_competitors_position_report_request = new \YandexMarketApi\Model\GenerateCompetitorsPositionReportRequest(); // \YandexMarketApi\Model\GenerateCompetitorsPositionReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateCompetitorsPositionReport($generate_competitors_position_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateCompetitorsPositionReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_competitors_position_report_request** | [**\YandexMarketApi\Model\GenerateCompetitorsPositionReportRequest**](../Model/GenerateCompetitorsPositionReportRequest.md)|  | |
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

## `generateGoodsFeedbackReport()`

```php
generateGoodsFeedbackReport($generate_goods_feedback_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по отзывам о товарах

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateGoodsFeedbackReport.md) %}  Запускает генерацию отчета по отзывам о товарах. [Что это за отчет](https://yandex.ru/support/marketplace/ru/marketing/plus-reviews#stat)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/paid_opinion_models/paid_opinion_models.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_feedback_request = new \YandexMarketApi\Model\GenerateGoodsFeedbackRequest(); // \YandexMarketApi\Model\GenerateGoodsFeedbackRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsFeedbackReport($generate_goods_feedback_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsFeedbackReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_feedback_request** | [**\YandexMarketApi\Model\GenerateGoodsFeedbackRequest**](../Model/GenerateGoodsFeedbackRequest.md)|  | |
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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
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
    echo 'Exception when calling ReportsApi->generateGoodsMovementReport: ', $e->getMessage(), PHP_EOL;
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

## `generateGoodsPricesReport()`

```php
generateGoodsPricesReport($generate_goods_prices_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет «Цены»

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateGoodsPricesReport.md) %}  Запускает генерацию отчета «Цены».  **Какая информация вернется:**  * если передать `businessId` — по единым ценам кабинета; * если [включены магазинные цены](*onlyDefaultPrice-false) и указать `campaignId` — по ценам в соответствующем магазине.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - Цены во всех магазинах кабинета    {% include notitle [:no-translate[reports]](../../_auto/reports/prices/mass_assortment_business_price_v2.md) %}  - Магазинные цены    {% include notitle [:no-translate[reports]](../../_auto/reports/prices/mass_assortment_price_v2.md) %}  {% endlist %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_prices_report_request = new \YandexMarketApi\Model\GenerateGoodsPricesReportRequest(); // \YandexMarketApi\Model\GenerateGoodsPricesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsPricesReport($generate_goods_prices_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsPricesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_prices_report_request** | [**\YandexMarketApi\Model\GenerateGoodsPricesReportRequest**](../Model/GenerateGoodsPricesReportRequest.md)|  | |
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

## `generateGoodsRealizationReport()`

```php
generateGoodsRealizationReport($generate_goods_realization_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по реализации

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateGoodsRealizationReport.md) %}  Запускает генерацию отчета по реализации за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#sales-report)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% list tabs %}  - FBY, FBS, Экспресс    {% include notitle [:no-translate[reports]](../../_auto/reports/united/statistics/generator/united_statistics_v2.md) %}  - DBS    {% include notitle [:no-translate[reports]](../../_auto/reports/united/statistics/generator/united_statistics_v2_dbs.md) %}  {% endlist %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_realization_report_request = new \YandexMarketApi\Model\GenerateGoodsRealizationReportRequest(); // \YandexMarketApi\Model\GenerateGoodsRealizationReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsRealizationReport($generate_goods_realization_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsRealizationReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_realization_report_request** | [**\YandexMarketApi\Model\GenerateGoodsRealizationReportRequest**](../Model/GenerateGoodsRealizationReportRequest.md)|  | |
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

## `generateGoodsTurnoverReport()`

```php
generateGoodsTurnoverReport($generate_goods_turnover_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по оборачиваемости

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateGoodsTurnoverReport.md) %}  Запускает генерацию отчета по оборачиваемости за заданную дату.  [Что это за отчет](https://yandex.ru/support/marketplace/ru/storage/logistics#turnover)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/turnover/turnover.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_goods_turnover_request = new \YandexMarketApi\Model\GenerateGoodsTurnoverRequest(); // \YandexMarketApi\Model\GenerateGoodsTurnoverRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateGoodsTurnoverReport($generate_goods_turnover_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateGoodsTurnoverReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_goods_turnover_request** | [**\YandexMarketApi\Model\GenerateGoodsTurnoverRequest**](../Model/GenerateGoodsTurnoverRequest.md)|  | |
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

## `generateJewelryFiscalReport()`

```php
generateJewelryFiscalReport($generate_jewelry_fiscal_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по заказам с ювелирными изделиями

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateJewelryFiscalReport.md) %}  Запускает генерацию отчета по заказам с ювелирными изделиями.  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/identifiers/jewelry/orders_jewelry_fiscal.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_jewelry_fiscal_report_request = new \YandexMarketApi\Model\GenerateJewelryFiscalReportRequest(); // \YandexMarketApi\Model\GenerateJewelryFiscalReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateJewelryFiscalReport($generate_jewelry_fiscal_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateJewelryFiscalReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_jewelry_fiscal_report_request** | [**\YandexMarketApi\Model\GenerateJewelryFiscalReportRequest**](../Model/GenerateJewelryFiscalReportRequest.md)|  | |
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

## `generateKeyIndicatorsReport()`

```php
generateKeyIndicatorsReport($generate_key_indicators_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по ключевым показателям

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateKeyIndicatorsReport.md) %}  Запускает генерацию отчета по ключевым показателям. [Что это за отчет](https://yandex.ru/support/marketplace/ru/analytics/key-metrics)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/key_indicators/key_indicators.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_key_indicators_request = new \YandexMarketApi\Model\GenerateKeyIndicatorsRequest(); // \YandexMarketApi\Model\GenerateKeyIndicatorsRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateKeyIndicatorsReport($generate_key_indicators_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateKeyIndicatorsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_key_indicators_request** | [**\YandexMarketApi\Model\GenerateKeyIndicatorsRequest**](../Model/GenerateKeyIndicatorsRequest.md)|  | |
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

## `generateMassOrderLabelsReport()`

```php
generateMassOrderLabelsReport($generate_mass_order_labels_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Готовые ярлыки‑наклейки на все коробки в нескольких заказах

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateMassOrderLabelsReport.md) %}  Запускает генерацию PDF-файла с ярлыками для переданных заказов. Подробно о том, зачем они нужны и как выглядят, рассказано [в Справке Маркета для продавцов](https://yandex.ru/support/marketplace/orders/fbs/packaging/marking.html).  Чтобы на ярлыке отображался внешний идентификатор заказа, передайте его в методе [POST v2/campaigns/{campaignId}/orders/{orderId}/external-id](../../reference/orders/updateExternalOrderId.md).  Узнать статус генерации и получить ссылку на готовый файл можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 1 000 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_mass_order_labels_request = new \YandexMarketApi\Model\GenerateMassOrderLabelsRequest(); // \YandexMarketApi\Model\GenerateMassOrderLabelsRequest
$format = new \YandexMarketApi\Model\PageFormatType(); // PageFormatType | Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7].

try {
    $result = $apiInstance->generateMassOrderLabelsReport($generate_mass_order_labels_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateMassOrderLabelsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_mass_order_labels_request** | [**\YandexMarketApi\Model\GenerateMassOrderLabelsRequest**](../Model/GenerateMassOrderLabelsRequest.md)|  | |
| **format** | [**PageFormatType**](../Model/.md)| Настройка размещения ярлыков на странице. Если параметра нет, возвращается PDF с ярлыками формата :no-translate[A7]. | [optional] |

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

## `generatePricesReport()`

```php
generatePricesReport($generate_prices_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет «Цены на рынке»

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generatePricesReport.md) %}  {% note warning \"Какой метод использовать вместо устаревшего\" %}  [POST v2/reports/goods-prices/generate](../../reference/reports/generateGoodsPricesReport.md)  {% endnote %}  Запускает генерацию отчета «Цены на рынке».  В отчете возвращается информация только по 50 000 товаров. Если у вас их больше, используйте фильтры.  {% note warning \"Данные в этом отчете постоянно обновляются\" %}  Поэтому информация в нем и в кабинете продавца на Маркете на странице **Цены** может отличаться.  {% endnote %}  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/prices/business_prices_v2.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_prices_report_request = new \YandexMarketApi\Model\GeneratePricesReportRequest(); // \YandexMarketApi\Model\GeneratePricesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generatePricesReport($generate_prices_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generatePricesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_prices_report_request** | [**\YandexMarketApi\Model\GeneratePricesReportRequest**](../Model/GeneratePricesReportRequest.md)|  | |
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

## `generateSalesGeographyReport()`

```php
generateSalesGeographyReport($generate_sales_geography_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по географии продаж

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateSalesGeographyReport.md) %}  Запускает генерацию отчета по географии продаж. [Что это за отчет](https://yandex.ru/support/marketplace/ru/analytics/sales-geography)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/locality/locality_offers_report_v2.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_sales_geography_request = new \YandexMarketApi\Model\GenerateSalesGeographyRequest(); // \YandexMarketApi\Model\GenerateSalesGeographyRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateSalesGeographyReport($generate_sales_geography_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateSalesGeographyReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_sales_geography_request** | [**\YandexMarketApi\Model\GenerateSalesGeographyRequest**](../Model/GenerateSalesGeographyRequest.md)|  | |
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

## `generateShelfsStatisticsReport()`

```php
generateShelfsStatisticsReport($generate_shelfs_statistics_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по полкам

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateShelfsStatisticsReport.md) %}  Запускает генерацию сводного отчета по полкам — рекламным блокам с баннером или видео и набором товаров. Подробнее о них читайте [в Справке Маркета для продавцов](https://yandex.ru/support2/marketplace/ru/marketing/shelf).  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/incuts/shelfs_statistics.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shelfs_statistics_request = new \YandexMarketApi\Model\GenerateShelfsStatisticsRequest(); // \YandexMarketApi\Model\GenerateShelfsStatisticsRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateShelfsStatisticsReport($generate_shelfs_statistics_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShelfsStatisticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shelfs_statistics_request** | [**\YandexMarketApi\Model\GenerateShelfsStatisticsRequest**](../Model/GenerateShelfsStatisticsRequest.md)|  | |
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

## `generateShipmentListDocumentReport()`

```php
generateShipmentListDocumentReport($generate_shipment_list_document_report_request): \YandexMarketApi\Model\GenerateReportResponse
```

Получение листа сборки

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateShipmentListDocumentReport.md) %}  Запускает генерацию **листа сборки** для отгрузки.  Чтобы на в листе сборки отображался внешний идентификатор заказа, передайте его в методе [POST v2/campaigns/{campaignId}/orders/{orderId}/external-id](../../reference/orders/updateExternalOrderId.md).  Узнать статус генерации и получить ссылку на готовый документ можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shipment_list_document_report_request = new \YandexMarketApi\Model\GenerateShipmentListDocumentReportRequest(); // \YandexMarketApi\Model\GenerateShipmentListDocumentReportRequest

try {
    $result = $apiInstance->generateShipmentListDocumentReport($generate_shipment_list_document_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShipmentListDocumentReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shipment_list_document_report_request** | [**\YandexMarketApi\Model\GenerateShipmentListDocumentReportRequest**](../Model/GenerateShipmentListDocumentReportRequest.md)|  | |

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

## `generateShowsBoostReport()`

```php
generateShowsBoostReport($generate_shows_boost_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по бусту показов

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateShowsBoostReport.md) %}  Запускает генерацию сводного отчета по бусту показов за заданный период. [Что такое буст показов](https://yandex.ru/support/marketplace/ru/marketing/boost-shows)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/cpm_boost/business_cpm_boost_consolidated.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shows_boost_request = new \YandexMarketApi\Model\GenerateShowsBoostRequest(); // \YandexMarketApi\Model\GenerateShowsBoostRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateShowsBoostReport($generate_shows_boost_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShowsBoostReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shows_boost_request** | [**\YandexMarketApi\Model\GenerateShowsBoostRequest**](../Model/GenerateShowsBoostRequest.md)|  | |
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

## `generateShowsSalesReport()`

```php
generateShowsSalesReport($generate_shows_sales_report_request, $format): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет «Аналитика продаж»

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateShowsSalesReport.md) %}  Запускает генерацию отчета «Аналитика продаж» за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/analytics/shows-sales.html)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/masterstat/sales_funnel_by_created_at.md) %}  |**⚙️ Лимит:** 10 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_shows_sales_report_request = new \YandexMarketApi\Model\GenerateShowsSalesReportRequest(); // \YandexMarketApi\Model\GenerateShowsSalesReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.

try {
    $result = $apiInstance->generateShowsSalesReport($generate_shows_sales_report_request, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateShowsSalesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_shows_sales_report_request** | [**\YandexMarketApi\Model\GenerateShowsSalesReportRequest**](../Model/GenerateShowsSalesReportRequest.md)|  | |
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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
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
    echo 'Exception when calling ReportsApi->generateStocksOnWarehousesReport: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
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
    echo 'Exception when calling ReportsApi->generateUnitedMarketplaceServicesReport: ', $e->getMessage(), PHP_EOL;
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

## `generateUnitedNettingReport()`

```php
generateUnitedNettingReport($generate_united_netting_report_request, $format, $language): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по платежам

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateUnitedNettingReport.md) %}  Запускает генерацию отчета по платежам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#all-pay)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  Тип отчета зависит от того, какие поля заполнены в запросе:  #| || **Тип отчета** | **Какие поля нужны** | **Комментарий** || || О платежах за период | `dateFrom` и `dateTo` |   В отчет попадают все платежи, которые были выплачены и начислены в выбранный период.    Пример: если перевод выполнен 31 августа и зачислен 1 сентября, он попадет в отчет за оба месяца. || || О платежном поручении | `bankOrderId` и `bankOrderDateTime` |—|| || [О баллах Маркета](*баллы_маркета) | `monthOfYear` |—|| |#  Заказать отчеты нескольких типов одним запросом нельзя.  {% include notitle [:no-translate[reports]](../../_auto/reports/united/netting/generator/united_netting.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_netting_report_request = new \YandexMarketApi\Model\GenerateUnitedNettingReportRequest(); // \YandexMarketApi\Model\GenerateUnitedNettingReportRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.
$language = new \YandexMarketApi\Model\ReportLanguageType(); // ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedNettingReport($generate_united_netting_report_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedNettingReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_netting_report_request** | [**\YandexMarketApi\Model\GenerateUnitedNettingReportRequest**](../Model/GenerateUnitedNettingReportRequest.md)|  | |
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

## `generateUnitedOrdersReport()`

```php
generateUnitedOrdersReport($generate_united_orders_request, $format, $language): \YandexMarketApi\Model\GenerateReportResponse
```

Отчет по заказам

{% include notitle [:no-translate[access]](../../_auto/method_scopes/generateUnitedOrdersReport.md) %}  Запускает генерацию отчета по заказам за заданный период. [Что это за отчет](https://yandex.ru/support/marketplace/ru/accounting/transactions#get-report)  Узнать статус генерации и получить ссылку на готовый отчет можно с помощью запроса [GET v2/reports/info/{reportId}](../../reference/reports/getReportInfo.md).  {% include notitle [:no-translate[reports]](../../_auto/reports/united/orders/generator/united_orders.md) %}  |**⚙️ Лимит:** 100 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_united_orders_request = new \YandexMarketApi\Model\GenerateUnitedOrdersRequest(); // \YandexMarketApi\Model\GenerateUnitedOrdersRequest
$format = new \YandexMarketApi\Model\ReportFormatType(); // ReportFormatType | Формат отчета или документа.
$language = new \YandexMarketApi\Model\ReportLanguageType(); // ReportLanguageType | Язык отчета или документа.

try {
    $result = $apiInstance->generateUnitedOrdersReport($generate_united_orders_request, $format, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->generateUnitedOrdersReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_united_orders_request** | [**\YandexMarketApi\Model\GenerateUnitedOrdersRequest**](../Model/GenerateUnitedOrdersRequest.md)|  | |
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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
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
    echo 'Exception when calling ReportsApi->generateUnitedReturnsReport: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new YandexMarketApi\Api\ReportsApi(
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
    echo 'Exception when calling ReportsApi->getReportInfo: ', $e->getMessage(), PHP_EOL;
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
