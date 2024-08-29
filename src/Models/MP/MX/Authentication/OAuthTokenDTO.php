<?php

/**
 * OAuthTokenDTO
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
 * Authentication & Authorization Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Authentication;

use Walmart\Models\BaseModel;

/**
 * OAuthTokenDTO Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class OAuthTokenDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OAuthTokenDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'accessToken' => 'string',
        'tokenType' => 'string',
        'expiresIn' => 'int',
        'refreshToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'accessToken' => null,
        'tokenType' => null,
        'expiresIn' => 'int32',
        'refreshToken' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accessToken' => false,
        'tokenType' => false,
        'expiresIn' => false,
        'refreshToken' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'accessToken' => 'accessToken',
        'tokenType' => 'tokenType',
        'expiresIn' => 'expiresIn',
        'refreshToken' => 'refresh_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'accessToken' => 'setAccessToken',
        'tokenType' => 'setTokenType',
        'expiresIn' => 'setExpiresIn',
        'refreshToken' => 'setRefreshToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'accessToken' => 'getAccessToken',
        'tokenType' => 'getTokenType',
        'expiresIn' => 'getExpiresIn',
        'refreshToken' => 'getRefreshToken'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('accessToken', $data ?? [], null);
        $this->setIfExists('tokenType', $data ?? [], null);
        $this->setIfExists('expiresIn', $data ?? [], null);
        $this->setIfExists('refreshToken', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accessToken'] === null) {
            $invalidProperties[] = "'accessToken' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets accessToken
     *
     * @return string
    
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     *
     * @param string $accessToken Access token to be used for accessing business APIs
     *
     * @return self
    
     */
    public function setAccessToken($accessToken)
    {
        if (is_null($accessToken)) {
            throw new \InvalidArgumentException('non-nullable accessToken cannot be null');
        }

        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
     * Gets tokenType
     *
     * @return string|null
    
     */
    public function getTokenType()
    {
        return $this->container['tokenType'];
    }

    /**
     * Sets tokenType
     *
     * @param string|null $tokenType Type of token according to user. (e.g., 'BEARER')
     *
     * @return self
    
     */
    public function setTokenType($tokenType)
    {
        if (is_null($tokenType)) {
            throw new \InvalidArgumentException('non-nullable tokenType cannot be null');
        }

        $this->container['tokenType'] = $tokenType;
        return $this;
    }

    /**
     * Gets expiresIn
     *
     * @return int|null
    
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param int|null $expiresIn Expiry time of access token in seconds
     *
     * @return self
    
     */
    public function setExpiresIn($expiresIn)
    {
        if (is_null($expiresIn)) {
            throw new \InvalidArgumentException('non-nullable expiresIn cannot be null');
        }

        $this->container['expiresIn'] = $expiresIn;
        return $this;
    }

    /**
     * Gets refreshToken
     *
     * @return string|null
    
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     *
     * @param string|null $refreshToken Token which should be used to refresh access token.<br /> This field is present in response when **grant_type: authorization_code**
     *
     * @return self
    
     */
    public function setRefreshToken($refreshToken)
    {
        if (is_null($refreshToken)) {
            throw new \InvalidArgumentException('non-nullable refreshToken cannot be null');
        }

        $this->container['refreshToken'] = $refreshToken;
        return $this;
    }
}
