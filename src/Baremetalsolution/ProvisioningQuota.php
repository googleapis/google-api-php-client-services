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

namespace Google\Service\Baremetalsolution;

class ProvisioningQuota extends \Google\Model
{
  /**
   * @var string
   */
  public $assetType;
  /**
   * @var int
   */
  public $availableCount;
  /**
   * @var string
   */
  public $gcpService;
  protected $instanceQuotaType = InstanceQuota::class;
  protected $instanceQuotaDataType = '';
  /**
   * @var string
   */
  public $location;
  /**
   * @var string
   */
  public $name;

  /**
   * @param string
   */
  public function setAssetType($assetType)
  {
    $this->assetType = $assetType;
  }
  /**
   * @return string
   */
  public function getAssetType()
  {
    return $this->assetType;
  }
  /**
   * @param int
   */
  public function setAvailableCount($availableCount)
  {
    $this->availableCount = $availableCount;
  }
  /**
   * @return int
   */
  public function getAvailableCount()
  {
    return $this->availableCount;
  }
  /**
   * @param string
   */
  public function setGcpService($gcpService)
  {
    $this->gcpService = $gcpService;
  }
  /**
   * @return string
   */
  public function getGcpService()
  {
    return $this->gcpService;
  }
  /**
   * @param InstanceQuota
   */
  public function setInstanceQuota(InstanceQuota $instanceQuota)
  {
    $this->instanceQuota = $instanceQuota;
  }
  /**
   * @return InstanceQuota
   */
  public function getInstanceQuota()
  {
    return $this->instanceQuota;
  }
  /**
   * @param string
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProvisioningQuota::class, 'Google_Service_Baremetalsolution_ProvisioningQuota');
