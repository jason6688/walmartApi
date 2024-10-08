<?php

/**
 * GetUnpublishedItem
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
 * GetUnpublishedItem Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class GetUnpublishedItem extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetUnpublishedItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'payload' => '\Walmart\Models\MP\US\Insights\GetUnpublishedItemsPayload[]',
        'totalCount' => 'int',
        'totalGmvAmount' => '\Walmart\Models\MP\US\Insights\TotalGmvAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payload' => null,
        'totalCount' => 'int32',
        'totalGmvAmount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payload' => false,
        'totalCount' => false,
        'totalGmvAmount' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'payload' => 'payload',
        'totalCount' => 'totalCount',
        'totalGmvAmount' => 'totalGmvAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'payload' => 'setPayload',
        'totalCount' => 'setTotalCount',
        'totalGmvAmount' => 'setTotalGmvAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'payload' => 'getPayload',
        'totalCount' => 'getTotalCount',
        'totalGmvAmount' => 'getTotalGmvAmount'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('payload', $data ?? [], null);
        $this->setIfExists('totalCount', $data ?? [], null);
        $this->setIfExists('totalGmvAmount', $data ?? [], null);
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
     * Gets payload
     *
     * @return \Walmart\Models\MP\US\Insights\GetUnpublishedItemsPayload[]|null
    
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \Walmart\Models\MP\US\Insights\GetUnpublishedItemsPayload[]|null $payload payload
     *
     * @return self
    
     */
    public function setPayload($payload)
    {
        if (is_null($payload)) {
            throw new \InvalidArgumentException('non-nullable payload cannot be null');
        }

        $this->container['payload'] = $payload;
        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
    
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount total number of unpublished items
     *
     * @return self
    
     */
    public function setTotalCount($totalCount)
    {
        if (is_null($totalCount)) {
            throw new \InvalidArgumentException('non-nullable totalCount cannot be null');
        }

        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
     * Gets totalGmvAmount
     *
     * @return \Walmart\Models\MP\US\Insights\TotalGmvAmount|null
    
     */
    public function getTotalGmvAmount()
    {
        return $this->container['totalGmvAmount'];
    }

    /**
     * Sets totalGmvAmount
     *
     * @param \Walmart\Models\MP\US\Insights\TotalGmvAmount|null $totalGmvAmount totalGmvAmount
     *
     * @return self
    
     */
    public function setTotalGmvAmount($totalGmvAmount)
    {
        if (is_null($totalGmvAmount)) {
            throw new \InvalidArgumentException('non-nullable totalGmvAmount cannot be null');
        }

        $this->container['totalGmvAmount'] = $totalGmvAmount;
        return $this;
    }
}
