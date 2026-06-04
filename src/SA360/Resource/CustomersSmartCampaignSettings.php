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

use Google\Service\SA360\GoogleAdsSearchads360V23ServicesGetSmartCampaignStatusResponse;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateSmartCampaignSettingsRequest;
use Google\Service\SA360\GoogleAdsSearchads360V23ServicesMutateSmartCampaignSettingsResponse;

/**
 * The "smartCampaignSettings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $searchads360Service = new Google\Service\SA360(...);
 *   $smartCampaignSettings = $searchads360Service->customers_smartCampaignSettings;
 *  </code>
 */
class CustomersSmartCampaignSettings extends \Google\Service\Resource
{
  /**
   * Returns the status of the requested Smart campaign.
   * (smartCampaignSettings.getSmartCampaignStatus)
   *
   * @param string $resourceName Required. The resource name of the Smart campaign
   * setting belonging to the Smart campaign to fetch the status of.
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesGetSmartCampaignStatusResponse
   * @throws \Google\Service\Exception
   */
  public function getSmartCampaignStatus($resourceName, $optParams = [])
  {
    $params = ['resourceName' => $resourceName];
    $params = array_merge($params, $optParams);
    return $this->call('getSmartCampaignStatus', [$params], GoogleAdsSearchads360V23ServicesGetSmartCampaignStatusResponse::class);
  }
  /**
   * Updates Smart campaign settings for campaigns. (smartCampaignSettings.mutate)
   *
   * @param string $customerId Required. The ID of the customer whose Smart
   * campaign settings are being modified.
   * @param GoogleAdsSearchads360V23ServicesMutateSmartCampaignSettingsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleAdsSearchads360V23ServicesMutateSmartCampaignSettingsResponse
   * @throws \Google\Service\Exception
   */
  public function mutate($customerId, GoogleAdsSearchads360V23ServicesMutateSmartCampaignSettingsRequest $postBody, $optParams = [])
  {
    $params = ['customerId' => $customerId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('mutate', [$params], GoogleAdsSearchads360V23ServicesMutateSmartCampaignSettingsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CustomersSmartCampaignSettings::class, 'Google_Service_SA360_Resource_CustomersSmartCampaignSettings');
