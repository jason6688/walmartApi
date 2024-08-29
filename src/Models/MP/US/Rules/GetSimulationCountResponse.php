<?php

/**
 * GetSimulationCountResponse
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
 * Rules Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Rules;

use Walmart\Models\BaseModel;

/**
 * GetSimulationCountResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class GetSimulationCountResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GetSimulationCountResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ruleId' => 'string',
        'ruleStatus' => 'string',
        'simulationCount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ruleId' => null,
        'ruleStatus' => null,
        'simulationCount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ruleId' => false,
        'ruleStatus' => false,
        'simulationCount' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ruleId' => 'ruleId',
        'ruleStatus' => 'ruleStatus',
        'simulationCount' => 'simulationCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ruleId' => 'setRuleId',
        'ruleStatus' => 'setRuleStatus',
        'simulationCount' => 'setSimulationCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ruleId' => 'getRuleId',
        'ruleStatus' => 'getRuleStatus',
        'simulationCount' => 'getSimulationCount'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('ruleId', $data ?? [], null);
        $this->setIfExists('ruleStatus', $data ?? [], null);
        $this->setIfExists('simulationCount', $data ?? [], null);
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
     * Gets ruleId
     *
     * @return string|null
    
     */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
     * Sets ruleId
     *
     * @param string|null $ruleId Unique identifier of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setRuleId($ruleId)
    {
        if (is_null($ruleId)) {
            throw new \InvalidArgumentException('non-nullable ruleId cannot be null');
        }

        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
     * Gets ruleStatus
     *
     * @return string|null
    
     */
    public function getRuleStatus()
    {
        return $this->container['ruleStatus'];
    }

    /**
     * Sets ruleStatus
     *
     * @param string|null $ruleStatus Status of the rule post the rule creation. Allowed values are Active, Inactive, Submitted.
     *
     * @return self
    
     */
    public function setRuleStatus($ruleStatus)
    {
        if (is_null($ruleStatus)) {
            throw new \InvalidArgumentException('non-nullable ruleStatus cannot be null');
        }

        $this->container['ruleStatus'] = $ruleStatus;
        return $this;
    }

    /**
     * Gets simulationCount
     *
     * @return string|null
    
     */
    public function getSimulationCount()
    {
        return $this->container['simulationCount'];
    }

    /**
     * Sets simulationCount
     *
     * @param string|null $simulationCount Number of items that would be set for two-day if the rule gets activated.
     *
     * @return self
    
     */
    public function setSimulationCount($simulationCount)
    {
        if (is_null($simulationCount)) {
            throw new \InvalidArgumentException('non-nullable simulationCount cannot be null');
        }

        $this->container['simulationCount'] = $simulationCount;
        return $this;
    }
}
