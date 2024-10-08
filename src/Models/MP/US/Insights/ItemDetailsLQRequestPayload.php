<?php

/**
 * ItemDetailsLQRequestPayload
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
 * Insights Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Insights;

use Walmart\Models\BaseModel;

/**
 * ItemDetailsLQRequestPayload Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class ItemDetailsLQRequestPayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemDetailsLQRequestPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'query' => '\Walmart\Models\MP\US\Insights\Query',
        'filters' => '\Walmart\Models\MP\US\Insights\Filter[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'query' => null,
        'filters' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'query' => false,
        'filters' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'query' => 'query',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'query' => 'setQuery',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'query' => 'getQuery',
        'filters' => 'getFilters'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('query', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
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
     * Gets query
     *
     * @return \Walmart\Models\MP\US\Insights\Query|null
    
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param \Walmart\Models\MP\US\Insights\Query|null $query query
     *
     * @return self
    
     */
    public function setQuery($query)
    {
        if (is_null($query)) {
            throw new \InvalidArgumentException('non-nullable query cannot be null');
        }

        $this->container['query'] = $query;
        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Walmart\Models\MP\US\Insights\Filter[]|null
    
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Walmart\Models\MP\US\Insights\Filter[]|null $filters filters
     *
     * @return self
    
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }

        $this->container['filters'] = $filters;
        return $this;
    }
}
