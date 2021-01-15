<?php
/**
 * UpsertPushTemplateModel
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
 * UpsertPushTemplateModel Class Doc Comment
 *
 * @category Class
 * @package  IterableIA\Iterable
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpsertPushTemplateModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpsertPushTemplateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_template_id' => 'string',
'name' => 'string',
'title' => 'string',
'message' => 'string',
'payload' => '\IterableIA\Iterable\Model\JsObject',
'badge' => 'string',
'locale' => '\IterableIA\Iterable\Model\IterableLocale',
'message_type_id' => 'int',
'sound' => 'string',
'deeplink' => '\IterableIA\Iterable\Model\DeeplinkURI',
'creator_user_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_template_id' => null,
'name' => null,
'title' => null,
'message' => null,
'payload' => null,
'badge' => null,
'locale' => null,
'message_type_id' => 'int32',
'sound' => null,
'deeplink' => null,
'creator_user_id' => null    ];

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
        'client_template_id' => 'clientTemplateId',
'name' => 'name',
'title' => 'title',
'message' => 'message',
'payload' => 'payload',
'badge' => 'badge',
'locale' => 'locale',
'message_type_id' => 'messageTypeId',
'sound' => 'sound',
'deeplink' => 'deeplink',
'creator_user_id' => 'creatorUserId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_template_id' => 'setClientTemplateId',
'name' => 'setName',
'title' => 'setTitle',
'message' => 'setMessage',
'payload' => 'setPayload',
'badge' => 'setBadge',
'locale' => 'setLocale',
'message_type_id' => 'setMessageTypeId',
'sound' => 'setSound',
'deeplink' => 'setDeeplink',
'creator_user_id' => 'setCreatorUserId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_template_id' => 'getClientTemplateId',
'name' => 'getName',
'title' => 'getTitle',
'message' => 'getMessage',
'payload' => 'getPayload',
'badge' => 'getBadge',
'locale' => 'getLocale',
'message_type_id' => 'getMessageTypeId',
'sound' => 'getSound',
'deeplink' => 'getDeeplink',
'creator_user_id' => 'getCreatorUserId'    ];

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
        $this->container['client_template_id'] = isset($data['client_template_id']) ? $data['client_template_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['badge'] = isset($data['badge']) ? $data['badge'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['message_type_id'] = isset($data['message_type_id']) ? $data['message_type_id'] : null;
        $this->container['sound'] = isset($data['sound']) ? $data['sound'] : null;
        $this->container['deeplink'] = isset($data['deeplink']) ? $data['deeplink'] : null;
        $this->container['creator_user_id'] = isset($data['creator_user_id']) ? $data['creator_user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['client_template_id'] === null) {
            $invalidProperties[] = "'client_template_id' can't be null";
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
     * Gets client_template_id
     *
     * @return string
     */
    public function getClientTemplateId()
    {
        return $this->container['client_template_id'];
    }

    /**
     * Sets client_template_id
     *
     * @param string $client_template_id Id used by the client to identify a template. If multiple templates exist with the Id, all will be updated
     *
     * @return $this
     */
    public function setClientTemplateId($client_template_id)
    {
        $this->container['client_template_id'] = $client_template_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the template
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Push message title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $message Push message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return \IterableIA\Iterable\Model\JsObject
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \IterableIA\Iterable\Model\JsObject $payload payload
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets badge
     *
     * @return string
     */
    public function getBadge()
    {
        return $this->container['badge'];
    }

    /**
     * Sets badge
     *
     * @param string $badge Badge to set for push notification
     *
     * @return $this
     */
    public function setBadge($badge)
    {
        $this->container['badge'] = $badge;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return \IterableIA\Iterable\Model\IterableLocale
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param \IterableIA\Iterable\Model\IterableLocale $locale locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets message_type_id
     *
     * @return int
     */
    public function getMessageTypeId()
    {
        return $this->container['message_type_id'];
    }

    /**
     * Sets message_type_id
     *
     * @param int $message_type_id Message Type Id
     *
     * @return $this
     */
    public function setMessageTypeId($message_type_id)
    {
        $this->container['message_type_id'] = $message_type_id;

        return $this;
    }

    /**
     * Gets sound
     *
     * @return string
     */
    public function getSound()
    {
        return $this->container['sound'];
    }

    /**
     * Sets sound
     *
     * @param string $sound Sound
     *
     * @return $this
     */
    public function setSound($sound)
    {
        $this->container['sound'] = $sound;

        return $this;
    }

    /**
     * Gets deeplink
     *
     * @return \IterableIA\Iterable\Model\DeeplinkURI
     */
    public function getDeeplink()
    {
        return $this->container['deeplink'];
    }

    /**
     * Sets deeplink
     *
     * @param \IterableIA\Iterable\Model\DeeplinkURI $deeplink deeplink
     *
     * @return $this
     */
    public function setDeeplink($deeplink)
    {
        $this->container['deeplink'] = $deeplink;

        return $this;
    }

    /**
     * Gets creator_user_id
     *
     * @return string
     */
    public function getCreatorUserId()
    {
        return $this->container['creator_user_id'];
    }

    /**
     * Sets creator_user_id
     *
     * @param string $creator_user_id Specify a specific creator user id (email). The email must be an existing member of the project. Defaults to the organization creator.
     *
     * @return $this
     */
    public function setCreatorUserId($creator_user_id)
    {
        $this->container['creator_user_id'] = $creator_user_id;

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
