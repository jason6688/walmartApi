<?php

/**
 * ShipToAddress
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * ShipToAddress Class Doc Comment
 *
 * @category Class

 * @description The address to which sellers need to inbound items

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class ShipToAddress extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipToAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fcName' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'city' => 'string',
        'stateCode' => 'string',
        'countryCode' => 'string',
        'postalCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fcName' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'city' => null,
        'stateCode' => null,
        'countryCode' => null,
        'postalCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fcName' => false,
        'addressLine1' => false,
        'addressLine2' => false,
        'city' => false,
        'stateCode' => false,
        'countryCode' => false,
        'postalCode' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fcName' => 'fcName',
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'city' => 'city',
        'stateCode' => 'stateCode',
        'countryCode' => 'countryCode',
        'postalCode' => 'postalCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fcName' => 'setFcName',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'city' => 'setCity',
        'stateCode' => 'setStateCode',
        'countryCode' => 'setCountryCode',
        'postalCode' => 'setPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fcName' => 'getFcName',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'city' => 'getCity',
        'stateCode' => 'getStateCode',
        'countryCode' => 'getCountryCode',
        'postalCode' => 'getPostalCode'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fcName', $data ?? [], null);
        $this->setIfExists('addressLine1', $data ?? [], null);
        $this->setIfExists('addressLine2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('stateCode', $data ?? [], null);
        $this->setIfExists('countryCode', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
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
     * Gets fcName
     *
     * @return string|null
    
     */
    public function getFcName()
    {
        return $this->container['fcName'];
    }

    /**
     * Sets fcName
     *
     * @param string|null $fcName Facility name
     *
     * @return self
    
     */
    public function setFcName($fcName)
    {
        if (is_null($fcName)) {
            throw new \InvalidArgumentException('non-nullable fcName cannot be null');
        }

        $this->container['fcName'] = $fcName;
        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string|null
    
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string|null $addressLine1 Address details
     *
     * @return self
    
     */
    public function setAddressLine1($addressLine1)
    {
        if (is_null($addressLine1)) {
            throw new \InvalidArgumentException('non-nullable addressLine1 cannot be null');
        }

        $this->container['addressLine1'] = $addressLine1;
        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string|null
    
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string|null $addressLine2 Address details continuation
     *
     * @return self
    
     */
    public function setAddressLine2($addressLine2)
    {
        if (is_null($addressLine2)) {
            throw new \InvalidArgumentException('non-nullable addressLine2 cannot be null');
        }

        $this->container['addressLine2'] = $addressLine2;
        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
    
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City name
     *
     * @return self
    
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }

        $this->container['city'] = $city;
        return $this;
    }

    /**
     * Gets stateCode
     *
     * @return string|null
    
     */
    public function getStateCode()
    {
        return $this->container['stateCode'];
    }

    /**
     * Sets stateCode
     *
     * @param string|null $stateCode State code
     *
     * @return self
    
     */
    public function setStateCode($stateCode)
    {
        if (is_null($stateCode)) {
            throw new \InvalidArgumentException('non-nullable stateCode cannot be null');
        }

        $this->container['stateCode'] = $stateCode;
        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string|null
    
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode Country code
     *
     * @return self
    
     */
    public function setCountryCode($countryCode)
    {
        if (is_null($countryCode)) {
            throw new \InvalidArgumentException('non-nullable countryCode cannot be null');
        }

        $this->container['countryCode'] = $countryCode;
        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string|null
    
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string|null $postalCode Zip code
     *
     * @return self
    
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }

        $this->container['postalCode'] = $postalCode;
        return $this;
    }
}
