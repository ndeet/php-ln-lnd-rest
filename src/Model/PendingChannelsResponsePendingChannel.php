<?php
/**
 * PendingChannelsResponsePendingChannel
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
 * PendingChannelsResponsePendingChannel Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PendingChannelsResponsePendingChannel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PendingChannelsResponsePendingChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'remoteNodePub' => 'string',
        'channelPoint' => 'string',
        'capacity' => 'string',
        'localBalance' => 'string',
        'remoteBalance' => 'string',
        'localChanReserveSat' => 'string',
        'remoteChanReserveSat' => 'string',
        'initiator' => '\Lnd\Rest\Model\LnrpcInitiator',
        'commitmentType' => '\Lnd\Rest\Model\LnrpcCommitmentType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'remoteNodePub' => null,
        'channelPoint' => null,
        'capacity' => 'int64',
        'localBalance' => 'int64',
        'remoteBalance' => 'int64',
        'localChanReserveSat' => 'int64',
        'remoteChanReserveSat' => 'int64',
        'initiator' => null,
        'commitmentType' => null
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
        'remoteNodePub' => 'remote_node_pub',
        'channelPoint' => 'channel_point',
        'capacity' => 'capacity',
        'localBalance' => 'local_balance',
        'remoteBalance' => 'remote_balance',
        'localChanReserveSat' => 'local_chan_reserve_sat',
        'remoteChanReserveSat' => 'remote_chan_reserve_sat',
        'initiator' => 'initiator',
        'commitmentType' => 'commitment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'remoteNodePub' => 'setRemoteNodePub',
        'channelPoint' => 'setChannelPoint',
        'capacity' => 'setCapacity',
        'localBalance' => 'setLocalBalance',
        'remoteBalance' => 'setRemoteBalance',
        'localChanReserveSat' => 'setLocalChanReserveSat',
        'remoteChanReserveSat' => 'setRemoteChanReserveSat',
        'initiator' => 'setInitiator',
        'commitmentType' => 'setCommitmentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'remoteNodePub' => 'getRemoteNodePub',
        'channelPoint' => 'getChannelPoint',
        'capacity' => 'getCapacity',
        'localBalance' => 'getLocalBalance',
        'remoteBalance' => 'getRemoteBalance',
        'localChanReserveSat' => 'getLocalChanReserveSat',
        'remoteChanReserveSat' => 'getRemoteChanReserveSat',
        'initiator' => 'getInitiator',
        'commitmentType' => 'getCommitmentType'
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
        $this->container['remoteNodePub'] = isset($data['remoteNodePub']) ? $data['remoteNodePub'] : null;
        $this->container['channelPoint'] = isset($data['channelPoint']) ? $data['channelPoint'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['localBalance'] = isset($data['localBalance']) ? $data['localBalance'] : null;
        $this->container['remoteBalance'] = isset($data['remoteBalance']) ? $data['remoteBalance'] : null;
        $this->container['localChanReserveSat'] = isset($data['localChanReserveSat']) ? $data['localChanReserveSat'] : null;
        $this->container['remoteChanReserveSat'] = isset($data['remoteChanReserveSat']) ? $data['remoteChanReserveSat'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['commitmentType'] = isset($data['commitmentType']) ? $data['commitmentType'] : null;
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
     * Gets remoteNodePub
     *
     * @return string
     */
    public function getRemoteNodePub()
    {
        return $this->container['remoteNodePub'];
    }

    /**
     * Sets remoteNodePub
     *
     * @param string $remoteNodePub remoteNodePub
     *
     * @return $this
     */
    public function setRemoteNodePub($remoteNodePub)
    {
        $this->container['remoteNodePub'] = $remoteNodePub;

        return $this;
    }

    /**
     * Gets channelPoint
     *
     * @return string
     */
    public function getChannelPoint()
    {
        return $this->container['channelPoint'];
    }

    /**
     * Sets channelPoint
     *
     * @param string $channelPoint channelPoint
     *
     * @return $this
     */
    public function setChannelPoint($channelPoint)
    {
        $this->container['channelPoint'] = $channelPoint;

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
     * Gets localBalance
     *
     * @return string
     */
    public function getLocalBalance()
    {
        return $this->container['localBalance'];
    }

    /**
     * Sets localBalance
     *
     * @param string $localBalance localBalance
     *
     * @return $this
     */
    public function setLocalBalance($localBalance)
    {
        $this->container['localBalance'] = $localBalance;

        return $this;
    }

    /**
     * Gets remoteBalance
     *
     * @return string
     */
    public function getRemoteBalance()
    {
        return $this->container['remoteBalance'];
    }

    /**
     * Sets remoteBalance
     *
     * @param string $remoteBalance remoteBalance
     *
     * @return $this
     */
    public function setRemoteBalance($remoteBalance)
    {
        $this->container['remoteBalance'] = $remoteBalance;

        return $this;
    }

    /**
     * Gets localChanReserveSat
     *
     * @return string
     */
    public function getLocalChanReserveSat()
    {
        return $this->container['localChanReserveSat'];
    }

    /**
     * Sets localChanReserveSat
     *
     * @param string $localChanReserveSat The minimum satoshis this node is required to reserve in its balance.
     *
     * @return $this
     */
    public function setLocalChanReserveSat($localChanReserveSat)
    {
        $this->container['localChanReserveSat'] = $localChanReserveSat;

        return $this;
    }

    /**
     * Gets remoteChanReserveSat
     *
     * @return string
     */
    public function getRemoteChanReserveSat()
    {
        return $this->container['remoteChanReserveSat'];
    }

    /**
     * Sets remoteChanReserveSat
     *
     * @param string $remoteChanReserveSat The minimum satoshis the other node is required to reserve in its balance.
     *
     * @return $this
     */
    public function setRemoteChanReserveSat($remoteChanReserveSat)
    {
        $this->container['remoteChanReserveSat'] = $remoteChanReserveSat;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return \Lnd\Rest\Model\LnrpcInitiator
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param \Lnd\Rest\Model\LnrpcInitiator $initiator The party that initiated opening the channel.
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets commitmentType
     *
     * @return \Lnd\Rest\Model\LnrpcCommitmentType
     */
    public function getCommitmentType()
    {
        return $this->container['commitmentType'];
    }

    /**
     * Sets commitmentType
     *
     * @param \Lnd\Rest\Model\LnrpcCommitmentType $commitmentType The commitment type used by this channel.
     *
     * @return $this
     */
    public function setCommitmentType($commitmentType)
    {
        $this->container['commitmentType'] = $commitmentType;

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


