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

namespace Google\Service\WebContentPublisher;

class CheckProgramAccessResponse extends \Google\Model
{
  /**
   * Status is unspecified.
   */
  public const STATUS_PROGRAM_ACCESS_STATUS_UNSPECIFIED = 'PROGRAM_ACCESS_STATUS_UNSPECIFIED';
  /**
   * The reader has active program access.
   */
  public const STATUS_HAS_ACCESS = 'HAS_ACCESS';
  /**
   * The reader does not have active program access.
   */
  public const STATUS_NO_ACCESS = 'NO_ACCESS';
  /**
   * The program access quota or meter has been exhausted.
   */
  public const STATUS_CAP_EXHAUSTED = 'CAP_EXHAUSTED';
  /**
   * The entitlement access status.
   *
   * @var string
   */
  public $status;

  /**
   * The entitlement access status.
   *
   * Accepted values: PROGRAM_ACCESS_STATUS_UNSPECIFIED, HAS_ACCESS, NO_ACCESS,
   * CAP_EXHAUSTED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CheckProgramAccessResponse::class, 'Google_Service_WebContentPublisher_CheckProgramAccessResponse');
