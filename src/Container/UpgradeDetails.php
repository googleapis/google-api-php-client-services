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

namespace Google\Service\Container;

class UpgradeDetails extends \Google\Model
{
  /**
   * @var string
   */
  public $endTime;
  /**
   * @var string
   */
  public $initialVersion;
  /**
   * @var string
   */
  public $startTime;
  /**
   * @var string
   */
  public $startType;
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $targetVersion;

  /**
   * @param string
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * @param string
   */
  public function setInitialVersion($initialVersion)
  {
    $this->initialVersion = $initialVersion;
  }
  /**
   * @return string
   */
  public function getInitialVersion()
  {
    return $this->initialVersion;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setStartType($startType)
  {
    $this->startType = $startType;
  }
  /**
   * @return string
   */
  public function getStartType()
  {
    return $this->startType;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string
   */
  public function setTargetVersion($targetVersion)
  {
    $this->targetVersion = $targetVersion;
  }
  /**
   * @return string
   */
  public function getTargetVersion()
  {
    return $this->targetVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpgradeDetails::class, 'Google_Service_Container_UpgradeDetails');
