<?php

/**
 * Value
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
 * Value Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Value extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Value';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'scoreType' => 'string',
        'scoreValue' => 'int',
        'impact' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'scoreType' => null,
        'scoreValue' => 'int32',
        'impact' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'scoreType' => false,
        'scoreValue' => false,
        'impact' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'scoreType' => 'scoreType',
        'scoreValue' => 'scoreValue',
        'impact' => 'impact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'scoreType' => 'setScoreType',
        'scoreValue' => 'setScoreValue',
        'impact' => 'setImpact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'scoreType' => 'getScoreType',
        'scoreValue' => 'getScoreValue',
        'impact' => 'getImpact'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('scoreType', $data ?? [], null);
        $this->setIfExists('scoreValue', $data ?? [], null);
        $this->setIfExists('impact', $data ?? [], null);
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
     * Gets scoreType
     *
     * @return string|null
    
     */
    public function getScoreType()
    {
        return $this->container['scoreType'];
    }

    /**
     * Sets scoreType
     *
     * @param string|null $scoreType scoreType
     *
     * @return self
    
     */
    public function setScoreType($scoreType)
    {
        if (is_null($scoreType)) {
            throw new \InvalidArgumentException('non-nullable scoreType cannot be null');
        }

        $this->container['scoreType'] = $scoreType;
        return $this;
    }

    /**
     * Gets scoreValue
     *
     * @return int|null
    
     */
    public function getScoreValue()
    {
        return $this->container['scoreValue'];
    }

    /**
     * Sets scoreValue
     *
     * @param int|null $scoreValue scoreValue
     *
     * @return self
    
     */
    public function setScoreValue($scoreValue)
    {
        if (is_null($scoreValue)) {
            throw new \InvalidArgumentException('non-nullable scoreValue cannot be null');
        }

        $this->container['scoreValue'] = $scoreValue;
        return $this;
    }

    /**
     * Gets impact
     *
     * @return string|null
    
     */
    public function getImpact()
    {
        return $this->container['impact'];
    }

    /**
     * Sets impact
     *
     * @param string|null $impact impact
     *
     * @return self
    
     */
    public function setImpact($impact)
    {
        if (is_null($impact)) {
            throw new \InvalidArgumentException('non-nullable impact cannot be null');
        }

        $this->container['impact'] = $impact;
        return $this;
    }
}
