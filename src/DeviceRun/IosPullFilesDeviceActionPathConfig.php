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

class IosPullFilesDeviceActionPathConfig extends \Google\Model
{
  /**
   * Required. The bundle ID of the application sandbox.
   *
   * @var string
   */
  public $bundleId;
  /**
   * Required. The device path relative to the app sandbox, e.g.
   * "/Documents/output/".
   *
   * @var string
   */
  public $devicePath;

  /**
   * Required. The bundle ID of the application sandbox.
   *
   * @param string $bundleId
   */
  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }
  /**
   * @return string
   */
  public function getBundleId()
  {
    return $this->bundleId;
  }
  /**
   * Required. The device path relative to the app sandbox, e.g.
   * "/Documents/output/".
   *
   * @param string $devicePath
   */
  public function setDevicePath($devicePath)
  {
    $this->devicePath = $devicePath;
  }
  /**
   * @return string
   */
  public function getDevicePath()
  {
    return $this->devicePath;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IosPullFilesDeviceActionPathConfig::class, 'Google_Service_DeviceRun_IosPullFilesDeviceActionPathConfig');
