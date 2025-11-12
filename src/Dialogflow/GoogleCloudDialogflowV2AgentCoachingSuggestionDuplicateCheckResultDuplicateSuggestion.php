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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2AgentCoachingSuggestionDuplicateCheckResultDuplicateSuggestion extends \Google\Model
{
  /**
   * @var string
   */
  public $answerRecord;
  /**
   * @var float
   */
  public $similarityScore;
  protected $sourcesType = GoogleCloudDialogflowV2AgentCoachingSuggestionSources::class;
  protected $sourcesDataType = '';
  /**
   * @var int
   */
  public $suggestionIndex;

  /**
   * @param string
   */
  public function setAnswerRecord($answerRecord)
  {
    $this->answerRecord = $answerRecord;
  }
  /**
   * @return string
   */
  public function getAnswerRecord()
  {
    return $this->answerRecord;
  }
  /**
   * @param float
   */
  public function setSimilarityScore($similarityScore)
  {
    $this->similarityScore = $similarityScore;
  }
  /**
   * @return float
   */
  public function getSimilarityScore()
  {
    return $this->similarityScore;
  }
  /**
   * @param GoogleCloudDialogflowV2AgentCoachingSuggestionSources
   */
  public function setSources(GoogleCloudDialogflowV2AgentCoachingSuggestionSources $sources)
  {
    $this->sources = $sources;
  }
  /**
   * @return GoogleCloudDialogflowV2AgentCoachingSuggestionSources
   */
  public function getSources()
  {
    return $this->sources;
  }
  /**
   * @param int
   */
  public function setSuggestionIndex($suggestionIndex)
  {
    $this->suggestionIndex = $suggestionIndex;
  }
  /**
   * @return int
   */
  public function getSuggestionIndex()
  {
    return $this->suggestionIndex;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2AgentCoachingSuggestionDuplicateCheckResultDuplicateSuggestion::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2AgentCoachingSuggestionDuplicateCheckResultDuplicateSuggestion');
