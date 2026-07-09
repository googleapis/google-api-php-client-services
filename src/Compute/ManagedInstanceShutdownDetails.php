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

class ManagedInstanceShutdownDetails extends \Google\Model
{
  protected $maxDurationType = Duration::class;
  protected $maxDurationDataType = '';
  /**
   * Output only. Past timestamp indicating the beginning of `PENDING_STOP`
   * state of instance in RFC3339 text format.
   *
   * @var string
   */
  public $requestTimestamp;

  /**
   * Output only. The duration for graceful shutdown. Only applicable when the
   * instance is in `PENDING_STOP` state.
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
  /**
   * Output only. Past timestamp indicating the beginning of `PENDING_STOP`
   * state of instance in RFC3339 text format.
   *
   * @param string $requestTimestamp
   */
  public function setRequestTimestamp($requestTimestamp)
  {
    $this->requestTimestamp = $requestTimestamp;
  }
  /**
   * @return string
   */
  public function getRequestTimestamp()
  {
    return $this->requestTimestamp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ManagedInstanceShutdownDetails::class, 'Google_Service_Compute_ManagedInstanceShutdownDetails');
