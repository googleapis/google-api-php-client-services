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

class CapacityAdviceResponseRecommendationScores extends \Google\Model
{
  /**
   * The estimated run time of the majority of Spot VMs in the request before
   * preemption. The estimate is best-effort only. It is based on historical
   * data and current conditions.
   *
   * @var string
   */
  public $estimatedUptime;
  /**
   * The obtainability score indicates the likelihood of successfully obtaining
   * (provisioning) the requested number of VMs. The score range is 0.0 through
   * 1.0. Higher is better.
   *
   * @var 
   */
  public $obtainability;

  /**
   * The estimated run time of the majority of Spot VMs in the request before
   * preemption. The estimate is best-effort only. It is based on historical
   * data and current conditions.
   *
   * @param string $estimatedUptime
   */
  public function setEstimatedUptime($estimatedUptime)
  {
    $this->estimatedUptime = $estimatedUptime;
  }
  /**
   * @return string
   */
  public function getEstimatedUptime()
  {
    return $this->estimatedUptime;
  }
  public function setObtainability($obtainability)
  {
    $this->obtainability = $obtainability;
  }
  public function getObtainability()
  {
    return $this->obtainability;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityAdviceResponseRecommendationScores::class, 'Google_Service_Compute_CapacityAdviceResponseRecommendationScores');
