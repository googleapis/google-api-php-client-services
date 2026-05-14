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

class GoogleCloudContactcenterinsightsV1mainDiagnosticReport extends \Google\Collection
{
  protected $collection_key = 'lossPatterns';
  protected $conversationSlicesType = GoogleCloudContactcenterinsightsV1mainDiagnosticReportConversationSlice::class;
  protected $conversationSlicesDataType = 'map';
  protected $intentStatsType = GoogleCloudContactcenterinsightsV1mainDiagnosticReportIntentStats::class;
  protected $intentStatsDataType = 'array';
  protected $lossPatternsType = GoogleCloudContactcenterinsightsV1mainLossPattern::class;
  protected $lossPatternsDataType = 'array';
  protected $metricsType = GoogleCloudContactcenterinsightsV1mainMetricValue::class;
  protected $metricsDataType = 'map';
  /**
   * Output only. The final report in markdown format.
   *
   * @var string
   */
  public $report;

  /**
   * Output only. A map of conversation slices used in the report.
   *
   * @param GoogleCloudContactcenterinsightsV1mainDiagnosticReportConversationSlice[] $conversationSlices
   */
  public function setConversationSlices($conversationSlices)
  {
    $this->conversationSlices = $conversationSlices;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainDiagnosticReportConversationSlice[]
   */
  public function getConversationSlices()
  {
    return $this->conversationSlices;
  }
  /**
   * Output only. Deprecated: Intent breakdowns are no longer used.
   *
   * @deprecated
   * @param GoogleCloudContactcenterinsightsV1mainDiagnosticReportIntentStats[] $intentStats
   */
  public function setIntentStats($intentStats)
  {
    $this->intentStats = $intentStats;
  }
  /**
   * @deprecated
   * @return GoogleCloudContactcenterinsightsV1mainDiagnosticReportIntentStats[]
   */
  public function getIntentStats()
  {
    return $this->intentStats;
  }
  /**
   * Output only. A list of loss patterns identified for the entire
   * project/dataset.
   *
   * @param GoogleCloudContactcenterinsightsV1mainLossPattern[] $lossPatterns
   */
  public function setLossPatterns($lossPatterns)
  {
    $this->lossPatterns = $lossPatterns;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainLossPattern[]
   */
  public function getLossPatterns()
  {
    return $this->lossPatterns;
  }
  /**
   * Output only. Deprecated: The type of the metric. Metrics for Outcome Based
   * Insights derived from QueryMetrics.
   *
   * @deprecated
   * @param GoogleCloudContactcenterinsightsV1mainMetricValue[] $metrics
   */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @deprecated
   * @return GoogleCloudContactcenterinsightsV1mainMetricValue[]
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * Output only. The final report in markdown format.
   *
   * @param string $report
   */
  public function setReport($report)
  {
    $this->report = $report;
  }
  /**
   * @return string
   */
  public function getReport()
  {
    return $this->report;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainDiagnosticReport::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainDiagnosticReport');
