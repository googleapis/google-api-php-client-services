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

class GoogleAdsSearchads360V23ResourcesBiddingSeasonalityAdjustment extends \Google\Collection
{
  /**
   * No value has been specified.
   */
  public const SCOPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const SCOPE_UNKNOWN = 'UNKNOWN';
  /**
   * The seasonality event is applied to all the customer's traffic for
   * supported advertising channel types and device types. The CUSTOMER scope
   * cannot be used in mutates.
   */
  public const SCOPE_CUSTOMER = 'CUSTOMER';
  /**
   * The seasonality event is applied to all specified campaigns.
   */
  public const SCOPE_CAMPAIGN = 'CAMPAIGN';
  /**
   * The seasonality event is applied to all campaigns that belong to specified
   * channel types.
   */
  public const SCOPE_CHANNEL = 'CHANNEL';
  /**
   * No value has been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The seasonality event is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The seasonality event is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  protected $collection_key = 'devices';
  /**
   * The seasonality adjustment will apply to all the campaigns under the listed
   * channels retroactively as well as going forward when the scope of this
   * adjustment is CHANNEL. The supported advertising channel types are DISPLAY,
   * SEARCH and SHOPPING. Note: a seasonality adjustment with both
   * advertising_channel_types and campaign_ids is not supported.
   *
   * @var string[]
   */
  public $advertisingChannelTypes;
  /**
   * The seasonality adjustment will apply to the campaigns listed when the
   * scope of this adjustment is CAMPAIGN. The maximum number of campaigns per
   * event is 2000. Note: a seasonality adjustment with both
   * advertising_channel_types and campaign_ids is not supported.
   *
   * @var string[]
   */
  public $campaigns;
  /**
   * Conversion rate modifier estimated based on expected conversion rate
   * changes. When this field is unset or set to 1.0 no adjustment will be
   * applied to traffic. The allowed range is 0.1 to 10.0.
   *
   * @var 
   */
  public $conversionRateModifier;
  /**
   * The description of the seasonality adjustment. The description can be at
   * most 2048 characters.
   *
   * @var string
   */
  public $description;
  /**
   * If not specified, all devices will be included in this adjustment.
   * Otherwise, only the specified targeted devices will be included in this
   * adjustment.
   *
   * @var string[]
   */
  public $devices;
  /**
   * Required. The exclusive end time of the seasonality adjustment in yyyy-MM-
   * dd HH:mm:ss format. The length of [start_date_time, end_date_time) interval
   * must be within (0, 14 days].
   *
   * @var string
   */
  public $endDateTime;
  /**
   * The name of the seasonality adjustment. The name can be at most 255
   * characters.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the seasonality adjustment. Seasonality
   * adjustment resource names have the form: `customers/{customer_id}/biddingSe
   * asonalityAdjustments/{seasonality_adjustment_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The scope of the seasonality adjustment.
   *
   * @var string
   */
  public $scope;
  /**
   * Output only. The ID of the seasonality adjustment.
   *
   * @var string
   */
  public $seasonalityAdjustmentId;
  /**
   * Required. The inclusive start time of the seasonality adjustment in yyyy-
   * MM-dd HH:mm:ss format. A seasonality adjustment is forward looking and
   * should be used for events that start and end in the future.
   *
   * @var string
   */
  public $startDateTime;
  /**
   * Output only. The status of the seasonality adjustment.
   *
   * @var string
   */
  public $status;

  /**
   * The seasonality adjustment will apply to all the campaigns under the listed
   * channels retroactively as well as going forward when the scope of this
   * adjustment is CHANNEL. The supported advertising channel types are DISPLAY,
   * SEARCH and SHOPPING. Note: a seasonality adjustment with both
   * advertising_channel_types and campaign_ids is not supported.
   *
   * @param string[] $advertisingChannelTypes
   */
  public function setAdvertisingChannelTypes($advertisingChannelTypes)
  {
    $this->advertisingChannelTypes = $advertisingChannelTypes;
  }
  /**
   * @return string[]
   */
  public function getAdvertisingChannelTypes()
  {
    return $this->advertisingChannelTypes;
  }
  /**
   * The seasonality adjustment will apply to the campaigns listed when the
   * scope of this adjustment is CAMPAIGN. The maximum number of campaigns per
   * event is 2000. Note: a seasonality adjustment with both
   * advertising_channel_types and campaign_ids is not supported.
   *
   * @param string[] $campaigns
   */
  public function setCampaigns($campaigns)
  {
    $this->campaigns = $campaigns;
  }
  /**
   * @return string[]
   */
  public function getCampaigns()
  {
    return $this->campaigns;
  }
  public function setConversionRateModifier($conversionRateModifier)
  {
    $this->conversionRateModifier = $conversionRateModifier;
  }
  public function getConversionRateModifier()
  {
    return $this->conversionRateModifier;
  }
  /**
   * The description of the seasonality adjustment. The description can be at
   * most 2048 characters.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * If not specified, all devices will be included in this adjustment.
   * Otherwise, only the specified targeted devices will be included in this
   * adjustment.
   *
   * @param string[] $devices
   */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /**
   * @return string[]
   */
  public function getDevices()
  {
    return $this->devices;
  }
  /**
   * Required. The exclusive end time of the seasonality adjustment in yyyy-MM-
   * dd HH:mm:ss format. The length of [start_date_time, end_date_time) interval
   * must be within (0, 14 days].
   *
   * @param string $endDateTime
   */
  public function setEndDateTime($endDateTime)
  {
    $this->endDateTime = $endDateTime;
  }
  /**
   * @return string
   */
  public function getEndDateTime()
  {
    return $this->endDateTime;
  }
  /**
   * The name of the seasonality adjustment. The name can be at most 255
   * characters.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Immutable. The resource name of the seasonality adjustment. Seasonality
   * adjustment resource names have the form: `customers/{customer_id}/biddingSe
   * asonalityAdjustments/{seasonality_adjustment_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * The scope of the seasonality adjustment.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER, CAMPAIGN, CHANNEL
   *
   * @param self::SCOPE_* $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return self::SCOPE_*
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Output only. The ID of the seasonality adjustment.
   *
   * @param string $seasonalityAdjustmentId
   */
  public function setSeasonalityAdjustmentId($seasonalityAdjustmentId)
  {
    $this->seasonalityAdjustmentId = $seasonalityAdjustmentId;
  }
  /**
   * @return string
   */
  public function getSeasonalityAdjustmentId()
  {
    return $this->seasonalityAdjustmentId;
  }
  /**
   * Required. The inclusive start time of the seasonality adjustment in yyyy-
   * MM-dd HH:mm:ss format. A seasonality adjustment is forward looking and
   * should be used for events that start and end in the future.
   *
   * @param string $startDateTime
   */
  public function setStartDateTime($startDateTime)
  {
    $this->startDateTime = $startDateTime;
  }
  /**
   * @return string
   */
  public function getStartDateTime()
  {
    return $this->startDateTime;
  }
  /**
   * Output only. The status of the seasonality adjustment.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesBiddingSeasonalityAdjustment::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesBiddingSeasonalityAdjustment');
