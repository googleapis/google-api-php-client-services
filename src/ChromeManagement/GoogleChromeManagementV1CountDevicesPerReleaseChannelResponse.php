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

namespace Google\Service\ChromeManagement;

class GoogleChromeManagementV1CountDevicesPerReleaseChannelResponse extends \Google\Model
{
  /**
   * @var string
   */
  public $betaChannelCount;
  /**
   * @var string
   */
  public $canaryChannelCount;
  /**
   * @var string
   */
  public $devChannelCount;
  /**
   * @var string
   */
  public $ltcChannelCount;
  /**
   * @var string
   */
  public $ltsChannelCount;
  /**
   * @var string
   */
  public $stableChannelCount;
  /**
   * @var string
   */
  public $unreportedChannelCount;
  /**
   * @var string
   */
  public $unsupportedChannelCount;

  /**
   * @param string
   */
  public function setBetaChannelCount($betaChannelCount)
  {
    $this->betaChannelCount = $betaChannelCount;
  }
  /**
   * @return string
   */
  public function getBetaChannelCount()
  {
    return $this->betaChannelCount;
  }
  /**
   * @param string
   */
  public function setCanaryChannelCount($canaryChannelCount)
  {
    $this->canaryChannelCount = $canaryChannelCount;
  }
  /**
   * @return string
   */
  public function getCanaryChannelCount()
  {
    return $this->canaryChannelCount;
  }
  /**
   * @param string
   */
  public function setDevChannelCount($devChannelCount)
  {
    $this->devChannelCount = $devChannelCount;
  }
  /**
   * @return string
   */
  public function getDevChannelCount()
  {
    return $this->devChannelCount;
  }
  /**
   * @param string
   */
  public function setLtcChannelCount($ltcChannelCount)
  {
    $this->ltcChannelCount = $ltcChannelCount;
  }
  /**
   * @return string
   */
  public function getLtcChannelCount()
  {
    return $this->ltcChannelCount;
  }
  /**
   * @param string
   */
  public function setLtsChannelCount($ltsChannelCount)
  {
    $this->ltsChannelCount = $ltsChannelCount;
  }
  /**
   * @return string
   */
  public function getLtsChannelCount()
  {
    return $this->ltsChannelCount;
  }
  /**
   * @param string
   */
  public function setStableChannelCount($stableChannelCount)
  {
    $this->stableChannelCount = $stableChannelCount;
  }
  /**
   * @return string
   */
  public function getStableChannelCount()
  {
    return $this->stableChannelCount;
  }
  /**
   * @param string
   */
  public function setUnreportedChannelCount($unreportedChannelCount)
  {
    $this->unreportedChannelCount = $unreportedChannelCount;
  }
  /**
   * @return string
   */
  public function getUnreportedChannelCount()
  {
    return $this->unreportedChannelCount;
  }
  /**
   * @param string
   */
  public function setUnsupportedChannelCount($unsupportedChannelCount)
  {
    $this->unsupportedChannelCount = $unsupportedChannelCount;
  }
  /**
   * @return string
   */
  public function getUnsupportedChannelCount()
  {
    return $this->unsupportedChannelCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementV1CountDevicesPerReleaseChannelResponse::class, 'Google_Service_ChromeManagement_GoogleChromeManagementV1CountDevicesPerReleaseChannelResponse');
