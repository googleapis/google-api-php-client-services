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

namespace Google\Service\DeviceRun;

class CatalogLabInfo extends \Google\Model
{
  /**
   * Output only. Display name of the lab where the device is hosted. If empty,
   * the device is hosted in a Google owned lab.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The Unicode country/region code (CLDR) of the lab where the
   * device is hosted, e.g. "US" for United States, "KR" for South Korea. Empty
   * when the hosting region is not published.
   *
   * @var string
   */
  public $regionCode;

  /**
   * Output only. Display name of the lab where the device is hosted. If empty,
   * the device is hosted in a Google owned lab.
   *
   * @param string $displayName
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
   * Output only. The Unicode country/region code (CLDR) of the lab where the
   * device is hosted, e.g. "US" for United States, "KR" for South Korea. Empty
   * when the hosting region is not published.
   *
   * @param string $regionCode
   */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /**
   * @return string
   */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogLabInfo::class, 'Google_Service_DeviceRun_CatalogLabInfo');
