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

class GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatusAgentSearchTokenSubscriptionStatus extends \Google\Model
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
  /**
   * Output only. The currently effective TPM threshold. Reflects scale-up
   * immediately and scale-down at the next billing cycle, matching
   * `effective_search_qpm_threshold` semantics.
   *
   * @var string
   */
  public $effectiveTpmThreshold;
  /**
   * Output only. The Gemini model version this status corresponds to. Matches
   * CoreSubscription.AgentSearchTokenSubscription.model_version (a stable
   * Gemini model version from the Gemini Enterprise Agent Platform model-
   * versions registry; see https://docs.cloud.google.com/gemini-enterprise-
   * agent-platform/models/model-versions#gemini-models).
   *
   * @var string
   */
  public $modelVersion;
  /**
   * Output only. When this (project, model_version) Agent Search TPM
   * subscription was first activated. Set once on first activation of this
   * model version and never moved by subsequent threshold updates; on
   * termination + re-activation a new value is recorded. Does NOT move the
   * whole-relationship `start_time` on the enclosing ConfigurableBillingStatus,
   * which continues to represent the first activation of the overall customer-
   * configurable-pricing relationship.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. If set, the scheduled effective time at which this (project,
   * model_version) Agent Search TPM subscription will terminate. Populated when
   * the customer removes this entry from
   * `core_subscription.agent_search_token_subscriptions[*]`. Does NOT move the
   * whole-relationship `terminate_time` on the enclosing
   * ConfigurableBillingStatus, which is populated only when the entire
   * customer-configurable-pricing relationship is being torn down.
   *
   * @var string
   */
  public $terminateTime;
  /**
   * Output only. The earliest next update time for the TPM subscription
   * threshold for this (project, model_version). Populated only after a
   * successful update.
   *
   * @var string
   */
  public $tpmThresholdNextUpdateTime;
  /**
   * Output only. The type of the most recent update to this (project,
   * model_version) subscription, as performed by the most recent UpdateProject
   * call. `UPDATE_TYPE_UNSPECIFIED` indicates this model_version was not
   * touched by the most recent UpdateProject (its `effective_tpm_threshold`
   * reflects an earlier update). The whole-relationship `update_type` on the
   * enclosing ConfigurableBillingStatus continues to summarize the direction of
   * the most recent update across all surfaces in the project (QPM,
   * IndexingCore, and Agent Search TPM together).
   *
   * @var string
   */
  public $updateType;

  /**
   * Output only. The currently effective TPM threshold. Reflects scale-up
   * immediately and scale-down at the next billing cycle, matching
   * `effective_search_qpm_threshold` semantics.
   *
   * @param string $effectiveTpmThreshold
   */
  public function setEffectiveTpmThreshold($effectiveTpmThreshold)
  {
    $this->effectiveTpmThreshold = $effectiveTpmThreshold;
  }
  /**
   * @return string
   */
  public function getEffectiveTpmThreshold()
  {
    return $this->effectiveTpmThreshold;
  }
  /**
   * Output only. The Gemini model version this status corresponds to. Matches
   * CoreSubscription.AgentSearchTokenSubscription.model_version (a stable
   * Gemini model version from the Gemini Enterprise Agent Platform model-
   * versions registry; see https://docs.cloud.google.com/gemini-enterprise-
   * agent-platform/models/model-versions#gemini-models).
   *
   * @param string $modelVersion
   */
  public function setModelVersion($modelVersion)
  {
    $this->modelVersion = $modelVersion;
  }
  /**
   * @return string
   */
  public function getModelVersion()
  {
    return $this->modelVersion;
  }
  /**
   * Output only. When this (project, model_version) Agent Search TPM
   * subscription was first activated. Set once on first activation of this
   * model version and never moved by subsequent threshold updates; on
   * termination + re-activation a new value is recorded. Does NOT move the
   * whole-relationship `start_time` on the enclosing ConfigurableBillingStatus,
   * which continues to represent the first activation of the overall customer-
   * configurable-pricing relationship.
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
   * Output only. If set, the scheduled effective time at which this (project,
   * model_version) Agent Search TPM subscription will terminate. Populated when
   * the customer removes this entry from
   * `core_subscription.agent_search_token_subscriptions[*]`. Does NOT move the
   * whole-relationship `terminate_time` on the enclosing
   * ConfigurableBillingStatus, which is populated only when the entire
   * customer-configurable-pricing relationship is being torn down.
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
   * Output only. The earliest next update time for the TPM subscription
   * threshold for this (project, model_version). Populated only after a
   * successful update.
   *
   * @param string $tpmThresholdNextUpdateTime
   */
  public function setTpmThresholdNextUpdateTime($tpmThresholdNextUpdateTime)
  {
    $this->tpmThresholdNextUpdateTime = $tpmThresholdNextUpdateTime;
  }
  /**
   * @return string
   */
  public function getTpmThresholdNextUpdateTime()
  {
    return $this->tpmThresholdNextUpdateTime;
  }
  /**
   * Output only. The type of the most recent update to this (project,
   * model_version) subscription, as performed by the most recent UpdateProject
   * call. `UPDATE_TYPE_UNSPECIFIED` indicates this model_version was not
   * touched by the most recent UpdateProject (its `effective_tpm_threshold`
   * reflects an earlier update). The whole-relationship `update_type` on the
   * enclosing ConfigurableBillingStatus continues to summarize the direction of
   * the most recent update across all surfaces in the project (QPM,
   * IndexingCore, and Agent Search TPM together).
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
class_alias(GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatusAgentSearchTokenSubscriptionStatus::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaProjectConfigurableBillingStatusAgentSearchTokenSubscriptionStatus');
