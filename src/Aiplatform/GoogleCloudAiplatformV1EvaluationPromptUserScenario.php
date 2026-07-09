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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1EvaluationPromptUserScenario extends \Google\Model
{
  /**
   * Required. The plan for the conversation, used to drive the multi-turn agent
   * run and generate the simulated agent evaluation dataset.
   *
   * @var string
   */
  public $conversationPlan;
  /**
   * Required. The prompt that starts the conversation between the simulated
   * user and the agent under test.
   *
   * @var string
   */
  public $startingPrompt;

  /**
   * Required. The plan for the conversation, used to drive the multi-turn agent
   * run and generate the simulated agent evaluation dataset.
   *
   * @param string $conversationPlan
   */
  public function setConversationPlan($conversationPlan)
  {
    $this->conversationPlan = $conversationPlan;
  }
  /**
   * @return string
   */
  public function getConversationPlan()
  {
    return $this->conversationPlan;
  }
  /**
   * Required. The prompt that starts the conversation between the simulated
   * user and the agent under test.
   *
   * @param string $startingPrompt
   */
  public function setStartingPrompt($startingPrompt)
  {
    $this->startingPrompt = $startingPrompt;
  }
  /**
   * @return string
   */
  public function getStartingPrompt()
  {
    return $this->startingPrompt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationPromptUserScenario::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationPromptUserScenario');
