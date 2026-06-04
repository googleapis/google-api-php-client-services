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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesConfigureCampaignLifecycleGoalsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesConfigureCampaignLifecycleGoalsResponse;

/**
 * The "campaignLifecycleGoal" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $campaignLifecycleGoal = $searchads360Service->customers_campaignLifecycleGoal;
 *  </code>
 */
class CustomersCampaignLifecycleGoal extends \Google\Service\Resource
{
  /**
   * Process the given campaign lifecycle configurations. List of thrown errors:
   * [AuthenticationError]() [AuthorizationError]()
   * [CampaignLifecycleGoalConfigError]() [HeaderError]() [InternalError]()
   * [QuotaError]() [RequestError]()
   * (campaignLifecycleGoal.configureCampaignLifecycleGoals)
   *
   * @param string $customerId Required. The ID of the customer performing the
   * upload.
   * @param GoogleAdsSearchads360V23ServicesConfigureCampaignLifecycleGoalsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesConfigureCampaignLifecycleGoalsResponse
   * @throws \Google\Service\Exception
   */
  public function configureCampaignLifecycleGoals($customerId, GoogleAdsSearchads360V23ServicesConfigureCampaignLifecycleGoalsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('configureCampaignLifecycleGoals', [$params], GoogleAdsSearchads360V23ServicesConfigureCampaignLifecycleGoalsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersCampaignLifecycleGoal::class, 'Google_Service_SA360_Resource_CustomersCampaignLifecycleGoal');
