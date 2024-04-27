<?php
/**
 * OrdersStatsItemDTO
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
 * OrdersStatsItemDTO Class Doc Comment
 *
 * @category Class
 * @description Список товаров в заказе после возможных изменений.  В ходе обработки заказа Маркет может удалить из него единицы товаров — при проблемах на складе или по инициативе пользователя.  * Если из заказа удалены все единицы товара, его не будет в списке &#x60;items&#x60; — только в списке &#x60;initialItems&#x60;.  * Если в заказе осталась хотя бы одна единица товара, он будет и в списке &#x60;items&#x60; (с уменьшенным количеством единиц &#x60;count&#x60;), и в списке &#x60;initialItems&#x60; (с первоначальным количеством единиц &#x60;initialCount&#x60;).
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrdersStatsItemDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrdersStatsItemDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_name' => 'string',
        'market_sku' => 'int',
        'shop_sku' => 'string',
        'count' => 'int',
        'prices' => '\YandexMarketApi\Model\OrdersStatsPriceDTO[]',
        'warehouse' => '\YandexMarketApi\Model\OrdersStatsWarehouseDTO',
        'details' => '\YandexMarketApi\Model\OrdersStatsDetailsDTO[]',
        'cis_list' => 'string[]',
        'initial_count' => 'int',
        'bid_fee' => 'int',
        'cofinance_threshold' => 'float',
        'cofinance_value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_name' => null,
        'market_sku' => 'int64',
        'shop_sku' => null,
        'count' => 'int32',
        'prices' => null,
        'warehouse' => null,
        'details' => null,
        'cis_list' => null,
        'initial_count' => 'int32',
        'bid_fee' => 'int32',
        'cofinance_threshold' => null,
        'cofinance_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offer_name' => false,
		'market_sku' => false,
		'shop_sku' => false,
		'count' => false,
		'prices' => false,
		'warehouse' => false,
		'details' => false,
		'cis_list' => false,
		'initial_count' => false,
		'bid_fee' => false,
		'cofinance_threshold' => false,
		'cofinance_value' => false
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
        'offer_name' => 'offerName',
        'market_sku' => 'marketSku',
        'shop_sku' => 'shopSku',
        'count' => 'count',
        'prices' => 'prices',
        'warehouse' => 'warehouse',
        'details' => 'details',
        'cis_list' => 'cisList',
        'initial_count' => 'initialCount',
        'bid_fee' => 'bidFee',
        'cofinance_threshold' => 'cofinanceThreshold',
        'cofinance_value' => 'cofinanceValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_name' => 'setOfferName',
        'market_sku' => 'setMarketSku',
        'shop_sku' => 'setShopSku',
        'count' => 'setCount',
        'prices' => 'setPrices',
        'warehouse' => 'setWarehouse',
        'details' => 'setDetails',
        'cis_list' => 'setCisList',
        'initial_count' => 'setInitialCount',
        'bid_fee' => 'setBidFee',
        'cofinance_threshold' => 'setCofinanceThreshold',
        'cofinance_value' => 'setCofinanceValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_name' => 'getOfferName',
        'market_sku' => 'getMarketSku',
        'shop_sku' => 'getShopSku',
        'count' => 'getCount',
        'prices' => 'getPrices',
        'warehouse' => 'getWarehouse',
        'details' => 'getDetails',
        'cis_list' => 'getCisList',
        'initial_count' => 'getInitialCount',
        'bid_fee' => 'getBidFee',
        'cofinance_threshold' => 'getCofinanceThreshold',
        'cofinance_value' => 'getCofinanceValue'
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
        $this->setIfExists('offer_name', $data ?? [], null);
        $this->setIfExists('market_sku', $data ?? [], null);
        $this->setIfExists('shop_sku', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('prices', $data ?? [], null);
        $this->setIfExists('warehouse', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('cis_list', $data ?? [], null);
        $this->setIfExists('initial_count', $data ?? [], null);
        $this->setIfExists('bid_fee', $data ?? [], null);
        $this->setIfExists('cofinance_threshold', $data ?? [], null);
        $this->setIfExists('cofinance_value', $data ?? [], null);
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

        if (!is_null($this->container['shop_sku']) && (mb_strlen($this->container['shop_sku']) > 80)) {
            $invalidProperties[] = "invalid value for 'shop_sku', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['shop_sku']) && (mb_strlen($this->container['shop_sku']) < 1)) {
            $invalidProperties[] = "invalid value for 'shop_sku', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['shop_sku']) && !preg_match("/^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/", $this->container['shop_sku'])) {
            $invalidProperties[] = "invalid value for 'shop_sku', must be conform to the pattern /^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/.";
        }

        if (!is_null($this->container['bid_fee']) && ($this->container['bid_fee'] > 10000)) {
            $invalidProperties[] = "invalid value for 'bid_fee', must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['bid_fee']) && ($this->container['bid_fee'] < 0)) {
            $invalidProperties[] = "invalid value for 'bid_fee', must be bigger than or equal to 0.";
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
     * Gets offer_name
     *
     * @return string|null
     */
    public function getOfferName()
    {
        return $this->container['offer_name'];
    }

    /**
     * Sets offer_name
     *
     * @param string|null $offer_name Название товара.
     *
     * @return self
     */
    public function setOfferName($offer_name)
    {
        if (is_null($offer_name)) {
            throw new \InvalidArgumentException('non-nullable offer_name cannot be null');
        }
        $this->container['offer_name'] = $offer_name;

        return $this;
    }

    /**
     * Gets market_sku
     *
     * @return int|null
     */
    public function getMarketSku()
    {
        return $this->container['market_sku'];
    }

    /**
     * Sets market_sku
     *
     * @param int|null $market_sku SKU на Маркете.
     *
     * @return self
     */
    public function setMarketSku($market_sku)
    {
        if (is_null($market_sku)) {
            throw new \InvalidArgumentException('non-nullable market_sku cannot be null');
        }
        $this->container['market_sku'] = $market_sku;

        return $this;
    }

    /**
     * Gets shop_sku
     *
     * @return string|null
     */
    public function getShopSku()
    {
        return $this->container['shop_sku'];
    }

    /**
     * Sets shop_sku
     *
     * @param string|null $shop_sku Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы `. , / \\ ( ) [ ] - = _`  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields)
     *
     * @return self
     */
    public function setShopSku($shop_sku)
    {
        if (is_null($shop_sku)) {
            throw new \InvalidArgumentException('non-nullable shop_sku cannot be null');
        }
        if ((mb_strlen($shop_sku) > 80)) {
            throw new \InvalidArgumentException('invalid length for $shop_sku when calling OrdersStatsItemDTO., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($shop_sku) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shop_sku when calling OrdersStatsItemDTO., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/", $shop_sku))) {
            throw new \InvalidArgumentException("invalid value for \$shop_sku when calling OrdersStatsItemDTO., must conform to the pattern /^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/.");
        }

        $this->container['shop_sku'] = $shop_sku;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Количество единиц товара с учетом удаленных единиц.  Если из заказа удалены все единицы товара, он попадет только в список `initialItems`.
     *
     * @return self
     */
    public function setCount($count)
    {
        if (is_null($count)) {
            throw new \InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \YandexMarketApi\Model\OrdersStatsPriceDTO[]|null
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \YandexMarketApi\Model\OrdersStatsPriceDTO[]|null $prices Цена или скидки на товар.
     *
     * @return self
     */
    public function setPrices($prices)
    {
        if (is_null($prices)) {
            throw new \InvalidArgumentException('non-nullable prices cannot be null');
        }
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return \YandexMarketApi\Model\OrdersStatsWarehouseDTO|null
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param \YandexMarketApi\Model\OrdersStatsWarehouseDTO|null $warehouse warehouse
     *
     * @return self
     */
    public function setWarehouse($warehouse)
    {
        if (is_null($warehouse)) {
            throw new \InvalidArgumentException('non-nullable warehouse cannot be null');
        }
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \YandexMarketApi\Model\OrdersStatsDetailsDTO[]|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \YandexMarketApi\Model\OrdersStatsDetailsDTO[]|null $details Информация об удалении товара из заказа.
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            throw new \InvalidArgumentException('non-nullable details cannot be null');
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets cis_list
     *
     * @return string[]|null
     */
    public function getCisList()
    {
        return $this->container['cis_list'];
    }

    /**
     * Sets cis_list
     *
     * @param string[]|null $cis_list Список кодов идентификации товара [в системе «Честный ЗНАК»](https://честныйзнак.рф/).
     *
     * @return self
     */
    public function setCisList($cis_list)
    {
        if (is_null($cis_list)) {
            throw new \InvalidArgumentException('non-nullable cis_list cannot be null');
        }
        $this->container['cis_list'] = $cis_list;

        return $this;
    }

    /**
     * Gets initial_count
     *
     * @return int|null
     */
    public function getInitialCount()
    {
        return $this->container['initial_count'];
    }

    /**
     * Sets initial_count
     *
     * @param int|null $initial_count Первоначальное количество единиц товара.
     *
     * @return self
     */
    public function setInitialCount($initial_count)
    {
        if (is_null($initial_count)) {
            throw new \InvalidArgumentException('non-nullable initial_count cannot be null');
        }
        $this->container['initial_count'] = $initial_count;

        return $this;
    }

    /**
     * Gets bid_fee
     *
     * @return int|null
     */
    public function getBidFee()
    {
        return $this->container['bid_fee'];
    }

    /**
     * Sets bid_fee
     *
     * @param int|null $bid_fee Списанная ставка ближайшего конкурента.  Указывается в процентах от стоимости товара и умножается на 100. Например, ставка 5% обозначается как 500.
     *
     * @return self
     */
    public function setBidFee($bid_fee)
    {
        if (is_null($bid_fee)) {
            throw new \InvalidArgumentException('non-nullable bid_fee cannot be null');
        }

        if (($bid_fee > 10000)) {
            throw new \InvalidArgumentException('invalid value for $bid_fee when calling OrdersStatsItemDTO., must be smaller than or equal to 10000.');
        }
        if (($bid_fee < 0)) {
            throw new \InvalidArgumentException('invalid value for $bid_fee when calling OrdersStatsItemDTO., must be bigger than or equal to 0.');
        }

        $this->container['bid_fee'] = $bid_fee;

        return $this;
    }

    /**
     * Gets cofinance_threshold
     *
     * @return float|null
     */
    public function getCofinanceThreshold()
    {
        return $this->container['cofinance_threshold'];
    }

    /**
     * Sets cofinance_threshold
     *
     * @param float|null $cofinance_threshold Порог для скидок с Маркетом на момент оформления заказа. [Что это такое?](https://yandex.ru/support/marketplace/marketing/smart-pricing.html#sponsored-discounts)  Указан в рублях. Точность — два знака после запятой.
     *
     * @return self
     */
    public function setCofinanceThreshold($cofinance_threshold)
    {
        if (is_null($cofinance_threshold)) {
            throw new \InvalidArgumentException('non-nullable cofinance_threshold cannot be null');
        }
        $this->container['cofinance_threshold'] = $cofinance_threshold;

        return $this;
    }

    /**
     * Gets cofinance_value
     *
     * @return float|null
     */
    public function getCofinanceValue()
    {
        return $this->container['cofinance_value'];
    }

    /**
     * Sets cofinance_value
     *
     * @param float|null $cofinance_value Скидка с Маркетом. [Что это такое?](https://yandex.ru/support/marketplace/marketing/smart-pricing.html#sponsored-discounts)  Указана в рублях. Точность — два знака после запятой.
     *
     * @return self
     */
    public function setCofinanceValue($cofinance_value)
    {
        if (is_null($cofinance_value)) {
            throw new \InvalidArgumentException('non-nullable cofinance_value cannot be null');
        }
        $this->container['cofinance_value'] = $cofinance_value;

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


