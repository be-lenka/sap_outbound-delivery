# BeLenka\SAP\OutboundDelivery\OutboundDeliveryPartnerAddressesApi

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet()**](OutboundDeliveryPartnerAddressesApi.md#aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet) | **GET** /A_OutbDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address | Reads addresses of specific outbound delivery partner. |


## `aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet()`

```php
aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet($partner_function, $sd_document, $select): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryAddressType
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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryPartnerAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partner_function = 'partner_function_example'; // string | Partner Functn
$sd_document = 'sd_document_example'; // string | SD Document
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet($partner_function, $sd_document, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryPartnerAddressesApi->aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **partner_function** | **string**| Partner Functn | |
| **sd_document** | **string**| SD Document | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryAddressType**](../Model/AOutbDeliveryAddressType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
