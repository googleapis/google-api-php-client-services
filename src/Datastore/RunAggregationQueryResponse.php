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

namespace Google\Service\Datastore;

class RunAggregationQueryResponse extends \Google\Model
{
  /**
   * @var AggregationResultBatch
   */
  public $batch;
  protected $batchType = AggregationResultBatch::class;
  protected $batchDataType = '';
  /**
   * @var AggregationQuery
   */
  public $query;
  protected $queryType = AggregationQuery::class;
  protected $queryDataType = '';
  /**
   * @var ResultSetStats
   */
  public $stats;
  protected $statsType = ResultSetStats::class;
  protected $statsDataType = '';
  /**
   * @var string
   */
  public $transaction;

  /**
   * @param AggregationResultBatch
   */
  public function setBatch(AggregationResultBatch $batch)
  {
    $this->batch = $batch;
  }
  /**
   * @return AggregationResultBatch
   */
  public function getBatch()
  {
    return $this->batch;
  }
  /**
   * @param AggregationQuery
   */
  public function setQuery(AggregationQuery $query)
  {
    $this->query = $query;
  }
  /**
   * @return AggregationQuery
   */
  public function getQuery()
  {
    return $this->query;
  }
  /**
   * @param ResultSetStats
   */
  public function setStats(ResultSetStats $stats)
  {
    $this->stats = $stats;
  }
  /**
   * @return ResultSetStats
   */
  public function getStats()
  {
    return $this->stats;
  }
  /**
   * @param string
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
class_alias(RunAggregationQueryResponse::class, 'Google_Service_Datastore_RunAggregationQueryResponse');
