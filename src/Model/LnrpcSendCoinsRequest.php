<?php
/**
 * LnrpcSendCoinsRequest
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
 * LnrpcSendCoinsRequest Class Doc Comment
 *
 * @category Class
 * @package  Lnd\Rest
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LnrpcSendCoinsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'lnrpcSendCoinsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addr' => 'string',
        'amount' => 'string',
        'targetConf' => 'int',
        'satPerVbyte' => 'string',
        'satPerByte' => 'string',
        'sendAll' => 'bool',
        'label' => 'string',
        'minConfs' => 'int',
        'spendUnconfirmed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addr' => null,
        'amount' => 'int64',
        'targetConf' => 'int32',
        'satPerVbyte' => 'uint64',
        'satPerByte' => 'int64',
        'sendAll' => 'boolean',
        'label' => null,
        'minConfs' => 'int32',
        'spendUnconfirmed' => 'boolean'
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
        'addr' => 'addr',
        'amount' => 'amount',
        'targetConf' => 'target_conf',
        'satPerVbyte' => 'sat_per_vbyte',
        'satPerByte' => 'sat_per_byte',
        'sendAll' => 'send_all',
        'label' => 'label',
        'minConfs' => 'min_confs',
        'spendUnconfirmed' => 'spend_unconfirmed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'addr' => 'setAddr',
        'amount' => 'setAmount',
        'targetConf' => 'setTargetConf',
        'satPerVbyte' => 'setSatPerVbyte',
        'satPerByte' => 'setSatPerByte',
        'sendAll' => 'setSendAll',
        'label' => 'setLabel',
        'minConfs' => 'setMinConfs',
        'spendUnconfirmed' => 'setSpendUnconfirmed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'addr' => 'getAddr',
        'amount' => 'getAmount',
        'targetConf' => 'getTargetConf',
        'satPerVbyte' => 'getSatPerVbyte',
        'satPerByte' => 'getSatPerByte',
        'sendAll' => 'getSendAll',
        'label' => 'getLabel',
        'minConfs' => 'getMinConfs',
        'spendUnconfirmed' => 'getSpendUnconfirmed'
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
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['targetConf'] = isset($data['targetConf']) ? $data['targetConf'] : null;
        $this->container['satPerVbyte'] = isset($data['satPerVbyte']) ? $data['satPerVbyte'] : null;
        $this->container['satPerByte'] = isset($data['satPerByte']) ? $data['satPerByte'] : null;
        $this->container['sendAll'] = isset($data['sendAll']) ? $data['sendAll'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['minConfs'] = isset($data['minConfs']) ? $data['minConfs'] : null;
        $this->container['spendUnconfirmed'] = isset($data['spendUnconfirmed']) ? $data['spendUnconfirmed'] : null;
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
     * Gets addr
     *
     * @return string
     */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
     * Sets addr
     *
     * @param string $addr addr
     *
     * @return $this
     */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets targetConf
     *
     * @return int
     */
    public function getTargetConf()
    {
        return $this->container['targetConf'];
    }

    /**
     * Sets targetConf
     *
     * @param int $targetConf The target number of blocks that this transaction should be confirmed by.
     *
     * @return $this
     */
    public function setTargetConf($targetConf)
    {
        $this->container['targetConf'] = $targetConf;

        return $this;
    }

    /**
     * Gets satPerVbyte
     *
     * @return string
     */
    public function getSatPerVbyte()
    {
        return $this->container['satPerVbyte'];
    }

    /**
     * Sets satPerVbyte
     *
     * @param string $satPerVbyte A manual fee rate set in sat/vbyte that should be used when crafting the transaction.
     *
     * @return $this
     */
    public function setSatPerVbyte($satPerVbyte)
    {
        $this->container['satPerVbyte'] = $satPerVbyte;

        return $this;
    }

    /**
     * Gets satPerByte
     *
     * @return string
     */
    public function getSatPerByte()
    {
        return $this->container['satPerByte'];
    }

    /**
     * Sets satPerByte
     *
     * @param string $satPerByte Deprecated, use sat_per_vbyte. A manual fee rate set in sat/vbyte that should be used when crafting the transaction.
     *
     * @return $this
     */
    public function setSatPerByte($satPerByte)
    {
        $this->container['satPerByte'] = $satPerByte;

        return $this;
    }

    /**
     * Gets sendAll
     *
     * @return bool
     */
    public function getSendAll()
    {
        return $this->container['sendAll'];
    }

    /**
     * Sets sendAll
     *
     * @param bool $sendAll If set, then the amount field will be ignored, and lnd will attempt to send all the coins under control of the internal wallet to the specified address.
     *
     * @return $this
     */
    public function setSendAll($sendAll)
    {
        $this->container['sendAll'] = $sendAll;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label An optional label for the transaction, limited to 500 characters.
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets minConfs
     *
     * @return int
     */
    public function getMinConfs()
    {
        return $this->container['minConfs'];
    }

    /**
     * Sets minConfs
     *
     * @param int $minConfs The minimum number of confirmations each one of your outputs used for the transaction must satisfy.
     *
     * @return $this
     */
    public function setMinConfs($minConfs)
    {
        $this->container['minConfs'] = $minConfs;

        return $this;
    }

    /**
     * Gets spendUnconfirmed
     *
     * @return bool
     */
    public function getSpendUnconfirmed()
    {
        return $this->container['spendUnconfirmed'];
    }

    /**
     * Sets spendUnconfirmed
     *
     * @param bool $spendUnconfirmed Whether unconfirmed outputs should be used as inputs for the transaction.
     *
     * @return $this
     */
    public function setSpendUnconfirmed($spendUnconfirmed)
    {
        $this->container['spendUnconfirmed'] = $spendUnconfirmed;

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


