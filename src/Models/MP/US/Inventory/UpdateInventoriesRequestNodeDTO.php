<?php

/**
 * UpdateInventoriesRequestNodeDTO
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
 * Inventory Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Inventory;

use Walmart\Models\BaseModel;

/**
 * UpdateInventoriesRequestNodeDTO Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class UpdateInventoriesRequestNodeDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UpdateInventoriesRequestNodeDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipNode' => 'string',
        'inputQty' => '\Walmart\Models\MP\US\Inventory\InputQty'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipNode' => null,
        'inputQty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipNode' => false,
        'inputQty' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipNode' => 'shipNode',
        'inputQty' => 'inputQty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipNode' => 'setShipNode',
        'inputQty' => 'setInputQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipNode' => 'getShipNode',
        'inputQty' => 'getInputQty'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipNode', $data ?? [], null);
        $this->setIfExists('inputQty', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipNode'] === null) {
            $invalidProperties[] = "'shipNode' can't be null";
        }
        if ($this->container['inputQty'] === null) {
            $invalidProperties[] = "'inputQty' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets shipNode
     *
     * @return string
    
     */
    public function getShipNode()
    {
        return $this->container['shipNode'];
    }

    /**
     * Sets shipNode
     *
     * @param string $shipNode ShipNode Id of the ship node for which the inventory is requested
     *
     * @return self
    
     */
    public function setShipNode($shipNode)
    {
        if (is_null($shipNode)) {
            throw new \InvalidArgumentException('non-nullable shipNode cannot be null');
        }

        $this->container['shipNode'] = $shipNode;
        return $this;
    }

    /**
     * Gets inputQty
     *
     * @return \Walmart\Models\MP\US\Inventory\InputQty
    
     */
    public function getInputQty()
    {
        return $this->container['inputQty'];
    }

    /**
     * Sets inputQty
     *
     * @param \Walmart\Models\MP\US\Inventory\InputQty $inputQty inputQty
     *
     * @return self
    
     */
    public function setInputQty($inputQty)
    {
        if (is_null($inputQty)) {
            throw new \InvalidArgumentException('non-nullable inputQty cannot be null');
        }

        $this->container['inputQty'] = $inputQty;
        return $this;
    }
}
