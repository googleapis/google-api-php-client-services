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

namespace Google\Service\CurationPartners;

class PackageTargeting extends \Google\Collection
{
  /**
   * Default value. Should not be used in targeting specifications.
   */
  public const INCLUDED_ACCELERATED_MOBILE_PAGE_TYPE_ACCELERATED_MOBILE_PAGE_TYPE_UNSPECIFIED = 'ACCELERATED_MOBILE_PAGE_TYPE_UNSPECIFIED';
  /**
   * Targets inventory on standard web pages not using any AMP framework.
   */
  public const INCLUDED_ACCELERATED_MOBILE_PAGE_TYPE_ACCELERATED_MOBILE_PAGE_TYPE_NON_AMP = 'ACCELERATED_MOBILE_PAGE_TYPE_NON_AMP';
  /**
   * Targets inventory on pages built using the core AMP HTML framework.
   */
  public const INCLUDED_ACCELERATED_MOBILE_PAGE_TYPE_ACCELERATED_MOBILE_PAGE_TYPE_AMP = 'ACCELERATED_MOBILE_PAGE_TYPE_AMP';
  /**
   * Targets inventory on pages using the AMP Story (STAMP) format, which is
   * optimized for visual storytelling (e.g., tappable full-screen experiences).
   */
  public const INCLUDED_ACCELERATED_MOBILE_PAGE_TYPE_ACCELERATED_MOBILE_PAGE_TYPE_AMP_STORY = 'ACCELERATED_MOBILE_PAGE_TYPE_AMP_STORY';
  /**
   * Default value. Should not be used in targeting specifications.
   */
  public const INCLUDED_CREATIVE_FORMAT_CREATIVE_FORMAT_UNSPECIFIED = 'CREATIVE_FORMAT_UNSPECIFIED';
  /**
   * Targets ad slots intended for HTML display creatives.
   */
  public const INCLUDED_CREATIVE_FORMAT_CREATIVE_FORMAT_DISPLAY = 'CREATIVE_FORMAT_DISPLAY';
  /**
   * Targets ad slots intended for video creatives.
   */
  public const INCLUDED_CREATIVE_FORMAT_CREATIVE_FORMAT_VIDEO = 'CREATIVE_FORMAT_VIDEO';
  /**
   * Targets ad slots intended for audio creatives.
   */
  public const INCLUDED_CREATIVE_FORMAT_CREATIVE_FORMAT_AUDIO = 'CREATIVE_FORMAT_AUDIO';
  /**
   * Default value. Should not be used in targeting specifications.
   */
  public const INCLUDED_ENVIRONMENT_ENVIRONMENT_UNSPECIFIED = 'ENVIRONMENT_UNSPECIFIED';
  /**
   * Targets inventory rendered within an ad-supported website.
   */
  public const INCLUDED_ENVIRONMENT_ENVIRONMENT_SITE = 'ENVIRONMENT_SITE';
  /**
   * Targets inventory within a mobile application.
   */
  public const INCLUDED_ENVIRONMENT_ENVIRONMENT_APP = 'ENVIRONMENT_APP';
  /**
   * Default value. Should not be used in targeting specifications.
   */
  public const INCLUDED_REWARDED_TYPE_REWARDED_TYPE_UNSPECIFIED = 'REWARDED_TYPE_UNSPECIFIED';
  /**
   * Targets inventory that does NOT offer an explicit reward to the user for
   * watching or interacting with the ad.
   */
  public const INCLUDED_REWARDED_TYPE_REWARDED_TYPE_NON_REWARDED = 'REWARDED_TYPE_NON_REWARDED';
  /**
   * Targets inventory that offers a reward to the user in exchange for watching
   * or engaging with the ad.
   */
  public const INCLUDED_REWARDED_TYPE_REWARDED_TYPE_REWARDED = 'REWARDED_TYPE_REWARDED';
  protected $collection_key = 'includedRestrictedCategories';
  protected $geoTargetingType = CriteriaTargeting::class;
  protected $geoTargetingDataType = '';
  /**
   * Optional. The targeted accelerated mobile page type. If unset, inventory
   * will be targeted regardless of AMP status.
   *
   * @var string
   */
  public $includedAcceleratedMobilePageType;
  protected $includedAdSizesType = AdSize::class;
  protected $includedAdSizesDataType = 'array';
  /**
   * Optional. The included list of targeted authorized seller statuses. If
   * empty, inventory will be targeted regardless of seller status.
   *
   * @var string[]
   */
  public $includedAuthorizedSellerStatuses;
  /**
   * Optional. The creative format to target. If unset, all creative markup
   * types are targeted.
   *
   * @var string
   */
  public $includedCreativeFormat;
  /**
   * Optional. The active data segments to be targeted. If unset, inventory will
   * be targeted regardless of data segments. Format:
   * `curators/{account_id}/dataSegments/{data_segment_id}`
   *
   * @var string[]
   */
  public $includedDataSegments;
  /**
   * Optional. The list of included device types to target. If empty, all device
   * types are targeted.
   *
   * @var string[]
   */
  public $includedDeviceTypes;
  /**
   * Optional. The environment to target. If unspecified, all environments are
   * targeted.
   *
   * @var string
   */
  public $includedEnvironment;
  /**
   * Optional. The targeted native inventory types. If empty, inventory will be
   * targeted regardless of native inventory type.
   *
   * @var string[]
   */
  public $includedNativeInventoryTypes;
  /**
   * Optional. The list of targeted open measurement types. If empty, inventory
   * will be targeted regardless of Open Measurement support.
   *
   * @var string[]
   */
  public $includedOpenMeasurementTypes;
  /**
   * Optional. The list of targeted restricted categories. If empty, inventory
   * will be targeted regardless of restricted categories.
   *
   * @var string[]
   */
  public $includedRestrictedCategories;
  /**
   * Optional. The targeted rewarded type. If unset, inventory will be targeted
   * regardless of rewarded type.
   *
   * @var string
   */
  public $includedRewardedType;
  protected $languageTargetingType = StringTargetingDimension::class;
  protected $languageTargetingDataType = '';
  /**
   * Optional. The targeted minimum predicted click through rate, ranging in
   * values [10, 10000] (0.01% - 10%). A value of 50 means that the
   * configuration will only match adslots for which we predict at least 0.05%
   * click through rate. An unset value indicates inventory will be targeted
   * regardless of predicted click through rate.
   *
   * @var string
   */
  public $minimumPredictedClickThroughRatePercentageMillis;
  /**
   * Optional. The targeted minimum predicted viewability percentage. This value
   * must be a multiple of 10 between 10 and 90 (inclusive). For example, 10 is
   * valid, but 0, 15, and 100 are not. A value of 10 means that the
   * configuration will only match adslots for which we predict at least 10%
   * viewability. An unset value indicates inventory will be targeted regardless
   * of predicted viewability.
   *
   * @var string
   */
  public $minimumPredictedViewabilityPercentage;
  protected $placementTargetingType = PackagePlacementTargeting::class;
  protected $placementTargetingDataType = '';
  protected $publisherProvidedSignalsTargetingType = PackagePublisherProvidedSignalsTargeting::class;
  protected $publisherProvidedSignalsTargetingDataType = '';
  protected $publisherTargetingType = StringTargetingDimension::class;
  protected $publisherTargetingDataType = '';
  protected $verticalTargetingType = CriteriaTargeting::class;
  protected $verticalTargetingDataType = '';
  protected $videoTargetingType = PackageVideoTargeting::class;
  protected $videoTargetingDataType = '';

