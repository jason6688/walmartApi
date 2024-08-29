<?php

/**
 * GenerateReportPayload
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
 * On-request Report Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\OnRequestReports;

use Walmart\Models\BaseModel;

/**
 * GenerateReportPayload Class Doc Comment
 *
 * @category Class

 * @description Request Payload

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class GenerateReportPayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GenerateReportPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'rowFilters' => '\Walmart\Models\MP\US\OnRequestReports\GenerateReportPayloadRowFiltersInner[]',
        'excludeColumns' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'rowFilters' => null,
        'excludeColumns' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rowFilters' => false,
        'excludeColumns' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'rowFilters' => 'rowFilters',
        'excludeColumns' => 'excludeColumns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'rowFilters' => 'setRowFilters',
        'excludeColumns' => 'setExcludeColumns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'rowFilters' => 'getRowFilters',
        'excludeColumns' => 'getExcludeColumns'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('rowFilters', $data ?? [], null);
        $this->setIfExists('excludeColumns', $data ?? [], null);
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
     * Gets rowFilters
     *
     * @return \Walmart\Models\MP\US\OnRequestReports\GenerateReportPayloadRowFiltersInner[]|null
    
     */
    public function getRowFilters()
    {
        return $this->container['rowFilters'];
    }

    /**
     * Sets rowFilters
     *
     * @param \Walmart\Models\MP\US\OnRequestReports\GenerateReportPayloadRowFiltersInner[]|null $rowFilters Row Level filters
     *
     * @return self
    
     */
    public function setRowFilters($rowFilters)
    {
        if (is_null($rowFilters)) {
            throw new \InvalidArgumentException('non-nullable rowFilters cannot be null');
        }

        $this->container['rowFilters'] = $rowFilters;
        return $this;
    }

    /**
     * Gets excludeColumns
     *
     * @return string[]|null
    
     */
    public function getExcludeColumns()
    {
        return $this->container['excludeColumns'];
    }

    /**
     * Sets excludeColumns
     *
     * @param string[]|null $excludeColumns Columns to exclude from report
     *
     * @return self
    
     */
    public function setExcludeColumns($excludeColumns)
    {
        if (is_null($excludeColumns)) {
            throw new \InvalidArgumentException('non-nullable excludeColumns cannot be null');
        }

        $this->container['excludeColumns'] = $excludeColumns;
        return $this;
    }
}
