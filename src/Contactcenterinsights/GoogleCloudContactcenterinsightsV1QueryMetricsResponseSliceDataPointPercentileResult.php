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

class GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointPercentileResult extends \Google\Model
{
  /**
   * The 50th percentile value.
   *
   * @var 
   */
  public $p50;
  /**
   * The 90th percentile value.
   *
   * @var 
   */
  public $p90;
  /**
   * The 99th percentile value.
   *
   * @var 
   */
  public $p99;

  public function setP50($p50)
  {
    $this->p50 = $p50;
  }
  public function getP50()
  {
    return $this->p50;
  }
  public function setP90($p90)
  {
    $this->p90 = $p90;
  }
  public function getP90()
  {
    return $this->p90;
  }
  public function setP99($p99)
  {
    $this->p99 = $p99;
  }
  public function getP99()
  {
    return $this->p99;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointPercentileResult::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1QueryMetricsResponseSliceDataPointPercentileResult');
