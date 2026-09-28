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

class Result extends \Google\Model
{
  /**
   * Unknown result type.
   */
  public const RESULT_TYPE_RESULT_TYPE_UNSPECIFIED = 'RESULT_TYPE_UNSPECIFIED';
  /**
   * Finished and passed.
   */
  public const RESULT_TYPE_PASSED = 'PASSED';
  /**
   * Finished but failed. It is usually caused by the user config, problematic
   * test cases, or real bugs of their apps/platform under test.
   */
  public const RESULT_TYPE_FAILED = 'FAILED';
  /**
   * Unclassified error, can be caused by user config/tests/AUT, infra, or the
   * tools that the infra is depending on.
   */
  public const RESULT_TYPE_ERROR = 'ERROR';
  /**
   * Test timeout.
   */
  public const RESULT_TYPE_TIMED_OUT = 'TIMED_OUT';
  /**
   * Test is aborted by user.
   */
  public const RESULT_TYPE_CANCELLED = 'CANCELLED';
  protected $causeType = ResultCause::class;
  protected $causeDataType = '';
  /**
   * Output only. The result type of the session/job/execution.
   *
   * @var string
   */
  public $resultType;

  /**
   * Output only. Detailed result cause diagnostics. Set if type is not PASSED.
   *
   * @param ResultCause $cause
   */
  public function setCause(ResultCause $cause)
  {
    $this->cause = $cause;
  }
  /**
   * @return ResultCause
   */
  public function getCause()
  {
    return $this->cause;
  }
  /**
   * Output only. The result type of the session/job/execution.
   *
   * Accepted values: RESULT_TYPE_UNSPECIFIED, PASSED, FAILED, ERROR, TIMED_OUT,
   * CANCELLED
   *
   * @param self::RESULT_TYPE_* $resultType
   */
  public function setResultType($resultType)
  {
    $this->resultType = $resultType;
  }
  /**
   * @return self::RESULT_TYPE_*
   */
  public function getResultType()
  {
    return $this->resultType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, 'Google_Service_DeviceRun_Result');
