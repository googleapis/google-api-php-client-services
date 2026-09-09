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

namespace Google\Service\Compute\Resource;

use Google\Service\Compute\CalendarModeAdviceRequest;
use Google\Service\Compute\CalendarModeAdviceResponse;
use Google\Service\Compute\CapacityAdviceRequest;
use Google\Service\Compute\CapacityAdviceResponse;
use Google\Service\Compute\CapacityHistoryRequest;
use Google\Service\Compute\CapacityHistoryResponse;

/**
 * The "advice" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google\Service\Compute(...);
 *   $advice = $computeService->advice;
 *  </code>
 */
class Advice extends \Google\Service\Resource
{
  /**
   * Advise how, where and when to create the requested amount of instances with
   * specified accelerators, within the specified time and location limits. The
   * method recommends creating future reservations for the requested resources.
   * (advice.calendarMode)
   *
   * @param string $project Project ID for this request.
   * @param string $region Name of the region for this request.
   * @param CalendarModeAdviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CalendarModeAdviceResponse
   * @throws \Google\Service\Exception
   */
  public function calendarMode($project, $region, CalendarModeAdviceRequest $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'region' => $region, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('calendarMode', [$params], CalendarModeAdviceResponse::class);
  }
  /**
   * Advice on making real-time decisions (such as choosing zone or machine types)
   * during deployment to maximize your chances of obtaining capacity.
   * (advice.capacity)
   *
   * @param string $project Project ID for this request.
   * @param string $region Name of the region for this request.
   * @param CapacityAdviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CapacityAdviceResponse
   * @throws \Google\Service\Exception
   */
  public function capacity($project, $region, CapacityAdviceRequest $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'region' => $region, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('capacity', [$params], CapacityAdviceResponse::class);
  }
  /**
   * Gets the capacity history. (advice.capacityHistory)
   *
   * @param string $project Project ID for this request.
   * @param string $region Name of the region for this request.
   * @param CapacityHistoryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CapacityHistoryResponse
   * @throws \Google\Service\Exception
   */
  public function capacityHistory($project, $region, CapacityHistoryRequest $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'region' => $region, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('capacityHistory', [$params], CapacityHistoryResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Advice::class, 'Google_Service_Compute_Resource_Advice');
