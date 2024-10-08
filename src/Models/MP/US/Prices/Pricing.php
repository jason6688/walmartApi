<?php

/**
 * Pricing
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Prices;

use Walmart\Models\BaseModel;

/**
 * Pricing Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class Pricing extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Pricing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'effectiveDate' => '\DateTime',
        'expirationDate' => '\DateTime',
        'promoId' => 'string',
        'processMode' => 'string',
        'currentPriceType' => 'string',
        'currentPrice' => '\Walmart\Models\MP\US\Prices\CurrentPrice',
        'comparisonPriceType' => 'string',
        'comparisonPrice' => '\Walmart\Models\MP\US\Prices\ComparisonPrice',
        'priceDisplayCodes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'effectiveDate' => 'date-time',
        'expirationDate' => 'date-time',
        'promoId' => null,
        'processMode' => null,
        'currentPriceType' => null,
        'currentPrice' => null,
        'comparisonPriceType' => null,
        'comparisonPrice' => null,
        'priceDisplayCodes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'effectiveDate' => false,
        'expirationDate' => false,
        'promoId' => false,
        'processMode' => false,
        'currentPriceType' => false,
        'currentPrice' => false,
        'comparisonPriceType' => false,
        'comparisonPrice' => false,
        'priceDisplayCodes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'effectiveDate' => 'effectiveDate',
        'expirationDate' => 'expirationDate',
        'promoId' => 'promoId',
        'processMode' => 'processMode',
        'currentPriceType' => 'currentPriceType',
        'currentPrice' => 'currentPrice',
        'comparisonPriceType' => 'comparisonPriceType',
        'comparisonPrice' => 'comparisonPrice',
        'priceDisplayCodes' => 'priceDisplayCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'effectiveDate' => 'setEffectiveDate',
        'expirationDate' => 'setExpirationDate',
        'promoId' => 'setPromoId',
        'processMode' => 'setProcessMode',
        'currentPriceType' => 'setCurrentPriceType',
        'currentPrice' => 'setCurrentPrice',
        'comparisonPriceType' => 'setComparisonPriceType',
        'comparisonPrice' => 'setComparisonPrice',
        'priceDisplayCodes' => 'setPriceDisplayCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'effectiveDate' => 'getEffectiveDate',
        'expirationDate' => 'getExpirationDate',
        'promoId' => 'getPromoId',
        'processMode' => 'getProcessMode',
        'currentPriceType' => 'getCurrentPriceType',
        'currentPrice' => 'getCurrentPrice',
        'comparisonPriceType' => 'getComparisonPriceType',
        'comparisonPrice' => 'getComparisonPrice',
        'priceDisplayCodes' => 'getPriceDisplayCodes'
    ];


    public const PROCESS_MODE_UPSERT = 'UPSERT';

    public const PROCESS_MODE_DELETE = 'DELETE';

    public const CURRENT_PRICE_TYPE_BASE = 'BASE';

    public const CURRENT_PRICE_TYPE_REDUCED = 'REDUCED';

    public const CURRENT_PRICE_TYPE_CLEARANCE = 'CLEARANCE';

    public const COMPARISON_PRICE_TYPE_BASE = 'BASE';

    public const PRICE_DISPLAY_CODES_CART = 'CART';

    public const PRICE_DISPLAY_CODES_CHECKOUT = 'CHECKOUT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessModeAllowableValues()
    {
        return [
            self::PROCESS_MODE_UPSERT,
            self::PROCESS_MODE_DELETE,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentPriceTypeAllowableValues()
    {
        return [
            self::CURRENT_PRICE_TYPE_BASE,
            self::CURRENT_PRICE_TYPE_REDUCED,
            self::CURRENT_PRICE_TYPE_CLEARANCE,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getComparisonPriceTypeAllowableValues()
    {
        return [
            self::COMPARISON_PRICE_TYPE_BASE,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriceDisplayCodesAllowableValues()
    {
        return [
            self::PRICE_DISPLAY_CODES_CART,
            self::PRICE_DISPLAY_CODES_CHECKOUT,
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
        $this->setIfExists('effectiveDate', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('promoId', $data ?? [], null);
        $this->setIfExists('processMode', $data ?? [], null);
        $this->setIfExists('currentPriceType', $data ?? [], null);
        $this->setIfExists('currentPrice', $data ?? [], null);
        $this->setIfExists('comparisonPriceType', $data ?? [], null);
        $this->setIfExists('comparisonPrice', $data ?? [], null);
        $this->setIfExists('priceDisplayCodes', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProcessModeAllowableValues();
        if (!is_null($this->container['processMode']) && !in_array($this->container['processMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'processMode', must be one of '%s'",
                $this->container['processMode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['currentPriceType'] === null) {
            $invalidProperties[] = "'currentPriceType' can't be null";
        }
        $allowedValues = $this->getCurrentPriceTypeAllowableValues();
        if (!is_null($this->container['currentPriceType']) && !in_array($this->container['currentPriceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currentPriceType', must be one of '%s'",
                $this->container['currentPriceType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['currentPrice'] === null) {
            $invalidProperties[] = "'currentPrice' can't be null";
        }
        $allowedValues = $this->getComparisonPriceTypeAllowableValues();
        if (!is_null($this->container['comparisonPriceType']) && !in_array($this->container['comparisonPriceType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'comparisonPriceType', must be one of '%s'",
                $this->container['comparisonPriceType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPriceDisplayCodesAllowableValues();
        if (!is_null($this->container['priceDisplayCodes']) && !in_array($this->container['priceDisplayCodes'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'priceDisplayCodes', must be one of '%s'",
                $this->container['priceDisplayCodes'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets effectiveDate
     *
     * @return \DateTime|null
    
     */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
     * Sets effectiveDate
     *
     * @param \DateTime|null $effectiveDate This is applicable only for promotions
     *
     * @return self
    
     */
    public function setEffectiveDate($effectiveDate)
    {
        if (is_null($effectiveDate)) {
            throw new \InvalidArgumentException('non-nullable effectiveDate cannot be null');
        }

        $this->container['effectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
     * Gets expirationDate
     *
     * @return \DateTime|null
    
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \DateTime|null $expirationDate This is applicable only for promotions
     *
     * @return self
    
     */
    public function setExpirationDate($expirationDate)
    {
        if (is_null($expirationDate)) {
            throw new \InvalidArgumentException('non-nullable expirationDate cannot be null');
        }

        $this->container['expirationDate'] = $expirationDate;
        return $this;
    }

    /**
     * Gets promoId
     *
     * @return string|null
    
     */
    public function getPromoId()
    {
        return $this->container['promoId'];
    }

    /**
     * Sets promoId
     *
     * @param string|null $promoId This is applicable only for promotions
     *
     * @return self
    
     */
    public function setPromoId($promoId)
    {
        if (is_null($promoId)) {
            throw new \InvalidArgumentException('non-nullable promoId cannot be null');
        }

        $this->container['promoId'] = $promoId;
        return $this;
    }

    /**
     * Gets processMode
     *
     * @return string|null
    
     */
    public function getProcessMode()
    {
        return $this->container['processMode'];
    }

    /**
     * Sets processMode
     *
     * @param string|null $processMode This is applicable only for promotions
     *
     * @return self
    
     */
    public function setProcessMode($processMode)
    {
        if (is_null($processMode)) {
            throw new \InvalidArgumentException('non-nullable processMode cannot be null');
        }
        $allowedValues = $this->getProcessModeAllowableValues();
        if (!in_array($processMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'processMode', must be one of '%s'",
                    $processMode,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['processMode'] = $processMode;
        return $this;
    }

    /**
     * Gets currentPriceType
     *
     * @return string
    
     */
    public function getCurrentPriceType()
    {
        return $this->container['currentPriceType'];
    }

    /**
     * Sets currentPriceType
     *
     * @param string $currentPriceType This is applicable only for both promotions and price
     *
     * @return self
    
     */
    public function setCurrentPriceType($currentPriceType)
    {
        if (is_null($currentPriceType)) {
            throw new \InvalidArgumentException('non-nullable currentPriceType cannot be null');
        }
        $allowedValues = $this->getCurrentPriceTypeAllowableValues();
        if (!in_array($currentPriceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currentPriceType', must be one of '%s'",
                    $currentPriceType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['currentPriceType'] = $currentPriceType;
        return $this;
    }

    /**
     * Gets currentPrice
     *
     * @return \Walmart\Models\MP\US\Prices\CurrentPrice
    
     */
    public function getCurrentPrice()
    {
        return $this->container['currentPrice'];
    }

    /**
     * Sets currentPrice
     *
     * @param \Walmart\Models\MP\US\Prices\CurrentPrice $currentPrice currentPrice
     *
     * @return self
    
     */
    public function setCurrentPrice($currentPrice)
    {
        if (is_null($currentPrice)) {
            throw new \InvalidArgumentException('non-nullable currentPrice cannot be null');
        }

        $this->container['currentPrice'] = $currentPrice;
        return $this;
    }

    /**
     * Gets comparisonPriceType
     *
     * @return string|null
    
     */
    public function getComparisonPriceType()
    {
        return $this->container['comparisonPriceType'];
    }

    /**
     * Sets comparisonPriceType
     *
     * @param string|null $comparisonPriceType This is applicable only for promotions
     *
     * @return self
    
     */
    public function setComparisonPriceType($comparisonPriceType)
    {
        if (is_null($comparisonPriceType)) {
            throw new \InvalidArgumentException('non-nullable comparisonPriceType cannot be null');
        }
        $allowedValues = $this->getComparisonPriceTypeAllowableValues();
        if (!in_array($comparisonPriceType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'comparisonPriceType', must be one of '%s'",
                    $comparisonPriceType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['comparisonPriceType'] = $comparisonPriceType;
        return $this;
    }

    /**
     * Gets comparisonPrice
     *
     * @return \Walmart\Models\MP\US\Prices\ComparisonPrice|null
    
     */
    public function getComparisonPrice()
    {
        return $this->container['comparisonPrice'];
    }

    /**
     * Sets comparisonPrice
     *
     * @param \Walmart\Models\MP\US\Prices\ComparisonPrice|null $comparisonPrice comparisonPrice
     *
     * @return self
    
     */
    public function setComparisonPrice($comparisonPrice)
    {
        if (is_null($comparisonPrice)) {
            throw new \InvalidArgumentException('non-nullable comparisonPrice cannot be null');
        }

        $this->container['comparisonPrice'] = $comparisonPrice;
        return $this;
    }

    /**
     * Gets priceDisplayCodes
     *
     * @return string|null
    
     */
    public function getPriceDisplayCodes()
    {
        return $this->container['priceDisplayCodes'];
    }

    /**
     * Sets priceDisplayCodes
     *
     * @param string|null $priceDisplayCodes Represent promo placement. This is applicable only for promotions
     *
     * @return self
    
     */
    public function setPriceDisplayCodes($priceDisplayCodes)
    {
        if (is_null($priceDisplayCodes)) {
            throw new \InvalidArgumentException('non-nullable priceDisplayCodes cannot be null');
        }
        $allowedValues = $this->getPriceDisplayCodesAllowableValues();
        if (!in_array($priceDisplayCodes, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'priceDisplayCodes', must be one of '%s'",
                    $priceDisplayCodes,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['priceDisplayCodes'] = $priceDisplayCodes;
        return $this;
    }
}
