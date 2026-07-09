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

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperiment extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The experiment is created.
   */
  public const STATE_CREATED = 'CREATED';
  /**
   * The experiment is running.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * The experiment is paused.
   */
  public const STATE_PAUSED = 'PAUSED';
  /**
   * The experiment is completed.
   */
  public const STATE_COMPLETED = 'COMPLETED';
  /**
   * The experiment has failed.
   */
  public const STATE_FAILED = 'FAILED';
  protected $configType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfig::class;
  protected $configDataType = '';
  /**
   * Output only. Time when the experiment was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Specifies the name of the seed program used to start the
   * experiment.
   *
   * @var string
   */
  public $initialAlphaEvolveProgram;
  /**
   * Identifier. The full resource name of the experiment. Format: `projects/{pr
   * oject}/locations/{location}/collections/{collection}/engines/{engine}/sessi
   * ons/{session}/alphaEvolveExperiments/{alpha_evolve_experiment}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The state of the experiment.
   *
   * @var string
   */
  public $state;
  protected $statsType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentStats::class;
  protected $statsDataType = '';

  /**
   * Required. Experiment configuration.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfig $config
   */
  public function setConfig(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfig $config)
  {
    $this->config = $config;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentConfig
   */
  public function getConfig()
  {
    return $this->config;
  }
  /**
   * Output only. Time when the experiment was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. Specifies the name of the seed program used to start the
   * experiment.
   *
   * @param string $initialAlphaEvolveProgram
   */
  public function setInitialAlphaEvolveProgram($initialAlphaEvolveProgram)
  {
    $this->initialAlphaEvolveProgram = $initialAlphaEvolveProgram;
  }
  /**
   * @return string
   */
  public function getInitialAlphaEvolveProgram()
  {
    return $this->initialAlphaEvolveProgram;
  }
  /**
   * Identifier. The full resource name of the experiment. Format: `projects/{pr
   * oject}/locations/{location}/collections/{collection}/engines/{engine}/sessi
   * ons/{session}/alphaEvolveExperiments/{alpha_evolve_experiment}`
   *
   * @param string $name
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
  /**
   * Output only. The state of the experiment.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATED, RUNNING, PAUSED, COMPLETED,
   * FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Experiment stats.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentStats $stats
   */
  public function setStats(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentStats $stats)
  {
    $this->stats = $stats;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperimentStats
   */
  public function getStats()
  {
    return $this->stats;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperiment::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveExperiment');
