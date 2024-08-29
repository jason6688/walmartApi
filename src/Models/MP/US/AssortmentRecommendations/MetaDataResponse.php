<?php

/**
 * MetaDataResponse
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
 * Assortment Recommendations
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\AssortmentRecommendations;

use Walmart\Models\BaseModel;

/**
 * MetaDataResponse Class Doc Comment
 *
 * @category Class

 * @description Meta information for the response.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class MetaDataResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MetaDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'totalRecords' => 'int',
        'recordsFetched' => 'int',
        'limit' => 'int',
        'nextCursor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'totalRecords' => 'int32',
        'recordsFetched' => 'int32',
        'limit' => 'int32',
        'nextCursor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'totalRecords' => false,
        'recordsFetched' => false,
        'limit' => false,
        'nextCursor' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'totalRecords' => 'totalRecords',
        'recordsFetched' => 'recordsFetched',
        'limit' => 'limit',
        'nextCursor' => 'nextCursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'totalRecords' => 'setTotalRecords',
        'recordsFetched' => 'setRecordsFetched',
        'limit' => 'setLimit',
        'nextCursor' => 'setNextCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'totalRecords' => 'getTotalRecords',
        'recordsFetched' => 'getRecordsFetched',
        'limit' => 'getLimit',
        'nextCursor' => 'getNextCursor'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('totalRecords', $data ?? [], null);
        $this->setIfExists('recordsFetched', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], 200);
        $this->setIfExists('nextCursor', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];



        if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
            $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
        }


        if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
            $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
        }





        return $invalidProperties;
    }

    /**
     * Gets totalRecords
     *
     * @return int|null
    
     */
    public function getTotalRecords()
    {
        return $this->container['totalRecords'];
    }

    /**
     * Sets totalRecords
     *
     * @param int|null $totalRecords The total number of records are present for the requested categorization type along with filters.
     *
     * @return self
    
     */
    public function setTotalRecords($totalRecords)
    {
        if (is_null($totalRecords)) {
            throw new \InvalidArgumentException('non-nullable totalRecords cannot be null');
        }

        $this->container['totalRecords'] = $totalRecords;
        return $this;
    }

    /**
     * Gets recordsFetched
     *
     * @return int|null
    
     */
    public function getRecordsFetched()
    {
        return $this->container['recordsFetched'];
    }

    /**
     * Sets recordsFetched
     *
     * @param int|null $recordsFetched The number of records fetched in the response.
     *
     * @return self
    
     */
    public function setRecordsFetched($recordsFetched)
    {
        if (is_null($recordsFetched)) {
            throw new \InvalidArgumentException('non-nullable recordsFetched cannot be null');
        }

        $this->container['recordsFetched'] = $recordsFetched;
        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
    
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Number of records expected in the request
     *
     * @return self
    
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }


        if (($limit > 200)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling MetaDataResponse., must be smaller than or equal to 200.');
        }

        if (($limit < 1)) {
            throw new \InvalidArgumentException('invalid value for $limit when calling MetaDataResponse., must be bigger than or equal to 1.');
        }




        $this->container['limit'] = $limit;
        return $this;
    }

    /**
     * Gets nextCursor
     *
     * @return string|null
    
     */
    public function getNextCursor()
    {
        return $this->container['nextCursor'];
    }

    /**
     * Sets nextCursor
     *
     * @param string|null $nextCursor The string returned from the initial API call to indicate nextCursor. Specify nextCursor value to retrieve the next set of records.
     *
     * @return self
    
     */
    public function setNextCursor($nextCursor)
    {
        if (is_null($nextCursor)) {
            throw new \InvalidArgumentException('non-nullable nextCursor cannot be null');
        }

        $this->container['nextCursor'] = $nextCursor;
        return $this;
    }
}
