<?php

/**
 * PickupDiscount
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
 * Promotion Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Promotions;

use Walmart\Models\BaseModel;

/**
 * PickupDiscount Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class PickupDiscount extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PickupDiscount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'isPickUpDiscountEligible' => 'bool',
        'pickupDiscountAmt' => '\Walmart\Models\MP\US\Promotions\MoneyType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'isPickUpDiscountEligible' => null,
        'pickupDiscountAmt' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'isPickUpDiscountEligible' => false,
        'pickupDiscountAmt' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'isPickUpDiscountEligible' => 'isPickUpDiscountEligible',
        'pickupDiscountAmt' => 'pickupDiscountAmt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'isPickUpDiscountEligible' => 'setIsPickUpDiscountEligible',
        'pickupDiscountAmt' => 'setPickupDiscountAmt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'isPickUpDiscountEligible' => 'getIsPickUpDiscountEligible',
        'pickupDiscountAmt' => 'getPickupDiscountAmt'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('isPickUpDiscountEligible', $data ?? [], null);
        $this->setIfExists('pickupDiscountAmt', $data ?? [], null);
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
     * Gets isPickUpDiscountEligible
     *
     * @return bool|null
    
     */
    public function getIsPickUpDiscountEligible()
    {
        return $this->container['isPickUpDiscountEligible'];
    }

    /**
     * Sets isPickUpDiscountEligible
     *
     * @param bool|null $isPickUpDiscountEligible isPickUpDiscountEligible
     *
     * @return self
    
     */
    public function setIsPickUpDiscountEligible($isPickUpDiscountEligible)
    {
        if (is_null($isPickUpDiscountEligible)) {
            throw new \InvalidArgumentException('non-nullable isPickUpDiscountEligible cannot be null');
        }

        $this->container['isPickUpDiscountEligible'] = $isPickUpDiscountEligible;
        return $this;
    }

    /**
     * Gets pickupDiscountAmt
     *
     * @return \Walmart\Models\MP\US\Promotions\MoneyType|null
    
     */
    public function getPickupDiscountAmt()
    {
        return $this->container['pickupDiscountAmt'];
    }

    /**
     * Sets pickupDiscountAmt
     *
     * @param \Walmart\Models\MP\US\Promotions\MoneyType|null $pickupDiscountAmt pickupDiscountAmt
     *
     * @return self
    
     */
    public function setPickupDiscountAmt($pickupDiscountAmt)
    {
        if (is_null($pickupDiscountAmt)) {
            throw new \InvalidArgumentException('non-nullable pickupDiscountAmt cannot be null');
        }

        $this->container['pickupDiscountAmt'] = $pickupDiscountAmt;
        return $this;
    }
}
