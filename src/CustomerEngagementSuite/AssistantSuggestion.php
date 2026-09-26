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

class AssistantSuggestion extends \Google\Model
{
  /**
   * Unspecified icon.
   */
  public const ICON_ICON_UNSPECIFIED = 'ICON_UNSPECIFIED';
  /**
   * Resume a previous session.
   */
  public const ICON_RESUME = 'RESUME';
  /**
   * Build something new.
   */
  public const ICON_BUILD = 'BUILD';
  /**
   * Evaluation-related suggestion.
   */
  public const ICON_EVALUATE = 'EVALUATE';
  /**
   * Deployment-related suggestion.
   */
  public const ICON_DEPLOY = 'DEPLOY';
  /**
   * Exploration / discovery suggestion.
   */
  public const ICON_EXPLORE = 'EXPLORE';
  /**
   * Fix an error or failing state.
   */
  public const ICON_FIX = 'FIX';
  /**
   * Unspecified source.
   */
  public const SOURCE_SOURCE_UNSPECIFIED = 'SOURCE_UNSPECIFIED';
  /**
   * Deterministic rule-table candidate with template phrasing.
   */
  public const SOURCE_RULE = 'RULE';
  /**
   * Rule-table candidate re-ranked and phrased by the LLM phrasing step.
   */
  public const SOURCE_LLM_RANKED = 'LLM_RANKED';
  /**
   * Rule-table candidate type in kebab-case (e.g. "resume-pending-review"), for
   * metrics.
   *
   * @var string
   */
  public $candidateType;
  /**
   * Icon hint for the chip.
   *
   * @var string
   */
  public $icon;
  /**
   * Chip label shown to the user (at most 60 characters).
   *
   * @var string
   */
  public $label;
  protected $loadSessionType = AssistantSuggestionLoadSession::class;
  protected $loadSessionDataType = '';
  /**
   * Optional short explanation of why this suggestion is shown (tooltip /
   * rationale popover).
   *
   * @var string
   */
  public $rationale;
  /**
   * Prefill the composer with this text; the user reviews and sends.
   *
   * @var string
   */
  public $seedPrompt;
  /**
   * Prefill the composer with this text and submit immediately. Only used for
   * quick-reply chips inside an active onboarding conversation.
   *
   * @var string
   */
  public $sendMessage;
  /**
   * How this suggestion was produced.
   *
   * @var string
   */
  public $source;
  /**
   * Stable identifier for this suggestion, round-tripped by clients in
   * interaction logging.
   *
   * @var string
   */
  public $suggestionId;

  /**
   * Rule-table candidate type in kebab-case (e.g. "resume-pending-review"), for
   * metrics.
   *
   * @param string $candidateType
   */
  public function setCandidateType($candidateType)
  {
    $this->candidateType = $candidateType;
  }
  /**
   * @return string
   */
  public function getCandidateType()
  {
    return $this->candidateType;
  }
  /**
   * Icon hint for the chip.
   *
   * Accepted values: ICON_UNSPECIFIED, RESUME, BUILD, EVALUATE, DEPLOY,
   * EXPLORE, FIX
   *
   * @param self::ICON_* $icon
   */
  public function setIcon($icon)
  {
    $this->icon = $icon;
  }
  /**
   * @return self::ICON_*
   */
  public function getIcon()
  {
    return $this->icon;
  }
  /**
   * Chip label shown to the user (at most 60 characters).
   *
   * @param string $label
   */
  public function setLabel($label)
  {
    $this->label = $label;
  }
  /**
   * @return string
   */
  public function getLabel()
  {
    return $this->label;
  }
  /**
   * Open an existing assistant session.
   *
   * @param AssistantSuggestionLoadSession $loadSession
   */
  public function setLoadSession(AssistantSuggestionLoadSession $loadSession)
  {
    $this->loadSession = $loadSession;
  }
  /**
   * @return AssistantSuggestionLoadSession
   */
  public function getLoadSession()
  {
    return $this->loadSession;
  }
  /**
   * Optional short explanation of why this suggestion is shown (tooltip /
   * rationale popover).
   *
   * @param string $rationale
   */
  public function setRationale($rationale)
  {
    $this->rationale = $rationale;
  }
  /**
   * @return string
   */
  public function getRationale()
  {
    return $this->rationale;
  }
  /**
   * Prefill the composer with this text; the user reviews and sends.
   *
   * @param string $seedPrompt
   */
  public function setSeedPrompt($seedPrompt)
  {
    $this->seedPrompt = $seedPrompt;
  }
  /**
   * @return string
   */
  public function getSeedPrompt()
  {
    return $this->seedPrompt;
  }
  /**
   * Prefill the composer with this text and submit immediately. Only used for
   * quick-reply chips inside an active onboarding conversation.
   *
   * @param string $sendMessage
   */
  public function setSendMessage($sendMessage)
  {
    $this->sendMessage = $sendMessage;
  }
  /**
   * @return string
   */
  public function getSendMessage()
  {
    return $this->sendMessage;
  }
  /**
   * How this suggestion was produced.
   *
   * Accepted values: SOURCE_UNSPECIFIED, RULE, LLM_RANKED
   *
   * @param self::SOURCE_* $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return self::SOURCE_*
   */
  public function getSource()
  {
    return $this->source;
  }
  /**
   * Stable identifier for this suggestion, round-tripped by clients in
   * interaction logging.
   *
   * @param string $suggestionId
   */
  public function setSuggestionId($suggestionId)
  {
    $this->suggestionId = $suggestionId;
  }
  /**
   * @return string
   */
  public function getSuggestionId()
  {
    return $this->suggestionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssistantSuggestion::class, 'Google_Service_CustomerEngagementSuite_AssistantSuggestion');
