# BeLenka\SAP\OutboundDelivery\OutboundDeliveryMaintenanceItemObjectListsApi

All URIs are relative to https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aSerialNmbrDeliveryMaintenanceItemObjectListToMaintenanceItemObjectGet()**](OutboundDeliveryMaintenanceItemObjectListsApi.md#aSerialNmbrDeliveryMaintenanceItemObjectListToMaintenanceItemObjectGet) | **GET** /A_SerialNmbrDelivery({MaintenanceItemObjectList})/to_MaintenanceItemObject | Reads maintenance item object lists of specific outbound delivery maintenance item object list header. |


## `aSerialNmbrDeliveryMaintenanceItemObjectListToMaintenanceItemObjectGet()`

```php
aSerialNmbrDeliveryMaintenanceItemObjectListToMaintenanceItemObjectGet($maintenance_item_object_list, $filter, $inlinecount, $select): \BeLenka\SAP\OutboundDelivery\Model\Wrapper8
```

Reads maintenance item object lists of specific outbound delivery maintenance item object list header.

Reads all maintenance item object lists of a specific outbound delivery maintenance item object list header including, for example, the serial numbers. You can narrow down the result by specifying filter conditions.

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


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\OutboundDeliveryMaintenanceItemObjectListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$maintenance_item_object_list = 42; // string | Object list
$filter = 'filter_example'; // string | Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=64)
$inlinecount = 'inlinecount_example'; // string | Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=67)
$select = array('select_example'); // string[] | Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page=68)

try {
    $result = $apiInstance->aSerialNmbrDeliveryMaintenanceItemObjectListToMaintenanceItemObjectGet($maintenance_item_object_list, $filter, $inlinecount, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundDeliveryMaintenanceItemObjectListsApi->aSerialNmbrDeliveryMaintenanceItemObjectListToMaintenanceItemObjectGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **maintenance_item_object_list** | **string**| Object list | |
| **filter** | **string**| Filter items by property values, see [Filtering](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;64) | [optional] |
| **inlinecount** | **string**| Include count of items, see [Inlinecount](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;67) | [optional] |
| **select** | [**string[]**](../Model/string.md)| Select properties to be returned, see [Select](https://help.sap.com/doc/5890d27be418427993fafa6722cdc03b/Cloud/en-US/OdataV2.pdf#page&#x3D;68) | [optional] |

### Return type

[**\BeLenka\SAP\OutboundDelivery\Model\Wrapper8**](../Model/Wrapper8.md)

### Authorization

[BasicAuth](../../README.md#BasicAuth), [OAuth2Auth](../../README.md#OAuth2Auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
