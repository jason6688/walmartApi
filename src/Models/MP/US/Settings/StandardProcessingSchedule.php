<?php

/**
 * StandardProcessingSchedule
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * StandardProcessingSchedule Class Doc Comment
 *
 * @category Class

 * @description Operating Schedule for the fulfillment center

 * @package  Walmart
 * @author   Jason
 * @link     https://www.itcrowd.cn
 * @email    284469828@qq.com
 */
class StandardProcessingSchedule extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'StandardProcessingSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sunday' => '\Walmart\Models\MP\US\Settings\CalendarDayShiftResponse',
        'monday' => '\Walmart\Models\MP\US\Settings\CalendarDayShiftResponse',
        'tuesday' => '\Walmart\Models\MP\US\Settings\CalendarDayShiftResponse',
        'wednesday' => '\Walmart\Models\MP\US\Settings\CalendarDayShiftResponse',
        'thursday' => '\Walmart\Models\MP\US\Settings\CalendarDayShiftResponse',
        'friday' => '\Walmart\Models\MP\US\Settings\CalendarDayShiftResponse',
        'saturday' => '\Walmart\Models\MP\US\Settings\CalendarDayShiftResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sunday' => null,
        'monday' => null,
        'tuesday' => null,
        'wednesday' => null,
        'thursday' => null,
        'friday' => null,
        'saturday' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sunday' => false,
        'monday' => false,
        'tuesday' => false,
        'wednesday' => false,
        'thursday' => false,
        'friday' => false,
        'saturday' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sunday' => 'sunday',
        'monday' => 'monday',
        'tuesday' => 'tuesday',
        'wednesday' => 'wednesday',
        'thursday' => 'thursday',
        'friday' => 'friday',
        'saturday' => 'saturday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sunday' => 'setSunday',
        'monday' => 'setMonday',
        'tuesday' => 'setTuesday',
        'wednesday' => 'setWednesday',
        'thursday' => 'setThursday',
        'friday' => 'setFriday',
        'saturday' => 'setSaturday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sunday' => 'getSunday',
        'monday' => 'getMonday',
        'tuesday' => 'getTuesday',
        'wednesday' => 'getWednesday',
        'thursday' => 'getThursday',
        'friday' => 'getFriday',
        'saturday' => 'getSaturday'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sunday', $data ?? [], null);
        $this->setIfExists('monday', $data ?? [], null);
        $this->setIfExists('tuesday', $data ?? [], null);
        $this->setIfExists('wednesday', $data ?? [], null);
        $this->setIfExists('thursday', $data ?? [], null);
        $this->setIfExists('friday', $data ?? [], null);
        $this->setIfExists('saturday', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sunday'] === null) {
            $invalidProperties[] = "'sunday' can't be null";
        }
        if ($this->container['monday'] === null) {
            $invalidProperties[] = "'monday' can't be null";
        }
        if ($this->container['tuesday'] === null) {
            $invalidProperties[] = "'tuesday' can't be null";
        }
        if ($this->container['wednesday'] === null) {
            $invalidProperties[] = "'wednesday' can't be null";
        }
        if ($this->container['thursday'] === null) {
            $invalidProperties[] = "'thursday' can't be null";
        }
        if ($this->container['friday'] === null) {
            $invalidProperties[] = "'friday' can't be null";
        }
        if ($this->container['saturday'] === null) {
            $invalidProperties[] = "'saturday' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets sunday
     *
     * @return \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse
    
     */
    public function getSunday()
    {
        return $this->container['sunday'];
    }

    /**
     * Sets sunday
     *
     * @param \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse $sunday sunday
     *
     * @return self
    
     */
    public function setSunday($sunday)
    {
        if (is_null($sunday)) {
            throw new \InvalidArgumentException('non-nullable sunday cannot be null');
        }

        $this->container['sunday'] = $sunday;
        return $this;
    }

    /**
     * Gets monday
     *
     * @return \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse
    
     */
    public function getMonday()
    {
        return $this->container['monday'];
    }

    /**
     * Sets monday
     *
     * @param \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse $monday monday
     *
     * @return self
    
     */
    public function setMonday($monday)
    {
        if (is_null($monday)) {
            throw new \InvalidArgumentException('non-nullable monday cannot be null');
        }

        $this->container['monday'] = $monday;
        return $this;
    }

    /**
     * Gets tuesday
     *
     * @return \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse
    
     */
    public function getTuesday()
    {
        return $this->container['tuesday'];
    }

    /**
     * Sets tuesday
     *
     * @param \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse $tuesday tuesday
     *
     * @return self
    
     */
    public function setTuesday($tuesday)
    {
        if (is_null($tuesday)) {
            throw new \InvalidArgumentException('non-nullable tuesday cannot be null');
        }

        $this->container['tuesday'] = $tuesday;
        return $this;
    }

    /**
     * Gets wednesday
     *
     * @return \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse
    
     */
    public function getWednesday()
    {
        return $this->container['wednesday'];
    }

    /**
     * Sets wednesday
     *
     * @param \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse $wednesday wednesday
     *
     * @return self
    
     */
    public function setWednesday($wednesday)
    {
        if (is_null($wednesday)) {
            throw new \InvalidArgumentException('non-nullable wednesday cannot be null');
        }

        $this->container['wednesday'] = $wednesday;
        return $this;
    }

    /**
     * Gets thursday
     *
     * @return \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse
    
     */
    public function getThursday()
    {
        return $this->container['thursday'];
    }

    /**
     * Sets thursday
     *
     * @param \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse $thursday thursday
     *
     * @return self
    
     */
    public function setThursday($thursday)
    {
        if (is_null($thursday)) {
            throw new \InvalidArgumentException('non-nullable thursday cannot be null');
        }

        $this->container['thursday'] = $thursday;
        return $this;
    }

    /**
     * Gets friday
     *
     * @return \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse
    
     */
    public function getFriday()
    {
        return $this->container['friday'];
    }

    /**
     * Sets friday
     *
     * @param \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse $friday friday
     *
     * @return self
    
     */
    public function setFriday($friday)
    {
        if (is_null($friday)) {
            throw new \InvalidArgumentException('non-nullable friday cannot be null');
        }

        $this->container['friday'] = $friday;
        return $this;
    }

    /**
     * Gets saturday
     *
     * @return \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse
    
     */
    public function getSaturday()
    {
        return $this->container['saturday'];
    }

    /**
     * Sets saturday
     *
     * @param \Walmart\Models\MP\US\Settings\CalendarDayShiftResponse $saturday saturday
     *
     * @return self
    
     */
    public function setSaturday($saturday)
    {
        if (is_null($saturday)) {
            throw new \InvalidArgumentException('non-nullable saturday cannot be null');
        }

        $this->container['saturday'] = $saturday;
        return $this;
    }
}
