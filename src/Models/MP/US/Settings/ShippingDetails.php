<?php

/**
 * ShippingDetails
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
 * ShippingDetails Class Doc Comment
 *
 * @category Class

 * @description Shipping Details.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class ShippingDetails extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShippingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'twoDayShipping' => '\Walmart\Models\MP\US\Settings\CarrierDetail1[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'twoDayShipping' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'twoDayShipping' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'twoDayShipping' => 'twoDayShipping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'twoDayShipping' => 'setTwoDayShipping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'twoDayShipping' => 'getTwoDayShipping'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('twoDayShipping', $data ?? [], null);
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
     * Gets twoDayShipping
     *
     * @return \Walmart\Models\MP\US\Settings\CarrierDetail1[]|null
    
     */
    public function getTwoDayShipping()
    {
        return $this->container['twoDayShipping'];
    }

    /**
     * Sets twoDayShipping
     *
     * @param \Walmart\Models\MP\US\Settings\CarrierDetail1[]|null $twoDayShipping Shipping type provided.
     *
     * @return self
    
     */
    public function setTwoDayShipping($twoDayShipping)
    {
        if (is_null($twoDayShipping)) {
            throw new \InvalidArgumentException('non-nullable twoDayShipping cannot be null');
        }

        $this->container['twoDayShipping'] = $twoDayShipping;
        return $this;
    }
}
