<?php

/**
 * OrderSummary
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

namespace Walmart\Models\Supplier\US\DSVOrders;

use Walmart\Models\BaseModel;

/**
 * OrderSummary Class Doc Comment
 *
 * @category Class

 * @description Order Summary

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class OrderSummary extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'totalAmount' => '\Walmart\Models\Supplier\US\DSVOrders\MoneyType',
        'orderSubTotals' => '\Walmart\Models\Supplier\US\DSVOrders\OrderSubTotal[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'totalAmount' => null,
        'orderSubTotals' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'totalAmount' => false,
        'orderSubTotals' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'totalAmount' => 'totalAmount',
        'orderSubTotals' => 'orderSubTotals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'totalAmount' => 'setTotalAmount',
        'orderSubTotals' => 'setOrderSubTotals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'totalAmount' => 'getTotalAmount',
        'orderSubTotals' => 'getOrderSubTotals'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('orderSubTotals', $data ?? [], null);
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
     * Gets totalAmount
     *
     * @return \Walmart\Models\Supplier\US\DSVOrders\MoneyType|null
    
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param \Walmart\Models\Supplier\US\DSVOrders\MoneyType|null $totalAmount totalAmount
     *
     * @return self
    
     */
    public function setTotalAmount($totalAmount)
    {
        if (is_null($totalAmount)) {
            throw new \InvalidArgumentException('non-nullable totalAmount cannot be null');
        }

        $this->container['totalAmount'] = $totalAmount;
        return $this;
    }

    /**
     * Gets orderSubTotals
     *
     * @return \Walmart\Models\Supplier\US\DSVOrders\OrderSubTotal[]|null
    
     */
    public function getOrderSubTotals()
    {
        return $this->container['orderSubTotals'];
    }

    /**
     * Sets orderSubTotals
     *
     * @param \Walmart\Models\Supplier\US\DSVOrders\OrderSubTotal[]|null $orderSubTotals orderSubTotals
     *
     * @return self
    
     */
    public function setOrderSubTotals($orderSubTotals)
    {
        if (is_null($orderSubTotals)) {
            throw new \InvalidArgumentException('non-nullable orderSubTotals cannot be null');
        }

        $this->container['orderSubTotals'] = $orderSubTotals;
        return $this;
    }
}
