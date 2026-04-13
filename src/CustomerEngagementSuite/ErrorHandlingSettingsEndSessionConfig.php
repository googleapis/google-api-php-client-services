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

class ErrorHandlingSettingsEndSessionConfig extends \Google\Model
{
  /**
   * Optional. Whether to escalate the session in EndSession. If session is
   * escalated, metadata in EndSession will contain `session_escalated = true`.
   * See https://docs.cloud.google.com/customer-engagement-ai/conversational-
   * agents/ps/deploy/google-telephony-platform#transfer_a_call_to_a_human_agent
   * for details.
   *
   * @var bool
   */
  public $escalateSession;

  /**
   * Optional. Whether to escalate the session in EndSession. If session is
   * escalated, metadata in EndSession will contain `session_escalated = true`.
   * See https://docs.cloud.google.com/customer-engagement-ai/conversational-
   * agents/ps/deploy/google-telephony-platform#transfer_a_call_to_a_human_agent
   * for details.
   *
   * @param bool $escalateSession
   */
  public function setEscalateSession($escalateSession)
  {
    $this->escalateSession = $escalateSession;
  }
  /**
   * @return bool
   */
  public function getEscalateSession()
  {
    return $this->escalateSession;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ErrorHandlingSettingsEndSessionConfig::class, 'Google_Service_CustomerEngagementSuite_ErrorHandlingSettingsEndSessionConfig');
