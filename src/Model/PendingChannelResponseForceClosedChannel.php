<?php
/**
 * PendingChannelResponseForceClosedChannel
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
 * PendingChannelResponseForceClosedChannel Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PendingChannelResponseForceClosedChannel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PendingChannelResponseForceClosedChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel' => '\Lnd\Rest\Model\PendingChannelResponsePendingChannel',
        'closingTxid' => 'string',
        'limboBalance' => 'string',
        'maturityHeight' => 'int',
        'blocksTilMaturity' => 'int',
        'recoveredBalance' => 'string',
        'pendingHtlcs' => '\Lnd\Rest\Model\LnrpcPendingHTLC[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channel' => null,
        'closingTxid' => null,
        'limboBalance' => 'int64',
        'maturityHeight' => 'int64',
        'blocksTilMaturity' => 'int32',
        'recoveredBalance' => 'int64',
        'pendingHtlcs' => null
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
        'channel' => 'channel',
        'closingTxid' => 'closing_txid',
        'limboBalance' => 'limbo_balance',
        'maturityHeight' => 'maturity_height',
        'blocksTilMaturity' => 'blocks_til_maturity',
        'recoveredBalance' => 'recovered_balance',
        'pendingHtlcs' => 'pending_htlcs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'closingTxid' => 'setClosingTxid',
        'limboBalance' => 'setLimboBalance',
        'maturityHeight' => 'setMaturityHeight',
        'blocksTilMaturity' => 'setBlocksTilMaturity',
        'recoveredBalance' => 'setRecoveredBalance',
        'pendingHtlcs' => 'setPendingHtlcs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'closingTxid' => 'getClosingTxid',
        'limboBalance' => 'getLimboBalance',
        'maturityHeight' => 'getMaturityHeight',
        'blocksTilMaturity' => 'getBlocksTilMaturity',
        'recoveredBalance' => 'getRecoveredBalance',
        'pendingHtlcs' => 'getPendingHtlcs'
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
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['closingTxid'] = isset($data['closingTxid']) ? $data['closingTxid'] : null;
        $this->container['limboBalance'] = isset($data['limboBalance']) ? $data['limboBalance'] : null;
        $this->container['maturityHeight'] = isset($data['maturityHeight']) ? $data['maturityHeight'] : null;
        $this->container['blocksTilMaturity'] = isset($data['blocksTilMaturity']) ? $data['blocksTilMaturity'] : null;
        $this->container['recoveredBalance'] = isset($data['recoveredBalance']) ? $data['recoveredBalance'] : null;
        $this->container['pendingHtlcs'] = isset($data['pendingHtlcs']) ? $data['pendingHtlcs'] : null;
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
     * Gets channel
     *
     * @return \Lnd\Rest\Model\PendingChannelResponsePendingChannel
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \Lnd\Rest\Model\PendingChannelResponsePendingChannel $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets closingTxid
     *
     * @return string
     */
    public function getClosingTxid()
    {
        return $this->container['closingTxid'];
    }

    /**
     * Sets closingTxid
     *
     * @param string $closingTxid closingTxid
     *
     * @return $this
     */
    public function setClosingTxid($closingTxid)
    {
        $this->container['closingTxid'] = $closingTxid;

        return $this;
    }

    /**
     * Gets limboBalance
     *
     * @return string
     */
    public function getLimboBalance()
    {
        return $this->container['limboBalance'];
    }

    /**
     * Sets limboBalance
     *
     * @param string $limboBalance limboBalance
     *
     * @return $this
     */
    public function setLimboBalance($limboBalance)
    {
        $this->container['limboBalance'] = $limboBalance;

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
     * @param int $blocksTilMaturity Remaining # of blocks until the commitment output can be swept. Negative values indicate how many blocks have passed since becoming mature.
     *
     * @return $this
     */
    public function setBlocksTilMaturity($blocksTilMaturity)
    {
        $this->container['blocksTilMaturity'] = $blocksTilMaturity;

        return $this;
    }

    /**
     * Gets recoveredBalance
     *
     * @return string
     */
    public function getRecoveredBalance()
    {
        return $this->container['recoveredBalance'];
    }

    /**
     * Sets recoveredBalance
     *
     * @param string $recoveredBalance recoveredBalance
     *
     * @return $this
     */
    public function setRecoveredBalance($recoveredBalance)
    {
        $this->container['recoveredBalance'] = $recoveredBalance;

        return $this;
    }

    /**
     * Gets pendingHtlcs
     *
     * @return \Lnd\Rest\Model\LnrpcPendingHTLC[]
     */
    public function getPendingHtlcs()
    {
        return $this->container['pendingHtlcs'];
    }

    /**
     * Sets pendingHtlcs
     *
     * @param \Lnd\Rest\Model\LnrpcPendingHTLC[] $pendingHtlcs pendingHtlcs
     *
     * @return $this
     */
    public function setPendingHtlcs($pendingHtlcs)
    {
        $this->container['pendingHtlcs'] = $pendingHtlcs;

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


