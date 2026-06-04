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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal extends \Google\Model
{
  /**
   * Output only. The campaign where the goal is attached.
   *
   * @var string
   */
  public $campaign;
  protected $customerAcquisitionGoalSettingsType = GoogleAdsSearchads360V23ResourcesCustomerAcquisitionGoalSettings::class;
  protected $customerAcquisitionGoalSettingsDataType = '';
  /**
   * Immutable. The resource name of the customer lifecycle goal of a campaign.
   * `customers/{customer_id}/campaignLifecycleGoal/{campaign_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Output only. The campaign where the goal is attached.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Output only. The customer acquisition goal settings for the campaign. The
   * customer acquisition goal is described in this article:
   * https://support.google.com/google-ads/answer/12080169
   *
   * @param GoogleAdsSearchads360V23ResourcesCustomerAcquisitionGoalSettings $customerAcquisitionGoalSettings
   */
  public function setCustomerAcquisitionGoalSettings(GoogleAdsSearchads360V23ResourcesCustomerAcquisitionGoalSettings $customerAcquisitionGoalSettings)
  {
    $this->customerAcquisitionGoalSettings = $customerAcquisitionGoalSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesCustomerAcquisitionGoalSettings
   */
  public function getCustomerAcquisitionGoalSettings()
  {
    return $this->customerAcquisitionGoalSettings;
  }
  /**
   * Immutable. The resource name of the customer lifecycle goal of a campaign.
   * `customers/{customer_id}/campaignLifecycleGoal/{campaign_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignLifecycleGoal');
