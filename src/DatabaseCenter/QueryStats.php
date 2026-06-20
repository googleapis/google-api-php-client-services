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

class QueryStats extends \Google\Collection
{
  protected $collection_key = 'resourceIds';
  protected $inefficientQueryInfoType = InefficientQueryInfo::class;
  protected $inefficientQueryInfoDataType = '';
  /**
   * The query string is normalized query without any PII data.
   *
   * @var string
   */
  public $normalizedQuery;
  /**
   * The query hash of the query.
   *
   * @var string
   */
  public $queryHash;
  protected $queryMetricsType = QueryMetrics::class;
  protected $queryMetricsDataType = '';
  protected $resourceIdsType = ResourceId::class;
  protected $resourceIdsDataType = 'array';
  /**
   * The type of the resource. sqladmin.googleapis.com/Instance
   * alloydb.googleapis.com/Cluster alloydb.googleapis.com/Instance
   *
   * @var string
   */
  public $resourceType;

  /**
   * Information about inefficient query.
   *
   * @param InefficientQueryInfo $inefficientQueryInfo
   */
  public function setInefficientQueryInfo(InefficientQueryInfo $inefficientQueryInfo)
  {
    $this->inefficientQueryInfo = $inefficientQueryInfo;
  }
  /**
   * @return InefficientQueryInfo
   */
  public function getInefficientQueryInfo()
  {
    return $this->inefficientQueryInfo;
  }
  /**
   * The query string is normalized query without any PII data.
   *
   * @param string $normalizedQuery
   */
  public function setNormalizedQuery($normalizedQuery)
  {
    $this->normalizedQuery = $normalizedQuery;
  }
  /**
   * @return string
   */
  public function getNormalizedQuery()
  {
    return $this->normalizedQuery;
  }
  /**
   * The query hash of the query.
   *
   * @param string $queryHash
   */
  public function setQueryHash($queryHash)
  {
    $this->queryHash = $queryHash;
  }
  /**
   * @return string
   */
  public function getQueryHash()
  {
    return $this->queryHash;
  }
  /**
   * Metrics related to the query performance.
   *
   * @param QueryMetrics $queryMetrics
   */
  public function setQueryMetrics(QueryMetrics $queryMetrics)
  {
    $this->queryMetrics = $queryMetrics;
  }
  /**
   * @return QueryMetrics
   */
  public function getQueryMetrics()
  {
    return $this->queryMetrics;
  }
  /**
   * The resource ids for which the query stats are collected.
   *
   * @param ResourceId[] $resourceIds
   */
  public function setResourceIds($resourceIds)
  {
    $this->resourceIds = $resourceIds;
  }
  /**
   * @return ResourceId[]
   */
  public function getResourceIds()
  {
    return $this->resourceIds;
  }
  /**
   * The type of the resource. sqladmin.googleapis.com/Instance
   * alloydb.googleapis.com/Cluster alloydb.googleapis.com/Instance
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryStats::class, 'Google_Service_DatabaseCenter_QueryStats');
