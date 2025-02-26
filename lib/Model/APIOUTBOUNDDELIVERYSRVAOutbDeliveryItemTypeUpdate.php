<?php
/**
 * APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\OutboundDelivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Outbound Delivery (A2X)
 *
 * This service enables you to create, read, update and delete outbound deliveries. It can be consumed in Fiori apps and on other user interfaces.
 *
 * The version of the OpenAPI document: 2.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\OutboundDelivery\Model;

use \ArrayAccess;
use \BeLenka\SAP\OutboundDelivery\ObjectSerializer;

/**
 * APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\OutboundDelivery
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_OUTBOUND_DELIVERY_SRV.A_OutbDeliveryItemType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actual_delivered_qty_in_base_unit' => 'float',
        'actual_delivery_quantity' => 'float',
        'batch' => 'string',
        'delivery_document_item_text' => 'string',
        'eu_delivery_item_arc_status' => 'string',
        'inventory_valuation_type' => 'string',
        'item_gross_weight' => 'float',
        'item_net_weight' => 'float',
        'item_volume' => 'float',
        'item_volume_unit' => 'string',
        'item_weight_unit' => 'string',
        'manufacture_date' => 'string',
        'material_by_customer' => 'string',
        'shelf_life_expiration_date' => 'string',
        'storage_location' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actual_delivered_qty_in_base_unit' => 'decimal',
        'actual_delivery_quantity' => 'decimal',
        'batch' => null,
        'delivery_document_item_text' => null,
        'eu_delivery_item_arc_status' => null,
        'inventory_valuation_type' => null,
        'item_gross_weight' => 'decimal',
        'item_net_weight' => 'decimal',
        'item_volume' => 'decimal',
        'item_volume_unit' => null,
        'item_weight_unit' => null,
        'manufacture_date' => null,
        'material_by_customer' => null,
        'shelf_life_expiration_date' => null,
        'storage_location' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'actual_delivered_qty_in_base_unit' => true,
		'actual_delivery_quantity' => true,
		'batch' => true,
		'delivery_document_item_text' => true,
		'eu_delivery_item_arc_status' => true,
		'inventory_valuation_type' => true,
		'item_gross_weight' => true,
		'item_net_weight' => true,
		'item_volume' => true,
		'item_volume_unit' => true,
		'item_weight_unit' => true,
		'manufacture_date' => true,
		'material_by_customer' => true,
		'shelf_life_expiration_date' => true,
		'storage_location' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'actual_delivered_qty_in_base_unit' => 'ActualDeliveredQtyInBaseUnit',
        'actual_delivery_quantity' => 'ActualDeliveryQuantity',
        'batch' => 'Batch',
        'delivery_document_item_text' => 'DeliveryDocumentItemText',
        'eu_delivery_item_arc_status' => 'EUDeliveryItemARCStatus',
        'inventory_valuation_type' => 'InventoryValuationType',
        'item_gross_weight' => 'ItemGrossWeight',
        'item_net_weight' => 'ItemNetWeight',
        'item_volume' => 'ItemVolume',
        'item_volume_unit' => 'ItemVolumeUnit',
        'item_weight_unit' => 'ItemWeightUnit',
        'manufacture_date' => 'ManufactureDate',
        'material_by_customer' => 'MaterialByCustomer',
        'shelf_life_expiration_date' => 'ShelfLifeExpirationDate',
        'storage_location' => 'StorageLocation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actual_delivered_qty_in_base_unit' => 'setActualDeliveredQtyInBaseUnit',
        'actual_delivery_quantity' => 'setActualDeliveryQuantity',
        'batch' => 'setBatch',
        'delivery_document_item_text' => 'setDeliveryDocumentItemText',
        'eu_delivery_item_arc_status' => 'setEuDeliveryItemArcStatus',
        'inventory_valuation_type' => 'setInventoryValuationType',
        'item_gross_weight' => 'setItemGrossWeight',
        'item_net_weight' => 'setItemNetWeight',
        'item_volume' => 'setItemVolume',
        'item_volume_unit' => 'setItemVolumeUnit',
        'item_weight_unit' => 'setItemWeightUnit',
        'manufacture_date' => 'setManufactureDate',
        'material_by_customer' => 'setMaterialByCustomer',
        'shelf_life_expiration_date' => 'setShelfLifeExpirationDate',
        'storage_location' => 'setStorageLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actual_delivered_qty_in_base_unit' => 'getActualDeliveredQtyInBaseUnit',
        'actual_delivery_quantity' => 'getActualDeliveryQuantity',
        'batch' => 'getBatch',
        'delivery_document_item_text' => 'getDeliveryDocumentItemText',
        'eu_delivery_item_arc_status' => 'getEuDeliveryItemArcStatus',
        'inventory_valuation_type' => 'getInventoryValuationType',
        'item_gross_weight' => 'getItemGrossWeight',
        'item_net_weight' => 'getItemNetWeight',
        'item_volume' => 'getItemVolume',
        'item_volume_unit' => 'getItemVolumeUnit',
        'item_weight_unit' => 'getItemWeightUnit',
        'manufacture_date' => 'getManufactureDate',
        'material_by_customer' => 'getMaterialByCustomer',
        'shelf_life_expiration_date' => 'getShelfLifeExpirationDate',
        'storage_location' => 'getStorageLocation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('actual_delivered_qty_in_base_unit', $data ?? [], null);
        $this->setIfExists('actual_delivery_quantity', $data ?? [], null);
        $this->setIfExists('batch', $data ?? [], null);
        $this->setIfExists('delivery_document_item_text', $data ?? [], null);
        $this->setIfExists('eu_delivery_item_arc_status', $data ?? [], null);
        $this->setIfExists('inventory_valuation_type', $data ?? [], null);
        $this->setIfExists('item_gross_weight', $data ?? [], null);
        $this->setIfExists('item_net_weight', $data ?? [], null);
        $this->setIfExists('item_volume', $data ?? [], null);
        $this->setIfExists('item_volume_unit', $data ?? [], null);
        $this->setIfExists('item_weight_unit', $data ?? [], null);
        $this->setIfExists('manufacture_date', $data ?? [], null);
        $this->setIfExists('material_by_customer', $data ?? [], null);
        $this->setIfExists('shelf_life_expiration_date', $data ?? [], null);
        $this->setIfExists('storage_location', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['batch']) && (mb_strlen($this->container['batch']) > 10)) {
            $invalidProperties[] = "invalid value for 'batch', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['delivery_document_item_text']) && (mb_strlen($this->container['delivery_document_item_text']) > 40)) {
            $invalidProperties[] = "invalid value for 'delivery_document_item_text', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['eu_delivery_item_arc_status']) && (mb_strlen($this->container['eu_delivery_item_arc_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'eu_delivery_item_arc_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['inventory_valuation_type']) && (mb_strlen($this->container['inventory_valuation_type']) > 10)) {
            $invalidProperties[] = "invalid value for 'inventory_valuation_type', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['item_volume_unit']) && (mb_strlen($this->container['item_volume_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'item_volume_unit', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['item_weight_unit']) && (mb_strlen($this->container['item_weight_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'item_weight_unit', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['material_by_customer']) && (mb_strlen($this->container['material_by_customer']) > 35)) {
            $invalidProperties[] = "invalid value for 'material_by_customer', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['storage_location']) && (mb_strlen($this->container['storage_location']) > 4)) {
            $invalidProperties[] = "invalid value for 'storage_location', the character length must be smaller than or equal to 4.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets actual_delivered_qty_in_base_unit
     *
     * @return float|null
     */
    public function getActualDeliveredQtyInBaseUnit()
    {
        return $this->container['actual_delivered_qty_in_base_unit'];
    }

    /**
     * Sets actual_delivered_qty_in_base_unit
     *
     * @param float|null $actual_delivered_qty_in_base_unit actual_delivered_qty_in_base_unit
     *
     * @return self
     */
    public function setActualDeliveredQtyInBaseUnit($actual_delivered_qty_in_base_unit)
    {
        if (is_null($actual_delivered_qty_in_base_unit)) {
            array_push($this->openAPINullablesSetToNull, 'actual_delivered_qty_in_base_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('actual_delivered_qty_in_base_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['actual_delivered_qty_in_base_unit'] = $actual_delivered_qty_in_base_unit;

        return $this;
    }

    /**
     * Gets actual_delivery_quantity
     *
     * @return float|null
     */
    public function getActualDeliveryQuantity()
    {
        return $this->container['actual_delivery_quantity'];
    }

    /**
     * Sets actual_delivery_quantity
     *
     * @param float|null $actual_delivery_quantity actual_delivery_quantity
     *
     * @return self
     */
    public function setActualDeliveryQuantity($actual_delivery_quantity)
    {
        if (is_null($actual_delivery_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'actual_delivery_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('actual_delivery_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['actual_delivery_quantity'] = $actual_delivery_quantity;

        return $this;
    }

    /**
     * Gets batch
     *
     * @return string|null
     */
    public function getBatch()
    {
        return $this->container['batch'];
    }

    /**
     * Sets batch
     *
     * @param string|null $batch batch
     *
     * @return self
     */
    public function setBatch($batch)
    {
        if (is_null($batch)) {
            array_push($this->openAPINullablesSetToNull, 'batch');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('batch', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($batch) && (mb_strlen($batch) > 10)) {
            throw new \InvalidArgumentException('invalid length for $batch when calling APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate., must be smaller than or equal to 10.');
        }

        $this->container['batch'] = $batch;

        return $this;
    }

    /**
     * Gets delivery_document_item_text
     *
     * @return string|null
     */
    public function getDeliveryDocumentItemText()
    {
        return $this->container['delivery_document_item_text'];
    }

    /**
     * Sets delivery_document_item_text
     *
     * @param string|null $delivery_document_item_text delivery_document_item_text
     *
     * @return self
     */
    public function setDeliveryDocumentItemText($delivery_document_item_text)
    {
        if (is_null($delivery_document_item_text)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_document_item_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_document_item_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($delivery_document_item_text) && (mb_strlen($delivery_document_item_text) > 40)) {
            throw new \InvalidArgumentException('invalid length for $delivery_document_item_text when calling APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate., must be smaller than or equal to 40.');
        }

        $this->container['delivery_document_item_text'] = $delivery_document_item_text;

        return $this;
    }

    /**
     * Gets eu_delivery_item_arc_status
     *
     * @return string|null
     */
    public function getEuDeliveryItemArcStatus()
    {
        return $this->container['eu_delivery_item_arc_status'];
    }

    /**
     * Sets eu_delivery_item_arc_status
     *
     * @param string|null $eu_delivery_item_arc_status eu_delivery_item_arc_status
     *
     * @return self
     */
    public function setEuDeliveryItemArcStatus($eu_delivery_item_arc_status)
    {
        if (is_null($eu_delivery_item_arc_status)) {
            array_push($this->openAPINullablesSetToNull, 'eu_delivery_item_arc_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eu_delivery_item_arc_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($eu_delivery_item_arc_status) && (mb_strlen($eu_delivery_item_arc_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $eu_delivery_item_arc_status when calling APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate., must be smaller than or equal to 1.');
        }

        $this->container['eu_delivery_item_arc_status'] = $eu_delivery_item_arc_status;

        return $this;
    }

    /**
     * Gets inventory_valuation_type
     *
     * @return string|null
     */
    public function getInventoryValuationType()
    {
        return $this->container['inventory_valuation_type'];
    }

    /**
     * Sets inventory_valuation_type
     *
     * @param string|null $inventory_valuation_type inventory_valuation_type
     *
     * @return self
     */
    public function setInventoryValuationType($inventory_valuation_type)
    {
        if (is_null($inventory_valuation_type)) {
            array_push($this->openAPINullablesSetToNull, 'inventory_valuation_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inventory_valuation_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($inventory_valuation_type) && (mb_strlen($inventory_valuation_type) > 10)) {
            throw new \InvalidArgumentException('invalid length for $inventory_valuation_type when calling APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate., must be smaller than or equal to 10.');
        }

        $this->container['inventory_valuation_type'] = $inventory_valuation_type;

        return $this;
    }

    /**
     * Gets item_gross_weight
     *
     * @return float|null
     */
    public function getItemGrossWeight()
    {
        return $this->container['item_gross_weight'];
    }

    /**
     * Sets item_gross_weight
     *
     * @param float|null $item_gross_weight item_gross_weight
     *
     * @return self
     */
    public function setItemGrossWeight($item_gross_weight)
    {
        if (is_null($item_gross_weight)) {
            array_push($this->openAPINullablesSetToNull, 'item_gross_weight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_gross_weight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['item_gross_weight'] = $item_gross_weight;

        return $this;
    }

    /**
     * Gets item_net_weight
     *
     * @return float|null
     */
    public function getItemNetWeight()
    {
        return $this->container['item_net_weight'];
    }

    /**
     * Sets item_net_weight
     *
     * @param float|null $item_net_weight item_net_weight
     *
     * @return self
     */
    public function setItemNetWeight($item_net_weight)
    {
        if (is_null($item_net_weight)) {
            array_push($this->openAPINullablesSetToNull, 'item_net_weight');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_net_weight', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['item_net_weight'] = $item_net_weight;

        return $this;
    }

    /**
     * Gets item_volume
     *
     * @return float|null
     */
    public function getItemVolume()
    {
        return $this->container['item_volume'];
    }

    /**
     * Sets item_volume
     *
     * @param float|null $item_volume item_volume
     *
     * @return self
     */
    public function setItemVolume($item_volume)
    {
        if (is_null($item_volume)) {
            array_push($this->openAPINullablesSetToNull, 'item_volume');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_volume', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['item_volume'] = $item_volume;

        return $this;
    }

    /**
     * Gets item_volume_unit
     *
     * @return string|null
     */
    public function getItemVolumeUnit()
    {
        return $this->container['item_volume_unit'];
    }

    /**
     * Sets item_volume_unit
     *
     * @param string|null $item_volume_unit item_volume_unit
     *
     * @return self
     */
    public function setItemVolumeUnit($item_volume_unit)
    {
        if (is_null($item_volume_unit)) {
            array_push($this->openAPINullablesSetToNull, 'item_volume_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_volume_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($item_volume_unit) && (mb_strlen($item_volume_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $item_volume_unit when calling APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['item_volume_unit'] = $item_volume_unit;

        return $this;
    }

    /**
     * Gets item_weight_unit
     *
     * @return string|null
     */
    public function getItemWeightUnit()
    {
        return $this->container['item_weight_unit'];
    }

    /**
     * Sets item_weight_unit
     *
     * @param string|null $item_weight_unit item_weight_unit
     *
     * @return self
     */
    public function setItemWeightUnit($item_weight_unit)
    {
        if (is_null($item_weight_unit)) {
            array_push($this->openAPINullablesSetToNull, 'item_weight_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_weight_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($item_weight_unit) && (mb_strlen($item_weight_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $item_weight_unit when calling APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['item_weight_unit'] = $item_weight_unit;

        return $this;
    }

    /**
     * Gets manufacture_date
     *
     * @return string|null
     */
    public function getManufactureDate()
    {
        return $this->container['manufacture_date'];
    }

    /**
     * Sets manufacture_date
     *
     * @param string|null $manufacture_date manufacture_date
     *
     * @return self
     */
    public function setManufactureDate($manufacture_date)
    {
        if (is_null($manufacture_date)) {
            array_push($this->openAPINullablesSetToNull, 'manufacture_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('manufacture_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['manufacture_date'] = $manufacture_date;

        return $this;
    }

    /**
     * Gets material_by_customer
     *
     * @return string|null
     */
    public function getMaterialByCustomer()
    {
        return $this->container['material_by_customer'];
    }

    /**
     * Sets material_by_customer
     *
     * @param string|null $material_by_customer material_by_customer
     *
     * @return self
     */
    public function setMaterialByCustomer($material_by_customer)
    {
        if (is_null($material_by_customer)) {
            array_push($this->openAPINullablesSetToNull, 'material_by_customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('material_by_customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($material_by_customer) && (mb_strlen($material_by_customer) > 35)) {
            throw new \InvalidArgumentException('invalid length for $material_by_customer when calling APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate., must be smaller than or equal to 35.');
        }

        $this->container['material_by_customer'] = $material_by_customer;

        return $this;
    }

    /**
     * Gets shelf_life_expiration_date
     *
     * @return string|null
     */
    public function getShelfLifeExpirationDate()
    {
        return $this->container['shelf_life_expiration_date'];
    }

    /**
     * Sets shelf_life_expiration_date
     *
     * @param string|null $shelf_life_expiration_date shelf_life_expiration_date
     *
     * @return self
     */
    public function setShelfLifeExpirationDate($shelf_life_expiration_date)
    {
        if (is_null($shelf_life_expiration_date)) {
            array_push($this->openAPINullablesSetToNull, 'shelf_life_expiration_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shelf_life_expiration_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shelf_life_expiration_date'] = $shelf_life_expiration_date;

        return $this;
    }

    /**
     * Gets storage_location
     *
     * @return string|null
     */
    public function getStorageLocation()
    {
        return $this->container['storage_location'];
    }

    /**
     * Sets storage_location
     *
     * @param string|null $storage_location storage_location
     *
     * @return self
     */
    public function setStorageLocation($storage_location)
    {
        if (is_null($storage_location)) {
            array_push($this->openAPINullablesSetToNull, 'storage_location');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('storage_location', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($storage_location) && (mb_strlen($storage_location) > 4)) {
            throw new \InvalidArgumentException('invalid length for $storage_location when calling APIOUTBOUNDDELIVERYSRVAOutbDeliveryItemTypeUpdate., must be smaller than or equal to 4.');
        }

        $this->container['storage_location'] = $storage_location;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


