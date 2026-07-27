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

class ResourceStatusShutdownDetails extends \Google\Model
{
  /**
   * The instance is gracefully shutting down.
   */
  public const STOP_STATE_PENDING_STOP = 'PENDING_STOP';
  /**
   * The instance is stopping.
   */
  public const STOP_STATE_STOPPING = 'STOPPING';
  /**
   * The instance will be deleted.
   */
  public const TARGET_STATE_DELETED = 'DELETED';
  /**
   * The instance will be stopped.
   */
  public const TARGET_STATE_STOPPED = 'STOPPED';
  protected $maxDurationType = Duration::class;
  protected $maxDurationDataType = '';
  /**
   * Past timestamp indicating the beginning of current `stopState` in RFC3339
   * text format.
   *
   * @var string
   */
  public $requestTimestamp;
  /**
   * Current stopping state of the instance.
   *
   * @var string
   */
  public $stopState;
  /**
   * Target instance state.
   *
   * @var string
   */
  public $targetState;

  /**
   * The duration for graceful shutdown. Only applicable when
   * `stop_state=PENDING_STOP`.
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
   * Past timestamp indicating the beginning of current `stopState` in RFC3339
   * text format.
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
  /**
   * Current stopping state of the instance.
   *
   * Accepted values: PENDING_STOP, STOPPING
   *
   * @param self::STOP_STATE_* $stopState
   */
  public function setStopState($stopState)
  {
    $this->stopState = $stopState;
  }
  /**
   * @return self::STOP_STATE_*
   */
  public function getStopState()
  {
    return $this->stopState;
  }
  /**
   * Target instance state.
   *
   * Accepted values: DELETED, STOPPED
   *
   * @param self::TARGET_STATE_* $targetState
   */
  public function setTargetState($targetState)
  {
    $this->targetState = $targetState;
  }
  /**
   * @return self::TARGET_STATE_*
   */
  public function getTargetState()
  {
    return $this->targetState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceStatusShutdownDetails::class, 'Google_Service_Compute_ResourceStatusShutdownDetails');
