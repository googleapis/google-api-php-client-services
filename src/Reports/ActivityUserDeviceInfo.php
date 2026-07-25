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

namespace Google\Service\Reports;

class ActivityUserDeviceInfo extends \Google\Model
{
  /**
   * Output only. Device ID of the user's device.
   *
   * @var string
   */
  public $deviceId;
  /**
   * Output only. Device OS version of the user's device.
   *
   * @var string
   */
  public $deviceOsVersion;
  /**
   * Output only. The type of the user's device.
   *
   * @var string
   */
  public $deviceType;

  /**
   * Output only. Device ID of the user's device.
   *
   * @param string $deviceId
   */
  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }
  /**
   * @return string
   */
  public function getDeviceId()
  {
    return $this->deviceId;
  }
  /**
   * Output only. Device OS version of the user's device.
   *
   * @param string $deviceOsVersion
   */
  public function setDeviceOsVersion($deviceOsVersion)
  {
    $this->deviceOsVersion = $deviceOsVersion;
  }
  /**
   * @return string
   */
  public function getDeviceOsVersion()
  {
    return $this->deviceOsVersion;
  }
  /**
   * Output only. The type of the user's device.
   *
   * @param string $deviceType
   */
  public function setDeviceType($deviceType)
  {
    $this->deviceType = $deviceType;
  }
  /**
   * @return string
   */
  public function getDeviceType()
  {
    return $this->deviceType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActivityUserDeviceInfo::class, 'Google_Service_Reports_ActivityUserDeviceInfo');
