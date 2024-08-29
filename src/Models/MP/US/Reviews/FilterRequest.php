<?php

/**
 * FilterRequest
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
 * Reviews Acceleration
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Reviews;

use Walmart\Models\BaseModel;

/**
 * FilterRequest Class Doc Comment
 *
 * @category Class

 * @description Filter request.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class FilterRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FilterRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'itemStatus' => 'string',
        'dateRange' => 'string',
        'category' => 'string',
        'price' => '\Walmart\Models\MP\US\Reviews\PriceRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'itemStatus' => null,
        'dateRange' => null,
        'category' => null,
        'price' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'itemStatus' => false,
        'dateRange' => false,
        'category' => false,
        'price' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'itemStatus' => 'itemStatus',
        'dateRange' => 'dateRange',
        'category' => 'category',
        'price' => 'price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'itemStatus' => 'setItemStatus',
        'dateRange' => 'setDateRange',
        'category' => 'setCategory',
        'price' => 'setPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'itemStatus' => 'getItemStatus',
        'dateRange' => 'getDateRange',
        'category' => 'getCategory',
        'price' => 'getPrice'
    ];


    public const ITEM_STATUS_ELIGIBLE = 'ELIGIBLE';

    public const ITEM_STATUS_ENROLLED = 'ENROLLED';

    public const ITEM_STATUS_COMPLETE = 'COMPLETE';

    public const DATE_RANGE__7_DAYS = '7DAYS';

    public const DATE_RANGE__14_DAYS = '14DAYS';

    public const DATE_RANGE__30_DAYS = '30DAYS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getItemStatusAllowableValues()
    {
        return [
            self::ITEM_STATUS_ELIGIBLE,
            self::ITEM_STATUS_ENROLLED,
            self::ITEM_STATUS_COMPLETE,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDateRangeAllowableValues()
    {
        return [
            self::DATE_RANGE__7_DAYS,
            self::DATE_RANGE__14_DAYS,
            self::DATE_RANGE__30_DAYS,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('itemStatus', $data ?? [], null);
        $this->setIfExists('dateRange', $data ?? [], '7DAYS');
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemStatus'] === null) {
            $invalidProperties[] = "'itemStatus' can't be null";
        }
        $allowedValues = $this->getItemStatusAllowableValues();
        if (!is_null($this->container['itemStatus']) && !in_array($this->container['itemStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'itemStatus', must be one of '%s'",
                $this->container['itemStatus'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDateRangeAllowableValues();
        if (!is_null($this->container['dateRange']) && !in_array($this->container['dateRange'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'dateRange', must be one of '%s'",
                $this->container['dateRange'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets itemStatus
     *
     * @return string
    
     */
    public function getItemStatus()
    {
        return $this->container['itemStatus'];
    }

    /**
     * Sets itemStatus
     *
     * @param string $itemStatus | Attribute | Description | Data Type | | --- | ----------- | ------- | | ELIGIBLE | To get items which are eligible for the program | string | | ENROLLED | To get items which are currently enrolled into the program | string | | COMPLETE | To get items which have attained target reviews through the program | string |
     *
     * @return self
    
     */
    public function setItemStatus($itemStatus)
    {
        if (is_null($itemStatus)) {
            throw new \InvalidArgumentException('non-nullable itemStatus cannot be null');
        }
        $allowedValues = $this->getItemStatusAllowableValues();
        if (!in_array($itemStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'itemStatus', must be one of '%s'",
                    $itemStatus,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['itemStatus'] = $itemStatus;
        return $this;
    }

    /**
     * Gets dateRange
     *
     * @return string|null
    
     */
    public function getDateRange()
    {
        return $this->container['dateRange'];
    }

    /**
     * Sets dateRange
     *
     * @param string|null $dateRange Date range to filter impressions, page views and sales.
     *
     * @return self
    
     */
    public function setDateRange($dateRange)
    {
        if (is_null($dateRange)) {
            throw new \InvalidArgumentException('non-nullable dateRange cannot be null');
        }
        $allowedValues = $this->getDateRangeAllowableValues();
        if (!in_array($dateRange, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'dateRange', must be one of '%s'",
                    $dateRange,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['dateRange'] = $dateRange;
        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Category of the items.
     *
     * @return self
    
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;
        return $this;
    }

    /**
     * Gets price
     *
     * @return \Walmart\Models\MP\US\Reviews\PriceRequest|null
    
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Walmart\Models\MP\US\Reviews\PriceRequest|null $price price
     *
     * @return self
    
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;
        return $this;
    }
}
