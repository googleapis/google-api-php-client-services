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

class GoogleCloudAiplatformV1OnlineEvaluator extends \Google\Collection
{
  /**
   * Default value.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Indicates that the OnlineEvaluator is active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Indicates that the OnlineEvaluator is suspended. In this state, the
   * OnlineEvaluator will not evaluate any samples.
   */
  public const STATE_SUSPENDED = 'SUSPENDED';
  /**
   * Indicates that the OnlineEvaluator is in a failed state. This can happen
   * if, for example, the `log_view` or `trace_view` set on the
   * `CloudObservability` does not exist.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Indicates that the OnlineEvaluator is in a warning state. This can happen
   * if, for example, some of the metrics in the `metric_sources` are invalid.
   * Evaluation will still run with the remaining valid metrics.
   */
  public const STATE_WARNING = 'WARNING';
  protected $collection_key = 'stateDetails';
  /**
   * Required. Immutable. The name of the agent that the OnlineEvaluator
   * evaluates periodically. This value is used to filter the traces with a
   * matching cloud.resource_id and link the evaluation results with relevant
   * dashboards/UIs. This field is immutable. Once set, it cannot be changed.
   *
   * @var string
   */
  public $agentResource;
  protected $cloudObservabilityType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservability::class;
  protected $cloudObservabilityDataType = '';
  protected $configType = GoogleCloudAiplatformV1OnlineEvaluatorConfig::class;
  protected $configDataType = '';
  /**
   * Output only. Timestamp when the OnlineEvaluator was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Human-readable name for the `OnlineEvaluator`. The name doesn't
   * have to be unique. The name can consist of any UTF-8 characters. The
   * maximum length is `63` characters. If the display name exceeds max
   * characters, an `INVALID_ARGUMENT` error is returned.
   *
   * @var string
   */
  public $displayName;
  protected $metricSourcesType = GoogleCloudAiplatformV1MetricSource::class;
  protected $metricSourcesDataType = 'array';
  /**
   * Identifier. The resource name of the OnlineEvaluator. Format:
   * projects/{project}/locations/{location}/onlineEvaluators/{id}.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The state of the OnlineEvaluator.
   *
   * @var string
   */
  public $state;
  protected $stateDetailsType = GoogleCloudAiplatformV1OnlineEvaluatorStateDetails::class;
  protected $stateDetailsDataType = 'array';
  /**
   * Output only. Timestamp when the OnlineEvaluator was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. Immutable. The name of the agent that the OnlineEvaluator
   * evaluates periodically. This value is used to filter the traces with a
   * matching cloud.resource_id and link the evaluation results with relevant
   * dashboards/UIs. This field is immutable. Once set, it cannot be changed.
   *
   * @param string $agentResource
   */
  public function setAgentResource($agentResource)
  {
    $this->agentResource = $agentResource;
  }
  /**
   * @return string
   */
  public function getAgentResource()
  {
    return $this->agentResource;
  }
  /**
   * Data source for the OnlineEvaluator, based on Google Cloud Observability
   * stack (Cloud Trace & Cloud Logging).
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservability $cloudObservability
   */
  public function setCloudObservability(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservability $cloudObservability)
  {
    $this->cloudObservability = $cloudObservability;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservability
   */
  public function getCloudObservability()
  {
    return $this->cloudObservability;
  }
  /**
   * Required. Configuration for the OnlineEvaluator.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorConfig $config
   */
  public function setConfig(GoogleCloudAiplatformV1OnlineEvaluatorConfig $config)
  {
    $this->config = $config;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorConfig
   */
  public function getConfig()
  {
    return $this->config;
  }
  /**
   * Output only. Timestamp when the OnlineEvaluator was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Human-readable name for the `OnlineEvaluator`. The name doesn't
   * have to be unique. The name can consist of any UTF-8 characters. The
   * maximum length is `63` characters. If the display name exceeds max
   * characters, an `INVALID_ARGUMENT` error is returned.
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
   * Required. A list of metric sources to be used for evaluating samples. At
   * least one MetricSource must be provided. Right now, only predefined metrics
   * and registered metrics are supported. Every registered metric must have
   * `display_name` (or `title`) and `score_range` defined. Otherwise, the
   * evaluations will fail. The maximum number of `metric_sources` is 25.
   *
   * @param GoogleCloudAiplatformV1MetricSource[] $metricSources
   */
  public function setMetricSources($metricSources)
  {
    $this->metricSources = $metricSources;
  }
  /**
   * @return GoogleCloudAiplatformV1MetricSource[]
   */
  public function getMetricSources()
  {
    return $this->metricSources;
  }
  /**
   * Identifier. The resource name of the OnlineEvaluator. Format:
   * projects/{project}/locations/{location}/onlineEvaluators/{id}.
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
   * Output only. The state of the OnlineEvaluator.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVE, SUSPENDED, FAILED, WARNING
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
  /**
   * Output only. Contains additional information about the state of the
   * OnlineEvaluator. This is used to provide more details in the event of a
   * failure.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorStateDetails[] $stateDetails
   */
  public function setStateDetails($stateDetails)
  {
    $this->stateDetails = $stateDetails;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorStateDetails[]
   */
  public function getStateDetails()
  {
    return $this->stateDetails;
  }
  /**
   * Output only. Timestamp when the OnlineEvaluator was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1OnlineEvaluator::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1OnlineEvaluator');
