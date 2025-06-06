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

class GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfig extends \Google\Model
{
  protected $engineFeaturesConfigType = GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfigEngineFeaturesConfig::class;
  protected $engineFeaturesConfigDataType = '';
  /**
   * @var string
   */
  public $optimizationObjective;
  protected $optimizationObjectiveConfigType = GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfigOptimizationObjectiveConfig::class;
  protected $optimizationObjectiveConfigDataType = '';
  /**
   * @var string
   */
  public $trainingState;
  /**
   * @var string
   */
  public $type;

  /**
   * @param GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfigEngineFeaturesConfig
   */
  public function setEngineFeaturesConfig(GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfigEngineFeaturesConfig $engineFeaturesConfig)
  {
    $this->engineFeaturesConfig = $engineFeaturesConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfigEngineFeaturesConfig
   */
  public function getEngineFeaturesConfig()
  {
    return $this->engineFeaturesConfig;
  }
  /**
   * @param string
   */
  public function setOptimizationObjective($optimizationObjective)
  {
    $this->optimizationObjective = $optimizationObjective;
  }
  /**
   * @return string
   */
  public function getOptimizationObjective()
  {
    return $this->optimizationObjective;
  }
  /**
   * @param GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfigOptimizationObjectiveConfig
   */
  public function setOptimizationObjectiveConfig(GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfigOptimizationObjectiveConfig $optimizationObjectiveConfig)
  {
    $this->optimizationObjectiveConfig = $optimizationObjectiveConfig;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfigOptimizationObjectiveConfig
   */
  public function getOptimizationObjectiveConfig()
  {
    return $this->optimizationObjectiveConfig;
  }
  /**
   * @param string
   */
  public function setTrainingState($trainingState)
  {
    $this->trainingState = $trainingState;
  }
  /**
   * @return string
   */
  public function getTrainingState()
  {
    return $this->trainingState;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaEngineMediaRecommendationEngineConfig');
