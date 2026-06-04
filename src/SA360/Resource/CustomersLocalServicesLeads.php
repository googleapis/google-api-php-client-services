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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesProvideLeadFeedbackRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesProvideLeadFeedbackResponse;

/**
 * The "localServicesLeads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $localServicesLeads = $searchads360Service->customers_localServicesLeads;
 *  </code>
 */
class CustomersLocalServicesLeads extends \Google\Service\Resource
{
  /**
   * RPC to provide feedback on Local Services Lead resources.
   * (localServicesLeads.provideLeadFeedback)
   *
   * @param string $resourceName Required. The resource name of the local services
   * lead that for which the feedback is being provided.
   * @param GoogleAdsSearchads360V23ServicesProvideLeadFeedbackRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesProvideLeadFeedbackResponse
   * @throws \Google\Service\Exception
   */
  public function provideLeadFeedback($resourceName, GoogleAdsSearchads360V23ServicesProvideLeadFeedbackRequest $postBody, $optParams = [])
  {
    $params = ['resourceName' => $resourceName, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('provideLeadFeedback', [$params], GoogleAdsSearchads360V23ServicesProvideLeadFeedbackResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersLocalServicesLeads::class, 'Google_Service_SA360_Resource_CustomersLocalServicesLeads');
