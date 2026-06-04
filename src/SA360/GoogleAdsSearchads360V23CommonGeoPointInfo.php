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

class GoogleAdsSearchads360V23CommonGeoPointInfo extends \Google\Model
{
  /**
   * Micro degrees for the latitude.
   *
   * @var int
   */
  public $latitudeInMicroDegrees;
  /**
   * Micro degrees for the longitude.
   *
   * @var int
   */
  public $longitudeInMicroDegrees;

  /**
   * Micro degrees for the latitude.
   *
   * @param int $latitudeInMicroDegrees
   */
  public function setLatitudeInMicroDegrees($latitudeInMicroDegrees)
  {
    $this->latitudeInMicroDegrees = $latitudeInMicroDegrees;
  }
  /**
   * @return int
   */
  public function getLatitudeInMicroDegrees()
  {
    return $this->latitudeInMicroDegrees;
  }
  /**
   * Micro degrees for the longitude.
   *
   * @param int $longitudeInMicroDegrees
   */
  public function setLongitudeInMicroDegrees($longitudeInMicroDegrees)
  {
    $this->longitudeInMicroDegrees = $longitudeInMicroDegrees;
  }
  /**
   * @return int
   */
  public function getLongitudeInMicroDegrees()
  {
    return $this->longitudeInMicroDegrees;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonGeoPointInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonGeoPointInfo');
