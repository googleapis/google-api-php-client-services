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

class ComponentHealth extends \Google\Collection
{
  /**
   * Unspecified
   */
  public const COMPONENT_HEALTH_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * required
   */
  public const COMPONENT_HEALTH_TYPE_TYPE_REQUIRED = 'TYPE_REQUIRED';
  /**
   * optional
   */
  public const COMPONENT_HEALTH_TYPE_TYPE_OPTIONAL = 'TYPE_OPTIONAL';
  /**
   * special
   */
  public const COMPONENT_HEALTH_TYPE_TYPE_SPECIAL = 'TYPE_SPECIAL';
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
  protected $collection_key = 'subComponentsHealth';
  /**
   * The component of a workload.
   *
   * @var string
   */
  public $component;
  protected $componentHealthChecksType = HealthCheck::class;
  protected $componentHealthChecksDataType = 'array';
  /**
   * Output only. The type of the component health.
   *
   * @var string
   */
  public $componentHealthType;
  /**
   * Output only. The health state of the component.
   *
   * @var string
   */
  public $state;
  protected $subComponentsHealthType = ComponentHealth::class;
  protected $subComponentsHealthDataType = 'array';

  /**
   * The component of a workload.
   *
   * @param string $component
   */
  public function setComponent($component)
  {
    $this->component = $component;
  }
  /**
   * @return string
   */
  public function getComponent()
  {
    return $this->component;
  }
  /**
   * The detailed health checks of the component.
   *
   * @param HealthCheck[] $componentHealthChecks
   */
  public function setComponentHealthChecks($componentHealthChecks)
  {
    $this->componentHealthChecks = $componentHealthChecks;
  }
  /**
   * @return HealthCheck[]
   */
  public function getComponentHealthChecks()
  {
    return $this->componentHealthChecks;
  }
  /**
   * Output only. The type of the component health.
   *
   * Accepted values: TYPE_UNSPECIFIED, TYPE_REQUIRED, TYPE_OPTIONAL,
   * TYPE_SPECIAL
   *
   * @param self::COMPONENT_HEALTH_TYPE_* $componentHealthType
   */
  public function setComponentHealthType($componentHealthType)
  {
    $this->componentHealthType = $componentHealthType;
  }
  /**
   * @return self::COMPONENT_HEALTH_TYPE_*
   */
  public function getComponentHealthType()
  {
    return $this->componentHealthType;
  }
  /**
   * Output only. The health state of the component.
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
  /**
   * Sub component health.
   *
   * @param ComponentHealth[] $subComponentsHealth
   */
  public function setSubComponentsHealth($subComponentsHealth)
  {
    $this->subComponentsHealth = $subComponentsHealth;
  }
  /**
   * @return ComponentHealth[]
   */
  public function getSubComponentsHealth()
  {
    return $this->subComponentsHealth;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComponentHealth::class, 'Google_Service_WorkloadManager_ComponentHealth');
