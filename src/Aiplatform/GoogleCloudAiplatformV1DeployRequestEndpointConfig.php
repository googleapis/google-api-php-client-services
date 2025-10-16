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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1DeployRequestEndpointConfig extends \Google\Model
{
  /**
   * @var bool
   */
  public $dedicatedEndpointDisabled;
  /**
   * @var bool
   */
  public $dedicatedEndpointEnabled;
  /**
   * @var string
   */
  public $endpointDisplayName;
  /**
   * @var string
   */
  public $endpointUserId;
  /**
   * @var string[]
   */
  public $labels;
  protected $privateServiceConnectConfigType = GoogleCloudAiplatformV1PrivateServiceConnectConfig::class;
  protected $privateServiceConnectConfigDataType = '';

  /**
   * @param bool
   */
  public function setDedicatedEndpointDisabled($dedicatedEndpointDisabled)
  {
    $this->dedicatedEndpointDisabled = $dedicatedEndpointDisabled;
  }
  /**
   * @return bool
   */
  public function getDedicatedEndpointDisabled()
  {
    return $this->dedicatedEndpointDisabled;
  }
  /**
   * @param bool
   */
  public function setDedicatedEndpointEnabled($dedicatedEndpointEnabled)
  {
    $this->dedicatedEndpointEnabled = $dedicatedEndpointEnabled;
  }
  /**
   * @return bool
   */
  public function getDedicatedEndpointEnabled()
  {
    return $this->dedicatedEndpointEnabled;
  }
  /**
   * @param string
   */
  public function setEndpointDisplayName($endpointDisplayName)
  {
    $this->endpointDisplayName = $endpointDisplayName;
  }
  /**
   * @return string
   */
  public function getEndpointDisplayName()
  {
    return $this->endpointDisplayName;
  }
  /**
   * @param string
   */
  public function setEndpointUserId($endpointUserId)
  {
    $this->endpointUserId = $endpointUserId;
  }
  /**
   * @return string
   */
  public function getEndpointUserId()
  {
    return $this->endpointUserId;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param GoogleCloudAiplatformV1PrivateServiceConnectConfig
   */
  public function setPrivateServiceConnectConfig(GoogleCloudAiplatformV1PrivateServiceConnectConfig $privateServiceConnectConfig)
  {
    $this->privateServiceConnectConfig = $privateServiceConnectConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1PrivateServiceConnectConfig
   */
  public function getPrivateServiceConnectConfig()
  {
    return $this->privateServiceConnectConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1DeployRequestEndpointConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1DeployRequestEndpointConfig');
