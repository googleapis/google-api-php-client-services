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

class GoogleCloudAiplatformV1UserScenarioGenerationConfig extends \Google\Model
{
  /**
   * Optional. Environment data in string type.
   *
   * @var string
   */
  public $environmentData;
  /**
   * Optional. The model name to use for generation. It can be model name, e.g.
   * "gemini-3-pro-preview". or the fully qualified name of the publisher model
   * or endpoint. Publisher model format:
   * `projects/{project}/locations/{location}/publishers/models` Endpoint
   * format: `projects/{project}/locations/{location}/endpoints/{endpoint}`
   *
   * @var string
   */
  public $modelName;
  /**
   * Optional. Simulation instruction to guide the user scenario generation.
   *
   * @var string
   */
  public $simulationInstruction;
  /**
   * Required. The number of user scenarios to generate. The maximum number of
   * scenarios that can be generated is 100.
   *
   * @var string
   */
  public $userScenarioCount;

  /**
   * Optional. Environment data in string type.
   *
   * @param string $environmentData
   */
  public function setEnvironmentData($environmentData)
  {
    $this->environmentData = $environmentData;
  }
  /**
   * @return string
   */
  public function getEnvironmentData()
  {
    return $this->environmentData;
  }
  /**
   * Optional. The model name to use for generation. It can be model name, e.g.
   * "gemini-3-pro-preview". or the fully qualified name of the publisher model
   * or endpoint. Publisher model format:
   * `projects/{project}/locations/{location}/publishers/models` Endpoint
   * format: `projects/{project}/locations/{location}/endpoints/{endpoint}`
   *
   * @param string $modelName
   */
  public function setModelName($modelName)
  {
    $this->modelName = $modelName;
  }
  /**
   * @return string
   */
  public function getModelName()
  {
    return $this->modelName;
  }
  /**
   * Optional. Simulation instruction to guide the user scenario generation.
   *
   * @param string $simulationInstruction
   */
  public function setSimulationInstruction($simulationInstruction)
  {
    $this->simulationInstruction = $simulationInstruction;
  }
  /**
   * @return string
   */
  public function getSimulationInstruction()
  {
    return $this->simulationInstruction;
  }
  /**
   * Required. The number of user scenarios to generate. The maximum number of
   * scenarios that can be generated is 100.
   *
   * @param string $userScenarioCount
   */
  public function setUserScenarioCount($userScenarioCount)
  {
    $this->userScenarioCount = $userScenarioCount;
  }
  /**
   * @return string
   */
  public function getUserScenarioCount()
  {
    return $this->userScenarioCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1UserScenarioGenerationConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1UserScenarioGenerationConfig');
