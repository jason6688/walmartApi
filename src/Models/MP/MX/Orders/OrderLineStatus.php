<?php

/**
 * OrderLineStatus
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
 * OrderLineStatus Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class OrderLineStatus extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderLineStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'status' => 'string',
        'statusCode' => 'string',
        'statusQuantity' => '\Walmart\Models\MP\MX\Orders\StatusQuantity',
        'cancellationReason' => 'string',
        'statusDate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'status' => null,
        'statusCode' => null,
        'statusQuantity' => null,
        'cancellationReason' => null,
        'statusDate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'statusCode' => false,
        'statusQuantity' => false,
        'cancellationReason' => false,
        'statusDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'status',
        'statusCode' => 'statusCode',
        'statusQuantity' => 'statusQuantity',
        'cancellationReason' => 'cancellationReason',
        'statusDate' => 'statusDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'statusCode' => 'setStatusCode',
        'statusQuantity' => 'setStatusQuantity',
        'cancellationReason' => 'setCancellationReason',
        'statusDate' => 'setStatusDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'statusCode' => 'getStatusCode',
        'statusQuantity' => 'getStatusQuantity',
        'cancellationReason' => 'getCancellationReason',
        'statusDate' => 'getStatusDate'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('statusQuantity', $data ?? [], null);
        $this->setIfExists('cancellationReason', $data ?? [], null);
        $this->setIfExists('statusDate', $data ?? [], null);
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
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return string|null
    
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param string|null $statusCode statusCode
     *
     * @return self
    
     */
    public function setStatusCode($statusCode)
    {
        if (is_null($statusCode)) {
            throw new \InvalidArgumentException('non-nullable statusCode cannot be null');
        }

        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
     * Gets statusQuantity
     *
     * @return \Walmart\Models\MP\MX\Orders\StatusQuantity|null
    
     */
    public function getStatusQuantity()
    {
        return $this->container['statusQuantity'];
    }

    /**
     * Sets statusQuantity
     *
     * @param \Walmart\Models\MP\MX\Orders\StatusQuantity|null $statusQuantity statusQuantity
     *
     * @return self
    
     */
    public function setStatusQuantity($statusQuantity)
    {
        if (is_null($statusQuantity)) {
            throw new \InvalidArgumentException('non-nullable statusQuantity cannot be null');
        }

        $this->container['statusQuantity'] = $statusQuantity;
        return $this;
    }

    /**
     * Gets cancellationReason
     *
     * @return string|null
    
     */
    public function getCancellationReason()
    {
        return $this->container['cancellationReason'];
    }

    /**
     * Sets cancellationReason
     *
     * @param string|null $cancellationReason cancellationReason
     *
     * @return self
    
     */
    public function setCancellationReason($cancellationReason)
    {
        if (is_null($cancellationReason)) {
            throw new \InvalidArgumentException('non-nullable cancellationReason cannot be null');
        }

        $this->container['cancellationReason'] = $cancellationReason;
        return $this;
    }

    /**
     * Gets statusDate
     *
     * @return string|null
    
     */
    public function getStatusDate()
    {
        return $this->container['statusDate'];
    }

    /**
     * Sets statusDate
     *
     * @param string|null $statusDate statusDate
     *
     * @return self
    
     */
    public function setStatusDate($statusDate)
    {
        if (is_null($statusDate)) {
            throw new \InvalidArgumentException('non-nullable statusDate cannot be null');
        }

        $this->container['statusDate'] = $statusDate;
        return $this;
    }
}
