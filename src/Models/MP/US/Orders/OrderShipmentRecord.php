<?php

/**
 * OrderShipmentRecord
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

namespace Walmart\Models\MP\US\Orders;

use Walmart\Models\BaseModel;

/**
 * OrderShipmentRecord Class Doc Comment
 *
 * @category Class

 * @description Information about a shipment

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class OrderShipmentRecord extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderShipmentRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'processMode' => 'string',
        'orderLines' => '\Walmart\Models\MP\US\Orders\RefundLinesType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'processMode' => null,
        'orderLines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'processMode' => false,
        'orderLines' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'processMode' => 'processMode',
        'orderLines' => 'orderLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'processMode' => 'setProcessMode',
        'orderLines' => 'setOrderLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'processMode' => 'getProcessMode',
        'orderLines' => 'getOrderLines'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('processMode', $data ?? [], null);
        $this->setIfExists('orderLines', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderLines'] === null) {
            $invalidProperties[] = "'orderLines' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets processMode
     *
     * @return string|null
    
     */
    public function getProcessMode()
    {
        return $this->container['processMode'];
    }

    /**
     * Sets processMode
     *
     * @param string|null $processMode Optional. Use this parameter only to update tracking information after order is shipped. Use 'PARTIAL_UPDATE' as value. Here PARTIAL_UPDATE will indicate that post shipment tracking information needs to be updated
     *
     * @return self
    
     */
    public function setProcessMode($processMode)
    {
        if (is_null($processMode)) {
            throw new \InvalidArgumentException('non-nullable processMode cannot be null');
        }

        $this->container['processMode'] = $processMode;
        return $this;
    }

    /**
     * Gets orderLines
     *
     * @return \Walmart\Models\MP\US\Orders\RefundLinesType
    
     */
    public function getOrderLines()
    {
        return $this->container['orderLines'];
    }

    /**
     * Sets orderLines
     *
     * @param \Walmart\Models\MP\US\Orders\RefundLinesType $orderLines orderLines
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
}
