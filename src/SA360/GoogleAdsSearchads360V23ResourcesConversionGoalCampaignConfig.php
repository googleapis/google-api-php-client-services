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

class GoogleAdsSearchads360V23ResourcesConversionGoalCampaignConfig extends \Google\Model
{
  /**
   * The goal config level has not been specified.
   */
  public const GOAL_CONFIG_LEVEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The goal config level is not known in this version.
   */
  public const GOAL_CONFIG_LEVEL_UNKNOWN = 'UNKNOWN';
  /**
   * The goal config is defined at the customer level.
   */
  public const GOAL_CONFIG_LEVEL_CUSTOMER = 'CUSTOMER';
  /**
   * The goal config is defined at the campaign level.
   */
  public const GOAL_CONFIG_LEVEL_CAMPAIGN = 'CAMPAIGN';
  /**
   * The goal config level has not been specified.
   */
  public const SEARCH_ADS360_GOAL_CONFIG_LEVEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The goal config level is not known in this version.
   */
  public const SEARCH_ADS360_GOAL_CONFIG_LEVEL_UNKNOWN = 'UNKNOWN';
  /**
   * The goal config is defined at the customer level.
   */
  public const SEARCH_ADS360_GOAL_CONFIG_LEVEL_CUSTOMER = 'CUSTOMER';
  /**
   * The goal config is defined at the campaign level.
   */
  public const SEARCH_ADS360_GOAL_CONFIG_LEVEL_CAMPAIGN = 'CAMPAIGN';
  /**
   * Immutable. The campaign with which this conversion goal campaign config is
   * associated.
   *
   * @var string
   */
  public $campaign;
  /**
   * The custom conversion goal the campaign is using for optimization.
   *
   * @var string
   */
  public $customConversionGoal;
  /**
   * The level of goal config the campaign is using.
   *
   * @var string
   */
  public $goalConfigLevel;
  /**
   * Immutable. The resource name of the conversion goal campaign config.
   * Conversion goal campaign config resource names have the form:
   * `customers/{customer_id}/conversionGoalCampaignConfigs/{campaign_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The Search Ads 360 custom conversion goal the campaign is using for
   * optimization.
   *
   * @var string
   */
  public $searchAds360CustomConversionGoal;
  /**
   * The level of Search Ads 360 goal config the campaign is using.
   *
   * @var string
   */
  public $searchAds360GoalConfigLevel;

  /**
   * Immutable. The campaign with which this conversion goal campaign config is
   * associated.
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
   * The custom conversion goal the campaign is using for optimization.
   *
   * @param string $customConversionGoal
   */
  public function setCustomConversionGoal($customConversionGoal)
  {
    $this->customConversionGoal = $customConversionGoal;
  }
  /**
   * @return string
   */
  public function getCustomConversionGoal()
  {
    return $this->customConversionGoal;
  }
  /**
   * The level of goal config the campaign is using.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER, CAMPAIGN
   *
   * @param self::GOAL_CONFIG_LEVEL_* $goalConfigLevel
   */
  public function setGoalConfigLevel($goalConfigLevel)
  {
    $this->goalConfigLevel = $goalConfigLevel;
  }
  /**
   * @return self::GOAL_CONFIG_LEVEL_*
   */
  public function getGoalConfigLevel()
  {
    return $this->goalConfigLevel;
  }
  /**
   * Immutable. The resource name of the conversion goal campaign config.
   * Conversion goal campaign config resource names have the form:
   * `customers/{customer_id}/conversionGoalCampaignConfigs/{campaign_id}`
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
  /**
   * The Search Ads 360 custom conversion goal the campaign is using for
   * optimization.
   *
   * @param string $searchAds360CustomConversionGoal
   */
  public function setSearchAds360CustomConversionGoal($searchAds360CustomConversionGoal)
  {
    $this->searchAds360CustomConversionGoal = $searchAds360CustomConversionGoal;
  }
  /**
   * @return string
   */
  public function getSearchAds360CustomConversionGoal()
  {
    return $this->searchAds360CustomConversionGoal;
  }
  /**
   * The level of Search Ads 360 goal config the campaign is using.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER, CAMPAIGN
   *
   * @param self::SEARCH_ADS360_GOAL_CONFIG_LEVEL_* $searchAds360GoalConfigLevel
   */
  public function setSearchAds360GoalConfigLevel($searchAds360GoalConfigLevel)
  {
    $this->searchAds360GoalConfigLevel = $searchAds360GoalConfigLevel;
  }
  /**
   * @return self::SEARCH_ADS360_GOAL_CONFIG_LEVEL_*
   */
  public function getSearchAds360GoalConfigLevel()
  {
    return $this->searchAds360GoalConfigLevel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesConversionGoalCampaignConfig::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionGoalCampaignConfig');
