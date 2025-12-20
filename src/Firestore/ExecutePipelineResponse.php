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

namespace Google\Service\Firestore;

class ExecutePipelineResponse extends \Google\Collection
{
  protected $collection_key = 'results';
  /**
   * The time at which the results are valid. This is a (not strictly)
   * monotonically increasing value across multiple responses in the same
   * stream. The API guarantees that all previously returned results are still
   * valid at the latest `execution_time`. This allows the API consumer to treat
   * the query if it ran at the latest `execution_time` returned. If the query
   * returns no results, a response with `execution_time` and no `results` will
   * be sent, and this represents the time at which the operation was run.
   *
   * @var string
   */
  public $executionTime;
  protected $explainStatsType = ExplainStats::class;
  protected $explainStatsDataType = '';
  protected $resultsType = Document::class;
  protected $resultsDataType = 'array';
  /**
   * Newly created transaction identifier. This field is only specified as part
   * of the first response from the server, alongside the `results` field when
   * the original request specified ExecuteRequest.new_transaction.
   *
   * @var string
   */
  public $transaction;

  /**
   * The time at which the results are valid. This is a (not strictly)
   * monotonically increasing value across multiple responses in the same
   * stream. The API guarantees that all previously returned results are still
   * valid at the latest `execution_time`. This allows the API consumer to treat
   * the query if it ran at the latest `execution_time` returned. If the query
   * returns no results, a response with `execution_time` and no `results` will
   * be sent, and this represents the time at which the operation was run.
   *
   * @param string $executionTime
   */
  public function setExecutionTime($executionTime)
  {
    $this->executionTime = $executionTime;
  }
  /**
   * @return string
   */
  public function getExecutionTime()
  {
    return $this->executionTime;
  }
  /**
   * Query explain stats. This is present on the **last** response if the
   * request configured explain to run in 'analyze' or 'explain' mode in the
   * pipeline options. If the query does not return any results, a response with
   * `explain_stats` and no `results` will still be sent.
   *
   * @param ExplainStats $explainStats
   */
  public function setExplainStats(ExplainStats $explainStats)
  {
    $this->explainStats = $explainStats;
  }
  /**
   * @return ExplainStats
   */
  public function getExplainStats()
  {
    return $this->explainStats;
  }
  /**
   * An ordered batch of results returned executing a pipeline. The batch size
   * is variable, and can even be zero for when only a partial progress message
   * is returned. The fields present in the returned documents are only those
   * that were explicitly requested in the pipeline, this includes those like
   * `__name__` and `__update_time__`. This is explicitly a divergence from
   * `Firestore.RunQuery` / `Firestore.GetDocument` RPCs which always return
   * such fields even when they are not specified in the `mask`.
   *
   * @param Document[] $results
   */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /**
   * @return Document[]
   */
  public function getResults()
  {
    return $this->results;
  }
  /**
   * Newly created transaction identifier. This field is only specified as part
   * of the first response from the server, alongside the `results` field when
   * the original request specified ExecuteRequest.new_transaction.
   *
   * @param string $transaction
   */
  public function setTransaction($transaction)
  {
    $this->transaction = $transaction;
  }
  /**
   * @return string
   */
  public function getTransaction()
  {
    return $this->transaction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecutePipelineResponse::class, 'Google_Service_Firestore_ExecutePipelineResponse');
