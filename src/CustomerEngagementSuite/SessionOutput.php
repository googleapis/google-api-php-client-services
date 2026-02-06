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

class SessionOutput extends \Google\Model
{
  /**
   * Output audio from the CES agent.
   *
   * @var string
   */
  public $audio;
  protected $citationsType = Citations::class;
  protected $citationsDataType = '';
  protected $diagnosticInfoType = SessionOutputDiagnosticInfo::class;
  protected $diagnosticInfoDataType = '';
  protected $endSessionType = EndSession::class;
  protected $endSessionDataType = '';
  protected $googleSearchSuggestionsType = GoogleSearchSuggestions::class;
  protected $googleSearchSuggestionsDataType = '';
  /**
   * Custom payload with structured output from the CES agent.
   *
   * @var array[]
   */
  public $payload;
  /**
   * Output text from the CES agent.
   *
   * @var string
   */
  public $text;
  protected $toolCallsType = ToolCalls::class;
  protected $toolCallsDataType = '';
  /**
   * If true, the CES agent has detected the end of the current conversation
   * turn and will provide no further output for this turn.
   *
   * @var bool
   */
  public $turnCompleted;
  /**
   * Indicates the sequential order of conversation turn to which this output
   * belongs to, starting from 1.
   *
   * @var int
   */
  public $turnIndex;

  /**
   * Output audio from the CES agent.
   *
   * @param string $audio
   */
  public function setAudio($audio)
  {
    $this->audio = $audio;
  }
  /**
   * @return string
   */
  public function getAudio()
  {
    return $this->audio;
  }
  /**
   * Citations that provide the source information for the agent's generated
   * text.
   *
   * @param Citations $citations
   */
  public function setCitations(Citations $citations)
  {
    $this->citations = $citations;
  }
  /**
   * @return Citations
   */
  public function getCitations()
  {
    return $this->citations;
  }
  /**
   * Optional. Diagnostic information contains execution details during the
   * processing of the input. Only populated in the last SessionOutput (with
   * `turn_completed=true`) for each turn.
   *
   * @param SessionOutputDiagnosticInfo $diagnosticInfo
   */
  public function setDiagnosticInfo(SessionOutputDiagnosticInfo $diagnosticInfo)
  {
    $this->diagnosticInfo = $diagnosticInfo;
  }
  /**
   * @return SessionOutputDiagnosticInfo
   */
  public function getDiagnosticInfo()
  {
    return $this->diagnosticInfo;
  }
  /**
   * Indicates the session has ended.
   *
   * @param EndSession $endSession
   */
  public function setEndSession(EndSession $endSession)
  {
    $this->endSession = $endSession;
  }
  /**
   * @return EndSession
   */
  public function getEndSession()
  {
    return $this->endSession;
  }
  /**
   * The suggestions returned from Google Search as a result of invoking the
   * GoogleSearchTool.
   *
   * @param GoogleSearchSuggestions $googleSearchSuggestions
   */
  public function setGoogleSearchSuggestions(GoogleSearchSuggestions $googleSearchSuggestions)
  {
    $this->googleSearchSuggestions = $googleSearchSuggestions;
  }
  /**
   * @return GoogleSearchSuggestions
   */
  public function getGoogleSearchSuggestions()
  {
    return $this->googleSearchSuggestions;
  }
  /**
   * Custom payload with structured output from the CES agent.
   *
   * @param array[] $payload
   */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return array[]
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * Output text from the CES agent.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * Request for the client to execute the tools.
   *
   * @param ToolCalls $toolCalls
   */
  public function setToolCalls(ToolCalls $toolCalls)
  {
    $this->toolCalls = $toolCalls;
  }
  /**
   * @return ToolCalls
   */
  public function getToolCalls()
  {
    return $this->toolCalls;
  }
  /**
   * If true, the CES agent has detected the end of the current conversation
   * turn and will provide no further output for this turn.
   *
   * @param bool $turnCompleted
   */
  public function setTurnCompleted($turnCompleted)
  {
    $this->turnCompleted = $turnCompleted;
  }
  /**
   * @return bool
   */
  public function getTurnCompleted()
  {
    return $this->turnCompleted;
  }
  /**
   * Indicates the sequential order of conversation turn to which this output
   * belongs to, starting from 1.
   *
   * @param int $turnIndex
   */
  public function setTurnIndex($turnIndex)
  {
    $this->turnIndex = $turnIndex;
  }
  /**
   * @return int
   */
  public function getTurnIndex()
  {
    return $this->turnIndex;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionOutput::class, 'Google_Service_CustomerEngagementSuite_SessionOutput');
