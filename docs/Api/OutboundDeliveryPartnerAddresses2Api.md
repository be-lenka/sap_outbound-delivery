# BeLenka\SAP\OutboundDelivery\OutboundDeliveryPartnerAddresses2Api

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionGet()**](OutboundDeliveryPartnerAddresses2Api.md#aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionGet) | **GET** /A_OutbDeliveryAddress2(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Reads outbound delivery partner addresses. |
| [**aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionPatch()**](OutboundDeliveryPartnerAddresses2Api.md#aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionPatch) | **PATCH** /A_OutbDeliveryAddress2(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Updates outbound delivery partner addresses. |
| [**aOutbDeliveryAddress2Get()**](OutboundDeliveryPartnerAddresses2Api.md#aOutbDeliveryAddress2Get) | **GET** /A_OutbDeliveryAddress2 | Reads outbound delivery partner addresses. |
| [**aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddress2Get()**](OutboundDeliveryPartnerAddresses2Api.md#aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddress2Get) | **GET** /A_OutbDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address2 | Reads addresses of specific outbound delivery partner. |


## `aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionGet()`

```php
aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionGet($delivery_document, $partner_function, $select): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryAddress2Type
```

Reads outbound delivery partner addresses.

Reads all outbound delivery partner addresses. You can narrow down the result by specifying filter conditions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryPartnerAddresses2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | SD Document
$partner_function = 'partner_function_example'; // string | Partner Functn
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionGet($delivery_document, $partner_function, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryPartnerAddresses2Api->aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| SD Document | |
| **partner_function** | **string**| Partner Functn | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryAddress2Type**](../Model/AOutbDeliveryAddress2Type.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionPatch()`

```php
aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionPatch($delivery_document, $partner_function, $modified_a_outb_delivery_address2_type)
```

Updates outbound delivery partner addresses.

Updates outbound delivery partner addresses using the delivery document and the partner function.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryPartnerAddresses2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | SD Document
$partner_function = 'partner_function_example'; // string | Partner Functn
$modified_a_outb_delivery_address2_type = new \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryAddress2Type(); // \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryAddress2Type | New property values

try {
    $apiInstance->aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionPatch($delivery_document, $partner_function, $modified_a_outb_delivery_address2_type);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryPartnerAddresses2Api->aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| SD Document | |
| **partner_function** | **string**| Partner Functn | |
| **modified_a_outb_delivery_address2_type** | [**\BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryAddress2Type**](../Model/ModifiedAOutbDeliveryAddress2Type.md)| New property values | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryAddress2Get()`

```php
aOutbDeliveryAddress2Get($top, $skip, $search, $filter, $inlinecount, $select): \BeLenka\SAP\OutboundDelivery\Model\Wrapper
```

Reads outbound delivery partner addresses.

Reads all outbound delivery partner addresses. You can narrow down the result by specifying filter conditions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryPartnerAddresses2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$search = 'search_example'; // string | Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aOutbDeliveryAddress2Get($top, $skip, $search, $filter, $inlinecount, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryPartnerAddresses2Api->aOutbDeliveryAddress2Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **search** | **string**| Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper**](../Model/Wrapper.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddress2Get()`

```php
aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddress2Get($partner_function, $sd_document, $select): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryAddress2Type
```

Reads addresses of specific outbound delivery partner.

Reads all addresses of a specific outbound delivery partner. You can narrow down the result by specifying filter conditions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryPartnerAddresses2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_function = 'partner_function_example'; // string | Partner Functn
$sd_document = 'sd_document_example'; // string | SD Document
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddress2Get($partner_function, $sd_document, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryPartnerAddresses2Api->aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddress2Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **partner_function** | **string**| Partner Functn | |
| **sd_document** | **string**| SD Document | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryAddress2Type**](../Model/AOutbDeliveryAddress2Type.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
