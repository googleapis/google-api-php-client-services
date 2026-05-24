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

namespace Google\Service\Bigquery;

class GenAiFunctionStats extends \Google\Model
{
  protected $cacheStatsType = GenAiFunctionCacheStats::class;
  protected $cacheStatsDataType = '';
  protected $costOptimizationStatsType = GenAiFunctionCostOptimizationStats::class;
  protected $costOptimizationStatsDataType = '';
  protected $errorStatsType = GenAiFunctionErrorStats::class;
  protected $errorStatsDataType = '';
  /**
   * Name of the function.
   *
   * @var string
   */
  public $functionName;
  /**
   * Number of rows processed by this GenAi function. This includes all
   * cost_optimized, llm_inferred and failed_rows.
   *
   * @var string
   */
  public $numProcessedRows;
  /**
   * User input prompt of the function (truncated to 20 chars).
   *
   * @var string
   */
  public $prompt;

  /**
   * Cache stats for the function.
   *
   * @param GenAiFunctionCacheStats $cacheStats
   */
  public function setCacheStats(GenAiFunctionCacheStats $cacheStats)
  {
    $this->cacheStats = $cacheStats;
  }
  /**
   * @return GenAiFunctionCacheStats
   */
  public function getCacheStats()
  {
    return $this->cacheStats;
  }
  /**
   * Cost optimization stats if applied on the rows processed by the function.
   *
   * @param GenAiFunctionCostOptimizationStats $costOptimizationStats
   */
  public function setCostOptimizationStats(GenAiFunctionCostOptimizationStats $costOptimizationStats)
  {
    $this->costOptimizationStats = $costOptimizationStats;
  }
  /**
   * @return GenAiFunctionCostOptimizationStats
   */
  public function getCostOptimizationStats()
  {
    return $this->costOptimizationStats;
  }
  /**
   * Error stats for the function.
   *
   * @param GenAiFunctionErrorStats $errorStats
   */
  public function setErrorStats(GenAiFunctionErrorStats $errorStats)
  {
    $this->errorStats = $errorStats;
  }
  /**
   * @return GenAiFunctionErrorStats
   */
  public function getErrorStats()
  {
    return $this->errorStats;
  }
  /**
   * Name of the function.
   *
   * @param string $functionName
   */
  public function setFunctionName($functionName)
  {
    $this->functionName = $functionName;
  }
  /**
   * @return string
   */
  public function getFunctionName()
  {
    return $this->functionName;
  }
  /**
   * Number of rows processed by this GenAi function. This includes all
   * cost_optimized, llm_inferred and failed_rows.
   *
   * @param string $numProcessedRows
   */
  public function setNumProcessedRows($numProcessedRows)
  {
    $this->numProcessedRows = $numProcessedRows;
  }
  /**
   * @return string
   */
  public function getNumProcessedRows()
  {
    return $this->numProcessedRows;
  }
  /**
   * User input prompt of the function (truncated to 20 chars).
   *
   * @param string $prompt
   */
  public function setPrompt($prompt)
  {
    $this->prompt = $prompt;
  }
  /**
   * @return string
   */
  public function getPrompt()
  {
    return $this->prompt;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GenAiFunctionStats::class, 'Google_Service_Bigquery_GenAiFunctionStats');
