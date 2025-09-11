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

class GoogleCloudContactcenterinsightsV1QueryPerformanceOverviewRequest extends \Google\Model
{
  protected $agentPerformanceSourceType = GoogleCloudContactcenterinsightsV1QueryPerformanceOverviewRequestAgentSource::class;
  protected $agentPerformanceSourceDataType = '';
  protected $comparisonQueryIntervalType = GoogleCloudContactcenterinsightsV1QueryInterval::class;
  protected $comparisonQueryIntervalDataType = '';
  /**
   * @var string
   */
  public $filter;
  protected $queryIntervalType = GoogleCloudContactcenterinsightsV1QueryInterval::class;
  protected $queryIntervalDataType = '';

  /**
   * @param GoogleCloudContactcenterinsightsV1QueryPerformanceOverviewRequestAgentSource
   */
  public function setAgentPerformanceSource(GoogleCloudContactcenterinsightsV1QueryPerformanceOverviewRequestAgentSource $agentPerformanceSource)
  {
    $this->agentPerformanceSource = $agentPerformanceSource;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1QueryPerformanceOverviewRequestAgentSource
   */
  public function getAgentPerformanceSource()
  {
    return $this->agentPerformanceSource;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1QueryInterval
   */
  public function setComparisonQueryInterval(GoogleCloudContactcenterinsightsV1QueryInterval $comparisonQueryInterval)
  {
    $this->comparisonQueryInterval = $comparisonQueryInterval;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1QueryInterval
   */
  public function getComparisonQueryInterval()
  {
    return $this->comparisonQueryInterval;
  }
  /**
   * @param string
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * @param GoogleCloudContactcenterinsightsV1QueryInterval
   */
  public function setQueryInterval(GoogleCloudContactcenterinsightsV1QueryInterval $queryInterval)
  {
    $this->queryInterval = $queryInterval;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1QueryInterval
   */
  public function getQueryInterval()
  {
    return $this->queryInterval;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1QueryPerformanceOverviewRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1QueryPerformanceOverviewRequest');
