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

namespace Google\Service\DatabaseCenter;

class QueryStatsInfo extends \Google\Collection
{
  protected $collection_key = 'queryStats';
  protected $aggregatedQueryStatsType = QueryStats::class;
  protected $aggregatedQueryStatsDataType = '';
  protected $queryStatsType = QueryStats::class;
  protected $queryStatsDataType = 'array';

  /**
   * Aggregated query stats for the resources for same normalized query.
   *
   * @param QueryStats $aggregatedQueryStats
   */
  public function setAggregatedQueryStats(QueryStats $aggregatedQueryStats)
  {
    $this->aggregatedQueryStats = $aggregatedQueryStats;
  }
  /**
   * @return QueryStats
   */
  public function getAggregatedQueryStats()
  {
    return $this->aggregatedQueryStats;
  }
  /**
   * List of query stats for the resources in the group. This stats is stats at
   * resource level for the resources having same normalized query.
   *
   * @param QueryStats[] $queryStats
   */
  public function setQueryStats($queryStats)
  {
    $this->queryStats = $queryStats;
  }
  /**
   * @return QueryStats[]
   */
  public function getQueryStats()
  {
    return $this->queryStats;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryStatsInfo::class, 'Google_Service_DatabaseCenter_QueryStatsInfo');
