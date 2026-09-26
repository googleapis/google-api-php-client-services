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

class AssistantConfirmationResponse extends \Google\Model
{
  /**
   * The chosen option's submit_text, or free-form user text. The paused action
   * is cancelled and the text is handed to the agent to act on.
   *
   * @var string
   */
  public $answerText;
  /**
   * The AssistantConfirmationRequest.confirmation_id being answered.
   *
   * @var string
   */
  public $confirmationId;
  /**
   * Binary answer: true approves the paused action, false declines it.
   *
   * @var bool
   */
  public $confirmed;

  /**
   * The chosen option's submit_text, or free-form user text. The paused action
   * is cancelled and the text is handed to the agent to act on.
   *
   * @param string $answerText
   */
  public function setAnswerText($answerText)
  {
    $this->answerText = $answerText;
  }
  /**
   * @return string
   */
  public function getAnswerText()
  {
    return $this->answerText;
  }
  /**
   * The AssistantConfirmationRequest.confirmation_id being answered.
   *
   * @param string $confirmationId
   */
  public function setConfirmationId($confirmationId)
  {
    $this->confirmationId = $confirmationId;
  }
  /**
   * @return string
   */
  public function getConfirmationId()
  {
    return $this->confirmationId;
  }
  /**
   * Binary answer: true approves the paused action, false declines it.
   *
   * @param bool $confirmed
   */
  public function setConfirmed($confirmed)
  {
    $this->confirmed = $confirmed;
  }
  /**
   * @return bool
   */
  public function getConfirmed()
  {
    return $this->confirmed;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantConfirmationResponse::class, 'Google_Service_CustomerEngagementSuite_AssistantConfirmationResponse');
