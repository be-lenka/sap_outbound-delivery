# BeLenka\SAP\OutboundDelivery\HandlingUnitItemsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aHandlingUnitItemDeliveryPost()**](HandlingUnitItemsApi.md#aHandlingUnitItemDeliveryPost) | **POST** /A_HandlingUnitItemDelivery | Creates handling unit items. |


## `aHandlingUnitItemDeliveryPost()`

```php
aHandlingUnitItemDeliveryPost($apioutbounddeliverysrva_handling_unit_item_delivery_type_create): \BeLenka\SAP\OutboundDelivery\Model\AHandlingUnitItemDeliveryType
```

Creates handling unit items.

Creates handling unit items using the delivery document, delivery document item and handling unit header.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\HandlingUnitItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apioutbounddeliverysrva_handling_unit_item_delivery_type_create = new \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryTypeCreate(); // \BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryTypeCreate | New entity

try {
    $result = $apiInstance->aHandlingUnitItemDeliveryPost($apioutbounddeliverysrva_handling_unit_item_delivery_type_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HandlingUnitItemsApi->aHandlingUnitItemDeliveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apioutbounddeliverysrva_handling_unit_item_delivery_type_create** | [**\BeLenka\SAP\OutboundDelivery\Model\APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryTypeCreate**](../Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryTypeCreate.md)| New entity | |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\AHandlingUnitItemDeliveryType**](../Model/AHandlingUnitItemDeliveryType.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
