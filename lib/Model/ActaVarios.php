<?php
/**
 * ActaVarios
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
 * ActaVarios Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActaVarios implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActaVarios';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'modalidad_acta' => 'string',
        'nro_acta' => 'string',
        'expediente_electronico' => 'string',
        'fecha_acta' => '\DateTime',
        'denuncia' => 'BigDecimal',
        'clausura' => 'bool',
        'secuestro' => 'bool',
        'decomiso' => 'bool',
        'descripcion' => 'string',
        'imagen_acta' => 'string',
        'imagenes_prueba' => 'string',
        'acta_secuestro' => 'string',
        'inspector' => '\Swagger\Client\Model\Inspector',
        'infraccion' => '\Swagger\Client\Model\Infraccion',
        'atendido_por' => '\Swagger\Client\Model\ActaVariosAtendidoPor',
        'testigos' => '\Swagger\Client\Model\Persona[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'modalidad_acta' => null,
        'nro_acta' => null,
        'expediente_electronico' => null,
        'fecha_acta' => 'date',
        'denuncia' => 'number',
        'clausura' => null,
        'secuestro' => null,
        'decomiso' => null,
        'descripcion' => null,
        'imagen_acta' => 'byte',
        'imagenes_prueba' => 'byte',
        'acta_secuestro' => 'byte',
        'inspector' => null,
        'infraccion' => null,
        'atendido_por' => null,
        'testigos' => null
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
        'modalidad_acta' => 'modalidadActa',
        'nro_acta' => 'nroActa',
        'expediente_electronico' => 'expedienteElectronico',
        'fecha_acta' => 'fechaActa',
        'denuncia' => 'denuncia',
        'clausura' => 'clausura',
        'secuestro' => 'secuestro',
        'decomiso' => 'decomiso',
        'descripcion' => 'descripcion',
        'imagen_acta' => 'imagenActa',
        'imagenes_prueba' => 'imagenesPrueba',
        'acta_secuestro' => 'actaSecuestro',
        'inspector' => 'inspector',
        'infraccion' => 'infraccion',
        'atendido_por' => 'atendidoPor',
        'testigos' => 'testigos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modalidad_acta' => 'setModalidadActa',
        'nro_acta' => 'setNroActa',
        'expediente_electronico' => 'setExpedienteElectronico',
        'fecha_acta' => 'setFechaActa',
        'denuncia' => 'setDenuncia',
        'clausura' => 'setClausura',
        'secuestro' => 'setSecuestro',
        'decomiso' => 'setDecomiso',
        'descripcion' => 'setDescripcion',
        'imagen_acta' => 'setImagenActa',
        'imagenes_prueba' => 'setImagenesPrueba',
        'acta_secuestro' => 'setActaSecuestro',
        'inspector' => 'setInspector',
        'infraccion' => 'setInfraccion',
        'atendido_por' => 'setAtendidoPor',
        'testigos' => 'setTestigos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modalidad_acta' => 'getModalidadActa',
        'nro_acta' => 'getNroActa',
        'expediente_electronico' => 'getExpedienteElectronico',
        'fecha_acta' => 'getFechaActa',
        'denuncia' => 'getDenuncia',
        'clausura' => 'getClausura',
        'secuestro' => 'getSecuestro',
        'decomiso' => 'getDecomiso',
        'descripcion' => 'getDescripcion',
        'imagen_acta' => 'getImagenActa',
        'imagenes_prueba' => 'getImagenesPrueba',
        'acta_secuestro' => 'getActaSecuestro',
        'inspector' => 'getInspector',
        'infraccion' => 'getInfraccion',
        'atendido_por' => 'getAtendidoPor',
        'testigos' => 'getTestigos'
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

    const MODALIDAD_ACTA_I = 'I';
    const MODALIDAD_ACTA_V = 'V';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModalidadActaAllowableValues()
    {
        return [
            self::MODALIDAD_ACTA_I,
            self::MODALIDAD_ACTA_V,
        ];
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
        $this->container['modalidad_acta'] = isset($data['modalidad_acta']) ? $data['modalidad_acta'] : null;
        $this->container['nro_acta'] = isset($data['nro_acta']) ? $data['nro_acta'] : null;
        $this->container['expediente_electronico'] = isset($data['expediente_electronico']) ? $data['expediente_electronico'] : null;
        $this->container['fecha_acta'] = isset($data['fecha_acta']) ? $data['fecha_acta'] : null;
        $this->container['denuncia'] = isset($data['denuncia']) ? $data['denuncia'] : null;
        $this->container['clausura'] = isset($data['clausura']) ? $data['clausura'] : null;
        $this->container['secuestro'] = isset($data['secuestro']) ? $data['secuestro'] : null;
        $this->container['decomiso'] = isset($data['decomiso']) ? $data['decomiso'] : null;
        $this->container['descripcion'] = isset($data['descripcion']) ? $data['descripcion'] : null;
        $this->container['imagen_acta'] = isset($data['imagen_acta']) ? $data['imagen_acta'] : null;
        $this->container['imagenes_prueba'] = isset($data['imagenes_prueba']) ? $data['imagenes_prueba'] : null;
        $this->container['acta_secuestro'] = isset($data['acta_secuestro']) ? $data['acta_secuestro'] : null;
        $this->container['inspector'] = isset($data['inspector']) ? $data['inspector'] : null;
        $this->container['infraccion'] = isset($data['infraccion']) ? $data['infraccion'] : null;
        $this->container['atendido_por'] = isset($data['atendido_por']) ? $data['atendido_por'] : null;
        $this->container['testigos'] = isset($data['testigos']) ? $data['testigos'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModalidadActaAllowableValues();
        if (!is_null($this->container['modalidad_acta']) && !in_array($this->container['modalidad_acta'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'modalidad_acta', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['nro_acta'] === null) {
            $invalidProperties[] = "'nro_acta' can't be null";
        }
        if ((mb_strlen($this->container['nro_acta']) > 9)) {
            $invalidProperties[] = "invalid value for 'nro_acta', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['expediente_electronico']) && (mb_strlen($this->container['expediente_electronico']) > 42)) {
            $invalidProperties[] = "invalid value for 'expediente_electronico', the character length must be smaller than or equal to 42.";
        }

        if ($this->container['fecha_acta'] === null) {
            $invalidProperties[] = "'fecha_acta' can't be null";
        }
        if (!is_null($this->container['denuncia']) && (mb_strlen($this->container['denuncia']) > 11)) {
            $invalidProperties[] = "invalid value for 'denuncia', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['descripcion']) && (mb_strlen($this->container['descripcion']) > 500)) {
            $invalidProperties[] = "invalid value for 'descripcion', the character length must be smaller than or equal to 500.";
        }

        if ($this->container['imagen_acta'] === null) {
            $invalidProperties[] = "'imagen_acta' can't be null";
        }
        if (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['imagen_acta'])) {
            $invalidProperties[] = "invalid value for 'imagen_acta', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['imagenes_prueba']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['imagenes_prueba'])) {
            $invalidProperties[] = "invalid value for 'imagenes_prueba', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if (!is_null($this->container['acta_secuestro']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['acta_secuestro'])) {
            $invalidProperties[] = "invalid value for 'acta_secuestro', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        if ($this->container['inspector'] === null) {
            $invalidProperties[] = "'inspector' can't be null";
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
     * Gets modalidad_acta
     *
     * @return string
     */
    public function getModalidadActa()
    {
        return $this->container['modalidad_acta'];
    }

    /**
     * Sets modalidad_acta
     *
     * @param string $modalidad_acta modalidad_acta
     *
     * @return $this
     */
    public function setModalidadActa($modalidad_acta)
    {
        $allowedValues = $this->getModalidadActaAllowableValues();
        if (!is_null($modalidad_acta) && !in_array($modalidad_acta, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'modalidad_acta', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['modalidad_acta'] = $modalidad_acta;

        return $this;
    }

    /**
     * Gets nro_acta
     *
     * @return string
     */
    public function getNroActa()
    {
        return $this->container['nro_acta'];
    }

    /**
     * Sets nro_acta
     *
     * @param string $nro_acta nro_acta
     *
     * @return $this
     */
    public function setNroActa($nro_acta)
    {
        if ((mb_strlen($nro_acta) > 9)) {
            throw new \InvalidArgumentException('invalid length for $nro_acta when calling ActaVarios., must be smaller than or equal to 9.');
        }

        $this->container['nro_acta'] = $nro_acta;

        return $this;
    }

    /**
     * Gets expediente_electronico
     *
     * @return string
     */
    public function getExpedienteElectronico()
    {
        return $this->container['expediente_electronico'];
    }

    /**
     * Sets expediente_electronico
     *
     * @param string $expediente_electronico expediente_electronico
     *
     * @return $this
     */
    public function setExpedienteElectronico($expediente_electronico)
    {
        if (!is_null($expediente_electronico) && (mb_strlen($expediente_electronico) > 42)) {
            throw new \InvalidArgumentException('invalid length for $expediente_electronico when calling ActaVarios., must be smaller than or equal to 42.');
        }

        $this->container['expediente_electronico'] = $expediente_electronico;

        return $this;
    }

    /**
     * Gets fecha_acta
     *
     * @return \DateTime
     */
    public function getFechaActa()
    {
        return $this->container['fecha_acta'];
    }

    /**
     * Sets fecha_acta
     *
     * @param \DateTime $fecha_acta fecha_acta
     *
     * @return $this
     */
    public function setFechaActa($fecha_acta)
    {
        $this->container['fecha_acta'] = $fecha_acta;

        return $this;
    }

    /**
     * Gets denuncia
     *
     * @return BigDecimal
     */
    public function getDenuncia()
    {
        return $this->container['denuncia'];
    }

    /**
     * Sets denuncia
     *
     * @param BigDecimal $denuncia denuncia
     *
     * @return $this
     */
    public function setDenuncia($denuncia)
    {
        if (!is_null($denuncia) && (mb_strlen($denuncia) > 11)) {
            throw new \InvalidArgumentException('invalid length for $denuncia when calling ActaVarios., must be smaller than or equal to 11.');
        }

        $this->container['denuncia'] = $denuncia;

        return $this;
    }

    /**
     * Gets clausura
     *
     * @return bool
     */
    public function getClausura()
    {
        return $this->container['clausura'];
    }

    /**
     * Sets clausura
     *
     * @param bool $clausura clausura
     *
     * @return $this
     */
    public function setClausura($clausura)
    {
        $this->container['clausura'] = $clausura;

        return $this;
    }

    /**
     * Gets secuestro
     *
     * @return bool
     */
    public function getSecuestro()
    {
        return $this->container['secuestro'];
    }

    /**
     * Sets secuestro
     *
     * @param bool $secuestro secuestro
     *
     * @return $this
     */
    public function setSecuestro($secuestro)
    {
        $this->container['secuestro'] = $secuestro;

        return $this;
    }

    /**
     * Gets decomiso
     *
     * @return bool
     */
    public function getDecomiso()
    {
        return $this->container['decomiso'];
    }

    /**
     * Sets decomiso
     *
     * @param bool $decomiso decomiso
     *
     * @return $this
     */
    public function setDecomiso($decomiso)
    {
        $this->container['decomiso'] = $decomiso;

        return $this;
    }

    /**
     * Gets descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->container['descripcion'];
    }

    /**
     * Sets descripcion
     *
     * @param string $descripcion descripcion
     *
     * @return $this
     */
    public function setDescripcion($descripcion)
    {
        if (!is_null($descripcion) && (mb_strlen($descripcion) > 500)) {
            throw new \InvalidArgumentException('invalid length for $descripcion when calling ActaVarios., must be smaller than or equal to 500.');
        }

        $this->container['descripcion'] = $descripcion;

        return $this;
    }

    /**
     * Gets imagen_acta
     *
     * @return string
     */
    public function getImagenActa()
    {
        return $this->container['imagen_acta'];
    }

    /**
     * Sets imagen_acta
     *
     * @param string $imagen_acta imagen_acta
     *
     * @return $this
     */
    public function setImagenActa($imagen_acta)
    {

        if ((!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $imagen_acta))) {
            throw new \InvalidArgumentException("invalid value for $imagen_acta when calling ActaVarios., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['imagen_acta'] = $imagen_acta;

        return $this;
    }

    /**
     * Gets imagenes_prueba
     *
     * @return string
     */
    public function getImagenesPrueba()
    {
        return $this->container['imagenes_prueba'];
    }

    /**
     * Sets imagenes_prueba
     *
     * @param string $imagenes_prueba imagenes_prueba
     *
     * @return $this
     */
    public function setImagenesPrueba($imagenes_prueba)
    {

        if (!is_null($imagenes_prueba) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $imagenes_prueba))) {
            throw new \InvalidArgumentException("invalid value for $imagenes_prueba when calling ActaVarios., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['imagenes_prueba'] = $imagenes_prueba;

        return $this;
    }

    /**
     * Gets acta_secuestro
     *
     * @return string
     */
    public function getActaSecuestro()
    {
        return $this->container['acta_secuestro'];
    }

    /**
     * Sets acta_secuestro
     *
     * @param string $acta_secuestro acta_secuestro
     *
     * @return $this
     */
    public function setActaSecuestro($acta_secuestro)
    {

        if (!is_null($acta_secuestro) && (!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $acta_secuestro))) {
            throw new \InvalidArgumentException("invalid value for $acta_secuestro when calling ActaVarios., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['acta_secuestro'] = $acta_secuestro;

        return $this;
    }

    /**
     * Gets inspector
     *
     * @return \Swagger\Client\Model\Inspector
     */
    public function getInspector()
    {
        return $this->container['inspector'];
    }

    /**
     * Sets inspector
     *
     * @param \Swagger\Client\Model\Inspector $inspector inspector
     *
     * @return $this
     */
    public function setInspector($inspector)
    {
        $this->container['inspector'] = $inspector;

        return $this;
    }

    /**
     * Gets infraccion
     *
     * @return \Swagger\Client\Model\Infraccion
     */
    public function getInfraccion()
    {
        return $this->container['infraccion'];
    }

    /**
     * Sets infraccion
     *
     * @param \Swagger\Client\Model\Infraccion $infraccion infraccion
     *
     * @return $this
     */
    public function setInfraccion($infraccion)
    {
        $this->container['infraccion'] = $infraccion;

        return $this;
    }

    /**
     * Gets atendido_por
     *
     * @return \Swagger\Client\Model\ActaVariosAtendidoPor
     */
    public function getAtendidoPor()
    {
        return $this->container['atendido_por'];
    }

    /**
     * Sets atendido_por
     *
     * @param \Swagger\Client\Model\ActaVariosAtendidoPor $atendido_por atendido_por
     *
     * @return $this
     */
    public function setAtendidoPor($atendido_por)
    {
        $this->container['atendido_por'] = $atendido_por;

        return $this;
    }

    /**
     * Gets testigos
     *
     * @return \Swagger\Client\Model\Persona[]
     */
    public function getTestigos()
    {
        return $this->container['testigos'];
    }

    /**
     * Sets testigos
     *
     * @param \Swagger\Client\Model\Persona[] $testigos testigos
     *
     * @return $this
     */
    public function setTestigos($testigos)
    {
        $this->container['testigos'] = $testigos;

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

