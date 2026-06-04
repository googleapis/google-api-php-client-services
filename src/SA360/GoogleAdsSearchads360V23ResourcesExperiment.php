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

class GoogleAdsSearchads360V23ResourcesExperiment extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const PROMOTE_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const PROMOTE_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Action has not started.
   */
  public const PROMOTE_STATUS_NOT_STARTED = 'NOT_STARTED';
  /**
   * Action is in progress.
   */
  public const PROMOTE_STATUS_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * Action has completed successfully.
   */
  public const PROMOTE_STATUS_COMPLETED = 'COMPLETED';
  /**
   * Action has failed.
   */
  public const PROMOTE_STATUS_FAILED = 'FAILED';
  /**
   * Action has completed successfully with warnings.
   */
  public const PROMOTE_STATUS_COMPLETED_WITH_WARNING = 'COMPLETED_WITH_WARNING';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The experiment is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The experiment has been removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * The experiment has been halted. This status can be set from ENABLED status
   * through API.
   */
  public const STATUS_HALTED = 'HALTED';
  /**
   * The experiment will be promoted out of experimental status.
   */
  public const STATUS_PROMOTED = 'PROMOTED';
  /**
   * Initial status of the experiment.
   */
  public const STATUS_SETUP = 'SETUP';
  /**
   * The experiment's campaigns are pending materialization. This status can be
   * set from SETUP status through API.
   */
  public const STATUS_INITIATED = 'INITIATED';
  /**
   * The experiment has been graduated.
   */
  public const STATUS_GRADUATED = 'GRADUATED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * This is a DISPLAY_AND_VIDEO_360 experiment.
   */
  public const TYPE_DISPLAY_AND_VIDEO_360 = 'DISPLAY_AND_VIDEO_360';
  /**
   * This is an ad variation experiment.
   */
  public const TYPE_AD_VARIATION = 'AD_VARIATION';
  /**
   * A custom experiment consisting of Video campaigns.
   */
  public const TYPE_YOUTUBE_CUSTOM = 'YOUTUBE_CUSTOM';
  /**
   * A custom experiment consisting of display campaigns.
   */
  public const TYPE_DISPLAY_CUSTOM = 'DISPLAY_CUSTOM';
  /**
   * A custom experiment consisting of search campaigns.
   */
  public const TYPE_SEARCH_CUSTOM = 'SEARCH_CUSTOM';
  /**
   * An experiment that compares bidding strategies for display campaigns.
   */
  public const TYPE_DISPLAY_AUTOMATED_BIDDING_STRATEGY = 'DISPLAY_AUTOMATED_BIDDING_STRATEGY';
  /**
   * An experiment that compares bidding strategies for search campaigns."
   */
  public const TYPE_SEARCH_AUTOMATED_BIDDING_STRATEGY = 'SEARCH_AUTOMATED_BIDDING_STRATEGY';
  /**
   * An experiment that compares bidding strategies for shopping campaigns.
   */
  public const TYPE_SHOPPING_AUTOMATED_BIDDING_STRATEGY = 'SHOPPING_AUTOMATED_BIDDING_STRATEGY';
  /**
   * DEPRECATED. A smart matching experiment with search campaigns.
   */
  public const TYPE_SMART_MATCHING = 'SMART_MATCHING';
  /**
   * A custom experiment consisting of hotel campaigns.
   */
  public const TYPE_HOTEL_CUSTOM = 'HOTEL_CUSTOM';
  protected $collection_key = 'goals';
  /**
   * The description of the experiment. It must have a minimum length of 1 and
   * maximum length of 2048.
   *
   * @var string
   */
  public $description;
  /**
   * Date when the experiment ends. By default, the experiment ends on the
   * campaign's end date. If this field is set, then the experiment ends at the
   * end of the specified date in the customer's time zone. Format: YYYY-MM-DD
   * Example: 2019-04-18
   *
   * @var string
   */
  public $endDate;
  /**
   * Output only. The ID of the experiment. Read only.
   *
   * @var string
   */
  public $experimentId;
  protected $goalsType = GoogleAdsSearchads360V23CommonMetricGoal::class;
  protected $goalsDataType = 'array';
  /**
   * Output only. The resource name of the long-running operation that can be
   * used to poll for completion of experiment schedule or promote. The most
   * recent long running operation is returned.
   *
   * @var string
   */
  public $longRunningOperation;
  /**
   * Required. The name of the experiment. It must have a minimum length of 1
   * and maximum length of 1024. It must be unique under a customer.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The status of the experiment promotion process.
   *
   * @var string
   */
  public $promoteStatus;
  /**
   * Immutable. The resource name of the experiment. Experiment resource names
   * have the form: `customers/{customer_id}/experiments/{experiment_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Date when the experiment starts. By default, the experiment starts now or
   * on the campaign's start date, whichever is later. If this field is set,
   * then the experiment starts at the beginning of the specified date in the
   * customer's time zone. Format: YYYY-MM-DD Example: 2019-03-14
   *
   * @var string
   */
  public $startDate;
  /**
   * The Advertiser-chosen status of this experiment.
   *
   * @var string
   */
  public $status;
  /**
   * For system managed experiments, the advertiser must provide a suffix during
   * construction, in the setup stage before moving to initiated. The suffix
   * will be appended to the in-design and experiment campaign names so that the
   * name is base campaign name + suffix.
   *
   * @var string
   */
  public $suffix;
  /**
   * Immutable. Set to true if changes to base campaigns should be synced to the
   * trial campaigns. Any changes made directly to trial campaigns will be
   * preserved. This field can only be set when the experiment is being created.
   *
   * @var bool
   */
  public $syncEnabled;
  /**
   * Required. The product/feature that uses this experiment.
   *
   * @var string
   */
  public $type;

  /**
   * The description of the experiment. It must have a minimum length of 1 and
   * maximum length of 2048.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Date when the experiment ends. By default, the experiment ends on the
   * campaign's end date. If this field is set, then the experiment ends at the
   * end of the specified date in the customer's time zone. Format: YYYY-MM-DD
   * Example: 2019-04-18
   *
   * @param string $endDate
   */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return string
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * Output only. The ID of the experiment. Read only.
   *
   * @param string $experimentId
   */
  public function setExperimentId($experimentId)
  {
    $this->experimentId = $experimentId;
  }
  /**
   * @return string
   */
  public function getExperimentId()
  {
    return $this->experimentId;
  }
  /**
   * The goals of this experiment.
   *
   * @param GoogleAdsSearchads360V23CommonMetricGoal[] $goals
   */
  public function setGoals($goals)
  {
    $this->goals = $goals;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMetricGoal[]
   */
  public function getGoals()
  {
    return $this->goals;
  }
  /**
   * Output only. The resource name of the long-running operation that can be
   * used to poll for completion of experiment schedule or promote. The most
   * recent long running operation is returned.
   *
   * @param string $longRunningOperation
   */
  public function setLongRunningOperation($longRunningOperation)
  {
    $this->longRunningOperation = $longRunningOperation;
  }
  /**
   * @return string
   */
  public function getLongRunningOperation()
  {
    return $this->longRunningOperation;
  }
  /**
   * Required. The name of the experiment. It must have a minimum length of 1
   * and maximum length of 1024. It must be unique under a customer.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The status of the experiment promotion process.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOT_STARTED, IN_PROGRESS, COMPLETED,
   * FAILED, COMPLETED_WITH_WARNING
   *
   * @param self::PROMOTE_STATUS_* $promoteStatus
   */
  public function setPromoteStatus($promoteStatus)
  {
    $this->promoteStatus = $promoteStatus;
  }
  /**
   * @return self::PROMOTE_STATUS_*
   */
  public function getPromoteStatus()
  {
    return $this->promoteStatus;
  }
  /**
   * Immutable. The resource name of the experiment. Experiment resource names
   * have the form: `customers/{customer_id}/experiments/{experiment_id}`
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
   * Date when the experiment starts. By default, the experiment starts now or
   * on the campaign's start date, whichever is later. If this field is set,
   * then the experiment starts at the beginning of the specified date in the
   * customer's time zone. Format: YYYY-MM-DD Example: 2019-03-14
   *
   * @param string $startDate
   */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return string
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /**
   * The Advertiser-chosen status of this experiment.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED, HALTED, PROMOTED,
   * SETUP, INITIATED, GRADUATED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * For system managed experiments, the advertiser must provide a suffix during
   * construction, in the setup stage before moving to initiated. The suffix
   * will be appended to the in-design and experiment campaign names so that the
   * name is base campaign name + suffix.
   *
   * @param string $suffix
   */
  public function setSuffix($suffix)
  {
    $this->suffix = $suffix;
  }
  /**
   * @return string
   */
  public function getSuffix()
  {
    return $this->suffix;
  }
  /**
   * Immutable. Set to true if changes to base campaigns should be synced to the
   * trial campaigns. Any changes made directly to trial campaigns will be
   * preserved. This field can only be set when the experiment is being created.
   *
   * @param bool $syncEnabled
   */
  public function setSyncEnabled($syncEnabled)
  {
    $this->syncEnabled = $syncEnabled;
  }
  /**
   * @return bool
   */
  public function getSyncEnabled()
  {
    return $this->syncEnabled;
  }
  /**
   * Required. The product/feature that uses this experiment.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DISPLAY_AND_VIDEO_360, AD_VARIATION,
   * YOUTUBE_CUSTOM, DISPLAY_CUSTOM, SEARCH_CUSTOM,
   * DISPLAY_AUTOMATED_BIDDING_STRATEGY, SEARCH_AUTOMATED_BIDDING_STRATEGY,
   * SHOPPING_AUTOMATED_BIDDING_STRATEGY, SMART_MATCHING, HOTEL_CUSTOM
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesExperiment::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesExperiment');
