<?php

/**
 * CarrierDetail2
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
 * CarrierDetail2 Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class CarrierDetail2 extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CarrierDetail2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'carrierMethodId' => 'string',
        'carrierMethodName' => 'string',
        'carrierMethodType' => 'string',
        'carrierMethodDescription' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'carrierMethodId' => null,
        'carrierMethodName' => null,
        'carrierMethodType' => null,
        'carrierMethodDescription' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'carrierMethodId' => false,
        'carrierMethodName' => false,
        'carrierMethodType' => false,
        'carrierMethodDescription' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carrierMethodId' => 'carrierMethodId',
        'carrierMethodName' => 'carrierMethodName',
        'carrierMethodType' => 'carrierMethodType',
        'carrierMethodDescription' => 'carrierMethodDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'carrierMethodId' => 'setCarrierMethodId',
        'carrierMethodName' => 'setCarrierMethodName',
        'carrierMethodType' => 'setCarrierMethodType',
        'carrierMethodDescription' => 'setCarrierMethodDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'carrierMethodId' => 'getCarrierMethodId',
        'carrierMethodName' => 'getCarrierMethodName',
        'carrierMethodType' => 'getCarrierMethodType',
        'carrierMethodDescription' => 'getCarrierMethodDescription'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('carrierMethodId', $data ?? [], null);
        $this->setIfExists('carrierMethodName', $data ?? [], null);
        $this->setIfExists('carrierMethodType', $data ?? [], null);
        $this->setIfExists('carrierMethodDescription', $data ?? [], null);
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
     * Gets carrierMethodId
     *
     * @return string|null
    
     */
    public function getCarrierMethodId()
    {
        return $this->container['carrierMethodId'];
    }

    /**
     * Sets carrierMethodId
     *
     * @param string|null $carrierMethodId Carrier Id
     *
     * @return self
    
     */
    public function setCarrierMethodId($carrierMethodId)
    {
        if (is_null($carrierMethodId)) {
            throw new \InvalidArgumentException('non-nullable carrierMethodId cannot be null');
        }

        $this->container['carrierMethodId'] = $carrierMethodId;
        return $this;
    }

    /**
     * Gets carrierMethodName
     *
     * @return string|null
    
     */
    public function getCarrierMethodName()
    {
        return $this->container['carrierMethodName'];
    }

    /**
     * Sets carrierMethodName
     *
     * @param string|null $carrierMethodName Carrier Name
     *
     * @return self
    
     */
    public function setCarrierMethodName($carrierMethodName)
    {
        if (is_null($carrierMethodName)) {
            throw new \InvalidArgumentException('non-nullable carrierMethodName cannot be null');
        }

        $this->container['carrierMethodName'] = $carrierMethodName;
        return $this;
    }

    /**
     * Gets carrierMethodType
     *
     * @return string|null
    
     */
    public function getCarrierMethodType()
    {
        return $this->container['carrierMethodType'];
    }

    /**
     * Sets carrierMethodType
     *
     * @param string|null $carrierMethodType Shipping method. Allowed Value is GROUND.
     *
     * @return self
    
     */
    public function setCarrierMethodType($carrierMethodType)
    {
        if (is_null($carrierMethodType)) {
            throw new \InvalidArgumentException('non-nullable carrierMethodType cannot be null');
        }

        $this->container['carrierMethodType'] = $carrierMethodType;
        return $this;
    }

    /**
     * Gets carrierMethodDescription
     *
     * @return string|null
    
     */
    public function getCarrierMethodDescription()
    {
        return $this->container['carrierMethodDescription'];
    }

    /**
     * Sets carrierMethodDescription
     *
     * @param string|null $carrierMethodDescription A description for the method carrier.
     *
     * @return self
    
     */
    public function setCarrierMethodDescription($carrierMethodDescription)
    {
        if (is_null($carrierMethodDescription)) {
            throw new \InvalidArgumentException('non-nullable carrierMethodDescription cannot be null');
        }

        $this->container['carrierMethodDescription'] = $carrierMethodDescription;
        return $this;
    }
}
