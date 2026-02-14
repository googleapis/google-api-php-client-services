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

namespace Google\Service\Dataflow;

class RuntimeUpdatableParams extends \Google\Model
{
  /**
   * Optional. Deprecated: Use `autoscaling_tier` instead. The backlog threshold
   * duration in seconds for autoscaling. Value must be non-negative.
   *
   * @deprecated
   * @var string
   */
  public $acceptableBacklogDuration;
  /**
   * Optional. The backlog threshold tier for autoscaling. Value must be one of
   * "low-latency", "medium-latency", or "high-latency".
   *
   * @var string
   */
  public $autoscalingTier;
  /**
   * The maximum number of workers to cap autoscaling at. This field is
   * currently only supported for Streaming Engine jobs.
   *
   * @var int
   */
  public $maxNumWorkers;
  /**
   * The minimum number of workers to scale down to. This field is currently
   * only supported for Streaming Engine jobs.
   *
   * @var int
   */
  public $minNumWorkers;
  /**
   * Target worker utilization, compared against the aggregate utilization of
   * the worker pool by autoscaler, to determine upscaling and downscaling when
   * absent other constraints such as backlog. For more information, see [Update
   * an existing
   * pipeline](https://cloud.google.com/dataflow/docs/guides/updating-a-
   * pipeline).
   *
   * @var 
   */
  public $workerUtilizationHint;

  /**
   * Optional. Deprecated: Use `autoscaling_tier` instead. The backlog threshold
   * duration in seconds for autoscaling. Value must be non-negative.
   *
   * @deprecated
   * @param string $acceptableBacklogDuration
   */
  public function setAcceptableBacklogDuration($acceptableBacklogDuration)
  {
    $this->acceptableBacklogDuration = $acceptableBacklogDuration;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getAcceptableBacklogDuration()
  {
    return $this->acceptableBacklogDuration;
  }
  /**
   * Optional. The backlog threshold tier for autoscaling. Value must be one of
   * "low-latency", "medium-latency", or "high-latency".
   *
   * @param string $autoscalingTier
   */
  public function setAutoscalingTier($autoscalingTier)
  {
    $this->autoscalingTier = $autoscalingTier;
  }
  /**
   * @return string
   */
  public function getAutoscalingTier()
  {
    return $this->autoscalingTier;
  }
  /**
   * The maximum number of workers to cap autoscaling at. This field is
   * currently only supported for Streaming Engine jobs.
   *
   * @param int $maxNumWorkers
   */
  public function setMaxNumWorkers($maxNumWorkers)
  {
    $this->maxNumWorkers = $maxNumWorkers;
  }
  /**
   * @return int
   */
  public function getMaxNumWorkers()
  {
    return $this->maxNumWorkers;
  }
  /**
   * The minimum number of workers to scale down to. This field is currently
   * only supported for Streaming Engine jobs.
   *
   * @param int $minNumWorkers
   */
  public function setMinNumWorkers($minNumWorkers)
  {
    $this->minNumWorkers = $minNumWorkers;
  }
  /**
   * @return int
   */
  public function getMinNumWorkers()
  {
    return $this->minNumWorkers;
  }
  public function setWorkerUtilizationHint($workerUtilizationHint)
  {
    $this->workerUtilizationHint = $workerUtilizationHint;
  }
  public function getWorkerUtilizationHint()
  {
    return $this->workerUtilizationHint;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RuntimeUpdatableParams::class, 'Google_Service_Dataflow_RuntimeUpdatableParams');
