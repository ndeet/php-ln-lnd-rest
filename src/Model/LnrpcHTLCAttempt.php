<?php
/**
 * LnrpcHTLCAttempt
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
 * LnrpcHTLCAttempt Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcHTLCAttempt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcHTLCAttempt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attemptId' => 'string',
        'status' => '\Lnd\Rest\Model\HTLCAttemptHTLCStatus',
        'route' => '\Lnd\Rest\Model\LnrpcRoute',
        'attemptTimeNs' => 'string',
        'resolveTimeNs' => 'string',
        'failure' => '\Lnd\Rest\Model\LnrpcFailure',
        'preimage' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attemptId' => 'uint64',
        'status' => null,
        'route' => null,
        'attemptTimeNs' => 'int64',
        'resolveTimeNs' => 'int64',
        'failure' => null,
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
        'attemptId' => 'attempt_id',
        'status' => 'status',
        'route' => 'route',
        'attemptTimeNs' => 'attempt_time_ns',
        'resolveTimeNs' => 'resolve_time_ns',
        'failure' => 'failure',
        'preimage' => 'preimage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attemptId' => 'setAttemptId',
        'status' => 'setStatus',
        'route' => 'setRoute',
        'attemptTimeNs' => 'setAttemptTimeNs',
        'resolveTimeNs' => 'setResolveTimeNs',
        'failure' => 'setFailure',
        'preimage' => 'setPreimage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attemptId' => 'getAttemptId',
        'status' => 'getStatus',
        'route' => 'getRoute',
        'attemptTimeNs' => 'getAttemptTimeNs',
        'resolveTimeNs' => 'getResolveTimeNs',
        'failure' => 'getFailure',
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
        $this->container['attemptId'] = isset($data['attemptId']) ? $data['attemptId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['attemptTimeNs'] = isset($data['attemptTimeNs']) ? $data['attemptTimeNs'] : null;
        $this->container['resolveTimeNs'] = isset($data['resolveTimeNs']) ? $data['resolveTimeNs'] : null;
        $this->container['failure'] = isset($data['failure']) ? $data['failure'] : null;
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
     * Gets attemptId
     *
     * @return string
     */
    public function getAttemptId()
    {
        return $this->container['attemptId'];
    }

    /**
     * Sets attemptId
     *
     * @param string $attemptId The unique ID that is used for this attempt.
     *
     * @return $this
     */
    public function setAttemptId($attemptId)
    {
        $this->container['attemptId'] = $attemptId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Lnd\Rest\Model\HTLCAttemptHTLCStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Lnd\Rest\Model\HTLCAttemptHTLCStatus $status The status of the HTLC.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets route
     *
     * @return \Lnd\Rest\Model\LnrpcRoute
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param \Lnd\Rest\Model\LnrpcRoute $route The route taken by this HTLC.
     *
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets attemptTimeNs
     *
     * @return string
     */
    public function getAttemptTimeNs()
    {
        return $this->container['attemptTimeNs'];
    }

    /**
     * Sets attemptTimeNs
     *
     * @param string $attemptTimeNs The time in UNIX nanoseconds at which this HTLC was sent.
     *
     * @return $this
     */
    public function setAttemptTimeNs($attemptTimeNs)
    {
        $this->container['attemptTimeNs'] = $attemptTimeNs;

        return $this;
    }

    /**
     * Gets resolveTimeNs
     *
     * @return string
     */
    public function getResolveTimeNs()
    {
        return $this->container['resolveTimeNs'];
    }

    /**
     * Sets resolveTimeNs
     *
     * @param string $resolveTimeNs The time in UNIX nanoseconds at which this HTLC was settled or failed. This value will not be set if the HTLC is still IN_FLIGHT.
     *
     * @return $this
     */
    public function setResolveTimeNs($resolveTimeNs)
    {
        $this->container['resolveTimeNs'] = $resolveTimeNs;

        return $this;
    }

    /**
     * Gets failure
     *
     * @return \Lnd\Rest\Model\LnrpcFailure
     */
    public function getFailure()
    {
        return $this->container['failure'];
    }

    /**
     * Sets failure
     *
     * @param \Lnd\Rest\Model\LnrpcFailure $failure Detailed htlc failure info.
     *
     * @return $this
     */
    public function setFailure($failure)
    {
        $this->container['failure'] = $failure;

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
     * @param string $preimage The preimage that was used to settle the HTLC.
     *
     * @return $this
     */
    public function setPreimage($preimage)
    {

        if (!is_null($preimage) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $preimage))) {
            throw new \InvalidArgumentException("invalid value for $preimage when calling LnrpcHTLCAttempt., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
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


