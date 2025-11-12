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

namespace Google\Service\SQLAdmin;

class ReadPoolAutoScaleConfig extends \Google\Collection
{
  protected $collection_key = 'targetMetrics';
  /**
   * @var bool
   */
  public $disableScaleIn;
  /**
   * @var bool
   */
  public $enabled;
  /**
   * @var int
   */
  public $maxNodeCount;
  /**
   * @var int
   */
  public $minNodeCount;
  /**
   * @var int
   */
  public $scaleInCooldownSeconds;
  /**
   * @var int
   */
  public $scaleOutCooldownSeconds;
  protected $targetMetricsType = TargetMetric::class;
  protected $targetMetricsDataType = 'array';

  /**
   * @param bool
   */
  public function setDisableScaleIn($disableScaleIn)
  {
    $this->disableScaleIn = $disableScaleIn;
  }
  /**
   * @return bool
   */
  public function getDisableScaleIn()
  {
    return $this->disableScaleIn;
  }
  /**
   * @param bool
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * @param int
   */
  public function setMaxNodeCount($maxNodeCount)
  {
    $this->maxNodeCount = $maxNodeCount;
  }
  /**
   * @return int
   */
  public function getMaxNodeCount()
  {
    return $this->maxNodeCount;
  }
  /**
   * @param int
   */
  public function setMinNodeCount($minNodeCount)
  {
    $this->minNodeCount = $minNodeCount;
  }
  /**
   * @return int
   */
  public function getMinNodeCount()
  {
    return $this->minNodeCount;
  }
  /**
   * @param int
   */
  public function setScaleInCooldownSeconds($scaleInCooldownSeconds)
  {
    $this->scaleInCooldownSeconds = $scaleInCooldownSeconds;
  }
  /**
   * @return int
   */
  public function getScaleInCooldownSeconds()
  {
    return $this->scaleInCooldownSeconds;
  }
  /**
   * @param int
   */
  public function setScaleOutCooldownSeconds($scaleOutCooldownSeconds)
  {
    $this->scaleOutCooldownSeconds = $scaleOutCooldownSeconds;
  }
  /**
   * @return int
   */
  public function getScaleOutCooldownSeconds()
  {
    return $this->scaleOutCooldownSeconds;
  }
  /**
   * @param TargetMetric[]
   */
  public function setTargetMetrics($targetMetrics)
  {
    $this->targetMetrics = $targetMetrics;
  }
  /**
   * @return TargetMetric[]
   */
  public function getTargetMetrics()
  {
    return $this->targetMetrics;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadPoolAutoScaleConfig::class, 'Google_Service_SQLAdmin_ReadPoolAutoScaleConfig');
