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

namespace Google\Service\OracleDatabase;

class DbVersionProperties extends \Google\Model
{
  /**
   * @var bool
   */
  public $isLatestForMajorVersion;
  /**
   * @var bool
   */
  public $isPreviewDbVersion;
  /**
   * @var bool
   */
  public $isUpgradeSupported;
  /**
   * @var bool
   */
  public $supportsPdb;
  /**
   * @var string
   */
  public $version;

  /**
   * @param bool
   */
  public function setIsLatestForMajorVersion($isLatestForMajorVersion)
  {
    $this->isLatestForMajorVersion = $isLatestForMajorVersion;
  }
  /**
   * @return bool
   */
  public function getIsLatestForMajorVersion()
  {
    return $this->isLatestForMajorVersion;
  }
  /**
   * @param bool
   */
  public function setIsPreviewDbVersion($isPreviewDbVersion)
  {
    $this->isPreviewDbVersion = $isPreviewDbVersion;
  }
  /**
   * @return bool
   */
  public function getIsPreviewDbVersion()
  {
    return $this->isPreviewDbVersion;
  }
  /**
   * @param bool
   */
  public function setIsUpgradeSupported($isUpgradeSupported)
  {
    $this->isUpgradeSupported = $isUpgradeSupported;
  }
  /**
   * @return bool
   */
  public function getIsUpgradeSupported()
  {
    return $this->isUpgradeSupported;
  }
  /**
   * @param bool
   */
  public function setSupportsPdb($supportsPdb)
  {
    $this->supportsPdb = $supportsPdb;
  }
  /**
   * @return bool
   */
  public function getSupportsPdb()
  {
    return $this->supportsPdb;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DbVersionProperties::class, 'Google_Service_OracleDatabase_DbVersionProperties');
