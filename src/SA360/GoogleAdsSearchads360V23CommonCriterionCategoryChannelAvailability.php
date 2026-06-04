<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonCriterionCategoryChannelAvailability extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const ADVERTISING_CHANNEL_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ADVERTISING_CHANNEL_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Search Network. Includes display bundled, and Search+ campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SEARCH = 'SEARCH';
  /**
   * Google Display Network only.
   */
  public const ADVERTISING_CHANNEL_TYPE_DISPLAY = 'DISPLAY';
  /**
   * Shopping campaigns serve on the shopping property and on google.com search
   * results.
   */
  public const ADVERTISING_CHANNEL_TYPE_SHOPPING = 'SHOPPING';
  /**
   * Hotel Ads campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_HOTEL = 'HOTEL';
  /**
   * Video campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_VIDEO = 'VIDEO';
  /**
   * App Campaigns, and App Campaigns for Engagement, that run across multiple
   * channels.
   */
  public const ADVERTISING_CHANNEL_TYPE_MULTI_CHANNEL = 'MULTI_CHANNEL';
  /**
   * Local ads campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_LOCAL = 'LOCAL';
  /**
   * Smart campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SMART = 'SMART';
  /**
   * Performance Max campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_PERFORMANCE_MAX = 'PERFORMANCE_MAX';
  /**
   * Local services campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_LOCAL_SERVICES = 'LOCAL_SERVICES';
  /**
   * Travel campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_TRAVEL = 'TRAVEL';
  /**
   * Demand Gen campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_DEMAND_GEN = 'DEMAND_GEN';
  /**
   * Social campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SOCIAL = 'SOCIAL';
  /**
   * Not specified.
   */
  public const AVAILABILITY_MODE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const AVAILABILITY_MODE_UNKNOWN = 'UNKNOWN';
  /**
   * The category is available to campaigns of all channel types and subtypes.
   */
  public const AVAILABILITY_MODE_ALL_CHANNELS = 'ALL_CHANNELS';
  /**
   * The category is available to campaigns of a specific channel type,
   * including all subtypes under it.
   */
  public const AVAILABILITY_MODE_CHANNEL_TYPE_AND_ALL_SUBTYPES = 'CHANNEL_TYPE_AND_ALL_SUBTYPES';
  /**
   * The category is available to campaigns of a specific channel type and
   * subtype(s).
   */
  public const AVAILABILITY_MODE_CHANNEL_TYPE_AND_SUBSET_SUBTYPES = 'CHANNEL_TYPE_AND_SUBSET_SUBTYPES';
  protected $collection_key = 'advertisingChannelSubType';
  /**
   * Channel subtypes under the channel type the category is available to.
   *
   * @var string[]
   */
  public $advertisingChannelSubType;
  /**
   * Channel type the category is available to.
   *
   * @var string
   */
  public $advertisingChannelType;
  /**
   * Format of the channel availability. Can be ALL_CHANNELS (the rest of the
   * fields will not be set), CHANNEL_TYPE (only advertising_channel_type type
   * will be set, the category is available to all sub types under it) or
   * CHANNEL_TYPE_AND_SUBTYPES (advertising_channel_type,
   * advertising_channel_sub_type, and include_default_channel_sub_type will all
   * be set).
   *
   * @var string
   */
  public $availabilityMode;
  /**
   * Whether default channel sub type is included. For example,
   * advertising_channel_type being DISPLAY and include_default_channel_sub_type
   * being false means that the default display campaign where channel sub type
   * is not set is not included in this availability configuration.
   *
   * @var bool
   */
  public $includeDefaultChannelSubType;

  /**
   * Channel subtypes under the channel type the category is available to.
   *
   * @param string[] $advertisingChannelSubType
   */
  public function setAdvertisingChannelSubType($advertisingChannelSubType)
  {
    $this->advertisingChannelSubType = $advertisingChannelSubType;
  }
  /**
   * @return string[]
   */
  public function getAdvertisingChannelSubType()
  {
    return $this->advertisingChannelSubType;
  }
  /**
   * Channel type the category is available to.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SEARCH, DISPLAY, SHOPPING, HOTEL,
   * VIDEO, MULTI_CHANNEL, LOCAL, SMART, PERFORMANCE_MAX, LOCAL_SERVICES,
   * TRAVEL, DEMAND_GEN, SOCIAL
   *
   * @param self::ADVERTISING_CHANNEL_TYPE_* $advertisingChannelType
   */
  public function setAdvertisingChannelType($advertisingChannelType)
  {
    $this->advertisingChannelType = $advertisingChannelType;
  }
  /**
   * @return self::ADVERTISING_CHANNEL_TYPE_*
   */
  public function getAdvertisingChannelType()
  {
    return $this->advertisingChannelType;
  }
  /**
   * Format of the channel availability. Can be ALL_CHANNELS (the rest of the
   * fields will not be set), CHANNEL_TYPE (only advertising_channel_type type
   * will be set, the category is available to all sub types under it) or
   * CHANNEL_TYPE_AND_SUBTYPES (advertising_channel_type,
   * advertising_channel_sub_type, and include_default_channel_sub_type will all
   * be set).
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ALL_CHANNELS,
   * CHANNEL_TYPE_AND_ALL_SUBTYPES, CHANNEL_TYPE_AND_SUBSET_SUBTYPES
   *
   * @param self::AVAILABILITY_MODE_* $availabilityMode
   */
  public function setAvailabilityMode($availabilityMode)
  {
    $this->availabilityMode = $availabilityMode;
  }
  /**
   * @return self::AVAILABILITY_MODE_*
   */
  public function getAvailabilityMode()
  {
    return $this->availabilityMode;
  }
  /**
   * Whether default channel sub type is included. For example,
   * advertising_channel_type being DISPLAY and include_default_channel_sub_type
   * being false means that the default display campaign where channel sub type
   * is not set is not included in this availability configuration.
   *
   * @param bool $includeDefaultChannelSubType
   */
  public function setIncludeDefaultChannelSubType($includeDefaultChannelSubType)
  {
    $this->includeDefaultChannelSubType = $includeDefaultChannelSubType;
  }
  /**
   * @return bool
   */
  public function getIncludeDefaultChannelSubType()
  {
    return $this->includeDefaultChannelSubType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCriterionCategoryChannelAvailability::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCriterionCategoryChannelAvailability');
