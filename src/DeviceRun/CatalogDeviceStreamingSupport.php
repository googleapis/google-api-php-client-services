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

class CatalogDeviceStreamingSupport extends \Google\Model
{
  /**
   * Output only. Specifies the minimum Android Studio version that supports
   * this device. Optional; only set when the device is known to work only at or
   * above a certain Android Studio version. Expected format
   * "major.minor.micro.patch", e.g. "5921.22.2211.8881706".
   *
   * @var string
   */
  public $minimumAndroidStudioVersion;

  /**
   * Output only. Specifies the minimum Android Studio version that supports
   * this device. Optional; only set when the device is known to work only at or
   * above a certain Android Studio version. Expected format
   * "major.minor.micro.patch", e.g. "5921.22.2211.8881706".
   *
   * @param string $minimumAndroidStudioVersion
   */
  public function setMinimumAndroidStudioVersion($minimumAndroidStudioVersion)
  {
    $this->minimumAndroidStudioVersion = $minimumAndroidStudioVersion;
  }
  /**
   * @return string
   */
  public function getMinimumAndroidStudioVersion()
  {
    return $this->minimumAndroidStudioVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogDeviceStreamingSupport::class, 'Google_Service_DeviceRun_CatalogDeviceStreamingSupport');
