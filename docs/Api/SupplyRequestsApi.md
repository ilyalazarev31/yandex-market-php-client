# YandexMarketApi\SupplyRequestsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSupplyRequestDocuments()**](SupplyRequestsApi.md#getSupplyRequestDocuments) | **POST** /v2/campaigns/{campaignId}/supply-requests/documents | Получение документов по заявке на поставку, вывоз или утилизацию |
| [**getSupplyRequestItems()**](SupplyRequestsApi.md#getSupplyRequestItems) | **POST** /v2/campaigns/{campaignId}/supply-requests/items | Получение товаров в заявке на поставку, вывоз или утилизацию |
| [**getSupplyRequests()**](SupplyRequestsApi.md#getSupplyRequests) | **POST** /v2/campaigns/{campaignId}/supply-requests | Получение информации о заявках на поставку, вывоз и утилизацию |


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


$apiInstance = new YandexMarketApi\Api\SupplyRequestsApi(
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
    echo 'Exception when calling SupplyRequestsApi->getSupplyRequestDocuments: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new YandexMarketApi\Api\SupplyRequestsApi(
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
    echo 'Exception when calling SupplyRequestsApi->getSupplyRequestItems: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new YandexMarketApi\Api\SupplyRequestsApi(
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
    echo 'Exception when calling SupplyRequestsApi->getSupplyRequests: ', $e->getMessage(), PHP_EOL;
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
