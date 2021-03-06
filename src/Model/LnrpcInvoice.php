<?php
/**
 * LnrpcInvoice
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
 * LnrpcInvoice Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'memo' => 'string',
        'receipt' => 'string',
        'rPreimage' => 'string',
        'rHash' => 'string',
        'value' => 'string',
        'settled' => 'bool',
        'creationDate' => 'string',
        'settleDate' => 'string',
        'paymentRequest' => 'string',
        'descriptionHash' => 'string',
        'expiry' => 'string',
        'fallbackAddr' => 'string',
        'cltvExpiry' => 'string',
        'routeHints' => '\Lnd\Rest\Model\LnrpcRouteHint[]',
        'private' => 'bool',
        'addIndex' => 'string',
        'settleIndex' => 'string',
        'amtPaid' => 'string',
        'amtPaidSat' => 'string',
        'amtPaidMsat' => 'string',
        'state' => '\Lnd\Rest\Model\InvoiceInvoiceState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'memo' => null,
        'receipt' => 'byte',
        'rPreimage' => 'byte',
        'rHash' => 'byte',
        'value' => 'int64',
        'settled' => 'boolean',
        'creationDate' => 'int64',
        'settleDate' => 'int64',
        'paymentRequest' => null,
        'descriptionHash' => 'byte',
        'expiry' => 'int64',
        'fallbackAddr' => null,
        'cltvExpiry' => 'uint64',
        'routeHints' => null,
        'private' => 'boolean',
        'addIndex' => 'uint64',
        'settleIndex' => 'uint64',
        'amtPaid' => 'int64',
        'amtPaidSat' => 'int64',
        'amtPaidMsat' => 'int64',
        'state' => null
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
        'memo' => 'memo',
        'receipt' => 'receipt',
        'rPreimage' => 'r_preimage',
        'rHash' => 'r_hash',
        'value' => 'value',
        'settled' => 'settled',
        'creationDate' => 'creation_date',
        'settleDate' => 'settle_date',
        'paymentRequest' => 'payment_request',
        'descriptionHash' => 'description_hash',
        'expiry' => 'expiry',
        'fallbackAddr' => 'fallback_addr',
        'cltvExpiry' => 'cltv_expiry',
        'routeHints' => 'route_hints',
        'private' => 'private',
        'addIndex' => 'add_index',
        'settleIndex' => 'settle_index',
        'amtPaid' => 'amt_paid',
        'amtPaidSat' => 'amt_paid_sat',
        'amtPaidMsat' => 'amt_paid_msat',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memo' => 'setMemo',
        'receipt' => 'setReceipt',
        'rPreimage' => 'setRPreimage',
        'rHash' => 'setRHash',
        'value' => 'setValue',
        'settled' => 'setSettled',
        'creationDate' => 'setCreationDate',
        'settleDate' => 'setSettleDate',
        'paymentRequest' => 'setPaymentRequest',
        'descriptionHash' => 'setDescriptionHash',
        'expiry' => 'setExpiry',
        'fallbackAddr' => 'setFallbackAddr',
        'cltvExpiry' => 'setCltvExpiry',
        'routeHints' => 'setRouteHints',
        'private' => 'setPrivate',
        'addIndex' => 'setAddIndex',
        'settleIndex' => 'setSettleIndex',
        'amtPaid' => 'setAmtPaid',
        'amtPaidSat' => 'setAmtPaidSat',
        'amtPaidMsat' => 'setAmtPaidMsat',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memo' => 'getMemo',
        'receipt' => 'getReceipt',
        'rPreimage' => 'getRPreimage',
        'rHash' => 'getRHash',
        'value' => 'getValue',
        'settled' => 'getSettled',
        'creationDate' => 'getCreationDate',
        'settleDate' => 'getSettleDate',
        'paymentRequest' => 'getPaymentRequest',
        'descriptionHash' => 'getDescriptionHash',
        'expiry' => 'getExpiry',
        'fallbackAddr' => 'getFallbackAddr',
        'cltvExpiry' => 'getCltvExpiry',
        'routeHints' => 'getRouteHints',
        'private' => 'getPrivate',
        'addIndex' => 'getAddIndex',
        'settleIndex' => 'getSettleIndex',
        'amtPaid' => 'getAmtPaid',
        'amtPaidSat' => 'getAmtPaidSat',
        'amtPaidMsat' => 'getAmtPaidMsat',
        'state' => 'getState'
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
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['receipt'] = isset($data['receipt']) ? $data['receipt'] : null;
        $this->container['rPreimage'] = isset($data['rPreimage']) ? $data['rPreimage'] : null;
        $this->container['rHash'] = isset($data['rHash']) ? $data['rHash'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['settled'] = isset($data['settled']) ? $data['settled'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['settleDate'] = isset($data['settleDate']) ? $data['settleDate'] : null;
        $this->container['paymentRequest'] = isset($data['paymentRequest']) ? $data['paymentRequest'] : null;
        $this->container['descriptionHash'] = isset($data['descriptionHash']) ? $data['descriptionHash'] : null;
        $this->container['expiry'] = isset($data['expiry']) ? $data['expiry'] : null;
        $this->container['fallbackAddr'] = isset($data['fallbackAddr']) ? $data['fallbackAddr'] : null;
        $this->container['cltvExpiry'] = isset($data['cltvExpiry']) ? $data['cltvExpiry'] : null;
        $this->container['routeHints'] = isset($data['routeHints']) ? $data['routeHints'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
        $this->container['addIndex'] = isset($data['addIndex']) ? $data['addIndex'] : null;
        $this->container['settleIndex'] = isset($data['settleIndex']) ? $data['settleIndex'] : null;
        $this->container['amtPaid'] = isset($data['amtPaid']) ? $data['amtPaid'] : null;
        $this->container['amtPaidSat'] = isset($data['amtPaidSat']) ? $data['amtPaidSat'] : null;
        $this->container['amtPaidMsat'] = isset($data['amtPaidMsat']) ? $data['amtPaidMsat'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['receipt']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['receipt'])) {
            $invalidProperties[] = "invalid value for 'receipt', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['rPreimage']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['rPreimage'])) {
            $invalidProperties[] = "invalid value for 'rPreimage', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['rHash']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['rHash'])) {
            $invalidProperties[] = "invalid value for 'rHash', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['descriptionHash']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['descriptionHash'])) {
            $invalidProperties[] = "invalid value for 'descriptionHash', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string $memo * An optional memo to attach along with the invoice. Used for record keeping purposes for the invoice's creator, and will also be set in the description field of the encoded payment request if the description_hash field is not being used.
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets receipt
     *
     * @return string
     */
    public function getReceipt()
    {
        return $this->container['receipt'];
    }

    /**
     * Sets receipt
     *
     * @param string $receipt * Deprecated. An optional cryptographic receipt of payment which is not implemented.
     *
     * @return $this
     */
    public function setReceipt($receipt)
    {

        if (!is_null($receipt) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $receipt))) {
            throw new \InvalidArgumentException("invalid value for $receipt when calling LnrpcInvoice., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['receipt'] = $receipt;

        return $this;
    }

    /**
     * Gets rPreimage
     *
     * @return string
     */
    public function getRPreimage()
    {
        return $this->container['rPreimage'];
    }

    /**
     * Sets rPreimage
     *
     * @param string $rPreimage rPreimage
     *
     * @return $this
     */
    public function setRPreimage($rPreimage)
    {

        if (!is_null($rPreimage) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $rPreimage))) {
            throw new \InvalidArgumentException("invalid value for $rPreimage when calling LnrpcInvoice., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['rPreimage'] = $rPreimage;

        return $this;
    }

    /**
     * Gets rHash
     *
     * @return string
     */
    public function getRHash()
    {
        return $this->container['rHash'];
    }

    /**
     * Sets rHash
     *
     * @param string $rHash rHash
     *
     * @return $this
     */
    public function setRHash($rHash)
    {

        if (!is_null($rHash) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $rHash))) {
            throw new \InvalidArgumentException("invalid value for $rHash when calling LnrpcInvoice., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['rHash'] = $rHash;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets settled
     *
     * @return bool
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     *
     * @param bool $settled settled
     *
     * @return $this
     */
    public function setSettled($settled)
    {
        $this->container['settled'] = $settled;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param string $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets settleDate
     *
     * @return string
     */
    public function getSettleDate()
    {
        return $this->container['settleDate'];
    }

    /**
     * Sets settleDate
     *
     * @param string $settleDate settleDate
     *
     * @return $this
     */
    public function setSettleDate($settleDate)
    {
        $this->container['settleDate'] = $settleDate;

        return $this;
    }

    /**
     * Gets paymentRequest
     *
     * @return string
     */
    public function getPaymentRequest()
    {
        return $this->container['paymentRequest'];
    }

    /**
     * Sets paymentRequest
     *
     * @param string $paymentRequest * A bare-bones invoice for a payment within the Lightning Network.  With the details of the invoice, the sender has all the data necessary to send a payment to the recipient.
     *
     * @return $this
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->container['paymentRequest'] = $paymentRequest;

        return $this;
    }

    /**
     * Gets descriptionHash
     *
     * @return string
     */
    public function getDescriptionHash()
    {
        return $this->container['descriptionHash'];
    }

    /**
     * Sets descriptionHash
     *
     * @param string $descriptionHash * Hash (SHA-256) of a description of the payment. Used if the description of payment (memo) is too long to naturally fit within the description field of an encoded payment request.
     *
     * @return $this
     */
    public function setDescriptionHash($descriptionHash)
    {

        if (!is_null($descriptionHash) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $descriptionHash))) {
            throw new \InvalidArgumentException("invalid value for $descriptionHash when calling LnrpcInvoice., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['descriptionHash'] = $descriptionHash;

        return $this;
    }

    /**
     * Gets expiry
     *
     * @return string
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param string $expiry / Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * @return $this
     */
    public function setExpiry($expiry)
    {
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets fallbackAddr
     *
     * @return string
     */
    public function getFallbackAddr()
    {
        return $this->container['fallbackAddr'];
    }

    /**
     * Sets fallbackAddr
     *
     * @param string $fallbackAddr / Fallback on-chain address.
     *
     * @return $this
     */
    public function setFallbackAddr($fallbackAddr)
    {
        $this->container['fallbackAddr'] = $fallbackAddr;

        return $this;
    }

    /**
     * Gets cltvExpiry
     *
     * @return string
     */
    public function getCltvExpiry()
    {
        return $this->container['cltvExpiry'];
    }

    /**
     * Sets cltvExpiry
     *
     * @param string $cltvExpiry / Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * @return $this
     */
    public function setCltvExpiry($cltvExpiry)
    {
        $this->container['cltvExpiry'] = $cltvExpiry;

        return $this;
    }

    /**
     * Gets routeHints
     *
     * @return \Lnd\Rest\Model\LnrpcRouteHint[]
     */
    public function getRouteHints()
    {
        return $this->container['routeHints'];
    }

    /**
     * Sets routeHints
     *
     * @param \Lnd\Rest\Model\LnrpcRouteHint[] $routeHints * Route hints that can each be individually used to assist in reaching the invoice's destination.
     *
     * @return $this
     */
    public function setRouteHints($routeHints)
    {
        $this->container['routeHints'] = $routeHints;

        return $this;
    }

    /**
     * Gets private
     *
     * @return bool
     */
    public function getPrivate()
    {
        return $this->container['private'];
    }

    /**
     * Sets private
     *
     * @param bool $private / Whether this invoice should include routing hints for private channels.
     *
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets addIndex
     *
     * @return string
     */
    public function getAddIndex()
    {
        return $this->container['addIndex'];
    }

    /**
     * Sets addIndex
     *
     * @param string $addIndex * The \"add\" index of this invoice. Each newly created invoice will increment this index making it monotonically increasing. Callers to the SubscribeInvoices call can use this to instantly get notified of all added invoices with an add_index greater than this one.
     *
     * @return $this
     */
    public function setAddIndex($addIndex)
    {
        $this->container['addIndex'] = $addIndex;

        return $this;
    }

    /**
     * Gets settleIndex
     *
     * @return string
     */
    public function getSettleIndex()
    {
        return $this->container['settleIndex'];
    }

    /**
     * Sets settleIndex
     *
     * @param string $settleIndex * The \"settle\" index of this invoice. Each newly settled invoice will increment this index making it monotonically increasing. Callers to the SubscribeInvoices call can use this to instantly get notified of all settled invoices with an settle_index greater than this one.
     *
     * @return $this
     */
    public function setSettleIndex($settleIndex)
    {
        $this->container['settleIndex'] = $settleIndex;

        return $this;
    }

    /**
     * Gets amtPaid
     *
     * @return string
     */
    public function getAmtPaid()
    {
        return $this->container['amtPaid'];
    }

    /**
     * Sets amtPaid
     *
     * @param string $amtPaid / Deprecated, use amt_paid_sat or amt_paid_msat.
     *
     * @return $this
     */
    public function setAmtPaid($amtPaid)
    {
        $this->container['amtPaid'] = $amtPaid;

        return $this;
    }

    /**
     * Gets amtPaidSat
     *
     * @return string
     */
    public function getAmtPaidSat()
    {
        return $this->container['amtPaidSat'];
    }

    /**
     * Sets amtPaidSat
     *
     * @param string $amtPaidSat * The amount that was accepted for this invoice, in satoshis. This will ONLY be set if this invoice has been settled. We provide this field as if the invoice was created with a zero value, then we need to record what amount was ultimately accepted. Additionally, it's possible that the sender paid MORE that was specified in the original invoice. So we'll record that here as well.
     *
     * @return $this
     */
    public function setAmtPaidSat($amtPaidSat)
    {
        $this->container['amtPaidSat'] = $amtPaidSat;

        return $this;
    }

    /**
     * Gets amtPaidMsat
     *
     * @return string
     */
    public function getAmtPaidMsat()
    {
        return $this->container['amtPaidMsat'];
    }

    /**
     * Sets amtPaidMsat
     *
     * @param string $amtPaidMsat * The amount that was accepted for this invoice, in millisatoshis. This will ONLY be set if this invoice has been settled. We provide this field as if the invoice was created with a zero value, then we need to record what amount was ultimately accepted. Additionally, it's possible that the sender paid MORE that was specified in the original invoice. So we'll record that here as well.
     *
     * @return $this
     */
    public function setAmtPaidMsat($amtPaidMsat)
    {
        $this->container['amtPaidMsat'] = $amtPaidMsat;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Lnd\Rest\Model\InvoiceInvoiceState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Lnd\Rest\Model\InvoiceInvoiceState $state * The state the invoice is in.
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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


