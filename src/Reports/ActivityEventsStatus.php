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

namespace Google\Service\Reports;

class ActivityEventsStatus extends \Google\Model
{
  /**
   * Error code of the event. Note: Field can be empty.
   *
   * @var string
   */
  public $errorCode;
  /**
   * Error message of the event. Note: Field can be empty.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * * Status of the event. Possible values if not empty: - UNKNOWN_EVENT_STATUS
   * - SUCCEEDED - SUCCEEDED_WITH_WARNINGS - FAILED - SKIPPED
   *
   * @var string
   */
  public $eventStatus;
  /**
   * Status code of the event. Note: Field can be empty.
   *
   * @var int
   */
  public $httpStatusCode;

  /**
   * Error code of the event. Note: Field can be empty.
   *
   * @param string $errorCode
   */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /**
   * @return string
   */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /**
   * Error message of the event. Note: Field can be empty.
   *
   * @param string $errorMessage
   */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /**
   * @return string
   */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /**
   * * Status of the event. Possible values if not empty: - UNKNOWN_EVENT_STATUS
   * - SUCCEEDED - SUCCEEDED_WITH_WARNINGS - FAILED - SKIPPED
   *
   * @param string $eventStatus
   */
  public function setEventStatus($eventStatus)
  {
    $this->eventStatus = $eventStatus;
  }
  /**
   * @return string
   */
  public function getEventStatus()
  {
    return $this->eventStatus;
  }
  /**
   * Status code of the event. Note: Field can be empty.
   *
   * @param int $httpStatusCode
   */
  public function setHttpStatusCode($httpStatusCode)
  {
    $this->httpStatusCode = $httpStatusCode;
  }
  /**
   * @return int
   */
  public function getHttpStatusCode()
  {
    return $this->httpStatusCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActivityEventsStatus::class, 'Google_Service_Reports_ActivityEventsStatus');
