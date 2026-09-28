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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementVersionsV1SecureGatewayConfig extends \Google\Collection
{
  protected $collection_key = 'enabledPlatforms';
  /**
   * Optional. The enabled platforms for the secure gateway connector config.
   *
   * @var string[]
   */
  public $enabledPlatforms;
  /**
   * Required. The resource ID of the secure gateway connector config. Must be
   * at most 256 characters.
   *
   * @var string
   */
  public $resourceId;

  /**
   * Optional. The enabled platforms for the secure gateway connector config.
   *
   * @param string[] $enabledPlatforms
   */
  public function setEnabledPlatforms($enabledPlatforms)
  {
    $this->enabledPlatforms = $enabledPlatforms;
  }
  /**
   * @return string[]
   */
  public function getEnabledPlatforms()
  {
    return $this->enabledPlatforms;
  }
  /**
   * Required. The resource ID of the secure gateway connector config. Must be
   * at most 256 characters.
   *
   * @param string $resourceId
   */
  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @return string
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1SecureGatewayConfig::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1SecureGatewayConfig');
