<?php
/**
 * LnrpcClosedChannelUpdate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * rpc.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Lnd\Rest\Model;

use \ArrayAccess;
use \Lnd\Rest\ObjectSerializer;

/**
 * LnrpcClosedChannelUpdate Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcClosedChannelUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcClosedChannelUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chanId' => 'string',
        'capacity' => 'string',
        'closedHeight' => 'int',
        'chanPoint' => '\Lnd\Rest\Model\LnrpcChannelPoint'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chanId' => 'uint64',
        'capacity' => 'int64',
        'closedHeight' => 'int64',
        'chanPoint' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'chanId' => 'chan_id',
        'capacity' => 'capacity',
        'closedHeight' => 'closed_height',
        'chanPoint' => 'chan_point'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chanId' => 'setChanId',
        'capacity' => 'setCapacity',
        'closedHeight' => 'setClosedHeight',
        'chanPoint' => 'setChanPoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chanId' => 'getChanId',
        'capacity' => 'getCapacity',
        'closedHeight' => 'getClosedHeight',
        'chanPoint' => 'getChanPoint'
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
        return self::$swaggerModelName;
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
        $this->container['chanId'] = isset($data['chanId']) ? $data['chanId'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['closedHeight'] = isset($data['closedHeight']) ? $data['closedHeight'] : null;
        $this->container['chanPoint'] = isset($data['chanPoint']) ? $data['chanPoint'] : null;
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

        return true;
    }


    /**
     * Gets chanId
     *
     * @return string
     */
    public function getChanId()
    {
        return $this->container['chanId'];
    }

    /**
     * Sets chanId
     *
     * @param string $chanId * The unique channel ID for the channel. The first 3 bytes are the block height, the next 3 the index within the block, and the last 2 bytes are the output index for the channel.
     *
     * @return $this
     */
    public function setChanId($chanId)
    {
        $this->container['chanId'] = $chanId;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param string $capacity capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets closedHeight
     *
     * @return int
     */
    public function getClosedHeight()
    {
        return $this->container['closedHeight'];
    }

    /**
     * Sets closedHeight
     *
     * @param int $closedHeight closedHeight
     *
     * @return $this
     */
    public function setClosedHeight($closedHeight)
    {
        $this->container['closedHeight'] = $closedHeight;

        return $this;
    }

    /**
     * Gets chanPoint
     *
     * @return \Lnd\Rest\Model\LnrpcChannelPoint
     */
    public function getChanPoint()
    {
        return $this->container['chanPoint'];
    }

    /**
     * Sets chanPoint
     *
     * @param \Lnd\Rest\Model\LnrpcChannelPoint $chanPoint chanPoint
     *
     * @return $this
     */
    public function setChanPoint($chanPoint)
    {
        $this->container['chanPoint'] = $chanPoint;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


