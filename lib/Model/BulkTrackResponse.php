<?php
/**
 * BulkTrackResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Iterable API
 *
 * Iterable API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: abderrahmane.idihya@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace IterableIA\Iterable\Model;

use \ArrayAccess;
use \IterableIA\Iterable\ObjectSerializer;

/**
 * BulkTrackResponse Class Doc Comment
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulkTrackResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BulkTrackResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'success_count' => 'int',
'fail_count' => 'int',
'invalid_emails' => 'string[]',
'invalid_user_ids' => 'string[]',
'disallowed_event_names' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'success_count' => 'int32',
'fail_count' => 'int32',
'invalid_emails' => null,
'invalid_user_ids' => null,
'disallowed_event_names' => null    ];

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
        'success_count' => 'successCount',
'fail_count' => 'failCount',
'invalid_emails' => 'invalidEmails',
'invalid_user_ids' => 'invalidUserIds',
'disallowed_event_names' => 'disallowedEventNames'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'success_count' => 'setSuccessCount',
'fail_count' => 'setFailCount',
'invalid_emails' => 'setInvalidEmails',
'invalid_user_ids' => 'setInvalidUserIds',
'disallowed_event_names' => 'setDisallowedEventNames'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'success_count' => 'getSuccessCount',
'fail_count' => 'getFailCount',
'invalid_emails' => 'getInvalidEmails',
'invalid_user_ids' => 'getInvalidUserIds',
'disallowed_event_names' => 'getDisallowedEventNames'    ];

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
        $this->container['success_count'] = isset($data['success_count']) ? $data['success_count'] : null;
        $this->container['fail_count'] = isset($data['fail_count']) ? $data['fail_count'] : null;
        $this->container['invalid_emails'] = isset($data['invalid_emails']) ? $data['invalid_emails'] : null;
        $this->container['invalid_user_ids'] = isset($data['invalid_user_ids']) ? $data['invalid_user_ids'] : null;
        $this->container['disallowed_event_names'] = isset($data['disallowed_event_names']) ? $data['disallowed_event_names'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['success_count'] === null) {
            $invalidProperties[] = "'success_count' can't be null";
        }
        if ($this->container['fail_count'] === null) {
            $invalidProperties[] = "'fail_count' can't be null";
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
     * Gets success_count
     *
     * @return int
     */
    public function getSuccessCount()
    {
        return $this->container['success_count'];
    }

    /**
     * Sets success_count
     *
     * @param int $success_count success_count
     *
     * @return $this
     */
    public function setSuccessCount($success_count)
    {
        $this->container['success_count'] = $success_count;

        return $this;
    }

    /**
     * Gets fail_count
     *
     * @return int
     */
    public function getFailCount()
    {
        return $this->container['fail_count'];
    }

    /**
     * Sets fail_count
     *
     * @param int $fail_count fail_count
     *
     * @return $this
     */
    public function setFailCount($fail_count)
    {
        $this->container['fail_count'] = $fail_count;

        return $this;
    }

    /**
     * Gets invalid_emails
     *
     * @return string[]
     */
    public function getInvalidEmails()
    {
        return $this->container['invalid_emails'];
    }

    /**
     * Sets invalid_emails
     *
     * @param string[] $invalid_emails invalid_emails
     *
     * @return $this
     */
    public function setInvalidEmails($invalid_emails)
    {
        $this->container['invalid_emails'] = $invalid_emails;

        return $this;
    }

    /**
     * Gets invalid_user_ids
     *
     * @return string[]
     */
    public function getInvalidUserIds()
    {
        return $this->container['invalid_user_ids'];
    }

    /**
     * Sets invalid_user_ids
     *
     * @param string[] $invalid_user_ids invalid_user_ids
     *
     * @return $this
     */
    public function setInvalidUserIds($invalid_user_ids)
    {
        $this->container['invalid_user_ids'] = $invalid_user_ids;

        return $this;
    }

    /**
     * Gets disallowed_event_names
     *
     * @return string[]
     */
    public function getDisallowedEventNames()
    {
        return $this->container['disallowed_event_names'];
    }

    /**
     * Sets disallowed_event_names
     *
     * @param string[] $disallowed_event_names disallowed_event_names
     *
     * @return $this
     */
    public function setDisallowedEventNames($disallowed_event_names)
    {
        $this->container['disallowed_event_names'] = $disallowed_event_names;

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
