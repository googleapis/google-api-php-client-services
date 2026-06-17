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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatus extends \Google\Collection
{
  /**
   * Unspecified update type.
   */
  public const UPDATE_TYPE_UPDATE_TYPE_UNSPECIFIED = 'UPDATE_TYPE_UNSPECIFIED';
  /**
   * Configurable billing was created/enabled.
   */
  public const UPDATE_TYPE_CREATE = 'CREATE';
  /**
   * Configurable billing was deleted/disabled.
   */
  public const UPDATE_TYPE_DELETE = 'DELETE';
  /**
   * Subscription was scaled up (thresholds increased).
   */
  public const UPDATE_TYPE_SCALE_UP = 'SCALE_UP';
  /**
   * Subscription was scaled down (thresholds decreased).
   */
  public const UPDATE_TYPE_SCALE_DOWN = 'SCALE_DOWN';
  protected $collection_key = 'agentSearchTokenSubscriptionStatuses';
  protected $agentSearchTokenSubscriptionStatusesType = GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatusAgentSearchTokenSubscriptionStatus::class;
  protected $agentSearchTokenSubscriptionStatusesDataType = 'array';
  /**
   * Optional. The currently effective Indexing Core threshold. This is the
   * threshold against which Indexing Core usage is compared for overage
   * calculations.
   *
   * @var string
   */
  public $effectiveIndexingCoreThreshold;
  /**
   * Optional. The currently effective Search QPM threshold in queries per
   * minute. This is the threshold against which QPM usage is compared for
   * overage calculations.
   *
   * @var string
   */
  public $effectiveSearchQpmThreshold;
  /**
   * Output only. The earliest next update time for the indexing core
   * subscription threshold. This is based on the next_update_time returned by
   * the underlying Cloud Billing Subscription V3 API. This field is populated
   * only if an update indexing core subscription threshold request is
   * succeeded.
   *
   * @var string
   */
  public $indexingCoreThresholdNextUpdateTime;
  /**
   * Output only. The earliest next update time for the search QPM subscription
   * threshold. This is based on the next_update_time returned by the underlying
   * Cloud Billing Subscription V3 API. This field is populated only if an
   * update QPM subscription threshold request is succeeded.
   *
   * @var string
   */
  public $searchQpmThresholdNextUpdateTime;
  /**
   * Optional. The start time of the currently active billing subscription.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The latest terminate effective time of search qpm and indexing
   * core subscriptions.
   *
   * @var string
   */
  public $terminateTime;
  /**
   * Output only. The type of update performed in this operation. This field is
   * populated in the response of UpdateProject.
   *
   * @var string
   */
  public $updateType;

  /**
   * Output only. Per-model Agent Search TPM subscription status.
   *
   * @param GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatusAgentSearchTokenSubscriptionStatus[] $agentSearchTokenSubscriptionStatuses
   */
  public function setAgentSearchTokenSubscriptionStatuses($agentSearchTokenSubscriptionStatuses)
  {
    $this->agentSearchTokenSubscriptionStatuses = $agentSearchTokenSubscriptionStatuses;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatusAgentSearchTokenSubscriptionStatus[]
   */
  public function getAgentSearchTokenSubscriptionStatuses()
  {
    return $this->agentSearchTokenSubscriptionStatuses;
  }
  /**
   * Optional. The currently effective Indexing Core threshold. This is the
   * threshold against which Indexing Core usage is compared for overage
   * calculations.
   *
   * @param string $effectiveIndexingCoreThreshold
   */
  public function setEffectiveIndexingCoreThreshold($effectiveIndexingCoreThreshold)
  {
    $this->effectiveIndexingCoreThreshold = $effectiveIndexingCoreThreshold;
  }
  /**
   * @return string
   */
  public function getEffectiveIndexingCoreThreshold()
  {
    return $this->effectiveIndexingCoreThreshold;
  }
  /**
   * Optional. The currently effective Search QPM threshold in queries per
   * minute. This is the threshold against which QPM usage is compared for
   * overage calculations.
   *
   * @param string $effectiveSearchQpmThreshold
   */
  public function setEffectiveSearchQpmThreshold($effectiveSearchQpmThreshold)
  {
    $this->effectiveSearchQpmThreshold = $effectiveSearchQpmThreshold;
  }
  /**
   * @return string
   */
  public function getEffectiveSearchQpmThreshold()
  {
    return $this->effectiveSearchQpmThreshold;
  }
  /**
   * Output only. The earliest next update time for the indexing core
   * subscription threshold. This is based on the next_update_time returned by
   * the underlying Cloud Billing Subscription V3 API. This field is populated
   * only if an update indexing core subscription threshold request is
   * succeeded.
   *
   * @param string $indexingCoreThresholdNextUpdateTime
   */
  public function setIndexingCoreThresholdNextUpdateTime($indexingCoreThresholdNextUpdateTime)
  {
    $this->indexingCoreThresholdNextUpdateTime = $indexingCoreThresholdNextUpdateTime;
  }
  /**
   * @return string
   */
  public function getIndexingCoreThresholdNextUpdateTime()
  {
    return $this->indexingCoreThresholdNextUpdateTime;
  }
  /**
   * Output only. The earliest next update time for the search QPM subscription
   * threshold. This is based on the next_update_time returned by the underlying
   * Cloud Billing Subscription V3 API. This field is populated only if an
   * update QPM subscription threshold request is succeeded.
   *
   * @param string $searchQpmThresholdNextUpdateTime
   */
  public function setSearchQpmThresholdNextUpdateTime($searchQpmThresholdNextUpdateTime)
  {
    $this->searchQpmThresholdNextUpdateTime = $searchQpmThresholdNextUpdateTime;
  }
  /**
   * @return string
   */
  public function getSearchQpmThresholdNextUpdateTime()
  {
    return $this->searchQpmThresholdNextUpdateTime;
  }
  /**
   * Optional. The start time of the currently active billing subscription.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Output only. The latest terminate effective time of search qpm and indexing
   * core subscriptions.
   *
   * @param string $terminateTime
   */
  public function setTerminateTime($terminateTime)
  {
    $this->terminateTime = $terminateTime;
  }
  /**
   * @return string
   */
  public function getTerminateTime()
  {
    return $this->terminateTime;
  }
  /**
   * Output only. The type of update performed in this operation. This field is
   * populated in the response of UpdateProject.
   *
   * Accepted values: UPDATE_TYPE_UNSPECIFIED, CREATE, DELETE, SCALE_UP,
   * SCALE_DOWN
   *
   * @param self::UPDATE_TYPE_* $updateType
   */
  public function setUpdateType($updateType)
  {
    $this->updateType = $updateType;
  }
  /**
   * @return self::UPDATE_TYPE_*
   */
  public function getUpdateType()
  {
    return $this->updateType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatus::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatus');
