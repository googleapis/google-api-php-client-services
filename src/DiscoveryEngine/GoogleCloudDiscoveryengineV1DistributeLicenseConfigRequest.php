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

class GoogleCloudDiscoveryengineV1DistributeLicenseConfigRequest extends \Google\Model
{
  /**
   * Optional. Distribute seats to this license config instead of creating a new
   * one. If not specified, a new license config will be created from the
   * billing account license config.
   *
   * @var string
   */
  public $licenseConfigId;
  /**
   * Required. The number of licenses to distribute.
   *
   * @var string
   */
  public $licenseCount;
  /**
   * Required. The target GCP project region to distribute the license config
   * to.
   *
   * @var string
   */
  public $location;
  /**
   * Required. The target GCP project number to distribute the license config
   * to.
   *
   * @var string
   */
  public $projectNumber;

  /**
   * Optional. Distribute seats to this license config instead of creating a new
   * one. If not specified, a new license config will be created from the
   * billing account license config.
   *
   * @param string $licenseConfigId
   */
  public function setLicenseConfigId($licenseConfigId)
  {
    $this->licenseConfigId = $licenseConfigId;
  }
  /**
   * @return string
   */
  public function getLicenseConfigId()
  {
    return $this->licenseConfigId;
  }
  /**
   * Required. The number of licenses to distribute.
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
  /**
   * Required. The target GCP project region to distribute the license config
   * to.
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Required. The target GCP project number to distribute the license config
   * to.
   *
   * @param string $projectNumber
   */
  public function setProjectNumber($projectNumber)
  {
    $this->projectNumber = $projectNumber;
  }
  /**
   * @return string
   */
  public function getProjectNumber()
  {
    return $this->projectNumber;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1DistributeLicenseConfigRequest::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1DistributeLicenseConfigRequest');
