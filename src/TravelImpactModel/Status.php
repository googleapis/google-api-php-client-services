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

namespace Google\Service\TravelImpactModel;

class Status extends \Google\Collection
{
  protected $collection_key = 'details';
  /**
   * The numeric status code corresponding to a `google.rpc.Code` enum value: *
   * `3` (`INVALID_ARGUMENT`): Input error (for example, a missing or invalid
   * airport or carrier code). * `5` (`NOT_FOUND`): No emission estimates
   * matched the requested inputs.
   *
   * @var int
   */
  public $code;
  /**
   * Additional structured error details, when available.
   *
   * @var array[]
   */
  public $details;
  /**
   * A human-readable error message in English describing why emission estimates
   * could not be returned for the requested item.
   *
   * @var string
   */
  public $message;

  /**
   * The numeric status code corresponding to a `google.rpc.Code` enum value: *
   * `3` (`INVALID_ARGUMENT`): Input error (for example, a missing or invalid
   * airport or carrier code). * `5` (`NOT_FOUND`): No emission estimates
   * matched the requested inputs.
   *
   * @param int $code
   */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /**
   * @return int
   */
  public function getCode()
  {
    return $this->code;
  }
  /**
   * Additional structured error details, when available.
   *
   * @param array[] $details
   */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /**
   * @return array[]
   */
  public function getDetails()
  {
    return $this->details;
  }
  /**
   * A human-readable error message in English describing why emission estimates
   * could not be returned for the requested item.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, 'Google_Service_TravelImpactModel_Status');
