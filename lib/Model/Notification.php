<?php
/**
 * Notification
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TrackingAPI
 *
 * API for retrieving tracking data and changing settings on LightBug & RemoteThings tracking devices
 *
 * OpenAPI spec version: 1.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Notification Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Notification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'notification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created' => '\DateTime',
        'params' => 'object',
        'message' => 'string',
        'dismissed_on' => '\DateTime',
        'dismissed_by' => 'object',
        'id' => 'float',
        'device_id' => 'float',
        'point_id' => 'float',
        'user_id' => 'float',
        'trigger_id' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created' => 'date-time',
        'params' => null,
        'message' => null,
        'dismissed_on' => 'date-time',
        'dismissed_by' => null,
        'id' => '',
        'device_id' => '',
        'point_id' => '',
        'user_id' => '',
        'trigger_id' => ''
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
        'created' => 'created',
        'params' => 'params',
        'message' => 'message',
        'dismissed_on' => 'dismissedOn',
        'dismissed_by' => 'dismissedBy',
        'id' => 'id',
        'device_id' => 'deviceId',
        'point_id' => 'pointId',
        'user_id' => 'userId',
        'trigger_id' => 'triggerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'params' => 'setParams',
        'message' => 'setMessage',
        'dismissed_on' => 'setDismissedOn',
        'dismissed_by' => 'setDismissedBy',
        'id' => 'setId',
        'device_id' => 'setDeviceId',
        'point_id' => 'setPointId',
        'user_id' => 'setUserId',
        'trigger_id' => 'setTriggerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'params' => 'getParams',
        'message' => 'getMessage',
        'dismissed_on' => 'getDismissedOn',
        'dismissed_by' => 'getDismissedBy',
        'id' => 'getId',
        'device_id' => 'getDeviceId',
        'point_id' => 'getPointId',
        'user_id' => 'getUserId',
        'trigger_id' => 'getTriggerId'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['dismissed_on'] = isset($data['dismissed_on']) ? $data['dismissed_on'] : null;
        $this->container['dismissed_by'] = isset($data['dismissed_by']) ? $data['dismissed_by'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
        $this->container['point_id'] = isset($data['point_id']) ? $data['point_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['trigger_id'] = isset($data['trigger_id']) ? $data['trigger_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
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
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets params
     *
     * @return object
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param object $params params
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets dismissed_on
     *
     * @return \DateTime
     */
    public function getDismissedOn()
    {
        return $this->container['dismissed_on'];
    }

    /**
     * Sets dismissed_on
     *
     * @param \DateTime $dismissed_on dismissed_on
     *
     * @return $this
     */
    public function setDismissedOn($dismissed_on)
    {
        $this->container['dismissed_on'] = $dismissed_on;

        return $this;
    }

    /**
     * Gets dismissed_by
     *
     * @return object
     */
    public function getDismissedBy()
    {
        return $this->container['dismissed_by'];
    }

    /**
     * Sets dismissed_by
     *
     * @param object $dismissed_by dismissed_by
     *
     * @return $this
     */
    public function setDismissedBy($dismissed_by)
    {
        $this->container['dismissed_by'] = $dismissed_by;

        return $this;
    }

    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return float
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param float $device_id device_id
     *
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets point_id
     *
     * @return float
     */
    public function getPointId()
    {
        return $this->container['point_id'];
    }

    /**
     * Sets point_id
     *
     * @param float $point_id point_id
     *
     * @return $this
     */
    public function setPointId($point_id)
    {
        $this->container['point_id'] = $point_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return float
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param float $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets trigger_id
     *
     * @return float
     */
    public function getTriggerId()
    {
        return $this->container['trigger_id'];
    }

    /**
     * Sets trigger_id
     *
     * @param float $trigger_id trigger_id
     *
     * @return $this
     */
    public function setTriggerId($trigger_id)
    {
        $this->container['trigger_id'] = $trigger_id;

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

