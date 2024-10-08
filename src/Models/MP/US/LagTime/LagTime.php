<?php

/**
 * LagTime
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
 * Lag Time
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\LagTime;

use Walmart\Models\BaseModel;

/**
 * LagTime Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class LagTime extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LagTime';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'fulfillmentLagTime' => 'int',
        'additionalAttributes' => '\Walmart\Models\MP\US\LagTime\AdditionalAttributes[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'fulfillmentLagTime' => 'int32',
        'additionalAttributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sku' => false,
        'fulfillmentLagTime' => false,
        'additionalAttributes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku' => 'sku',
        'fulfillmentLagTime' => 'fulfillmentLagTime',
        'additionalAttributes' => 'additionalAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'fulfillmentLagTime' => 'setFulfillmentLagTime',
        'additionalAttributes' => 'setAdditionalAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'fulfillmentLagTime' => 'getFulfillmentLagTime',
        'additionalAttributes' => 'getAdditionalAttributes'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('fulfillmentLagTime', $data ?? [], null);
        $this->setIfExists('additionalAttributes', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets sku
     *
     * @return string
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku A seller-provided Product ID. Response will have decoded value.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets fulfillmentLagTime
     *
     * @return int|null
    
     */
    public function getFulfillmentLagTime()
    {
        return $this->container['fulfillmentLagTime'];
    }

    /**
     * Sets fulfillmentLagTime
     *
     * @param int|null $fulfillmentLagTime The number of days between when the item is ordered and when it is shipped
     *
     * @return self
    
     */
    public function setFulfillmentLagTime($fulfillmentLagTime)
    {
        if (is_null($fulfillmentLagTime)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentLagTime cannot be null');
        }

        $this->container['fulfillmentLagTime'] = $fulfillmentLagTime;
        return $this;
    }

    /**
     * Gets additionalAttributes
     *
     * @return \Walmart\Models\MP\US\LagTime\AdditionalAttributes[]|null
    
     */
    public function getAdditionalAttributes()
    {
        return $this->container['additionalAttributes'];
    }

    /**
     * Sets additionalAttributes
     *
     * @param \Walmart\Models\MP\US\LagTime\AdditionalAttributes[]|null $additionalAttributes additionalAttributes
     *
     * @return self
    
     */
    public function setAdditionalAttributes($additionalAttributes)
    {
        if (is_null($additionalAttributes)) {
            throw new \InvalidArgumentException('non-nullable additionalAttributes cannot be null');
        }

        $this->container['additionalAttributes'] = $additionalAttributes;
        return $this;
    }
}
