<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Dfareporting_TechnologyTargeting extends Google_Collection
{
  protected $collection_key = 'platformTypes';
  public $browsers;
  public $connectionTypes;
  public $mobileCarriers;
  public $operatingSystemVersions;
  public $operatingSystems;
  public $platformTypes;

  public function setBrowsers(array $browsers)
  {
    foreach ($browsers as $b) {
      if (!$b instanceof Google_Service_Dfareporting_Browser) {
        throw new InvalidArgumentException('First argument to setBrowsers must be an array of Google_Service_Dfareporting_Browser');
      }
    }
    $this->browsers = $browsers;
  }
  public function getBrowsers()
  {
    return $this->browsers;
  }
  public function setConnectionTypes(array $connectionTypes)
  {
    foreach ($connectionTypes as $c) {
      if (!$c instanceof Google_Service_Dfareporting_ConnectionType) {
        throw new InvalidArgumentException('First argument to setConnectionTypes must be an array of Google_Service_Dfareporting_ConnectionType');
      }
    }
    $this->connectionTypes = $connectionTypes;
  }
  public function getConnectionTypes()
  {
    return $this->connectionTypes;
  }
  public function setMobileCarriers(array $mobileCarriers)
  {
    foreach ($mobileCarriers as $m) {
      if (!$m instanceof Google_Service_Dfareporting_MobileCarrier) {
        throw new InvalidArgumentException('First argument to setMobileCarriers must be an array of Google_Service_Dfareporting_MobileCarrier');
      }
    }
    $this->mobileCarriers = $mobileCarriers;
  }
  public function getMobileCarriers()
  {
    return $this->mobileCarriers;
  }
  public function setOperatingSystemVersions(array $operatingSystemVersions)
  {
    foreach ($operatingSystemVersions as $o) {
      if (!$o instanceof Google_Service_Dfareporting_OperatingSystemVersion) {
        throw new InvalidArgumentException('First argument to setOperatingSystemVersions must be an array of Google_Service_Dfareporting_OperatingSystemVersion');
      }
    }
    $this->operatingSystemVersions = $operatingSystemVersions;
  }
  public function getOperatingSystemVersions()
  {
    return $this->operatingSystemVersions;
  }
  public function setOperatingSystems(array $operatingSystems)
  {
    foreach ($operatingSystems as $o) {
      if (!$o instanceof Google_Service_Dfareporting_OperatingSystem) {
        throw new InvalidArgumentException('First argument to setOperatingSystems must be an array of Google_Service_Dfareporting_OperatingSystem');
      }
    }
    $this->operatingSystems = $operatingSystems;
  }
  public function getOperatingSystems()
  {
    return $this->operatingSystems;
  }
  public function setPlatformTypes(array $platformTypes)
  {
    foreach ($platformTypes as $p) {
      if (!$p instanceof Google_Service_Dfareporting_PlatformType) {
        throw new InvalidArgumentException('First argument to setPlatformTypes must be an array of Google_Service_Dfareporting_PlatformType');
      }
    }
    $this->platformTypes = $platformTypes;
  }
  public function getPlatformTypes()
  {
    return $this->platformTypes;
  }
}
