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

class GoogleAdsSearchads360V23ServicesPlannableTargeting extends \Google\Collection
{
  protected $collection_key = 'youtubeSelectLineups';
  /**
   * Allowed plannable age ranges for the product for which metrics will be
   * reported. Actual targeting is computed by mapping this age range onto
   * standard Google common.AgeRangeInfo values.
   *
   * @var string[]
   */
  public $ageRanges;
  protected $devicesType = GoogleAdsSearchads360V23CommonDeviceInfo::class;
  protected $devicesDataType = 'array';
  protected $gendersType = GoogleAdsSearchads360V23CommonGenderInfo::class;
  protected $gendersDataType = 'array';
  /**
   * Targetable networks for the ad product.
   *
   * @var string[]
   */
  public $networks;
  protected $surfaceTargetingType = GoogleAdsSearchads360V23ServicesSurfaceTargetingCombinations::class;
  protected $surfaceTargetingDataType = '';
  protected $youtubeSelectLineupsType = GoogleAdsSearchads360V23ServicesYouTubeSelectLineUp::class;
  protected $youtubeSelectLineupsDataType = 'array';

  /**
   * Allowed plannable age ranges for the product for which metrics will be
   * reported. Actual targeting is computed by mapping this age range onto
   * standard Google common.AgeRangeInfo values.
   *
   * @param string[] $ageRanges
   */
  public function setAgeRanges($ageRanges)
  {
    $this->ageRanges = $ageRanges;
  }
  /**
   * @return string[]
   */
  public function getAgeRanges()
  {
    return $this->ageRanges;
  }
  /**
   * Targetable devices for the ad product. TABLET device targeting is
   * automatically applied to reported metrics when MOBILE targeting is selected
   * for CPM_MASTHEAD, GOOGLE_PREFERRED_BUMPER, and GOOGLE_PREFERRED_SHORT
   * products.
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
   * Targetable genders for the ad product.
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
   * Targetable networks for the ad product.
   *
   * @param string[] $networks
   */
  public function setNetworks($networks)
  {
    $this->networks = $networks;
  }
  /**
   * @return string[]
   */
  public function getNetworks()
  {
    return $this->networks;
  }
  /**
   * Targetable surface combinations for the ad product.
   *
   * @param GoogleAdsSearchads360V23ServicesSurfaceTargetingCombinations $surfaceTargeting
   */
  public function setSurfaceTargeting(GoogleAdsSearchads360V23ServicesSurfaceTargetingCombinations $surfaceTargeting)
  {
    $this->surfaceTargeting = $surfaceTargeting;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSurfaceTargetingCombinations
   */
  public function getSurfaceTargeting()
  {
    return $this->surfaceTargeting;
  }
  /**
   * Targetable YouTube Select Lineups for the ad product.
   *
   * @param GoogleAdsSearchads360V23ServicesYouTubeSelectLineUp[] $youtubeSelectLineups
   */
  public function setYoutubeSelectLineups($youtubeSelectLineups)
  {
    $this->youtubeSelectLineups = $youtubeSelectLineups;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesYouTubeSelectLineUp[]
   */
  public function getYoutubeSelectLineups()
  {
    return $this->youtubeSelectLineups;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesPlannableTargeting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesPlannableTargeting');
