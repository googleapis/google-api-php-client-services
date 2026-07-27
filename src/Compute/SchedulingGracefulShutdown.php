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

namespace Google\Service\Compute;

class SchedulingGracefulShutdown extends \Google\Model
{
  /**
   * Opts-in for graceful shutdown.
   *
   * @var bool
   */
  public $enabled;
  protected $maxDurationType = Duration::class;
  protected $maxDurationDataType = '';

  /**
   * Opts-in for graceful shutdown.
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
   * The time allotted for the instance to gracefully shut down. If the graceful
   * shutdown isn't complete after this time, then the instance transitions to
   * the STOPPING state.
   *
   * @param Duration $maxDuration
   */
  public function setMaxDuration(Duration $maxDuration)
  {
    $this->maxDuration = $maxDuration;
  }
  /**
   * @return Duration
   */
  public function getMaxDuration()
  {
    return $this->maxDuration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SchedulingGracefulShutdown::class, 'Google_Service_Compute_SchedulingGracefulShutdown');
