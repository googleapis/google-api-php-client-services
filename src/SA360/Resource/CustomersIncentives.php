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

namespace Google\Service\SA360\Resource;

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesApplyIncentiveRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesApplyIncentiveResponse;

/**
 * The "incentives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $incentives = $searchads360Service->customers_incentives;
 *  </code>
 */
class CustomersIncentives extends \Google\Service\Resource
{
  /**
   * Applies the incentive for the ads customer. (incentives.applyIncentive)
   *
   * @param string $customerId The customer ID of the account that the incentive
   * is being applied to.
   * @param string $selectedIncentiveId The incentive ID of this incentive. This
   * is used to identify which incentive is selected by the user in the CYO flow.
   * @param GoogleAdsSearchads360V23ServicesApplyIncentiveRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesApplyIncentiveResponse
   * @throws \Google\Service\Exception
   */
  public function applyIncentive($customerId, $selectedIncentiveId, GoogleAdsSearchads360V23ServicesApplyIncentiveRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'selectedIncentiveId' => $selectedIncentiveId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('applyIncentive', [$params], GoogleAdsSearchads360V23ServicesApplyIncentiveResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersIncentives::class, 'Google_Service_SA360_Resource_CustomersIncentives');
