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

namespace Google\Service\HomeGraphService;

class ReportStateAndNotificationResponse extends \Google\Model
{
  protected $deviceResultsType = Result::class;
  protected $deviceResultsDataType = 'map';
  /**
   * Request ID copied from ReportStateAndNotificationRequest.
   *
   * @var string
   */
  public $requestId;

  /**
   * Map from agent device ID to the result of reporting state and
   * notifications. This is only populated for UDDM updates for now.
   *
   * @param Result[] $deviceResults
   */
  public function setDeviceResults($deviceResults)
  {
    $this->deviceResults = $deviceResults;
  }
  /**
   * @return Result[]
   */
  public function getDeviceResults()
  {
    return $this->deviceResults;
  }
  /**
   * Request ID copied from ReportStateAndNotificationRequest.
   *
   * @param string $requestId
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportStateAndNotificationResponse::class, 'Google_Service_HomeGraphService_ReportStateAndNotificationResponse');
