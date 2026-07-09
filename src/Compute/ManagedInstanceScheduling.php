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

class ManagedInstanceScheduling extends \Google\Model
{
  /**
   * Output only. The timestamp at which the underlying instance will be
   * triggered for graceful shutdown if it is configured. This is in RFC3339
   * text format.
   *
   * @var string
   */
  public $gracefulShutdownTimestamp;
  /**
   * Output only. The timestamp at which the managed instance will be
   * terminated. This is in RFC3339 text format.
   *
   * @var string
   */
  public $terminationTimestamp;

  /**
   * Output only. The timestamp at which the underlying instance will be
   * triggered for graceful shutdown if it is configured. This is in RFC3339
   * text format.
   *
   * @param string $gracefulShutdownTimestamp
   */
  public function setGracefulShutdownTimestamp($gracefulShutdownTimestamp)
  {
    $this->gracefulShutdownTimestamp = $gracefulShutdownTimestamp;
  }
  /**
   * @return string
   */
  public function getGracefulShutdownTimestamp()
  {
    return $this->gracefulShutdownTimestamp;
  }
  /**
   * Output only. The timestamp at which the managed instance will be
   * terminated. This is in RFC3339 text format.
   *
   * @param string $terminationTimestamp
   */
  public function setTerminationTimestamp($terminationTimestamp)
  {
    $this->terminationTimestamp = $terminationTimestamp;
  }
  /**
   * @return string
   */
  public function getTerminationTimestamp()
  {
    return $this->terminationTimestamp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ManagedInstanceScheduling::class, 'Google_Service_Compute_ManagedInstanceScheduling');
