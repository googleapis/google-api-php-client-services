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

namespace Google\Service\DeviceRun;

class CancelSessionResponse extends \Google\Model
{
  /**
   * Unspecified cancel result.
   */
  public const CANCEL_RESULT_CANCEL_RESULT_UNSPECIFIED = 'CANCEL_RESULT_UNSPECIFIED';
  /**
   * The session is marked as cancelled, but has not finished yet.
   */
  public const CANCEL_RESULT_SESSION_MARKED_AS_CANCELLED = 'SESSION_MARKED_AS_CANCELLED';
  /**
   * The session is finished, either by itself or by the cancel request.
   */
  public const CANCEL_RESULT_SESSION_FINISHED = 'SESSION_FINISHED';
  /**
   * The result of the request.
   *
   * @var string
   */
  public $cancelResult;

  /**
   * The result of the request.
   *
   * Accepted values: CANCEL_RESULT_UNSPECIFIED, SESSION_MARKED_AS_CANCELLED,
   * SESSION_FINISHED
   *
   * @param self::CANCEL_RESULT_* $cancelResult
   */
  public function setCancelResult($cancelResult)
  {
    $this->cancelResult = $cancelResult;
  }
  /**
   * @return self::CANCEL_RESULT_*
   */
  public function getCancelResult()
  {
    return $this->cancelResult;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CancelSessionResponse::class, 'Google_Service_DeviceRun_CancelSessionResponse');
