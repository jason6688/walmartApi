<?php

/**
 * ReviewsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 */

/**
 * Reviews Acceleration
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Apis\MP\US;

use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use Walmart\Apis\BaseApi;
use Walmart\ApiException;
use Walmart\ObjectSerializer;

/**
 * ReviewsApi Class Doc Comment
 *
 * @category Class
 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class ReviewsApi extends BaseApi
{
    /**
     * @var string[] $contentTypes
     */
    public const contentTypes = [
        'bulkUpdateItemStatus' => 'application/json',
        'getIrpCategories' => 'application/json',
        'getIrpItems' => 'application/json',
    ];

    /**
     * Operation bulkUpdateItemStatus
     *
     * Bulk update item status
     *
     * @param  \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest Request fields (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse
     */
    public function bulkUpdateItemStatus(
        \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest
    ): \Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse {
        return $this->bulkUpdateItemStatusWithHttpInfo($bulkItemStatusUpdateRequest);
    }

    /**
     * Operation bulkUpdateItemStatusWithHttpInfo
     *
     * Bulk update item status
     *
     * @param  \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest Request fields (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse
     */
    protected function bulkUpdateItemStatusWithHttpInfo(
        \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest
    ): \Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse {
        $request = $this->bulkUpdateItemStatusRequest($bulkItemStatusUpdateRequest);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);

                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    (int) $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : null,
                    $body
                );
            } catch (ConnectException $e) {
                $this->writeDebug($e->getMessage());

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            switch ($statusCode) {
                case 200:
                    if ('\Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation bulkUpdateItemStatusAsync
     *
     * Bulk update item status
     *
     * @param  \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest Request fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bulkUpdateItemStatusAsync(
        \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest
    ): PromiseInterface {
        return $this->bulkUpdateItemStatusAsyncWithHttpInfo($bulkItemStatusUpdateRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkUpdateItemStatusAsyncWithHttpInfo
     *
     * Bulk update item status
     *
     * @param  \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest Request fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function bulkUpdateItemStatusAsyncWithHttpInfo(
        \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\US\Reviews\BulkItemUpdateResponse';
        $request = $this->bulkUpdateItemStatusRequest($bulkItemStatusUpdateRequest);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body,
                    );
                }
            );
    }

    /**
     * Create request for operation 'bulkUpdateItemStatus'
     *
     * @param  \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest Request fields (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bulkUpdateItemStatusRequest(
        \Walmart\Models\MP\US\Reviews\BulkItemStatusUpdateRequest $bulkItemStatusUpdateRequest
    ): Request {
        $contentType = self::contentTypes['bulkUpdateItemStatus'];

        // verify the required parameter 'bulkItemStatusUpdateRequest' is set
        if ($bulkItemStatusUpdateRequest === null || (is_array($bulkItemStatusUpdateRequest) && count($bulkItemStatusUpdateRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $bulkItemStatusUpdateRequest when calling bulkUpdateItemStatus'
            );
        }
        $resourcePath = '/v3/growth/reviews-accelerator/items/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'PUT';

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            $contentType,
            $multipart
        );

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        // for model (json/xml)
        if (isset($bulkItemStatusUpdateRequest)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($bulkItemStatusUpdateRequest));
            } else {
                $httpBody = $bulkItemStatusUpdateRequest;
            }
        } else if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $requestInfo = [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_SEC.TIMESTAMP'],
            'query' => $query,
        ];

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $operationHost = $this->config->getHost();
        return new Request(
            $method,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getIrpCategories
     *
     * Get categories
     *
     * @param  \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest Request payload (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\US\Reviews\GetCategoriesResponse
     */
    public function getIrpCategories(
        \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest
    ): \Walmart\Models\MP\US\Reviews\GetCategoriesResponse {
        return $this->getIrpCategoriesWithHttpInfo($getCategoriesRequest);
    }

    /**
     * Operation getIrpCategoriesWithHttpInfo
     *
     * Get categories
     *
     * @param  \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest Request payload (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\US\Reviews\GetCategoriesResponse
     */
    protected function getIrpCategoriesWithHttpInfo(
        \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest
    ): \Walmart\Models\MP\US\Reviews\GetCategoriesResponse {
        $request = $this->getIrpCategoriesRequest($getCategoriesRequest);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);

                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    (int) $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : null,
                    $body
                );
            } catch (ConnectException $e) {
                $this->writeDebug($e->getMessage());

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            switch ($statusCode) {
                case 200:
                    if ('\Walmart\Models\MP\US\Reviews\GetCategoriesResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\MP\US\Reviews\GetCategoriesResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\US\Reviews\GetCategoriesResponse', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\US\Reviews\GetCategoriesResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\US\Reviews\GetCategoriesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation getIrpCategoriesAsync
     *
     * Get categories
     *
     * @param  \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest Request payload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIrpCategoriesAsync(
        \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest
    ): PromiseInterface {
        return $this->getIrpCategoriesAsyncWithHttpInfo($getCategoriesRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIrpCategoriesAsyncWithHttpInfo
     *
     * Get categories
     *
     * @param  \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest Request payload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function getIrpCategoriesAsyncWithHttpInfo(
        \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\US\Reviews\GetCategoriesResponse';
        $request = $this->getIrpCategoriesRequest($getCategoriesRequest);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body,
                    );
                }
            );
    }

    /**
     * Create request for operation 'getIrpCategories'
     *
     * @param  \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest Request payload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getIrpCategoriesRequest(
        \Walmart\Models\MP\US\Reviews\GetCategoriesRequest $getCategoriesRequest
    ): Request {
        $contentType = self::contentTypes['getIrpCategories'];

        // verify the required parameter 'getCategoriesRequest' is set
        if ($getCategoriesRequest === null || (is_array($getCategoriesRequest) && count($getCategoriesRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $getCategoriesRequest when calling getIrpCategories'
            );
        }
        $resourcePath = '/v3/growth/reviews-accelerator/categories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'POST';

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            $contentType,
            $multipart
        );

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        // for model (json/xml)
        if (isset($getCategoriesRequest)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($getCategoriesRequest));
            } else {
                $httpBody = $getCategoriesRequest;
            }
        } else if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $requestInfo = [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_SEC.TIMESTAMP'],
            'query' => $query,
        ];

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $operationHost = $this->config->getHost();
        return new Request(
            $method,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getIrpItems
     *
     * Get RAP post-purchase items
     *
     * @param  string $scrollId Optional parameter specifying the scrollId to return the next set of results. (required)
     * @param  \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest Request payload (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\US\Reviews\GetIrpItemsResponse
     */
    public function getIrpItems(
        string $scrollId,
        \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest
    ): \Walmart\Models\MP\US\Reviews\GetIrpItemsResponse {
        return $this->getIrpItemsWithHttpInfo($scrollId, $getIrpItemsRequest);
    }

    /**
     * Operation getIrpItemsWithHttpInfo
     *
     * Get RAP post-purchase items
     *
     * @param  string $scrollId Optional parameter specifying the scrollId to return the next set of results. (required)
     * @param  \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest Request payload (required)
     *
     * @throws \Walmart\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Walmart\Models\MP\US\Reviews\GetIrpItemsResponse
     */
    protected function getIrpItemsWithHttpInfo(
        string $scrollId,
        \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest
    ): \Walmart\Models\MP\US\Reviews\GetIrpItemsResponse {
        $request = $this->getIrpItemsRequest($scrollId, $getIrpItemsRequest);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);

                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    (int) $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : null,
                    $body
                );
            } catch (ConnectException $e) {
                $this->writeDebug($e->getMessage());

                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }
            switch ($statusCode) {
                case 200:
                    if ('\Walmart\Models\MP\US\Reviews\GetIrpItemsResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Walmart\Models\MP\US\Reviews\GetIrpItemsResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, '\Walmart\Models\MP\US\Reviews\GetIrpItemsResponse', $response->getHeaders());
            }

            $returnType = '\Walmart\Models\MP\US\Reviews\GetIrpItemsResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Walmart\Models\MP\US\Reviews\GetIrpItemsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation getIrpItemsAsync
     *
     * Get RAP post-purchase items
     *
     * @param  string $scrollId Optional parameter specifying the scrollId to return the next set of results. (required)
     * @param  \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest Request payload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getIrpItemsAsync(
        string $scrollId,
        \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest
    ): PromiseInterface {
        return $this->getIrpItemsAsyncWithHttpInfo($scrollId, $getIrpItemsRequest)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getIrpItemsAsyncWithHttpInfo
     *
     * Get RAP post-purchase items
     *
     * @param  string $scrollId Optional parameter specifying the scrollId to return the next set of results. (required)
     * @param  \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest Request payload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    protected function getIrpItemsAsyncWithHttpInfo(
        string $scrollId,
        \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest
    ): PromiseInterface {
        $returnType = '\Walmart\Models\MP\US\Reviews\GetIrpItemsResponse';
        $request = $this->getIrpItemsRequest($scrollId, $getIrpItemsRequest);
        $this->writeDebug($request);
        $this->writeDebug((string) $request->getBody());

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $this->writeDebug((string) $response->getBody());
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();

                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body,
                    );
                }
            );
    }

    /**
     * Create request for operation 'getIrpItems'
     *
     * @param  string $scrollId Optional parameter specifying the scrollId to return the next set of results. (required)
     * @param  \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest Request payload (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getIrpItemsRequest(
        string $scrollId,
        \Walmart\Models\MP\US\Reviews\GetIrpItemsRequest $getIrpItemsRequest
    ): Request {
        $contentType = self::contentTypes['getIrpItems'];

        // verify the required parameter 'scrollId' is set
        if ($scrollId === null || (is_array($scrollId) && count($scrollId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $scrollId when calling getIrpItems'
            );
        }
        // verify the required parameter 'getIrpItemsRequest' is set
        if ($getIrpItemsRequest === null || (is_array($getIrpItemsRequest) && count($getIrpItemsRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $getIrpItemsRequest when calling getIrpItems'
            );
        }
        $resourcePath = '/v3/growth/reviews-accelerator/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $method = 'POST';

        // query params
        $queryParams = array_merge(
            ObjectSerializer::toQueryValue(
                $scrollId,
                'scrollId', // param base name
                'string', // openApiType
                'form', // style
                true, // explode
                true // required
            ) ?? [],
        );

        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            $contentType,
            $multipart
        );

        $defaultHeaders = parent::getDefaultHeaders();
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        // for model (json/xml)
        if (isset($getIrpItemsRequest)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($getIrpItemsRequest));
            } else {
                $httpBody = $getIrpItemsRequest;
            }
        } else if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $requestInfo = [
            'path' => $resourcePath,
            'method' => $method,
            'timestamp' => $defaultHeaders['WM_SEC.TIMESTAMP'],
            'query' => $query,
        ];

        // this endpoint requires Bearer authentication (access token)
        $token = $this->config->getAccessToken();
        if ($token) {
            $headers['WM_SEC.ACCESS_TOKEN'] = $token->accessToken;
        }

        $operationHost = $this->config->getHost();
        return new Request(
            $method,
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}

