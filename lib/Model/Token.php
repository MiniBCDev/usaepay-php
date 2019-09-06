<?php
/**
 * Token
 *
 * PHP version 5
 *
 * @category Class
 * @package  USAePay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * General
 *
 * USAePay Rest API
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: 706@usaepay.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace USAePay\Model;

use \ArrayAccess;
use \USAePay\ObjectSerializer;

/**
 * Token Class Doc Comment
 *
 * @category Class
 * @package  USAePay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Token implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Token';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'key' => 'string',
        'card_key' => 'string',
        'cardref' => 'string',
        'masked_card_number' => 'string',
        'card_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'key' => null,
        'card_key' => null,
        'cardref' => null,
        'masked_card_number' => null,
        'card_type' => null
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
        'type' => 'type',
        'key' => 'key',
        'card_key' => 'card_key',
        'cardref' => 'cardref',
        'masked_card_number' => 'masked_card_number',
        'card_type' => 'card_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'key' => 'setKey',
        'card_key' => 'setCardKey',
        'cardref' => 'setCardref',
        'masked_card_number' => 'setMaskedCardNumber',
        'card_type' => 'setCardType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'key' => 'getKey',
        'card_key' => 'getCardKey',
        'cardref' => 'getCardref',
        'masked_card_number' => 'getMaskedCardNumber',
        'card_type' => 'getCardType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['card_key'] = isset($data['card_key']) ? $data['card_key'] : null;
        $this->container['cardref'] = isset($data['cardref']) ? $data['cardref'] : null;
        $this->container['masked_card_number'] = isset($data['masked_card_number']) ? $data['masked_card_number'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Should always be token
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key Should always be token
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets card_key
     *
     * @return string|null
     */
    public function getCardKey()
    {
        return $this->container['card_key'];
    }

    /**
     * Sets card_key
     *
     * @param string|null $card_key Should always be token
     *
     * @return $this
     */
    public function setCardKey($card_key)
    {
        $this->container['card_key'] = $card_key;

        return $this;
    }

    /**
     * Gets cardref
     *
     * @return string|null
     */
    public function getCardref()
    {
        return $this->container['cardref'];
    }

    /**
     * Sets cardref
     *
     * @param string|null $cardref Should always be token
     *
     * @return $this
     */
    public function setCardref($cardref)
    {
        $this->container['cardref'] = $cardref;

        return $this;
    }

    /**
     * Gets masked_card_number
     *
     * @return string|null
     */
    public function getMaskedCardNumber()
    {
        return $this->container['masked_card_number'];
    }

    /**
     * Sets masked_card_number
     *
     * @param string|null $masked_card_number Masked card number
     *
     * @return $this
     */
    public function setMaskedCardNumber($masked_card_number)
    {
        $this->container['masked_card_number'] = $masked_card_number;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type Credit card type
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
}


