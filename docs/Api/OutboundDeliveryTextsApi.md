# BeLenka\SAP\OutboundDelivery\OutboundDeliveryTextsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet()**](OutboundDeliveryTextsApi.md#aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentText | Reads texts of specific outbound delivery header. |
| [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost()**](OutboundDeliveryTextsApi.md#aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost) | **POST** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentText | Creates outbound delivery header texts. |
| [**aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguageDelete()**](OutboundDeliveryTextsApi.md#aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguageDelete) | **DELETE** /A_OutbDeliveryHeaderText(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,TextElement&#x3D;&#39;{TextElement}&#39;,Language&#x3D;&#39;{Language}&#39;) | Deletes outbound delivery header texts. |
| [**aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguagePatch()**](OutboundDeliveryTextsApi.md#aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguagePatch) | **PATCH** /A_OutbDeliveryHeaderText(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,TextElement&#x3D;&#39;{TextElement}&#39;,Language&#x3D;&#39;{Language}&#39;) | Updates outbound delivery header texts. |
| [**aOutbDeliveryHeaderTextPost()**](OutboundDeliveryTextsApi.md#aOutbDeliveryHeaderTextPost) | **POST** /A_OutbDeliveryHeaderText | Creates outbound delivery header texts. |


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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryTextsApi(
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
    echo 'Exception when calling OutboundDeliveryTextsApi->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryTextsApi(
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
    echo 'Exception when calling OutboundDeliveryTextsApi->aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost: ', $e->getMessage(), PHP_EOL;
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

## `aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguageDelete()`

```php
aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguageDelete($delivery_document, $text_element, $language)
```

Deletes outbound delivery header texts.

Deletes outbound delivery header texts using the delivery document, the text element and the text language.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryTextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$text_element = 'text_element_example'; // string | Text ID
$language = 'language_example'; // string | Language

try {
    $apiInstance->aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguageDelete($delivery_document, $text_element, $language);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryTextsApi->aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguageDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
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

## `aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguagePatch()`

```php
aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguagePatch($delivery_document, $text_element, $language, $modified_a_outb_delivery_header_text_type)
```

Updates outbound delivery header texts.

Updates outbound delivery header texts using the delivery document, the text element and the text language.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryTextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_document = 'delivery_document_example'; // string | Delivery
$text_element = 'text_element_example'; // string | Text ID
$language = 'language_example'; // string | Language
$modified_a_outb_delivery_header_text_type = new \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryHeaderTextType(); // \BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryHeaderTextType | New property values

try {
    $apiInstance->aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguagePatch($delivery_document, $text_element, $language, $modified_a_outb_delivery_header_text_type);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryTextsApi->aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguagePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delivery_document** | **string**| Delivery | |
| **text_element** | **string**| Text ID | |
| **language** | **string**| Language | |
| **modified_a_outb_delivery_header_text_type** | [**\BeLenka\SAP\OutboundDelivery\Model\ModifiedAOutbDeliveryHeaderTextType**](../Model/ModifiedAOutbDeliveryHeaderTextType.md)| New property values | |

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

## `aOutbDeliveryHeaderTextPost()`

```php
aOutbDeliveryHeaderTextPost($apioutbounddeliverysrva_outb_delivery_header_text_type_create): \BeLenka\SAP\OutboundDelivery\Model\AOutbDeliveryHeaderTextType
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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryTextsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apioutbounddeliverysrva_outb_delivery_header_text_type_create = new \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeCreate(); // \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeCreate | New entity

try {
    $result = $apiInstance->aOutbDeliveryHeaderTextPost($apioutbounddeliverysrva_outb_delivery_header_text_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryTextsApi->aOutbDeliveryHeaderTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
