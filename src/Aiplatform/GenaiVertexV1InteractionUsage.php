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

class GenaiVertexV1InteractionUsage extends \Google\Collection
{
  protected $collection_key = 'toolUseTokensByModality';
  protected $cachedTokensByModalityType = GenaiVertexV1InteractionUsageModalityTokens::class;
  protected $cachedTokensByModalityDataType = 'array';
  protected $groundingToolCountType = GenaiVertexV1InteractionUsageGroundingToolCount::class;
  protected $groundingToolCountDataType = 'array';
  /**
   * Number of input tokens used in the first turn of this interaction.
   *
   * @var int
   */
  public $initialInputTokens;
  protected $inputTokensByModalityType = GenaiVertexV1InteractionUsageModalityTokens::class;
  protected $inputTokensByModalityDataType = 'array';
  protected $outputTokensByModalityType = GenaiVertexV1InteractionUsageModalityTokens::class;
  protected $outputTokensByModalityDataType = 'array';
  protected $toolUseTokensByModalityType = GenaiVertexV1InteractionUsageModalityTokens::class;
  protected $toolUseTokensByModalityDataType = 'array';
  /**
   * Number of tokens in the cached part of the prompt (the cached content).
   *
   * @var int
   */
  public $totalCachedTokens;
  /**
   * Number of tokens in the prompt (context).
   *
   * @var int
   */
  public $totalInputTokens;
  /**
   * Total number of tokens across all the generated responses.
   *
   * @var int
   */
  public $totalOutputTokens;
  /**
   * Number of tokens of thoughts for thinking models.
   *
   * @var int
   */
  public $totalThoughtTokens;
  /**
   * Total token count for the interaction request (prompt + responses + other
   * internal tokens).
   *
   * @var int
   */
  public $totalTokens;
  /**
   * Number of tokens present in tool-use prompt(s).
   *
   * @var int
   */
  public $totalToolUseTokens;

  /**
   * A breakdown of cached token usage by modality.
   *
   * @param GenaiVertexV1InteractionUsageModalityTokens[] $cachedTokensByModality
   */
  public function setCachedTokensByModality($cachedTokensByModality)
  {
    $this->cachedTokensByModality = $cachedTokensByModality;
  }
  /**
   * @return GenaiVertexV1InteractionUsageModalityTokens[]
   */
  public function getCachedTokensByModality()
  {
    return $this->cachedTokensByModality;
  }
  /**
   * Grounding tool count.
   *
   * @param GenaiVertexV1InteractionUsageGroundingToolCount[] $groundingToolCount
   */
  public function setGroundingToolCount($groundingToolCount)
  {
    $this->groundingToolCount = $groundingToolCount;
  }
  /**
   * @return GenaiVertexV1InteractionUsageGroundingToolCount[]
   */
  public function getGroundingToolCount()
  {
    return $this->groundingToolCount;
  }
  /**
   * Number of input tokens used in the first turn of this interaction.
   *
   * @param int $initialInputTokens
   */
  public function setInitialInputTokens($initialInputTokens)
  {
    $this->initialInputTokens = $initialInputTokens;
  }
  /**
   * @return int
   */
  public function getInitialInputTokens()
  {
    return $this->initialInputTokens;
  }
  /**
   * A breakdown of input token usage by modality.
   *
   * @param GenaiVertexV1InteractionUsageModalityTokens[] $inputTokensByModality
   */
  public function setInputTokensByModality($inputTokensByModality)
  {
    $this->inputTokensByModality = $inputTokensByModality;
  }
  /**
   * @return GenaiVertexV1InteractionUsageModalityTokens[]
   */
  public function getInputTokensByModality()
  {
    return $this->inputTokensByModality;
  }
  /**
   * A breakdown of output token usage by modality.
   *
   * @param GenaiVertexV1InteractionUsageModalityTokens[] $outputTokensByModality
   */
  public function setOutputTokensByModality($outputTokensByModality)
  {
    $this->outputTokensByModality = $outputTokensByModality;
  }
  /**
   * @return GenaiVertexV1InteractionUsageModalityTokens[]
   */
  public function getOutputTokensByModality()
  {
    return $this->outputTokensByModality;
  }
  /**
   * A breakdown of tool-use token usage by modality.
   *
   * @param GenaiVertexV1InteractionUsageModalityTokens[] $toolUseTokensByModality
   */
  public function setToolUseTokensByModality($toolUseTokensByModality)
  {
    $this->toolUseTokensByModality = $toolUseTokensByModality;
  }
  /**
   * @return GenaiVertexV1InteractionUsageModalityTokens[]
   */
  public function getToolUseTokensByModality()
  {
    return $this->toolUseTokensByModality;
  }
  /**
   * Number of tokens in the cached part of the prompt (the cached content).
   *
   * @param int $totalCachedTokens
   */
  public function setTotalCachedTokens($totalCachedTokens)
  {
    $this->totalCachedTokens = $totalCachedTokens;
  }
  /**
   * @return int
   */
  public function getTotalCachedTokens()
  {
    return $this->totalCachedTokens;
  }
  /**
   * Number of tokens in the prompt (context).
   *
   * @param int $totalInputTokens
   */
  public function setTotalInputTokens($totalInputTokens)
  {
    $this->totalInputTokens = $totalInputTokens;
  }
  /**
   * @return int
   */
  public function getTotalInputTokens()
  {
    return $this->totalInputTokens;
  }
  /**
   * Total number of tokens across all the generated responses.
   *
   * @param int $totalOutputTokens
   */
  public function setTotalOutputTokens($totalOutputTokens)
  {
    $this->totalOutputTokens = $totalOutputTokens;
  }
  /**
   * @return int
   */
  public function getTotalOutputTokens()
  {
    return $this->totalOutputTokens;
  }
  /**
   * Number of tokens of thoughts for thinking models.
   *
   * @param int $totalThoughtTokens
   */
  public function setTotalThoughtTokens($totalThoughtTokens)
  {
    $this->totalThoughtTokens = $totalThoughtTokens;
  }
  /**
   * @return int
   */
  public function getTotalThoughtTokens()
  {
    return $this->totalThoughtTokens;
  }
  /**
   * Total token count for the interaction request (prompt + responses + other
   * internal tokens).
   *
   * @param int $totalTokens
   */
  public function setTotalTokens($totalTokens)
  {
    $this->totalTokens = $totalTokens;
  }
  /**
   * @return int
   */
  public function getTotalTokens()
  {
    return $this->totalTokens;
  }
  /**
   * Number of tokens present in tool-use prompt(s).
   *
   * @param int $totalToolUseTokens
   */
  public function setTotalToolUseTokens($totalToolUseTokens)
  {
    $this->totalToolUseTokens = $totalToolUseTokens;
  }
  /**
   * @return int
   */
  public function getTotalToolUseTokens()
  {
    return $this->totalToolUseTokens;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenaiVertexV1InteractionUsage::class, 'Google_Service_Aiplatform_GenaiVertexV1InteractionUsage');
