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

namespace Google\Service\WorkloadManager;

class Actuation extends \Google\Collection
{
  /**
   * state unspecified
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * creating infrastructure in backend (terraform applying)
   */
  public const STATE_INFRA_CREATING = 'INFRA_CREATING';
  /**
   * success
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * failed either in infra creating, post infra configuring or infra destroying
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * configure workload after infrastructure is ready (ansible running)
   */
  public const STATE_POST_INFRA_CONFIGURING = 'POST_INFRA_CONFIGURING';
  /**
   * destroying infrastructure in backend (terraform destroying)
   */
  public const STATE_INFRA_DESTROYING = 'INFRA_DESTROYING';
  /**
   * ansible is timeout due to losing heartbeat in post infra configuring
   */
  public const STATE_TIMEOUT = 'TIMEOUT';
  protected $collection_key = 'deploymentOutput';
  protected $actuationOutputType = ActuationOutput::class;
  protected $actuationOutputDataType = '';
  protected $deploymentOutputType = DeploymentOutput::class;
  protected $deploymentOutputDataType = 'array';
  /**
   * Output only. [Output only] End time stamp
   *
   * @var string
   */
  public $endTime;
  /**
   * The name of actuation resource. The format is projects/{project}/locations/
   * {location}/deployments/{deployment}/actuations/{actuation}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. [Output only] Start time stamp
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. [Output only] Actuation state
   *
   * @var string
   */
  public $state;

  /**
   * Output only. [Output only] Actuation output
   *
   * @param ActuationOutput $actuationOutput
   */
  public function setActuationOutput(ActuationOutput $actuationOutput)
  {
    $this->actuationOutput = $actuationOutput;
  }
  /**
   * @return ActuationOutput
   */
  public function getActuationOutput()
  {
    return $this->actuationOutput;
  }
  /**
   * Output only. [Output only] Deployment output
   *
   * @param DeploymentOutput[] $deploymentOutput
   */
  public function setDeploymentOutput($deploymentOutput)
  {
    $this->deploymentOutput = $deploymentOutput;
  }
  /**
   * @return DeploymentOutput[]
   */
  public function getDeploymentOutput()
  {
    return $this->deploymentOutput;
  }
  /**
   * Output only. [Output only] End time stamp
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * The name of actuation resource. The format is projects/{project}/locations/
   * {location}/deployments/{deployment}/actuations/{actuation}
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
   * Output only. [Output only] Start time stamp
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Output only. [Output only] Actuation state
   *
   * Accepted values: STATE_UNSPECIFIED, INFRA_CREATING, SUCCEEDED, FAILED,
   * POST_INFRA_CONFIGURING, INFRA_DESTROYING, TIMEOUT
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Actuation::class, 'Google_Service_WorkloadManager_Actuation');
