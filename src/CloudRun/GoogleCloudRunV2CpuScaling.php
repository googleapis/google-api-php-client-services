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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2CpuScaling extends \Google\Model
{
  /**
   * Optional. Determines a threshold for CPU utilization before scaling begins.
   * Accepted values are between `0.1` and `0.90` (inclusive) or `0.0` to
   * disable CPU utilization as threshold for scaling.
   *
   * @var float
   */
  public $cpuUtilization;

  /**
   * Optional. Determines a threshold for CPU utilization before scaling begins.
   * Accepted values are between `0.1` and `0.90` (inclusive) or `0.0` to
   * disable CPU utilization as threshold for scaling.
   *
   * @param float $cpuUtilization
   */
  public function setCpuUtilization($cpuUtilization)
  {
    $this->cpuUtilization = $cpuUtilization;
  }
  /**
   * @return float
   */
  public function getCpuUtilization()
  {
    return $this->cpuUtilization;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2CpuScaling::class, 'Google_Service_CloudRun_GoogleCloudRunV2CpuScaling');
