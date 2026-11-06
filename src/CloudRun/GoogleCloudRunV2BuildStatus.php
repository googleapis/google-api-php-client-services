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

namespace Google\Service\CloudRun;

class GoogleCloudRunV2BuildStatus extends \Google\Model
{
  /**
   * The log URL for the Cloud Build execution.
   *
   * @var string
   */
  public $cloudBuildLogUrl;
  /**
   * The message details of the build.
   *
   * @var string
   */
  public $message;
  /**
   * The status of the build.
   *
   * @var string
   */
  public $status;

  /**
   * The log URL for the Cloud Build execution.
   *
   * @param string $cloudBuildLogUrl
   */
  public function setCloudBuildLogUrl($cloudBuildLogUrl)
  {
    $this->cloudBuildLogUrl = $cloudBuildLogUrl;
  }
  /**
   * @return string
   */
  public function getCloudBuildLogUrl()
  {
    return $this->cloudBuildLogUrl;
  }
  /**
   * The message details of the build.
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * The status of the build.
   *
   * @param string $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRunV2BuildStatus::class, 'Google_Service_CloudRun_GoogleCloudRunV2BuildStatus');
