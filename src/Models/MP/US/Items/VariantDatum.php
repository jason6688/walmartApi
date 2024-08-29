<?php

/**
 * VariantDatum
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Items;

use Walmart\Models\BaseModel;

/**
 * VariantDatum Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class VariantDatum extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VariantDatum';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'productImageUrl' => 'string',
        'itemId' => 'string',
        'isAvailable' => 'string',
        'title' => 'string',
        'variantValues' => '\Walmart\Models\MP\US\Items\VariantValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'productImageUrl' => null,
        'itemId' => null,
        'isAvailable' => null,
        'title' => null,
        'variantValues' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productImageUrl' => false,
        'itemId' => false,
        'isAvailable' => false,
        'title' => false,
        'variantValues' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'productImageUrl' => 'productImageUrl',
        'itemId' => 'itemId',
        'isAvailable' => 'isAvailable',
        'title' => 'title',
        'variantValues' => 'variantValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'productImageUrl' => 'setProductImageUrl',
        'itemId' => 'setItemId',
        'isAvailable' => 'setIsAvailable',
        'title' => 'setTitle',
        'variantValues' => 'setVariantValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'productImageUrl' => 'getProductImageUrl',
        'itemId' => 'getItemId',
        'isAvailable' => 'getIsAvailable',
        'title' => 'getTitle',
        'variantValues' => 'getVariantValues'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('productImageUrl', $data ?? [], null);
        $this->setIfExists('itemId', $data ?? [], null);
        $this->setIfExists('isAvailable', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('variantValues', $data ?? [], null);
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
     * Gets productImageUrl
     *
     * @return string|null
    
     */
    public function getProductImageUrl()
    {
        return $this->container['productImageUrl'];
    }

    /**
     * Sets productImageUrl
     *
     * @param string|null $productImageUrl productImageUrl
     *
     * @return self
    
     */
    public function setProductImageUrl($productImageUrl)
    {
        if (is_null($productImageUrl)) {
            throw new \InvalidArgumentException('non-nullable productImageUrl cannot be null');
        }

        $this->container['productImageUrl'] = $productImageUrl;
        return $this;
    }

    /**
     * Gets itemId
     *
     * @return string|null
    
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string|null $itemId itemId
     *
     * @return self
    
     */
    public function setItemId($itemId)
    {
        if (is_null($itemId)) {
            throw new \InvalidArgumentException('non-nullable itemId cannot be null');
        }

        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
     * Gets isAvailable
     *
     * @return string|null
    
     */
    public function getIsAvailable()
    {
        return $this->container['isAvailable'];
    }

    /**
     * Sets isAvailable
     *
     * @param string|null $isAvailable isAvailable
     *
     * @return self
    
     */
    public function setIsAvailable($isAvailable)
    {
        if (is_null($isAvailable)) {
            throw new \InvalidArgumentException('non-nullable isAvailable cannot be null');
        }

        $this->container['isAvailable'] = $isAvailable;
        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
    
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
    
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;
        return $this;
    }

    /**
     * Gets variantValues
     *
     * @return \Walmart\Models\MP\US\Items\VariantValue[]|null
    
     */
    public function getVariantValues()
    {
        return $this->container['variantValues'];
    }

    /**
     * Sets variantValues
     *
     * @param \Walmart\Models\MP\US\Items\VariantValue[]|null $variantValues variantValues
     *
     * @return self
    
     */
    public function setVariantValues($variantValues)
    {
        if (is_null($variantValues)) {
            throw new \InvalidArgumentException('non-nullable variantValues cannot be null');
        }

        $this->container['variantValues'] = $variantValues;
        return $this;
    }
}
