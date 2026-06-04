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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateRemarketingActionsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateRemarketingActionsResponse;

/**
 * The "remarketingActions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $remarketingActions = $searchads360Service->customers_remarketingActions;
 *  </code>
 */
class CustomersRemarketingActions extends \Google\Service\Resource
{
  /**
   * Creates or updates remarketing actions. Operation statuses are returned. List
   * of thrown errors: [AuthenticationError]() [AuthorizationError]()
   * [ConversionActionError]() [HeaderError]() [InternalError]() [QuotaError]()
   * [RequestError]() (remarketingActions.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose remarketing
   * actions are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateRemarketingActionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateRemarketingActionsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateRemarketingActionsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateRemarketingActionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersRemarketingActions::class, 'Google_Service_SA360_Resource_CustomersRemarketingActions');
