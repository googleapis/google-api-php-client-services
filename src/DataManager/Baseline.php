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

namespace Google\Service\DataManager;

class Baseline extends \Google\Model
{
  protected $baselineLocationType = Location::class;
  protected $baselineLocationDataType = '';
  /**
   * If set to true, the service will try to automatically detect the baseline
   * location for insights.
   *
   * @var bool
   */
  public $locationAutoDetectionEnabled;

  /**
   * The baseline location of the request. Baseline location is an OR-list of
   * the requested regions.
   *
   * @param Location $baselineLocation
   */
  public function setBaselineLocation(Location $baselineLocation)
  {
    $this->baselineLocation = $baselineLocation;
  }
  /**
   * @return Location
   */
  public function getBaselineLocation()
  {
    return $this->baselineLocation;
  }
  /**
   * If set to true, the service will try to automatically detect the baseline
   * location for insights.
   *
   * @param bool $locationAutoDetectionEnabled
   */
  public function setLocationAutoDetectionEnabled($locationAutoDetectionEnabled)
  {
    $this->locationAutoDetectionEnabled = $locationAutoDetectionEnabled;
  }
  /**
   * @return bool
   */
  public function getLocationAutoDetectionEnabled()
  {
    return $this->locationAutoDetectionEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Baseline::class, 'Google_Service_DataManager_Baseline');
