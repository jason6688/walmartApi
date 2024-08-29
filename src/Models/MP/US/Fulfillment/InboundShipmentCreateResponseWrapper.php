<?php

/**
 * InboundShipmentCreateResponseWrapper
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */

/**
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * InboundShipmentCreateResponseWrapper Class Doc Comment
 *
 * @category Class

 * @description response payload

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class InboundShipmentCreateResponseWrapper extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InboundShipmentCreateResponseWrapper';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipmentId' => 'string',
        'shipToAddress' => '\Walmart\Models\MP\US\Fulfillment\ShipToAddress',
        'shipmentItems' => '\Walmart\Models\MP\US\Fulfillment\ShipmentItem[]',
        'expectedDeliveryDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipmentId' => null,
        'shipToAddress' => null,
        'shipmentItems' => null,
        'expectedDeliveryDate' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipmentId' => false,
        'shipToAddress' => false,
        'shipmentItems' => false,
        'expectedDeliveryDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipmentId' => 'shipmentId',
        'shipToAddress' => 'shipToAddress',
        'shipmentItems' => 'shipmentItems',
        'expectedDeliveryDate' => 'expectedDeliveryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipmentId' => 'setShipmentId',
        'shipToAddress' => 'setShipToAddress',
        'shipmentItems' => 'setShipmentItems',
        'expectedDeliveryDate' => 'setExpectedDeliveryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipmentId' => 'getShipmentId',
        'shipToAddress' => 'getShipToAddress',
        'shipmentItems' => 'getShipmentItems',
        'expectedDeliveryDate' => 'getExpectedDeliveryDate'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipmentId', $data ?? [], null);
        $this->setIfExists('shipToAddress', $data ?? [], null);
        $this->setIfExists('shipmentItems', $data ?? [], null);
        $this->setIfExists('expectedDeliveryDate', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }

    /**
     * Gets shipmentId
     *
     * @return string|null
    
     */
    public function getShipmentId()
    {
        return $this->container['shipmentId'];
    }

    /**
     * Sets shipmentId
     *
     * @param string|null $shipmentId Unique ID identifying each shipment
     *
     * @return self
    
     */
    public function setShipmentId($shipmentId)
    {
        if (is_null($shipmentId)) {
            throw new \InvalidArgumentException('non-nullable shipmentId cannot be null');
        }

        $this->container['shipmentId'] = $shipmentId;
        return $this;
    }

    /**
     * Gets shipToAddress
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ShipToAddress|null
    
     */
    public function getShipToAddress()
    {
        return $this->container['shipToAddress'];
    }

    /**
     * Sets shipToAddress
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ShipToAddress|null $shipToAddress shipToAddress
     *
     * @return self
    
     */
    public function setShipToAddress($shipToAddress)
    {
        if (is_null($shipToAddress)) {
            throw new \InvalidArgumentException('non-nullable shipToAddress cannot be null');
        }

        $this->container['shipToAddress'] = $shipToAddress;
        return $this;
    }

    /**
     * Gets shipmentItems
     *
     * @return \Walmart\Models\MP\US\Fulfillment\ShipmentItem[]|null
    
     */
    public function getShipmentItems()
    {
        return $this->container['shipmentItems'];
    }

    /**
     * Sets shipmentItems
     *
     * @param \Walmart\Models\MP\US\Fulfillment\ShipmentItem[]|null $shipmentItems The items which needs to be send in the shipment
     *
     * @return self
    
     */
    public function setShipmentItems($shipmentItems)
    {
        if (is_null($shipmentItems)) {
            throw new \InvalidArgumentException('non-nullable shipmentItems cannot be null');
        }

        $this->container['shipmentItems'] = $shipmentItems;
        return $this;
    }

    /**
     * Gets expectedDeliveryDate
     *
     * @return \DateTime|null
    
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expectedDeliveryDate'];
    }

    /**
     * Sets expectedDeliveryDate
     *
     * @param \DateTime|null $expectedDeliveryDate expected delivery date for inbounding shipment. Can be different from provided in the rquest based on network capacity
     *
     * @return self
    
     */
    public function setExpectedDeliveryDate($expectedDeliveryDate)
    {
        if (is_null($expectedDeliveryDate)) {
            throw new \InvalidArgumentException('non-nullable expectedDeliveryDate cannot be null');
        }

        $this->container['expectedDeliveryDate'] = $expectedDeliveryDate;
        return $this;
    }
}
