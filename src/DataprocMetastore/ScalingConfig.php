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

namespace Google\Service\DataprocMetastore;

class ScalingConfig extends \Google\Model
{
  /**
   * Unspecified instance size
   */
  public const INSTANCE_SIZE_INSTANCE_SIZE_UNSPECIFIED = 'INSTANCE_SIZE_UNSPECIFIED';
  /**
   * Extra small instance size, maps to a scaling factor of 0.1.
   */
  public const INSTANCE_SIZE_EXTRA_SMALL = 'EXTRA_SMALL';
  /**
   * Small instance size, maps to a scaling factor of 0.5.
   */
  public const INSTANCE_SIZE_SMALL = 'SMALL';
  /**
   * Medium instance size, maps to a scaling factor of 1.0.
   */
  public const INSTANCE_SIZE_MEDIUM = 'MEDIUM';
  /**
   * Large instance size, maps to a scaling factor of 3.0.
   */
  public const INSTANCE_SIZE_LARGE = 'LARGE';
  /**
   * Extra large instance size, maps to a scaling factor of 6.0.
   */
  public const INSTANCE_SIZE_EXTRA_LARGE = 'EXTRA_LARGE';
  protected $autoscalingConfigType = AutoscalingConfig::class;
  protected $autoscalingConfigDataType = '';
  /**
   * An enum of readable instance sizes, with each instance size mapping to a
   * float value (e.g. InstanceSize.EXTRA_SMALL = scaling_factor(0.1))
   *
   * @var string
   */
  public $instanceSize;
  /**
   * Scaling factor, increments of 0.1 for values less than 1.0, and increments
   * of 1.0 for values greater than 1.0.
   *
   * @var float
   */
  public $scalingFactor;

  /**
   * Optional. The autoscaling configuration.
   *
   * @param AutoscalingConfig $autoscalingConfig
   */
  public function setAutoscalingConfig(AutoscalingConfig $autoscalingConfig)
  {
    $this->autoscalingConfig = $autoscalingConfig;
  }
  /**
   * @return AutoscalingConfig
   */
  public function getAutoscalingConfig()
  {
    return $this->autoscalingConfig;
  }
  /**
   * An enum of readable instance sizes, with each instance size mapping to a
   * float value (e.g. InstanceSize.EXTRA_SMALL = scaling_factor(0.1))
   *
   * Accepted values: INSTANCE_SIZE_UNSPECIFIED, EXTRA_SMALL, SMALL, MEDIUM,
   * LARGE, EXTRA_LARGE
   *
   * @param self::INSTANCE_SIZE_* $instanceSize
   */
  public function setInstanceSize($instanceSize)
  {
    $this->instanceSize = $instanceSize;
  }
  /**
   * @return self::INSTANCE_SIZE_*
   */
  public function getInstanceSize()
  {
    return $this->instanceSize;
  }
  /**
   * Scaling factor, increments of 0.1 for values less than 1.0, and increments
   * of 1.0 for values greater than 1.0.
   *
   * @param float $scalingFactor
   */
  public function setScalingFactor($scalingFactor)
  {
    $this->scalingFactor = $scalingFactor;
  }
  /**
   * @return float
   */
  public function getScalingFactor()
  {
    return $this->scalingFactor;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScalingConfig::class, 'Google_Service_DataprocMetastore_ScalingConfig');
