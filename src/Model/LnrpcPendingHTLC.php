<?php
/**
 * LnrpcPendingHTLC
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
 * Swagger Codegen version: 2.4.8
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
 * LnrpcPendingHTLC Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcPendingHTLC implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcPendingHTLC';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'incoming' => 'bool',
        'amount' => 'string',
        'outpoint' => 'string',
        'maturityHeight' => 'int',
        'blocksTilMaturity' => 'int',
        'stage' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'incoming' => 'boolean',
        'amount' => 'int64',
        'outpoint' => null,
        'maturityHeight' => 'int64',
        'blocksTilMaturity' => 'int32',
        'stage' => 'int64'
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
        'incoming' => 'incoming',
        'amount' => 'amount',
        'outpoint' => 'outpoint',
        'maturityHeight' => 'maturity_height',
        'blocksTilMaturity' => 'blocks_til_maturity',
        'stage' => 'stage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'incoming' => 'setIncoming',
        'amount' => 'setAmount',
        'outpoint' => 'setOutpoint',
        'maturityHeight' => 'setMaturityHeight',
        'blocksTilMaturity' => 'setBlocksTilMaturity',
        'stage' => 'setStage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'incoming' => 'getIncoming',
        'amount' => 'getAmount',
        'outpoint' => 'getOutpoint',
        'maturityHeight' => 'getMaturityHeight',
        'blocksTilMaturity' => 'getBlocksTilMaturity',
        'stage' => 'getStage'
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
        $this->container['incoming'] = isset($data['incoming']) ? $data['incoming'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['outpoint'] = isset($data['outpoint']) ? $data['outpoint'] : null;
        $this->container['maturityHeight'] = isset($data['maturityHeight']) ? $data['maturityHeight'] : null;
        $this->container['blocksTilMaturity'] = isset($data['blocksTilMaturity']) ? $data['blocksTilMaturity'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
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
     * Gets incoming
     *
     * @return bool
     */
    public function getIncoming()
    {
        return $this->container['incoming'];
    }

    /**
     * Sets incoming
     *
     * @param bool $incoming incoming
     *
     * @return $this
     */
    public function setIncoming($incoming)
    {
        $this->container['incoming'] = $incoming;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets outpoint
     *
     * @return string
     */
    public function getOutpoint()
    {
        return $this->container['outpoint'];
    }

    /**
     * Sets outpoint
     *
     * @param string $outpoint outpoint
     *
     * @return $this
     */
    public function setOutpoint($outpoint)
    {
        $this->container['outpoint'] = $outpoint;

        return $this;
    }

    /**
     * Gets maturityHeight
     *
     * @return int
     */
    public function getMaturityHeight()
    {
        return $this->container['maturityHeight'];
    }

    /**
     * Sets maturityHeight
     *
     * @param int $maturityHeight maturityHeight
     *
     * @return $this
     */
    public function setMaturityHeight($maturityHeight)
    {
        $this->container['maturityHeight'] = $maturityHeight;

        return $this;
    }

    /**
     * Gets blocksTilMaturity
     *
     * @return int
     */
    public function getBlocksTilMaturity()
    {
        return $this->container['blocksTilMaturity'];
    }

    /**
     * Sets blocksTilMaturity
     *
     * @param int $blocksTilMaturity * The number of blocks remaining until the current stage can be swept. Negative values indicate how many blocks have passed since becoming mature.
     *
     * @return $this
     */
    public function setBlocksTilMaturity($blocksTilMaturity)
    {
        $this->container['blocksTilMaturity'] = $blocksTilMaturity;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return int
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param int $stage stage
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

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


