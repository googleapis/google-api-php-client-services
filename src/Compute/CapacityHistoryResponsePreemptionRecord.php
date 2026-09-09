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

class CapacityHistoryResponsePreemptionRecord extends \Google\Model
{
  protected $intervalType = Interval::class;
  protected $intervalDataType = '';
  /**
   * The preemption rate during the interval, representing the fraction of Spot
   * VMs that were preempted. Range: 0.0 to 1.0. Preemption rate is calculated
   * as (total preempted Spots) / (total Spots that stopped running).
   *
   * @var 
   */
  public $preemptionRate;

  /**
   * The time interval for this preemption record.
   *
   * @param Interval $interval
   */
  public function setInterval(Interval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return Interval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  public function setPreemptionRate($preemptionRate)
  {
    $this->preemptionRate = $preemptionRate;
  }
  public function getPreemptionRate()
  {
    return $this->preemptionRate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityHistoryResponsePreemptionRecord::class, 'Google_Service_Compute_CapacityHistoryResponsePreemptionRecord');
