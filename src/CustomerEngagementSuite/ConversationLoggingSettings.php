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

class ConversationLoggingSettings extends \Google\Model
{
  /**
   * Optional. Whether to disable conversation logging for the sessions.
   *
   * @var bool
   */
  public $disableConversationLogging;
  /**
   * Optional. Controls the retention window for the conversation. If not set,
   * the conversation will be retained for 365 days.
   *
   * @var string
   */
  public $retentionWindow;

  /**
   * Optional. Whether to disable conversation logging for the sessions.
   *
   * @param bool $disableConversationLogging
   */
  public function setDisableConversationLogging($disableConversationLogging)
  {
    $this->disableConversationLogging = $disableConversationLogging;
  }
  /**
   * @return bool
   */
  public function getDisableConversationLogging()
  {
    return $this->disableConversationLogging;
  }
  /**
   * Optional. Controls the retention window for the conversation. If not set,
   * the conversation will be retained for 365 days.
   *
   * @param string $retentionWindow
   */
  public function setRetentionWindow($retentionWindow)
  {
    $this->retentionWindow = $retentionWindow;
  }
  /**
   * @return string
   */
  public function getRetentionWindow()
  {
    return $this->retentionWindow;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversationLoggingSettings::class, 'Google_Service_CustomerEngagementSuite_ConversationLoggingSettings');
