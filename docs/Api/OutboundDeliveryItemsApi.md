# BeLenka\SAP\OutboundDelivery\OutboundDeliveryItemsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet()**](OutboundDeliveryItemsApi.md#aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentItem | Reads items of specific outbound delivery header. |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete()**](OutboundDeliveryItemsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete) | **DELETE** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Deletes outbound delivery items. |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet()**](OutboundDeliveryItemsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Reads outbound delivery items. |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch()**](OutboundDeliveryItemsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch) | **PATCH** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Updates outbound delivery items. |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet()**](OutboundDeliveryItemsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DeliveryDocumentItemText | Reads texts of specific outbound delivery item. |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost()**](OutboundDeliveryItemsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost) | **POST** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DeliveryDocumentItemText | Creates outbound delivery item texts. |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet()**](OutboundDeliveryItemsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DocumentFlow | Reads document flows of specific outbound delivery item. |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet()**](OutboundDeliveryItemsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_SerialDeliveryItem | Reads maintenance item object list headers of specific outbound delivery item. |
| [**aOutbDeliveryItemGet()**](OutboundDeliveryItemsApi.md#aOutbDeliveryItemGet) | **GET** /A_OutbDeliveryItem | Reads outbound delivery items. |
| [**createBatchSplitItemPost()**](OutboundDeliveryItemsApi.md#createBatchSplitItemPost) | **POST** /CreateBatchSplitItem | Performs a batch split for the outbound delivery item. |


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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
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
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet: ', $e->getMessage(), PHP_EOL;
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

## `aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete()`

```php
aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete($delivery_document, $delivery_document_item)
```

Deletes outbound delivery items.

Deletes outbound delivery items using the delivery document number and the delivery document item number.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item

try {
    $apiInstance->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete($delivery_document, $delivery_document_item);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |

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

## `aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet()`

```php
aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet($delivery_document, $delivery_document_item, $select, $expand): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryItemType
```

Reads outbound delivery items.

Reads all outbound delivery items. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet($delivery_document, $delivery_document_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryItemType**](../Model/AOutbDeliveryItemType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch()`

```php
aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch($delivery_document, $delivery_document_item, $modified_a_outb_delivery_item_type)
```

Updates outbound delivery items.

Updates outbound delivery items using the delivery document and the delivery document item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$modified_a_outb_delivery_item_type = new \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryItemType(); // \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryItemType | New property values

try {
    $apiInstance->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch($delivery_document, $delivery_document_item, $modified_a_outb_delivery_item_type);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **modified_a_outb_delivery_item_type** | [**\BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryItemType**](../Model/ModifiedAOutbDeliveryItemType.md)| New property values | |

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

## `aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet()`

```php
aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet($delivery_document, $delivery_document_item, $filter, $inlinecount, $select): \BeLenka\SAP\OutboundDelivery\Model\Wrapper3
```

Reads texts of specific outbound delivery item.

Reads all texts of a specific outbound delivery item. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet($delivery_document, $delivery_document_item, $filter, $inlinecount, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper3**](../Model/Wrapper3.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost()`

```php
aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost($delivery_document, $delivery_document_item, $apioutbounddeliverysrva_outb_delivery_item_text_type_create): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryItemTextType
```

Creates outbound delivery item texts.

Creates outbound delivery item texts using the delivery document, the text element and the text language.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$apioutbounddeliverysrva_outb_delivery_item_text_type_create = new \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeCreate(); // \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeCreate | New entity

try {
    $result = $apiInstance->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost($delivery_document, $delivery_document_item, $apioutbounddeliverysrva_outb_delivery_item_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **apioutbounddeliverysrva_outb_delivery_item_text_type_create** | [**\BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeCreate**](../Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryItemTextType**](../Model/AOutbDeliveryItemTextType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet()`

```php
aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet($delivery_document, $delivery_document_item, $filter, $inlinecount, $select): \BeLenka\SAP\OutboundDelivery\Model\Wrapper2
```

Reads document flows of specific outbound delivery item.

Reads all document flows of a specific outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet($delivery_document, $delivery_document_item, $filter, $inlinecount, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper2**](../Model/Wrapper2.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet()`

```php
aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet($delivery_document, $delivery_document_item, $select, $expand): \BeLenka\SAP\OutboundDelivery\Model\ASerialNmbrDeliveryType
```

Reads maintenance item object list headers of specific outbound delivery item.

Reads all maintenance item object list headers of a specific outbound delivery item.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)
$expand = array('expand_example'); // string[] | Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=63)

try {
    $result = $apiInstance->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet($delivery_document, $delivery_document_item, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |
| **expand** | [**string[]**](../Model/string.md)| Expand related entities, see [Expand](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;63) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\ASerialNmbrDeliveryType**](../Model/ASerialNmbrDeliveryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aOutbDeliveryItemGet()`

```php
aOutbDeliveryItemGet($top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand): \BeLenka\SAP\OutboundDelivery\Model\Wrapper1
```

Reads outbound delivery items.

Reads all outbound delivery items. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
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
    $result = $apiInstance->aOutbDeliveryItemGet($top, $skip, $search, $filter, $inlinecount, $orderby, $select, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->aOutbDeliveryItemGet: ', $e->getMessage(), PHP_EOL;
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

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper1**](../Model/Wrapper1.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBatchSplitItemPost()`

```php
createBatchSplitItemPost($batch, $delivery_document, $delivery_document_item, $actual_delivery_quantity, $delivery_quantity_unit, $pick_quantity_in_sales_uom): \BeLenka\SAP\OutboundDelivery\Model\CreatedDeliveryItem
```

Performs a batch split for the outbound delivery item.

Creates a batch split item and sets a value for the delivery quantity.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch = 'batch_example'; // string | Batch   (Value needs to be enclosed in single quotes)
$delivery_document = 'delivery_document_example'; // string | Delivery   (Value needs to be enclosed in single quotes)
$delivery_document_item = 'delivery_document_item_example'; // string | Item   (Value needs to be enclosed in single quotes)
$actual_delivery_quantity = 0M; // string | Delivery Qty   (Value needs to be suffixed with `M`)
$delivery_quantity_unit = 'delivery_quantity_unit_example'; // string | Sales Unit   (Value needs to be enclosed in single quotes)
$pick_quantity_in_sales_uom = 0M; // string | Pick quantity   (Value needs to be suffixed with `M`)

try {
    $result = $apiInstance->createBatchSplitItemPost($batch, $delivery_document, $delivery_document_item, $actual_delivery_quantity, $delivery_quantity_unit, $pick_quantity_in_sales_uom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemsApi->createBatchSplitItemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch** | **string**| Batch   (Value needs to be enclosed in single quotes) | |
| **delivery_document** | **string**| Delivery   (Value needs to be enclosed in single quotes) | |
| **delivery_document_item** | **string**| Item   (Value needs to be enclosed in single quotes) | |
| **actual_delivery_quantity** | **string**| Delivery Qty   (Value needs to be suffixed with &#x60;M&#x60;) | |
| **delivery_quantity_unit** | **string**| Sales Unit   (Value needs to be enclosed in single quotes) | |
| **pick_quantity_in_sales_uom** | **string**| Pick quantity   (Value needs to be suffixed with &#x60;M&#x60;) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\CreatedDeliveryItem**](../Model/CreatedDeliveryItem.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
