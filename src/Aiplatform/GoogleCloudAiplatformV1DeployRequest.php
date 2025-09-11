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

class GoogleCloudAiplatformV1DeployRequest extends \Google\Model
{
  protected $deployConfigType = GoogleCloudAiplatformV1DeployRequestDeployConfig::class;
  protected $deployConfigDataType = '';
  protected $endpointConfigType = GoogleCloudAiplatformV1DeployRequestEndpointConfig::class;
  protected $endpointConfigDataType = '';
  /**
   * @var string
   */
  public $huggingFaceModelId;
  protected $modelConfigType = GoogleCloudAiplatformV1DeployRequestModelConfig::class;
  protected $modelConfigDataType = '';
  /**
   * @var string
   */
  public $publisherModelName;

  /**
   * @param GoogleCloudAiplatformV1DeployRequestDeployConfig
   */
  public function setDeployConfig(GoogleCloudAiplatformV1DeployRequestDeployConfig $deployConfig)
  {
    $this->deployConfig = $deployConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1DeployRequestDeployConfig
   */
  public function getDeployConfig()
  {
    return $this->deployConfig;
  }
  /**
   * @param GoogleCloudAiplatformV1DeployRequestEndpointConfig
   */
  public function setEndpointConfig(GoogleCloudAiplatformV1DeployRequestEndpointConfig $endpointConfig)
  {
    $this->endpointConfig = $endpointConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1DeployRequestEndpointConfig
   */
  public function getEndpointConfig()
  {
    return $this->endpointConfig;
  }
  /**
   * @param string
   */
  public function setHuggingFaceModelId($huggingFaceModelId)
  {
    $this->huggingFaceModelId = $huggingFaceModelId;
  }
  /**
   * @return string
   */
  public function getHuggingFaceModelId()
  {
    return $this->huggingFaceModelId;
  }
  /**
   * @param GoogleCloudAiplatformV1DeployRequestModelConfig
   */
  public function setModelConfig(GoogleCloudAiplatformV1DeployRequestModelConfig $modelConfig)
  {
    $this->modelConfig = $modelConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1DeployRequestModelConfig
   */
  public function getModelConfig()
  {
    return $this->modelConfig;
  }
  /**
   * @param string
   */
  public function setPublisherModelName($publisherModelName)
  {
    $this->publisherModelName = $publisherModelName;
  }
  /**
   * @return string
   */
  public function getPublisherModelName()
  {
    return $this->publisherModelName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1DeployRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1DeployRequest');
