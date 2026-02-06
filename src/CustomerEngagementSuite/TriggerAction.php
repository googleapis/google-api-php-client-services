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

class TriggerAction extends \Google\Model
{
  protected $generativeAnswerType = TriggerActionGenerativeAnswer::class;
  protected $generativeAnswerDataType = '';
  protected $respondImmediatelyType = TriggerActionRespondImmediately::class;
  protected $respondImmediatelyDataType = '';
  protected $transferAgentType = TriggerActionTransferAgent::class;
  protected $transferAgentDataType = '';

  /**
   * Optional. Respond with a generative answer.
   *
   * @param TriggerActionGenerativeAnswer $generativeAnswer
   */
  public function setGenerativeAnswer(TriggerActionGenerativeAnswer $generativeAnswer)
  {
    $this->generativeAnswer = $generativeAnswer;
  }
  /**
   * @return TriggerActionGenerativeAnswer
   */
  public function getGenerativeAnswer()
  {
    return $this->generativeAnswer;
  }
  /**
   * Optional. Immediately respond with a preconfigured response.
   *
   * @param TriggerActionRespondImmediately $respondImmediately
   */
  public function setRespondImmediately(TriggerActionRespondImmediately $respondImmediately)
  {
    $this->respondImmediately = $respondImmediately;
  }
  /**
   * @return TriggerActionRespondImmediately
   */
  public function getRespondImmediately()
  {
    return $this->respondImmediately;
  }
  /**
   * Optional. Transfer the conversation to a different agent.
   *
   * @param TriggerActionTransferAgent $transferAgent
   */
  public function setTransferAgent(TriggerActionTransferAgent $transferAgent)
  {
    $this->transferAgent = $transferAgent;
  }
  /**
   * @return TriggerActionTransferAgent
   */
  public function getTransferAgent()
  {
    return $this->transferAgent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TriggerAction::class, 'Google_Service_CustomerEngagementSuite_TriggerAction');
