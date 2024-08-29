<?php

/**
 * Issue
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
 * Issue Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Issue extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Issue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'date' => 'string',
        'publishFlag' => 'bool',
        'transactableFlag' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'date' => null,
        'publishFlag' => null,
        'transactableFlag' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'date' => false,
        'publishFlag' => false,
        'transactableFlag' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'date' => 'date',
        'publishFlag' => 'publishFlag',
        'transactableFlag' => 'transactableFlag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'date' => 'setDate',
        'publishFlag' => 'setPublishFlag',
        'transactableFlag' => 'setTransactableFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'date' => 'getDate',
        'publishFlag' => 'getPublishFlag',
        'transactableFlag' => 'getTransactableFlag'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('publishFlag', $data ?? [], null);
        $this->setIfExists('transactableFlag', $data ?? [], null);
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
     * Gets date
     *
     * @return string|null
    
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date date
     *
     * @return self
    
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }

        $this->container['date'] = $date;
        return $this;
    }

    /**
     * Gets publishFlag
     *
     * @return bool|null
    
     */
    public function getPublishFlag()
    {
        return $this->container['publishFlag'];
    }

    /**
     * Sets publishFlag
     *
     * @param bool|null $publishFlag publishFlag
     *
     * @return self
    
     */
    public function setPublishFlag($publishFlag)
    {
        if (is_null($publishFlag)) {
            throw new \InvalidArgumentException('non-nullable publishFlag cannot be null');
        }

        $this->container['publishFlag'] = $publishFlag;
        return $this;
    }

    /**
     * Gets transactableFlag
     *
     * @return bool|null
    
     */
    public function getTransactableFlag()
    {
        return $this->container['transactableFlag'];
    }

    /**
     * Sets transactableFlag
     *
     * @param bool|null $transactableFlag transactableFlag
     *
     * @return self
    
     */
    public function setTransactableFlag($transactableFlag)
    {
        if (is_null($transactableFlag)) {
            throw new \InvalidArgumentException('non-nullable transactableFlag cannot be null');
        }

        $this->container['transactableFlag'] = $transactableFlag;
        return $this;
    }
}
