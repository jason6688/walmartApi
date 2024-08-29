<?php

/**
 * ReturnOrder
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Returns;

use Walmart\Models\BaseModel;

/**
 * ReturnOrder Class Doc Comment
 *
 * @category Class

 * @description List of returns for the seller.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class ReturnOrder extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReturnOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'returnOrderId' => 'string',
        'customerEmailId' => 'string',
        'returnType' => 'string',
        'replacementCustomerOrderId' => 'string',
        'customerName' => '\Walmart\Models\MP\US\Returns\CustomerName',
        'customerOrderId' => 'string',
        'returnOrderDate' => '\DateTime',
        'returnByDate' => '\DateTime',
        'refundMode' => 'string',
        'totalRefundAmount' => '\Walmart\Models\MP\US\Returns\Money',
        'returnLineGroups' => '\Walmart\Models\MP\US\Returns\ReturnLineGroup[]',
        'returnOrderLines' => '\Walmart\Models\MP\US\Returns\ReturnOrderLine[]',
        'returnChannel' => '\Walmart\Models\MP\US\Returns\ReturnChannel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'returnOrderId' => null,
        'customerEmailId' => null,
        'returnType' => null,
        'replacementCustomerOrderId' => null,
        'customerName' => null,
        'customerOrderId' => null,
        'returnOrderDate' => 'date-time',
        'returnByDate' => 'date-time',
        'refundMode' => null,
        'totalRefundAmount' => null,
        'returnLineGroups' => null,
        'returnOrderLines' => null,
        'returnChannel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'returnOrderId' => false,
        'customerEmailId' => false,
        'returnType' => false,
        'replacementCustomerOrderId' => false,
        'customerName' => false,
        'customerOrderId' => false,
        'returnOrderDate' => false,
        'returnByDate' => false,
        'refundMode' => false,
        'totalRefundAmount' => false,
        'returnLineGroups' => false,
        'returnOrderLines' => false,
        'returnChannel' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'returnOrderId' => 'returnOrderId',
        'customerEmailId' => 'customerEmailId',
        'returnType' => 'returnType',
        'replacementCustomerOrderId' => 'replacementCustomerOrderId',
        'customerName' => 'customerName',
        'customerOrderId' => 'customerOrderId',
        'returnOrderDate' => 'returnOrderDate',
        'returnByDate' => 'returnByDate',
        'refundMode' => 'refundMode',
        'totalRefundAmount' => 'totalRefundAmount',
        'returnLineGroups' => 'returnLineGroups',
        'returnOrderLines' => 'returnOrderLines',
        'returnChannel' => 'returnChannel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'returnOrderId' => 'setReturnOrderId',
        'customerEmailId' => 'setCustomerEmailId',
        'returnType' => 'setReturnType',
        'replacementCustomerOrderId' => 'setReplacementCustomerOrderId',
        'customerName' => 'setCustomerName',
        'customerOrderId' => 'setCustomerOrderId',
        'returnOrderDate' => 'setReturnOrderDate',
        'returnByDate' => 'setReturnByDate',
        'refundMode' => 'setRefundMode',
        'totalRefundAmount' => 'setTotalRefundAmount',
        'returnLineGroups' => 'setReturnLineGroups',
        'returnOrderLines' => 'setReturnOrderLines',
        'returnChannel' => 'setReturnChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'returnOrderId' => 'getReturnOrderId',
        'customerEmailId' => 'getCustomerEmailId',
        'returnType' => 'getReturnType',
        'replacementCustomerOrderId' => 'getReplacementCustomerOrderId',
        'customerName' => 'getCustomerName',
        'customerOrderId' => 'getCustomerOrderId',
        'returnOrderDate' => 'getReturnOrderDate',
        'returnByDate' => 'getReturnByDate',
        'refundMode' => 'getRefundMode',
        'totalRefundAmount' => 'getTotalRefundAmount',
        'returnLineGroups' => 'getReturnLineGroups',
        'returnOrderLines' => 'getReturnOrderLines',
        'returnChannel' => 'getReturnChannel'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('returnOrderId', $data ?? [], null);
        $this->setIfExists('customerEmailId', $data ?? [], null);
        $this->setIfExists('returnType', $data ?? [], null);
        $this->setIfExists('replacementCustomerOrderId', $data ?? [], null);
        $this->setIfExists('customerName', $data ?? [], null);
        $this->setIfExists('customerOrderId', $data ?? [], null);
        $this->setIfExists('returnOrderDate', $data ?? [], null);
        $this->setIfExists('returnByDate', $data ?? [], null);
        $this->setIfExists('refundMode', $data ?? [], null);
        $this->setIfExists('totalRefundAmount', $data ?? [], null);
        $this->setIfExists('returnLineGroups', $data ?? [], null);
        $this->setIfExists('returnOrderLines', $data ?? [], null);
        $this->setIfExists('returnChannel', $data ?? [], null);
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
     * Gets returnOrderId
     *
     * @return string|null
    
     */
    public function getReturnOrderId()
    {
        return $this->container['returnOrderId'];
    }

    /**
     * Sets returnOrderId
     *
     * @param string|null $returnOrderId Return order identifier of the return order. This is the same as RMA number.
     *
     * @return self
    
     */
    public function setReturnOrderId($returnOrderId)
    {
        if (is_null($returnOrderId)) {
            throw new \InvalidArgumentException('non-nullable returnOrderId cannot be null');
        }

        $this->container['returnOrderId'] = $returnOrderId;
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
     * @param string|null $customerEmailId Customer email address
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
     * Gets returnType
     *
     * @return string|null
    
     */
    public function getReturnType()
    {
        return $this->container['returnType'];
    }

    /**
     * Sets returnType
     *
     * @param string|null $returnType Specifies if the return order is a replacement return or a regular (refund) return. Possible values are REPLACEMENT or REFUND.
     *
     * @return self
    
     */
    public function setReturnType($returnType)
    {
        if (is_null($returnType)) {
            throw new \InvalidArgumentException('non-nullable returnType cannot be null');
        }

        $this->container['returnType'] = $returnType;
        return $this;
    }

    /**
     * Gets replacementCustomerOrderId
     *
     * @return string|null
    
     */
    public function getReplacementCustomerOrderId()
    {
        return $this->container['replacementCustomerOrderId'];
    }

    /**
     * Sets replacementCustomerOrderId
     *
     * @param string|null $replacementCustomerOrderId customer order ID of the original return order on which the replacement is created.
     *
     * @return self
    
     */
    public function setReplacementCustomerOrderId($replacementCustomerOrderId)
    {
        if (is_null($replacementCustomerOrderId)) {
            throw new \InvalidArgumentException('non-nullable replacementCustomerOrderId cannot be null');
        }

        $this->container['replacementCustomerOrderId'] = $replacementCustomerOrderId;
        return $this;
    }

    /**
     * Gets customerName
     *
     * @return \Walmart\Models\MP\US\Returns\CustomerName|null
    
     */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
     * Sets customerName
     *
     * @param \Walmart\Models\MP\US\Returns\CustomerName|null $customerName customerName
     *
     * @return self
    
     */
    public function setCustomerName($customerName)
    {
        if (is_null($customerName)) {
            throw new \InvalidArgumentException('non-nullable customerName cannot be null');
        }

        $this->container['customerName'] = $customerName;
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
     * Gets returnOrderDate
     *
     * @return \DateTime|null
    
     */
    public function getReturnOrderDate()
    {
        return $this->container['returnOrderDate'];
    }

    /**
     * Sets returnOrderDate
     *
     * @param \DateTime|null $returnOrderDate Date format for return order date
     *
     * @return self
    
     */
    public function setReturnOrderDate($returnOrderDate)
    {
        if (is_null($returnOrderDate)) {
            throw new \InvalidArgumentException('non-nullable returnOrderDate cannot be null');
        }

        $this->container['returnOrderDate'] = $returnOrderDate;
        return $this;
    }

    /**
     * Gets returnByDate
     *
     * @return \DateTime|null
    
     */
    public function getReturnByDate()
    {
        return $this->container['returnByDate'];
    }

    /**
     * Sets returnByDate
     *
     * @param \DateTime|null $returnByDate Date format for return by order date
     *
     * @return self
    
     */
    public function setReturnByDate($returnByDate)
    {
        if (is_null($returnByDate)) {
            throw new \InvalidArgumentException('non-nullable returnByDate cannot be null');
        }

        $this->container['returnByDate'] = $returnByDate;
        return $this;
    }

    /**
     * Gets refundMode
     *
     * @return string|null
    
     */
    public function getRefundMode()
    {
        return $this->container['refundMode'];
    }

    /**
     * Sets refundMode
     *
     * @param string|null $refundMode Determines when the refund was/will be issued to the customer
     *
     * @return self
    
     */
    public function setRefundMode($refundMode)
    {
        if (is_null($refundMode)) {
            throw new \InvalidArgumentException('non-nullable refundMode cannot be null');
        }

        $this->container['refundMode'] = $refundMode;
        return $this;
    }

    /**
     * Gets totalRefundAmount
     *
     * @return \Walmart\Models\MP\US\Returns\Money|null
    
     */
    public function getTotalRefundAmount()
    {
        return $this->container['totalRefundAmount'];
    }

    /**
     * Sets totalRefundAmount
     *
     * @param \Walmart\Models\MP\US\Returns\Money|null $totalRefundAmount totalRefundAmount
     *
     * @return self
    
     */
    public function setTotalRefundAmount($totalRefundAmount)
    {
        if (is_null($totalRefundAmount)) {
            throw new \InvalidArgumentException('non-nullable totalRefundAmount cannot be null');
        }

        $this->container['totalRefundAmount'] = $totalRefundAmount;
        return $this;
    }

    /**
     * Gets returnLineGroups
     *
     * @return \Walmart\Models\MP\US\Returns\ReturnLineGroup[]|null
    
     */
    public function getReturnLineGroups()
    {
        return $this->container['returnLineGroups'];
    }

    /**
     * Sets returnLineGroups
     *
     * @param \Walmart\Models\MP\US\Returns\ReturnLineGroup[]|null $returnLineGroups These groups are created per label or type of carrier service required. (e.g., If order has some lines that can be clubbed and mailed together as a smart post then they belong to one return group. If a line is bulky and needs a different type of carrier service, then that line will be part of different group. Customer gets multiple labels depending on how many groups are created for the entire order.)
     *
     * @return self
    
     */
    public function setReturnLineGroups($returnLineGroups)
    {
        if (is_null($returnLineGroups)) {
            throw new \InvalidArgumentException('non-nullable returnLineGroups cannot be null');
        }

        $this->container['returnLineGroups'] = $returnLineGroups;
        return $this;
    }

    /**
     * Gets returnOrderLines
     *
     * @return \Walmart\Models\MP\US\Returns\ReturnOrderLine[]|null
    
     */
    public function getReturnOrderLines()
    {
        return $this->container['returnOrderLines'];
    }

    /**
     * Sets returnOrderLines
     *
     * @param \Walmart\Models\MP\US\Returns\ReturnOrderLine[]|null $returnOrderLines A list of order lines in the return order
     *
     * @return self
    
     */
    public function setReturnOrderLines($returnOrderLines)
    {
        if (is_null($returnOrderLines)) {
            throw new \InvalidArgumentException('non-nullable returnOrderLines cannot be null');
        }

        $this->container['returnOrderLines'] = $returnOrderLines;
        return $this;
    }

    /**
     * Gets returnChannel
     *
     * @return \Walmart\Models\MP\US\Returns\ReturnChannel|null
    
     */
    public function getReturnChannel()
    {
        return $this->container['returnChannel'];
    }

    /**
     * Sets returnChannel
     *
     * @param \Walmart\Models\MP\US\Returns\ReturnChannel|null $returnChannel returnChannel
     *
     * @return self
    
     */
    public function setReturnChannel($returnChannel)
    {
        if (is_null($returnChannel)) {
            throw new \InvalidArgumentException('non-nullable returnChannel cannot be null');
        }

        $this->container['returnChannel'] = $returnChannel;
        return $this;
    }
}
