# BeLenka\SAP\OutboundDelivery\OutboundDeliveryHeadersApi

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aOutbDeliveryHeaderDeliveryDocumentDelete()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentDelete) | **DELETE** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Deletes outbound deliveries. |
| [**aOutbDeliveryHeaderDeliveryDocumentGet()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentGet) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Reads outbound delivery headers. |
| [**aOutbDeliveryHeaderDeliveryDocumentPatch()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentPatch) | **PATCH** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Updates outbound delivery headers. |
| [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentItem | Reads items of specific outbound delivery header. |
| [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentPartner | Reads partners of specific outbound delivery header. |
| [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentText | Reads texts of specific outbound delivery header. |
| [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost) | **POST** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentText | Creates outbound delivery header texts. |
| [**aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_HandlingUnitHeaderDelivery | Reads handling units headers of specific outbound delivery header. |
| [**aOutbDeliveryHeaderGet()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderGet) | **GET** /A_OutbDeliveryHeader | Reads outbound delivery headers. |
| [**aOutbDeliveryHeaderPost()**](OutboundDeliveryHeadersApi.md#aOutbDeliveryHeaderPost) | **POST** /A_OutbDeliveryHeader | Creates outbound deliveries with reference to preceding document. |
| [**addSerialNumberToDeliveryItemPost()**](OutboundDeliveryHeadersApi.md#addSerialNumberToDeliveryItemPost) | **POST** /AddSerialNumberToDeliveryItem | Adds serial number to outbound delivery item. |
| [**assignHandlingUnitToDeliveryPost()**](OutboundDeliveryHeadersApi.md#assignHandlingUnitToDeliveryPost) | **POST** /AssignHandlingUnitToDelivery | Invoke action AssignHandlingUnitToDelivery |
| [**confirmPickingAllItemsPost()**](OutboundDeliveryHeadersApi.md#confirmPickingAllItemsPost) | **POST** /ConfirmPickingAllItems | Confirms picked quantity of outbound delivery items. |
| [**confirmPickingOneItemPost()**](OutboundDeliveryHeadersApi.md#confirmPickingOneItemPost) | **POST** /ConfirmPickingOneItem | Confirms picked quantity of outbound delivery item. |
| [**deleteAllHandlingUnitsFromDeliveryPost()**](OutboundDeliveryHeadersApi.md#deleteAllHandlingUnitsFromDeliveryPost) | **POST** /DeleteAllHandlingUnitsFromDelivery | Deletes all handling units from outbound delivery. |
| [**deleteAllSerialNumbersFromDeliveryItemPost()**](OutboundDeliveryHeadersApi.md#deleteAllSerialNumbersFromDeliveryItemPost) | **POST** /DeleteAllSerialNumbersFromDeliveryItem | Deletes all serial numbers from outbound delivery item. |
| [**deleteSerialNumberFromDeliveryItemPost()**](OutboundDeliveryHeadersApi.md#deleteSerialNumberFromDeliveryItemPost) | **POST** /DeleteSerialNumberFromDeliveryItem | Deletes serial number from outbound delivery item. |
| [**pickAllItemsPost()**](OutboundDeliveryHeadersApi.md#pickAllItemsPost) | **POST** /PickAllItems | Takes over delivery quantity as picked quantity for all outbound delivery items. |
| [**pickAndBatchSplitOneItemPost()**](OutboundDeliveryHeadersApi.md#pickAndBatchSplitOneItemPost) | **POST** /PickAndBatchSplitOneItem | Performs batch split and sets picked quantity. |
| [**pickOneItemPost()**](OutboundDeliveryHeadersApi.md#pickOneItemPost) | **POST** /PickOneItem | Takes over delivery quantity as picked quantity for specified outbound delivery item. |
| [**pickOneItemWithBaseQuantityPost()**](OutboundDeliveryHeadersApi.md#pickOneItemWithBaseQuantityPost) | **POST** /PickOneItemWithBaseQuantity | Sets picked quantity and delivery quantity for outbound delivery item. |
| [**pickOneItemWithSalesQuantityPost()**](OutboundDeliveryHeadersApi.md#pickOneItemWithSalesQuantityPost) | **POST** /PickOneItemWithSalesQuantity | Sets picked quantity and delivery quantity for outbound delivery item. |
| [**postGoodsIssuePost()**](OutboundDeliveryHeadersApi.md#postGoodsIssuePost) | **POST** /PostGoodsIssue | Posts goods issue for outbound delivery. |
| [**reverseGoodsIssuePost()**](OutboundDeliveryHeadersApi.md#reverseGoodsIssuePost) | **POST** /ReverseGoodsIssue | Reverses goods issue for outbound delivery. |
| [**setPickingQuantityWithBaseQuantityPost()**](OutboundDeliveryHeadersApi.md#setPickingQuantityWithBaseQuantityPost) | **POST** /SetPickingQuantityWithBaseQuantity | Sets picked quantity in base unit of measure for  delivery item. |


## `aOutbDeliveryHeaderDeliveryDocumentDelete()`

```php
aOutbDeliveryHeaderDeliveryDocumentDelete($delivery_document)
```

Deletes outbound deliveries.

Deletes outbound deliveries using the delivery document number.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery

try {
    $apiInstance->aOutbDeliveryHeaderDeliveryDocumentDelete($delivery_document);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderDeliveryDocumentDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |

### Return type

void (empty response body)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryHeaderDeliveryDocumentGet()`

```php
aOutbDeliveryHeaderDeliveryDocumentGet($delivery_document, $select, $expand): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryHeaderType
```

Reads outbound delivery headers.

Reads all outbound delivery headers. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aOutbDeliveryHeaderDeliveryDocumentGet($delivery_document, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderDeliveryDocumentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryHeaderType**](../Model/AOutbDeliveryHeaderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryHeaderDeliveryDocumentPatch()`

```php
aOutbDeliveryHeaderDeliveryDocumentPatch($delivery_document, $modified_a_outb_delivery_header_type)
```

Updates outbound delivery headers.

Updates outbound delivery headers using the delivery document.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$modified_a_outb_delivery_header_type = new \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryHeaderType(); // \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryHeaderType | New property values

try {
    $apiInstance->aOutbDeliveryHeaderDeliveryDocumentPatch($delivery_document, $modified_a_outb_delivery_header_type);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderDeliveryDocumentPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **modified_a_outb_delivery_header_type** | [**\BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryHeaderType**](../Model/ModifiedAOutbDeliveryHeaderType.md)| New property values | |

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

## `aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet()`

```php
aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet($delivery_document, $top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\OutboundDelivery\Model\Wrapper1
```

Reads items of specific outbound delivery header.

Reads all items of a specific outbound delivery header. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$top = 50; // int | Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=66)
$skip = 56; // int | Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$search = 'search_example'; // string | Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch)
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet($delivery_document, $top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **top** | **int**| Show only the first n items, see [Paging - Top](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;66) | [optional] |
| **skip** | **int**| Skip the first n items, see [Paging - Skip](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **search** | **string**| Search items by search phrases, see [Searching](https://wiki.scn.sap.com/wiki/display/EmTech/SAP+Annotations+for+OData+Version+2.0#SAPAnnotationsforODataVersion2.0-Query_Option_searchQueryOptionsearch) | [optional] |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet()`

```php
aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet($delivery_document, $filter, $inlinecount, $select, $expand): \BeLenka\SAP\OutboundDelivery\Model\Wrapper7
```

Reads partners of specific outbound delivery header.

Reads all partners of a specific outbound delivery header. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet($delivery_document, $filter, $inlinecount, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper7**](../Model/Wrapper7.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet()`

```php
aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet($delivery_document, $filter, $inlinecount, $select): \BeLenka\SAP\OutboundDelivery\Model\Wrapper5
```

Reads texts of specific outbound delivery header.

Reads all texts of a specific outbound delivery header. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet($delivery_document, $filter, $inlinecount, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper5**](../Model/Wrapper5.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost()`

```php
aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost($delivery_document, $apioutbounddeliverysrva_outb_delivery_header_text_type_create): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryHeaderTextType
```

Creates outbound delivery header texts.

Creates outbound delivery header texts using the delivery document, the text element and the text language.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$apioutbounddeliverysrva_outb_delivery_header_text_type_create = new \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeCreate(); // \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeCreate | New entity

try {
    $result = $apiInstance->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost($delivery_document, $apioutbounddeliverysrva_outb_delivery_header_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **apioutbounddeliverysrva_outb_delivery_header_text_type_create** | [**\BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeCreate**](../Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryHeaderTextType**](../Model/AOutbDeliveryHeaderTextType.md)

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
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
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet: ', $e->getMessage(), PHP_EOL;
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

## `aOutbDeliveryHeaderGet()`

```php
aOutbDeliveryHeaderGet($top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\OutboundDelivery\Model\Wrapper4
```

Reads outbound delivery headers.

Reads all outbound delivery headers. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
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
$orderby = array('orderby_example'); // string[] | Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=65)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aOutbDeliveryHeaderGet($top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderGet: ', $e->getMessage(), PHP_EOL;
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
| **orderby** | [**string[]**](../Model/string.md)| Order items by property values, see [Sorting](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;65) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper4**](../Model/Wrapper4.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryHeaderPost()`

```php
aOutbDeliveryHeaderPost($apioutbounddeliverysrva_outb_delivery_header_type_create): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryHeaderType
```

Creates outbound deliveries with reference to preceding document.

Creates outbound deliveries with reference to a sales order, a stock transport order, or a returns purchase order.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apioutbounddeliverysrva_outb_delivery_header_type_create = new \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreate(); // \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreate | New entity

try {
    $result = $apiInstance->aOutbDeliveryHeaderPost($apioutbounddeliverysrva_outb_delivery_header_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->aOutbDeliveryHeaderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apioutbounddeliverysrva_outb_delivery_header_type_create** | [**\BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreate**](../Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryHeaderType**](../Model/AOutbDeliveryHeaderType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addSerialNumberToDeliveryItemPost()`

```php
addSerialNumberToDeliveryItemPost($delivery_document, $delivery_document_item, $serial_number): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Adds serial number to outbound delivery item.

Adds a serial number to the specified outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$serial_number = 'serial_number_example'; // string | Serial Number   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->addSerialNumberToDeliveryItemPost($delivery_document, $delivery_document_item, $serial_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->addSerialNumberToDeliveryItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **serial_number** | **string**| Serial Number   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `assignHandlingUnitToDeliveryPost()`

```php
assignHandlingUnitToDeliveryPost($delivery_document, $handling_unit_external_id): \BeLenka\SAP\OutboundDelivery\Model\HuReturn1
```

Invoke action AssignHandlingUnitToDelivery

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$handling_unit_external_id = 'handling_unit_external_id_example'; // string | Handling Unit   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->assignHandlingUnitToDeliveryPost($delivery_document, $handling_unit_external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->assignHandlingUnitToDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **handling_unit_external_id** | **string**| Handling Unit   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\HuReturn1**](../Model/HuReturn1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPickingAllItemsPost()`

```php
confirmPickingAllItemsPost($delivery_document): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Confirms picked quantity of outbound delivery items.

Confirms the picked quantity of all outbound delivery items.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->confirmPickingAllItemsPost($delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->confirmPickingAllItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmPickingOneItemPost()`

```php
confirmPickingOneItemPost($delivery_document_item, $delivery_document): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Confirms picked quantity of outbound delivery item.

Confirms the picked quantity of the specified outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->confirmPickingOneItemPost($delivery_document_item, $delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->confirmPickingOneItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllHandlingUnitsFromDeliveryPost()`

```php
deleteAllHandlingUnitsFromDeliveryPost($delivery_document): \BeLenka\SAP\OutboundDelivery\Model\HuReturn
```

Deletes all handling units from outbound delivery.

Deletes all handling units from outbound delivery.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->deleteAllHandlingUnitsFromDeliveryPost($delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->deleteAllHandlingUnitsFromDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\HuReturn**](../Model/HuReturn.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllSerialNumbersFromDeliveryItemPost()`

```php
deleteAllSerialNumbersFromDeliveryItemPost($delivery_document, $delivery_document_item): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Deletes all serial numbers from outbound delivery item.

Deletes all serial numbers from the outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->deleteAllSerialNumbersFromDeliveryItemPost($delivery_document, $delivery_document_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->deleteAllSerialNumbersFromDeliveryItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSerialNumberFromDeliveryItemPost()`

```php
deleteSerialNumberFromDeliveryItemPost($delivery_document, $delivery_document_item, $serial_number): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Deletes serial number from outbound delivery item.

Deletes the specified serial number from the outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$serial_number = 'serial_number_example'; // string | Serial Number   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->deleteSerialNumberFromDeliveryItemPost($delivery_document, $delivery_document_item, $serial_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->deleteSerialNumberFromDeliveryItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **serial_number** | **string**| Serial Number   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pickAllItemsPost()`

```php
pickAllItemsPost($delivery_document): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Takes over delivery quantity as picked quantity for all outbound delivery items.

Takes over the delivery quantity as the picked quantity for all items of the outbound delivery.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->pickAllItemsPost($delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->pickAllItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pickAndBatchSplitOneItemPost()`

```php
pickAndBatchSplitOneItemPost($delivery_document, $delivery_document_item, $batch, $split_quantity, $split_quantity_unit): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Performs batch split and sets picked quantity.

Performs a batch split for the specified delivery item and sets a value for the picked quantity.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$batch = 'batch_example'; // string | Batch   (Value needs to be enclosed in single quotes)
$split_quantity = 0M; // string | Qty (stckp.unt)   (Value needs to be suffixed with `M`)
$split_quantity_unit = 'split_quantity_unit_example'; // string | Base Unit   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->pickAndBatchSplitOneItemPost($delivery_document, $delivery_document_item, $batch, $split_quantity, $split_quantity_unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->pickAndBatchSplitOneItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **batch** | **string**| Batch   (Value needs to be enclosed in single quotes) | |
| **split_quantity** | **string**| Qty (stckp.unt)   (Value needs to be suffixed with &#x60;M&#x60;) | |
| **split_quantity_unit** | **string**| Base Unit   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pickOneItemPost()`

```php
pickOneItemPost($delivery_document, $delivery_document_item): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Takes over delivery quantity as picked quantity for specified outbound delivery item.

Takes over the delivery quantity as the picked quantity for the specified outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->pickOneItemPost($delivery_document, $delivery_document_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->pickOneItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pickOneItemWithBaseQuantityPost()`

```php
pickOneItemWithBaseQuantityPost($delivery_document, $delivery_document_item, $actual_delivered_qty_in_base_unit, $base_unit): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Sets picked quantity and delivery quantity for outbound delivery item.

Sets the same value for picked quantity and delivery quantity in base unit of measure for the specified outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$actual_delivered_qty_in_base_unit = 0M; // string | Qty (stckp.unt)   (Value needs to be suffixed with `M`)
$base_unit = 'base_unit_example'; // string | Base Unit   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->pickOneItemWithBaseQuantityPost($delivery_document, $delivery_document_item, $actual_delivered_qty_in_base_unit, $base_unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->pickOneItemWithBaseQuantityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **actual_delivered_qty_in_base_unit** | **string**| Qty (stckp.unt)   (Value needs to be suffixed with &#x60;M&#x60;) | |
| **base_unit** | **string**| Base Unit   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pickOneItemWithSalesQuantityPost()`

```php
pickOneItemWithSalesQuantityPost($actual_delivery_quantity, $delivery_document, $delivery_document_item, $delivery_quantity_unit): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Sets picked quantity and delivery quantity for outbound delivery item.

Sets the same value for picked quantity and delivery quantity in sales unit of measure for the specified outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actual_delivery_quantity = 0M; // string | Delivery qty   (Value needs to be suffixed with `M`)
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$delivery_quantity_unit = 'delivery_quantity_unit_example'; // string | Sales Unit   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->pickOneItemWithSalesQuantityPost($actual_delivery_quantity, $delivery_document, $delivery_document_item, $delivery_quantity_unit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->pickOneItemWithSalesQuantityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **actual_delivery_quantity** | **string**| Delivery qty   (Value needs to be suffixed with &#x60;M&#x60;) | |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **delivery_quantity_unit** | **string**| Sales Unit   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGoodsIssuePost()`

```php
postGoodsIssuePost($delivery_document): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Posts goods issue for outbound delivery.

Posts goods issue for the outbound delivery.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->postGoodsIssuePost($delivery_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->postGoodsIssuePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reverseGoodsIssuePost()`

```php
reverseGoodsIssuePost($delivery_document, $actual_goods_movement_date): \BeLenka\SAP\OutboundDelivery\Model\Wrapper10
```

Reverses goods issue for outbound delivery.

Reverses the goods issues for the outbound delivery.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$actual_goods_movement_date = 'actual_goods_movement_date_example'; // string | Actual GI Date   (Value needs to be enclosed in single quotes and prefixed with `datetime`, e.g. `datetime'2017-12-31T00:00'`)

try {
    $result = $apiInstance->reverseGoodsIssuePost($delivery_document, $actual_goods_movement_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->reverseGoodsIssuePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **actual_goods_movement_date** | **string**| Actual GI Date   (Value needs to be enclosed in single quotes and prefixed with &#x60;datetime&#x60;, e.g. &#x60;datetime&#39;2017-12-31T00:00&#39;&#x60;) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper10**](../Model/Wrapper10.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPickingQuantityWithBaseQuantityPost()`

```php
setPickingQuantityWithBaseQuantityPost($actual_delivered_qty_in_base_unit, $base_unit, $delivery_document, $delivery_document_item): \BeLenka\SAP\OutboundDelivery\Model\Wrapper9
```

Sets picked quantity in base unit of measure for  delivery item.

Sets the picked quantity in base unit of measure of the specified delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryHeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actual_delivered_qty_in_base_unit = 0M; // string | Qty (stckp.unt)   (Value needs to be suffixed with `M`)
$base_unit = 'base_unit_example'; // string | Base Unit   (Value needs to be enclosed in single quotes)
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)

try {
    $result = $apiInstance->setPickingQuantityWithBaseQuantityPost($actual_delivered_qty_in_base_unit, $base_unit, $delivery_document, $delivery_document_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryHeadersApi->setPickingQuantityWithBaseQuantityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **actual_delivered_qty_in_base_unit** | **string**| Qty (stckp.unt)   (Value needs to be suffixed with &#x60;M&#x60;) | |
| **base_unit** | **string**| Base Unit   (Value needs to be enclosed in single quotes) | |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper9**](../Model/Wrapper9.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
