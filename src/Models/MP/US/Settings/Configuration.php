<?php

/**
 * Configuration
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
 * Configuration Class Doc Comment
 *
 * @category Class

 * @description Contains an array of Regions, an array of Address Type, Transit Time and Per shipping charge or array of Tired Shipping Charge

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Configuration extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Configuration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'regions' => '\Walmart\Models\MP\US\Settings\Region[]',
        'addressTypes' => 'string[]',
        'transitTime' => 'int',
        'perShippingCharge' => '\Walmart\Models\MP\US\Settings\PerShippingCharge',
        'tieredShippingCharges' => '\Walmart\Models\MP\US\Settings\TieredShippingCharge[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'regions' => null,
        'addressTypes' => null,
        'transitTime' => 'int32',
        'perShippingCharge' => null,
        'tieredShippingCharges' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'regions' => false,
        'addressTypes' => false,
        'transitTime' => false,
        'perShippingCharge' => false,
        'tieredShippingCharges' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'regions' => 'regions',
        'addressTypes' => 'addressTypes',
        'transitTime' => 'transitTime',
        'perShippingCharge' => 'perShippingCharge',
        'tieredShippingCharges' => 'tieredShippingCharges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'regions' => 'setRegions',
        'addressTypes' => 'setAddressTypes',
        'transitTime' => 'setTransitTime',
        'perShippingCharge' => 'setPerShippingCharge',
        'tieredShippingCharges' => 'setTieredShippingCharges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'regions' => 'getRegions',
        'addressTypes' => 'getAddressTypes',
        'transitTime' => 'getTransitTime',
        'perShippingCharge' => 'getPerShippingCharge',
        'tieredShippingCharges' => 'getTieredShippingCharges'
    ];


    public const ADDRESS_TYPES_PO_BOX = 'PO_BOX';

    public const ADDRESS_TYPES_MILITARY = 'MILITARY';

    public const ADDRESS_TYPES_STREET = 'STREET';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAddressTypesAllowableValues()
    {
        return [
            self::ADDRESS_TYPES_PO_BOX,
            self::ADDRESS_TYPES_MILITARY,
            self::ADDRESS_TYPES_STREET,
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
        $this->setIfExists('regions', $data ?? [], null);
        $this->setIfExists('addressTypes', $data ?? [], null);
        $this->setIfExists('transitTime', $data ?? [], null);
        $this->setIfExists('perShippingCharge', $data ?? [], null);
        $this->setIfExists('tieredShippingCharges', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['regions'] === null) {
            $invalidProperties[] = "'regions' can't be null";
        }
        if ($this->container['addressTypes'] === null) {
            $invalidProperties[] = "'addressTypes' can't be null";
        }
        if ($this->container['transitTime'] === null) {
            $invalidProperties[] = "'transitTime' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets regions
     *
     * @return \Walmart\Models\MP\US\Settings\Region[]
    
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param \Walmart\Models\MP\US\Settings\Region[] $regions Supported Regions includes 48 State Street, 48 State – Street Po Box/Street, AK and HI – Street etc
     *
     * @return self
    
     */
    public function setRegions($regions)
    {
        if (is_null($regions)) {
            throw new \InvalidArgumentException('non-nullable regions cannot be null');
        }

        $this->container['regions'] = $regions;
        return $this;
    }

    /**
     * Gets addressTypes
     *
     * @return string[]
    
     */
    public function getAddressTypes()
    {
        return $this->container['addressTypes'];
    }

    /**
     * Sets addressTypes
     *
     * @param string[] $addressTypes Supported address types like PO_BOX STREET MILITARY
     *
     * @return self
    
     */
    public function setAddressTypes($addressTypes)
    {
        if (is_null($addressTypes)) {
            throw new \InvalidArgumentException('non-nullable addressTypes cannot be null');
        }
        $allowedValues = $this->getAddressTypesAllowableValues();
        if (array_diff($addressTypes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'addressTypes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['addressTypes'] = $addressTypes;
        return $this;
    }

    /**
     * Gets transitTime
     *
     * @return int
    
     */
    public function getTransitTime()
    {
        return $this->container['transitTime'];
    }

    /**
     * Sets transitTime
     *
     * @param int $transitTime Time in transit
     *
     * @return self
    
     */
    public function setTransitTime($transitTime)
    {
        if (is_null($transitTime)) {
            throw new \InvalidArgumentException('non-nullable transitTime cannot be null');
        }

        $this->container['transitTime'] = $transitTime;
        return $this;
    }

    /**
     * Gets perShippingCharge
     *
     * @return \Walmart\Models\MP\US\Settings\PerShippingCharge|null
    
     */
    public function getPerShippingCharge()
    {
        return $this->container['perShippingCharge'];
    }

    /**
     * Sets perShippingCharge
     *
     * @param \Walmart\Models\MP\US\Settings\PerShippingCharge|null $perShippingCharge perShippingCharge
     *
     * @return self
    
     */
    public function setPerShippingCharge($perShippingCharge)
    {
        if (is_null($perShippingCharge)) {
            throw new \InvalidArgumentException('non-nullable perShippingCharge cannot be null');
        }

        $this->container['perShippingCharge'] = $perShippingCharge;
        return $this;
    }

    /**
     * Gets tieredShippingCharges
     *
     * @return \Walmart\Models\MP\US\Settings\TieredShippingCharge[]|null
    
     */
    public function getTieredShippingCharges()
    {
        return $this->container['tieredShippingCharges'];
    }

    /**
     * Sets tieredShippingCharges
     *
     * @param \Walmart\Models\MP\US\Settings\TieredShippingCharge[]|null $tieredShippingCharges Tiered Shipping Charges
     *
     * @return self
    
     */
    public function setTieredShippingCharges($tieredShippingCharges)
    {
        if (is_null($tieredShippingCharges)) {
            throw new \InvalidArgumentException('non-nullable tieredShippingCharges cannot be null');
        }

        $this->container['tieredShippingCharges'] = $tieredShippingCharges;
        return $this;
    }
}
