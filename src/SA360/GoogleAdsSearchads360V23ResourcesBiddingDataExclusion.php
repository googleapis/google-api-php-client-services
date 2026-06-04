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

class GoogleAdsSearchads360V23ResourcesBiddingDataExclusion extends \Google\Collection
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
   * The data_exclusion will apply to all the campaigns under the listed
   * channels retroactively as well as going forward when the scope of this
   * exclusion is CHANNEL. The supported advertising channel types are DISPLAY,
   * SEARCH and SHOPPING. Note: a data exclusion with both
   * advertising_channel_types and campaign_ids is not supported.
   *
   * @var string[]
   */
  public $advertisingChannelTypes;
  /**
   * The data exclusion will apply to the campaigns listed when the scope of
   * this exclusion is CAMPAIGN. The maximum number of campaigns per event is
   * 2000. Note: a data exclusion with both advertising_channel_types and
   * campaign_ids is not supported.
   *
   * @var string[]
   */
  public $campaigns;
  /**
   * Output only. The ID of the data exclusion.
   *
   * @var string
   */
  public $dataExclusionId;
  /**
   * The description of the data exclusion. The description can be at most 2048
   * characters.
   *
   * @var string
   */
  public $description;
  /**
   * If not specified, all devices will be included in this exclusion.
   * Otherwise, only the specified targeted devices will be included in this
   * exclusion.
   *
   * @var string[]
   */
  public $devices;
  /**
   * Required. The exclusive end time of the data exclusion in yyyy-MM-dd
   * HH:mm:ss format. The length of [start_date_time, end_date_time) interval
   * must be within (0, 14 days].
   *
   * @var string
   */
  public $endDateTime;
  /**
   * The name of the data exclusion. The name can be at most 255 characters.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the data exclusion. Data exclusion resource
   * names have the form:
   * `customers/{customer_id}/biddingDataExclusions/{data_exclusion_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The scope of the data exclusion.
   *
   * @var string
   */
  public $scope;
  /**
   * Required. The inclusive start time of the data exclusion in yyyy-MM-dd
   * HH:mm:ss format. A data exclusion is backward looking and should be used
   * for events that start in the past and end either in the past or future.
   *
   * @var string
   */
  public $startDateTime;
  /**
   * Output only. The status of the data exclusion.
   *
   * @var string
   */
  public $status;

  /**
   * The data_exclusion will apply to all the campaigns under the listed
   * channels retroactively as well as going forward when the scope of this
   * exclusion is CHANNEL. The supported advertising channel types are DISPLAY,
   * SEARCH and SHOPPING. Note: a data exclusion with both
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
   * The data exclusion will apply to the campaigns listed when the scope of
   * this exclusion is CAMPAIGN. The maximum number of campaigns per event is
   * 2000. Note: a data exclusion with both advertising_channel_types and
   * campaign_ids is not supported.
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
  /**
   * Output only. The ID of the data exclusion.
   *
   * @param string $dataExclusionId
   */
  public function setDataExclusionId($dataExclusionId)
  {
    $this->dataExclusionId = $dataExclusionId;
  }
  /**
   * @return string
   */
  public function getDataExclusionId()
  {
    return $this->dataExclusionId;
  }
  /**
   * The description of the data exclusion. The description can be at most 2048
   * characters.
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
   * If not specified, all devices will be included in this exclusion.
   * Otherwise, only the specified targeted devices will be included in this
   * exclusion.
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
   * Required. The exclusive end time of the data exclusion in yyyy-MM-dd
   * HH:mm:ss format. The length of [start_date_time, end_date_time) interval
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
   * The name of the data exclusion. The name can be at most 255 characters.
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
   * Immutable. The resource name of the data exclusion. Data exclusion resource
   * names have the form:
   * `customers/{customer_id}/biddingDataExclusions/{data_exclusion_id}`
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
   * The scope of the data exclusion.
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
   * Required. The inclusive start time of the data exclusion in yyyy-MM-dd
   * HH:mm:ss format. A data exclusion is backward looking and should be used
   * for events that start in the past and end either in the past or future.
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
   * Output only. The status of the data exclusion.
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
class_alias(GoogleAdsSearchads360V23ResourcesBiddingDataExclusion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesBiddingDataExclusion');
