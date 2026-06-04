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

class GoogleAdsSearchads360V23ServicesTargeting extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const AGE_RANGE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const AGE_RANGE_UNKNOWN = 'UNKNOWN';
  /**
   * Between 18 and 24 years old.
   */
  public const AGE_RANGE_AGE_RANGE_18_24 = 'AGE_RANGE_18_24';
  /**
   * Between 18 and 34 years old.
   */
  public const AGE_RANGE_AGE_RANGE_18_34 = 'AGE_RANGE_18_34';
  /**
   * Between 18 and 44 years old.
   */
  public const AGE_RANGE_AGE_RANGE_18_44 = 'AGE_RANGE_18_44';
  /**
   * Between 18 and 49 years old.
   */
  public const AGE_RANGE_AGE_RANGE_18_49 = 'AGE_RANGE_18_49';
  /**
   * Between 18 and 54 years old.
   */
  public const AGE_RANGE_AGE_RANGE_18_54 = 'AGE_RANGE_18_54';
  /**
   * Between 18 and 64 years old.
   */
  public const AGE_RANGE_AGE_RANGE_18_64 = 'AGE_RANGE_18_64';
  /**
   * Between 18 and 65+ years old.
   */
  public const AGE_RANGE_AGE_RANGE_18_65_UP = 'AGE_RANGE_18_65_UP';
  /**
   * Between 21 and 34 years old.
   */
  public const AGE_RANGE_AGE_RANGE_21_34 = 'AGE_RANGE_21_34';
  /**
   * Between 25 and 34 years old.
   */
  public const AGE_RANGE_AGE_RANGE_25_34 = 'AGE_RANGE_25_34';
  /**
   * Between 25 and 44 years old.
   */
  public const AGE_RANGE_AGE_RANGE_25_44 = 'AGE_RANGE_25_44';
  /**
   * Between 25 and 49 years old.
   */
  public const AGE_RANGE_AGE_RANGE_25_49 = 'AGE_RANGE_25_49';
  /**
   * Between 25 and 54 years old.
   */
  public const AGE_RANGE_AGE_RANGE_25_54 = 'AGE_RANGE_25_54';
  /**
   * Between 25 and 64 years old.
   */
  public const AGE_RANGE_AGE_RANGE_25_64 = 'AGE_RANGE_25_64';
  /**
   * Between 25 and 65+ years old.
   */
  public const AGE_RANGE_AGE_RANGE_25_65_UP = 'AGE_RANGE_25_65_UP';
  /**
   * Between 35 and 44 years old.
   */
  public const AGE_RANGE_AGE_RANGE_35_44 = 'AGE_RANGE_35_44';
  /**
   * Between 35 and 49 years old.
   */
  public const AGE_RANGE_AGE_RANGE_35_49 = 'AGE_RANGE_35_49';
  /**
   * Between 35 and 54 years old.
   */
  public const AGE_RANGE_AGE_RANGE_35_54 = 'AGE_RANGE_35_54';
  /**
   * Between 35 and 64 years old.
   */
  public const AGE_RANGE_AGE_RANGE_35_64 = 'AGE_RANGE_35_64';
  /**
   * Between 35 and 65+ years old.
   */
  public const AGE_RANGE_AGE_RANGE_35_65_UP = 'AGE_RANGE_35_65_UP';
  /**
   * Between 45 and 54 years old.
   */
  public const AGE_RANGE_AGE_RANGE_45_54 = 'AGE_RANGE_45_54';
  /**
   * Between 45 and 64 years old.
   */
  public const AGE_RANGE_AGE_RANGE_45_64 = 'AGE_RANGE_45_64';
  /**
   * Between 45 and 65+ years old.
   */
  public const AGE_RANGE_AGE_RANGE_45_65_UP = 'AGE_RANGE_45_65_UP';
  /**
   * Between 50 and 65+ years old.
   */
  public const AGE_RANGE_AGE_RANGE_50_65_UP = 'AGE_RANGE_50_65_UP';
  /**
   * Between 55 and 64 years old.
   */
  public const AGE_RANGE_AGE_RANGE_55_64 = 'AGE_RANGE_55_64';
  /**
   * Between 55 and 65+ years old.
   */
  public const AGE_RANGE_AGE_RANGE_55_65_UP = 'AGE_RANGE_55_65_UP';
  /**
   * 65 years old and beyond.
   */
  public const AGE_RANGE_AGE_RANGE_65_UP = 'AGE_RANGE_65_UP';
  /**
   * Not specified.
   */
  public const NETWORK_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used as a return value only. Represents value unknown in this version.
   */
  public const NETWORK_UNKNOWN = 'UNKNOWN';
  /**
   * YouTube network.
   */
  public const NETWORK_YOUTUBE = 'YOUTUBE';
  /**
   * Google Video Partners (GVP) network.
   */
  public const NETWORK_GOOGLE_VIDEO_PARTNERS = 'GOOGLE_VIDEO_PARTNERS';
  /**
   * A combination of the YouTube network and the Google Video Partners network.
   */
  public const NETWORK_YOUTUBE_AND_GOOGLE_VIDEO_PARTNERS = 'YOUTUBE_AND_GOOGLE_VIDEO_PARTNERS';
  protected $collection_key = 'plannableLocationIds';
  /**
   * Targeted age range. An unset value is equivalent to targeting all ages.
   *
   * @var string
   */
  public $ageRange;
  protected $audienceTargetingType = GoogleAdsSearchads360V23ServicesAudienceTargeting::class;
  protected $audienceTargetingDataType = '';
  protected $devicesType = GoogleAdsSearchads360V23CommonDeviceInfo::class;
  protected $devicesDataType = 'array';
  protected $gendersType = GoogleAdsSearchads360V23CommonGenderInfo::class;
  protected $gendersDataType = 'array';
  /**
   * Targetable network for the ad product. If not specified, targets all
   * applicable networks. Applicable networks vary by product and region and can
   * be obtained from ReachPlanService.ListPlannableProducts.
   *
   * @var string
   */
  public $network;
  /**
   * The ID of the selected location. Plannable location IDs can be obtained
   * from ReachPlanService.ListPlannableLocations. Requests must set either this
   * field or `plannable_location_ids`. This field is deprecated as of V12 and
   * will be removed in a future release. Use `plannable_location_ids` instead.
   *
   * @var string
   */
  public $plannableLocationId;
  /**
   * The list of plannable location IDs to target with this forecast. If more
   * than one ID is provided, all IDs must have the same `parent_country_id`.
   * Planning for more than `parent_county` is not supported. Plannable location
   * IDs and their `parent_country_id` can be obtained from
   * ReachPlanService.ListPlannableLocations. Requests must set either this
   * field or `plannable_location_id`.
   *
   * @var string[]
   */
  public $plannableLocationIds;

  /**
   * Targeted age range. An unset value is equivalent to targeting all ages.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AGE_RANGE_18_24, AGE_RANGE_18_34,
   * AGE_RANGE_18_44, AGE_RANGE_18_49, AGE_RANGE_18_54, AGE_RANGE_18_64,
   * AGE_RANGE_18_65_UP, AGE_RANGE_21_34, AGE_RANGE_25_34, AGE_RANGE_25_44,
   * AGE_RANGE_25_49, AGE_RANGE_25_54, AGE_RANGE_25_64, AGE_RANGE_25_65_UP,
   * AGE_RANGE_35_44, AGE_RANGE_35_49, AGE_RANGE_35_54, AGE_RANGE_35_64,
   * AGE_RANGE_35_65_UP, AGE_RANGE_45_54, AGE_RANGE_45_64, AGE_RANGE_45_65_UP,
   * AGE_RANGE_50_65_UP, AGE_RANGE_55_64, AGE_RANGE_55_65_UP, AGE_RANGE_65_UP
   *
   * @param self::AGE_RANGE_* $ageRange
   */
  public function setAgeRange($ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /**
   * @return self::AGE_RANGE_*
   */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
  /**
   * Targeted audiences. If not specified, does not target any specific
   * audience.
   *
   * @param GoogleAdsSearchads360V23ServicesAudienceTargeting $audienceTargeting
   */
  public function setAudienceTargeting(GoogleAdsSearchads360V23ServicesAudienceTargeting $audienceTargeting)
  {
    $this->audienceTargeting = $audienceTargeting;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAudienceTargeting
   */
  public function getAudienceTargeting()
  {
    return $this->audienceTargeting;
  }
  /**
   * Targeted devices. If not specified, targets all applicable devices.
   * Applicable devices vary by product and region and can be obtained from
   * ReachPlanService.ListPlannableProducts.
   *
   * @param GoogleAdsSearchads360V23CommonDeviceInfo[] $devices
   */
  public function setDevices($devices)
  {
    $this->devices = $devices;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDeviceInfo[]
   */
  public function getDevices()
  {
    return $this->devices;
  }
  /**
   * Targeted genders. An unset value is equivalent to targeting MALE and
   * FEMALE.
   *
   * @param GoogleAdsSearchads360V23CommonGenderInfo[] $genders
   */
  public function setGenders($genders)
  {
    $this->genders = $genders;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonGenderInfo[]
   */
  public function getGenders()
  {
    return $this->genders;
  }
  /**
   * Targetable network for the ad product. If not specified, targets all
   * applicable networks. Applicable networks vary by product and region and can
   * be obtained from ReachPlanService.ListPlannableProducts.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, YOUTUBE, GOOGLE_VIDEO_PARTNERS,
   * YOUTUBE_AND_GOOGLE_VIDEO_PARTNERS
   *
   * @param self::NETWORK_* $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return self::NETWORK_*
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * The ID of the selected location. Plannable location IDs can be obtained
   * from ReachPlanService.ListPlannableLocations. Requests must set either this
   * field or `plannable_location_ids`. This field is deprecated as of V12 and
   * will be removed in a future release. Use `plannable_location_ids` instead.
   *
   * @param string $plannableLocationId
   */
  public function setPlannableLocationId($plannableLocationId)
  {
    $this->plannableLocationId = $plannableLocationId;
  }
  /**
   * @return string
   */
  public function getPlannableLocationId()
  {
    return $this->plannableLocationId;
  }
  /**
   * The list of plannable location IDs to target with this forecast. If more
   * than one ID is provided, all IDs must have the same `parent_country_id`.
   * Planning for more than `parent_county` is not supported. Plannable location
   * IDs and their `parent_country_id` can be obtained from
   * ReachPlanService.ListPlannableLocations. Requests must set either this
   * field or `plannable_location_id`.
   *
   * @param string[] $plannableLocationIds
   */
  public function setPlannableLocationIds($plannableLocationIds)
  {
    $this->plannableLocationIds = $plannableLocationIds;
  }
  /**
   * @return string[]
   */
  public function getPlannableLocationIds()
  {
    return $this->plannableLocationIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesTargeting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesTargeting');
