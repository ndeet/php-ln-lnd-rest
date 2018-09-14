<?php
/**
 * LnrpcChannelCloseSummary
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
 * Swagger Codegen version: 2.3.1
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
 * LnrpcChannelCloseSummary Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcChannelCloseSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcChannelCloseSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channelPoint' => 'string',
        'chanId' => 'string',
        'chainHash' => 'string',
        'closingTxHash' => 'string',
        'remotePubkey' => 'string',
        'capacity' => 'string',
        'closeHeight' => 'int',
        'settledBalance' => 'string',
        'timeLockedBalance' => 'string',
        'closeType' => '\Lnd\Rest\Model\ChannelCloseSummaryClosureType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'channelPoint' => null,
        'chanId' => 'uint64',
        'chainHash' => null,
        'closingTxHash' => null,
        'remotePubkey' => null,
        'capacity' => 'int64',
        'closeHeight' => 'int64',
        'settledBalance' => 'int64',
        'timeLockedBalance' => 'int64',
        'closeType' => null
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
        'channelPoint' => 'channel_point',
        'chanId' => 'chan_id',
        'chainHash' => 'chain_hash',
        'closingTxHash' => 'closing_tx_hash',
        'remotePubkey' => 'remote_pubkey',
        'capacity' => 'capacity',
        'closeHeight' => 'close_height',
        'settledBalance' => 'settled_balance',
        'timeLockedBalance' => 'time_locked_balance',
        'closeType' => 'close_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelPoint' => 'setChannelPoint',
        'chanId' => 'setChanId',
        'chainHash' => 'setChainHash',
        'closingTxHash' => 'setClosingTxHash',
        'remotePubkey' => 'setRemotePubkey',
        'capacity' => 'setCapacity',
        'closeHeight' => 'setCloseHeight',
        'settledBalance' => 'setSettledBalance',
        'timeLockedBalance' => 'setTimeLockedBalance',
        'closeType' => 'setCloseType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelPoint' => 'getChannelPoint',
        'chanId' => 'getChanId',
        'chainHash' => 'getChainHash',
        'closingTxHash' => 'getClosingTxHash',
        'remotePubkey' => 'getRemotePubkey',
        'capacity' => 'getCapacity',
        'closeHeight' => 'getCloseHeight',
        'settledBalance' => 'getSettledBalance',
        'timeLockedBalance' => 'getTimeLockedBalance',
        'closeType' => 'getCloseType'
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
        $this->container['channelPoint'] = isset($data['channelPoint']) ? $data['channelPoint'] : null;
        $this->container['chanId'] = isset($data['chanId']) ? $data['chanId'] : null;
        $this->container['chainHash'] = isset($data['chainHash']) ? $data['chainHash'] : null;
        $this->container['closingTxHash'] = isset($data['closingTxHash']) ? $data['closingTxHash'] : null;
        $this->container['remotePubkey'] = isset($data['remotePubkey']) ? $data['remotePubkey'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['closeHeight'] = isset($data['closeHeight']) ? $data['closeHeight'] : null;
        $this->container['settledBalance'] = isset($data['settledBalance']) ? $data['settledBalance'] : null;
        $this->container['timeLockedBalance'] = isset($data['timeLockedBalance']) ? $data['timeLockedBalance'] : null;
        $this->container['closeType'] = isset($data['closeType']) ? $data['closeType'] : null;
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
     * @param string $channelPoint / The outpoint (txid:index) of the funding transaction.
     *
     * @return $this
     */
    public function setChannelPoint($channelPoint)
    {
        $this->container['channelPoint'] = $channelPoint;

        return $this;
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
     * @param string $chanId /  The unique channel ID for the channel.
     *
     * @return $this
     */
    public function setChanId($chanId)
    {
        $this->container['chanId'] = $chanId;

        return $this;
    }

    /**
     * Gets chainHash
     *
     * @return string
     */
    public function getChainHash()
    {
        return $this->container['chainHash'];
    }

    /**
     * Sets chainHash
     *
     * @param string $chainHash / The hash of the genesis block that this channel resides within.
     *
     * @return $this
     */
    public function setChainHash($chainHash)
    {
        $this->container['chainHash'] = $chainHash;

        return $this;
    }

    /**
     * Gets closingTxHash
     *
     * @return string
     */
    public function getClosingTxHash()
    {
        return $this->container['closingTxHash'];
    }

    /**
     * Sets closingTxHash
     *
     * @param string $closingTxHash / The txid of the transaction which ultimately closed this channel.
     *
     * @return $this
     */
    public function setClosingTxHash($closingTxHash)
    {
        $this->container['closingTxHash'] = $closingTxHash;

        return $this;
    }

    /**
     * Gets remotePubkey
     *
     * @return string
     */
    public function getRemotePubkey()
    {
        return $this->container['remotePubkey'];
    }

    /**
     * Sets remotePubkey
     *
     * @param string $remotePubkey / Public key of the remote peer that we formerly had a channel with.
     *
     * @return $this
     */
    public function setRemotePubkey($remotePubkey)
    {
        $this->container['remotePubkey'] = $remotePubkey;

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
     * @param string $capacity / Total capacity of the channel.
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets closeHeight
     *
     * @return int
     */
    public function getCloseHeight()
    {
        return $this->container['closeHeight'];
    }

    /**
     * Sets closeHeight
     *
     * @param int $closeHeight / Height at which the funding transaction was spent.
     *
     * @return $this
     */
    public function setCloseHeight($closeHeight)
    {
        $this->container['closeHeight'] = $closeHeight;

        return $this;
    }

    /**
     * Gets settledBalance
     *
     * @return string
     */
    public function getSettledBalance()
    {
        return $this->container['settledBalance'];
    }

    /**
     * Sets settledBalance
     *
     * @param string $settledBalance settledBalance
     *
     * @return $this
     */
    public function setSettledBalance($settledBalance)
    {
        $this->container['settledBalance'] = $settledBalance;

        return $this;
    }

    /**
     * Gets timeLockedBalance
     *
     * @return string
     */
    public function getTimeLockedBalance()
    {
        return $this->container['timeLockedBalance'];
    }

    /**
     * Sets timeLockedBalance
     *
     * @param string $timeLockedBalance timeLockedBalance
     *
     * @return $this
     */
    public function setTimeLockedBalance($timeLockedBalance)
    {
        $this->container['timeLockedBalance'] = $timeLockedBalance;

        return $this;
    }

    /**
     * Gets closeType
     *
     * @return \Lnd\Rest\Model\ChannelCloseSummaryClosureType
     */
    public function getCloseType()
    {
        return $this->container['closeType'];
    }

    /**
     * Sets closeType
     *
     * @param \Lnd\Rest\Model\ChannelCloseSummaryClosureType $closeType / Details on how the channel was closed.
     *
     * @return $this
     */
    public function setCloseType($closeType)
    {
        $this->container['closeType'] = $closeType;

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

