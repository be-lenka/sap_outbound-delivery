# OpenAPIClient-php

This service enables you to create, read, update and delete outbound deliveries. It can be consumed in Fiori apps and on other user interfaces.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: BasicAuth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAuth2Auth
$config = BeLenka\SAP\OutboundDelivery\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new BeLenka\SAP\OutboundDelivery\Api\BatchRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->batchPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchRequestsApi->batchPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://:/sap/opu/odata/sap/API_OUTBOUND_DELIVERY_SRV;v&#x3D;0002*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BatchRequestsApi* | [**batchPost**](docs/Api/BatchRequestsApi.md#batchpost) | **POST** /$batch | Send a group of requests
*HandlingUnitHeadersApi* | [**aHandlingUnitHeaderDeliveryPost**](docs/Api/HandlingUnitHeadersApi.md#ahandlingunitheaderdeliverypost) | **POST** /A_HandlingUnitHeaderDelivery | Creates handling unit headers.
*HandlingUnitHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet**](docs/Api/HandlingUnitHeadersApi.md#aoutbdeliveryheaderdeliverydocumenttohandlingunitheaderdeliveryget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_HandlingUnitHeaderDelivery | Reads handling units headers of specific outbound delivery header.
*HandlingUnitItemsApi* | [**aHandlingUnitItemDeliveryPost**](docs/Api/HandlingUnitItemsApi.md#ahandlingunititemdeliverypost) | **POST** /A_HandlingUnitItemDelivery | Creates handling unit items.
*OutboundDeliveryDocumentFlowsApi* | [**aOutbDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryGet**](docs/Api/OutboundDeliveryDocumentFlowsApi.md#aoutbdeliverydocflowprecedingdocumentprecedingdocumentprecedingdocumentitemprecedingdocumentitemsubsequentdocumentcategorysubsequentdocumentcategoryget) | **GET** /A_OutbDeliveryDocFlow(PrecedingDocument&#x3D;&#39;{PrecedingDocument}&#39;,PrecedingDocumentItem&#x3D;&#39;{PrecedingDocumentItem}&#39;,SubsequentDocumentCategory&#x3D;&#39;{SubsequentDocumentCategory}&#39;) | Reads outbound delivery document flows by key.
*OutboundDeliveryDocumentFlowsApi* | [**aOutbDeliveryDocFlowPrecedingDocumentPrecedingDocumentPrecedingDocumentItemPrecedingDocumentItemSubsequentDocumentCategorySubsequentDocumentCategoryPatch**](docs/Api/OutboundDeliveryDocumentFlowsApi.md#aoutbdeliverydocflowprecedingdocumentprecedingdocumentprecedingdocumentitemprecedingdocumentitemsubsequentdocumentcategorysubsequentdocumentcategorypatch) | **PATCH** /A_OutbDeliveryDocFlow(PrecedingDocument&#x3D;&#39;{PrecedingDocument}&#39;,PrecedingDocumentItem&#x3D;&#39;{PrecedingDocumentItem}&#39;,SubsequentDocumentCategory&#x3D;&#39;{SubsequentDocumentCategory}&#39;) | Updates outbound delivery document flows.
*OutboundDeliveryDocumentFlowsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet**](docs/Api/OutboundDeliveryDocumentFlowsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtodocumentflowget) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DocumentFlow | Reads document flows of specific outbound delivery item.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentDelete**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderdeliverydocumentdelete) | **DELETE** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Deletes outbound deliveries.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentGet**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderdeliverydocumentget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Reads outbound delivery headers.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentPatch**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderdeliverydocumentpatch) | **PATCH** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;) | Updates outbound delivery headers.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderdeliverydocumenttodeliverydocumentitemget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentItem | Reads items of specific outbound delivery header.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderdeliverydocumenttodeliverydocumentpartnerget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentPartner | Reads partners of specific outbound delivery header.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderdeliverydocumenttodeliverydocumenttextget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentText | Reads texts of specific outbound delivery header.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderdeliverydocumenttodeliverydocumenttextpost) | **POST** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentText | Creates outbound delivery header texts.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderDeliveryDocumentToHandlingUnitHeaderDeliveryGet**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderdeliverydocumenttohandlingunitheaderdeliveryget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_HandlingUnitHeaderDelivery | Reads handling units headers of specific outbound delivery header.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderGet**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderget) | **GET** /A_OutbDeliveryHeader | Reads outbound delivery headers.
*OutboundDeliveryHeadersApi* | [**aOutbDeliveryHeaderPost**](docs/Api/OutboundDeliveryHeadersApi.md#aoutbdeliveryheaderpost) | **POST** /A_OutbDeliveryHeader | Creates outbound deliveries with reference to preceding document.
*OutboundDeliveryHeadersApi* | [**addSerialNumberToDeliveryItemPost**](docs/Api/OutboundDeliveryHeadersApi.md#addserialnumbertodeliveryitempost) | **POST** /AddSerialNumberToDeliveryItem | Adds serial number to outbound delivery item.
*OutboundDeliveryHeadersApi* | [**assignHandlingUnitToDeliveryPost**](docs/Api/OutboundDeliveryHeadersApi.md#assignhandlingunittodeliverypost) | **POST** /AssignHandlingUnitToDelivery | Invoke action AssignHandlingUnitToDelivery
*OutboundDeliveryHeadersApi* | [**confirmPickingAllItemsPost**](docs/Api/OutboundDeliveryHeadersApi.md#confirmpickingallitemspost) | **POST** /ConfirmPickingAllItems | Confirms picked quantity of outbound delivery items.
*OutboundDeliveryHeadersApi* | [**confirmPickingOneItemPost**](docs/Api/OutboundDeliveryHeadersApi.md#confirmpickingoneitempost) | **POST** /ConfirmPickingOneItem | Confirms picked quantity of outbound delivery item.
*OutboundDeliveryHeadersApi* | [**deleteAllHandlingUnitsFromDeliveryPost**](docs/Api/OutboundDeliveryHeadersApi.md#deleteallhandlingunitsfromdeliverypost) | **POST** /DeleteAllHandlingUnitsFromDelivery | Deletes all handling units from outbound delivery.
*OutboundDeliveryHeadersApi* | [**deleteAllSerialNumbersFromDeliveryItemPost**](docs/Api/OutboundDeliveryHeadersApi.md#deleteallserialnumbersfromdeliveryitempost) | **POST** /DeleteAllSerialNumbersFromDeliveryItem | Deletes all serial numbers from outbound delivery item.
*OutboundDeliveryHeadersApi* | [**deleteSerialNumberFromDeliveryItemPost**](docs/Api/OutboundDeliveryHeadersApi.md#deleteserialnumberfromdeliveryitempost) | **POST** /DeleteSerialNumberFromDeliveryItem | Deletes serial number from outbound delivery item.
*OutboundDeliveryHeadersApi* | [**pickAllItemsPost**](docs/Api/OutboundDeliveryHeadersApi.md#pickallitemspost) | **POST** /PickAllItems | Takes over delivery quantity as picked quantity for all outbound delivery items.
*OutboundDeliveryHeadersApi* | [**pickAndBatchSplitOneItemPost**](docs/Api/OutboundDeliveryHeadersApi.md#pickandbatchsplitoneitempost) | **POST** /PickAndBatchSplitOneItem | Performs batch split and sets picked quantity.
*OutboundDeliveryHeadersApi* | [**pickOneItemPost**](docs/Api/OutboundDeliveryHeadersApi.md#pickoneitempost) | **POST** /PickOneItem | Takes over delivery quantity as picked quantity for specified outbound delivery item.
*OutboundDeliveryHeadersApi* | [**pickOneItemWithBaseQuantityPost**](docs/Api/OutboundDeliveryHeadersApi.md#pickoneitemwithbasequantitypost) | **POST** /PickOneItemWithBaseQuantity | Sets picked quantity and delivery quantity for outbound delivery item.
*OutboundDeliveryHeadersApi* | [**pickOneItemWithSalesQuantityPost**](docs/Api/OutboundDeliveryHeadersApi.md#pickoneitemwithsalesquantitypost) | **POST** /PickOneItemWithSalesQuantity | Sets picked quantity and delivery quantity for outbound delivery item.
*OutboundDeliveryHeadersApi* | [**postGoodsIssuePost**](docs/Api/OutboundDeliveryHeadersApi.md#postgoodsissuepost) | **POST** /PostGoodsIssue | Posts goods issue for outbound delivery.
*OutboundDeliveryHeadersApi* | [**reverseGoodsIssuePost**](docs/Api/OutboundDeliveryHeadersApi.md#reversegoodsissuepost) | **POST** /ReverseGoodsIssue | Reverses goods issue for outbound delivery.
*OutboundDeliveryHeadersApi* | [**setPickingQuantityWithBaseQuantityPost**](docs/Api/OutboundDeliveryHeadersApi.md#setpickingquantitywithbasequantitypost) | **POST** /SetPickingQuantityWithBaseQuantity | Sets picked quantity in base unit of measure for  delivery item.
*OutboundDeliveryItemTextsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet**](docs/Api/OutboundDeliveryItemTextsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtodeliverydocumentitemtextget) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DeliveryDocumentItemText | Reads texts of specific outbound delivery item.
*OutboundDeliveryItemTextsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost**](docs/Api/OutboundDeliveryItemTextsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtodeliverydocumentitemtextpost) | **POST** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DeliveryDocumentItemText | Creates outbound delivery item texts.
*OutboundDeliveryItemTextsApi* | [**aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguageDelete**](docs/Api/OutboundDeliveryItemTextsApi.md#aoutbdeliveryitemtextdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtextelementtextelementlanguagelanguagedelete) | **DELETE** /A_OutbDeliveryItemText(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;,TextElement&#x3D;&#39;{TextElement}&#39;,Language&#x3D;&#39;{Language}&#39;) | Deletes outbound delivery item texts.
*OutboundDeliveryItemTextsApi* | [**aOutbDeliveryItemTextDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemTextElementTextElementLanguageLanguagePatch**](docs/Api/OutboundDeliveryItemTextsApi.md#aoutbdeliveryitemtextdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtextelementtextelementlanguagelanguagepatch) | **PATCH** /A_OutbDeliveryItemText(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;,TextElement&#x3D;&#39;{TextElement}&#39;,Language&#x3D;&#39;{Language}&#39;) | Updates outbound delivery item texts.
*OutboundDeliveryItemTextsApi* | [**aOutbDeliveryItemTextPost**](docs/Api/OutboundDeliveryItemTextsApi.md#aoutbdeliveryitemtextpost) | **POST** /A_OutbDeliveryItemText | Creates outbound delivery item texts.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentItemGet**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryheaderdeliverydocumenttodeliverydocumentitemget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentItem | Reads items of specific outbound delivery header.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemDelete**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemdelete) | **DELETE** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Deletes outbound delivery items.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemGet**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemget) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Reads outbound delivery items.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemPatch**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitempatch) | **PATCH** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;) | Updates outbound delivery items.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextGet**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtodeliverydocumentitemtextget) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DeliveryDocumentItemText | Reads texts of specific outbound delivery item.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDeliveryDocumentItemTextPost**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtodeliverydocumentitemtextpost) | **POST** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DeliveryDocumentItemText | Creates outbound delivery item texts.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToDocumentFlowGet**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtodocumentflowget) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_DocumentFlow | Reads document flows of specific outbound delivery item.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtoserialdeliveryitemget) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_SerialDeliveryItem | Reads maintenance item object list headers of specific outbound delivery item.
*OutboundDeliveryItemsApi* | [**aOutbDeliveryItemGet**](docs/Api/OutboundDeliveryItemsApi.md#aoutbdeliveryitemget) | **GET** /A_OutbDeliveryItem | Reads outbound delivery items.
*OutboundDeliveryItemsApi* | [**createBatchSplitItemPost**](docs/Api/OutboundDeliveryItemsApi.md#createbatchsplititempost) | **POST** /CreateBatchSplitItem | Performs a batch split for the outbound delivery item.
*OutboundDeliveryMaintenanceItemObjectListHeadersApi* | [**aOutbDeliveryItemDeliveryDocumentDeliveryDocumentDeliveryDocumentItemDeliveryDocumentItemToSerialDeliveryItemGet**](docs/Api/OutboundDeliveryMaintenanceItemObjectListHeadersApi.md#aoutbdeliveryitemdeliverydocumentdeliverydocumentdeliverydocumentitemdeliverydocumentitemtoserialdeliveryitemget) | **GET** /A_OutbDeliveryItem(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,DeliveryDocumentItem&#x3D;&#39;{DeliveryDocumentItem}&#39;)/to_SerialDeliveryItem | Reads maintenance item object list headers of specific outbound delivery item.
*OutboundDeliveryMaintenanceItemObjectListHeadersApi* | [**aSerialNmbrDeliveryMaintenanceItemObjectListToMaintenanceItemObjectGet**](docs/Api/OutboundDeliveryMaintenanceItemObjectListHeadersApi.md#aserialnmbrdeliverymaintenanceitemobjectlisttomaintenanceitemobjectget) | **GET** /A_SerialNmbrDelivery({MaintenanceItemObjectList})/to_MaintenanceItemObject | Reads maintenance item object lists of specific outbound delivery maintenance item object list header.
*OutboundDeliveryMaintenanceItemObjectListsApi* | [**aSerialNmbrDeliveryMaintenanceItemObjectListToMaintenanceItemObjectGet**](docs/Api/OutboundDeliveryMaintenanceItemObjectListsApi.md#aserialnmbrdeliverymaintenanceitemobjectlisttomaintenanceitemobjectget) | **GET** /A_SerialNmbrDelivery({MaintenanceItemObjectList})/to_MaintenanceItemObject | Reads maintenance item object lists of specific outbound delivery maintenance item object list header.
*OutboundDeliveryPartnerAddressesApi* | [**aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet**](docs/Api/OutboundDeliveryPartnerAddressesApi.md#aoutbdeliverypartnerpartnerfunctionpartnerfunctionsddocumentsddocumenttoaddressget) | **GET** /A_OutbDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address | Reads addresses of specific outbound delivery partner.
*OutboundDeliveryPartnerAddresses2Api* | [**aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionGet**](docs/Api/OutboundDeliveryPartnerAddresses2Api.md#aoutbdeliveryaddress2deliverydocumentdeliverydocumentpartnerfunctionpartnerfunctionget) | **GET** /A_OutbDeliveryAddress2(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Reads outbound delivery partner addresses.
*OutboundDeliveryPartnerAddresses2Api* | [**aOutbDeliveryAddress2DeliveryDocumentDeliveryDocumentPartnerFunctionPartnerFunctionPatch**](docs/Api/OutboundDeliveryPartnerAddresses2Api.md#aoutbdeliveryaddress2deliverydocumentdeliverydocumentpartnerfunctionpartnerfunctionpatch) | **PATCH** /A_OutbDeliveryAddress2(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;) | Updates outbound delivery partner addresses.
*OutboundDeliveryPartnerAddresses2Api* | [**aOutbDeliveryAddress2Get**](docs/Api/OutboundDeliveryPartnerAddresses2Api.md#aoutbdeliveryaddress2get) | **GET** /A_OutbDeliveryAddress2 | Reads outbound delivery partner addresses.
*OutboundDeliveryPartnerAddresses2Api* | [**aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddress2Get**](docs/Api/OutboundDeliveryPartnerAddresses2Api.md#aoutbdeliverypartnerpartnerfunctionpartnerfunctionsddocumentsddocumenttoaddress2get) | **GET** /A_OutbDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address2 | Reads addresses of specific outbound delivery partner.
*OutboundDeliveryPartnersApi* | [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentPartnerGet**](docs/Api/OutboundDeliveryPartnersApi.md#aoutbdeliveryheaderdeliverydocumenttodeliverydocumentpartnerget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentPartner | Reads partners of specific outbound delivery header.
*OutboundDeliveryPartnersApi* | [**aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddress2Get**](docs/Api/OutboundDeliveryPartnersApi.md#aoutbdeliverypartnerpartnerfunctionpartnerfunctionsddocumentsddocumenttoaddress2get) | **GET** /A_OutbDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address2 | Reads addresses of specific outbound delivery partner.
*OutboundDeliveryPartnersApi* | [**aOutbDeliveryPartnerPartnerFunctionPartnerFunctionSDDocumentSDDocumentToAddressGet**](docs/Api/OutboundDeliveryPartnersApi.md#aoutbdeliverypartnerpartnerfunctionpartnerfunctionsddocumentsddocumenttoaddressget) | **GET** /A_OutbDeliveryPartner(PartnerFunction&#x3D;&#39;{PartnerFunction}&#39;,SDDocument&#x3D;&#39;{SDDocument}&#39;)/to_Address | Reads addresses of specific outbound delivery partner.
*OutboundDeliveryTextsApi* | [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextGet**](docs/Api/OutboundDeliveryTextsApi.md#aoutbdeliveryheaderdeliverydocumenttodeliverydocumenttextget) | **GET** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentText | Reads texts of specific outbound delivery header.
*OutboundDeliveryTextsApi* | [**aOutbDeliveryHeaderDeliveryDocumentToDeliveryDocumentTextPost**](docs/Api/OutboundDeliveryTextsApi.md#aoutbdeliveryheaderdeliverydocumenttodeliverydocumenttextpost) | **POST** /A_OutbDeliveryHeader(&#39;{DeliveryDocument}&#39;)/to_DeliveryDocumentText | Creates outbound delivery header texts.
*OutboundDeliveryTextsApi* | [**aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguageDelete**](docs/Api/OutboundDeliveryTextsApi.md#aoutbdeliveryheadertextdeliverydocumentdeliverydocumenttextelementtextelementlanguagelanguagedelete) | **DELETE** /A_OutbDeliveryHeaderText(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,TextElement&#x3D;&#39;{TextElement}&#39;,Language&#x3D;&#39;{Language}&#39;) | Deletes outbound delivery header texts.
*OutboundDeliveryTextsApi* | [**aOutbDeliveryHeaderTextDeliveryDocumentDeliveryDocumentTextElementTextElementLanguageLanguagePatch**](docs/Api/OutboundDeliveryTextsApi.md#aoutbdeliveryheadertextdeliverydocumentdeliverydocumenttextelementtextelementlanguagelanguagepatch) | **PATCH** /A_OutbDeliveryHeaderText(DeliveryDocument&#x3D;&#39;{DeliveryDocument}&#39;,TextElement&#x3D;&#39;{TextElement}&#39;,Language&#x3D;&#39;{Language}&#39;) | Updates outbound delivery header texts.
*OutboundDeliveryTextsApi* | [**aOutbDeliveryHeaderTextPost**](docs/Api/OutboundDeliveryTextsApi.md#aoutbdeliveryheadertextpost) | **POST** /A_OutbDeliveryHeaderText | Creates outbound delivery header texts.

## Models

- [AHandlingUnitHeaderDeliveryType](docs/Model/AHandlingUnitHeaderDeliveryType.md)
- [AHandlingUnitItemDeliveryType](docs/Model/AHandlingUnitItemDeliveryType.md)
- [AOutbDeliveryAddress2Type](docs/Model/AOutbDeliveryAddress2Type.md)
- [AOutbDeliveryAddressType](docs/Model/AOutbDeliveryAddressType.md)
- [AOutbDeliveryDocFlowType](docs/Model/AOutbDeliveryDocFlowType.md)
- [AOutbDeliveryHeaderTextType](docs/Model/AOutbDeliveryHeaderTextType.md)
- [AOutbDeliveryHeaderType](docs/Model/AOutbDeliveryHeaderType.md)
- [AOutbDeliveryItemTextType](docs/Model/AOutbDeliveryItemTextType.md)
- [AOutbDeliveryItemType](docs/Model/AOutbDeliveryItemType.md)
- [APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryType](docs/Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryType.md)
- [APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeCreateToHandlingUnitItemDelivery](docs/Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeCreateToHandlingUnitItemDelivery.md)
- [APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeToHandlingUnitItemDelivery](docs/Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeToHandlingUnitItemDelivery.md)
- [APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeUpdate](docs/Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitHeaderDeliveryTypeUpdate.md)
- [APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryType](docs/Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryType.md)
- [APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryTypeUpdate](docs/Model/APIOUTBOUNDDELIVERYSRVAHandlingUnitItemDeliveryTypeUpdate.md)
- [APIOUTBOUNDDELIVERYSRVAMaintenanceItemObjectType](docs/Model/APIOUTBOUNDDELIVERYSRVAMaintenanceItemObjectType.md)
- [APIOUTBOUNDDELIVERYSRVAMaintenanceItemObjectTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAMaintenanceItemObjectTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryAddress2Type](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryAddress2Type.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryAddress2TypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryAddress2TypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryAddress2TypeUpdate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryAddress2TypeUpdate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryAddressType](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryAddressType.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryDocFlowType](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryDocFlowType.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryDocFlowTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryDocFlowTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryDocFlowTypeUpdate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryDocFlowTypeUpdate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextType](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextType.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeUpdate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTextTypeUpdate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderType](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderType.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreateToDeliveryDocumentItem](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreateToDeliveryDocumentItem.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreateToDeliveryDocumentPartner](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreateToDeliveryDocumentPartner.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreateToDeliveryDocumentText](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreateToDeliveryDocumentText.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreateToHandlingUnitHeaderDelivery](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeCreateToHandlingUnitHeaderDelivery.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeToDeliveryDocumentItem](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeToDeliveryDocumentItem.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeToDeliveryDocumentPartner](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeToDeliveryDocumentPartner.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeToDeliveryDocumentText](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeToDeliveryDocumentText.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeToHandlingUnitHeaderDelivery](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeToHandlingUnitHeaderDelivery.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeUpdate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryHeaderTypeUpdate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextType](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextType.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeUpdate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTextTypeUpdate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemType](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemType.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeCreateToDeliveryDocumentItemText](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeCreateToDeliveryDocumentItemText.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeCreateToDocumentFlow](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeCreateToDocumentFlow.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeToDeliveryDocumentItemText](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeToDeliveryDocumentItemText.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeToDocumentFlow](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeToDocumentFlow.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryPartnerType](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryPartnerType.md)
- [APIOUTBOUNDDELIVERYSRVAOutbDeliveryPartnerTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVAOutbDeliveryPartnerTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVASerialNmbrDeliveryType](docs/Model/APIOUTBOUNDDELIVERYSRVASerialNmbrDeliveryType.md)
- [APIOUTBOUNDDELIVERYSRVASerialNmbrDeliveryTypeCreate](docs/Model/APIOUTBOUNDDELIVERYSRVASerialNmbrDeliveryTypeCreate.md)
- [APIOUTBOUNDDELIVERYSRVASerialNmbrDeliveryTypeCreateToMaintenanceItemObject](docs/Model/APIOUTBOUNDDELIVERYSRVASerialNmbrDeliveryTypeCreateToMaintenanceItemObject.md)
- [APIOUTBOUNDDELIVERYSRVASerialNmbrDeliveryTypeToMaintenanceItemObject](docs/Model/APIOUTBOUNDDELIVERYSRVASerialNmbrDeliveryTypeToMaintenanceItemObject.md)
- [APIOUTBOUNDDELIVERYSRVCreatedDeliveryItem](docs/Model/APIOUTBOUNDDELIVERYSRVCreatedDeliveryItem.md)
- [APIOUTBOUNDDELIVERYSRVHuReturn](docs/Model/APIOUTBOUNDDELIVERYSRVHuReturn.md)
- [APIOUTBOUNDDELIVERYSRVPickingReport](docs/Model/APIOUTBOUNDDELIVERYSRVPickingReport.md)
- [APIOUTBOUNDDELIVERYSRVReturn](docs/Model/APIOUTBOUNDDELIVERYSRVReturn.md)
- [ASerialNmbrDeliveryType](docs/Model/ASerialNmbrDeliveryType.md)
- [CollectionOfAHandlingUnitHeaderDeliveryType](docs/Model/CollectionOfAHandlingUnitHeaderDeliveryType.md)
- [CollectionOfAMaintenanceItemObjectType](docs/Model/CollectionOfAMaintenanceItemObjectType.md)
- [CollectionOfAOutbDeliveryAddress2Type](docs/Model/CollectionOfAOutbDeliveryAddress2Type.md)
- [CollectionOfAOutbDeliveryDocFlowType](docs/Model/CollectionOfAOutbDeliveryDocFlowType.md)
- [CollectionOfAOutbDeliveryHeaderTextType](docs/Model/CollectionOfAOutbDeliveryHeaderTextType.md)
- [CollectionOfAOutbDeliveryHeaderType](docs/Model/CollectionOfAOutbDeliveryHeaderType.md)
- [CollectionOfAOutbDeliveryItemTextType](docs/Model/CollectionOfAOutbDeliveryItemTextType.md)
- [CollectionOfAOutbDeliveryItemType](docs/Model/CollectionOfAOutbDeliveryItemType.md)
- [CollectionOfAOutbDeliveryPartnerType](docs/Model/CollectionOfAOutbDeliveryPartnerType.md)
- [CollectionOfPickingReport](docs/Model/CollectionOfPickingReport.md)
- [CollectionOfReturn](docs/Model/CollectionOfReturn.md)
- [CreatedDeliveryItem](docs/Model/CreatedDeliveryItem.md)
- [CreatedDeliveryItemD](docs/Model/CreatedDeliveryItemD.md)
- [Error](docs/Model/Error.md)
- [ErrorError](docs/Model/ErrorError.md)
- [ErrorErrorMessage](docs/Model/ErrorErrorMessage.md)
- [HuReturn](docs/Model/HuReturn.md)
- [HuReturn1](docs/Model/HuReturn1.md)
- [HuReturn1D](docs/Model/HuReturn1D.md)
- [HuReturnD](docs/Model/HuReturnD.md)
- [ModifiedAOutbDeliveryAddress2Type](docs/Model/ModifiedAOutbDeliveryAddress2Type.md)
- [ModifiedAOutbDeliveryDocFlowType](docs/Model/ModifiedAOutbDeliveryDocFlowType.md)
- [ModifiedAOutbDeliveryHeaderTextType](docs/Model/ModifiedAOutbDeliveryHeaderTextType.md)
- [ModifiedAOutbDeliveryHeaderType](docs/Model/ModifiedAOutbDeliveryHeaderType.md)
- [ModifiedAOutbDeliveryItemTextType](docs/Model/ModifiedAOutbDeliveryItemTextType.md)
- [ModifiedAOutbDeliveryItemType](docs/Model/ModifiedAOutbDeliveryItemType.md)
- [Wrapper](docs/Model/Wrapper.md)
- [Wrapper1](docs/Model/Wrapper1.md)
- [Wrapper10](docs/Model/Wrapper10.md)
- [Wrapper2](docs/Model/Wrapper2.md)
- [Wrapper3](docs/Model/Wrapper3.md)
- [Wrapper4](docs/Model/Wrapper4.md)
- [Wrapper5](docs/Model/Wrapper5.md)
- [Wrapper6](docs/Model/Wrapper6.md)
- [Wrapper7](docs/Model/Wrapper7.md)
- [Wrapper8](docs/Model/Wrapper8.md)
- [Wrapper9](docs/Model/Wrapper9.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2Auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://{host}:{port}`
- **Scopes**: 
    - **API_OUTBOUND_DELIVERY_SRV_0002**: 

### BasicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
