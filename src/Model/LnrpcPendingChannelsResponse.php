<?php
/**
 * LnrpcPendingChannelsResponse
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
 * LnrpcPendingChannelsResponse Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcPendingChannelsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcPendingChannelsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalLimboBalance' => 'string',
        'pendingOpenChannels' => '\Lnd\Rest\Model\PendingChannelsResponsePendingOpenChannel[]',
        'pendingClosingChannels' => '\Lnd\Rest\Model\PendingChannelsResponseClosedChannel[]',
        'pendingForceClosingChannels' => '\Lnd\Rest\Model\PendingChannelsResponseForceClosedChannel[]',
        'waitingCloseChannels' => '\Lnd\Rest\Model\PendingChannelsResponseWaitingCloseChannel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalLimboBalance' => 'int64',
        'pendingOpenChannels' => null,
        'pendingClosingChannels' => null,
        'pendingForceClosingChannels' => null,
        'waitingCloseChannels' => null
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
        'totalLimboBalance' => 'total_limbo_balance',
        'pendingOpenChannels' => 'pending_open_channels',
        'pendingClosingChannels' => 'pending_closing_channels',
        'pendingForceClosingChannels' => 'pending_force_closing_channels',
        'waitingCloseChannels' => 'waiting_close_channels'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalLimboBalance' => 'setTotalLimboBalance',
        'pendingOpenChannels' => 'setPendingOpenChannels',
        'pendingClosingChannels' => 'setPendingClosingChannels',
        'pendingForceClosingChannels' => 'setPendingForceClosingChannels',
        'waitingCloseChannels' => 'setWaitingCloseChannels'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalLimboBalance' => 'getTotalLimboBalance',
        'pendingOpenChannels' => 'getPendingOpenChannels',
        'pendingClosingChannels' => 'getPendingClosingChannels',
        'pendingForceClosingChannels' => 'getPendingForceClosingChannels',
        'waitingCloseChannels' => 'getWaitingCloseChannels'
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
        $this->container['totalLimboBalance'] = isset($data['totalLimboBalance']) ? $data['totalLimboBalance'] : null;
        $this->container['pendingOpenChannels'] = isset($data['pendingOpenChannels']) ? $data['pendingOpenChannels'] : null;
        $this->container['pendingClosingChannels'] = isset($data['pendingClosingChannels']) ? $data['pendingClosingChannels'] : null;
        $this->container['pendingForceClosingChannels'] = isset($data['pendingForceClosingChannels']) ? $data['pendingForceClosingChannels'] : null;
        $this->container['waitingCloseChannels'] = isset($data['waitingCloseChannels']) ? $data['waitingCloseChannels'] : null;
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
     * Gets totalLimboBalance
     *
     * @return string
     */
    public function getTotalLimboBalance()
    {
        return $this->container['totalLimboBalance'];
    }

    /**
     * Sets totalLimboBalance
     *
     * @param string $totalLimboBalance totalLimboBalance
     *
     * @return $this
     */
    public function setTotalLimboBalance($totalLimboBalance)
    {
        $this->container['totalLimboBalance'] = $totalLimboBalance;

        return $this;
    }

    /**
     * Gets pendingOpenChannels
     *
     * @return \Lnd\Rest\Model\PendingChannelsResponsePendingOpenChannel[]
     */
    public function getPendingOpenChannels()
    {
        return $this->container['pendingOpenChannels'];
    }

    /**
     * Sets pendingOpenChannels
     *
     * @param \Lnd\Rest\Model\PendingChannelsResponsePendingOpenChannel[] $pendingOpenChannels pendingOpenChannels
     *
     * @return $this
     */
    public function setPendingOpenChannels($pendingOpenChannels)
    {
        $this->container['pendingOpenChannels'] = $pendingOpenChannels;

        return $this;
    }

    /**
     * Gets pendingClosingChannels
     *
     * @return \Lnd\Rest\Model\PendingChannelsResponseClosedChannel[]
     */
    public function getPendingClosingChannels()
    {
        return $this->container['pendingClosingChannels'];
    }

    /**
     * Sets pendingClosingChannels
     *
     * @param \Lnd\Rest\Model\PendingChannelsResponseClosedChannel[] $pendingClosingChannels Deprecated: Channels pending closing previously contained cooperatively closed channels with a single confirmation. These channels are now considered closed from the time we see them on chain.
     *
     * @return $this
     */
    public function setPendingClosingChannels($pendingClosingChannels)
    {
        $this->container['pendingClosingChannels'] = $pendingClosingChannels;

        return $this;
    }

    /**
     * Gets pendingForceClosingChannels
     *
     * @return \Lnd\Rest\Model\PendingChannelsResponseForceClosedChannel[]
     */
    public function getPendingForceClosingChannels()
    {
        return $this->container['pendingForceClosingChannels'];
    }

    /**
     * Sets pendingForceClosingChannels
     *
     * @param \Lnd\Rest\Model\PendingChannelsResponseForceClosedChannel[] $pendingForceClosingChannels pendingForceClosingChannels
     *
     * @return $this
     */
    public function setPendingForceClosingChannels($pendingForceClosingChannels)
    {
        $this->container['pendingForceClosingChannels'] = $pendingForceClosingChannels;

        return $this;
    }

    /**
     * Gets waitingCloseChannels
     *
     * @return \Lnd\Rest\Model\PendingChannelsResponseWaitingCloseChannel[]
     */
    public function getWaitingCloseChannels()
    {
        return $this->container['waitingCloseChannels'];
    }

    /**
     * Sets waitingCloseChannels
     *
     * @param \Lnd\Rest\Model\PendingChannelsResponseWaitingCloseChannel[] $waitingCloseChannels waitingCloseChannels
     *
     * @return $this
     */
    public function setWaitingCloseChannels($waitingCloseChannels)
    {
        $this->container['waitingCloseChannels'] = $waitingCloseChannels;

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


