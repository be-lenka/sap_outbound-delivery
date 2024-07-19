# BeLenka\SAP\OutboundDelivery\OutboundDeliveryItemTextsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet()**](OutboundDeliveryItemTextsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DeliveryDocumentItemText | Reads texts of specific outbound delivery item. |
| [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost()**](OutboundDeliveryItemTextsApi.md#aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost) | **POST** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DeliveryDocumentItemText | Creates outbound delivery item texts. |
| [**aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguageDelete()**](OutboundDeliveryItemTextsApi.md#aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguageDelete) | **DELETE** /A_OutbDeliveryItemText(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;,TextElement&#x3D;&#39;{TextElement}&#39;,Language&#x3D;&#39;{Language}&#39;) | Deletes outbound delivery item texts. |
| [**aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguagePatch()**](OutboundDeliveryItemTextsApi.md#aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguagePatch) | **PATCH** /A_OutbDeliveryItemText(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;,TextElement&#x3D;&#39;{TextElement}&#39;,Language&#x3D;&#39;{Language}&#39;) | Updates outbound delivery item texts. |
| [**aOutbDeliveryItemTextPost()**](OutboundDeliveryItemTextsApi.md#aOutbDeliveryItemTextPost) | **POST** /A_OutbDeliveryItemText | Creates outbound delivery item texts. |


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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemTextsApi(
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
    echo 'Exception when calling OutboundDeliveryItemTextsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemTextsApi(
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
    echo 'Exception when calling OutboundDeliveryItemTextsApi->aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost: ', $e->getMessage(), PHP_EOL;
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

## `aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguageDelete()`

```php
aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguageDelete($delivery_document, $delivery_document_item, $text_element, $language)
```

Deletes outbound delivery item texts.

Deletes outbound delivery item texts using the delivery document, the delivery document item, the text element and the text language.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemTextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$text_element = 'text_element_example'; // string | Text ID
$language = 'language_example'; // string | Language

try {
    $apiInstance->aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguageDelete($delivery_document, $delivery_document_item, $text_element, $language);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemTextsApi->aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguageDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **text_element** | **string**| Text ID | |
| **language** | **string**| Language | |

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

## `aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguagePatch()`

```php
aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguagePatch($delivery_document, $delivery_document_item, $text_element, $language, $modified_a_outb_delivery_item_text_type)
```

Updates outbound delivery item texts.

Updates outbound delivery item texts using the delivery document, the delivery document item, the text element and the text language.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemTextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$delivery_document_item = 'delivery_document_item_example'; // string | Item
$text_element = 'text_element_example'; // string | Text ID
$language = 'language_example'; // string | Language
$modified_a_outb_delivery_item_text_type = new \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryItemTextType(); // \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryItemTextType | New property values

try {
    $apiInstance->aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguagePatch($delivery_document, $delivery_document_item, $text_element, $language, $modified_a_outb_delivery_item_text_type);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemTextsApi->aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguagePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **delivery_document_item** | **string**| Item | |
| **text_element** | **string**| Text ID | |
| **language** | **string**| Language | |
| **modified_a_outb_delivery_item_text_type** | [**\BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryItemTextType**](../Model/ModifiedAOutbDeliveryItemTextType.md)| New property values | |

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

## `aOutbDeliveryItemTextPost()`

```php
aOutbDeliveryItemTextPost($apioutbounddeliverysrva_outb_delivery_item_text_type_create): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryItemTextType
```

Creates outbound delivery item texts.

Creates outbound delivery item texts using the delivery document, the delivery document item, the text element and the text language.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryItemTextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apioutbounddeliverysrva_outb_delivery_item_text_type_create = new \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeCreate(); // \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeCreate | New entity

try {
    $result = $apiInstance->aOutbDeliveryItemTextPost($apioutbounddeliverysrva_outb_delivery_item_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryItemTextsApi->aOutbDeliveryItemTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
