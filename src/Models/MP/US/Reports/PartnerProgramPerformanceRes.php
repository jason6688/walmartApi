<?php

/**
 * PartnerProgramPerformanceRes
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
 * PartnerProgramPerformanceRes Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class PartnerProgramPerformanceRes extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PartnerProgramPerformanceRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'statusCode' => 'int',
        'status' => 'string',
        'error' => 'string',
        'partnerId' => 'string',
        '_7dAY' => '\Walmart\Models\MP\US\Reports\PartnerProgramPerformance',
        '_14dAY' => '\Walmart\Models\MP\US\Reports\PartnerProgramPerformance',
        '_30dAY' => '\Walmart\Models\MP\US\Reports\PartnerProgramPerformance',
        '_60dAY' => '\Walmart\Models\MP\US\Reports\PartnerProgramPerformance',
        '_90dAY' => '\Walmart\Models\MP\US\Reports\PartnerProgramPerformance'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'statusCode' => 'int32',
        'status' => null,
        'error' => null,
        'partnerId' => null,
        '_7dAY' => null,
        '_14dAY' => null,
        '_30dAY' => null,
        '_60dAY' => null,
        '_90dAY' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'statusCode' => false,
        'status' => false,
        'error' => false,
        'partnerId' => false,
        '_7dAY' => false,
        '_14dAY' => false,
        '_30dAY' => false,
        '_60dAY' => false,
        '_90dAY' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'statusCode' => 'statusCode',
        'status' => 'status',
        'error' => 'error',
        'partnerId' => 'partnerId',
        '_7dAY' => '7DAY',
        '_14dAY' => '14DAY',
        '_30dAY' => '30DAY',
        '_60dAY' => '60DAY',
        '_90dAY' => '90DAY'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'statusCode' => 'setStatusCode',
        'status' => 'setStatus',
        'error' => 'setError',
        'partnerId' => 'setPartnerId',
        '_7dAY' => 'set7dAY',
        '_14dAY' => 'set14dAY',
        '_30dAY' => 'set30dAY',
        '_60dAY' => 'set60dAY',
        '_90dAY' => 'set90dAY'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'statusCode' => 'getStatusCode',
        'status' => 'getStatus',
        'error' => 'getError',
        'partnerId' => 'getPartnerId',
        '_7dAY' => 'get7dAY',
        '_14dAY' => 'get14dAY',
        '_30dAY' => 'get30dAY',
        '_60dAY' => 'get60dAY',
        '_90dAY' => 'get90dAY'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('statusCode', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('partnerId', $data ?? [], null);
        $this->setIfExists('_7dAY', $data ?? [], null);
        $this->setIfExists('_14dAY', $data ?? [], null);
        $this->setIfExists('_30dAY', $data ?? [], null);
        $this->setIfExists('_60dAY', $data ?? [], null);
        $this->setIfExists('_90dAY', $data ?? [], null);
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
     * Gets statusCode
     *
     * @return int|null
    
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param int|null $statusCode statusCode
     *
     * @return self
    
     */
    public function setStatusCode($statusCode)
    {
        if (is_null($statusCode)) {
            throw new \InvalidArgumentException('non-nullable statusCode cannot be null');
        }

        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
    
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error error
     *
     * @return self
    
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }

        $this->container['error'] = $error;
        return $this;
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
     * @param string|null $partnerId partnerId
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
     * Gets _7dAY
     *
     * @return \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null
    
     */
    public function get7dAY()
    {
        return $this->container['_7dAY'];
    }

    /**
     * Sets _7dAY
     *
     * @param \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null $_7dAY _7dAY
     *
     * @return self
    
     */
    public function set7dAY($_7dAY)
    {
        if (is_null($_7dAY)) {
            throw new \InvalidArgumentException('non-nullable _7dAY cannot be null');
        }

        $this->container['_7dAY'] = $_7dAY;
        return $this;
    }

    /**
     * Gets _14dAY
     *
     * @return \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null
    
     */
    public function get14dAY()
    {
        return $this->container['_14dAY'];
    }

    /**
     * Sets _14dAY
     *
     * @param \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null $_14dAY _14dAY
     *
     * @return self
    
     */
    public function set14dAY($_14dAY)
    {
        if (is_null($_14dAY)) {
            throw new \InvalidArgumentException('non-nullable _14dAY cannot be null');
        }

        $this->container['_14dAY'] = $_14dAY;
        return $this;
    }

    /**
     * Gets _30dAY
     *
     * @return \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null
    
     */
    public function get30dAY()
    {
        return $this->container['_30dAY'];
    }

    /**
     * Sets _30dAY
     *
     * @param \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null $_30dAY _30dAY
     *
     * @return self
    
     */
    public function set30dAY($_30dAY)
    {
        if (is_null($_30dAY)) {
            throw new \InvalidArgumentException('non-nullable _30dAY cannot be null');
        }

        $this->container['_30dAY'] = $_30dAY;
        return $this;
    }

    /**
     * Gets _60dAY
     *
     * @return \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null
    
     */
    public function get60dAY()
    {
        return $this->container['_60dAY'];
    }

    /**
     * Sets _60dAY
     *
     * @param \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null $_60dAY _60dAY
     *
     * @return self
    
     */
    public function set60dAY($_60dAY)
    {
        if (is_null($_60dAY)) {
            throw new \InvalidArgumentException('non-nullable _60dAY cannot be null');
        }

        $this->container['_60dAY'] = $_60dAY;
        return $this;
    }

    /**
     * Gets _90dAY
     *
     * @return \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null
    
     */
    public function get90dAY()
    {
        return $this->container['_90dAY'];
    }

    /**
     * Sets _90dAY
     *
     * @param \Walmart\Models\MP\US\Reports\PartnerProgramPerformance|null $_90dAY _90dAY
     *
     * @return self
    
     */
    public function set90dAY($_90dAY)
    {
        if (is_null($_90dAY)) {
            throw new \InvalidArgumentException('non-nullable _90dAY cannot be null');
        }

        $this->container['_90dAY'] = $_90dAY;
        return $this;
    }
}
