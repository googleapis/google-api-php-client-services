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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1RetractLicenseConfigRequest extends \Google\Model
{
  /**
   * Optional. If set to true, retract the entire license config. Otherwise,
   * retract the specified license count.
   *
   * @var bool
   */
  public $fullRetract;
  /**
   * Required. Full resource name of LicenseConfig. Format: `projects/{project}/
   * locations/{location}/licenseConfigs/{license_config_id}`.
   *
   * @var string
   */
  public $licenseConfig;
  /**
   * Optional. The number of licenses to retract. Only used when full_retract is
   * false.
   *
   * @var string
   */
  public $licenseCount;

  /**
   * Optional. If set to true, retract the entire license config. Otherwise,
   * retract the specified license count.
   *
   * @param bool $fullRetract
   */
  public function setFullRetract($fullRetract)
  {
    $this->fullRetract = $fullRetract;
  }
  /**
   * @return bool
   */
  public function getFullRetract()
  {
    return $this->fullRetract;
  }
  /**
   * Required. Full resource name of LicenseConfig. Format: `projects/{project}/
   * locations/{location}/licenseConfigs/{license_config_id}`.
   *
   * @param string $licenseConfig
   */
  public function setLicenseConfig($licenseConfig)
  {
    $this->licenseConfig = $licenseConfig;
  }
  /**
   * @return string
   */
  public function getLicenseConfig()
  {
    return $this->licenseConfig;
  }
  /**
   * Optional. The number of licenses to retract. Only used when full_retract is
   * false.
   *
   * @param string $licenseCount
   */
  public function setLicenseCount($licenseCount)
  {
    $this->licenseCount = $licenseCount;
  }
  /**
   * @return string
   */
  public function getLicenseCount()
  {
    return $this->licenseCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1RetractLicenseConfigRequest::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1RetractLicenseConfigRequest');
