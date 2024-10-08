<?php

/**
 * PartnerInfoDTO
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
 * PartnerInfoDTO Class Doc Comment
 *
 * @category Class

 * @description Details of partner

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class PartnerInfoDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PartnerInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'partnerId' => 'string',
        'partnerName' => 'string',
        'partnerDisplayName' => 'string',
        'partnerStoreId' => 'string',
        'businessRegNumber' => 'string',
        'countryOfIncorporation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'partnerId' => null,
        'partnerName' => null,
        'partnerDisplayName' => null,
        'partnerStoreId' => null,
        'businessRegNumber' => null,
        'countryOfIncorporation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'partnerId' => false,
        'partnerName' => false,
        'partnerDisplayName' => false,
        'partnerStoreId' => false,
        'businessRegNumber' => false,
        'countryOfIncorporation' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'partnerId' => 'partnerId',
        'partnerName' => 'partnerName',
        'partnerDisplayName' => 'partnerDisplayName',
        'partnerStoreId' => 'partnerStoreId',
        'businessRegNumber' => 'businessRegNumber',
        'countryOfIncorporation' => 'countryOfIncorporation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'partnerId' => 'setPartnerId',
        'partnerName' => 'setPartnerName',
        'partnerDisplayName' => 'setPartnerDisplayName',
        'partnerStoreId' => 'setPartnerStoreId',
        'businessRegNumber' => 'setBusinessRegNumber',
        'countryOfIncorporation' => 'setCountryOfIncorporation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'partnerId' => 'getPartnerId',
        'partnerName' => 'getPartnerName',
        'partnerDisplayName' => 'getPartnerDisplayName',
        'partnerStoreId' => 'getPartnerStoreId',
        'businessRegNumber' => 'getBusinessRegNumber',
        'countryOfIncorporation' => 'getCountryOfIncorporation'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('partnerId', $data ?? [], null);
        $this->setIfExists('partnerName', $data ?? [], null);
        $this->setIfExists('partnerDisplayName', $data ?? [], null);
        $this->setIfExists('partnerStoreId', $data ?? [], null);
        $this->setIfExists('businessRegNumber', $data ?? [], null);
        $this->setIfExists('countryOfIncorporation', $data ?? [], null);
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
     * Gets partnerId
     *
     * @return string|null
    
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId The seller ID
     *
     * @return self
    
     */
    public function setPartnerId($partnerId)
    {
        if (is_null($partnerId)) {
            throw new \InvalidArgumentException('non-nullable partnerId cannot be null');
        }

        $this->container['partnerId'] = $partnerId;
        return $this;
    }

    /**
     * Gets partnerName
     *
     * @return string|null
    
     */
    public function getPartnerName()
    {
        return $this->container['partnerName'];
    }

    /**
     * Sets partnerName
     *
     * @param string|null $partnerName The seller's legal name
     *
     * @return self
    
     */
    public function setPartnerName($partnerName)
    {
        if (is_null($partnerName)) {
            throw new \InvalidArgumentException('non-nullable partnerName cannot be null');
        }

        $this->container['partnerName'] = $partnerName;
        return $this;
    }

    /**
     * Gets partnerDisplayName
     *
     * @return string|null
    
     */
    public function getPartnerDisplayName()
    {
        return $this->container['partnerDisplayName'];
    }

    /**
     * Sets partnerDisplayName
     *
     * @param string|null $partnerDisplayName The seller name shown on walmart.com
     *
     * @return self
    
     */
    public function setPartnerDisplayName($partnerDisplayName)
    {
        if (is_null($partnerDisplayName)) {
            throw new \InvalidArgumentException('non-nullable partnerDisplayName cannot be null');
        }

        $this->container['partnerDisplayName'] = $partnerDisplayName;
        return $this;
    }

    /**
     * Gets partnerStoreId
     *
     * @return string|null
    
     */
    public function getPartnerStoreId()
    {
        return $this->container['partnerStoreId'];
    }

    /**
     * Sets partnerStoreId
     *
     * @param string|null $partnerStoreId Partner/Seller ID for Walmart store URL
     *
     * @return self
    
     */
    public function setPartnerStoreId($partnerStoreId)
    {
        if (is_null($partnerStoreId)) {
            throw new \InvalidArgumentException('non-nullable partnerStoreId cannot be null');
        }

        $this->container['partnerStoreId'] = $partnerStoreId;
        return $this;
    }

    /**
     * Gets businessRegNumber
     *
     * @return string|null
    
     */
    public function getBusinessRegNumber()
    {
        return $this->container['businessRegNumber'];
    }

    /**
     * Sets businessRegNumber
     *
     * @param string|null $businessRegNumber A registered distinct identifier such as US Tax ID / Foreign Tax ID
     *
     * @return self
    
     */
    public function setBusinessRegNumber($businessRegNumber)
    {
        if (is_null($businessRegNumber)) {
            throw new \InvalidArgumentException('non-nullable businessRegNumber cannot be null');
        }

        $this->container['businessRegNumber'] = $businessRegNumber;
        return $this;
    }

    /**
     * Gets countryOfIncorporation
     *
     * @return string|null
    
     */
    public function getCountryOfIncorporation()
    {
        return $this->container['countryOfIncorporation'];
    }

    /**
     * Sets countryOfIncorporation
     *
     * @param string|null $countryOfIncorporation The country from where seller conducts their business | ISO 3166 Country code
     *
     * @return self
    
     */
    public function setCountryOfIncorporation($countryOfIncorporation)
    {
        if (is_null($countryOfIncorporation)) {
            throw new \InvalidArgumentException('non-nullable countryOfIncorporation cannot be null');
        }

        $this->container['countryOfIncorporation'] = $countryOfIncorporation;
        return $this;
    }
}
