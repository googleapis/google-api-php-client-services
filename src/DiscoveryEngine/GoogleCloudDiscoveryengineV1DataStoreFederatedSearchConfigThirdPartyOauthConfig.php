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

class GoogleCloudDiscoveryengineV1DataStoreFederatedSearchConfigThirdPartyOauthConfig extends \Google\Model
{
  /**
   * Optional. The type of the application. E.g., "jira", "box", etc.
   *
   * @var string
   */
  public $appName;
  /**
   * Optional. The instance name identifying the 3P app, e.g., "-my". This is
   * different from the instance_uri which is the full URL of the 3P app e.g.,
   * "https://-my.sharepoint.com".
   *
   * @var string
   */
  public $instanceName;

  /**
   * Optional. The type of the application. E.g., "jira", "box", etc.
   *
   * @param string $appName
   */
  public function setAppName($appName)
  {
    $this->appName = $appName;
  }
  /**
   * @return string
   */
  public function getAppName()
  {
    return $this->appName;
  }
  /**
   * Optional. The instance name identifying the 3P app, e.g., "-my". This is
   * different from the instance_uri which is the full URL of the 3P app e.g.,
   * "https://-my.sharepoint.com".
   *
   * @param string $instanceName
   */
  public function setInstanceName($instanceName)
  {
    $this->instanceName = $instanceName;
  }
  /**
   * @return string
   */
  public function getInstanceName()
  {
    return $this->instanceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1DataStoreFederatedSearchConfigThirdPartyOauthConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1DataStoreFederatedSearchConfigThirdPartyOauthConfig');
