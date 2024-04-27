<?php
/**
 * OutletAddressDTO
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
 * OutletAddressDTO Class Doc Comment
 *
 * @category Class
 * @description Адрес точки продаж.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OutletAddressDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OutletAddressDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'region_id' => 'int',
        'street' => 'string',
        'number' => 'string',
        'building' => 'string',
        'estate' => 'string',
        'block' => 'string',
        'additional' => 'string',
        'km' => 'int',
        'city' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'region_id' => 'int64',
        'street' => null,
        'number' => null,
        'building' => null,
        'estate' => null,
        'block' => null,
        'additional' => null,
        'km' => 'int32',
        'city' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'region_id' => false,
		'street' => false,
		'number' => false,
		'building' => false,
		'estate' => false,
		'block' => false,
		'additional' => false,
		'km' => false,
		'city' => false
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
        'region_id' => 'regionId',
        'street' => 'street',
        'number' => 'number',
        'building' => 'building',
        'estate' => 'estate',
        'block' => 'block',
        'additional' => 'additional',
        'km' => 'km',
        'city' => 'city'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'region_id' => 'setRegionId',
        'street' => 'setStreet',
        'number' => 'setNumber',
        'building' => 'setBuilding',
        'estate' => 'setEstate',
        'block' => 'setBlock',
        'additional' => 'setAdditional',
        'km' => 'setKm',
        'city' => 'setCity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'region_id' => 'getRegionId',
        'street' => 'getStreet',
        'number' => 'getNumber',
        'building' => 'getBuilding',
        'estate' => 'getEstate',
        'block' => 'getBlock',
        'additional' => 'getAdditional',
        'km' => 'getKm',
        'city' => 'getCity'
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
        $this->setIfExists('region_id', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('building', $data ?? [], null);
        $this->setIfExists('estate', $data ?? [], null);
        $this->setIfExists('block', $data ?? [], null);
        $this->setIfExists('additional', $data ?? [], null);
        $this->setIfExists('km', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
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

        if ($this->container['region_id'] === null) {
            $invalidProperties[] = "'region_id' can't be null";
        }
        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) > 512)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 256)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['building']) && (mb_strlen($this->container['building']) > 16)) {
            $invalidProperties[] = "invalid value for 'building', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['estate']) && (mb_strlen($this->container['estate']) > 16)) {
            $invalidProperties[] = "invalid value for 'estate', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['block']) && (mb_strlen($this->container['block']) > 16)) {
            $invalidProperties[] = "invalid value for 'block', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 200)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 200.";
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
     * Gets region_id
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param int $region_id Идентификатор региона. Идентификатор можно получить c помощью запроса [GET regions](../../reference/regions/searchRegionsByName.md).  {% note alert %}  При создании и редактировании точек продаж можно указывать только регионы типов `TOWN` (город), `CITY` (крупный город) и `REPUBLIC_AREA` (район субъекта федерации). Тип региона указан в выходных параметрах type запросов [GET regions](../../reference/regions/searchRegionsByName.md) и [GET regions/{regionId}](../../reference/regions/searchRegionsById.md).  {% endnote %}
     *
     * @return self
     */
    public function setRegionId($region_id)
    {
        if (is_null($region_id)) {
            throw new \InvalidArgumentException('non-nullable region_id cannot be null');
        }
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street Улица.
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        if ((mb_strlen($street) > 512)) {
            throw new \InvalidArgumentException('invalid length for $street when calling OutletAddressDTO., must be smaller than or equal to 512.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Номер дома.
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        if ((mb_strlen($number) > 256)) {
            throw new \InvalidArgumentException('invalid length for $number when calling OutletAddressDTO., must be smaller than or equal to 256.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets building
     *
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->container['building'];
    }

    /**
     * Sets building
     *
     * @param string|null $building Номер строения.
     *
     * @return self
     */
    public function setBuilding($building)
    {
        if (is_null($building)) {
            throw new \InvalidArgumentException('non-nullable building cannot be null');
        }
        if ((mb_strlen($building) > 16)) {
            throw new \InvalidArgumentException('invalid length for $building when calling OutletAddressDTO., must be smaller than or equal to 16.');
        }

        $this->container['building'] = $building;

        return $this;
    }

    /**
     * Gets estate
     *
     * @return string|null
     */
    public function getEstate()
    {
        return $this->container['estate'];
    }

    /**
     * Sets estate
     *
     * @param string|null $estate Номер владения.
     *
     * @return self
     */
    public function setEstate($estate)
    {
        if (is_null($estate)) {
            throw new \InvalidArgumentException('non-nullable estate cannot be null');
        }
        if ((mb_strlen($estate) > 16)) {
            throw new \InvalidArgumentException('invalid length for $estate when calling OutletAddressDTO., must be smaller than or equal to 16.');
        }

        $this->container['estate'] = $estate;

        return $this;
    }

    /**
     * Gets block
     *
     * @return string|null
     */
    public function getBlock()
    {
        return $this->container['block'];
    }

    /**
     * Sets block
     *
     * @param string|null $block Номер корпуса.
     *
     * @return self
     */
    public function setBlock($block)
    {
        if (is_null($block)) {
            throw new \InvalidArgumentException('non-nullable block cannot be null');
        }
        if ((mb_strlen($block) > 16)) {
            throw new \InvalidArgumentException('invalid length for $block when calling OutletAddressDTO., must be smaller than or equal to 16.');
        }

        $this->container['block'] = $block;

        return $this;
    }

    /**
     * Gets additional
     *
     * @return string|null
     */
    public function getAdditional()
    {
        return $this->container['additional'];
    }

    /**
     * Sets additional
     *
     * @param string|null $additional Дополнительная информация.
     *
     * @return self
     */
    public function setAdditional($additional)
    {
        if (is_null($additional)) {
            throw new \InvalidArgumentException('non-nullable additional cannot be null');
        }
        $this->container['additional'] = $additional;

        return $this;
    }

    /**
     * Gets km
     *
     * @return int|null
     */
    public function getKm()
    {
        return $this->container['km'];
    }

    /**
     * Sets km
     *
     * @param int|null $km Порядковый номер километра дороги, на котором располагается точка продаж, если отсутствует улица.
     *
     * @return self
     */
    public function setKm($km)
    {
        if (is_null($km)) {
            throw new \InvalidArgumentException('non-nullable km cannot be null');
        }
        $this->container['km'] = $km;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city {% note alert %}  Параметр устарел и не рекомендуется к использованию. Город или населенный пункт возвращается в параметре `regionId`.  {% endnote %}
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 200)) {
            throw new \InvalidArgumentException('invalid length for $city when calling OutletAddressDTO., must be smaller than or equal to 200.');
        }

        $this->container['city'] = $city;

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


