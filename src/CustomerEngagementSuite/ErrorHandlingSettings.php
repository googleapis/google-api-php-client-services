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

namespace Google\Service\CustomerEngagementSuite;

class ErrorHandlingSettings extends \Google\Model
{
  /**
   * Unspecified error handling strategy.
   */
  public const ERROR_HANDLING_STRATEGY_ERROR_HANDLING_STRATEGY_UNSPECIFIED = 'ERROR_HANDLING_STRATEGY_UNSPECIFIED';
  /**
   * No specific handling is enabled.
   */
  public const ERROR_HANDLING_STRATEGY_NONE = 'NONE';
  /**
   * A fallback message will be returned to the user in case of system errors
   * (e.g. LLM errors).
   */
  public const ERROR_HANDLING_STRATEGY_FALLBACK_RESPONSE = 'FALLBACK_RESPONSE';
  /**
   * An EndSession signal will be emitted in case of system errors (e.g. LLM
   * errors).
   */
  public const ERROR_HANDLING_STRATEGY_END_SESSION = 'END_SESSION';
  /**
   * Optional. The strategy to use for error handling.
   *
   * @var string
   */
  public $errorHandlingStrategy;

  /**
   * Optional. The strategy to use for error handling.
   *
   * Accepted values: ERROR_HANDLING_STRATEGY_UNSPECIFIED, NONE,
   * FALLBACK_RESPONSE, END_SESSION
   *
   * @param self::ERROR_HANDLING_STRATEGY_* $errorHandlingStrategy
   */
  public function setErrorHandlingStrategy($errorHandlingStrategy)
  {
    $this->errorHandlingStrategy = $errorHandlingStrategy;
  }
  /**
   * @return self::ERROR_HANDLING_STRATEGY_*
   */
  public function getErrorHandlingStrategy()
  {
    return $this->errorHandlingStrategy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ErrorHandlingSettings::class, 'Google_Service_CustomerEngagementSuite_ErrorHandlingSettings');
