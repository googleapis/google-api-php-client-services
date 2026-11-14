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

namespace Google\Service\AndroidPublisher;

class SchedulePlanTransitionResponse extends \Google\Model
{
  protected $planTransitionDetailsType = PlanTransitionDetails::class;
  protected $planTransitionDetailsDataType = '';

  /**
   * The plan transition details of the subscription item.
   *
   * @param PlanTransitionDetails $planTransitionDetails
   */
  public function setPlanTransitionDetails(PlanTransitionDetails $planTransitionDetails)
  {
    $this->planTransitionDetails = $planTransitionDetails;
  }
  /**
   * @return PlanTransitionDetails
   */
  public function getPlanTransitionDetails()
  {
    return $this->planTransitionDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SchedulePlanTransitionResponse::class, 'Google_Service_AndroidPublisher_SchedulePlanTransitionResponse');
