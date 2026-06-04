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

class GoogleAdsSearchads360V23CommonLocationAttributeMetadata extends \Google\Model
{
  protected $countryLocationType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $countryLocationDataType = '';

  /**
   * The country location that this attribute’s sub country location is located
   * in.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo $countryLocation
   */
  public function setCountryLocation(GoogleAdsSearchads360V23CommonLocationInfo $countryLocation)
  {
    $this->countryLocation = $countryLocation;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo
   */
  public function getCountryLocation()
  {
    return $this->countryLocation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLocationAttributeMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLocationAttributeMetadata');
