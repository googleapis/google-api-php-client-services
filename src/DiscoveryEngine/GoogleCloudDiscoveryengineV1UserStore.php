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

class GoogleCloudDiscoveryengineV1UserStore extends \Google\Model
{
  /**
   * @var string
   */
  public $defaultLicenseConfig;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var bool
   */
  public $enableExpiredLicenseAutoUpdate;
  /**
   * @var bool
   */
  public $enableLicenseAutoRegister;
  /**
   * @var string
   */
  public $name;

  /**
   * @param string
   */
  public function setDefaultLicenseConfig($defaultLicenseConfig)
  {
    $this->defaultLicenseConfig = $defaultLicenseConfig;
  }
  /**
   * @return string
   */
  public function getDefaultLicenseConfig()
  {
    return $this->defaultLicenseConfig;
  }
  /**
   * @param string
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
   * @param bool
   */
  public function setEnableExpiredLicenseAutoUpdate($enableExpiredLicenseAutoUpdate)
  {
    $this->enableExpiredLicenseAutoUpdate = $enableExpiredLicenseAutoUpdate;
  }
  /**
   * @return bool
   */
  public function getEnableExpiredLicenseAutoUpdate()
  {
    return $this->enableExpiredLicenseAutoUpdate;
  }
  /**
   * @param bool
   */
  public function setEnableLicenseAutoRegister($enableLicenseAutoRegister)
  {
    $this->enableLicenseAutoRegister = $enableLicenseAutoRegister;
  }
  /**
   * @return bool
   */
  public function getEnableLicenseAutoRegister()
  {
    return $this->enableLicenseAutoRegister;
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
class_alias(GoogleCloudDiscoveryengineV1UserStore::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1UserStore');
