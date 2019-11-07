<?php
/**
 * Infraccion
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SAI Sistema de Administracion de Infracciones - Acta Digital
 *
 * VersiÃ³n REST del web service de DGAI que recibe acta de infracciones para incorporarlas al SAI.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: scarabetta@buenosaires.gob.ar
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
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
 * Infraccion Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Infraccion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Infraccion';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lugar' => '\Swagger\Client\Model\Lugar',
        'infracciones' => 'int[]',
        'infractor' => '\Swagger\Client\Model\Infractor'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lugar' => null,
        'infracciones' => null,
        'infractor' => null
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
        'lugar' => 'lugar',
        'infracciones' => 'infracciones',
        'infractor' => 'infractor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lugar' => 'setLugar',
        'infracciones' => 'setInfracciones',
        'infractor' => 'setInfractor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lugar' => 'getLugar',
        'infracciones' => 'getInfracciones',
        'infractor' => 'getInfractor'
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
        $this->container['lugar'] = isset($data['lugar']) ? $data['lugar'] : null;
        $this->container['infracciones'] = isset($data['infracciones']) ? $data['infracciones'] : null;
        $this->container['infractor'] = isset($data['infractor']) ? $data['infractor'] : null;
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
     * Gets lugar
     *
     * @return \Swagger\Client\Model\Lugar
     */
    public function getLugar()
    {
        return $this->container['lugar'];
    }

    /**
     * Sets lugar
     *
     * @param \Swagger\Client\Model\Lugar $lugar lugar
     *
     * @return $this
     */
    public function setLugar($lugar)
    {
        $this->container['lugar'] = $lugar;

        return $this;
    }

    /**
     * Gets infracciones
     *
     * @return int[]
     */
    public function getInfracciones()
    {
        return $this->container['infracciones'];
    }

    /**
     * Sets infracciones
     *
     * @param int[] $infracciones infracciones
     *
     * @return $this
     */
    public function setInfracciones($infracciones)
    {
        $this->container['infracciones'] = $infracciones;

        return $this;
    }

    /**
     * Gets infractor
     *
     * @return \Swagger\Client\Model\Infractor
     */
    public function getInfractor()
    {
        return $this->container['infractor'];
    }

    /**
     * Sets infractor
     *
     * @param \Swagger\Client\Model\Infractor $infractor infractor
     *
     * @return $this
     */
    public function setInfractor($infractor)
    {
        $this->container['infractor'] = $infractor;

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


