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

class ReservationSubBlockHealthInfo extends \Google\Model
{
  /**
   * @var int
   */
  public $degradedHostCount;
  /**
   * @var int
   */
  public $degradedInfraCount;
  /**
   * @var string
   */
  public $healthStatus;
  /**
   * @var int
   */
  public $healthyHostCount;
  /**
   * @var int
   */
  public $healthyInfraCount;

  /**
   * @param int
   */
  public function setDegradedHostCount($degradedHostCount)
  {
    $this->degradedHostCount = $degradedHostCount;
  }
  /**
   * @return int
   */
  public function getDegradedHostCount()
  {
    return $this->degradedHostCount;
  }
  /**
   * @param int
   */
  public function setDegradedInfraCount($degradedInfraCount)
  {
    $this->degradedInfraCount = $degradedInfraCount;
  }
  /**
   * @return int
   */
  public function getDegradedInfraCount()
  {
    return $this->degradedInfraCount;
  }
  /**
   * @param string
   */
  public function setHealthStatus($healthStatus)
  {
    $this->healthStatus = $healthStatus;
  }
  /**
   * @return string
   */
  public function getHealthStatus()
  {
    return $this->healthStatus;
  }
  /**
   * @param int
   */
  public function setHealthyHostCount($healthyHostCount)
  {
    $this->healthyHostCount = $healthyHostCount;
  }
  /**
   * @return int
   */
  public function getHealthyHostCount()
  {
    return $this->healthyHostCount;
  }
  /**
   * @param int
   */
  public function setHealthyInfraCount($healthyInfraCount)
  {
    $this->healthyInfraCount = $healthyInfraCount;
  }
  /**
   * @return int
   */
  public function getHealthyInfraCount()
  {
    return $this->healthyInfraCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReservationSubBlockHealthInfo::class, 'Google_Service_Compute_ReservationSubBlockHealthInfo');
