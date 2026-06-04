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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesUploadUserDataResponse extends \Google\Model
{
  /**
   * Number of upload data operations received by API.
   *
   * @var int
   */
  public $receivedOperationsCount;
  /**
   * The date time at which the request was received by API, formatted as "yyyy-
   * mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @var string
   */
  public $uploadDateTime;

  /**
   * Number of upload data operations received by API.
   *
   * @param int $receivedOperationsCount
   */
  public function setReceivedOperationsCount($receivedOperationsCount)
  {
    $this->receivedOperationsCount = $receivedOperationsCount;
  }
  /**
   * @return int
   */
  public function getReceivedOperationsCount()
  {
    return $this->receivedOperationsCount;
  }
  /**
   * The date time at which the request was received by API, formatted as "yyyy-
   * mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
   *
   * @param string $uploadDateTime
   */
  public function setUploadDateTime($uploadDateTime)
  {
    $this->uploadDateTime = $uploadDateTime;
  }
  /**
   * @return string
   */
  public function getUploadDateTime()
  {
    return $this->uploadDateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesUploadUserDataResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUploadUserDataResponse');
