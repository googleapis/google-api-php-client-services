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

namespace Google\Service\Contentwarehouse;

class AssistantGroundingRankerDeviceTargetingFeaturesStates extends \Google\Model
{
  /**
   * @var string
   */
  public $distance;
  /**
   * @var bool
   */
  public $isDocked;
  /**
   * @var bool
   */
  public $isLocal;
  /**
   * @var bool
   */
  public $isLocked;
  /**
   * @var bool
   */
  public $isTethered;

  /**
   * @param string
   */
  public function setDistance($distance)
  {
    $this->distance = $distance;
  }
  /**
   * @return string
   */
  public function getDistance()
  {
    return $this->distance;
  }
  /**
   * @param bool
   */
  public function setIsDocked($isDocked)
  {
    $this->isDocked = $isDocked;
  }
  /**
   * @return bool
   */
  public function getIsDocked()
  {
    return $this->isDocked;
  }
  /**
   * @param bool
   */
  public function setIsLocal($isLocal)
  {
    $this->isLocal = $isLocal;
  }
  /**
   * @return bool
   */
  public function getIsLocal()
  {
    return $this->isLocal;
  }
  /**
   * @param bool
   */
  public function setIsLocked($isLocked)
  {
    $this->isLocked = $isLocked;
  }
  /**
   * @return bool
   */
  public function getIsLocked()
  {
    return $this->isLocked;
  }
  /**
   * @param bool
   */
  public function setIsTethered($isTethered)
  {
    $this->isTethered = $isTethered;
  }
  /**
   * @return bool
   */
  public function getIsTethered()
  {
    return $this->isTethered;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantGroundingRankerDeviceTargetingFeaturesStates::class, 'Google_Service_Contentwarehouse_AssistantGroundingRankerDeviceTargetingFeaturesStates');
