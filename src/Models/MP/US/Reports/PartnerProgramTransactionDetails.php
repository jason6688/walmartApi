<?php

/**
 * PartnerProgramTransactionDetails
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
 * Pregenerated Reports retiring on June 30, 2022 :
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Reports;

use Walmart\Models\BaseModel;

/**
 * PartnerProgramTransactionDetails Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class PartnerProgramTransactionDetails extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PartnerProgramTransactionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'saleAggregate' => '\Walmart\Models\MP\US\Reports\SaleRefundAggr',
        'refundDetails' => '\Walmart\Models\MP\US\Reports\SaleRefundAggr',
        'adjustmentAggregate' => '\Walmart\Models\MP\US\Reports\AdjustmentAggregate',
        'wfs' => '\Walmart\Models\MP\US\Reports\WfsAggr',
        'partnerTxns' => '\Walmart\Models\MP\US\Reports\PartnerTxns'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'saleAggregate' => null,
        'refundDetails' => null,
        'adjustmentAggregate' => null,
        'wfs' => null,
        'partnerTxns' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'saleAggregate' => false,
        'refundDetails' => false,
        'adjustmentAggregate' => false,
        'wfs' => false,
        'partnerTxns' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'saleAggregate' => 'saleAggregate',
        'refundDetails' => 'refundDetails',
        'adjustmentAggregate' => 'adjustmentAggregate',
        'wfs' => 'wfs',
        'partnerTxns' => 'partnerTxns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'saleAggregate' => 'setSaleAggregate',
        'refundDetails' => 'setRefundDetails',
        'adjustmentAggregate' => 'setAdjustmentAggregate',
        'wfs' => 'setWfs',
        'partnerTxns' => 'setPartnerTxns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'saleAggregate' => 'getSaleAggregate',
        'refundDetails' => 'getRefundDetails',
        'adjustmentAggregate' => 'getAdjustmentAggregate',
        'wfs' => 'getWfs',
        'partnerTxns' => 'getPartnerTxns'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('saleAggregate', $data ?? [], null);
        $this->setIfExists('refundDetails', $data ?? [], null);
        $this->setIfExists('adjustmentAggregate', $data ?? [], null);
        $this->setIfExists('wfs', $data ?? [], null);
        $this->setIfExists('partnerTxns', $data ?? [], null);
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
     * Gets saleAggregate
     *
     * @return \Walmart\Models\MP\US\Reports\SaleRefundAggr|null
    
     */
    public function getSaleAggregate()
    {
        return $this->container['saleAggregate'];
    }

    /**
     * Sets saleAggregate
     *
     * @param \Walmart\Models\MP\US\Reports\SaleRefundAggr|null $saleAggregate saleAggregate
     *
     * @return self
    
     */
    public function setSaleAggregate($saleAggregate)
    {
        if (is_null($saleAggregate)) {
            throw new \InvalidArgumentException('non-nullable saleAggregate cannot be null');
        }

        $this->container['saleAggregate'] = $saleAggregate;
        return $this;
    }

    /**
     * Gets refundDetails
     *
     * @return \Walmart\Models\MP\US\Reports\SaleRefundAggr|null
    
     */
    public function getRefundDetails()
    {
        return $this->container['refundDetails'];
    }

    /**
     * Sets refundDetails
     *
     * @param \Walmart\Models\MP\US\Reports\SaleRefundAggr|null $refundDetails refundDetails
     *
     * @return self
    
     */
    public function setRefundDetails($refundDetails)
    {
        if (is_null($refundDetails)) {
            throw new \InvalidArgumentException('non-nullable refundDetails cannot be null');
        }

        $this->container['refundDetails'] = $refundDetails;
        return $this;
    }

    /**
     * Gets adjustmentAggregate
     *
     * @return \Walmart\Models\MP\US\Reports\AdjustmentAggregate|null
    
     */
    public function getAdjustmentAggregate()
    {
        return $this->container['adjustmentAggregate'];
    }

    /**
     * Sets adjustmentAggregate
     *
     * @param \Walmart\Models\MP\US\Reports\AdjustmentAggregate|null $adjustmentAggregate adjustmentAggregate
     *
     * @return self
    
     */
    public function setAdjustmentAggregate($adjustmentAggregate)
    {
        if (is_null($adjustmentAggregate)) {
            throw new \InvalidArgumentException('non-nullable adjustmentAggregate cannot be null');
        }

        $this->container['adjustmentAggregate'] = $adjustmentAggregate;
        return $this;
    }

    /**
     * Gets wfs
     *
     * @return \Walmart\Models\MP\US\Reports\WfsAggr|null
    
     */
    public function getWfs()
    {
        return $this->container['wfs'];
    }

    /**
     * Sets wfs
     *
     * @param \Walmart\Models\MP\US\Reports\WfsAggr|null $wfs wfs
     *
     * @return self
    
     */
    public function setWfs($wfs)
    {
        if (is_null($wfs)) {
            throw new \InvalidArgumentException('non-nullable wfs cannot be null');
        }

        $this->container['wfs'] = $wfs;
        return $this;
    }

    /**
     * Gets partnerTxns
     *
     * @return \Walmart\Models\MP\US\Reports\PartnerTxns|null
    
     */
    public function getPartnerTxns()
    {
        return $this->container['partnerTxns'];
    }

    /**
     * Sets partnerTxns
     *
     * @param \Walmart\Models\MP\US\Reports\PartnerTxns|null $partnerTxns partnerTxns
     *
     * @return self
    
     */
    public function setPartnerTxns($partnerTxns)
    {
        if (is_null($partnerTxns)) {
            throw new \InvalidArgumentException('non-nullable partnerTxns cannot be null');
        }

        $this->container['partnerTxns'] = $partnerTxns;
        return $this;
    }
}
