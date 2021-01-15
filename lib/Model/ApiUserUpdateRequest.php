<?php
/**
 * ApiUserUpdateRequest
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
 * ApiUserUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiUserUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApiUserUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
'data_fields' => 'object',
'user_id' => 'string',
'prefer_user_id' => 'bool',
'merge_nested_objects' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
'data_fields' => null,
'user_id' => null,
'prefer_user_id' => null,
'merge_nested_objects' => null    ];

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
        'email' => 'email',
'data_fields' => 'dataFields',
'user_id' => 'userId',
'prefer_user_id' => 'preferUserId',
'merge_nested_objects' => 'mergeNestedObjects'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
'data_fields' => 'setDataFields',
'user_id' => 'setUserId',
'prefer_user_id' => 'setPreferUserId',
'merge_nested_objects' => 'setMergeNestedObjects'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
'data_fields' => 'getDataFields',
'user_id' => 'getUserId',
'prefer_user_id' => 'getPreferUserId',
'merge_nested_objects' => 'getMergeNestedObjects'    ];

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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['data_fields'] = isset($data['data_fields']) ? $data['data_fields'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['prefer_user_id'] = isset($data['prefer_user_id']) ? $data['prefer_user_id'] : null;
        $this->container['merge_nested_objects'] = isset($data['merge_nested_objects']) ? $data['merge_nested_objects'] : null;
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Either email or userId must be passed in to identify the user. If both are passed in, email takes precedence.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets data_fields
     *
     * @return object
     */
    public function getDataFields()
    {
        return $this->container['data_fields'];
    }

    /**
     * Sets data_fields
     *
     * @param object $data_fields Data fields to store in the user profile
     *
     * @return $this
     */
    public function setDataFields($data_fields)
    {
        $this->container['data_fields'] = $data_fields;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id Optional userId, typically your database generated id. Either email or userId must be specified.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets prefer_user_id
     *
     * @return bool
     */
    public function getPreferUserId()
    {
        return $this->container['prefer_user_id'];
    }

    /**
     * Sets prefer_user_id
     *
     * @param bool $prefer_user_id Create a new user with the specified userId if the user does not exist yet.
     *
     * @return $this
     */
    public function setPreferUserId($prefer_user_id)
    {
        $this->container['prefer_user_id'] = $prefer_user_id;

        return $this;
    }

    /**
     * Gets merge_nested_objects
     *
     * @return bool
     */
    public function getMergeNestedObjects()
    {
        return $this->container['merge_nested_objects'];
    }

    /**
     * Sets merge_nested_objects
     *
     * @param bool $merge_nested_objects Merge top level objects instead of overwriting (default: false). e.g. if user profile has data: {mySettings:{mobile:true}} and change contact field has data: {mySettings:{email:true}}, the resulting profile: {mySettings:{mobile:true,email:true}}
     *
     * @return $this
     */
    public function setMergeNestedObjects($merge_nested_objects)
    {
        $this->container['merge_nested_objects'] = $merge_nested_objects;

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
