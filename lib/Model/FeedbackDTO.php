<?php
/**
 * FeedbackDTO
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
 * FeedbackDTO Class Doc Comment
 *
 * @category Class
 * @description Отзыв пользователя Яндекс Маркета об указанном магазине.
 * @package  YandexMarketApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FeedbackDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeedbackDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created_at' => '\DateTime',
        'text' => 'string',
        'state' => '\YandexMarketApi\Model\FeedbackStateType',
        'author' => '\YandexMarketApi\Model\FeedbackAuthorDTO',
        'pro' => 'string',
        'contra' => 'string',
        'comments' => '\YandexMarketApi\Model\FeedbackCommentDTO[]',
        'shop' => '\YandexMarketApi\Model\FeedbackShopDTO',
        'resolved' => 'bool',
        'verified' => 'bool',
        'recommend' => 'bool',
        'grades' => '\YandexMarketApi\Model\FeedbackGradesDTO',
        'order' => '\YandexMarketApi\Model\FeedbackOrderDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'created_at' => 'date-time',
        'text' => null,
        'state' => null,
        'author' => null,
        'pro' => null,
        'contra' => null,
        'comments' => null,
        'shop' => null,
        'resolved' => null,
        'verified' => null,
        'recommend' => null,
        'grades' => null,
        'order' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'created_at' => false,
		'text' => false,
		'state' => false,
		'author' => false,
		'pro' => false,
		'contra' => false,
		'comments' => false,
		'shop' => false,
		'resolved' => false,
		'verified' => false,
		'recommend' => false,
		'grades' => false,
		'order' => false
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
        'id' => 'id',
        'created_at' => 'createdAt',
        'text' => 'text',
        'state' => 'state',
        'author' => 'author',
        'pro' => 'pro',
        'contra' => 'contra',
        'comments' => 'comments',
        'shop' => 'shop',
        'resolved' => 'resolved',
        'verified' => 'verified',
        'recommend' => 'recommend',
        'grades' => 'grades',
        'order' => 'order'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'text' => 'setText',
        'state' => 'setState',
        'author' => 'setAuthor',
        'pro' => 'setPro',
        'contra' => 'setContra',
        'comments' => 'setComments',
        'shop' => 'setShop',
        'resolved' => 'setResolved',
        'verified' => 'setVerified',
        'recommend' => 'setRecommend',
        'grades' => 'setGrades',
        'order' => 'setOrder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'text' => 'getText',
        'state' => 'getState',
        'author' => 'getAuthor',
        'pro' => 'getPro',
        'contra' => 'getContra',
        'comments' => 'getComments',
        'shop' => 'getShop',
        'resolved' => 'getResolved',
        'verified' => 'getVerified',
        'recommend' => 'getRecommend',
        'grades' => 'getGrades',
        'order' => 'getOrder'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('pro', $data ?? [], null);
        $this->setIfExists('contra', $data ?? [], null);
        $this->setIfExists('comments', $data ?? [], null);
        $this->setIfExists('shop', $data ?? [], null);
        $this->setIfExists('resolved', $data ?? [], null);
        $this->setIfExists('verified', $data ?? [], null);
        $this->setIfExists('recommend', $data ?? [], null);
        $this->setIfExists('grades', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
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

        if ($this->container['comments'] === null) {
            $invalidProperties[] = "'comments' can't be null";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Идентификатор отзыва.
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Дата и время создания отзыва.  Формат даты: ISO 8601 со смещением относительно UTC. Например, `2017-11-21T00:00:00+03:00`.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Комментарий автора отзыва.
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \YandexMarketApi\Model\FeedbackStateType|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \YandexMarketApi\Model\FeedbackStateType|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets author
     *
     * @return \YandexMarketApi\Model\FeedbackAuthorDTO|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param \YandexMarketApi\Model\FeedbackAuthorDTO|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets pro
     *
     * @return string|null
     */
    public function getPro()
    {
        return $this->container['pro'];
    }

    /**
     * Sets pro
     *
     * @param string|null $pro Достоинства магазина, описанные в отзыве.
     *
     * @return self
     */
    public function setPro($pro)
    {
        if (is_null($pro)) {
            throw new \InvalidArgumentException('non-nullable pro cannot be null');
        }
        $this->container['pro'] = $pro;

        return $this;
    }

    /**
     * Gets contra
     *
     * @return string|null
     */
    public function getContra()
    {
        return $this->container['contra'];
    }

    /**
     * Sets contra
     *
     * @param string|null $contra Недостатки магазина, описанные в отзыве.
     *
     * @return self
     */
    public function setContra($contra)
    {
        if (is_null($contra)) {
            throw new \InvalidArgumentException('non-nullable contra cannot be null');
        }
        $this->container['contra'] = $contra;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \YandexMarketApi\Model\FeedbackCommentDTO[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \YandexMarketApi\Model\FeedbackCommentDTO[] $comments Переписка автора отзыва с магазином.
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (is_null($comments)) {
            throw new \InvalidArgumentException('non-nullable comments cannot be null');
        }
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets shop
     *
     * @return \YandexMarketApi\Model\FeedbackShopDTO|null
     */
    public function getShop()
    {
        return $this->container['shop'];
    }

    /**
     * Sets shop
     *
     * @param \YandexMarketApi\Model\FeedbackShopDTO|null $shop shop
     *
     * @return self
     */
    public function setShop($shop)
    {
        if (is_null($shop)) {
            throw new \InvalidArgumentException('non-nullable shop cannot be null');
        }
        $this->container['shop'] = $shop;

        return $this;
    }

    /**
     * Gets resolved
     *
     * @return bool|null
     */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
     * Sets resolved
     *
     * @param bool|null $resolved Решена ли проблема автора отзыва:  * `true` — да. * `false` — нет.  Если проблема решена, около отзыва на странице магазина появляется соответствующая надпись.
     *
     * @return self
     */
    public function setResolved($resolved)
    {
        if (is_null($resolved)) {
            throw new \InvalidArgumentException('non-nullable resolved cannot be null');
        }
        $this->container['resolved'] = $resolved;

        return $this;
    }

    /**
     * Gets verified
     *
     * @return bool|null
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     *
     * @param bool|null $verified {% note warning \"Этот параметр устарел\" %}  Не используйте его.  {% endnote %}  Является ли отзыв рекомендованным:  * `true` — да. * `false` — нет.
     *
     * @return self
     */
    public function setVerified($verified)
    {
        if (is_null($verified)) {
            throw new \InvalidArgumentException('non-nullable verified cannot be null');
        }
        $this->container['verified'] = $verified;

        return $this;
    }

    /**
     * Gets recommend
     *
     * @return bool|null
     */
    public function getRecommend()
    {
        return $this->container['recommend'];
    }

    /**
     * Sets recommend
     *
     * @param bool|null $recommend Купил бы автор отзыва в магазине снова:  * `true` — да. * `false` — нет.
     *
     * @return self
     */
    public function setRecommend($recommend)
    {
        if (is_null($recommend)) {
            throw new \InvalidArgumentException('non-nullable recommend cannot be null');
        }
        $this->container['recommend'] = $recommend;

        return $this;
    }

    /**
     * Gets grades
     *
     * @return \YandexMarketApi\Model\FeedbackGradesDTO|null
     */
    public function getGrades()
    {
        return $this->container['grades'];
    }

    /**
     * Sets grades
     *
     * @param \YandexMarketApi\Model\FeedbackGradesDTO|null $grades grades
     *
     * @return self
     */
    public function setGrades($grades)
    {
        if (is_null($grades)) {
            throw new \InvalidArgumentException('non-nullable grades cannot be null');
        }
        $this->container['grades'] = $grades;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \YandexMarketApi\Model\FeedbackOrderDTO|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \YandexMarketApi\Model\FeedbackOrderDTO|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

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


