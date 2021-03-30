<?php
/**
 * NullableClass
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * NullableClass Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NullableClass implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NullableClass';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'integer_prop' => 'int',
        'number_prop' => 'float',
        'boolean_prop' => 'bool',
        'string_prop' => 'string',
        'date_prop' => '\DateTime',
        'datetime_prop' => '\DateTime',
        'array_nullable_prop' => 'object[]',
        'array_and_items_nullable_prop' => 'object[]',
        'array_items_nullable' => 'object[]',
        'object_nullable_prop' => 'array<string,object>',
        'object_and_items_nullable_prop' => 'array<string,object>',
        'object_items_nullable' => 'array<string,object>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'integer_prop' => null,
        'number_prop' => null,
        'boolean_prop' => null,
        'string_prop' => null,
        'date_prop' => 'date',
        'datetime_prop' => 'date-time',
        'array_nullable_prop' => null,
        'array_and_items_nullable_prop' => null,
        'array_items_nullable' => null,
        'object_nullable_prop' => null,
        'object_and_items_nullable_prop' => null,
        'object_items_nullable' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'integer_prop' => 'integer_prop',
        'number_prop' => 'number_prop',
        'boolean_prop' => 'boolean_prop',
        'string_prop' => 'string_prop',
        'date_prop' => 'date_prop',
        'datetime_prop' => 'datetime_prop',
        'array_nullable_prop' => 'array_nullable_prop',
        'array_and_items_nullable_prop' => 'array_and_items_nullable_prop',
        'array_items_nullable' => 'array_items_nullable',
        'object_nullable_prop' => 'object_nullable_prop',
        'object_and_items_nullable_prop' => 'object_and_items_nullable_prop',
        'object_items_nullable' => 'object_items_nullable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integer_prop' => 'setIntegerProp',
        'number_prop' => 'setNumberProp',
        'boolean_prop' => 'setBooleanProp',
        'string_prop' => 'setStringProp',
        'date_prop' => 'setDateProp',
        'datetime_prop' => 'setDatetimeProp',
        'array_nullable_prop' => 'setArrayNullableProp',
        'array_and_items_nullable_prop' => 'setArrayAndItemsNullableProp',
        'array_items_nullable' => 'setArrayItemsNullable',
        'object_nullable_prop' => 'setObjectNullableProp',
        'object_and_items_nullable_prop' => 'setObjectAndItemsNullableProp',
        'object_items_nullable' => 'setObjectItemsNullable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integer_prop' => 'getIntegerProp',
        'number_prop' => 'getNumberProp',
        'boolean_prop' => 'getBooleanProp',
        'string_prop' => 'getStringProp',
        'date_prop' => 'getDateProp',
        'datetime_prop' => 'getDatetimeProp',
        'array_nullable_prop' => 'getArrayNullableProp',
        'array_and_items_nullable_prop' => 'getArrayAndItemsNullableProp',
        'array_items_nullable' => 'getArrayItemsNullable',
        'object_nullable_prop' => 'getObjectNullableProp',
        'object_and_items_nullable_prop' => 'getObjectAndItemsNullableProp',
        'object_items_nullable' => 'getObjectItemsNullable'
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
        $this->container['integer_prop'] = $data['integer_prop'] ?? null;
        $this->container['number_prop'] = $data['number_prop'] ?? null;
        $this->container['boolean_prop'] = $data['boolean_prop'] ?? null;
        $this->container['string_prop'] = $data['string_prop'] ?? null;
        $this->container['date_prop'] = $data['date_prop'] ?? null;
        $this->container['datetime_prop'] = $data['datetime_prop'] ?? null;
        $this->container['array_nullable_prop'] = $data['array_nullable_prop'] ?? null;
        $this->container['array_and_items_nullable_prop'] = $data['array_and_items_nullable_prop'] ?? null;
        $this->container['array_items_nullable'] = $data['array_items_nullable'] ?? null;
        $this->container['object_nullable_prop'] = $data['object_nullable_prop'] ?? null;
        $this->container['object_and_items_nullable_prop'] = $data['object_and_items_nullable_prop'] ?? null;
        $this->container['object_items_nullable'] = $data['object_items_nullable'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets integer_prop
     *
     * @return int|null
     */
    public function getIntegerProp()
    {
        return $this->container['integer_prop'];
    }

    /**
     * Sets integer_prop
     *
     * @param int|null $integer_prop integer_prop
     *
     * @return self
     */
    public function setIntegerProp($integer_prop)
    {
        $this->container['integer_prop'] = $integer_prop;

        return $this;
    }

    /**
     * Gets number_prop
     *
     * @return float|null
     */
    public function getNumberProp()
    {
        return $this->container['number_prop'];
    }

    /**
     * Sets number_prop
     *
     * @param float|null $number_prop number_prop
     *
     * @return self
     */
    public function setNumberProp($number_prop)
    {
        $this->container['number_prop'] = $number_prop;

        return $this;
    }

    /**
     * Gets boolean_prop
     *
     * @return bool|null
     */
    public function getBooleanProp()
    {
        return $this->container['boolean_prop'];
    }

    /**
     * Sets boolean_prop
     *
     * @param bool|null $boolean_prop boolean_prop
     *
     * @return self
     */
    public function setBooleanProp($boolean_prop)
    {
        $this->container['boolean_prop'] = $boolean_prop;

        return $this;
    }

    /**
     * Gets string_prop
     *
     * @return string|null
     */
    public function getStringProp()
    {
        return $this->container['string_prop'];
    }

    /**
     * Sets string_prop
     *
     * @param string|null $string_prop string_prop
     *
     * @return self
     */
    public function setStringProp($string_prop)
    {
        $this->container['string_prop'] = $string_prop;

        return $this;
    }

    /**
     * Gets date_prop
     *
     * @return \DateTime|null
     */
    public function getDateProp()
    {
        return $this->container['date_prop'];
    }

    /**
     * Sets date_prop
     *
     * @param \DateTime|null $date_prop date_prop
     *
     * @return self
     */
    public function setDateProp($date_prop)
    {
        $this->container['date_prop'] = $date_prop;

        return $this;
    }

    /**
     * Gets datetime_prop
     *
     * @return \DateTime|null
     */
    public function getDatetimeProp()
    {
        return $this->container['datetime_prop'];
    }

    /**
     * Sets datetime_prop
     *
     * @param \DateTime|null $datetime_prop datetime_prop
     *
     * @return self
     */
    public function setDatetimeProp($datetime_prop)
    {
        $this->container['datetime_prop'] = $datetime_prop;

        return $this;
    }

    /**
     * Gets array_nullable_prop
     *
     * @return object[]|null
     */
    public function getArrayNullableProp()
    {
        return $this->container['array_nullable_prop'];
    }

    /**
     * Sets array_nullable_prop
     *
     * @param object[]|null $array_nullable_prop array_nullable_prop
     *
     * @return self
     */
    public function setArrayNullableProp($array_nullable_prop)
    {
        $this->container['array_nullable_prop'] = $array_nullable_prop;

        return $this;
    }

    /**
     * Gets array_and_items_nullable_prop
     *
     * @return object[]|null
     */
    public function getArrayAndItemsNullableProp()
    {
        return $this->container['array_and_items_nullable_prop'];
    }

    /**
     * Sets array_and_items_nullable_prop
     *
     * @param object[]|null $array_and_items_nullable_prop array_and_items_nullable_prop
     *
     * @return self
     */
    public function setArrayAndItemsNullableProp($array_and_items_nullable_prop)
    {
        $this->container['array_and_items_nullable_prop'] = $array_and_items_nullable_prop;

        return $this;
    }

    /**
     * Gets array_items_nullable
     *
     * @return object[]|null
     */
    public function getArrayItemsNullable()
    {
        return $this->container['array_items_nullable'];
    }

    /**
     * Sets array_items_nullable
     *
     * @param object[]|null $array_items_nullable array_items_nullable
     *
     * @return self
     */
    public function setArrayItemsNullable($array_items_nullable)
    {
        $this->container['array_items_nullable'] = $array_items_nullable;

        return $this;
    }

    /**
     * Gets object_nullable_prop
     *
     * @return array<string,object>|null
     */
    public function getObjectNullableProp()
    {
        return $this->container['object_nullable_prop'];
    }

    /**
     * Sets object_nullable_prop
     *
     * @param array<string,object>|null $object_nullable_prop object_nullable_prop
     *
     * @return self
     */
    public function setObjectNullableProp($object_nullable_prop)
    {
        $this->container['object_nullable_prop'] = $object_nullable_prop;

        return $this;
    }

    /**
     * Gets object_and_items_nullable_prop
     *
     * @return array<string,object>|null
     */
    public function getObjectAndItemsNullableProp()
    {
        return $this->container['object_and_items_nullable_prop'];
    }

    /**
     * Sets object_and_items_nullable_prop
     *
     * @param array<string,object>|null $object_and_items_nullable_prop object_and_items_nullable_prop
     *
     * @return self
     */
    public function setObjectAndItemsNullableProp($object_and_items_nullable_prop)
    {
        $this->container['object_and_items_nullable_prop'] = $object_and_items_nullable_prop;

        return $this;
    }

    /**
     * Gets object_items_nullable
     *
     * @return array<string,object>|null
     */
    public function getObjectItemsNullable()
    {
        return $this->container['object_items_nullable'];
    }

    /**
     * Sets object_items_nullable
     *
     * @param array<string,object>|null $object_items_nullable object_items_nullable
     *
     * @return self
     */
    public function setObjectItemsNullable($object_items_nullable)
    {
        $this->container['object_items_nullable'] = $object_items_nullable;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


