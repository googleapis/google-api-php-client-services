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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsResponse extends \Google\Model
{
  protected $averageBenchmarksMetricsType = GoogleAdsSearchads360V23ServicesMetrics::class;
  protected $averageBenchmarksMetricsDataType = '';
  protected $customerMetricsType = GoogleAdsSearchads360V23ServicesMetrics::class;
  protected $customerMetricsDataType = '';

  /**
   * Metrics for the selected benchmarks source.
   *
   * @param GoogleAdsSearchads360V23ServicesMetrics $averageBenchmarksMetrics
   */
  public function setAverageBenchmarksMetrics(GoogleAdsSearchads360V23ServicesMetrics $averageBenchmarksMetrics)
  {
    $this->averageBenchmarksMetrics = $averageBenchmarksMetrics;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesMetrics
   */
  public function getAverageBenchmarksMetrics()
  {
    return $this->averageBenchmarksMetrics;
  }
  /**
   * Metrics belonging to the customer.
   *
   * @param GoogleAdsSearchads360V23ServicesMetrics $customerMetrics
   */
  public function setCustomerMetrics(GoogleAdsSearchads360V23ServicesMetrics $customerMetrics)
  {
    $this->customerMetrics = $customerMetrics;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesMetrics
   */
  public function getCustomerMetrics()
  {
    return $this->customerMetrics;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateBenchmarksMetricsResponse');
