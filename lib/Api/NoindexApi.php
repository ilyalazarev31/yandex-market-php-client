<?php
/**
 * NoindexApi
 * PHP version 7.4
 *
 * @category Class
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YandexMarketApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use YandexMarketApi\ApiException;
use YandexMarketApi\Configuration;
use YandexMarketApi\HeaderSelector;
use YandexMarketApi\ObjectSerializer;

/**
 * NoindexApi Class Doc Comment
 *
 * @category Class
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NoindexApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'provideOrderItemCis' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation provideOrderItemCis
     *
     * Передача кодов «Честного знака»
     *
     * @param  int $campaign_id Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. (required)
     * @param  int $order_id Идентификатор заказа. (required)
     * @param  \YandexMarketApi\Model\ProvideOrderItemCisRequest $provide_order_item_cis_request provide_order_item_cis_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['provideOrderItemCis'] to see the possible values for this operation
     *
     * @throws \YandexMarketApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \YandexMarketApi\Model\ProvideOrderItemCisResponse|\YandexMarketApi\Model\ApiClientDataErrorResponse|\YandexMarketApi\Model\ApiUnauthorizedErrorResponse|\YandexMarketApi\Model\ApiForbiddenErrorResponse|\YandexMarketApi\Model\ApiNotFoundErrorResponse|\YandexMarketApi\Model\ApiLimitErrorResponse|\YandexMarketApi\Model\ApiServerErrorResponse
     */
    public function provideOrderItemCis($campaign_id, $order_id, $provide_order_item_cis_request, string $contentType = self::contentTypes['provideOrderItemCis'][0])
    {
        list($response) = $this->provideOrderItemCisWithHttpInfo($campaign_id, $order_id, $provide_order_item_cis_request, $contentType);
        return $response;
    }

    /**
     * Operation provideOrderItemCisWithHttpInfo
     *
     * Передача кодов «Честного знака»
     *
     * @param  int $campaign_id Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. (required)
     * @param  int $order_id Идентификатор заказа. (required)
     * @param  \YandexMarketApi\Model\ProvideOrderItemCisRequest $provide_order_item_cis_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['provideOrderItemCis'] to see the possible values for this operation
     *
     * @throws \YandexMarketApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \YandexMarketApi\Model\ProvideOrderItemCisResponse|\YandexMarketApi\Model\ApiClientDataErrorResponse|\YandexMarketApi\Model\ApiUnauthorizedErrorResponse|\YandexMarketApi\Model\ApiForbiddenErrorResponse|\YandexMarketApi\Model\ApiNotFoundErrorResponse|\YandexMarketApi\Model\ApiLimitErrorResponse|\YandexMarketApi\Model\ApiServerErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function provideOrderItemCisWithHttpInfo($campaign_id, $order_id, $provide_order_item_cis_request, string $contentType = self::contentTypes['provideOrderItemCis'][0])
    {
        $request = $this->provideOrderItemCisRequest($campaign_id, $order_id, $provide_order_item_cis_request, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\YandexMarketApi\Model\ProvideOrderItemCisResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ProvideOrderItemCisResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ProvideOrderItemCisResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\YandexMarketApi\Model\ApiClientDataErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiClientDataErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiClientDataErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\YandexMarketApi\Model\ApiUnauthorizedErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiUnauthorizedErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiUnauthorizedErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\YandexMarketApi\Model\ApiForbiddenErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiForbiddenErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiForbiddenErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\YandexMarketApi\Model\ApiNotFoundErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiNotFoundErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiNotFoundErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 420:
                    if ('\YandexMarketApi\Model\ApiLimitErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiLimitErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiLimitErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\YandexMarketApi\Model\ApiServerErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\YandexMarketApi\Model\ApiServerErrorResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\YandexMarketApi\Model\ApiServerErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\YandexMarketApi\Model\ProvideOrderItemCisResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ProvideOrderItemCisResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiClientDataErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiUnauthorizedErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiForbiddenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiNotFoundErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 420:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiLimitErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\YandexMarketApi\Model\ApiServerErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation provideOrderItemCisAsync
     *
     * Передача кодов «Честного знака»
     *
     * @param  int $campaign_id Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. (required)
     * @param  int $order_id Идентификатор заказа. (required)
     * @param  \YandexMarketApi\Model\ProvideOrderItemCisRequest $provide_order_item_cis_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['provideOrderItemCis'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideOrderItemCisAsync($campaign_id, $order_id, $provide_order_item_cis_request, string $contentType = self::contentTypes['provideOrderItemCis'][0])
    {
        return $this->provideOrderItemCisAsyncWithHttpInfo($campaign_id, $order_id, $provide_order_item_cis_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation provideOrderItemCisAsyncWithHttpInfo
     *
     * Передача кодов «Честного знака»
     *
     * @param  int $campaign_id Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. (required)
     * @param  int $order_id Идентификатор заказа. (required)
     * @param  \YandexMarketApi\Model\ProvideOrderItemCisRequest $provide_order_item_cis_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['provideOrderItemCis'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideOrderItemCisAsyncWithHttpInfo($campaign_id, $order_id, $provide_order_item_cis_request, string $contentType = self::contentTypes['provideOrderItemCis'][0])
    {
        $returnType = '\YandexMarketApi\Model\ProvideOrderItemCisResponse';
        $request = $this->provideOrderItemCisRequest($campaign_id, $order_id, $provide_order_item_cis_request, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'provideOrderItemCis'
     *
     * @param  int $campaign_id Идентификатор кампании.  **Где его взять**  Войдите в личный кабинет, в меню слева выберите **Настройки** → **Настройки API** и скопируйте число из поля **Номер кампании**. (required)
     * @param  int $order_id Идентификатор заказа. (required)
     * @param  \YandexMarketApi\Model\ProvideOrderItemCisRequest $provide_order_item_cis_request (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['provideOrderItemCis'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function provideOrderItemCisRequest($campaign_id, $order_id, $provide_order_item_cis_request, string $contentType = self::contentTypes['provideOrderItemCis'][0])
    {

        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling provideOrderItemCis'
            );
        }

        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling provideOrderItemCis'
            );
        }

        // verify the required parameter 'provide_order_item_cis_request' is set
        if ($provide_order_item_cis_request === null || (is_array($provide_order_item_cis_request) && count($provide_order_item_cis_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $provide_order_item_cis_request when calling provideOrderItemCis'
            );
        }


        $resourcePath = '/campaigns/{campaignId}/orders/{orderId}/cis';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($campaign_id !== null) {
            $resourcePath = str_replace(
                '{' . 'campaignId' . '}',
                ObjectSerializer::toPathValue($campaign_id),
                $resourcePath
            );
        }
        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($provide_order_item_cis_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($provide_order_item_cis_request));
            } else {
                $httpBody = $provide_order_item_cis_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
