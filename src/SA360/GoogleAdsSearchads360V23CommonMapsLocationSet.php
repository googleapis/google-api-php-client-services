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

class GoogleAdsSearchads360V23CommonMapsLocationSet extends \Google\Collection
{
  protected $collection_key = 'mapsLocations';
  protected $mapsLocationsType = GoogleAdsSearchads360V23CommonMapsLocationInfo::class;
  protected $mapsLocationsDataType = 'array';

  /**
   * Required. A list of maps location info that user manually synced in.
   *
   * @param GoogleAdsSearchads360V23CommonMapsLocationInfo[] $mapsLocations
   */
  public function setMapsLocations($mapsLocations)
  {
    $this->mapsLocations = $mapsLocations;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMapsLocationInfo[]
   */
  public function getMapsLocations()
  {
    return $this->mapsLocations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonMapsLocationSet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonMapsLocationSet');
