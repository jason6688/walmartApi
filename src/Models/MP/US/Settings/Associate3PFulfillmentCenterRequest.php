<?php

/**
 * Associate3PFulfillmentCenterRequest
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * Associate3PFulfillmentCenterRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Associate3PFulfillmentCenterRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Associate3PFulfillmentCenterRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipNodeHeader' => '\Walmart\Models\MP\US\Settings\ShipNodeHeader',
        'shipNode' => '\Walmart\Models\MP\US\Settings\ThirdPartyShipNode1[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipNodeHeader' => null,
        'shipNode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipNodeHeader' => false,
        'shipNode' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipNodeHeader' => 'shipNodeHeader',
        'shipNode' => 'shipNode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipNodeHeader' => 'setShipNodeHeader',
        'shipNode' => 'setShipNode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipNodeHeader' => 'getShipNodeHeader',
        'shipNode' => 'getShipNode'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('shipNodeHeader', $data ?? [], null);
        $this->setIfExists('shipNode', $data ?? [], null);
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
     * Gets shipNodeHeader
     *
     * @return \Walmart\Models\MP\US\Settings\ShipNodeHeader|null
    
     */
    public function getShipNodeHeader()
    {
        return $this->container['shipNodeHeader'];
    }

    /**
     * Sets shipNodeHeader
     *
     * @param \Walmart\Models\MP\US\Settings\ShipNodeHeader|null $shipNodeHeader shipNodeHeader
     *
     * @return self
    
     */
    public function setShipNodeHeader($shipNodeHeader)
    {
        if (is_null($shipNodeHeader)) {
            throw new \InvalidArgumentException('non-nullable shipNodeHeader cannot be null');
        }

        $this->container['shipNodeHeader'] = $shipNodeHeader;
        return $this;
    }

    /**
     * Gets shipNode
     *
     * @return \Walmart\Models\MP\US\Settings\ThirdPartyShipNode1[]|null
    
     */
    public function getShipNode()
    {
        return $this->container['shipNode'];
    }

    /**
     * Sets shipNode
     *
     * @param \Walmart\Models\MP\US\Settings\ThirdPartyShipNode1[]|null $shipNode shipNode
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
}
