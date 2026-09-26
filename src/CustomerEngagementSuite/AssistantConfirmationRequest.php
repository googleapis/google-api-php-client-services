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

class AssistantConfirmationRequest extends \Google\Collection
{
  protected $collection_key = 'questions';
  /**
   * Display label of the agent that raised the confirmation (e.g. `"Contract
   * Architect"`), for the card header.
   *
   * @var string
   */
  public $agentName;
  /**
   * Identifier correlating this request with its response. Opaque to clients;
   * must be echoed verbatim on the answering request.
   *
   * @var string
   */
  public $confirmationId;
  /**
   * Context describing what is being confirmed (e.g. the action the agent wants
   * to take, or the question it needs answered). Rendered as plain text, not
   * Markdown.
   *
   * @var string
   */
  public $context;
  /**
   * Time after which this confirmation can no longer be answered. An expired
   * card renders as inactive, and the server declines the confirmation on the
   * next turn so the paused agent does not wait indefinitely.
   *
   * @var string
   */
  public $expireTime;
  /**
   * Label for the declining action of a binary confirmation (e.g. "Not yet").
   * Unset when `questions` is populated.
   *
   * @var string
   */
  public $negativeLabel;
  /**
   * Label for the approving action of a binary confirmation (e.g. "Publish").
   * Unset when `questions` is populated.
   *
   * @var string
   */
  public $positiveLabel;
  protected $questionsType = OptionQuestionsChunkQuestion::class;
  protected $questionsDataType = 'array';
  /**
   * Name of the tool call the agent paused on (e.g. "update_app"), for the card
   * header. Unset for pure questions.
   *
   * @var string
   */
  public $tool;

  /**
   * Display label of the agent that raised the confirmation (e.g. `"Contract
   * Architect"`), for the card header.
   *
   * @param string $agentName
   */
  public function setAgentName($agentName)
  {
    $this->agentName = $agentName;
  }
  /**
   * @return string
   */
  public function getAgentName()
  {
    return $this->agentName;
  }
  /**
   * Identifier correlating this request with its response. Opaque to clients;
   * must be echoed verbatim on the answering request.
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
   * Context describing what is being confirmed (e.g. the action the agent wants
   * to take, or the question it needs answered). Rendered as plain text, not
   * Markdown.
   *
   * @param string $context
   */
  public function setContext($context)
  {
    $this->context = $context;
  }
  /**
   * @return string
   */
  public function getContext()
  {
    return $this->context;
  }
  /**
   * Time after which this confirmation can no longer be answered. An expired
   * card renders as inactive, and the server declines the confirmation on the
   * next turn so the paused agent does not wait indefinitely.
   *
   * @param string $expireTime
   */
  public function setExpireTime($expireTime)
  {
    $this->expireTime = $expireTime;
  }
  /**
   * @return string
   */
  public function getExpireTime()
  {
    return $this->expireTime;
  }
  /**
   * Label for the declining action of a binary confirmation (e.g. "Not yet").
   * Unset when `questions` is populated.
   *
   * @param string $negativeLabel
   */
  public function setNegativeLabel($negativeLabel)
  {
    $this->negativeLabel = $negativeLabel;
  }
  /**
   * @return string
   */
  public function getNegativeLabel()
  {
    return $this->negativeLabel;
  }
  /**
   * Label for the approving action of a binary confirmation (e.g. "Publish").
   * Unset when `questions` is populated.
   *
   * @param string $positiveLabel
   */
  public function setPositiveLabel($positiveLabel)
  {
    $this->positiveLabel = $positiveLabel;
  }
  /**
   * @return string
   */
  public function getPositiveLabel()
  {
    return $this->positiveLabel;
  }
  /**
   * Multi-choice form of the confirmation. When populated, the card renders a
   * selectable option list and the chosen option's submit_text (or free-form
   * user text) is returned as AssistantConfirmationResponse.answer_text.
   *
   * @param OptionQuestionsChunkQuestion[] $questions
   */
  public function setQuestions($questions)
  {
    $this->questions = $questions;
  }
  /**
   * @return OptionQuestionsChunkQuestion[]
   */
  public function getQuestions()
  {
    return $this->questions;
  }
  /**
   * Name of the tool call the agent paused on (e.g. "update_app"), for the card
   * header. Unset for pure questions.
   *
   * @param string $tool
   */
  public function setTool($tool)
  {
    $this->tool = $tool;
  }
  /**
   * @return string
   */
  public function getTool()
  {
    return $this->tool;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantConfirmationRequest::class, 'Google_Service_CustomerEngagementSuite_AssistantConfirmationRequest');