  /**
   * Optional. The geo criteria IDs to be included or excluded as defined in
   * https://storage.googleapis.com/adx-rtb-dictionaries/geo-table.csv. If
   * unset, inventory will be targeted regardless of geo.
   *
   * @param CriteriaTargeting $geoTargeting
   */
  public function setGeoTargeting(CriteriaTargeting $geoTargeting)
  {
    $this->geoTargeting = $geoTargeting;
  }
  /**
   * @return CriteriaTargeting
   */
  public function getGeoTargeting()
  {
    return $this->geoTargeting;
  }
  /**
   * Optional. The targeted accelerated mobile page type. If unset, inventory
   * will be targeted regardless of AMP status.
   *
   * Accepted values: ACCELERATED_MOBILE_PAGE_TYPE_UNSPECIFIED,
   * ACCELERATED_MOBILE_PAGE_TYPE_NON_AMP, ACCELERATED_MOBILE_PAGE_TYPE_AMP,
   * ACCELERATED_MOBILE_PAGE_TYPE_AMP_STORY
   *
   * @param self::INCLUDED_ACCELERATED_MOBILE_PAGE_TYPE_* $includedAcceleratedMobilePageType
   */
  public function setIncludedAcceleratedMobilePageType($includedAcceleratedMobilePageType)
  {
    $this->includedAcceleratedMobilePageType = $includedAcceleratedMobilePageType;
  }
  /**
   * @return self::INCLUDED_ACCELERATED_MOBILE_PAGE_TYPE_*
   */
  public function getIncludedAcceleratedMobilePageType()
  {
    return $this->includedAcceleratedMobilePageType;
  }
  /**
   * Optional. The list of ad sizes to target. If unset, inventory will be
   * targeted regardless of ad size. Curated packages supports `PIXEL` and
   * `INTERSTITIAL` ad sizes.
   *
   * @param AdSize[] $includedAdSizes
   */
  public function setIncludedAdSizes($includedAdSizes)
  {
    $this->includedAdSizes = $includedAdSizes;
  }
  /**
   * @return AdSize[]
   */
  public function getIncludedAdSizes()
  {
    return $this->includedAdSizes;
  }
  /**
   * Optional. The included list of targeted authorized seller statuses. If
   * empty, inventory will be targeted regardless of seller status.
   *
   * @param string[] $includedAuthorizedSellerStatuses
   */
  public function setIncludedAuthorizedSellerStatuses($includedAuthorizedSellerStatuses)
  {
    $this->includedAuthorizedSellerStatuses = $includedAuthorizedSellerStatuses;
  }
  /**
   * @return string[]
   */
  public function getIncludedAuthorizedSellerStatuses()
  {
    return $this->includedAuthorizedSellerStatuses;
  }
  /**
   * Optional. The creative format to target. If unset, all creative markup
   * types are targeted.
   *
   * Accepted values: CREATIVE_FORMAT_UNSPECIFIED, CREATIVE_FORMAT_DISPLAY,
   * CREATIVE_FORMAT_VIDEO, CREATIVE_FORMAT_AUDIO
   *
   * @param self::INCLUDED_CREATIVE_FORMAT_* $includedCreativeFormat
   */
  public function setIncludedCreativeFormat($includedCreativeFormat)
  {
    $this->includedCreativeFormat = $includedCreativeFormat;
  }
  /**
   * @return self::INCLUDED_CREATIVE_FORMAT_*
   */
  public function getIncludedCreativeFormat()
  {
    return $this->includedCreativeFormat;
  }
  /**
   * Optional. The active data segments to be targeted. If unset, inventory will
   * be targeted regardless of data segments. Format:
   * `curators/{account_id}/dataSegments/{data_segment_id}`
   *
   * @param string[] $includedDataSegments
   */
  public function setIncludedDataSegments($includedDataSegments)
  {
    $this->includedDataSegments = $includedDataSegments;
  }
  /**
   * @return string[]
   */
  public function getIncludedDataSegments()
  {
    return $this->includedDataSegments;
  }
  /**
   * Optional. The list of included device types to target. If empty, all device
   * types are targeted.
   *
   * @param string[] $includedDeviceTypes
   */
  public function setIncludedDeviceTypes($includedDeviceTypes)
  {
    $this->includedDeviceTypes = $includedDeviceTypes;
  }
  /**
   * @return string[]
   */
  public function getIncludedDeviceTypes()
  {
    return $this->includedDeviceTypes;
  }
  /**
   * Optional. The environment to target. If unspecified, all environments are
   * targeted.
   *
   * Accepted values: ENVIRONMENT_UNSPECIFIED, ENVIRONMENT_SITE, ENVIRONMENT_APP
   *
   * @param self::INCLUDED_ENVIRONMENT_* $includedEnvironment
   */
  public function setIncludedEnvironment($includedEnvironment)
  {
    $this->includedEnvironment = $includedEnvironment;
  }
  /**
   * @return self::INCLUDED_ENVIRONMENT_*
   */
  public function getIncludedEnvironment()
  {
    return $this->includedEnvironment;
  }
  /**
   * Optional. The targeted native inventory types. If empty, inventory will be
   * targeted regardless of native inventory type.
   *
   * @param string[] $includedNativeInventoryTypes
   */
  public function setIncludedNativeInventoryTypes($includedNativeInventoryTypes)
  {
    $this->includedNativeInventoryTypes = $includedNativeInventoryTypes;
  }
  /**
   * @return string[]
   */
  public function getIncludedNativeInventoryTypes()
  {
    return $this->includedNativeInventoryTypes;
  }
  /**
   * Optional. The list of targeted open measurement types. If empty, inventory
   * will be targeted regardless of Open Measurement support.
   *
   * @param string[] $includedOpenMeasurementTypes
   */
  public function setIncludedOpenMeasurementTypes($includedOpenMeasurementTypes)
  {
    $this->includedOpenMeasurementTypes = $includedOpenMeasurementTypes;
  }
  /**
   * @return string[]
   */
  public function getIncludedOpenMeasurementTypes()
  {
    return $this->includedOpenMeasurementTypes;
  }
  /**
   * Optional. The list of targeted restricted categories. If empty, inventory
   * will be targeted regardless of restricted categories.
   *
   * @param string[] $includedRestrictedCategories
   */
  public function setIncludedRestrictedCategories($includedRestrictedCategories)
  {
    $this->includedRestrictedCategories = $includedRestrictedCategories;
  }
  /**
   * @return string[]
   */
  public function getIncludedRestrictedCategories()
  {
    return $this->includedRestrictedCategories;
  }
  /**
   * Optional. The targeted rewarded type. If unset, inventory will be targeted
   * regardless of rewarded type.
   *
   * Accepted values: REWARDED_TYPE_UNSPECIFIED, REWARDED_TYPE_NON_REWARDED,
   * REWARDED_TYPE_REWARDED
   *
   * @param self::INCLUDED_REWARDED_TYPE_* $includedRewardedType
   */
  public function setIncludedRewardedType($includedRewardedType)
  {
    $this->includedRewardedType = $includedRewardedType;
  }
  /**
   * @return self::INCLUDED_REWARDED_TYPE_*
   */
  public function getIncludedRewardedType()
  {
    return $this->includedRewardedType;
  }
  /**
   * Optional. The languages to target. If unset, inventory will be targeted
   * regardless of language. See https://developers.google.com/google-
   * ads/api/data/codes-formats#languages for the list of supported language
   * codes.
   *
   * @param StringTargetingDimension $languageTargeting
   */
  public function setLanguageTargeting(StringTargetingDimension $languageTargeting)
  {
    $this->languageTargeting = $languageTargeting;
  }
  /**
   * @return StringTargetingDimension
   */
  public function getLanguageTargeting()
  {
    return $this->languageTargeting;
  }
  /**
   * Optional. The targeted minimum predicted click through rate, ranging in
   * values [10, 10000] (0.01% - 10%). A value of 50 means that the
   * configuration will only match adslots for which we predict at least 0.05%
   * click through rate. An unset value indicates inventory will be targeted
   * regardless of predicted click through rate.
   *
   * @param string $minimumPredictedClickThroughRatePercentageMillis
   */
  public function setMinimumPredictedClickThroughRatePercentageMillis($minimumPredictedClickThroughRatePercentageMillis)
  {
    $this->minimumPredictedClickThroughRatePercentageMillis = $minimumPredictedClickThroughRatePercentageMillis;
  }
  /**
   * @return string
   */
  public function getMinimumPredictedClickThroughRatePercentageMillis()
  {
    return $this->minimumPredictedClickThroughRatePercentageMillis;
  }
  /**
   * Optional. The targeted minimum predicted viewability percentage. This value
   * must be a multiple of 10 between 10 and 90 (inclusive). For example, 10 is
   * valid, but 0, 15, and 100 are not. A value of 10 means that the
   * configuration will only match adslots for which we predict at least 10%
   * viewability. An unset value indicates inventory will be targeted regardless
   * of predicted viewability.
   *
   * @param string $minimumPredictedViewabilityPercentage
   */
  public function setMinimumPredictedViewabilityPercentage($minimumPredictedViewabilityPercentage)
  {
    $this->minimumPredictedViewabilityPercentage = $minimumPredictedViewabilityPercentage;
  }
  /**
   * @return string
   */
  public function getMinimumPredictedViewabilityPercentage()
  {
    return $this->minimumPredictedViewabilityPercentage;
  }
  /**
   * Optional. Placement targeting information, for example, URL, mobile
   * applications.
   *
   * @param PackagePlacementTargeting $placementTargeting
   */
  public function setPlacementTargeting(PackagePlacementTargeting $placementTargeting)
  {
    $this->placementTargeting = $placementTargeting;
  }
  /**
   * @return PackagePlacementTargeting
   */
  public function getPlacementTargeting()
  {
    return $this->placementTargeting;
  }
  /**
   * Optional. The publisher provided signals to target. If unset, inventory
   * will be targeted regardless of publisher provided signals.
   *
   * @param PackagePublisherProvidedSignalsTargeting $publisherProvidedSignalsTargeting
   */
  public function setPublisherProvidedSignalsTargeting(PackagePublisherProvidedSignalsTargeting $publisherProvidedSignalsTargeting)
  {
    $this->publisherProvidedSignalsTargeting = $publisherProvidedSignalsTargeting;
  }
  /**
   * @return PackagePublisherProvidedSignalsTargeting
   */
  public function getPublisherProvidedSignalsTargeting()
  {
    return $this->publisherProvidedSignalsTargeting;
  }
  /**
   * Optional. The targeted publishers. If unset, inventory will be targeted
   * regardless of publisher. Publishers are identified by their publisher ID
   * from ads.txt / app-ads.txt. See https://iabtechlab.com/ads-txt/ and
   * https://iabtechlab.com/app-ads-txt/ for more details.
   *
   * @param StringTargetingDimension $publisherTargeting
   */
  public function setPublisherTargeting(StringTargetingDimension $publisherTargeting)
  {
    $this->publisherTargeting = $publisherTargeting;
  }
  /**
   * @return StringTargetingDimension
   */
  public function getPublisherTargeting()
  {
    return $this->publisherTargeting;
  }
  /**
   * Optional. The verticals included or excluded as defined in
   * https://developers.google.com/authorized-buyers/rtb/downloads/publisher-
   * verticals. If unset, inventory will be targeted regardless of vertical.
   *
   * @param CriteriaTargeting $verticalTargeting
   */
  public function setVerticalTargeting(CriteriaTargeting $verticalTargeting)
  {
    $this->verticalTargeting = $verticalTargeting;
  }
  /**
   * @return CriteriaTargeting
   */
  public function getVerticalTargeting()
  {
    return $this->verticalTargeting;
  }
  /**
   * Optional. Video specific targeting criteria.
   *
   * @param PackageVideoTargeting $videoTargeting
   */
  public function setVideoTargeting(PackageVideoTargeting $videoTargeting)
  {
    $this->videoTargeting = $videoTargeting;
  }
  /**
   * @return PackageVideoTargeting
   */
  public function getVideoTargeting()
  {
    return $this->videoTargeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PackageTargeting::class, 'Google_Service_CurationPartners_PackageTargeting');
