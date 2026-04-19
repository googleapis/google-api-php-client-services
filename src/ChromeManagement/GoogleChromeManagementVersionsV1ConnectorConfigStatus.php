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

class GoogleChromeManagementVersionsV1ConnectorConfigStatus extends \Google\Model
{
  /**
   * Default value.
   */
  public const STATE_CONFIG_STATE_UNKNOWN = 'CONFIG_STATE_UNKNOWN';
  /**
   * The connector config is enabled.
   */
  public const STATE_ENABLED = 'ENABLED';
  /**
   * The connector config is transiently disabled due to failures.
   */
  public const STATE_DISABLED_BY_FAILURES = 'DISABLED_BY_FAILURES';
  /**
   * Output only. Field recording time of the earliest failure since the last
   * success event. This field is only set when the state is
   * `DISABLED_BY_FAILURES`.
   *
   * @var string
   */
  public $failureStartTime;
  /**
   * Output only. The state of the connector config. The connector state is
   * disabled if the connector has not successfully sent an event in the last 24
   * hours.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Field recording time of most recent modification of the
   * status. For ENABLED, this is the time the status was changed to ENABLED.
   * For DISABLED_BY_FAILURES, this is the time of the most recent failed
   * attempt to send an event to this config.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Field recording time of the earliest failure since the last
   * success event. This field is only set when the state is
   * `DISABLED_BY_FAILURES`.
   *
   * @param string $failureStartTime
   */
  public function setFailureStartTime($failureStartTime)
  {
    $this->failureStartTime = $failureStartTime;
  }
  /**
   * @return string
   */
  public function getFailureStartTime()
  {
    return $this->failureStartTime;
  }
  /**
   * Output only. The state of the connector config. The connector state is
   * disabled if the connector has not successfully sent an event in the last 24
   * hours.
   *
   * Accepted values: CONFIG_STATE_UNKNOWN, ENABLED, DISABLED_BY_FAILURES
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Field recording time of most recent modification of the
   * status. For ENABLED, this is the time the status was changed to ENABLED.
   * For DISABLED_BY_FAILURES, this is the time of the most recent failed
   * attempt to send an event to this config.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleChromeManagementVersionsV1ConnectorConfigStatus::class, 'Google_Service_ChromeManagement_GoogleChromeManagementVersionsV1ConnectorConfigStatus');
