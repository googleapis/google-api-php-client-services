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

namespace Google\Service\GoogleHealthAPI;

class MedicalDeviceInfo extends \Google\Model
{
  /**
   * Output only. The algorithm version used by the feature.
   *
   * @var string
   */
  public $algorithmVersion;
  /**
   * Output only. The model name or device type of the compatible device used to
   * collect the data.
   *
   * @var string
   */
  public $deviceModel;
  /**
   * Output only. The version of the feature/app running on the device.
   *
   * @var string
   */
  public $featureVersion;
  /**
   * Output only. The firmware version running on the compatible device used to
   * collect the data.
   *
   * @var string
   */
  public $firmwareVersion;
  /**
   * Output only. The service version used by the feature.
   *
   * @var string
   */
  public $serviceVersion;

  /**
   * Output only. The algorithm version used by the feature.
   *
   * @param string $algorithmVersion
   */
  public function setAlgorithmVersion($algorithmVersion)
  {
    $this->algorithmVersion = $algorithmVersion;
  }
  /**
   * @return string
   */
  public function getAlgorithmVersion()
  {
    return $this->algorithmVersion;
  }
  /**
   * Output only. The model name or device type of the compatible device used to
   * collect the data.
   *
   * @param string $deviceModel
   */
  public function setDeviceModel($deviceModel)
  {
    $this->deviceModel = $deviceModel;
  }
  /**
   * @return string
   */
  public function getDeviceModel()
  {
    return $this->deviceModel;
  }
  /**
   * Output only. The version of the feature/app running on the device.
   *
   * @param string $featureVersion
   */
  public function setFeatureVersion($featureVersion)
  {
    $this->featureVersion = $featureVersion;
  }
  /**
   * @return string
   */
  public function getFeatureVersion()
  {
    return $this->featureVersion;
  }
  /**
   * Output only. The firmware version running on the compatible device used to
   * collect the data.
   *
   * @param string $firmwareVersion
   */
  public function setFirmwareVersion($firmwareVersion)
  {
    $this->firmwareVersion = $firmwareVersion;
  }
  /**
   * @return string
   */
  public function getFirmwareVersion()
  {
    return $this->firmwareVersion;
  }
  /**
   * Output only. The service version used by the feature.
   *
   * @param string $serviceVersion
   */
  public function setServiceVersion($serviceVersion)
  {
    $this->serviceVersion = $serviceVersion;
  }
  /**
   * @return string
   */
  public function getServiceVersion()
  {
    return $this->serviceVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MedicalDeviceInfo::class, 'Google_Service_GoogleHealthAPI_MedicalDeviceInfo');
