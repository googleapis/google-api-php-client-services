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

class GoogleCloudAiplatformV1MetricSource extends \Google\Model
{
  protected $metricType = GoogleCloudAiplatformV1Metric::class;
  protected $metricDataType = '';
  /**
   * Resource name for registered metric.
   *
   * @var string
   */
  public $metricResourceName;

  /**
   * Inline metric config.
   *
   * @param GoogleCloudAiplatformV1Metric $metric
   */
  public function setMetric(GoogleCloudAiplatformV1Metric $metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return GoogleCloudAiplatformV1Metric
   */
  public function getMetric()
  {
    return $this->metric;
  }
  /**
   * Resource name for registered metric.
   *
   * @param string $metricResourceName
   */
  public function setMetricResourceName($metricResourceName)
  {
    $this->metricResourceName = $metricResourceName;
  }
  /**
   * @return string
   */
  public function getMetricResourceName()
  {
    return $this->metricResourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1MetricSource::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1MetricSource');
