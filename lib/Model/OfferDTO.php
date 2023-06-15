<?php
/**
 * OfferDTO
 *
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

namespace YandexMarketApi\Model;

use \ArrayAccess;
use \YandexMarketApi\ObjectSerializer;

/**
 * OfferDTO Class Doc Comment
 *
 * @category Class
 * @description Предложение.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OfferDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'price' => 'float',
        'feed_id' => 'int',
        'id' => 'string',
        'shop_category_id' => 'string',
        'market_category_id' => 'int',
        'pre_discount_price' => 'float',
        'discount' => 'int',
        'cut_price' => 'bool',
        'url' => 'string',
        'model_id' => 'int',
        'name' => 'string',
        'currency' => '\YandexMarketApi\Model\CurrencyType',
        'bid' => 'float',
        'cbid' => 'float',
        'fee' => 'float',
        'blocked' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'price' => null,
        'feed_id' => 'int64',
        'id' => null,
        'shop_category_id' => null,
        'market_category_id' => 'int32',
        'pre_discount_price' => null,
        'discount' => 'int32',
        'cut_price' => null,
        'url' => null,
        'model_id' => 'int64',
        'name' => null,
        'currency' => null,
        'bid' => null,
        'cbid' => null,
        'fee' => null,
        'blocked' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'price' => false,
		'feed_id' => false,
		'id' => false,
		'shop_category_id' => false,
		'market_category_id' => false,
		'pre_discount_price' => false,
		'discount' => false,
		'cut_price' => false,
		'url' => false,
		'model_id' => false,
		'name' => false,
		'currency' => false,
		'bid' => false,
		'cbid' => false,
		'fee' => false,
		'blocked' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'price' => 'price',
        'feed_id' => 'feedId',
        'id' => 'id',
        'shop_category_id' => 'shopCategoryId',
        'market_category_id' => 'marketCategoryId',
        'pre_discount_price' => 'preDiscountPrice',
        'discount' => 'discount',
        'cut_price' => 'cutPrice',
        'url' => 'url',
        'model_id' => 'modelId',
        'name' => 'name',
        'currency' => 'currency',
        'bid' => 'bid',
        'cbid' => 'cbid',
        'fee' => 'fee',
        'blocked' => 'blocked'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price' => 'setPrice',
        'feed_id' => 'setFeedId',
        'id' => 'setId',
        'shop_category_id' => 'setShopCategoryId',
        'market_category_id' => 'setMarketCategoryId',
        'pre_discount_price' => 'setPreDiscountPrice',
        'discount' => 'setDiscount',
        'cut_price' => 'setCutPrice',
        'url' => 'setUrl',
        'model_id' => 'setModelId',
        'name' => 'setName',
        'currency' => 'setCurrency',
        'bid' => 'setBid',
        'cbid' => 'setCbid',
        'fee' => 'setFee',
        'blocked' => 'setBlocked'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price' => 'getPrice',
        'feed_id' => 'getFeedId',
        'id' => 'getId',
        'shop_category_id' => 'getShopCategoryId',
        'market_category_id' => 'getMarketCategoryId',
        'pre_discount_price' => 'getPreDiscountPrice',
        'discount' => 'getDiscount',
        'cut_price' => 'getCutPrice',
        'url' => 'getUrl',
        'model_id' => 'getModelId',
        'name' => 'getName',
        'currency' => 'getCurrency',
        'bid' => 'getBid',
        'cbid' => 'getCbid',
        'fee' => 'getFee',
        'blocked' => 'getBlocked'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('feed_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('shop_category_id', $data ?? [], null);
        $this->setIfExists('market_category_id', $data ?? [], null);
        $this->setIfExists('pre_discount_price', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('cut_price', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('model_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('bid', $data ?? [], null);
        $this->setIfExists('cbid', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('blocked', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['model_id'] === null) {
            $invalidProperties[] = "'model_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price Цена предложения.  До версии 2.0 партнерского API у параметра был тип String.
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets feed_id
     *
     * @return int|null
     */
    public function getFeedId()
    {
        return $this->container['feed_id'];
    }

    /**
     * Sets feed_id
     *
     * @param int|null $feed_id Идентификатор прайс-листа, содержащего предложение.  Параметр доступен начиная с версии 2.0 партнерского API.
     *
     * @return self
     */
    public function setFeedId($feed_id)
    {
        if (is_null($feed_id)) {
            throw new \InvalidArgumentException('non-nullable feed_id cannot be null');
        }
        $this->container['feed_id'] = $feed_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Идентификатор предложения из прайс-листа.  Параметр выводится, если в прайс-листе задан уникальный идентификатор. Если в прайс-листе содержится несколько предложений с одинаковыми идентификаторами, параметр `id` указывается только для первого из них, для остальных параметры `id` и `feedId` не выводятся.  Параметр доступен начиная с версии 2.0 партнерского API.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets shop_category_id
     *
     * @return string|null
     */
    public function getShopCategoryId()
    {
        return $this->container['shop_category_id'];
    }

    /**
     * Sets shop_category_id
     *
     * @param string|null $shop_category_id Идентификатор категории предложения, указанный магазином в прайс-листе.  Параметр выводится только для предложений, у которых указана категория в прайс-листе.  Параметр доступен начиная с версии 2.0 партнерского API.
     *
     * @return self
     */
    public function setShopCategoryId($shop_category_id)
    {
        if (is_null($shop_category_id)) {
            throw new \InvalidArgumentException('non-nullable shop_category_id cannot be null');
        }
        $this->container['shop_category_id'] = $shop_category_id;

        return $this;
    }

    /**
     * Gets market_category_id
     *
     * @return int|null
     */
    public function getMarketCategoryId()
    {
        return $this->container['market_category_id'];
    }

    /**
     * Sets market_category_id
     *
     * @param int|null $market_category_id Идентификатор категории предложения в дереве категорий Маркета. Параметр доступен начиная с версии 2.0 партнерского API.
     *
     * @return self
     */
    public function setMarketCategoryId($market_category_id)
    {
        if (is_null($market_category_id)) {
            throw new \InvalidArgumentException('non-nullable market_category_id cannot be null');
        }
        $this->container['market_category_id'] = $market_category_id;

        return $this;
    }

    /**
     * Gets pre_discount_price
     *
     * @return float|null
     */
    public function getPreDiscountPrice()
    {
        return $this->container['pre_discount_price'];
    }

    /**
     * Sets pre_discount_price
     *
     * @param float|null $pre_discount_price Цена предложения без скидки.
     *
     * @return self
     */
    public function setPreDiscountPrice($pre_discount_price)
    {
        if (is_null($pre_discount_price)) {
            throw new \InvalidArgumentException('non-nullable pre_discount_price cannot be null');
        }
        $this->container['pre_discount_price'] = $pre_discount_price;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return int|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param int|null $discount Скидка на предложение, в %.
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        if (is_null($discount)) {
            throw new \InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets cut_price
     *
     * @return bool|null
     */
    public function getCutPrice()
    {
        return $this->container['cut_price'];
    }

    /**
     * Sets cut_price
     *
     * @param bool|null $cut_price Является ли предложение уцененным:  * `true` — да. * `false` — нет.  Параметр доступен начиная с версии 2.58 партнерского API.
     *
     * @return self
     */
    public function setCutPrice($cut_price)
    {
        if (is_null($cut_price)) {
            throw new \InvalidArgumentException('non-nullable cut_price cannot be null');
        }
        $this->container['cut_price'] = $cut_price;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL-адрес предложения на сайте магазина.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets model_id
     *
     * @return int
     */
    public function getModelId()
    {
        return $this->container['model_id'];
    }

    /**
     * Sets model_id
     *
     * @param int $model_id Идентификатор модели Маркета, с которой соотнесено предложение.  Если предложение не соотнесено ни с какой карточкой модели, то параметр `modelid` содержит значение `0`.  {% note info %}  Идентификатор модели присутствует в URL карточки модели в виде значения параметра `product`. Например: `https://market.yandex.ru/product/13584121`.  {% endnote %}
     *
     * @return self
     */
    public function setModelId($model_id)
    {
        if (is_null($model_id)) {
            throw new \InvalidArgumentException('non-nullable model_id cannot be null');
        }
        $this->container['model_id'] = $model_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Наименование предложения.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \YandexMarketApi\Model\CurrencyType|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \YandexMarketApi\Model\CurrencyType|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets bid
     *
     * @return float|null
     */
    public function getBid()
    {
        return $this->container['bid'];
    }

    /**
     * Sets bid
     *
     * @param float|null $bid Ставка на клик. deprecated
     *
     * @return self
     */
    public function setBid($bid)
    {
        if (is_null($bid)) {
            throw new \InvalidArgumentException('non-nullable bid cannot be null');
        }
        $this->container['bid'] = $bid;

        return $this;
    }

    /**
     * Gets cbid
     *
     * @return float|null
     */
    public function getCbid()
    {
        return $this->container['cbid'];
    }

    /**
     * Sets cbid
     *
     * @param float|null $cbid Ставка на клик. deprecated
     *
     * @return self
     */
    public function setCbid($cbid)
    {
        if (is_null($cbid)) {
            throw new \InvalidArgumentException('non-nullable cbid cannot be null');
        }
        $this->container['cbid'] = $cbid;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float|null $fee Процент комиссии на товар при продаже по CPA. deprecated
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets blocked
     *
     * @return bool|null
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     *
     * @param bool|null $blocked Признак блокировки предложения. Возможные значения: * `false` — предложение активно, параметр не выводится. * `true` — предложение заблокировано. Параметр выводится, если предложение заблокировано и не попадает в выдачу Маркета. Это может произойти из-за отключения магазина.
     *
     * @return self
     */
    public function setBlocked($blocked)
    {
        if (is_null($blocked)) {
            throw new \InvalidArgumentException('non-nullable blocked cannot be null');
        }
        $this->container['blocked'] = $blocked;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


