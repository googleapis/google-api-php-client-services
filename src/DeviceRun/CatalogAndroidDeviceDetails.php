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

class CatalogAndroidDeviceDetails extends \Google\Collection
{
  protected $collection_key = 'supportedAbis';
  /**
   * Output only. Mirrors the AOSP `ro.build.type` property, e.g. "user",
   * "userdebug", "eng". Empty if unknown.
   *
   * @var string
   */
  public $buildType;
  /**
   * Output only. Lists ABIs supported by the device
   * (android.os.Build.SUPPORTED_ABIS), most preferred first, e.g. "arm64-v8a".
   *
   * @var string[]
   */
  public $supportedAbis;

  /**
   * Output only. Mirrors the AOSP `ro.build.type` property, e.g. "user",
   * "userdebug", "eng". Empty if unknown.
   *
   * @param string $buildType
   */
  public function setBuildType($buildType)
  {
    $this->buildType = $buildType;
  }
  /**
   * @return string
   */
  public function getBuildType()
  {
    return $this->buildType;
  }
  /**
   * Output only. Lists ABIs supported by the device
   * (android.os.Build.SUPPORTED_ABIS), most preferred first, e.g. "arm64-v8a".
   *
   * @param string[] $supportedAbis
   */
  public function setSupportedAbis($supportedAbis)
  {
    $this->supportedAbis = $supportedAbis;
  }
  /**
   * @return string[]
   */
  public function getSupportedAbis()
  {
    return $this->supportedAbis;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CatalogAndroidDeviceDetails::class, 'Google_Service_DeviceRun_CatalogAndroidDeviceDetails');
