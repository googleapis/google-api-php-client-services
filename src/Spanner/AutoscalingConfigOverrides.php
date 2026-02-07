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

namespace Google\Service\Spanner;

class AutoscalingConfigOverrides extends \Google\Model
{
  protected $autoscalingLimitsType = AutoscalingLimits::class;
  protected $autoscalingLimitsDataType = '';
  /**
   * Optional. If specified, overrides the autoscaling target
   * high_priority_cpu_utilization_percent in the top-level autoscaling
   * configuration for the selected replicas.
   *
   * @var int
   */
  public $autoscalingTargetHighPriorityCpuUtilizationPercent;
  /**
   * Optional. If specified, overrides the autoscaling target
   * `total_cpu_utilization_percent` in the top-level autoscaling configuration
   * for the selected replicas.
   *
   * @var int
   */
  public $autoscalingTargetTotalCpuUtilizationPercent;
  /**
   * Optional. If true, disables high priority CPU autoscaling for the selected
   * replicas and ignores high_priority_cpu_utilization_percent in the top-level
   * autoscaling configuration. When setting this field to true, setting
   * autoscaling_target_high_priority_cpu_utilization_percent field to a non-
   * zero value for the same replica is not supported. If false, the
   * autoscaling_target_high_priority_cpu_utilization_percent field in the
   * replica will be used if set to a non-zero value. Otherwise, the
   * high_priority_cpu_utilization_percent field in the top-level autoscaling
   * configuration will be used. Setting both
   * disable_high_priority_cpu_autoscaling and disable_total_cpu_autoscaling to
   * true for the same replica is not supported.
   *
   * @var bool
   */
  public $disableHighPriorityCpuAutoscaling;
  /**
   * Optional. If true, disables total CPU autoscaling for the selected replicas
   * and ignores total_cpu_utilization_percent in the top-level autoscaling
   * configuration. When setting this field to true, setting
   * autoscaling_target_total_cpu_utilization_percent field to a non-zero value
   * for the same replica is not supported. If false, the
   * autoscaling_target_total_cpu_utilization_percent field in the replica will
   * be used if set to a non-zero value. Otherwise, the
   * total_cpu_utilization_percent field in the top-level autoscaling
   * configuration will be used. Setting both
   * disable_high_priority_cpu_autoscaling and disable_total_cpu_autoscaling to
   * true for the same replica is not supported.
   *
   * @var bool
   */
  public $disableTotalCpuAutoscaling;

  /**
   * Optional. If specified, overrides the min/max limit in the top-level
   * autoscaling configuration for the selected replicas.
   *
   * @param AutoscalingLimits $autoscalingLimits
   */
  public function setAutoscalingLimits(AutoscalingLimits $autoscalingLimits)
  {
    $this->autoscalingLimits = $autoscalingLimits;
  }
  /**
   * @return AutoscalingLimits
   */
  public function getAutoscalingLimits()
  {
    return $this->autoscalingLimits;
  }
  /**
   * Optional. If specified, overrides the autoscaling target
   * high_priority_cpu_utilization_percent in the top-level autoscaling
   * configuration for the selected replicas.
   *
   * @param int $autoscalingTargetHighPriorityCpuUtilizationPercent
   */
  public function setAutoscalingTargetHighPriorityCpuUtilizationPercent($autoscalingTargetHighPriorityCpuUtilizationPercent)
  {
    $this->autoscalingTargetHighPriorityCpuUtilizationPercent = $autoscalingTargetHighPriorityCpuUtilizationPercent;
  }
  /**
   * @return int
   */
  public function getAutoscalingTargetHighPriorityCpuUtilizationPercent()
  {
    return $this->autoscalingTargetHighPriorityCpuUtilizationPercent;
  }
  /**
   * Optional. If specified, overrides the autoscaling target
   * `total_cpu_utilization_percent` in the top-level autoscaling configuration
   * for the selected replicas.
   *
   * @param int $autoscalingTargetTotalCpuUtilizationPercent
   */
  public function setAutoscalingTargetTotalCpuUtilizationPercent($autoscalingTargetTotalCpuUtilizationPercent)
  {
    $this->autoscalingTargetTotalCpuUtilizationPercent = $autoscalingTargetTotalCpuUtilizationPercent;
  }
  /**
   * @return int
   */
  public function getAutoscalingTargetTotalCpuUtilizationPercent()
  {
    return $this->autoscalingTargetTotalCpuUtilizationPercent;
  }
  /**
   * Optional. If true, disables high priority CPU autoscaling for the selected
   * replicas and ignores high_priority_cpu_utilization_percent in the top-level
   * autoscaling configuration. When setting this field to true, setting
   * autoscaling_target_high_priority_cpu_utilization_percent field to a non-
   * zero value for the same replica is not supported. If false, the
   * autoscaling_target_high_priority_cpu_utilization_percent field in the
   * replica will be used if set to a non-zero value. Otherwise, the
   * high_priority_cpu_utilization_percent field in the top-level autoscaling
   * configuration will be used. Setting both
   * disable_high_priority_cpu_autoscaling and disable_total_cpu_autoscaling to
   * true for the same replica is not supported.
   *
   * @param bool $disableHighPriorityCpuAutoscaling
   */
  public function setDisableHighPriorityCpuAutoscaling($disableHighPriorityCpuAutoscaling)
  {
    $this->disableHighPriorityCpuAutoscaling = $disableHighPriorityCpuAutoscaling;
  }
  /**
   * @return bool
   */
  public function getDisableHighPriorityCpuAutoscaling()
  {
    return $this->disableHighPriorityCpuAutoscaling;
  }
  /**
   * Optional. If true, disables total CPU autoscaling for the selected replicas
   * and ignores total_cpu_utilization_percent in the top-level autoscaling
   * configuration. When setting this field to true, setting
   * autoscaling_target_total_cpu_utilization_percent field to a non-zero value
   * for the same replica is not supported. If false, the
   * autoscaling_target_total_cpu_utilization_percent field in the replica will
   * be used if set to a non-zero value. Otherwise, the
   * total_cpu_utilization_percent field in the top-level autoscaling
   * configuration will be used. Setting both
   * disable_high_priority_cpu_autoscaling and disable_total_cpu_autoscaling to
   * true for the same replica is not supported.
   *
   * @param bool $disableTotalCpuAutoscaling
   */
  public function setDisableTotalCpuAutoscaling($disableTotalCpuAutoscaling)
  {
    $this->disableTotalCpuAutoscaling = $disableTotalCpuAutoscaling;
  }
  /**
   * @return bool
   */
  public function getDisableTotalCpuAutoscaling()
  {
    return $this->disableTotalCpuAutoscaling;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutoscalingConfigOverrides::class, 'Google_Service_Spanner_AutoscalingConfigOverrides');
