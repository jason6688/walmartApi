<?php

/**
 * MeetsCriteria
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
 * MeetsCriteria Class Doc Comment
 *
 * @category Class

 * @description Shows whether the seller has met the requirements for the badge.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class MeetsCriteria extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MeetsCriteria';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'isOrdersCriteriaMet' => 'bool',
        'isDeliveryDefectCriteriaMet' => 'bool',
        'isCancellationCriteriaMet' => 'bool',
        'isListingQualityCatalogCriteriaMet' => 'bool',
        'isActiveDaysCriteriaMet' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'isOrdersCriteriaMet' => null,
        'isDeliveryDefectCriteriaMet' => null,
        'isCancellationCriteriaMet' => null,
        'isListingQualityCatalogCriteriaMet' => null,
        'isActiveDaysCriteriaMet' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'isOrdersCriteriaMet' => false,
        'isDeliveryDefectCriteriaMet' => false,
        'isCancellationCriteriaMet' => false,
        'isListingQualityCatalogCriteriaMet' => false,
        'isActiveDaysCriteriaMet' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'isOrdersCriteriaMet' => 'isOrdersCriteriaMet',
        'isDeliveryDefectCriteriaMet' => 'isDeliveryDefectCriteriaMet',
        'isCancellationCriteriaMet' => 'isCancellationCriteriaMet',
        'isListingQualityCatalogCriteriaMet' => 'isListingQualityCatalogCriteriaMet',
        'isActiveDaysCriteriaMet' => 'isActiveDaysCriteriaMet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'isOrdersCriteriaMet' => 'setIsOrdersCriteriaMet',
        'isDeliveryDefectCriteriaMet' => 'setIsDeliveryDefectCriteriaMet',
        'isCancellationCriteriaMet' => 'setIsCancellationCriteriaMet',
        'isListingQualityCatalogCriteriaMet' => 'setIsListingQualityCatalogCriteriaMet',
        'isActiveDaysCriteriaMet' => 'setIsActiveDaysCriteriaMet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'isOrdersCriteriaMet' => 'getIsOrdersCriteriaMet',
        'isDeliveryDefectCriteriaMet' => 'getIsDeliveryDefectCriteriaMet',
        'isCancellationCriteriaMet' => 'getIsCancellationCriteriaMet',
        'isListingQualityCatalogCriteriaMet' => 'getIsListingQualityCatalogCriteriaMet',
        'isActiveDaysCriteriaMet' => 'getIsActiveDaysCriteriaMet'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('isOrdersCriteriaMet', $data ?? [], null);
        $this->setIfExists('isDeliveryDefectCriteriaMet', $data ?? [], null);
        $this->setIfExists('isCancellationCriteriaMet', $data ?? [], null);
        $this->setIfExists('isListingQualityCatalogCriteriaMet', $data ?? [], null);
        $this->setIfExists('isActiveDaysCriteriaMet', $data ?? [], null);
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
     * Gets isOrdersCriteriaMet
     *
     * @return bool|null
    
     */
    public function getIsOrdersCriteriaMet()
    {
        return $this->container['isOrdersCriteriaMet'];
    }

    /**
     * Sets isOrdersCriteriaMet
     *
     * @param bool|null $isOrdersCriteriaMet Indicates whether the seller has met the minimum number of orders required.
     *
     * @return self
    
     */
    public function setIsOrdersCriteriaMet($isOrdersCriteriaMet)
    {
        if (is_null($isOrdersCriteriaMet)) {
            throw new \InvalidArgumentException('non-nullable isOrdersCriteriaMet cannot be null');
        }

        $this->container['isOrdersCriteriaMet'] = $isOrdersCriteriaMet;
        return $this;
    }

    /**
     * Gets isDeliveryDefectCriteriaMet
     *
     * @return bool|null
    
     */
    public function getIsDeliveryDefectCriteriaMet()
    {
        return $this->container['isDeliveryDefectCriteriaMet'];
    }

    /**
     * Sets isDeliveryDefectCriteriaMet
     *
     * @param bool|null $isDeliveryDefectCriteriaMet Indicates whether the seller has a low delivery defect, meeting the threshold for the badge.
     *
     * @return self
    
     */
    public function setIsDeliveryDefectCriteriaMet($isDeliveryDefectCriteriaMet)
    {
        if (is_null($isDeliveryDefectCriteriaMet)) {
            throw new \InvalidArgumentException('non-nullable isDeliveryDefectCriteriaMet cannot be null');
        }

        $this->container['isDeliveryDefectCriteriaMet'] = $isDeliveryDefectCriteriaMet;
        return $this;
    }

    /**
     * Gets isCancellationCriteriaMet
     *
     * @return bool|null
    
     */
    public function getIsCancellationCriteriaMet()
    {
        return $this->container['isCancellationCriteriaMet'];
    }

    /**
     * Sets isCancellationCriteriaMet
     *
     * @param bool|null $isCancellationCriteriaMet Indicates whether the seller has a low cancellation rate, meeting the threshold for the badge.
     *
     * @return self
    
     */
    public function setIsCancellationCriteriaMet($isCancellationCriteriaMet)
    {
        if (is_null($isCancellationCriteriaMet)) {
            throw new \InvalidArgumentException('non-nullable isCancellationCriteriaMet cannot be null');
        }

        $this->container['isCancellationCriteriaMet'] = $isCancellationCriteriaMet;
        return $this;
    }

    /**
     * Gets isListingQualityCatalogCriteriaMet
     *
     * @return bool|null
    
     */
    public function getIsListingQualityCatalogCriteriaMet()
    {
        return $this->container['isListingQualityCatalogCriteriaMet'];
    }

    /**
     * Sets isListingQualityCatalogCriteriaMet
     *
     * @param bool|null $isListingQualityCatalogCriteriaMet Indicates whether the seller is meeting the trending catalog requirement.
     *
     * @return self
    
     */
    public function setIsListingQualityCatalogCriteriaMet($isListingQualityCatalogCriteriaMet)
    {
        if (is_null($isListingQualityCatalogCriteriaMet)) {
            throw new \InvalidArgumentException('non-nullable isListingQualityCatalogCriteriaMet cannot be null');
        }

        $this->container['isListingQualityCatalogCriteriaMet'] = $isListingQualityCatalogCriteriaMet;
        return $this;
    }

    /**
     * Gets isActiveDaysCriteriaMet
     *
     * @return bool|null
    
     */
    public function getIsActiveDaysCriteriaMet()
    {
        return $this->container['isActiveDaysCriteriaMet'];
    }

    /**
     * Sets isActiveDaysCriteriaMet
     *
     * @param bool|null $isActiveDaysCriteriaMet Indicates whether the seller has met the minimum number of active days required.
     *
     * @return self
    
     */
    public function setIsActiveDaysCriteriaMet($isActiveDaysCriteriaMet)
    {
        if (is_null($isActiveDaysCriteriaMet)) {
            throw new \InvalidArgumentException('non-nullable isActiveDaysCriteriaMet cannot be null');
        }

        $this->container['isActiveDaysCriteriaMet'] = $isActiveDaysCriteriaMet;
        return $this;
    }
}
