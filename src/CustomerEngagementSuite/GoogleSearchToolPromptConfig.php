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

class GoogleSearchToolPromptConfig extends \Google\Model
{
  /**
   * Optional. Defines the prompt used for the system instructions when
   * interacting with the agent in chat conversations. If not set, default
   * prompt will be used.
   *
   * @var string
   */
  public $textPrompt;
  /**
   * Optional. Defines the prompt used for the system instructions when
   * interacting with the agent in voice conversations. If not set, default
   * prompt will be used.
   *
   * @var string
   */
  public $voicePrompt;

  /**
   * Optional. Defines the prompt used for the system instructions when
   * interacting with the agent in chat conversations. If not set, default
   * prompt will be used.
   *
   * @param string $textPrompt
   */
  public function setTextPrompt($textPrompt)
  {
    $this->textPrompt = $textPrompt;
  }
  /**
   * @return string
   */
  public function getTextPrompt()
  {
    return $this->textPrompt;
  }
  /**
   * Optional. Defines the prompt used for the system instructions when
   * interacting with the agent in voice conversations. If not set, default
   * prompt will be used.
   *
   * @param string $voicePrompt
   */
  public function setVoicePrompt($voicePrompt)
  {
    $this->voicePrompt = $voicePrompt;
  }
  /**
   * @return string
   */
  public function getVoicePrompt()
  {
    return $this->voicePrompt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleSearchToolPromptConfig::class, 'Google_Service_CustomerEngagementSuite_GoogleSearchToolPromptConfig');
