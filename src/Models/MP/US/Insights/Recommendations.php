<?php

/**
 * Recommendations
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
 * Recommendations Class Doc Comment
 *
 * @category Class

 * @description Recommendations on how to increase chances of Pro Seller Badge eligibility

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Recommendations extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Recommendations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'deliveryDefectRate' => 'string',
        'cancellationRate' => 'string',
        'listingQualityCatalog' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'deliveryDefectRate' => null,
        'cancellationRate' => null,
        'listingQualityCatalog' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'deliveryDefectRate' => false,
        'cancellationRate' => false,
        'listingQualityCatalog' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'deliveryDefectRate' => 'deliveryDefectRate',
        'cancellationRate' => 'cancellationRate',
        'listingQualityCatalog' => 'listingQualityCatalog'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'deliveryDefectRate' => 'setDeliveryDefectRate',
        'cancellationRate' => 'setCancellationRate',
        'listingQualityCatalog' => 'setListingQualityCatalog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'deliveryDefectRate' => 'getDeliveryDefectRate',
        'cancellationRate' => 'getCancellationRate',
        'listingQualityCatalog' => 'getListingQualityCatalog'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('deliveryDefectRate', $data ?? [], null);
        $this->setIfExists('cancellationRate', $data ?? [], null);
        $this->setIfExists('listingQualityCatalog', $data ?? [], null);
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
     * Gets deliveryDefectRate
     *
     * @return string|null
    
     */
    public function getDeliveryDefectRate()
    {
        return $this->container['deliveryDefectRate'];
    }

    /**
     * Sets deliveryDefectRate
     *
     * @param string|null $deliveryDefectRate Recommendations on reducing the delivery defect rate
     *
     * @return self
    
     */
    public function setDeliveryDefectRate($deliveryDefectRate)
    {
        if (is_null($deliveryDefectRate)) {
            throw new \InvalidArgumentException('non-nullable deliveryDefectRate cannot be null');
        }

        $this->container['deliveryDefectRate'] = $deliveryDefectRate;
        return $this;
    }

    /**
     * Gets cancellationRate
     *
     * @return string|null
    
     */
    public function getCancellationRate()
    {
        return $this->container['cancellationRate'];
    }

    /**
     * Sets cancellationRate
     *
     * @param string|null $cancellationRate Recommendations on reducing the Cancellation rate
     *
     * @return self
    
     */
    public function setCancellationRate($cancellationRate)
    {
        if (is_null($cancellationRate)) {
            throw new \InvalidArgumentException('non-nullable cancellationRate cannot be null');
        }

        $this->container['cancellationRate'] = $cancellationRate;
        return $this;
    }

    /**
     * Gets listingQualityCatalog
     *
     * @return string|null
    
     */
    public function getListingQualityCatalog()
    {
        return $this->container['listingQualityCatalog'];
    }

    /**
     * Sets listingQualityCatalog
     *
     * @param string|null $listingQualityCatalog Recommendations on increasing the trending item catalog coverage
     *
     * @return self
    
     */
    public function setListingQualityCatalog($listingQualityCatalog)
    {
        if (is_null($listingQualityCatalog)) {
            throw new \InvalidArgumentException('non-nullable listingQualityCatalog cannot be null');
        }

        $this->container['listingQualityCatalog'] = $listingQualityCatalog;
        return $this;
    }
}
