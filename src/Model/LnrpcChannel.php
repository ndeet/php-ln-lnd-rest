<?php
/**
 * LnrpcChannel
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
 * LnrpcChannel Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcChannel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'remotePubkey' => 'string',
        'channelPoint' => 'string',
        'chanId' => 'string',
        'capacity' => 'string',
        'localBalance' => 'string',
        'remoteBalance' => 'string',
        'commitFee' => 'string',
        'commitWeight' => 'string',
        'feePerKw' => 'string',
        'unsettledBalance' => 'string',
        'totalSatoshisSent' => 'string',
        'totalSatoshisReceived' => 'string',
        'numUpdates' => 'string',
        'pendingHtlcs' => '\Lnd\Rest\Model\LnrpcHTLC[]',
        'csvDelay' => 'int',
        'private' => 'bool',
        'initiator' => 'bool',
        'chanStatusFlags' => 'string',
        'localChanReserveSat' => 'string',
        'remoteChanReserveSat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => 'boolean',
        'remotePubkey' => null,
        'channelPoint' => null,
        'chanId' => 'uint64',
        'capacity' => 'int64',
        'localBalance' => 'int64',
        'remoteBalance' => 'int64',
        'commitFee' => 'int64',
        'commitWeight' => 'int64',
        'feePerKw' => 'int64',
        'unsettledBalance' => 'int64',
        'totalSatoshisSent' => 'int64',
        'totalSatoshisReceived' => 'int64',
        'numUpdates' => 'uint64',
        'pendingHtlcs' => null,
        'csvDelay' => 'int64',
        'private' => 'boolean',
        'initiator' => 'boolean',
        'chanStatusFlags' => null,
        'localChanReserveSat' => 'int64',
        'remoteChanReserveSat' => 'int64'
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
        'active' => 'active',
        'remotePubkey' => 'remote_pubkey',
        'channelPoint' => 'channel_point',
        'chanId' => 'chan_id',
        'capacity' => 'capacity',
        'localBalance' => 'local_balance',
        'remoteBalance' => 'remote_balance',
        'commitFee' => 'commit_fee',
        'commitWeight' => 'commit_weight',
        'feePerKw' => 'fee_per_kw',
        'unsettledBalance' => 'unsettled_balance',
        'totalSatoshisSent' => 'total_satoshis_sent',
        'totalSatoshisReceived' => 'total_satoshis_received',
        'numUpdates' => 'num_updates',
        'pendingHtlcs' => 'pending_htlcs',
        'csvDelay' => 'csv_delay',
        'private' => 'private',
        'initiator' => 'initiator',
        'chanStatusFlags' => 'chan_status_flags',
        'localChanReserveSat' => 'local_chan_reserve_sat',
        'remoteChanReserveSat' => 'remote_chan_reserve_sat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'remotePubkey' => 'setRemotePubkey',
        'channelPoint' => 'setChannelPoint',
        'chanId' => 'setChanId',
        'capacity' => 'setCapacity',
        'localBalance' => 'setLocalBalance',
        'remoteBalance' => 'setRemoteBalance',
        'commitFee' => 'setCommitFee',
        'commitWeight' => 'setCommitWeight',
        'feePerKw' => 'setFeePerKw',
        'unsettledBalance' => 'setUnsettledBalance',
        'totalSatoshisSent' => 'setTotalSatoshisSent',
        'totalSatoshisReceived' => 'setTotalSatoshisReceived',
        'numUpdates' => 'setNumUpdates',
        'pendingHtlcs' => 'setPendingHtlcs',
        'csvDelay' => 'setCsvDelay',
        'private' => 'setPrivate',
        'initiator' => 'setInitiator',
        'chanStatusFlags' => 'setChanStatusFlags',
        'localChanReserveSat' => 'setLocalChanReserveSat',
        'remoteChanReserveSat' => 'setRemoteChanReserveSat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'remotePubkey' => 'getRemotePubkey',
        'channelPoint' => 'getChannelPoint',
        'chanId' => 'getChanId',
        'capacity' => 'getCapacity',
        'localBalance' => 'getLocalBalance',
        'remoteBalance' => 'getRemoteBalance',
        'commitFee' => 'getCommitFee',
        'commitWeight' => 'getCommitWeight',
        'feePerKw' => 'getFeePerKw',
        'unsettledBalance' => 'getUnsettledBalance',
        'totalSatoshisSent' => 'getTotalSatoshisSent',
        'totalSatoshisReceived' => 'getTotalSatoshisReceived',
        'numUpdates' => 'getNumUpdates',
        'pendingHtlcs' => 'getPendingHtlcs',
        'csvDelay' => 'getCsvDelay',
        'private' => 'getPrivate',
        'initiator' => 'getInitiator',
        'chanStatusFlags' => 'getChanStatusFlags',
        'localChanReserveSat' => 'getLocalChanReserveSat',
        'remoteChanReserveSat' => 'getRemoteChanReserveSat'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['remotePubkey'] = isset($data['remotePubkey']) ? $data['remotePubkey'] : null;
        $this->container['channelPoint'] = isset($data['channelPoint']) ? $data['channelPoint'] : null;
        $this->container['chanId'] = isset($data['chanId']) ? $data['chanId'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['localBalance'] = isset($data['localBalance']) ? $data['localBalance'] : null;
        $this->container['remoteBalance'] = isset($data['remoteBalance']) ? $data['remoteBalance'] : null;
        $this->container['commitFee'] = isset($data['commitFee']) ? $data['commitFee'] : null;
        $this->container['commitWeight'] = isset($data['commitWeight']) ? $data['commitWeight'] : null;
        $this->container['feePerKw'] = isset($data['feePerKw']) ? $data['feePerKw'] : null;
        $this->container['unsettledBalance'] = isset($data['unsettledBalance']) ? $data['unsettledBalance'] : null;
        $this->container['totalSatoshisSent'] = isset($data['totalSatoshisSent']) ? $data['totalSatoshisSent'] : null;
        $this->container['totalSatoshisReceived'] = isset($data['totalSatoshisReceived']) ? $data['totalSatoshisReceived'] : null;
        $this->container['numUpdates'] = isset($data['numUpdates']) ? $data['numUpdates'] : null;
        $this->container['pendingHtlcs'] = isset($data['pendingHtlcs']) ? $data['pendingHtlcs'] : null;
        $this->container['csvDelay'] = isset($data['csvDelay']) ? $data['csvDelay'] : null;
        $this->container['private'] = isset($data['private']) ? $data['private'] : null;
        $this->container['initiator'] = isset($data['initiator']) ? $data['initiator'] : null;
        $this->container['chanStatusFlags'] = isset($data['chanStatusFlags']) ? $data['chanStatusFlags'] : null;
        $this->container['localChanReserveSat'] = isset($data['localChanReserveSat']) ? $data['localChanReserveSat'] : null;
        $this->container['remoteChanReserveSat'] = isset($data['remoteChanReserveSat']) ? $data['remoteChanReserveSat'] : null;
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * @param string $remotePubkey remotePubkey
     *
     * @return $this
     */
    public function setRemotePubkey($remotePubkey)
    {
        $this->container['remotePubkey'] = $remotePubkey;

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
     * @param string $channelPoint * The outpoint (txid:index) of the funding transaction. With this value, Bob will be able to generate a signature for Alice's version of the commitment transaction.
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
     * @param string $chanId * The unique channel ID for the channel. The first 3 bytes are the block height, the next 3 the index within the block, and the last 2 bytes are the output index for the channel.
     *
     * @return $this
     */
    public function setChanId($chanId)
    {
        $this->container['chanId'] = $chanId;

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
     * Gets commitFee
     *
     * @return string
     */
    public function getCommitFee()
    {
        return $this->container['commitFee'];
    }

    /**
     * Sets commitFee
     *
     * @param string $commitFee * The amount calculated to be paid in fees for the current set of commitment transactions. The fee amount is persisted with the channel in order to allow the fee amount to be removed and recalculated with each channel state update, including updates that happen after a system restart.
     *
     * @return $this
     */
    public function setCommitFee($commitFee)
    {
        $this->container['commitFee'] = $commitFee;

        return $this;
    }

    /**
     * Gets commitWeight
     *
     * @return string
     */
    public function getCommitWeight()
    {
        return $this->container['commitWeight'];
    }

    /**
     * Sets commitWeight
     *
     * @param string $commitWeight commitWeight
     *
     * @return $this
     */
    public function setCommitWeight($commitWeight)
    {
        $this->container['commitWeight'] = $commitWeight;

        return $this;
    }

    /**
     * Gets feePerKw
     *
     * @return string
     */
    public function getFeePerKw()
    {
        return $this->container['feePerKw'];
    }

    /**
     * Sets feePerKw
     *
     * @param string $feePerKw * The required number of satoshis per kilo-weight that the requester will pay at all times, for both the funding transaction and commitment transaction. This value can later be updated once the channel is open.
     *
     * @return $this
     */
    public function setFeePerKw($feePerKw)
    {
        $this->container['feePerKw'] = $feePerKw;

        return $this;
    }

    /**
     * Gets unsettledBalance
     *
     * @return string
     */
    public function getUnsettledBalance()
    {
        return $this->container['unsettledBalance'];
    }

    /**
     * Sets unsettledBalance
     *
     * @param string $unsettledBalance unsettledBalance
     *
     * @return $this
     */
    public function setUnsettledBalance($unsettledBalance)
    {
        $this->container['unsettledBalance'] = $unsettledBalance;

        return $this;
    }

    /**
     * Gets totalSatoshisSent
     *
     * @return string
     */
    public function getTotalSatoshisSent()
    {
        return $this->container['totalSatoshisSent'];
    }

    /**
     * Sets totalSatoshisSent
     *
     * @param string $totalSatoshisSent * The total number of satoshis we've sent within this channel.
     *
     * @return $this
     */
    public function setTotalSatoshisSent($totalSatoshisSent)
    {
        $this->container['totalSatoshisSent'] = $totalSatoshisSent;

        return $this;
    }

    /**
     * Gets totalSatoshisReceived
     *
     * @return string
     */
    public function getTotalSatoshisReceived()
    {
        return $this->container['totalSatoshisReceived'];
    }

    /**
     * Sets totalSatoshisReceived
     *
     * @param string $totalSatoshisReceived * The total number of satoshis we've received within this channel.
     *
     * @return $this
     */
    public function setTotalSatoshisReceived($totalSatoshisReceived)
    {
        $this->container['totalSatoshisReceived'] = $totalSatoshisReceived;

        return $this;
    }

    /**
     * Gets numUpdates
     *
     * @return string
     */
    public function getNumUpdates()
    {
        return $this->container['numUpdates'];
    }

    /**
     * Sets numUpdates
     *
     * @param string $numUpdates * The total number of updates conducted within this channel.
     *
     * @return $this
     */
    public function setNumUpdates($numUpdates)
    {
        $this->container['numUpdates'] = $numUpdates;

        return $this;
    }

    /**
     * Gets pendingHtlcs
     *
     * @return \Lnd\Rest\Model\LnrpcHTLC[]
     */
    public function getPendingHtlcs()
    {
        return $this->container['pendingHtlcs'];
    }

    /**
     * Sets pendingHtlcs
     *
     * @param \Lnd\Rest\Model\LnrpcHTLC[] $pendingHtlcs * The list of active, uncleared HTLCs currently pending within the channel.
     *
     * @return $this
     */
    public function setPendingHtlcs($pendingHtlcs)
    {
        $this->container['pendingHtlcs'] = $pendingHtlcs;

        return $this;
    }

    /**
     * Gets csvDelay
     *
     * @return int
     */
    public function getCsvDelay()
    {
        return $this->container['csvDelay'];
    }

    /**
     * Sets csvDelay
     *
     * @param int $csvDelay * The CSV delay expressed in relative blocks. If the channel is force closed, we will need to wait for this many blocks before we can regain our funds.
     *
     * @return $this
     */
    public function setCsvDelay($csvDelay)
    {
        $this->container['csvDelay'] = $csvDelay;

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
     * @param bool $private / Whether this channel is advertised to the network or not.
     *
     * @return $this
     */
    public function setPrivate($private)
    {
        $this->container['private'] = $private;

        return $this;
    }

    /**
     * Gets initiator
     *
     * @return bool
     */
    public function getInitiator()
    {
        return $this->container['initiator'];
    }

    /**
     * Sets initiator
     *
     * @param bool $initiator / True if we were the ones that created the channel.
     *
     * @return $this
     */
    public function setInitiator($initiator)
    {
        $this->container['initiator'] = $initiator;

        return $this;
    }

    /**
     * Gets chanStatusFlags
     *
     * @return string
     */
    public function getChanStatusFlags()
    {
        return $this->container['chanStatusFlags'];
    }

    /**
     * Sets chanStatusFlags
     *
     * @param string $chanStatusFlags / A set of flags showing the current state of the channel.
     *
     * @return $this
     */
    public function setChanStatusFlags($chanStatusFlags)
    {
        $this->container['chanStatusFlags'] = $chanStatusFlags;

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
     * @param string $localChanReserveSat / The minimum satoshis this node is required to reserve in its balance.
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
     * @param string $remoteChanReserveSat * The minimum satoshis the other node is required to reserve in its balance.
     *
     * @return $this
     */
    public function setRemoteChanReserveSat($remoteChanReserveSat)
    {
        $this->container['remoteChanReserveSat'] = $remoteChanReserveSat;

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


