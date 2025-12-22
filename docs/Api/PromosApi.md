# YandexMarketApi\PromosApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePromoOffers()**](PromosApi.md#deletePromoOffers) | **POST** /v2/businesses/{businessId}/promos/offers/delete | Удаление товаров из акции |
| [**getPromoOffers()**](PromosApi.md#getPromoOffers) | **POST** /v2/businesses/{businessId}/promos/offers | Получение списка товаров, которые участвуют или могут участвовать в акции |
| [**getPromos()**](PromosApi.md#getPromos) | **POST** /v2/businesses/{businessId}/promos | Получение списка акций |
| [**updatePromoOffers()**](PromosApi.md#updatePromoOffers) | **POST** /v2/businesses/{businessId}/promos/offers/update | Добавление товаров в акцию или изменение их цен |


## `deletePromoOffers()`

```php
deletePromoOffers($business_id, $delete_promo_offers_request): \YandexMarketApi\Model\DeletePromoOffersResponse
```

Удаление товаров из акции

{% include notitle [:no-translate[access]](../../_auto/method_scopes/deletePromoOffers.md) %}  Убирает товары из акции.  Изменения начинают действовать в течение 4–6 часов. Узнать, применились ли они, можно с помощью параметра `processing` в ответе метода [POST v2/businesses/{businessId}/promos](../../reference/promos/getPromos.md).  |**⚙️ Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\PromosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$delete_promo_offers_request = new \YandexMarketApi\Model\DeletePromoOffersRequest(); // \YandexMarketApi\Model\DeletePromoOffersRequest

try {
    $result = $apiInstance->deletePromoOffers($business_id, $delete_promo_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromosApi->deletePromoOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **delete_promo_offers_request** | [**\YandexMarketApi\Model\DeletePromoOffersRequest**](../Model/DeletePromoOffersRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\DeletePromoOffersResponse**](../Model/DeletePromoOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromoOffers()`

```php
getPromoOffers($business_id, $get_promo_offers_request, $page_token, $limit): \YandexMarketApi\Model\GetPromoOffersResponse
```

Получение списка товаров, которые участвуют или могут участвовать в акции

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getPromoOffers.md) %}  Возвращает список товаров, которые участвуют или могут участвовать в акции.  {% note warning \"Условия участия в акциях могут меняться\" %}  Например, `maxPromoPrice`.  Установленные цены меняться не будут — `price` и `promoPrice`.  {% endnote %}  |**⚙️ Лимит:** 10 000 запросов в час, не более 500 товаров в запросе| |-|

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


$apiInstance = new YandexMarketApi\Api\PromosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$get_promo_offers_request = new \YandexMarketApi\Model\GetPromoOffersRequest(); // \YandexMarketApi\Model\GetPromoOffersRequest
$page_token = eyBuZXh0SWQ6IDIzNDIgfQ==; // string | Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра `nextPageToken`, полученное при последнем запросе.  Если задан `page_token` и в запросе есть параметры `page` и `pageSize`, они игнорируются.
$limit = 20; // int | Количество значений на одной странице.

try {
    $result = $apiInstance->getPromoOffers($business_id, $get_promo_offers_request, $page_token, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromosApi->getPromoOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **get_promo_offers_request** | [**\YandexMarketApi\Model\GetPromoOffersRequest**](../Model/GetPromoOffersRequest.md)|  | |
| **page_token** | **string**| Идентификатор страницы c результатами.  Если параметр не указан, возвращается первая страница.  Рекомендуем передавать значение выходного параметра &#x60;nextPageToken&#x60;, полученное при последнем запросе.  Если задан &#x60;page_token&#x60; и в запросе есть параметры &#x60;page&#x60; и &#x60;pageSize&#x60;, они игнорируются. | [optional] |
| **limit** | **int**| Количество значений на одной странице. | [optional] |

### Return type

[**\YandexMarketApi\Model\GetPromoOffersResponse**](../Model/GetPromoOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromos()`

```php
getPromos($business_id, $get_promos_request): \YandexMarketApi\Model\GetPromosResponse
```

Получение списка акций

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getPromos.md) %}  Возвращает информацию об акциях Маркета. Не возвращает данные об акциях, которые создал продавец.  По умолчанию возвращаются акции, в которых продавец участвует или может принять участие.  Чтобы получить текущие или завершенные акции, передайте параметр `participation`.  Типы акций, которые возвращаются в ответе:  * прямая скидка; * флеш-акция; * скидка по промокоду.  |**⚙️ Лимит:** 1 000 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\PromosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$get_promos_request = new \YandexMarketApi\Model\GetPromosRequest(); // \YandexMarketApi\Model\GetPromosRequest

try {
    $result = $apiInstance->getPromos($business_id, $get_promos_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromosApi->getPromos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **get_promos_request** | [**\YandexMarketApi\Model\GetPromosRequest**](../Model/GetPromosRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetPromosResponse**](../Model/GetPromosResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromoOffers()`

```php
updatePromoOffers($business_id, $update_promo_offers_request): \YandexMarketApi\Model\UpdatePromoOffersResponse
```

Добавление товаров в акцию или изменение их цен

{% include notitle [:no-translate[access]](../../_auto/method_scopes/updatePromoOffers.md) %}  Добавляет товары в акцию или изменяет цены на товары, которые участвуют в акции.  Изменения начинают действовать в течение 4–6 часов. Узнать, применились ли они, можно с помощью параметра `processing` в ответе метода [POST v2/businesses/{businessId}/promos](../../reference/promos/getPromos.md).  |**⚙️ Лимит:** 10 000 запросов в час| |-|

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


$apiInstance = new YandexMarketApi\Api\PromosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$update_promo_offers_request = new \YandexMarketApi\Model\UpdatePromoOffersRequest(); // \YandexMarketApi\Model\UpdatePromoOffersRequest

try {
    $result = $apiInstance->updatePromoOffers($business_id, $update_promo_offers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromosApi->updatePromoOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **update_promo_offers_request** | [**\YandexMarketApi\Model\UpdatePromoOffersRequest**](../Model/UpdatePromoOffersRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\UpdatePromoOffersResponse**](../Model/UpdatePromoOffersResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
