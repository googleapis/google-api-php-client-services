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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1GenerativeInsights extends \Google\Collection
{
  protected $collection_key = 'chartConversations';
  protected $chartCheckpointType = GoogleCloudContactcenterinsightsV1GenerativeInsightsChartCheckpoint::class;
  protected $chartCheckpointDataType = '';
  protected $chartConversationsType = GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversation::class;
  protected $chartConversationsDataType = 'array';
  /**
   * Chart spec for the chart.
   *
   * @var array[]
   */
  public $chartSpec;
  /**
   * @var array[]
   */
  public $request;
  /**
   * Optional. For charts with comparison, this key will determine the metric
   * that will be compared between the current and another dataset.
   *
   * @var string
   */
  public $sqlComparisonKey;
  /**
   * SQL query used to generate the chart.
   *
   * @var string
   */
  public $sqlQuery;

  /**
   * The chart checkpoint used to generate the chart.
   *
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightsChartCheckpoint $chartCheckpoint
   */
  public function setChartCheckpoint(GoogleCloudContactcenterinsightsV1GenerativeInsightsChartCheckpoint $chartCheckpoint)
  {
    $this->chartCheckpoint = $chartCheckpoint;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightsChartCheckpoint
   */
  public function getChartCheckpoint()
  {
    return $this->chartCheckpoint;
  }
  /**
   * Output only. The chart conversations used to generate the chart.
   *
   * @deprecated
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversation[] $chartConversations
   */
  public function setChartConversations($chartConversations)
  {
    $this->chartConversations = $chartConversations;
  }
  /**
   * @deprecated
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversation[]
   */
  public function getChartConversations()
  {
    return $this->chartConversations;
  }
  /**
   * Chart spec for the chart.
   *
   * @param array[] $chartSpec
   */
  public function setChartSpec($chartSpec)
  {
    $this->chartSpec = $chartSpec;
  }
  /**
   * @return array[]
   */
  public function getChartSpec()
  {
    return $this->chartSpec;
  }
  /**
   * @param array[] $request
   */
  public function setRequest($request)
  {
    $this->request = $request;
  }
  /**
   * @return array[]
   */
  public function getRequest()
  {
    return $this->request;
  }
  /**
   * Optional. For charts with comparison, this key will determine the metric
   * that will be compared between the current and another dataset.
   *
   * @param string $sqlComparisonKey
   */
  public function setSqlComparisonKey($sqlComparisonKey)
  {
    $this->sqlComparisonKey = $sqlComparisonKey;
  }
  /**
   * @return string
   */
  public function getSqlComparisonKey()
  {
    return $this->sqlComparisonKey;
  }
  /**
   * SQL query used to generate the chart.
   *
   * @param string $sqlQuery
   */
  public function setSqlQuery($sqlQuery)
  {
    $this->sqlQuery = $sqlQuery;
  }
  /**
   * @return string
   */
  public function getSqlQuery()
  {
    return $this->sqlQuery;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1GenerativeInsights::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1GenerativeInsights');
