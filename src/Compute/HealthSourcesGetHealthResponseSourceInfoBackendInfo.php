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

class HealthSourcesGetHealthResponseSourceInfoBackendInfo extends \Google\Model
{
  /**
   * Total number of endpoints when determining the health of the
   * regionHealthSource.
   *
   * @var int
   */
  public $endpointCount;
  /**
   * Fully qualified URL of an instance group or network endpoint group behind
   * the source backend service.
   *
   * @var string
   */
  public $group;
  /**
   * Number of endpoints considered healthy when determining health of the
   * regionHealthSource.
   *
   * @var int
   */
  public $healthyEndpointCount;

  /**
   * Total number of endpoints when determining the health of the
   * regionHealthSource.
   *
   * @param int $endpointCount
   */
  public function setEndpointCount($endpointCount)
  {
    $this->endpointCount = $endpointCount;
  }
  /**
   * @return int
   */
  public function getEndpointCount()
  {
    return $this->endpointCount;
  }
  /**
   * Fully qualified URL of an instance group or network endpoint group behind
   * the source backend service.
   *
   * @param string $group
   */
  public function setGroup($group)
  {
    $this->group = $group;
  }
  /**
   * @return string
   */
  public function getGroup()
  {
    return $this->group;
  }
  /**
   * Number of endpoints considered healthy when determining health of the
   * regionHealthSource.
   *
   * @param int $healthyEndpointCount
   */
  public function setHealthyEndpointCount($healthyEndpointCount)
  {
    $this->healthyEndpointCount = $healthyEndpointCount;
  }
  /**
   * @return int
   */
  public function getHealthyEndpointCount()
  {
    return $this->healthyEndpointCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HealthSourcesGetHealthResponseSourceInfoBackendInfo::class, 'Google_Service_Compute_HealthSourcesGetHealthResponseSourceInfoBackendInfo');
