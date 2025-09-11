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

namespace Google\Service\CloudLocationFinder;

class CloudLocation extends \Google\Model
{
  /**
   * @var float
   */
  public $carbonFreeEnergyPercentage;
  /**
   * @var string
   */
  public $cloudLocationType;
  /**
   * @var string
   */
  public $cloudProvider;
  /**
   * @var string
   */
  public $containingCloudLocation;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $territoryCode;

  /**
   * @param float
   */
  public function setCarbonFreeEnergyPercentage($carbonFreeEnergyPercentage)
  {
    $this->carbonFreeEnergyPercentage = $carbonFreeEnergyPercentage;
  }
  /**
   * @return float
   */
  public function getCarbonFreeEnergyPercentage()
  {
    return $this->carbonFreeEnergyPercentage;
  }
  /**
   * @param string
   */
  public function setCloudLocationType($cloudLocationType)
  {
    $this->cloudLocationType = $cloudLocationType;
  }
  /**
   * @return string
   */
  public function getCloudLocationType()
  {
    return $this->cloudLocationType;
  }
  /**
   * @param string
   */
  public function setCloudProvider($cloudProvider)
  {
    $this->cloudProvider = $cloudProvider;
  }
  /**
   * @return string
   */
  public function getCloudProvider()
  {
    return $this->cloudProvider;
  }
  /**
   * @param string
   */
  public function setContainingCloudLocation($containingCloudLocation)
  {
    $this->containingCloudLocation = $containingCloudLocation;
  }
  /**
   * @return string
   */
  public function getContainingCloudLocation()
  {
    return $this->containingCloudLocation;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setTerritoryCode($territoryCode)
  {
    $this->territoryCode = $territoryCode;
  }
  /**
   * @return string
   */
  public function getTerritoryCode()
  {
    return $this->territoryCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudLocation::class, 'Google_Service_CloudLocationFinder_CloudLocation');
