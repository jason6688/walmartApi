<?php

/**
 * RequestStatusResponsePayload
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
 * RequestStatusResponsePayload Class Doc Comment
 *
 * @category Class

 * @description Payload in the response for requested file.

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class RequestStatusResponsePayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RequestStatusResponsePayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'requestId' => 'string',
        'recommendationType' => 'string',
        'status' => 'string',
        'submissionDate' => 'string',
        'requestVersion' => 'string',
        'totalNoOfRecords' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'requestId' => 'uuid',
        'recommendationType' => null,
        'status' => null,
        'submissionDate' => null,
        'requestVersion' => null,
        'totalNoOfRecords' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'requestId' => false,
        'recommendationType' => false,
        'status' => false,
        'submissionDate' => false,
        'requestVersion' => false,
        'totalNoOfRecords' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'requestId' => 'requestId',
        'recommendationType' => 'recommendationType',
        'status' => 'status',
        'submissionDate' => 'submissionDate',
        'requestVersion' => 'requestVersion',
        'totalNoOfRecords' => 'totalNoOfRecords'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'requestId' => 'setRequestId',
        'recommendationType' => 'setRecommendationType',
        'status' => 'setStatus',
        'submissionDate' => 'setSubmissionDate',
        'requestVersion' => 'setRequestVersion',
        'totalNoOfRecords' => 'setTotalNoOfRecords'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'requestId' => 'getRequestId',
        'recommendationType' => 'getRecommendationType',
        'status' => 'getStatus',
        'submissionDate' => 'getSubmissionDate',
        'requestVersion' => 'getRequestVersion',
        'totalNoOfRecords' => 'getTotalNoOfRecords'
    ];


    public const RECOMMENDATION_TYPE_ITEM = 'ITEM';

    public const STATUS_RECEIVED = 'RECEIVED';

    public const STATUS_INPROGRESS = 'INPROGRESS';

    public const STATUS_READY = 'READY';

    public const STATUS_ERROR = 'ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecommendationTypeAllowableValues()
    {
        return [
            self::RECOMMENDATION_TYPE_ITEM,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RECEIVED,
            self::STATUS_INPROGRESS,
            self::STATUS_READY,
            self::STATUS_ERROR,
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
        $this->setIfExists('requestId', $data ?? [], null);
        $this->setIfExists('recommendationType', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('submissionDate', $data ?? [], null);
        $this->setIfExists('requestVersion', $data ?? [], null);
        $this->setIfExists('totalNoOfRecords', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['recommendationType'] === null) {
            $invalidProperties[] = "'recommendationType' can't be null";
        }
        $allowedValues = $this->getRecommendationTypeAllowableValues();
        if (!is_null($this->container['recommendationType']) && !in_array($this->container['recommendationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'recommendationType', must be one of '%s'",
                $this->container['recommendationType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets requestId
     *
     * @return string|null
    
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string|null $requestId Automated ID generated by system that uniquely identifies the request.
     *
     * @return self
    
     */
    public function setRequestId($requestId)
    {
        if (is_null($requestId)) {
            throw new \InvalidArgumentException('non-nullable requestId cannot be null');
        }

        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
     * Gets recommendationType
     *
     * @return string
    
     */
    public function getRecommendationType()
    {
        return $this->container['recommendationType'];
    }

    /**
     * Sets recommendationType
     *
     * @param string $recommendationType | Attribute | Description | Data Type | | --- | ----------- | ------- | | ITEM | To get list of recommended items | string |
     *
     * @return self
    
     */
    public function setRecommendationType($recommendationType)
    {
        if (is_null($recommendationType)) {
            throw new \InvalidArgumentException('non-nullable recommendationType cannot be null');
        }
        $allowedValues = $this->getRecommendationTypeAllowableValues();
        if (!in_array($recommendationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'recommendationType', must be one of '%s'",
                    $recommendationType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['recommendationType'] = $recommendationType;
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
     * @param string|null $status Status of the request.
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets submissionDate
     *
     * @return string|null
    
     */
    public function getSubmissionDate()
    {
        return $this->container['submissionDate'];
    }

    /**
     * Sets submissionDate
     *
     * @param string|null $submissionDate Date and time on which the request is submitted.
     *
     * @return self
    
     */
    public function setSubmissionDate($submissionDate)
    {
        if (is_null($submissionDate)) {
            throw new \InvalidArgumentException('non-nullable submissionDate cannot be null');
        }

        $this->container['submissionDate'] = $submissionDate;
        return $this;
    }

    /**
     * Gets requestVersion
     *
     * @return string|null
    
     */
    public function getRequestVersion()
    {
        return $this->container['requestVersion'];
    }

    /**
     * Sets requestVersion
     *
     * @param string|null $requestVersion Version of request. Example, v1.
     *
     * @return self
    
     */
    public function setRequestVersion($requestVersion)
    {
        if (is_null($requestVersion)) {
            throw new \InvalidArgumentException('non-nullable requestVersion cannot be null');
        }

        $this->container['requestVersion'] = $requestVersion;
        return $this;
    }

    /**
     * Gets totalNoOfRecords
     *
     * @return int|null
    
     */
    public function getTotalNoOfRecords()
    {
        return $this->container['totalNoOfRecords'];
    }

    /**
     * Sets totalNoOfRecords
     *
     * @param int|null $totalNoOfRecords Total number of records expected in the file.
     *
     * @return self
    
     */
    public function setTotalNoOfRecords($totalNoOfRecords)
    {
        if (is_null($totalNoOfRecords)) {
            throw new \InvalidArgumentException('non-nullable totalNoOfRecords cannot be null');
        }

        $this->container['totalNoOfRecords'] = $totalNoOfRecords;
        return $this;
    }
}
