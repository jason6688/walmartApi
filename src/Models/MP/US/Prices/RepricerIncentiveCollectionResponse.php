<?php

/**
 * RepricerIncentiveCollectionResponse
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Prices;

use Walmart\Models\BaseModel;

/**
 * RepricerIncentiveCollectionResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class RepricerIncentiveCollectionResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RepricerIncentiveCollectionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'totalItems' => 'int',
        'items' => '\Walmart\Models\MP\US\Prices\RepricerIncentiveItems[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'totalItems' => 'int32',
        'items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'totalItems' => false,
        'items' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'totalItems' => 'totalItems',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'totalItems' => 'setTotalItems',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'totalItems' => 'getTotalItems',
        'items' => 'getItems'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('totalItems', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
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
     * Gets totalItems
     *
     * @return int|null
    
     */
    public function getTotalItems()
    {
        return $this->container['totalItems'];
    }

    /**
     * Sets totalItems
     *
     * @param int|null $totalItems totalItems
     *
     * @return self
    
     */
    public function setTotalItems($totalItems)
    {
        if (is_null($totalItems)) {
            throw new \InvalidArgumentException('non-nullable totalItems cannot be null');
        }

        $this->container['totalItems'] = $totalItems;
        return $this;
    }

    /**
     * Gets items
     *
     * @return \Walmart\Models\MP\US\Prices\RepricerIncentiveItems[]|null
    
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Walmart\Models\MP\US\Prices\RepricerIncentiveItems[]|null $items items
     *
     * @return self
    
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }

        $this->container['items'] = $items;
        return $this;
    }
}
