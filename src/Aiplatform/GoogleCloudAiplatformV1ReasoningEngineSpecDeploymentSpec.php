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

class GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpec extends \Google\Collection
{
  protected $collection_key = 'secretEnv';
  /**
   * @var int
   */
  public $containerConcurrency;
  protected $envType = GoogleCloudAiplatformV1EnvVar::class;
  protected $envDataType = 'array';
  /**
   * @var int
   */
  public $maxInstances;
  /**
   * @var int
   */
  public $minInstances;
  protected $pscInterfaceConfigType = GoogleCloudAiplatformV1PscInterfaceConfig::class;
  protected $pscInterfaceConfigDataType = '';
  /**
   * @var string[]
   */
  public $resourceLimits;
  protected $secretEnvType = GoogleCloudAiplatformV1SecretEnvVar::class;
  protected $secretEnvDataType = 'array';

  /**
   * @param int
   */
  public function setContainerConcurrency($containerConcurrency)
  {
    $this->containerConcurrency = $containerConcurrency;
  }
  /**
   * @return int
   */
  public function getContainerConcurrency()
  {
    return $this->containerConcurrency;
  }
  /**
   * @param GoogleCloudAiplatformV1EnvVar[]
   */
  public function setEnv($env)
  {
    $this->env = $env;
  }
  /**
   * @return GoogleCloudAiplatformV1EnvVar[]
   */
  public function getEnv()
  {
    return $this->env;
  }
  /**
   * @param int
   */
  public function setMaxInstances($maxInstances)
  {
    $this->maxInstances = $maxInstances;
  }
  /**
   * @return int
   */
  public function getMaxInstances()
  {
    return $this->maxInstances;
  }
  /**
   * @param int
   */
  public function setMinInstances($minInstances)
  {
    $this->minInstances = $minInstances;
  }
  /**
   * @return int
   */
  public function getMinInstances()
  {
    return $this->minInstances;
  }
  /**
   * @param GoogleCloudAiplatformV1PscInterfaceConfig
   */
  public function setPscInterfaceConfig(GoogleCloudAiplatformV1PscInterfaceConfig $pscInterfaceConfig)
  {
    $this->pscInterfaceConfig = $pscInterfaceConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1PscInterfaceConfig
   */
  public function getPscInterfaceConfig()
  {
    return $this->pscInterfaceConfig;
  }
  /**
   * @param string[]
   */
  public function setResourceLimits($resourceLimits)
  {
    $this->resourceLimits = $resourceLimits;
  }
  /**
   * @return string[]
   */
  public function getResourceLimits()
  {
    return $this->resourceLimits;
  }
  /**
   * @param GoogleCloudAiplatformV1SecretEnvVar[]
   */
  public function setSecretEnv($secretEnv)
  {
    $this->secretEnv = $secretEnv;
  }
  /**
   * @return GoogleCloudAiplatformV1SecretEnvVar[]
   */
  public function getSecretEnv()
  {
    return $this->secretEnv;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpec');
