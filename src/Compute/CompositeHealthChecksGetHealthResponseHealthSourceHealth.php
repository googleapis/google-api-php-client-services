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

namespace Google\Service\Compute;

class CompositeHealthChecksGetHealthResponseHealthSourceHealth extends \Google\Model
{
  public const HEALTH_STATE_HEALTHY = 'HEALTHY';
  public const HEALTH_STATE_UNHEALTHY = 'UNHEALTHY';
  public const HEALTH_STATE_UNKNOWN = 'UNKNOWN';
  /**
   * Health state of the associated HealthSource resource.
   *
   * @var string
   */
  public $healthState;
  /**
   * Fully qualified URL of the associated HealthSource resource.
   *
   * @var string
   */
  public $source;

  /**
   * Health state of the associated HealthSource resource.
   *
   * Accepted values: HEALTHY, UNHEALTHY, UNKNOWN
   *
   * @param self::HEALTH_STATE_* $healthState
   */
  public function setHealthState($healthState)
  {
    $this->healthState = $healthState;
  }
  /**
   * @return self::HEALTH_STATE_*
   */
  public function getHealthState()
  {
    return $this->healthState;
  }
  /**
   * Fully qualified URL of the associated HealthSource resource.
   *
   * @param string $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return string
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CompositeHealthChecksGetHealthResponseHealthSourceHealth::class, 'Google_Service_Compute_CompositeHealthChecksGetHealthResponseHealthSourceHealth');
