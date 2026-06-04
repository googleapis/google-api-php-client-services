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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCustomConversionGoalsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateCustomConversionGoalsResponse;

/**
 * The "customConversionGoals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $customConversionGoals = $searchads360Service->customers_customConversionGoals;
 *  </code>
 */
class CustomersCustomConversionGoals extends \Google\Service\Resource
{
  /**
   * Creates, updates or removes custom conversion goals. Operation statuses are
   * returned. (customConversionGoals.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose custom
   * conversion goals are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateCustomConversionGoalsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateCustomConversionGoalsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateCustomConversionGoalsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateCustomConversionGoalsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersCustomConversionGoals::class, 'Google_Service_SA360_Resource_CustomersCustomConversionGoals');
