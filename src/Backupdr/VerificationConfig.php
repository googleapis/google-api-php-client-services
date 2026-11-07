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

namespace Google\Service\Backupdr;

class VerificationConfig extends \Google\Model
{
  /**
   * Cloud Run job action to execute. Format:
   * `projects/{project}/locations/{location}/jobs/{job}`
   *
   * @var string
   */
  public $cloudRunJob;
  /**
   * Optional. The `timeout` for this phase. If set, the `timeout` must be
   * positive and less than or equal to 24 hours (86400s).
   *
   * @var string
   */
  public $timeout;

  /**
   * Cloud Run job action to execute. Format:
   * `projects/{project}/locations/{location}/jobs/{job}`
   *
   * @param string $cloudRunJob
   */
  public function setCloudRunJob($cloudRunJob)
  {
    $this->cloudRunJob = $cloudRunJob;
  }
  /**
   * @return string
   */
  public function getCloudRunJob()
  {
    return $this->cloudRunJob;
  }
  /**
   * Optional. The `timeout` for this phase. If set, the `timeout` must be
   * positive and less than or equal to 24 hours (86400s).
   *
   * @param string $timeout
   */
  public function setTimeout($timeout)
  {
    $this->timeout = $timeout;
  }
  /**
   * @return string
   */
  public function getTimeout()
  {
    return $this->timeout;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VerificationConfig::class, 'Google_Service_Backupdr_VerificationConfig');
