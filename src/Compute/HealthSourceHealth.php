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

class HealthSourceHealth extends \Google\Collection
{
  public const HEALTH_STATE_HEALTHY = 'HEALTHY';
  public const HEALTH_STATE_UNHEALTHY = 'UNHEALTHY';
  public const HEALTH_STATE_UNKNOWN = 'UNKNOWN';
  protected $collection_key = 'sources';
  /**
   * Health state of the HealthSource.
   *
   * @var string
   */
  public $healthState;
  /**
   * Output only. [Output Only] Type of resource.
   * Alwayscompute#healthSourceHealth for the health of health sources.
   *
   * @var string
   */
  public $kind;
  protected $sourcesType = HealthSourcesGetHealthResponseSourceInfo::class;
  protected $sourcesDataType = 'array';

  /**
   * Health state of the HealthSource.
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
   * Output only. [Output Only] Type of resource.
   * Alwayscompute#healthSourceHealth for the health of health sources.
   *
   * @param string $kind
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * Health state details of the sources.
   *
   * @param HealthSourcesGetHealthResponseSourceInfo[] $sources
   */
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  /**
   * @return HealthSourcesGetHealthResponseSourceInfo[]
   */
  public function getSources()
  {
    return $this->sources;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HealthSourceHealth::class, 'Google_Service_Compute_HealthSourceHealth');
