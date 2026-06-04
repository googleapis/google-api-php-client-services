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

class GoogleAdsSearchads360V23ServicesBenchmarksLocation extends \Google\Model
{
  protected $locationInfoType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $locationInfoDataType = '';
  /**
   * The unique location name in English.
   *
   * @var string
   */
  public $locationName;
  /**
   * The location's type. Location types correspond to target_type returned by
   * searching location type in GoogleAdsService.Search/SearchStream.
   *
   * @var string
   */
  public $locationType;

  /**
   * Information on the geographic location, including the location ID.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo $locationInfo
   */
  public function setLocationInfo(GoogleAdsSearchads360V23CommonLocationInfo $locationInfo)
  {
    $this->locationInfo = $locationInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo
   */
  public function getLocationInfo()
  {
    return $this->locationInfo;
  }
  /**
   * The unique location name in English.
   *
   * @param string $locationName
   */
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  /**
   * @return string
   */
  public function getLocationName()
  {
    return $this->locationName;
  }
  /**
   * The location's type. Location types correspond to target_type returned by
   * searching location type in GoogleAdsService.Search/SearchStream.
   *
   * @param string $locationType
   */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /**
   * @return string
   */
  public function getLocationType()
  {
    return $this->locationType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesBenchmarksLocation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesBenchmarksLocation');
