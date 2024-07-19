# BeLenka\SAP\OutboundDelivery\HandlingUnitHeadersApi

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aHandlingUnitHeaderDeliveryPost()**](HandlingUnitHeadersApi.md#aHandlingUnitHeaderDeliveryPost) | **POST** /A_HandlingUnitHeaderDelivery | Creates handling unit headers. |
| [**aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet()**](HandlingUnitHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_HandlingUnitHeaderDelivery | Reads handling units headers of specific outbound delivery header. |


## `aHandlingUnitHeaderDeliveryPost()`

```php
aHandlingUnitHeaderDeliveryPost($apioutbounddeliverysrva_handling_unit_header_delivery_type_create): \BeLenka\SAP\OutboundDelivery\Model\AHandlingUnitHeaderDeliveryType
```

Creates handling unit headers.

Creates handling unit headers using the delivery document.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\HandlingUnitHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apioutbounddeliverysrva_handling_unit_header_delivery_type_create = new \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeCreate(); // \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeCreate | New entity

try {
    $result = $apiInstance->aHandlingUnitHeaderDeliveryPost($apioutbounddeliverysrva_handling_unit_header_delivery_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HandlingUnitHeadersApi->aHandlingUnitHeaderDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apioutbounddeliverysrva_handling_unit_header_delivery_type_create** | [**\BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeCreate**](../Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AHandlingUnitHeaderDeliveryType**](../Model/AHandlingUnitHeaderDeliveryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet()`

```php
aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet($delivery_document, $search, $filter, $inlinecount, $select, $expand): \BeLenka\SAP\OutboundDelivery\Model\Wrapper6
```

Reads handling units headers of specific outbound delivery header.

Reads all handling units headers of a specific outbound delivery header. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\HandlingUnitHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$search = 'search_example'; // string | Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet($delivery_document, $search, $filter, $inlinecount, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HandlingUnitHeadersApi->aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **search** | **string**| Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper6**](../Model/Wrapper6.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
