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

class AutoscalingConfig extends \Google\Model
{
  /**
   * Optional. Whether or not autoscaling is enabled for this service.
   *
   * @var bool
   */
  public $autoscalingEnabled;
  /**
   * Output only. The scaling factor of a service with autoscaling enabled.
   *
   * @var float
   */
  public $autoscalingFactor;
  protected $limitConfigType = LimitConfig::class;
  protected $limitConfigDataType = '';

  /**
   * Optional. Whether or not autoscaling is enabled for this service.
   *
   * @param bool $autoscalingEnabled
   */
  public function setAutoscalingEnabled($autoscalingEnabled)
  {
    $this->autoscalingEnabled = $autoscalingEnabled;
  }
  /**
   * @return bool
   */
  public function getAutoscalingEnabled()
  {
    return $this->autoscalingEnabled;
  }
  /**
   * Output only. The scaling factor of a service with autoscaling enabled.
   *
   * @param float $autoscalingFactor
   */
  public function setAutoscalingFactor($autoscalingFactor)
  {
    $this->autoscalingFactor = $autoscalingFactor;
  }
  /**
   * @return float
   */
  public function getAutoscalingFactor()
  {
    return $this->autoscalingFactor;
  }
  /**
   * Optional. The LimitConfig of the service.
   *
   * @param LimitConfig $limitConfig
   */
  public function setLimitConfig(LimitConfig $limitConfig)
  {
    $this->limitConfig = $limitConfig;
  }
  /**
   * @return LimitConfig
   */
  public function getLimitConfig()
  {
    return $this->limitConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AutoscalingConfig::class, 'Google_Service_DataprocMetastore_AutoscalingConfig');
