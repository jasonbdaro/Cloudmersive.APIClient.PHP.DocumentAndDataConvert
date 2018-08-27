<?php
/**
 * XlsxImage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * convertapi
 *
 * Convert API lets you effortlessly convert file formats and types.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
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
 * XlsxImage Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XlsxImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XlsxImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'path' => 'string',
        'image_data_embed_id' => 'string',
        'image_data_content_type' => 'string',
        'image_internal_file_name' => 'string',
        'image_contents_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'path' => null,
        'image_data_embed_id' => null,
        'image_data_content_type' => null,
        'image_internal_file_name' => null,
        'image_contents_url' => null
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
        'path' => 'Path',
        'image_data_embed_id' => 'ImageDataEmbedId',
        'image_data_content_type' => 'ImageDataContentType',
        'image_internal_file_name' => 'ImageInternalFileName',
        'image_contents_url' => 'ImageContentsURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'path' => 'setPath',
        'image_data_embed_id' => 'setImageDataEmbedId',
        'image_data_content_type' => 'setImageDataContentType',
        'image_internal_file_name' => 'setImageInternalFileName',
        'image_contents_url' => 'setImageContentsUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'path' => 'getPath',
        'image_data_embed_id' => 'getImageDataEmbedId',
        'image_data_content_type' => 'getImageDataContentType',
        'image_internal_file_name' => 'getImageInternalFileName',
        'image_contents_url' => 'getImageContentsUrl'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['image_data_embed_id'] = isset($data['image_data_embed_id']) ? $data['image_data_embed_id'] : null;
        $this->container['image_data_content_type'] = isset($data['image_data_content_type']) ? $data['image_data_content_type'] : null;
        $this->container['image_internal_file_name'] = isset($data['image_internal_file_name']) ? $data['image_internal_file_name'] : null;
        $this->container['image_contents_url'] = isset($data['image_contents_url']) ? $data['image_contents_url'] : null;
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
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path The Path of the location of this object; leave blank for new rows
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets image_data_embed_id
     *
     * @return string
     */
    public function getImageDataEmbedId()
    {
        return $this->container['image_data_embed_id'];
    }

    /**
     * Sets image_data_embed_id
     *
     * @param string $image_data_embed_id Read-only; internal ID for the image contents
     *
     * @return $this
     */
    public function setImageDataEmbedId($image_data_embed_id)
    {
        $this->container['image_data_embed_id'] = $image_data_embed_id;

        return $this;
    }

    /**
     * Gets image_data_content_type
     *
     * @return string
     */
    public function getImageDataContentType()
    {
        return $this->container['image_data_content_type'];
    }

    /**
     * Sets image_data_content_type
     *
     * @param string $image_data_content_type Read-only; image data MIME content-type
     *
     * @return $this
     */
    public function setImageDataContentType($image_data_content_type)
    {
        $this->container['image_data_content_type'] = $image_data_content_type;

        return $this;
    }

    /**
     * Gets image_internal_file_name
     *
     * @return string
     */
    public function getImageInternalFileName()
    {
        return $this->container['image_internal_file_name'];
    }

    /**
     * Sets image_internal_file_name
     *
     * @param string $image_internal_file_name Read-only; internal file name/path for the image
     *
     * @return $this
     */
    public function setImageInternalFileName($image_internal_file_name)
    {
        $this->container['image_internal_file_name'] = $image_internal_file_name;

        return $this;
    }

    /**
     * Gets image_contents_url
     *
     * @return string
     */
    public function getImageContentsUrl()
    {
        return $this->container['image_contents_url'];
    }

    /**
     * Sets image_contents_url
     *
     * @param string $image_contents_url URL to the image contents; file is stored in an in-memory cache and will be deleted.  Call Finish-Editing to get the contents.
     *
     * @return $this
     */
    public function setImageContentsUrl($image_contents_url)
    {
        $this->container['image_contents_url'] = $image_contents_url;

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


