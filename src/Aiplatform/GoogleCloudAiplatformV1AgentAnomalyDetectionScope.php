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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1AgentAnomalyDetectionScope extends \Google\Collection
{
  /**
   * The default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The scope is being created and is not yet usable.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The scope is active and usable.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The scope is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * Creation or deletion failed. The scope is not usable and must be deleted
   * before a new scope can be created in the same region.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The scope is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  protected $collection_key = 'observabilityBuckets';
  /**
   * Optional. When `true`, newly discovered agents that share log and
   * observability buckets with this scope are automatically enrolled as
   * `ACTIVE` MonitoredAgents, up to the project's monitored agent quota. When
   * `false`, newly discovered agents are added as `DISABLED` MonitoredAgents,
   * and you must enable them explicitly through MonitoredAgent operations.
   *
   * @var bool
   */
  public $autoEnroll;
  /**
   * Optional. User-provided display name of the AgentAnomalyDetectionScope.
   *
   * @var string
   */
  public $displayName;
  protected $encryptionSpecType = GoogleCloudAiplatformV1EncryptionSpec::class;
  protected $encryptionSpecDataType = '';
  /**
   * Required. Customer-owned Cloud Logging bucket resource names attached to
   * this scope. Specify exactly one bucket, in the same project as this scope.
   * Format: `projects/{project}/locations/{location}/buckets/{bucket}`.
   *
   * @var string[]
   */
  public $logBuckets;
  /**
   * Identifier. The resource name of the AgentAnomalyDetectionScope. Format: `p
   * rojects/{project}/locations/{location}/agentAnomalyDetectionScopes/{agent_a
   * nomaly_detection_scope}`
   *
   * @var string
   */
  public $name;
  /**
   * Required. Customer-owned Cloud Observability datasets attached to this
   * scope. Each value is the resource name of a dataset in an Observability
   * bucket, such as the `Spans` dataset in the `_Trace` bucket. Specify exactly
   * one dataset, in the same project as this scope. Format: `projects/{project}
   * /locations/{location}/buckets/{bucket}/datasets/{dataset}`.
   *
   * @var string[]
   */
  public $observabilityBuckets;
  /**
   * Output only. The lifecycle state of the scope.
   *
   * @var string
   */
  public $state;

  /**
   * Optional. When `true`, newly discovered agents that share log and
   * observability buckets with this scope are automatically enrolled as
   * `ACTIVE` MonitoredAgents, up to the project's monitored agent quota. When
   * `false`, newly discovered agents are added as `DISABLED` MonitoredAgents,
   * and you must enable them explicitly through MonitoredAgent operations.
   *
   * @param bool $autoEnroll
   */
  public function setAutoEnroll($autoEnroll)
  {
    $this->autoEnroll = $autoEnroll;
  }
  /**
   * @return bool
   */
  public function getAutoEnroll()
  {
    return $this->autoEnroll;
  }
  /**
   * Optional. User-provided display name of the AgentAnomalyDetectionScope.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Immutable. Specifies the customer-managed encryption key spec for
   * a Scope. If set, this Scope and all sub-resources will be secured by this
   * key. The key is immutable after the Scope is created and must be a multi-
   * region (`us` or `eu`) key in the same region as the Scope.
   *
   * @param GoogleCloudAiplatformV1EncryptionSpec $encryptionSpec
   */
  public function setEncryptionSpec(GoogleCloudAiplatformV1EncryptionSpec $encryptionSpec)
  {
    $this->encryptionSpec = $encryptionSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1EncryptionSpec
   */
  public function getEncryptionSpec()
  {
    return $this->encryptionSpec;
  }
  /**
   * Required. Customer-owned Cloud Logging bucket resource names attached to
   * this scope. Specify exactly one bucket, in the same project as this scope.
   * Format: `projects/{project}/locations/{location}/buckets/{bucket}`.
   *
   * @param string[] $logBuckets
   */
  public function setLogBuckets($logBuckets)
  {
    $this->logBuckets = $logBuckets;
  }
  /**
   * @return string[]
   */
  public function getLogBuckets()
  {
    return $this->logBuckets;
  }
  /**
   * Identifier. The resource name of the AgentAnomalyDetectionScope. Format: `p
   * rojects/{project}/locations/{location}/agentAnomalyDetectionScopes/{agent_a
   * nomaly_detection_scope}`
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
   * Required. Customer-owned Cloud Observability datasets attached to this
   * scope. Each value is the resource name of a dataset in an Observability
   * bucket, such as the `Spans` dataset in the `_Trace` bucket. Specify exactly
   * one dataset, in the same project as this scope. Format: `projects/{project}
   * /locations/{location}/buckets/{bucket}/datasets/{dataset}`.
   *
   * @param string[] $observabilityBuckets
   */
  public function setObservabilityBuckets($observabilityBuckets)
  {
    $this->observabilityBuckets = $observabilityBuckets;
  }
  /**
   * @return string[]
   */
  public function getObservabilityBuckets()
  {
    return $this->observabilityBuckets;
  }
  /**
   * Output only. The lifecycle state of the scope.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, DELETING, FAILED,
   * UPDATING
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentAnomalyDetectionScope::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentAnomalyDetectionScope');
