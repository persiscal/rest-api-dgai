<?php
/**
 * TipoDocumento
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
use \Swagger\Client\ObjectSerializer;

/**
 * TipoDocumento Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TipoDocumento
{
    /**
     * Possible values of this enum
     */
    const LE = 'LE';
    const LC = 'LC';
    const DNI = 'DNI';
    const PAS = 'PAS';
    const CI = 'CI';
    const EXT = 'EXT';
    const CUIT = 'CUIT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LE,
            self::LC,
            self::DNI,
            self::PAS,
            self::CI,
            self::EXT,
            self::CUIT,
        ];
    }
}


