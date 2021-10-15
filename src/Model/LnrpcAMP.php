<?php
/**
 * LnrpcAMP
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
 * LnrpcAMP Class Doc Comment
 *
 * @category Class
 * @description Details specific to AMP HTLCs.
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcAMP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcAMP';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rootShare' => 'string',
        'setId' => 'string',
        'childIndex' => 'int',
        'hash' => 'string',
        'preimage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rootShare' => 'byte',
        'setId' => 'byte',
        'childIndex' => 'int64',
        'hash' => 'byte',
        'preimage' => 'byte'
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
        'rootShare' => 'root_share',
        'setId' => 'set_id',
        'childIndex' => 'child_index',
        'hash' => 'hash',
        'preimage' => 'preimage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rootShare' => 'setRootShare',
        'setId' => 'setSetId',
        'childIndex' => 'setChildIndex',
        'hash' => 'setHash',
        'preimage' => 'setPreimage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rootShare' => 'getRootShare',
        'setId' => 'getSetId',
        'childIndex' => 'getChildIndex',
        'hash' => 'getHash',
        'preimage' => 'getPreimage'
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
        $this->container['rootShare'] = isset($data['rootShare']) ? $data['rootShare'] : null;
        $this->container['setId'] = isset($data['setId']) ? $data['setId'] : null;
        $this->container['childIndex'] = isset($data['childIndex']) ? $data['childIndex'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['preimage'] = isset($data['preimage']) ? $data['preimage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['rootShare']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['rootShare'])) {
            $invalidProperties[] = "invalid value for 'rootShare', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['setId']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['setId'])) {
            $invalidProperties[] = "invalid value for 'setId', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['hash']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['hash'])) {
            $invalidProperties[] = "invalid value for 'hash', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['preimage']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['preimage'])) {
            $invalidProperties[] = "invalid value for 'preimage', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets rootShare
     *
     * @return string
     */
    public function getRootShare()
    {
        return $this->container['rootShare'];
    }

    /**
     * Sets rootShare
     *
     * @param string $rootShare An n-of-n secret share of the root seed from which child payment hashes and preimages are derived.
     *
     * @return $this
     */
    public function setRootShare($rootShare)
    {

        if (!is_null($rootShare) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $rootShare))) {
            throw new \InvalidArgumentException("invalid value for $rootShare when calling LnrpcAMP., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['rootShare'] = $rootShare;

        return $this;
    }

    /**
     * Gets setId
     *
     * @return string
     */
    public function getSetId()
    {
        return $this->container['setId'];
    }

    /**
     * Sets setId
     *
     * @param string $setId An identifier for the HTLC set that this HTLC belongs to.
     *
     * @return $this
     */
    public function setSetId($setId)
    {

        if (!is_null($setId) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $setId))) {
            throw new \InvalidArgumentException("invalid value for $setId when calling LnrpcAMP., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['setId'] = $setId;

        return $this;
    }

    /**
     * Gets childIndex
     *
     * @return int
     */
    public function getChildIndex()
    {
        return $this->container['childIndex'];
    }

    /**
     * Sets childIndex
     *
     * @param int $childIndex A nonce used to randomize the child preimage and child hash from a given root_share.
     *
     * @return $this
     */
    public function setChildIndex($childIndex)
    {
        $this->container['childIndex'] = $childIndex;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string $hash The payment hash of the AMP HTLC.
     *
     * @return $this
     */
    public function setHash($hash)
    {

        if (!is_null($hash) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $hash))) {
            throw new \InvalidArgumentException("invalid value for $hash when calling LnrpcAMP., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets preimage
     *
     * @return string
     */
    public function getPreimage()
    {
        return $this->container['preimage'];
    }

    /**
     * Sets preimage
     *
     * @param string $preimage The preimage used to settle this AMP htlc. This field will only be populated if the invoice is in InvoiceState_ACCEPTED or InvoiceState_SETTLED.
     *
     * @return $this
     */
    public function setPreimage($preimage)
    {

        if (!is_null($preimage) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $preimage))) {
            throw new \InvalidArgumentException("invalid value for $preimage when calling LnrpcAMP., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['preimage'] = $preimage;

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

