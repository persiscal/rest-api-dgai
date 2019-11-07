# Swagger\Client\DefaultApi

All URIs are relative to *https://servicios.gcba.gob.ar/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actasVariosNroActaResultadoGet**](DefaultApi.md#actasVariosNroActaResultadoGet) | **GET** /actas-varios/{nroActa}/resultado | Buscar resultado de envio
[**crearActaVarios**](DefaultApi.md#crearActaVarios) | **POST** /actas-varios | Crear nueva Acta de Infraccion (Varios)


# **actasVariosNroActaResultadoGet**
> \Swagger\Client\Model\InlineResponse201 actasVariosNroActaResultadoGet()

Buscar resultado de envio

Busca el resultado del envio del acta cuyo numero se indica. Usado cuando al enviar el acta se devolvio un codigo 202 indicando que se aceptaba para su tramite diferido.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->actasVariosNroActaResultadoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->actasVariosNroActaResultadoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **crearActaVarios**
> \Swagger\Client\Model\InlineResponse201 crearActaVarios($reparticion, $acta)

Crear nueva Acta de Infraccion (Varios)

Registra una nueva Acta de Infraccion de tipo \"varios\" para ser incorporada y publicada por el SAI, devolviendo el codigo interno que el sistema le asigne. En caso de no poder invocar el web service de SAI, se aceptan los datos y se encola el pedido para ser reintentado mas tarde. En este caso se utiliza otro metodo para obtener el codigo interno.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('client_id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('client_id', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reparticion = "reparticion_example"; // string | Es la reparticion que envia el acta, de acuerdo a la codificacion acordada con DGAI.
$acta = new \Swagger\Client\Model\ActaVarios(); // \Swagger\Client\Model\ActaVarios | Datos del acta que se necesita incorporar.

try {
    $result = $apiInstance->crearActaVarios($reparticion, $acta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->crearActaVarios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reparticion** | **string**| Es la reparticion que envia el acta, de acuerdo a la codificacion acordada con DGAI. |
 **acta** | [**\Swagger\Client\Model\ActaVarios**](../Model/ActaVarios.md)| Datos del acta que se necesita incorporar. |

### Return type

[**\Swagger\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

