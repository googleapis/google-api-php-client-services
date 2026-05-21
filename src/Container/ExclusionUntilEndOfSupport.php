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

class ExclusionUntilEndOfSupport extends \Google\Model
{
  /**
   * Optional. Indicates whether the exclusion is enabled.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Output only. The end time of the maintenance exclusion. It is output only.
   * It is the cluster control plane version's end of support time, or end of
   * extended support time when the cluster is on extended support channel.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The start time of the maintenance exclusion. It is output
   * only. It is the exclusion creation time.
   *
   * @var string
   */
  public $startTime;

  /**
   * Optional. Indicates whether the exclusion is enabled.
   *
   * @param bool $enabled
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
   * Output only. The end time of the maintenance exclusion. It is output only.
   * It is the cluster control plane version's end of support time, or end of
   * extended support time when the cluster is on extended support channel.
   *
   * @param string $endTime
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
   * Output only. The start time of the maintenance exclusion. It is output
   * only. It is the exclusion creation time.
   *
   * @param string $startTime
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExclusionUntilEndOfSupport::class, 'Google_Service_Container_ExclusionUntilEndOfSupport');
