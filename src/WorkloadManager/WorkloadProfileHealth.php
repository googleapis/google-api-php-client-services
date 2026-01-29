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

class WorkloadProfileHealth extends \Google\Collection
{
  /**
   * Unspecified.
   */
  public const STATE_HEALTH_STATE_UNSPECIFIED = 'HEALTH_STATE_UNSPECIFIED';
  /**
   * Healthy workload.
   */
  public const STATE_HEALTHY = 'HEALTHY';
  /**
   * Unhealthy workload.
   */
  public const STATE_UNHEALTHY = 'UNHEALTHY';
  /**
   * Has critical issues.
   */
  public const STATE_CRITICAL = 'CRITICAL';
  /**
   * Unsupported.
   */
  public const STATE_UNSUPPORTED = 'UNSUPPORTED';
  protected $collection_key = 'componentsHealth';
  /**
   * The time when the health check was performed.
   *
   * @var string
   */
  public $checkTime;
  protected $componentsHealthType = ComponentHealth::class;
  protected $componentsHealthDataType = 'array';
  /**
   * Output only. The health state of the workload.
   *
   * @var string
   */
  public $state;

  /**
   * The time when the health check was performed.
   *
   * @param string $checkTime
   */
  public function setCheckTime($checkTime)
  {
    $this->checkTime = $checkTime;
  }
  /**
   * @return string
   */
  public function getCheckTime()
  {
    return $this->checkTime;
  }
  /**
   * The detailed condition reports of each component.
   *
   * @param ComponentHealth[] $componentsHealth
   */
  public function setComponentsHealth($componentsHealth)
  {
    $this->componentsHealth = $componentsHealth;
  }
  /**
   * @return ComponentHealth[]
   */
  public function getComponentsHealth()
  {
    return $this->componentsHealth;
  }
  /**
   * Output only. The health state of the workload.
   *
   * Accepted values: HEALTH_STATE_UNSPECIFIED, HEALTHY, UNHEALTHY, CRITICAL,
   * UNSUPPORTED
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
class_alias(WorkloadProfileHealth::class, 'Google_Service_WorkloadManager_WorkloadProfileHealth');
