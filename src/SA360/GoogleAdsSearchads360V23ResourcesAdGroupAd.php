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

class GoogleAdsSearchads360V23ResourcesAdGroupAd extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const AD_STRENGTH_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const AD_STRENGTH_UNKNOWN = 'UNKNOWN';
  /**
   * The ad strength is currently pending.
   */
  public const AD_STRENGTH_PENDING = 'PENDING';
  /**
   * No ads could be generated.
   */
  public const AD_STRENGTH_NO_ADS = 'NO_ADS';
  /**
   * Poor strength.
   */
  public const AD_STRENGTH_POOR = 'POOR';
  /**
   * Average strength.
   */
  public const AD_STRENGTH_AVERAGE = 'AVERAGE';
  /**
   * Good strength.
   */
  public const AD_STRENGTH_GOOD = 'GOOD';
  /**
   * Excellent strength.
   */
  public const AD_STRENGTH_EXCELLENT = 'EXCELLENT';
  /**
   * No value has been specified.
   */
  public const ENGINE_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ENGINE_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Deprecated. Do not use.
   *
   * @deprecated
   */
  public const ENGINE_STATUS_AD_GROUP_AD_ELIGIBLE = 'AD_GROUP_AD_ELIGIBLE';
  /**
   * Baidu: Creative was not approved.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_INAPPROPRIATE_FOR_CAMPAIGN = 'AD_GROUP_AD_INAPPROPRIATE_FOR_CAMPAIGN';
  /**
   * Baidu: Mobile URL in process to be reviewed.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_MOBILE_URL_UNDER_REVIEW = 'AD_GROUP_AD_MOBILE_URL_UNDER_REVIEW';
  /**
   * Baidu: Creative is invalid on mobile device but valid on desktop.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_PARTIALLY_INVALID = 'AD_GROUP_AD_PARTIALLY_INVALID';
  /**
   * Baidu: Creative is ready for activation.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_TO_BE_ACTIVATED = 'AD_GROUP_AD_TO_BE_ACTIVATED';
  /**
   * Baidu: Creative not reviewed.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_NOT_REVIEWED = 'AD_GROUP_AD_NOT_REVIEWED';
  /**
   * Deprecated. Do not use. Previously used by Gemini
   *
   * @deprecated
   */
  public const ENGINE_STATUS_AD_GROUP_AD_ON_HOLD = 'AD_GROUP_AD_ON_HOLD';
  /**
   * Creative has been paused.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_PAUSED = 'AD_GROUP_AD_PAUSED';
  /**
   * Creative has been removed.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_REMOVED = 'AD_GROUP_AD_REMOVED';
  /**
   * Creative is pending review.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_PENDING_REVIEW = 'AD_GROUP_AD_PENDING_REVIEW';
  /**
   * Creative is under review.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_UNDER_REVIEW = 'AD_GROUP_AD_UNDER_REVIEW';
  /**
   * Creative has been approved.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_APPROVED = 'AD_GROUP_AD_APPROVED';
  /**
   * Creative has been disapproved.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_DISAPPROVED = 'AD_GROUP_AD_DISAPPROVED';
  /**
   * Creative is serving.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_SERVING = 'AD_GROUP_AD_SERVING';
  /**
   * Creative has been paused because the account is paused.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_ACCOUNT_PAUSED = 'AD_GROUP_AD_ACCOUNT_PAUSED';
  /**
   * Creative has been paused because the campaign is paused.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_CAMPAIGN_PAUSED = 'AD_GROUP_AD_CAMPAIGN_PAUSED';
  /**
   * Creative has been paused because the ad group is paused.
   */
  public const ENGINE_STATUS_AD_GROUP_AD_AD_GROUP_PAUSED = 'AD_GROUP_AD_AD_GROUP_PAUSED';
  /**
   * No value has been specified.
   */
  public const PRIMARY_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRIMARY_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The ad group ad is eligible to serve.
   */
  public const PRIMARY_STATUS_ELIGIBLE = 'ELIGIBLE';
  /**
   * The ad group ad is paused.
   */
  public const PRIMARY_STATUS_PAUSED = 'PAUSED';
  /**
   * The ad group ad is removed.
   */
  public const PRIMARY_STATUS_REMOVED = 'REMOVED';
  /**
   * The ad cannot serve now, but may serve later without advertiser action.
   */
  public const PRIMARY_STATUS_PENDING = 'PENDING';
  /**
   * The ad group ad is serving in a limited capacity.
   */
  public const PRIMARY_STATUS_LIMITED = 'LIMITED';
  /**
   * The ad group ad is not eligible to serve.
   */
  public const PRIMARY_STATUS_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
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
   * The ad group ad is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The ad group ad is paused.
   */
  public const STATUS_PAUSED = 'PAUSED';
  /**
   * The ad group ad is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  protected $collection_key = 'primaryStatusReasons';
  /**
   * Output only. A list of recommendations to improve the ad strength. For
   * example, a recommendation could be "Try adding a few more unique headlines
   * or unpinning some assets.".
   *
   * @var string[]
   */
  public $actionItems;
  protected $adType = GoogleAdsSearchads360V23ResourcesAd::class;
  protected $adDataType = '';
  /**
   * Immutable. The ad group to which the ad belongs.
   *
   * @var string
   */
  public $adGroup;
  protected $adGroupAdAssetAutomationSettingsType = GoogleAdsSearchads360V23ResourcesAdGroupAdAssetAutomationSetting::class;
  protected $adGroupAdAssetAutomationSettingsDataType = 'array';
  /**
   * Output only. Overall ad strength for this ad group ad.
   *
   * @var string
   */
  public $adStrength;
  /**
   * Output only. The timestamp when this ad_group_ad was created. The datetime
   * is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss" format.
   *
   * @var string
   */
  public $creationTime;
  /**
   * Output only. The resource names of effective labels attached to this ad. An
   * effective label is a label inherited or directly assigned to this ad.
   *
   * @var string[]
   */
  public $effectiveLabels;
  /**
   * Output only. ID of the ad in the external engine account. This field is for
   * Search Ads 360 account only, for example, Yahoo Japan, Microsoft, Baidu
   * etc. For non-Search Ads 360 entity, use "ad_group_ad.ad.id" instead.
   *
   * @var string
   */
  public $engineId;
  /**
   * Output only. Additional status of the ad in the external engine account.
   * Possible statuses (depending on the type of external account) include
   * active, eligible, pending review, etc.
   *
   * @var string
   */
  public $engineStatus;
  /**
   * Output only. The resource names of labels attached to this ad group ad.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. The datetime when this ad group ad was last modified. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss"
   * format.
   *
   * @var string
   */
  public $lastModifiedTime;
  protected $policySummaryType = GoogleAdsSearchads360V23ResourcesAdGroupAdPolicySummary::class;
  protected $policySummaryDataType = '';
  /**
   * Output only. Provides aggregated view into why an ad group ad is not
   * serving or not serving optimally.
   *
   * @var string
   */
  public $primaryStatus;
  /**
   * Output only. Provides reasons for why an ad group ad is not serving or not
   * serving optimally.
   *
   * @var string[]
   */
  public $primaryStatusReasons;
  /**
   * Immutable. The resource name of the ad. Ad group ad resource names have the
   * form: `customers/{customer_id}/adGroupAds/{ad_group_id}~{ad_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The status of the ad.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. A list of recommendations to improve the ad strength. For
   * example, a recommendation could be "Try adding a few more unique headlines
   * or unpinning some assets.".
   *
   * @param string[] $actionItems
   */
  public function setActionItems($actionItems)
  {
    $this->actionItems = $actionItems;
  }
  /**
   * @return string[]
   */
  public function getActionItems()
  {
    return $this->actionItems;
  }
  /**
   * Immutable. The ad.
   *
   * @param GoogleAdsSearchads360V23ResourcesAd $ad
   */
  public function setAd(GoogleAdsSearchads360V23ResourcesAd $ad)
  {
    $this->ad = $ad;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAd
   */
  public function getAd()
  {
    return $this->ad;
  }
  /**
   * Immutable. The ad group to which the ad belongs.
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Settings that control the types of asset automation. See the
   * AssetAutomationTypeEnum documentation for the default opt in/out behavior
   * of each type.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAdAssetAutomationSetting[] $adGroupAdAssetAutomationSettings
   */
  public function setAdGroupAdAssetAutomationSettings($adGroupAdAssetAutomationSettings)
  {
    $this->adGroupAdAssetAutomationSettings = $adGroupAdAssetAutomationSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAdAssetAutomationSetting[]
   */
  public function getAdGroupAdAssetAutomationSettings()
  {
    return $this->adGroupAdAssetAutomationSettings;
  }
  /**
   * Output only. Overall ad strength for this ad group ad.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, NO_ADS, POOR, AVERAGE,
   * GOOD, EXCELLENT
   *
   * @param self::AD_STRENGTH_* $adStrength
   */
  public function setAdStrength($adStrength)
  {
    $this->adStrength = $adStrength;
  }
  /**
   * @return self::AD_STRENGTH_*
   */
  public function getAdStrength()
  {
    return $this->adStrength;
  }
  /**
   * Output only. The timestamp when this ad_group_ad was created. The datetime
   * is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss" format.
   *
   * @param string $creationTime
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * Output only. The resource names of effective labels attached to this ad. An
   * effective label is a label inherited or directly assigned to this ad.
   *
   * @param string[] $effectiveLabels
   */
  public function setEffectiveLabels($effectiveLabels)
  {
    $this->effectiveLabels = $effectiveLabels;
  }
  /**
   * @return string[]
   */
  public function getEffectiveLabels()
  {
    return $this->effectiveLabels;
  }
  /**
   * Output only. ID of the ad in the external engine account. This field is for
   * Search Ads 360 account only, for example, Yahoo Japan, Microsoft, Baidu
   * etc. For non-Search Ads 360 entity, use "ad_group_ad.ad.id" instead.
   *
   * @param string $engineId
   */
  public function setEngineId($engineId)
  {
    $this->engineId = $engineId;
  }
  /**
   * @return string
   */
  public function getEngineId()
  {
    return $this->engineId;
  }
  /**
   * Output only. Additional status of the ad in the external engine account.
   * Possible statuses (depending on the type of external account) include
   * active, eligible, pending review, etc.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_GROUP_AD_ELIGIBLE,
   * AD_GROUP_AD_INAPPROPRIATE_FOR_CAMPAIGN,
   * AD_GROUP_AD_MOBILE_URL_UNDER_REVIEW, AD_GROUP_AD_PARTIALLY_INVALID,
   * AD_GROUP_AD_TO_BE_ACTIVATED, AD_GROUP_AD_NOT_REVIEWED, AD_GROUP_AD_ON_HOLD,
   * AD_GROUP_AD_PAUSED, AD_GROUP_AD_REMOVED, AD_GROUP_AD_PENDING_REVIEW,
   * AD_GROUP_AD_UNDER_REVIEW, AD_GROUP_AD_APPROVED, AD_GROUP_AD_DISAPPROVED,
   * AD_GROUP_AD_SERVING, AD_GROUP_AD_ACCOUNT_PAUSED,
   * AD_GROUP_AD_CAMPAIGN_PAUSED, AD_GROUP_AD_AD_GROUP_PAUSED
   *
   * @param self::ENGINE_STATUS_* $engineStatus
   */
  public function setEngineStatus($engineStatus)
  {
    $this->engineStatus = $engineStatus;
  }
  /**
   * @return self::ENGINE_STATUS_*
   */
  public function getEngineStatus()
  {
    return $this->engineStatus;
  }
  /**
   * Output only. The resource names of labels attached to this ad group ad.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. The datetime when this ad group ad was last modified. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss"
   * format.
   *
   * @param string $lastModifiedTime
   */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /**
   * @return string
   */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /**
   * Output only. Policy information for the ad.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAdPolicySummary $policySummary
   */
  public function setPolicySummary(GoogleAdsSearchads360V23ResourcesAdGroupAdPolicySummary $policySummary)
  {
    $this->policySummary = $policySummary;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAdPolicySummary
   */
  public function getPolicySummary()
  {
    return $this->policySummary;
  }
  /**
   * Output only. Provides aggregated view into why an ad group ad is not
   * serving or not serving optimally.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ELIGIBLE, PAUSED, REMOVED, PENDING,
   * LIMITED, NOT_ELIGIBLE
   *
   * @param self::PRIMARY_STATUS_* $primaryStatus
   */
  public function setPrimaryStatus($primaryStatus)
  {
    $this->primaryStatus = $primaryStatus;
  }
  /**
   * @return self::PRIMARY_STATUS_*
   */
  public function getPrimaryStatus()
  {
    return $this->primaryStatus;
  }
  /**
   * Output only. Provides reasons for why an ad group ad is not serving or not
   * serving optimally.
   *
   * @param string[] $primaryStatusReasons
   */
  public function setPrimaryStatusReasons($primaryStatusReasons)
  {
    $this->primaryStatusReasons = $primaryStatusReasons;
  }
  /**
   * @return string[]
   */
  public function getPrimaryStatusReasons()
  {
    return $this->primaryStatusReasons;
  }
  /**
   * Immutable. The resource name of the ad. Ad group ad resource names have the
   * form: `customers/{customer_id}/adGroupAds/{ad_group_id}~{ad_id}`
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
   * The status of the ad.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, PAUSED, REMOVED
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
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupAd::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupAd');
