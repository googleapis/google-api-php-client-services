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

class GoogleAdsSearchads360V23ResourcesCampaignGoalConfig extends \Google\Model
{
  /**
   * Not specified.
   */
  public const GOAL_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const GOAL_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Retention goal, which allows advertisers to optimize campaigns to win back
   * lapsed customers. (https://support.google.com/google-
   * ads/answer/14792043?hl=en)
   */
  public const GOAL_TYPE_CUSTOMER_RETENTION = 'CUSTOMER_RETENTION';
  /**
   * Immutable. The resource name of the campaign for this link.
   *
   * @var string
   */
  public $campaign;
  protected $campaignRetentionSettingsType = GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignRetentionGoalSettings::class;
  protected $campaignRetentionSettingsDataType = '';
  /**
   * Immutable. The resource name of the goal this link is attached to.
   *
   * @var string
   */
  public $goal;
  /**
   * Output only. The goal type this link is attached to.
   *
   * @var string
   */
  public $goalType;
  /**
   * Immutable. The resource name of the campaign goal config. campaign goal
   * config resource names have the form:
   * `customers/{customer_id}/campaignGoalConfigs/{campaign_id}~{goal_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Immutable. The resource name of the campaign for this link.
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
   * Retention goal campaign settings.
   *
   * @param GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignRetentionGoalSettings $campaignRetentionSettings
   */
  public function setCampaignRetentionSettings(GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignRetentionGoalSettings $campaignRetentionSettings)
  {
    $this->campaignRetentionSettings = $campaignRetentionSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignRetentionGoalSettings
   */
  public function getCampaignRetentionSettings()
  {
    return $this->campaignRetentionSettings;
  }
  /**
   * Immutable. The resource name of the goal this link is attached to.
   *
   * @param string $goal
   */
  public function setGoal($goal)
  {
    $this->goal = $goal;
  }
  /**
   * @return string
   */
  public function getGoal()
  {
    return $this->goal;
  }
  /**
   * Output only. The goal type this link is attached to.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER_RETENTION
   *
   * @param self::GOAL_TYPE_* $goalType
   */
  public function setGoalType($goalType)
  {
    $this->goalType = $goalType;
  }
  /**
   * @return self::GOAL_TYPE_*
   */
  public function getGoalType()
  {
    return $this->goalType;
  }
  /**
   * Immutable. The resource name of the campaign goal config. campaign goal
   * config resource names have the form:
   * `customers/{customer_id}/campaignGoalConfigs/{campaign_id}~{goal_id}`
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
class_alias(GoogleAdsSearchads360V23ResourcesCampaignGoalConfig::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignGoalConfig');
