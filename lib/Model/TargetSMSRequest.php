<?php
/**
 * TargetSMSRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  IterableIA
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Iterable API
 *
 * Iterable API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: idihya@webpick.info
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace IterableIA\Model;

use \ArrayAccess;
use \IterableIA\ObjectSerializer;

/**
 * TargetSMSRequest Class Doc Comment
 *
 * @category Class
 * @package  IterableIA
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TargetSMSRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TargetSMSRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaign_id' => 'int',
'recipient_email' => 'string',
'data_fields' => 'object',
'send_at' => 'string',
'allow_repeat_marketing_sends' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaign_id' => 'int64',
'recipient_email' => null,
'data_fields' => null,
'send_at' => null,
'allow_repeat_marketing_sends' => null    ];

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
        'campaign_id' => 'campaignId',
'recipient_email' => 'recipientEmail',
'data_fields' => 'dataFields',
'send_at' => 'sendAt',
'allow_repeat_marketing_sends' => 'allowRepeatMarketingSends'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_id' => 'setCampaignId',
'recipient_email' => 'setRecipientEmail',
'data_fields' => 'setDataFields',
'send_at' => 'setSendAt',
'allow_repeat_marketing_sends' => 'setAllowRepeatMarketingSends'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_id' => 'getCampaignId',
'recipient_email' => 'getRecipientEmail',
'data_fields' => 'getDataFields',
'send_at' => 'getSendAt',
'allow_repeat_marketing_sends' => 'getAllowRepeatMarketingSends'    ];

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
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['recipient_email'] = isset($data['recipient_email']) ? $data['recipient_email'] : null;
        $this->container['data_fields'] = isset($data['data_fields']) ? $data['data_fields'] : null;
        $this->container['send_at'] = isset($data['send_at']) ? $data['send_at'] : null;
        $this->container['allow_repeat_marketing_sends'] = isset($data['allow_repeat_marketing_sends']) ? $data['allow_repeat_marketing_sends'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['recipient_email'] === null) {
            $invalidProperties[] = "'recipient_email' can't be null";
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
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id campaign_id
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets recipient_email
     *
     * @return string
     */
    public function getRecipientEmail()
    {
        return $this->container['recipient_email'];
    }

    /**
     * Sets recipient_email
     *
     * @param string $recipient_email recipient_email
     *
     * @return $this
     */
    public function setRecipientEmail($recipient_email)
    {
        $this->container['recipient_email'] = $recipient_email;

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
     * @param object $data_fields Fields to merge into template
     *
     * @return $this
     */
    public function setDataFields($data_fields)
    {
        $this->container['data_fields'] = $data_fields;

        return $this;
    }

    /**
     * Gets send_at
     *
     * @return string
     */
    public function getSendAt()
    {
        return $this->container['send_at'];
    }

    /**
     * Sets send_at
     *
     * @param string $send_at Schedule the message for up to 365 days in the future. If set in the past, message is sent immediately. Format is YYYY-MM-DD HH:MM:SS in UTC
     *
     * @return $this
     */
    public function setSendAt($send_at)
    {
        $this->container['send_at'] = $send_at;

        return $this;
    }

    /**
     * Gets allow_repeat_marketing_sends
     *
     * @return bool
     */
    public function getAllowRepeatMarketingSends()
    {
        return $this->container['allow_repeat_marketing_sends'];
    }

    /**
     * Sets allow_repeat_marketing_sends
     *
     * @param bool $allow_repeat_marketing_sends Allow repeat marketing sends? Defaults to true.
     *
     * @return $this
     */
    public function setAllowRepeatMarketingSends($allow_repeat_marketing_sends)
    {
        $this->container['allow_repeat_marketing_sends'] = $allow_repeat_marketing_sends;

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
