<?php
/**
 * BatchDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  USAePay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Batches
 *
 * Endpoints for handling batches
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
 * BatchDetails Class Doc Comment
 *
 * @category Class
 * @package  USAePay
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BatchDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'key' => 'string',
        'opened' => 'string',
        'status' => 'string',
        'closed' => 'string',
        'scheduled' => 'string',
        'total_amount' => 'float',
        'total_count' => 'float',
        'sales_amount' => 'float',
        'sales_count' => 'float',
        'voids_amount' => 'float',
        'voids_count' => 'float',
        'refunds_amount' => 'float',
        'refunds_count' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'key' => null,
        'opened' => null,
        'status' => null,
        'closed' => null,
        'scheduled' => null,
        'total_amount' => null,
        'total_count' => null,
        'sales_amount' => null,
        'sales_count' => null,
        'voids_amount' => null,
        'voids_count' => null,
        'refunds_amount' => null,
        'refunds_count' => null
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
        'opened' => 'opened',
        'status' => 'status',
        'closed' => 'closed',
        'scheduled' => 'scheduled',
        'total_amount' => 'total_amount',
        'total_count' => 'total_count',
        'sales_amount' => 'sales_amount',
        'sales_count' => 'sales_count',
        'voids_amount' => 'voids_amount',
        'voids_count' => 'voids_count',
        'refunds_amount' => 'refunds_amount',
        'refunds_count' => 'refunds_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'key' => 'setKey',
        'opened' => 'setOpened',
        'status' => 'setStatus',
        'closed' => 'setClosed',
        'scheduled' => 'setScheduled',
        'total_amount' => 'setTotalAmount',
        'total_count' => 'setTotalCount',
        'sales_amount' => 'setSalesAmount',
        'sales_count' => 'setSalesCount',
        'voids_amount' => 'setVoidsAmount',
        'voids_count' => 'setVoidsCount',
        'refunds_amount' => 'setRefundsAmount',
        'refunds_count' => 'setRefundsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'key' => 'getKey',
        'opened' => 'getOpened',
        'status' => 'getStatus',
        'closed' => 'getClosed',
        'scheduled' => 'getScheduled',
        'total_amount' => 'getTotalAmount',
        'total_count' => 'getTotalCount',
        'sales_amount' => 'getSalesAmount',
        'sales_count' => 'getSalesCount',
        'voids_amount' => 'getVoidsAmount',
        'voids_count' => 'getVoidsCount',
        'refunds_amount' => 'getRefundsAmount',
        'refunds_count' => 'getRefundsCount'
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
        $this->container['opened'] = isset($data['opened']) ? $data['opened'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['closed'] = isset($data['closed']) ? $data['closed'] : null;
        $this->container['scheduled'] = isset($data['scheduled']) ? $data['scheduled'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
        $this->container['sales_amount'] = isset($data['sales_amount']) ? $data['sales_amount'] : null;
        $this->container['sales_count'] = isset($data['sales_count']) ? $data['sales_count'] : null;
        $this->container['voids_amount'] = isset($data['voids_amount']) ? $data['voids_amount'] : null;
        $this->container['voids_count'] = isset($data['voids_count']) ? $data['voids_count'] : null;
        $this->container['refunds_amount'] = isset($data['refunds_amount']) ? $data['refunds_amount'] : null;
        $this->container['refunds_count'] = isset($data['refunds_count']) ? $data['refunds_count'] : null;
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
     * @param string|null $type Denotes this object is a batch.
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
     * @param string|null $key This is the gateway generated unique identifier for the batch.
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets opened
     *
     * @return string|null
     */
    public function getOpened()
    {
        return $this->container['opened'];
    }

    /**
     * Sets opened
     *
     * @param string|null $opened Date and time the batch was opened. Format will be, YYYY-MM-DD HH:MM:SS.
     *
     * @return $this
     */
    public function setOpened($opened)
    {
        $this->container['opened'] = $opened;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Batch Status.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets closed
     *
     * @return string|null
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param string|null $closed Date and time the batch was closed. Format will be, YYYY-MM-DD HH:MM:SS.
     *
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;

        return $this;
    }

    /**
     * Gets scheduled
     *
     * @return string|null
     */
    public function getScheduled()
    {
        return $this->container['scheduled'];
    }

    /**
     * Sets scheduled
     *
     * @param string|null $scheduled Date and time the batch was opened. Format will be, YYYY-MM-DD HH:MM:SS.
     *
     * @return $this
     */
    public function setScheduled($scheduled)
    {
        $this->container['scheduled'] = $scheduled;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float|null $total_amount Total amount in dollars in the specific batch. This includes sales, voids, and refunds.
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return float|null
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param float|null $total_count Total transaction count. This includes sales, voids, and refunds.
     *
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets sales_amount
     *
     * @return float|null
     */
    public function getSalesAmount()
    {
        return $this->container['sales_amount'];
    }

    /**
     * Sets sales_amount
     *
     * @param float|null $sales_amount Total amount for sales in dollars in the specific batch. Only shows when batch contains this transaction type.
     *
     * @return $this
     */
    public function setSalesAmount($sales_amount)
    {
        $this->container['sales_amount'] = $sales_amount;

        return $this;
    }

    /**
     * Gets sales_count
     *
     * @return float|null
     */
    public function getSalesCount()
    {
        return $this->container['sales_count'];
    }

    /**
     * Sets sales_count
     *
     * @param float|null $sales_count Total transaction count. This includes sales only. Only shows when batch contains this transaction type.
     *
     * @return $this
     */
    public function setSalesCount($sales_count)
    {
        $this->container['sales_count'] = $sales_count;

        return $this;
    }

    /**
     * Gets voids_amount
     *
     * @return float|null
     */
    public function getVoidsAmount()
    {
        return $this->container['voids_amount'];
    }

    /**
     * Sets voids_amount
     *
     * @param float|null $voids_amount Total amount for voids in dollars in the specific batch. Only shows when batch contains this transaction type.
     *
     * @return $this
     */
    public function setVoidsAmount($voids_amount)
    {
        $this->container['voids_amount'] = $voids_amount;

        return $this;
    }

    /**
     * Gets voids_count
     *
     * @return float|null
     */
    public function getVoidsCount()
    {
        return $this->container['voids_count'];
    }

    /**
     * Sets voids_count
     *
     * @param float|null $voids_count Total transaction count. This includes voids only. Only shows when batch contains this transaction type.
     *
     * @return $this
     */
    public function setVoidsCount($voids_count)
    {
        $this->container['voids_count'] = $voids_count;

        return $this;
    }

    /**
     * Gets refunds_amount
     *
     * @return float|null
     */
    public function getRefundsAmount()
    {
        return $this->container['refunds_amount'];
    }

    /**
     * Sets refunds_amount
     *
     * @param float|null $refunds_amount Total amount for refunds in dollars in the specific batch. Only shows when batch contains this transaction type.
     *
     * @return $this
     */
    public function setRefundsAmount($refunds_amount)
    {
        $this->container['refunds_amount'] = $refunds_amount;

        return $this;
    }

    /**
     * Gets refunds_count
     *
     * @return float|null
     */
    public function getRefundsCount()
    {
        return $this->container['refunds_count'];
    }

    /**
     * Sets refunds_count
     *
     * @param float|null $refunds_count Total transaction count. This includes refunds only. Only shows when batch contains this transaction type.
     *
     * @return $this
     */
    public function setRefundsCount($refunds_count)
    {
        $this->container['refunds_count'] = $refunds_count;

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


