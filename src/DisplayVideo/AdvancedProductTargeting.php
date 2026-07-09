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

namespace Google\Service\DisplayVideo;

class AdvancedProductTargeting extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_UNSPECIFIED = 'PLANNABLE_AGE_RANGE_UNSPECIFIED';
  /**
   * 18 to 24 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_18_24 = 'PLANNABLE_AGE_RANGE_18_24';
  /**
   * 18 to 34 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_18_34 = 'PLANNABLE_AGE_RANGE_18_34';
  /**
   * 18 to 44 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_18_44 = 'PLANNABLE_AGE_RANGE_18_44';
  /**
   * 18 to 49 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_18_49 = 'PLANNABLE_AGE_RANGE_18_49';
  /**
   * 18 to 54 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_18_54 = 'PLANNABLE_AGE_RANGE_18_54';
  /**
   * 18 to 64 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_18_64 = 'PLANNABLE_AGE_RANGE_18_64';
  /**
   * 18 to 65+ years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_18_65_UP = 'PLANNABLE_AGE_RANGE_18_65_UP';
  /**
   * 21 to 34 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_21_34 = 'PLANNABLE_AGE_RANGE_21_34';
  /**
   * 21 to 44 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_21_44 = 'PLANNABLE_AGE_RANGE_21_44';
  /**
   * 21 to 49 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_21_49 = 'PLANNABLE_AGE_RANGE_21_49';
  /**
   * 21 to 54 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_21_54 = 'PLANNABLE_AGE_RANGE_21_54';
  /**
   * 21 to 64 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_21_64 = 'PLANNABLE_AGE_RANGE_21_64';
  /**
   * 21 to 65+ years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_21_65_UP = 'PLANNABLE_AGE_RANGE_21_65_UP';
  /**
   * 25 to 34 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_25_34 = 'PLANNABLE_AGE_RANGE_25_34';
  /**
   * 25 to 44 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_25_44 = 'PLANNABLE_AGE_RANGE_25_44';
  /**
   * 25 to 49 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_25_49 = 'PLANNABLE_AGE_RANGE_25_49';
  /**
   * 25 to 54 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_25_54 = 'PLANNABLE_AGE_RANGE_25_54';
  /**
   * 25 to 64 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_25_64 = 'PLANNABLE_AGE_RANGE_25_64';
  /**
   * 25 to 65+ years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_25_65_UP = 'PLANNABLE_AGE_RANGE_25_65_UP';
  /**
   * 35 to 44 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_35_44 = 'PLANNABLE_AGE_RANGE_35_44';
  /**
   * 35 to 49 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_35_49 = 'PLANNABLE_AGE_RANGE_35_49';
  /**
   * 35 to 54 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_35_54 = 'PLANNABLE_AGE_RANGE_35_54';
  /**
   * 35 to 64 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_35_64 = 'PLANNABLE_AGE_RANGE_35_64';
  /**
   * 35 to 65+ years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_35_65_UP = 'PLANNABLE_AGE_RANGE_35_65_UP';
  /**
   * 45 to 54 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_45_54 = 'PLANNABLE_AGE_RANGE_45_54';
  /**
   * 45 to 64 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_45_64 = 'PLANNABLE_AGE_RANGE_45_64';
  /**
   * 45 to 65+ years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_45_65_UP = 'PLANNABLE_AGE_RANGE_45_65_UP';
  /**
   * 50 to 65+ years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_50_65_UP = 'PLANNABLE_AGE_RANGE_50_65_UP';
  /**
   * 55 to 64 years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_55_64 = 'PLANNABLE_AGE_RANGE_55_64';
  /**
   * 55 to 65+ years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_55_65_UP = 'PLANNABLE_AGE_RANGE_55_65_UP';
  /**
   * 65+ years old.
   */
  public const AGE_RANGE_PLANNABLE_AGE_RANGE_65_UP = 'PLANNABLE_AGE_RANGE_65_UP';
  /**
   * Not specified.
   */
  public const NETWORK_PLANNABLE_NETWORK_UNSPECIFIED = 'PLANNABLE_NETWORK_UNSPECIFIED';
  /**
   * YouTube.
   */
  public const NETWORK_PLANNABLE_NETWORK_YOUTUBE = 'PLANNABLE_NETWORK_YOUTUBE';
  /**
   * Google Video Partners.
   */
  public const NETWORK_PLANNABLE_NETWORK_GOOGLE_VIDEO_PARTNERS = 'PLANNABLE_NETWORK_GOOGLE_VIDEO_PARTNERS';
  /**
   * YouTube and Google Video Partners.
   */
  public const NETWORK_PLANNABLE_NETWORK_YOUTUBE_AND_GOOGLE_VIDEO_PARTNERS = 'PLANNABLE_NETWORK_YOUTUBE_AND_GOOGLE_VIDEO_PARTNERS';
  protected $collection_key = 'userListIds';
  /**
   * Optional. The age range to target.
   *
   * @var string
   */
  public $ageRange;
  protected $dateRangeType = DateRange::class;
  protected $dateRangeDataType = '';
  /**
   * Optional. The devices to target.
   *
   * @var string[]
   */
  public $devices;
  protected $frequencyCapType = FrequencyCap::class;
  protected $frequencyCapDataType = '';
  /**
   * Optional. The gender options to target.
   *
   * @var string[]
   */
  public $genders;
  /**
   * Optional. The network to target.
   *
   * @var string
   */
  public $network;
  /**
   * Optional. Plannable location IDs to target.
   *
   * @var string[]
   */
  public $plannableLocationIds;
  protected $surfaceTargetingSettingsType = SurfaceTargetingSettings::class;
  protected $surfaceTargetingSettingsDataType = '';
  protected $targetFrequencyType = TargetFrequency::class;
  protected $targetFrequencyDataType = '';
  /**
   * Optional. The user interest IDs to target. Plannable user interests can be
   * retrieved using the `RetrievePlannableUserInterests` method.
   *
   * @var string[]
   */
  public $userInterestIds;
  /**
   * Optional. The user list IDs to target. Plannable user lists can be
   * retrieved using the `RetrievePlannableUserInterests` method.
   *
   * @var string[]
   */
  public $userListIds;
  protected $youtubeSelectSettingsType = YouTubeSelectSettings::class;
  protected $youtubeSelectSettingsDataType = '';

  /**
   * Optional. The age range to target.
   *
   * Accepted values: PLANNABLE_AGE_RANGE_UNSPECIFIED,
   * PLANNABLE_AGE_RANGE_18_24, PLANNABLE_AGE_RANGE_18_34,
   * PLANNABLE_AGE_RANGE_18_44, PLANNABLE_AGE_RANGE_18_49,
   * PLANNABLE_AGE_RANGE_18_54, PLANNABLE_AGE_RANGE_18_64,
   * PLANNABLE_AGE_RANGE_18_65_UP, PLANNABLE_AGE_RANGE_21_34,
   * PLANNABLE_AGE_RANGE_21_44, PLANNABLE_AGE_RANGE_21_49,
   * PLANNABLE_AGE_RANGE_21_54, PLANNABLE_AGE_RANGE_21_64,
   * PLANNABLE_AGE_RANGE_21_65_UP, PLANNABLE_AGE_RANGE_25_34,
   * PLANNABLE_AGE_RANGE_25_44, PLANNABLE_AGE_RANGE_25_49,
   * PLANNABLE_AGE_RANGE_25_54, PLANNABLE_AGE_RANGE_25_64,
   * PLANNABLE_AGE_RANGE_25_65_UP, PLANNABLE_AGE_RANGE_35_44,
   * PLANNABLE_AGE_RANGE_35_49, PLANNABLE_AGE_RANGE_35_54,
   * PLANNABLE_AGE_RANGE_35_64, PLANNABLE_AGE_RANGE_35_65_UP,
   * PLANNABLE_AGE_RANGE_45_54, PLANNABLE_AGE_RANGE_45_64,
   * PLANNABLE_AGE_RANGE_45_65_UP, PLANNABLE_AGE_RANGE_50_65_UP,
   * PLANNABLE_AGE_RANGE_55_64, PLANNABLE_AGE_RANGE_55_65_UP,
   * PLANNABLE_AGE_RANGE_65_UP
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
   * Optional. The date range to target.
   *
   * @param DateRange $dateRange
   */
  public function setDateRange(DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /**
   * @return DateRange
   */
  public function getDateRange()
  {
    return $this->dateRange;
  }
  /**
   * Optional. The devices to target.
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
   * Optional. The frequency cap for the specific product.
   *
   * @param FrequencyCap $frequencyCap
   */
  public function setFrequencyCap(FrequencyCap $frequencyCap)
  {
    $this->frequencyCap = $frequencyCap;
  }
  /**
   * @return FrequencyCap
   */
  public function getFrequencyCap()
  {
    return $this->frequencyCap;
  }
  /**
   * Optional. The gender options to target.
   *
   * @param string[] $genders
   */
  public function setGenders($genders)
  {
    $this->genders = $genders;
  }
  /**
   * @return string[]
   */
  public function getGenders()
  {
    return $this->genders;
  }
  /**
   * Optional. The network to target.
   *
   * Accepted values: PLANNABLE_NETWORK_UNSPECIFIED, PLANNABLE_NETWORK_YOUTUBE,
   * PLANNABLE_NETWORK_GOOGLE_VIDEO_PARTNERS,
   * PLANNABLE_NETWORK_YOUTUBE_AND_GOOGLE_VIDEO_PARTNERS
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
   * Optional. Plannable location IDs to target.
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
  /**
   * Optional. Plannable surfaces to target.
   *
   * @param SurfaceTargetingSettings $surfaceTargetingSettings
   */
  public function setSurfaceTargetingSettings(SurfaceTargetingSettings $surfaceTargetingSettings)
  {
    $this->surfaceTargetingSettings = $surfaceTargetingSettings;
  }
  /**
   * @return SurfaceTargetingSettings
   */
  public function getSurfaceTargetingSettings()
  {
    return $this->surfaceTargetingSettings;
  }
  /**
   * Optional. The average number of times the ads will show to the same person
   * over a certain period of time.
   *
   * @param TargetFrequency $targetFrequency
   */
  public function setTargetFrequency(TargetFrequency $targetFrequency)
  {
    $this->targetFrequency = $targetFrequency;
  }
  /**
   * @return TargetFrequency
   */
  public function getTargetFrequency()
  {
    return $this->targetFrequency;
  }
  /**
   * Optional. The user interest IDs to target. Plannable user interests can be
   * retrieved using the `RetrievePlannableUserInterests` method.
   *
   * @param string[] $userInterestIds
   */
  public function setUserInterestIds($userInterestIds)
  {
    $this->userInterestIds = $userInterestIds;
  }
  /**
   * @return string[]
   */
  public function getUserInterestIds()
  {
    return $this->userInterestIds;
  }
  /**
   * Optional. The user list IDs to target. Plannable user lists can be
   * retrieved using the `RetrievePlannableUserInterests` method.
   *
   * @param string[] $userListIds
   */
  public function setUserListIds($userListIds)
  {
    $this->userListIds = $userListIds;
  }
  /**
   * @return string[]
   */
  public function getUserListIds()
  {
    return $this->userListIds;
  }
  /**
   * Optional. YouTube Select settings.
   *
   * @param YouTubeSelectSettings $youtubeSelectSettings
   */
  public function setYoutubeSelectSettings(YouTubeSelectSettings $youtubeSelectSettings)
  {
    $this->youtubeSelectSettings = $youtubeSelectSettings;
  }
  /**
   * @return YouTubeSelectSettings
   */
  public function getYoutubeSelectSettings()
  {
    return $this->youtubeSelectSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdvancedProductTargeting::class, 'Google_Service_DisplayVideo_AdvancedProductTargeting');
