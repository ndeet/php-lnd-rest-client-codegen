<?php
/**
 * LnrpcGetInfoResponse
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
 * LnrpcGetInfoResponse Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcGetInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcGetInfoResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identityPubkey' => 'string',
        'alias' => 'string',
        'numPendingChannels' => 'int',
        'numActiveChannels' => 'int',
        'numPeers' => 'int',
        'blockHeight' => 'int',
        'blockHash' => 'string',
        'syncedToChain' => 'bool',
        'testnet' => 'bool',
        'uris' => 'string[]',
        'bestHeaderTimestamp' => 'string',
        'version' => 'string',
        'numInactiveChannels' => 'int',
        'chains' => '\Lnd\Rest\Model\LnrpcChain[]',
        'color' => 'string',
        'syncedToGraph' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identityPubkey' => null,
        'alias' => null,
        'numPendingChannels' => 'int64',
        'numActiveChannels' => 'int64',
        'numPeers' => 'int64',
        'blockHeight' => 'int64',
        'blockHash' => null,
        'syncedToChain' => 'boolean',
        'testnet' => 'boolean',
        'uris' => null,
        'bestHeaderTimestamp' => 'int64',
        'version' => null,
        'numInactiveChannels' => 'int64',
        'chains' => null,
        'color' => null,
        'syncedToGraph' => 'boolean'
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
        'identityPubkey' => 'identity_pubkey',
        'alias' => 'alias',
        'numPendingChannels' => 'num_pending_channels',
        'numActiveChannels' => 'num_active_channels',
        'numPeers' => 'num_peers',
        'blockHeight' => 'block_height',
        'blockHash' => 'block_hash',
        'syncedToChain' => 'synced_to_chain',
        'testnet' => 'testnet',
        'uris' => 'uris',
        'bestHeaderTimestamp' => 'best_header_timestamp',
        'version' => 'version',
        'numInactiveChannels' => 'num_inactive_channels',
        'chains' => 'chains',
        'color' => 'color',
        'syncedToGraph' => 'synced_to_graph'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identityPubkey' => 'setIdentityPubkey',
        'alias' => 'setAlias',
        'numPendingChannels' => 'setNumPendingChannels',
        'numActiveChannels' => 'setNumActiveChannels',
        'numPeers' => 'setNumPeers',
        'blockHeight' => 'setBlockHeight',
        'blockHash' => 'setBlockHash',
        'syncedToChain' => 'setSyncedToChain',
        'testnet' => 'setTestnet',
        'uris' => 'setUris',
        'bestHeaderTimestamp' => 'setBestHeaderTimestamp',
        'version' => 'setVersion',
        'numInactiveChannels' => 'setNumInactiveChannels',
        'chains' => 'setChains',
        'color' => 'setColor',
        'syncedToGraph' => 'setSyncedToGraph'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identityPubkey' => 'getIdentityPubkey',
        'alias' => 'getAlias',
        'numPendingChannels' => 'getNumPendingChannels',
        'numActiveChannels' => 'getNumActiveChannels',
        'numPeers' => 'getNumPeers',
        'blockHeight' => 'getBlockHeight',
        'blockHash' => 'getBlockHash',
        'syncedToChain' => 'getSyncedToChain',
        'testnet' => 'getTestnet',
        'uris' => 'getUris',
        'bestHeaderTimestamp' => 'getBestHeaderTimestamp',
        'version' => 'getVersion',
        'numInactiveChannels' => 'getNumInactiveChannels',
        'chains' => 'getChains',
        'color' => 'getColor',
        'syncedToGraph' => 'getSyncedToGraph'
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
        $this->container['identityPubkey'] = isset($data['identityPubkey']) ? $data['identityPubkey'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['numPendingChannels'] = isset($data['numPendingChannels']) ? $data['numPendingChannels'] : null;
        $this->container['numActiveChannels'] = isset($data['numActiveChannels']) ? $data['numActiveChannels'] : null;
        $this->container['numPeers'] = isset($data['numPeers']) ? $data['numPeers'] : null;
        $this->container['blockHeight'] = isset($data['blockHeight']) ? $data['blockHeight'] : null;
        $this->container['blockHash'] = isset($data['blockHash']) ? $data['blockHash'] : null;
        $this->container['syncedToChain'] = isset($data['syncedToChain']) ? $data['syncedToChain'] : null;
        $this->container['testnet'] = isset($data['testnet']) ? $data['testnet'] : null;
        $this->container['uris'] = isset($data['uris']) ? $data['uris'] : null;
        $this->container['bestHeaderTimestamp'] = isset($data['bestHeaderTimestamp']) ? $data['bestHeaderTimestamp'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['numInactiveChannels'] = isset($data['numInactiveChannels']) ? $data['numInactiveChannels'] : null;
        $this->container['chains'] = isset($data['chains']) ? $data['chains'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['syncedToGraph'] = isset($data['syncedToGraph']) ? $data['syncedToGraph'] : null;
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
     * Gets identityPubkey
     *
     * @return string
     */
    public function getIdentityPubkey()
    {
        return $this->container['identityPubkey'];
    }

    /**
     * Sets identityPubkey
     *
     * @param string $identityPubkey / The identity pubkey of the current node.
     *
     * @return $this
     */
    public function setIdentityPubkey($identityPubkey)
    {
        $this->container['identityPubkey'] = $identityPubkey;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string $alias alias
     *
     * @return $this
     */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets numPendingChannels
     *
     * @return int
     */
    public function getNumPendingChannels()
    {
        return $this->container['numPendingChannels'];
    }

    /**
     * Sets numPendingChannels
     *
     * @param int $numPendingChannels numPendingChannels
     *
     * @return $this
     */
    public function setNumPendingChannels($numPendingChannels)
    {
        $this->container['numPendingChannels'] = $numPendingChannels;

        return $this;
    }

    /**
     * Gets numActiveChannels
     *
     * @return int
     */
    public function getNumActiveChannels()
    {
        return $this->container['numActiveChannels'];
    }

    /**
     * Sets numActiveChannels
     *
     * @param int $numActiveChannels numActiveChannels
     *
     * @return $this
     */
    public function setNumActiveChannels($numActiveChannels)
    {
        $this->container['numActiveChannels'] = $numActiveChannels;

        return $this;
    }

    /**
     * Gets numPeers
     *
     * @return int
     */
    public function getNumPeers()
    {
        return $this->container['numPeers'];
    }

    /**
     * Sets numPeers
     *
     * @param int $numPeers numPeers
     *
     * @return $this
     */
    public function setNumPeers($numPeers)
    {
        $this->container['numPeers'] = $numPeers;

        return $this;
    }

    /**
     * Gets blockHeight
     *
     * @return int
     */
    public function getBlockHeight()
    {
        return $this->container['blockHeight'];
    }

    /**
     * Sets blockHeight
     *
     * @param int $blockHeight blockHeight
     *
     * @return $this
     */
    public function setBlockHeight($blockHeight)
    {
        $this->container['blockHeight'] = $blockHeight;

        return $this;
    }

    /**
     * Gets blockHash
     *
     * @return string
     */
    public function getBlockHash()
    {
        return $this->container['blockHash'];
    }

    /**
     * Sets blockHash
     *
     * @param string $blockHash blockHash
     *
     * @return $this
     */
    public function setBlockHash($blockHash)
    {
        $this->container['blockHash'] = $blockHash;

        return $this;
    }

    /**
     * Gets syncedToChain
     *
     * @return bool
     */
    public function getSyncedToChain()
    {
        return $this->container['syncedToChain'];
    }

    /**
     * Sets syncedToChain
     *
     * @param bool $syncedToChain syncedToChain
     *
     * @return $this
     */
    public function setSyncedToChain($syncedToChain)
    {
        $this->container['syncedToChain'] = $syncedToChain;

        return $this;
    }

    /**
     * Gets testnet
     *
     * @return bool
     */
    public function getTestnet()
    {
        return $this->container['testnet'];
    }

    /**
     * Sets testnet
     *
     * @param bool $testnet testnet
     *
     * @return $this
     */
    public function setTestnet($testnet)
    {
        $this->container['testnet'] = $testnet;

        return $this;
    }

    /**
     * Gets uris
     *
     * @return string[]
     */
    public function getUris()
    {
        return $this->container['uris'];
    }

    /**
     * Sets uris
     *
     * @param string[] $uris / The URIs of the current node.
     *
     * @return $this
     */
    public function setUris($uris)
    {
        $this->container['uris'] = $uris;

        return $this;
    }

    /**
     * Gets bestHeaderTimestamp
     *
     * @return string
     */
    public function getBestHeaderTimestamp()
    {
        return $this->container['bestHeaderTimestamp'];
    }

    /**
     * Sets bestHeaderTimestamp
     *
     * @param string $bestHeaderTimestamp bestHeaderTimestamp
     *
     * @return $this
     */
    public function setBestHeaderTimestamp($bestHeaderTimestamp)
    {
        $this->container['bestHeaderTimestamp'] = $bestHeaderTimestamp;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version / The version of the LND software that the node is running.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets numInactiveChannels
     *
     * @return int
     */
    public function getNumInactiveChannels()
    {
        return $this->container['numInactiveChannels'];
    }

    /**
     * Sets numInactiveChannels
     *
     * @param int $numInactiveChannels numInactiveChannels
     *
     * @return $this
     */
    public function setNumInactiveChannels($numInactiveChannels)
    {
        $this->container['numInactiveChannels'] = $numInactiveChannels;

        return $this;
    }

    /**
     * Gets chains
     *
     * @return \Lnd\Rest\Model\LnrpcChain[]
     */
    public function getChains()
    {
        return $this->container['chains'];
    }

    /**
     * Sets chains
     *
     * @param \Lnd\Rest\Model\LnrpcChain[] $chains chains
     *
     * @return $this
     */
    public function setChains($chains)
    {
        $this->container['chains'] = $chains;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets syncedToGraph
     *
     * @return bool
     */
    public function getSyncedToGraph()
    {
        return $this->container['syncedToGraph'];
    }

    /**
     * Sets syncedToGraph
     *
     * @param bool $syncedToGraph Whether we consider ourselves synced with the public channel graph.
     *
     * @return $this
     */
    public function setSyncedToGraph($syncedToGraph)
    {
        $this->container['syncedToGraph'] = $syncedToGraph;

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


