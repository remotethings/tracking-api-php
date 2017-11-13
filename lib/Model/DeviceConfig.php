<?php
/**
 * DeviceConfig
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * DeviceConfig Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeviceConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'deviceConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'current_fw' => 'string',
        'ota_fw' => 'string',
        'interval' => 'float',
        'sleep_interval' => 'float',
        'check_in_interval' => 'float',
        'packing' => 'float',
        'movement_sensitivity' => 'float',
        'debounce' => 'float',
        'movement_sensitivity2' => 'float',
        'behavior' => 'float',
        'mode_control' => 'float',
        'gps_timeout' => 'float',
        'transmit_timeout' => 'float',
        'gps_stabilize' => 'float',
        'gps_check_interval' => 'float',
        'stop_timeout' => 'float',
        'tolerance_percentage' => 'float',
        'reasons_to_wake' => 'object[]',
        'modified' => '\DateTime',
        'force_fw' => 'bool',
        'received_at' => '\DateTime',
        'reset' => 'float',
        'flash_try_count' => 'float',
        'home_wifi_network' => 'string',
        'wake_action' => 'string',
        'on_demand_time' => 'float',
        'alert_action' => 'string',
        'id' => 'float',
        'device_id' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'current_fw' => null,
        'ota_fw' => null,
        'interval' => '',
        'sleep_interval' => '',
        'check_in_interval' => '',
        'packing' => '',
        'movement_sensitivity' => '',
        'debounce' => '',
        'movement_sensitivity2' => '',
        'behavior' => '',
        'mode_control' => '',
        'gps_timeout' => '',
        'transmit_timeout' => '',
        'gps_stabilize' => '',
        'gps_check_interval' => '',
        'stop_timeout' => '',
        'tolerance_percentage' => '',
        'reasons_to_wake' => null,
        'modified' => 'date-time',
        'force_fw' => null,
        'received_at' => 'date-time',
        'reset' => '',
        'flash_try_count' => '',
        'home_wifi_network' => null,
        'wake_action' => null,
        'on_demand_time' => '',
        'alert_action' => null,
        'id' => '',
        'device_id' => ''
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'current_fw' => 'currentFW',
        'ota_fw' => 'otaFW',
        'interval' => 'interval',
        'sleep_interval' => 'sleepInterval',
        'check_in_interval' => 'checkInInterval',
        'packing' => 'packing',
        'movement_sensitivity' => 'movementSensitivity',
        'debounce' => 'debounce',
        'movement_sensitivity2' => 'movementSensitivity2',
        'behavior' => 'behavior',
        'mode_control' => 'modeControl',
        'gps_timeout' => 'gpsTimeout',
        'transmit_timeout' => 'transmitTimeout',
        'gps_stabilize' => 'gpsStabilize',
        'gps_check_interval' => 'gpsCheckInterval',
        'stop_timeout' => 'stopTimeout',
        'tolerance_percentage' => 'tolerancePercentage',
        'reasons_to_wake' => 'reasonsToWake',
        'modified' => 'modified',
        'force_fw' => 'forceFw',
        'received_at' => 'receivedAt',
        'reset' => 'reset',
        'flash_try_count' => 'flashTryCount',
        'home_wifi_network' => 'homeWifiNetwork',
        'wake_action' => 'wakeAction',
        'on_demand_time' => 'onDemandTime',
        'alert_action' => 'alertAction',
        'id' => 'id',
        'device_id' => 'deviceId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'current_fw' => 'setCurrentFw',
        'ota_fw' => 'setOtaFw',
        'interval' => 'setInterval',
        'sleep_interval' => 'setSleepInterval',
        'check_in_interval' => 'setCheckInInterval',
        'packing' => 'setPacking',
        'movement_sensitivity' => 'setMovementSensitivity',
        'debounce' => 'setDebounce',
        'movement_sensitivity2' => 'setMovementSensitivity2',
        'behavior' => 'setBehavior',
        'mode_control' => 'setModeControl',
        'gps_timeout' => 'setGpsTimeout',
        'transmit_timeout' => 'setTransmitTimeout',
        'gps_stabilize' => 'setGpsStabilize',
        'gps_check_interval' => 'setGpsCheckInterval',
        'stop_timeout' => 'setStopTimeout',
        'tolerance_percentage' => 'setTolerancePercentage',
        'reasons_to_wake' => 'setReasonsToWake',
        'modified' => 'setModified',
        'force_fw' => 'setForceFw',
        'received_at' => 'setReceivedAt',
        'reset' => 'setReset',
        'flash_try_count' => 'setFlashTryCount',
        'home_wifi_network' => 'setHomeWifiNetwork',
        'wake_action' => 'setWakeAction',
        'on_demand_time' => 'setOnDemandTime',
        'alert_action' => 'setAlertAction',
        'id' => 'setId',
        'device_id' => 'setDeviceId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'current_fw' => 'getCurrentFw',
        'ota_fw' => 'getOtaFw',
        'interval' => 'getInterval',
        'sleep_interval' => 'getSleepInterval',
        'check_in_interval' => 'getCheckInInterval',
        'packing' => 'getPacking',
        'movement_sensitivity' => 'getMovementSensitivity',
        'debounce' => 'getDebounce',
        'movement_sensitivity2' => 'getMovementSensitivity2',
        'behavior' => 'getBehavior',
        'mode_control' => 'getModeControl',
        'gps_timeout' => 'getGpsTimeout',
        'transmit_timeout' => 'getTransmitTimeout',
        'gps_stabilize' => 'getGpsStabilize',
        'gps_check_interval' => 'getGpsCheckInterval',
        'stop_timeout' => 'getStopTimeout',
        'tolerance_percentage' => 'getTolerancePercentage',
        'reasons_to_wake' => 'getReasonsToWake',
        'modified' => 'getModified',
        'force_fw' => 'getForceFw',
        'received_at' => 'getReceivedAt',
        'reset' => 'getReset',
        'flash_try_count' => 'getFlashTryCount',
        'home_wifi_network' => 'getHomeWifiNetwork',
        'wake_action' => 'getWakeAction',
        'on_demand_time' => 'getOnDemandTime',
        'alert_action' => 'getAlertAction',
        'id' => 'getId',
        'device_id' => 'getDeviceId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['current_fw'] = isset($data['current_fw']) ? $data['current_fw'] : null;
        $this->container['ota_fw'] = isset($data['ota_fw']) ? $data['ota_fw'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['sleep_interval'] = isset($data['sleep_interval']) ? $data['sleep_interval'] : null;
        $this->container['check_in_interval'] = isset($data['check_in_interval']) ? $data['check_in_interval'] : null;
        $this->container['packing'] = isset($data['packing']) ? $data['packing'] : null;
        $this->container['movement_sensitivity'] = isset($data['movement_sensitivity']) ? $data['movement_sensitivity'] : null;
        $this->container['debounce'] = isset($data['debounce']) ? $data['debounce'] : null;
        $this->container['movement_sensitivity2'] = isset($data['movement_sensitivity2']) ? $data['movement_sensitivity2'] : null;
        $this->container['behavior'] = isset($data['behavior']) ? $data['behavior'] : null;
        $this->container['mode_control'] = isset($data['mode_control']) ? $data['mode_control'] : null;
        $this->container['gps_timeout'] = isset($data['gps_timeout']) ? $data['gps_timeout'] : null;
        $this->container['transmit_timeout'] = isset($data['transmit_timeout']) ? $data['transmit_timeout'] : null;
        $this->container['gps_stabilize'] = isset($data['gps_stabilize']) ? $data['gps_stabilize'] : null;
        $this->container['gps_check_interval'] = isset($data['gps_check_interval']) ? $data['gps_check_interval'] : null;
        $this->container['stop_timeout'] = isset($data['stop_timeout']) ? $data['stop_timeout'] : null;
        $this->container['tolerance_percentage'] = isset($data['tolerance_percentage']) ? $data['tolerance_percentage'] : null;
        $this->container['reasons_to_wake'] = isset($data['reasons_to_wake']) ? $data['reasons_to_wake'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['force_fw'] = isset($data['force_fw']) ? $data['force_fw'] : false;
        $this->container['received_at'] = isset($data['received_at']) ? $data['received_at'] : null;
        $this->container['reset'] = isset($data['reset']) ? $data['reset'] : null;
        $this->container['flash_try_count'] = isset($data['flash_try_count']) ? $data['flash_try_count'] : null;
        $this->container['home_wifi_network'] = isset($data['home_wifi_network']) ? $data['home_wifi_network'] : null;
        $this->container['wake_action'] = isset($data['wake_action']) ? $data['wake_action'] : 'normal';
        $this->container['on_demand_time'] = isset($data['on_demand_time']) ? $data['on_demand_time'] : null;
        $this->container['alert_action'] = isset($data['alert_action']) ? $data['alert_action'] : 'nothing';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['device_id'] = isset($data['device_id']) ? $data['device_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['interval'] === null) {
            $invalid_properties[] = "'interval' can't be null";
        }
        if ($this->container['sleep_interval'] === null) {
            $invalid_properties[] = "'sleep_interval' can't be null";
        }
        if ($this->container['check_in_interval'] === null) {
            $invalid_properties[] = "'check_in_interval' can't be null";
        }
        if ($this->container['packing'] === null) {
            $invalid_properties[] = "'packing' can't be null";
        }
        if (!is_null($this->container['home_wifi_network']) && (strlen($this->container['home_wifi_network']) > 127)) {
            $invalid_properties[] = "invalid value for 'home_wifi_network', the character length must be smaller than or equal to 127.";
        }

        if ($this->container['wake_action'] === null) {
            $invalid_properties[] = "'wake_action' can't be null";
        }
        if ($this->container['on_demand_time'] === null) {
            $invalid_properties[] = "'on_demand_time' can't be null";
        }
        if ($this->container['alert_action'] === null) {
            $invalid_properties[] = "'alert_action' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['interval'] === null) {
            return false;
        }
        if ($this->container['sleep_interval'] === null) {
            return false;
        }
        if ($this->container['check_in_interval'] === null) {
            return false;
        }
        if ($this->container['packing'] === null) {
            return false;
        }
        if (strlen($this->container['home_wifi_network']) > 127) {
            return false;
        }
        if ($this->container['wake_action'] === null) {
            return false;
        }
        if ($this->container['on_demand_time'] === null) {
            return false;
        }
        if ($this->container['alert_action'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets current_fw
     * @return string
     */
    public function getCurrentFw()
    {
        return $this->container['current_fw'];
    }

    /**
     * Sets current_fw
     * @param string $current_fw Current Firmware version
     * @return $this
     */
    public function setCurrentFw($current_fw)
    {
        $this->container['current_fw'] = $current_fw;

        return $this;
    }

    /**
     * Gets ota_fw
     * @return string
     */
    public function getOtaFw()
    {
        return $this->container['ota_fw'];
    }

    /**
     * Sets ota_fw
     * @param string $ota_fw Pending Firmware version. If non null, the unit will be told to upgrade to this version when it next transmits in sleep mode.
     * @return $this
     */
    public function setOtaFw($ota_fw)
    {
        $this->container['ota_fw'] = $ota_fw;

        return $this;
    }

    /**
     * Gets interval
     * @return float
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     * @param float $interval The wake mode interval in seconds. The unit will connect to the server this often when awake.
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets sleep_interval
     * @return float
     */
    public function getSleepInterval()
    {
        return $this->container['sleep_interval'];
    }

    /**
     * Sets sleep_interval
     * @param float $sleep_interval Sleep mode interval in seconds. The unit will try to connect this often to the server when asleep
     * @return $this
     */
    public function setSleepInterval($sleep_interval)
    {
        $this->container['sleep_interval'] = $sleep_interval;

        return $this;
    }

    /**
     * Gets check_in_interval
     * @return float
     */
    public function getCheckInInterval()
    {
        return $this->container['check_in_interval'];
    }

    /**
     * Sets check_in_interval
     * @param float $check_in_interval Internal Use. A failsafe to ensure the unit connects to the server at least this often.
     * @return $this
     */
    public function setCheckInInterval($check_in_interval)
    {
        $this->container['check_in_interval'] = $check_in_interval;

        return $this;
    }

    /**
     * Gets packing
     * @return float
     */
    public function getPacking()
    {
        return $this->container['packing'];
    }

    /**
     * Sets packing
     * @param float $packing The number of GPS points to send with each transmission. A packing setting of 3 with an 'interval' of 60s will result in points recorded approximately every 20s, but they will only be sent together. This increases the time you have to wait for locations to come through to the server but improves battery life
     * @return $this
     */
    public function setPacking($packing)
    {
        $this->container['packing'] = $packing;

        return $this;
    }

    /**
     * Gets movement_sensitivity
     * @return float
     */
    public function getMovementSensitivity()
    {
        return $this->container['movement_sensitivity'];
    }

    /**
     * Sets movement_sensitivity
     * @param float $movement_sensitivity Deprecated. See debounce.
     * @return $this
     */
    public function setMovementSensitivity($movement_sensitivity)
    {
        $this->container['movement_sensitivity'] = $movement_sensitivity;

        return $this;
    }

    /**
     * Gets debounce
     * @return float
     */
    public function getDebounce()
    {
        return $this->container['debounce'];
    }

    /**
     * Sets debounce
     * @param float $debounce Movement sensitivity on a scale of 1 to 10, with 1 being the most sensitive. It is correlated to the number of consecutive milliseconds the acceleration needs to exceed the movementSensitivity threshold
     * @return $this
     */
    public function setDebounce($debounce)
    {
        $this->container['debounce'] = $debounce;

        return $this;
    }

    /**
     * Gets movement_sensitivity2
     * @return float
     */
    public function getMovementSensitivity2()
    {
        return $this->container['movement_sensitivity2'];
    }

    /**
     * Sets movement_sensitivity2
     * @param float $movement_sensitivity2 A secondary debounce value. Typically this value is lower or equal to debounce, representing increased sensitivity to movement once the device is already moving.
     * @return $this
     */
    public function setMovementSensitivity2($movement_sensitivity2)
    {
        $this->container['movement_sensitivity2'] = $movement_sensitivity2;

        return $this;
    }

    /**
     * Gets behavior
     * @return float
     */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
     * Sets behavior
     * @param float $behavior Char Bitfield with various flags. Advanced use only.  DisableBluetooth:32 |  Encrypt:128 |  GsmOnWhenAwake:1 |  GsmOnWhenAsleep:2 |  GpsOnWhenAwake:4 |  DisableWifiAccuracyAssist:8 |  RepeatSleep:16 |  DisableWifi:64
     * @return $this
     */
    public function setBehavior($behavior)
    {
        $this->container['behavior'] = $behavior;

        return $this;
    }

    /**
     * Gets mode_control
     * @return float
     */
    public function getModeControl()
    {
        return $this->container['mode_control'];
    }

    /**
     * Sets mode_control
     * @param float $mode_control Char Bitfield with various flags. Advanced use only.  StartStopOnly:1 |  LockAwakeOnAlert:2 |  SendSleepLocAfterBtDisconnect:4 |
     * @return $this
     */
    public function setModeControl($mode_control)
    {
        $this->container['mode_control'] = $mode_control;

        return $this;
    }

    /**
     * Gets gps_timeout
     * @return float
     */
    public function getGpsTimeout()
    {
        return $this->container['gps_timeout'];
    }

    /**
     * Sets gps_timeout
     * @param float $gps_timeout How long to let the GPS searches for a lock in seconds before giving up. Max 255s.
     * @return $this
     */
    public function setGpsTimeout($gps_timeout)
    {
        $this->container['gps_timeout'] = $gps_timeout;

        return $this;
    }

    /**
     * Gets transmit_timeout
     * @return float
     */
    public function getTransmitTimeout()
    {
        return $this->container['transmit_timeout'];
    }

    /**
     * Sets transmit_timeout
     * @param float $transmit_timeout When the unit first wakes up from sleep, how long to wait before trying to transmit in multiples of 30 seconds. 0 = instant, 1 = 30s, 2 = 60s...   Useful to avoid detection or draining battery inside shielded buildings.
     * @return $this
     */
    public function setTransmitTimeout($transmit_timeout)
    {
        $this->container['transmit_timeout'] = $transmit_timeout;

        return $this;
    }

    /**
     * Gets gps_stabilize
     * @return float
     */
    public function getGpsStabilize()
    {
        return $this->container['gps_stabilize'];
    }

    /**
     * Sets gps_stabilize
     * @param float $gps_stabilize How long to let the GPS stabilise in seconds once a lock is achieved before sending the position. Higher values may increase accuracy.
     * @return $this
     */
    public function setGpsStabilize($gps_stabilize)
    {
        $this->container['gps_stabilize'] = $gps_stabilize;

        return $this;
    }

    /**
     * Gets gps_check_interval
     * @return float
     */
    public function getGpsCheckInterval()
    {
        return $this->container['gps_check_interval'];
    }

    /**
     * Sets gps_check_interval
     * @param float $gps_check_interval If a safe-zone is used, how often to check the wifi & gps to see if its still inside it (only applies when motion is detected)
     * @return $this
     */
    public function setGpsCheckInterval($gps_check_interval)
    {
        $this->container['gps_check_interval'] = $gps_check_interval;

        return $this;
    }

    /**
     * Gets stop_timeout
     * @return float
     */
    public function getStopTimeout()
    {
        return $this->container['stop_timeout'];
    }

    /**
     * Sets stop_timeout
     * @param float $stop_timeout The total amount of time in seconds the unit has to be stationary for before deeming the journey over and switching to sleep mode
     * @return $this
     */
    public function setStopTimeout($stop_timeout)
    {
        $this->container['stop_timeout'] = $stop_timeout;

        return $this;
    }

    /**
     * Gets tolerance_percentage
     * @return float
     */
    public function getTolerancePercentage()
    {
        return $this->container['tolerance_percentage'];
    }

    /**
     * Sets tolerance_percentage
     * @param float $tolerance_percentage Reserved for internal use.
     * @return $this
     */
    public function setTolerancePercentage($tolerance_percentage)
    {
        $this->container['tolerance_percentage'] = $tolerance_percentage;

        return $this;
    }

    /**
     * Gets reasons_to_wake
     * @return object[]
     */
    public function getReasonsToWake()
    {
        return $this->container['reasons_to_wake'];
    }

    /**
     * Sets reasons_to_wake
     * @param object[] $reasons_to_wake
     * @return $this
     */
    public function setReasonsToWake($reasons_to_wake)
    {
        $this->container['reasons_to_wake'] = $reasons_to_wake;

        return $this;
    }

    /**
     * Gets modified
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param \DateTime $modified Set to any non null date to indicate the configuration should be pushed to the device when it next connects
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets force_fw
     * @return bool
     */
    public function getForceFw()
    {
        return $this->container['force_fw'];
    }

    /**
     * Sets force_fw
     * @param bool $force_fw Internal use.   Used with otaFW. Set to true to force the unit to upgrade on next connection (rather than waiting for a sleep connection
     * @return $this
     */
    public function setForceFw($force_fw)
    {
        $this->container['force_fw'] = $force_fw;

        return $this;
    }

    /**
     * Gets received_at
     * @return \DateTime
     */
    public function getReceivedAt()
    {
        return $this->container['received_at'];
    }

    /**
     * Sets received_at
     * @param \DateTime $received_at Indicates the last time the settings were sent to the device
     * @return $this
     */
    public function setReceivedAt($received_at)
    {
        $this->container['received_at'] = $received_at;

        return $this;
    }

    /**
     * Gets reset
     * @return float
     */
    public function getReset()
    {
        return $this->container['reset'];
    }

    /**
     * Sets reset
     * @param float $reset Non NULL values cause unit to restart on next connection   0 = Normal reboot   1 = Clear settings cache and restart   2 = Clear cache and bluetooth connection data, then restart
     * @return $this
     */
    public function setReset($reset)
    {
        $this->container['reset'] = $reset;

        return $this;
    }

    /**
     * Gets flash_try_count
     * @return float
     */
    public function getFlashTryCount()
    {
        return $this->container['flash_try_count'];
    }

    /**
     * Sets flash_try_count
     * @param float $flash_try_count Internal use. Set to 0 when changing otaFW
     * @return $this
     */
    public function setFlashTryCount($flash_try_count)
    {
        $this->container['flash_try_count'] = $flash_try_count;

        return $this;
    }

    /**
     * Gets home_wifi_network
     * @return string
     */
    public function getHomeWifiNetwork()
    {
        return $this->container['home_wifi_network'];
    }

    /**
     * Sets home_wifi_network
     * @param string $home_wifi_network WiFi network name to use as a Safe-zone. When this network is visible, stay asleep
     * @return $this
     */
    public function setHomeWifiNetwork($home_wifi_network)
    {
        if (!is_null($home_wifi_network) && (strlen($home_wifi_network) > 127)) {
            throw new \InvalidArgumentException('invalid length for $home_wifi_network when calling DeviceConfig., must be smaller than or equal to 127.');
        }

        $this->container['home_wifi_network'] = $home_wifi_network;

        return $this;
    }

    /**
     * Gets wake_action
     * @return string
     */
    public function getWakeAction()
    {
        return $this->container['wake_action'];
    }

    /**
     * Sets wake_action
     * @param string $wake_action What to do when the unit wakes up (ie is moved and not in a safe-zone). Options are 'available' (lost and found), and 'normal' (tracking)
     * @return $this
     */
    public function setWakeAction($wake_action)
    {
        $this->container['wake_action'] = $wake_action;

        return $this;
    }

    /**
     * Gets on_demand_time
     * @return float
     */
    public function getOnDemandTime()
    {
        return $this->container['on_demand_time'];
    }

    /**
     * Sets on_demand_time
     * @param float $on_demand_time Deprecated
     * @return $this
     */
    public function setOnDemandTime($on_demand_time)
    {
        $this->container['on_demand_time'] = $on_demand_time;

        return $this;
    }

    /**
     * Gets alert_action
     * @return string
     */
    public function getAlertAction()
    {
        return $this->container['alert_action'];
    }

    /**
     * Sets alert_action
     * @param string $alert_action What to do when the button is pressed or the unit is dropped. Options are 'available' (stay registered on the mobile network), 'nothing' (one transmission) and  'lockOn' (keep transmitting at 'interval' until instructed otherwise
     * @return $this
     */
    public function setAlertAction($alert_action)
    {
        $this->container['alert_action'] = $alert_action;

        return $this;
    }

    /**
     * Gets id
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param float $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets device_id
     * @return float
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     * @param float $device_id
     * @return $this
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

