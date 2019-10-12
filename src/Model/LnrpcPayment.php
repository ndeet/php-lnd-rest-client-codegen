<?php
/**
 * LnrpcPayment
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
 * LnrpcPayment Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'paymentHash' => 'string',
        'value' => 'string',
        'creationDate' => 'string',
        'path' => 'string[]',
        'fee' => 'string',
        'paymentPreimage' => 'string',
        'valueSat' => 'string',
        'valueMsat' => 'string',
        'paymentRequest' => 'string',
        'status' => '\Lnd\Rest\Model\PaymentPaymentStatus',
        'feeSat' => 'string',
        'feeMsat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'paymentHash' => null,
        'value' => 'int64',
        'creationDate' => 'int64',
        'path' => null,
        'fee' => 'int64',
        'paymentPreimage' => null,
        'valueSat' => 'int64',
        'valueMsat' => 'int64',
        'paymentRequest' => null,
        'status' => null,
        'feeSat' => 'int64',
        'feeMsat' => 'int64'
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
        'paymentHash' => 'payment_hash',
        'value' => 'value',
        'creationDate' => 'creation_date',
        'path' => 'path',
        'fee' => 'fee',
        'paymentPreimage' => 'payment_preimage',
        'valueSat' => 'value_sat',
        'valueMsat' => 'value_msat',
        'paymentRequest' => 'payment_request',
        'status' => 'status',
        'feeSat' => 'fee_sat',
        'feeMsat' => 'fee_msat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'paymentHash' => 'setPaymentHash',
        'value' => 'setValue',
        'creationDate' => 'setCreationDate',
        'path' => 'setPath',
        'fee' => 'setFee',
        'paymentPreimage' => 'setPaymentPreimage',
        'valueSat' => 'setValueSat',
        'valueMsat' => 'setValueMsat',
        'paymentRequest' => 'setPaymentRequest',
        'status' => 'setStatus',
        'feeSat' => 'setFeeSat',
        'feeMsat' => 'setFeeMsat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'paymentHash' => 'getPaymentHash',
        'value' => 'getValue',
        'creationDate' => 'getCreationDate',
        'path' => 'getPath',
        'fee' => 'getFee',
        'paymentPreimage' => 'getPaymentPreimage',
        'valueSat' => 'getValueSat',
        'valueMsat' => 'getValueMsat',
        'paymentRequest' => 'getPaymentRequest',
        'status' => 'getStatus',
        'feeSat' => 'getFeeSat',
        'feeMsat' => 'getFeeMsat'
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
        $this->container['paymentHash'] = isset($data['paymentHash']) ? $data['paymentHash'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['paymentPreimage'] = isset($data['paymentPreimage']) ? $data['paymentPreimage'] : null;
        $this->container['valueSat'] = isset($data['valueSat']) ? $data['valueSat'] : null;
        $this->container['valueMsat'] = isset($data['valueMsat']) ? $data['valueMsat'] : null;
        $this->container['paymentRequest'] = isset($data['paymentRequest']) ? $data['paymentRequest'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['feeSat'] = isset($data['feeSat']) ? $data['feeSat'] : null;
        $this->container['feeMsat'] = isset($data['feeMsat']) ? $data['feeMsat'] : null;
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
     * Gets paymentHash
     *
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->container['paymentHash'];
    }

    /**
     * Sets paymentHash
     *
     * @param string $paymentHash paymentHash
     *
     * @return $this
     */
    public function setPaymentHash($paymentHash)
    {
        $this->container['paymentHash'] = $paymentHash;

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
     * @param string $value / Deprecated, use value_sat or value_msat.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * Gets path
     *
     * @return string[]
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string[] $path path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string $fee / Deprecated, use fee_sat or fee_msat.
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets paymentPreimage
     *
     * @return string
     */
    public function getPaymentPreimage()
    {
        return $this->container['paymentPreimage'];
    }

    /**
     * Sets paymentPreimage
     *
     * @param string $paymentPreimage paymentPreimage
     *
     * @return $this
     */
    public function setPaymentPreimage($paymentPreimage)
    {
        $this->container['paymentPreimage'] = $paymentPreimage;

        return $this;
    }

    /**
     * Gets valueSat
     *
     * @return string
     */
    public function getValueSat()
    {
        return $this->container['valueSat'];
    }

    /**
     * Sets valueSat
     *
     * @param string $valueSat valueSat
     *
     * @return $this
     */
    public function setValueSat($valueSat)
    {
        $this->container['valueSat'] = $valueSat;

        return $this;
    }

    /**
     * Gets valueMsat
     *
     * @return string
     */
    public function getValueMsat()
    {
        return $this->container['valueMsat'];
    }

    /**
     * Sets valueMsat
     *
     * @param string $valueMsat valueMsat
     *
     * @return $this
     */
    public function setValueMsat($valueMsat)
    {
        $this->container['valueMsat'] = $valueMsat;

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
     * @param string $paymentRequest / The optional payment request being fulfilled.
     *
     * @return $this
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->container['paymentRequest'] = $paymentRequest;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Lnd\Rest\Model\PaymentPaymentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Lnd\Rest\Model\PaymentPaymentStatus $status The status of the payment.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets feeSat
     *
     * @return string
     */
    public function getFeeSat()
    {
        return $this->container['feeSat'];
    }

    /**
     * Sets feeSat
     *
     * @param string $feeSat feeSat
     *
     * @return $this
     */
    public function setFeeSat($feeSat)
    {
        $this->container['feeSat'] = $feeSat;

        return $this;
    }

    /**
     * Gets feeMsat
     *
     * @return string
     */
    public function getFeeMsat()
    {
        return $this->container['feeMsat'];
    }

    /**
     * Sets feeMsat
     *
     * @param string $feeMsat feeMsat
     *
     * @return $this
     */
    public function setFeeMsat($feeMsat)
    {
        $this->container['feeMsat'] = $feeMsat;

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


