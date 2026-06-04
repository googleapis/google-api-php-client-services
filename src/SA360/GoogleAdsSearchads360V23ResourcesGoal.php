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

class GoogleAdsSearchads360V23ResourcesGoal extends \Google\Model
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
   * The goal optimization status has not been specified.
   */
  public const OPTIMIZATION_ELIGIBILITY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The goal optimization status is not known in this version.
   */
  public const OPTIMIZATION_ELIGIBILITY_UNKNOWN = 'UNKNOWN';
  /**
   * The goal is eligible for campaign optimization.
   */
  public const OPTIMIZATION_ELIGIBILITY_ELIGIBLE = 'ELIGIBLE';
  /**
   * The goal is not eligible for campaign optimization.
   */
  public const OPTIMIZATION_ELIGIBILITY_INELIGIBLE = 'INELIGIBLE';
  /**
   * Output only. The ID of this goal.
   *
   * @var string
   */
  public $goalId;
  /**
   * Output only. The type of this goal.
   *
   * @var string
   */
  public $goalType;
  /**
   * Output only. Indicates if this goal is eligible for campaign optimization.
   *
   * @var string
   */
  public $optimizationEligibility;
  /**
   * Output only. The resource name of the goal owner customer.
   *
   * @var string
   */
  public $ownerCustomer;
  /**
   * Immutable. The resource name of the goal. Goal resource names have the
   * form: `customers/{customer_id}/goals/{goal_id}`
   *
   * @var string
   */
  public $resourceName;
  protected $retentionGoalSettingsType = GoogleAdsSearchads360V23CommonGoalSettingRetentionGoal::class;
  protected $retentionGoalSettingsDataType = '';

  /**
   * Output only. The ID of this goal.
   *
   * @param string $goalId
   */
  public function setGoalId($goalId)
  {
    $this->goalId = $goalId;
  }
  /**
   * @return string
   */
  public function getGoalId()
  {
    return $this->goalId;
  }
  /**
   * Output only. The type of this goal.
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
   * Output only. Indicates if this goal is eligible for campaign optimization.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ELIGIBLE, INELIGIBLE
   *
   * @param self::OPTIMIZATION_ELIGIBILITY_* $optimizationEligibility
   */
  public function setOptimizationEligibility($optimizationEligibility)
  {
    $this->optimizationEligibility = $optimizationEligibility;
  }
  /**
   * @return self::OPTIMIZATION_ELIGIBILITY_*
   */
  public function getOptimizationEligibility()
  {
    return $this->optimizationEligibility;
  }
  /**
   * Output only. The resource name of the goal owner customer.
   *
   * @param string $ownerCustomer
   */
  public function setOwnerCustomer($ownerCustomer)
  {
    $this->ownerCustomer = $ownerCustomer;
  }
  /**
   * @return string
   */
  public function getOwnerCustomer()
  {
    return $this->ownerCustomer;
  }
  /**
   * Immutable. The resource name of the goal. Goal resource names have the
   * form: `customers/{customer_id}/goals/{goal_id}`
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
   * Retention goal settings.
   *
   * @param GoogleAdsSearchads360V23CommonGoalSettingRetentionGoal $retentionGoalSettings
   */
  public function setRetentionGoalSettings(GoogleAdsSearchads360V23CommonGoalSettingRetentionGoal $retentionGoalSettings)
  {
    $this->retentionGoalSettings = $retentionGoalSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonGoalSettingRetentionGoal
   */
  public function getRetentionGoalSettings()
  {
    return $this->retentionGoalSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesGoal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesGoal');
