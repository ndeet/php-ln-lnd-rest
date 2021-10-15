<?php
/**
 * LnrpcChannelAcceptResponse
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
 * LnrpcChannelAcceptResponse Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcChannelAcceptResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcChannelAcceptResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept' => 'bool',
        'pendingChanId' => 'string',
        'error' => 'string',
        'upfrontShutdown' => 'string',
        'csvDelay' => 'int',
        'reserveSat' => 'string',
        'inFlightMaxMsat' => 'string',
        'maxHtlcCount' => 'int',
        'minHtlcIn' => 'string',
        'minAcceptDepth' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept' => 'boolean',
        'pendingChanId' => 'byte',
        'error' => null,
        'upfrontShutdown' => null,
        'csvDelay' => 'int64',
        'reserveSat' => 'uint64',
        'inFlightMaxMsat' => 'uint64',
        'maxHtlcCount' => 'int64',
        'minHtlcIn' => 'uint64',
        'minAcceptDepth' => 'int64'
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
        'accept' => 'accept',
        'pendingChanId' => 'pending_chan_id',
        'error' => 'error',
        'upfrontShutdown' => 'upfront_shutdown',
        'csvDelay' => 'csv_delay',
        'reserveSat' => 'reserve_sat',
        'inFlightMaxMsat' => 'in_flight_max_msat',
        'maxHtlcCount' => 'max_htlc_count',
        'minHtlcIn' => 'min_htlc_in',
        'minAcceptDepth' => 'min_accept_depth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept' => 'setAccept',
        'pendingChanId' => 'setPendingChanId',
        'error' => 'setError',
        'upfrontShutdown' => 'setUpfrontShutdown',
        'csvDelay' => 'setCsvDelay',
        'reserveSat' => 'setReserveSat',
        'inFlightMaxMsat' => 'setInFlightMaxMsat',
        'maxHtlcCount' => 'setMaxHtlcCount',
        'minHtlcIn' => 'setMinHtlcIn',
        'minAcceptDepth' => 'setMinAcceptDepth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept' => 'getAccept',
        'pendingChanId' => 'getPendingChanId',
        'error' => 'getError',
        'upfrontShutdown' => 'getUpfrontShutdown',
        'csvDelay' => 'getCsvDelay',
        'reserveSat' => 'getReserveSat',
        'inFlightMaxMsat' => 'getInFlightMaxMsat',
        'maxHtlcCount' => 'getMaxHtlcCount',
        'minHtlcIn' => 'getMinHtlcIn',
        'minAcceptDepth' => 'getMinAcceptDepth'
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
        $this->container['accept'] = isset($data['accept']) ? $data['accept'] : null;
        $this->container['pendingChanId'] = isset($data['pendingChanId']) ? $data['pendingChanId'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['upfrontShutdown'] = isset($data['upfrontShutdown']) ? $data['upfrontShutdown'] : null;
        $this->container['csvDelay'] = isset($data['csvDelay']) ? $data['csvDelay'] : null;
        $this->container['reserveSat'] = isset($data['reserveSat']) ? $data['reserveSat'] : null;
        $this->container['inFlightMaxMsat'] = isset($data['inFlightMaxMsat']) ? $data['inFlightMaxMsat'] : null;
        $this->container['maxHtlcCount'] = isset($data['maxHtlcCount']) ? $data['maxHtlcCount'] : null;
        $this->container['minHtlcIn'] = isset($data['minHtlcIn']) ? $data['minHtlcIn'] : null;
        $this->container['minAcceptDepth'] = isset($data['minAcceptDepth']) ? $data['minAcceptDepth'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['pendingChanId']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['pendingChanId'])) {
            $invalidProperties[] = "invalid value for 'pendingChanId', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
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
     * Gets accept
     *
     * @return bool
     */
    public function getAccept()
    {
        return $this->container['accept'];
    }

    /**
     * Sets accept
     *
     * @param bool $accept Whether or not the client accepts the channel.
     *
     * @return $this
     */
    public function setAccept($accept)
    {
        $this->container['accept'] = $accept;

        return $this;
    }

    /**
     * Gets pendingChanId
     *
     * @return string
     */
    public function getPendingChanId()
    {
        return $this->container['pendingChanId'];
    }

    /**
     * Sets pendingChanId
     *
     * @param string $pendingChanId The pending channel id to which this response applies.
     *
     * @return $this
     */
    public function setPendingChanId($pendingChanId)
    {

        if (!is_null($pendingChanId) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $pendingChanId))) {
            throw new \InvalidArgumentException("invalid value for $pendingChanId when calling LnrpcChannelAcceptResponse., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['pendingChanId'] = $pendingChanId;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string $error An optional error to send the initiating party to indicate why the channel was rejected. This field *should not* contain sensitive information, it will be sent to the initiating party. This field should only be set if accept is false, the channel will be rejected if an error is set with accept=true because the meaning of this response is ambiguous. Limited to 500 characters.
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets upfrontShutdown
     *
     * @return string
     */
    public function getUpfrontShutdown()
    {
        return $this->container['upfrontShutdown'];
    }

    /**
     * Sets upfrontShutdown
     *
     * @param string $upfrontShutdown The upfront shutdown address to use if the initiating peer supports option upfront shutdown script (see ListPeers for the features supported). Note that the channel open will fail if this value is set for a peer that does not support this feature bit.
     *
     * @return $this
     */
    public function setUpfrontShutdown($upfrontShutdown)
    {
        $this->container['upfrontShutdown'] = $upfrontShutdown;

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
     * @param int $csvDelay The csv delay (in blocks) that we require for the remote party.
     *
     * @return $this
     */
    public function setCsvDelay($csvDelay)
    {
        $this->container['csvDelay'] = $csvDelay;

        return $this;
    }

    /**
     * Gets reserveSat
     *
     * @return string
     */
    public function getReserveSat()
    {
        return $this->container['reserveSat'];
    }

    /**
     * Sets reserveSat
     *
     * @param string $reserveSat The reserve amount in satoshis that we require the remote peer to adhere to. We require that the remote peer always have some reserve amount allocated to them so that there is always a disincentive to broadcast old state (if they hold 0 sats on their side of the channel, there is nothing to lose).
     *
     * @return $this
     */
    public function setReserveSat($reserveSat)
    {
        $this->container['reserveSat'] = $reserveSat;

        return $this;
    }

    /**
     * Gets inFlightMaxMsat
     *
     * @return string
     */
    public function getInFlightMaxMsat()
    {
        return $this->container['inFlightMaxMsat'];
    }

    /**
     * Sets inFlightMaxMsat
     *
     * @param string $inFlightMaxMsat The maximum amount of funds in millisatoshis that we allow the remote peer to have in outstanding htlcs.
     *
     * @return $this
     */
    public function setInFlightMaxMsat($inFlightMaxMsat)
    {
        $this->container['inFlightMaxMsat'] = $inFlightMaxMsat;

        return $this;
    }

    /**
     * Gets maxHtlcCount
     *
     * @return int
     */
    public function getMaxHtlcCount()
    {
        return $this->container['maxHtlcCount'];
    }

    /**
     * Sets maxHtlcCount
     *
     * @param int $maxHtlcCount The maximum number of htlcs that the remote peer can offer us.
     *
     * @return $this
     */
    public function setMaxHtlcCount($maxHtlcCount)
    {
        $this->container['maxHtlcCount'] = $maxHtlcCount;

        return $this;
    }

    /**
     * Gets minHtlcIn
     *
     * @return string
     */
    public function getMinHtlcIn()
    {
        return $this->container['minHtlcIn'];
    }

    /**
     * Sets minHtlcIn
     *
     * @param string $minHtlcIn The minimum value in millisatoshis for incoming htlcs on the channel.
     *
     * @return $this
     */
    public function setMinHtlcIn($minHtlcIn)
    {
        $this->container['minHtlcIn'] = $minHtlcIn;

        return $this;
    }

    /**
     * Gets minAcceptDepth
     *
     * @return int
     */
    public function getMinAcceptDepth()
    {
        return $this->container['minAcceptDepth'];
    }

    /**
     * Sets minAcceptDepth
     *
     * @param int $minAcceptDepth The number of confirmations we require before we consider the channel open.
     *
     * @return $this
     */
    public function setMinAcceptDepth($minAcceptDepth)
    {
        $this->container['minAcceptDepth'] = $minAcceptDepth;

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

