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

class GoogleCloudDialogflowV2KnowledgeAssistDebugInfoQueryGenerationDebugInfo extends \Google\Model
{
  /**
   * @var int
   */
  public $candidatesTokenCount;
  /**
   * @var int
   */
  public $promptTokenCount;
  /**
   * @var float
   */
  public $similarityToLastQuery;
  /**
   * @var float
   */
  public $similarityToLastQueryThreshold;
  /**
   * @var int
   */
  public $thinkingBudgetTokens;
  /**
   * @var string
   */
  public $thinkingLevel;
  /**
   * @var int
   */
  public $totalTokenCount;

  /**
   * @param int $candidatesTokenCount
   */
  public function setCandidatesTokenCount($candidatesTokenCount)
  {
    $this->candidatesTokenCount = $candidatesTokenCount;
  }
  /**
   * @return int
   */
  public function getCandidatesTokenCount()
  {
    return $this->candidatesTokenCount;
  }
  /**
   * @param int $promptTokenCount
   */
  public function setPromptTokenCount($promptTokenCount)
  {
    $this->promptTokenCount = $promptTokenCount;
  }
  /**
   * @return int
   */
  public function getPromptTokenCount()
  {
    return $this->promptTokenCount;
  }
  /**
   * @param float $similarityToLastQuery
   */
  public function setSimilarityToLastQuery($similarityToLastQuery)
  {
    $this->similarityToLastQuery = $similarityToLastQuery;
  }
  /**
   * @return float
   */
  public function getSimilarityToLastQuery()
  {
    return $this->similarityToLastQuery;
  }
  /**
   * @param float $similarityToLastQueryThreshold
   */
  public function setSimilarityToLastQueryThreshold($similarityToLastQueryThreshold)
  {
    $this->similarityToLastQueryThreshold = $similarityToLastQueryThreshold;
  }
  /**
   * @return float
   */
  public function getSimilarityToLastQueryThreshold()
  {
    return $this->similarityToLastQueryThreshold;
  }
  /**
   * @param int $thinkingBudgetTokens
   */
  public function setThinkingBudgetTokens($thinkingBudgetTokens)
  {
    $this->thinkingBudgetTokens = $thinkingBudgetTokens;
  }
  /**
   * @return int
   */
  public function getThinkingBudgetTokens()
  {
    return $this->thinkingBudgetTokens;
  }
  /**
   * @param string $thinkingLevel
   */
  public function setThinkingLevel($thinkingLevel)
  {
    $this->thinkingLevel = $thinkingLevel;
  }
  /**
   * @return string
   */
  public function getThinkingLevel()
  {
    return $this->thinkingLevel;
  }
  /**
   * @param int $totalTokenCount
   */
  public function setTotalTokenCount($totalTokenCount)
  {
    $this->totalTokenCount = $totalTokenCount;
  }
  /**
   * @return int
   */
  public function getTotalTokenCount()
  {
    return $this->totalTokenCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2KnowledgeAssistDebugInfoQueryGenerationDebugInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2KnowledgeAssistDebugInfoQueryGenerationDebugInfo');
