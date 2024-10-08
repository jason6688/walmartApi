<?php

/**
 * PromiseDestinationResponse
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
 * PromiseDestinationResponse Class Doc Comment
 *
 * @category Class

 * @description Customer order destination details.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class PromiseDestinationResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PromiseDestinationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'address' => '\Walmart\Models\MP\US\Fulfillment\PromiseAddress',
        'fulfillmentType' => 'string',
        'destinationId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'address' => null,
        'fulfillmentType' => null,
        'destinationId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address' => false,
        'fulfillmentType' => false,
        'destinationId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'address' => 'address',
        'fulfillmentType' => 'fulfillmentType',
        'destinationId' => 'destinationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'address' => 'setAddress',
        'fulfillmentType' => 'setFulfillmentType',
        'destinationId' => 'setDestinationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'address' => 'getAddress',
        'fulfillmentType' => 'getFulfillmentType',
        'destinationId' => 'getDestinationId'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('fulfillmentType', $data ?? [], null);
        $this->setIfExists('destinationId', $data ?? [], null);
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
     * Gets address
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseAddress|null
    
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseAddress|null $address address
     *
     * @return self
    
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }

        $this->container['address'] = $address;
        return $this;
    }

    /**
     * Gets fulfillmentType
     *
     * @return string|null
    
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param string|null $fulfillmentType Fulfillment Type of an order. Currently supported type : 'DELIVERY'
     *
     * @return self
    
     */
    public function setFulfillmentType($fulfillmentType)
    {
        if (is_null($fulfillmentType)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentType cannot be null');
        }

        $this->container['fulfillmentType'] = $fulfillmentType;
        return $this;
    }

    /**
     * Gets destinationId
     *
     * @return string|null
    
     */
    public function getDestinationId()
    {
        return $this->container['destinationId'];
    }

    /**
     * Sets destinationId
     *
     * @param string|null $destinationId Destination id detail. For example : 'fulfillment type for DELIVERY has destinationId 0
     *
     * @return self
    
     */
    public function setDestinationId($destinationId)
    {
        if (is_null($destinationId)) {
            throw new \InvalidArgumentException('non-nullable destinationId cannot be null');
        }

        $this->container['destinationId'] = $destinationId;
        return $this;
    }
}
