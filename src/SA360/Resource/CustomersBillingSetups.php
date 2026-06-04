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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateBillingSetupRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateBillingSetupResponse;

/**
 * The "billingSetups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $billingSetups = $searchads360Service->customers_billingSetups;
 *  </code>
 */
class CustomersBillingSetups extends \Google\Service\Resource
{
  /**
   * Creates a billing setup, or cancels an existing billing setup. List of thrown
   * errors: [AuthenticationError]() [AuthorizationError]() [BillingSetupError]()
   * [DateError]() [FieldError]() [HeaderError]() [InternalError]()
   * [MutateError]() [QuotaError]() [RequestError]() (billingSetups.mutate)
   *
   * @param string $customerId Required. Id of the customer to apply the billing
   * setup mutate operation to.
   * @param GoogleAdsSearchads360V23ServicesMutateBillingSetupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateBillingSetupResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateBillingSetupRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateBillingSetupResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersBillingSetups::class, 'Google_Service_SA360_Resource_CustomersBillingSetups');
