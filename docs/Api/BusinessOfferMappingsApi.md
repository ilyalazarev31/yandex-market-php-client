# YandexMarketApi\BusinessOfferMappingsApi

All URIs are relative to https://api.partner.market.yandex.ru, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addOffersToArchive()**](BusinessOfferMappingsApi.md#addOffersToArchive) | **POST** /v2/businesses/{businessId}/offer-mappings/archive | Добавление товаров в архив |
| [**deleteOffers()**](BusinessOfferMappingsApi.md#deleteOffers) | **POST** /v2/businesses/{businessId}/offer-mappings/delete | Удаление товаров из каталога |
| [**deleteOffersFromArchive()**](BusinessOfferMappingsApi.md#deleteOffersFromArchive) | **POST** /v2/businesses/{businessId}/offer-mappings/unarchive | Удаление товаров из архива |
| [**generateOfferBarcodes()**](BusinessOfferMappingsApi.md#generateOfferBarcodes) | **POST** /v1/businesses/{businessId}/offer-mappings/barcodes/generate | Генерация штрихкодов |
| [**getOfferMappings()**](BusinessOfferMappingsApi.md#getOfferMappings) | **POST** /v2/businesses/{businessId}/offer-mappings | Информация о товарах в каталоге |
| [**getSuggestedOfferMappings()**](BusinessOfferMappingsApi.md#getSuggestedOfferMappings) | **POST** /v2/businesses/{businessId}/offer-mappings/suggestions | Просмотр карточек на Маркете, которые подходят вашим товарам |
| [**updateOfferMappings()**](BusinessOfferMappingsApi.md#updateOfferMappings) | **POST** /v2/businesses/{businessId}/offer-mappings/update | Добавление товаров в каталог и изменение информации о них |


## `addOffersToArchive()`

```php
addOffersToArchive($business_id, $add_offers_to_archive_request): \YandexMarketApi\Model\AddOffersToArchiveResponse
```

Добавление товаров в архив

{% include notitle [:no-translate[access]](../../_auto/method_scopes/addOffersToArchive.md) %}  Помещает товары в архив. Товары, помещенные в архив, скрыты с витрины во всех магазинах кабинета.  {% note warning \"В архив нельзя отправить товар, который хранится на складе Маркета\" %}  Вначале такой товар нужно распродать или вывезти.  {% endnote %}  |**⚙️ Лимит:** 10 000 товаров в минуту, не более 200 товаров в одном запросе| |-|

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


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$add_offers_to_archive_request = new \YandexMarketApi\Model\AddOffersToArchiveRequest(); // \YandexMarketApi\Model\AddOffersToArchiveRequest

try {
    $result = $apiInstance->addOffersToArchive($business_id, $add_offers_to_archive_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessOfferMappingsApi->addOffersToArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **add_offers_to_archive_request** | [**\YandexMarketApi\Model\AddOffersToArchiveRequest**](../Model/AddOffersToArchiveRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\AddOffersToArchiveResponse**](../Model/AddOffersToArchiveResponse.md)

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


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
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
    echo 'Exception when calling BusinessOfferMappingsApi->deleteOffers: ', $e->getMessage(), PHP_EOL;
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

## `deleteOffersFromArchive()`

```php
deleteOffersFromArchive($business_id, $delete_offers_from_archive_request): \YandexMarketApi\Model\DeleteOffersFromArchiveResponse
```

Удаление товаров из архива

{% include notitle [:no-translate[access]](../../_auto/method_scopes/deleteOffersFromArchive.md) %}  Восстанавливает товары из архива.  |**⚙️ Лимит:** 10 000 товаров в минуту, не более 200 товаров в одном запросе| |-|

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


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$delete_offers_from_archive_request = new \YandexMarketApi\Model\DeleteOffersFromArchiveRequest(); // \YandexMarketApi\Model\DeleteOffersFromArchiveRequest

try {
    $result = $apiInstance->deleteOffersFromArchive($business_id, $delete_offers_from_archive_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessOfferMappingsApi->deleteOffersFromArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **delete_offers_from_archive_request** | [**\YandexMarketApi\Model\DeleteOffersFromArchiveRequest**](../Model/DeleteOffersFromArchiveRequest.md)|  | |

### Return type

[**\YandexMarketApi\Model\DeleteOffersFromArchiveResponse**](../Model/DeleteOffersFromArchiveResponse.md)

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


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
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
    echo 'Exception when calling BusinessOfferMappingsApi->generateOfferBarcodes: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
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
    echo 'Exception when calling BusinessOfferMappingsApi->getOfferMappings: ', $e->getMessage(), PHP_EOL;
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

## `getSuggestedOfferMappings()`

```php
getSuggestedOfferMappings($business_id, $get_suggested_offer_mappings_request): \YandexMarketApi\Model\GetSuggestedOfferMappingsResponse
```

Просмотр карточек на Маркете, которые подходят вашим товарам

{% include notitle [:no-translate[access]](../../_auto/method_scopes/getSuggestedOfferMappings.md) %}  Возвращает идентификаторы карточек на Маркете, которые соответствуют товарам с заданными параметрами.  Пользоваться этим запросом необязательно: он просто помогает заранее убедиться, что Маркет верно определяет карточки по предоставленным вами данным.  **Как пользоваться запросом**  1. Передайте Маркету список товаров, которые нужно проверить. 2. В ответ вы получите список SKU на Маркете с расшифровкой: названием, идентификатором модели, категорией. 3. Если расшифровки мало, вы можете открыть карточку. Для этого перейдите по ссылке вида `https://market.yandex.ru/product/<marketModelId>?sku=<marketSku>`. 4. Если карточка соответствует товару, значит его можно добавлять в каталог с теми данными, что вы указали. Если карточка определилась неправильно — проверьте данные о товаре. Возможно, их нужно уточнить или дополнить. Кроме того, на этапе добавления товара вы можете указать `marketSKU`, который ему подходит по вашему мнению.  {% note info \"Как определить `marketSku` товара, найденного на Маркете?\" %}  Он есть в адресе страницы товара — расположен после `sku=`.  Например, `https://market.yandex.ru/product--yandex-kniga/484830016?sku=484830016`  {% endnote %}  |**⚙️ Лимит:** 100 000 товаров в час| |-|

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


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_id = 56; // int | Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html)
$get_suggested_offer_mappings_request = new \YandexMarketApi\Model\GetSuggestedOfferMappingsRequest(); // \YandexMarketApi\Model\GetSuggestedOfferMappingsRequest

try {
    $result = $apiInstance->getSuggestedOfferMappings($business_id, $get_suggested_offer_mappings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessOfferMappingsApi->getSuggestedOfferMappings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **business_id** | **int**| Идентификатор кабинета. Чтобы его узнать, воспользуйтесь запросом [GET v2/campaigns](../../reference/campaigns/getCampaigns.md).  ℹ️ [Что такое кабинет и магазин на Маркете](https://yandex.ru/support/marketplace/account/introduction.html) | |
| **get_suggested_offer_mappings_request** | [**\YandexMarketApi\Model\GetSuggestedOfferMappingsRequest**](../Model/GetSuggestedOfferMappingsRequest.md)|  | [optional] |

### Return type

[**\YandexMarketApi\Model\GetSuggestedOfferMappingsResponse**](../Model/GetSuggestedOfferMappingsResponse.md)

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


$apiInstance = new YandexMarketApi\Api\BusinessOfferMappingsApi(
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
    echo 'Exception when calling BusinessOfferMappingsApi->updateOfferMappings: ', $e->getMessage(), PHP_EOL;
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
