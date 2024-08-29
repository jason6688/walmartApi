<?php

/**
 * Order
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Orders;

use Walmart\Models\BaseModel;

/**
 * Order Class Doc Comment
 *
 * @category Class

 * @description Information about the purchase order

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Order extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'purchaseOrderId' => 'string',
        'customerOrderId' => 'string',
        'customerEmailId' => 'string',
        'orderDate' => 'string',
        'shippingInfo' => '\Walmart\Models\MP\MX\Orders\ShippingInfo',
        'billingInfo' => '\Walmart\Models\MP\MX\Orders\BillingInfo',
        'totalLines' => 'string',
        'totalQuantity' => 'string',
        'orderLines' => '\Walmart\Models\MP\MX\Orders\OrderLine[]',
        'shipments' => '\Walmart\Models\MP\MX\Orders\Shipment[]',
        'orderTotal' => '\Walmart\Models\MP\MX\Orders\OrderTotal',
        'rfc' => 'string',
        'paymentMethod' => 'string',
        'cfdi' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'purchaseOrderId' => null,
        'customerOrderId' => null,
        'customerEmailId' => null,
        'orderDate' => null,
        'shippingInfo' => null,
        'billingInfo' => null,
        'totalLines' => null,
        'totalQuantity' => null,
        'orderLines' => null,
        'shipments' => null,
        'orderTotal' => null,
        'rfc' => null,
        'paymentMethod' => null,
        'cfdi' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'purchaseOrderId' => false,
        'customerOrderId' => false,
        'customerEmailId' => false,
        'orderDate' => false,
        'shippingInfo' => false,
        'billingInfo' => false,
        'totalLines' => false,
        'totalQuantity' => false,
        'orderLines' => false,
        'shipments' => false,
        'orderTotal' => false,
        'rfc' => false,
        'paymentMethod' => false,
        'cfdi' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'purchaseOrderId' => 'purchaseOrderId',
        'customerOrderId' => 'customerOrderId',
        'customerEmailId' => 'customerEmailId',
        'orderDate' => 'orderDate',
        'shippingInfo' => 'shippingInfo',
        'billingInfo' => 'billingInfo',
        'totalLines' => 'totalLines',
        'totalQuantity' => 'totalQuantity',
        'orderLines' => 'orderLines',
        'shipments' => 'shipments',
        'orderTotal' => 'orderTotal',
        'rfc' => 'rfc',
        'paymentMethod' => 'paymentMethod',
        'cfdi' => 'cfdi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchaseOrderId' => 'setPurchaseOrderId',
        'customerOrderId' => 'setCustomerOrderId',
        'customerEmailId' => 'setCustomerEmailId',
        'orderDate' => 'setOrderDate',
        'shippingInfo' => 'setShippingInfo',
        'billingInfo' => 'setBillingInfo',
        'totalLines' => 'setTotalLines',
        'totalQuantity' => 'setTotalQuantity',
        'orderLines' => 'setOrderLines',
        'shipments' => 'setShipments',
        'orderTotal' => 'setOrderTotal',
        'rfc' => 'setRfc',
        'paymentMethod' => 'setPaymentMethod',
        'cfdi' => 'setCfdi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchaseOrderId' => 'getPurchaseOrderId',
        'customerOrderId' => 'getCustomerOrderId',
        'customerEmailId' => 'getCustomerEmailId',
        'orderDate' => 'getOrderDate',
        'shippingInfo' => 'getShippingInfo',
        'billingInfo' => 'getBillingInfo',
        'totalLines' => 'getTotalLines',
        'totalQuantity' => 'getTotalQuantity',
        'orderLines' => 'getOrderLines',
        'shipments' => 'getShipments',
        'orderTotal' => 'getOrderTotal',
        'rfc' => 'getRfc',
        'paymentMethod' => 'getPaymentMethod',
        'cfdi' => 'getCfdi'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('purchaseOrderId', $data ?? [], null);
        $this->setIfExists('customerOrderId', $data ?? [], null);
        $this->setIfExists('customerEmailId', $data ?? [], null);
        $this->setIfExists('orderDate', $data ?? [], null);
        $this->setIfExists('shippingInfo', $data ?? [], null);
        $this->setIfExists('billingInfo', $data ?? [], null);
        $this->setIfExists('totalLines', $data ?? [], null);
        $this->setIfExists('totalQuantity', $data ?? [], null);
        $this->setIfExists('orderLines', $data ?? [], null);
        $this->setIfExists('shipments', $data ?? [], null);
        $this->setIfExists('orderTotal', $data ?? [], null);
        $this->setIfExists('rfc', $data ?? [], null);
        $this->setIfExists('paymentMethod', $data ?? [], null);
        $this->setIfExists('cfdi', $data ?? [], null);
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
     * Gets purchaseOrderId
     *
     * @return string|null
    
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchaseOrderId'];
    }

    /**
     * Sets purchaseOrderId
     *
     * @param string|null $purchaseOrderId A unique ID associated with the seller's purchase order
     *
     * @return self
    
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        if (is_null($purchaseOrderId)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderId cannot be null');
        }

        $this->container['purchaseOrderId'] = $purchaseOrderId;
        return $this;
    }

    /**
     * Gets customerOrderId
     *
     * @return string|null
    
     */
    public function getCustomerOrderId()
    {
        return $this->container['customerOrderId'];
    }

    /**
     * Sets customerOrderId
     *
     * @param string|null $customerOrderId A unique ID associated with the sales order for specified customer
     *
     * @return self
    
     */
    public function setCustomerOrderId($customerOrderId)
    {
        if (is_null($customerOrderId)) {
            throw new \InvalidArgumentException('non-nullable customerOrderId cannot be null');
        }

        $this->container['customerOrderId'] = $customerOrderId;
        return $this;
    }

    /**
     * Gets customerEmailId
     *
     * @return string|null
    
     */
    public function getCustomerEmailId()
    {
        return $this->container['customerEmailId'];
    }

    /**
     * Sets customerEmailId
     *
     * @param string|null $customerEmailId The email address of the customer for the sales order
     *
     * @return self
    
     */
    public function setCustomerEmailId($customerEmailId)
    {
        if (is_null($customerEmailId)) {
            throw new \InvalidArgumentException('non-nullable customerEmailId cannot be null');
        }

        $this->container['customerEmailId'] = $customerEmailId;
        return $this;
    }

    /**
     * Gets orderDate
     *
     * @return string|null
    
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     *
     * @param string|null $orderDate The date the customer submitted the sales order
     *
     * @return self
    
     */
    public function setOrderDate($orderDate)
    {
        if (is_null($orderDate)) {
            throw new \InvalidArgumentException('non-nullable orderDate cannot be null');
        }

        $this->container['orderDate'] = $orderDate;
        return $this;
    }

    /**
     * Gets shippingInfo
     *
     * @return \Walmart\Models\MP\MX\Orders\ShippingInfo|null
    
     */
    public function getShippingInfo()
    {
        return $this->container['shippingInfo'];
    }

    /**
     * Sets shippingInfo
     *
     * @param \Walmart\Models\MP\MX\Orders\ShippingInfo|null $shippingInfo shippingInfo
     *
     * @return self
    
     */
    public function setShippingInfo($shippingInfo)
    {
        if (is_null($shippingInfo)) {
            throw new \InvalidArgumentException('non-nullable shippingInfo cannot be null');
        }

        $this->container['shippingInfo'] = $shippingInfo;
        return $this;
    }

    /**
     * Gets billingInfo
     *
     * @return \Walmart\Models\MP\MX\Orders\BillingInfo|null
    
     */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
     * Sets billingInfo
     *
     * @param \Walmart\Models\MP\MX\Orders\BillingInfo|null $billingInfo billingInfo
     *
     * @return self
    
     */
    public function setBillingInfo($billingInfo)
    {
        if (is_null($billingInfo)) {
            throw new \InvalidArgumentException('non-nullable billingInfo cannot be null');
        }

        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
     * Gets totalLines
     *
     * @return string|null
    
     */
    public function getTotalLines()
    {
        return $this->container['totalLines'];
    }

    /**
     * Sets totalLines
     *
     * @param string|null $totalLines Total number of order lines in the order
     *
     * @return self
    
     */
    public function setTotalLines($totalLines)
    {
        if (is_null($totalLines)) {
            throw new \InvalidArgumentException('non-nullable totalLines cannot be null');
        }

        $this->container['totalLines'] = $totalLines;
        return $this;
    }

    /**
     * Gets totalQuantity
     *
     * @return string|null
    
     */
    public function getTotalQuantity()
    {
        return $this->container['totalQuantity'];
    }

    /**
     * Sets totalQuantity
     *
     * @param string|null $totalQuantity Total number of items in all order lines in the order
     *
     * @return self
    
     */
    public function setTotalQuantity($totalQuantity)
    {
        if (is_null($totalQuantity)) {
            throw new \InvalidArgumentException('non-nullable totalQuantity cannot be null');
        }

        $this->container['totalQuantity'] = $totalQuantity;
        return $this;
    }

    /**
     * Gets orderLines
     *
     * @return \Walmart\Models\MP\MX\Orders\OrderLine[]|null
    
     */
    public function getOrderLines()
    {
        return $this->container['orderLines'];
    }

    /**
     * Sets orderLines
     *
     * @param \Walmart\Models\MP\MX\Orders\OrderLine[]|null $orderLines A list of order lines in the order
     *
     * @return self
    
     */
    public function setOrderLines($orderLines)
    {
        if (is_null($orderLines)) {
            throw new \InvalidArgumentException('non-nullable orderLines cannot be null');
        }

        $this->container['orderLines'] = $orderLines;
        return $this;
    }

    /**
     * Gets shipments
     *
     * @return \Walmart\Models\MP\MX\Orders\Shipment[]|null
    
     */
    public function getShipments()
    {
        return $this->container['shipments'];
    }

    /**
     * Sets shipments
     *
     * @param \Walmart\Models\MP\MX\Orders\Shipment[]|null $shipments List of shipments associated with the order
     *
     * @return self
    
     */
    public function setShipments($shipments)
    {
        if (is_null($shipments)) {
            throw new \InvalidArgumentException('non-nullable shipments cannot be null');
        }

        $this->container['shipments'] = $shipments;
        return $this;
    }

    /**
     * Gets orderTotal
     *
     * @return \Walmart\Models\MP\MX\Orders\OrderTotal|null
    
     */
    public function getOrderTotal()
    {
        return $this->container['orderTotal'];
    }

    /**
     * Sets orderTotal
     *
     * @param \Walmart\Models\MP\MX\Orders\OrderTotal|null $orderTotal orderTotal
     *
     * @return self
    
     */
    public function setOrderTotal($orderTotal)
    {
        if (is_null($orderTotal)) {
            throw new \InvalidArgumentException('non-nullable orderTotal cannot be null');
        }

        $this->container['orderTotal'] = $orderTotal;
        return $this;
    }

    /**
     * Gets rfc
     *
     * @return string|null
    
     */
    public function getRfc()
    {
        return $this->container['rfc'];
    }

    /**
     * Sets rfc
     *
     * @param string|null $rfc The RFC for the order
     *
     * @return self
    
     */
    public function setRfc($rfc)
    {
        if (is_null($rfc)) {
            throw new \InvalidArgumentException('non-nullable rfc cannot be null');
        }

        $this->container['rfc'] = $rfc;
        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string|null
    
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string|null $paymentMethod The payment method used to pay for the order
     *
     * @return self
    
     */
    public function setPaymentMethod($paymentMethod)
    {
        if (is_null($paymentMethod)) {
            throw new \InvalidArgumentException('non-nullable paymentMethod cannot be null');
        }

        $this->container['paymentMethod'] = $paymentMethod;
        return $this;
    }

    /**
     * Gets cfdi
     *
     * @return string|null
    
     */
    public function getCfdi()
    {
        return $this->container['cfdi'];
    }

    /**
     * Sets cfdi
     *
     * @param string|null $cfdi Reason code of the invoice.Example: 'P01'
     *
     * @return self
    
     */
    public function setCfdi($cfdi)
    {
        if (is_null($cfdi)) {
            throw new \InvalidArgumentException('non-nullable cfdi cannot be null');
        }

        $this->container['cfdi'] = $cfdi;
        return $this;
    }
}
