<?php

/**
 * FulfillmentPlan
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
 * FulfillmentPlan Class Doc Comment
 *
 * @category Class

 * @description Fulfillment plans details.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class FulfillmentPlan extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FulfillmentPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fulfillmentModules' => '\Walmart\Models\MP\US\Fulfillment\FulfillmentModule[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fulfillmentModules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillmentModules' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillmentModules' => 'fulfillmentModules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillmentModules' => 'setFulfillmentModules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillmentModules' => 'getFulfillmentModules'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillmentModules', $data ?? [], null);
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
     * Gets fulfillmentModules
     *
     * @return \Walmart\Models\MP\US\Fulfillment\FulfillmentModule[]|null
    
     */
    public function getFulfillmentModules()
    {
        return $this->container['fulfillmentModules'];
    }

    /**
     * Sets fulfillmentModules
     *
     * @param \Walmart\Models\MP\US\Fulfillment\FulfillmentModule[]|null $fulfillmentModules Fulfillment module details.
     *
     * @return self
    
     */
    public function setFulfillmentModules($fulfillmentModules)
    {
        if (is_null($fulfillmentModules)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentModules cannot be null');
        }

        $this->container['fulfillmentModules'] = $fulfillmentModules;
        return $this;
    }
}
