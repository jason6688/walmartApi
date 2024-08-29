<?php

/**
 * MultiValueFilterCriteriaForCategorization
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
 * Assortment Recommendations
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\AssortmentRecommendations;

use Walmart\Models\BaseModel;

/**
 * MultiValueFilterCriteriaForCategorization Class Doc Comment
 *
 * @category Class

 * @description Filters based on multiple values associated with a specific parameter.  No parameter should be repeated.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class MultiValueFilterCriteriaForCategorization extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MultiValueFilterCriteriaForCategorization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'parameter' => 'string',
        'values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'parameter' => null,
        'values' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'parameter' => false,
        'values' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'parameter' => 'parameter',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'parameter' => 'setParameter',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'parameter' => 'getParameter',
        'values' => 'getValues'
    ];


    public const PARAMETER_CATEGORY = 'CATEGORY';

    public const PARAMETER_BRAND = 'BRAND';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getParameterAllowableValues()
    {
        return [
            self::PARAMETER_CATEGORY,
            self::PARAMETER_BRAND,
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
        $this->setIfExists('parameter', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['parameter'] === null) {
            $invalidProperties[] = "'parameter' can't be null";
        }
        $allowedValues = $this->getParameterAllowableValues();
        if (!is_null($this->container['parameter']) && !in_array($this->container['parameter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'parameter', must be one of '%s'",
                $this->container['parameter'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets parameter
     *
     * @return string
    
     */
    public function getParameter()
    {
        return $this->container['parameter'];
    }

    /**
     * Sets parameter
     *
     * @param string $parameter | Attribute | Description | Data Type | | --- | ----------- | ------- | | BRAND | To filter based on list of brands which are associated with the assortment recommendations. This is allowed when the categorization type is CATEGORY | string | | CATEGORY | To filter based on list of categories which are associated with the assortment recommendations. This is allowed when the categorization type is BRAND | string |
     *
     * @return self
    
     */
    public function setParameter($parameter)
    {
        if (is_null($parameter)) {
            throw new \InvalidArgumentException('non-nullable parameter cannot be null');
        }
        $allowedValues = $this->getParameterAllowableValues();
        if (!in_array($parameter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'parameter', must be one of '%s'",
                    $parameter,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['parameter'] = $parameter;
        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]|null
    
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[]|null $values A list of values corresponds to the parameter in the filter. The values in the list should not be null or blank. Maximum 7 values are allowed in the list.
     *
     * @return self
    
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }

        $this->container['values'] = $values;
        return $this;
    }
}
