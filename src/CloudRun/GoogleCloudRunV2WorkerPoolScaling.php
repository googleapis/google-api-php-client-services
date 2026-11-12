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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2WorkerPoolScaling extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const SCALING_MODE_SCALING_MODE_UNSPECIFIED = 'SCALING_MODE_UNSPECIFIED';
  /**
   * Automatically scale between min and max instances.
   */
  public const SCALING_MODE_AUTOMATIC = 'AUTOMATIC';
  /**
   * Scale to manual instance count.
   */
  public const SCALING_MODE_MANUAL = 'MANUAL';
  protected $cpuScalingType = GoogleCloudRunV2CpuScaling::class;
  protected $cpuScalingDataType = '';
  /**
   * Optional. The total number of instances in manual scaling mode.
   *
   * @var int
   */
  public $manualInstanceCount;
  /**
   * Optional. The maximum count of instances distributed among revisions based
   * on the specified instance split percentages.
   *
   * @var int
   */
  public $maxInstanceCount;
  /**
   * Optional. The minimum count of instances distributed among revisions based
   * on the specified instance split percentages.
   *
   * @var int
   */
  public $minInstanceCount;
  /**
   * Optional. The scaling mode for the worker pool.
   *
   * @var string
   */
  public $scalingMode;

  /**
   * Optional. The CPU scaling settings for the worker pool.
   *
   * @param GoogleCloudRunV2CpuScaling $cpuScaling
   */
  public function setCpuScaling(GoogleCloudRunV2CpuScaling $cpuScaling)
  {
    $this->cpuScaling = $cpuScaling;
  }
  /**
   * @return GoogleCloudRunV2CpuScaling
   */
  public function getCpuScaling()
  {
    return $this->cpuScaling;
  }
  /**
   * Optional. The total number of instances in manual scaling mode.
   *
   * @param int $manualInstanceCount
   */
  public function setManualInstanceCount($manualInstanceCount)
  {
    $this->manualInstanceCount = $manualInstanceCount;
  }
  /**
   * @return int
   */
  public function getManualInstanceCount()
  {
    return $this->manualInstanceCount;
  }
  /**
   * Optional. The maximum count of instances distributed among revisions based
   * on the specified instance split percentages.
   *
   * @param int $maxInstanceCount
   */
  public function setMaxInstanceCount($maxInstanceCount)
  {
    $this->maxInstanceCount = $maxInstanceCount;
  }
  /**
   * @return int
   */
  public function getMaxInstanceCount()
  {
    return $this->maxInstanceCount;
  }
  /**
   * Optional. The minimum count of instances distributed among revisions based
   * on the specified instance split percentages.
   *
   * @param int $minInstanceCount
   */
  public function setMinInstanceCount($minInstanceCount)
  {
    $this->minInstanceCount = $minInstanceCount;
  }
  /**
   * @return int
   */
  public function getMinInstanceCount()
  {
    return $this->minInstanceCount;
  }
  /**
   * Optional. The scaling mode for the worker pool.
   *
   * Accepted values: SCALING_MODE_UNSPECIFIED, AUTOMATIC, MANUAL
   *
   * @param self::SCALING_MODE_* $scalingMode
   */
  public function setScalingMode($scalingMode)
  {
    $this->scalingMode = $scalingMode;
  }
  /**
   * @return self::SCALING_MODE_*
   */
  public function getScalingMode()
  {
    return $this->scalingMode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2WorkerPoolScaling::class, 'Google_Service_CloudRun_GoogleCloudRunV2WorkerPoolScaling');
