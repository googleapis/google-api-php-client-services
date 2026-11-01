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

namespace Google\Service\Chromewebstore;

class MetricValue extends \Google\Model
{
  /**
   * The name of the metric
   *
   * @var string
   */
  public $metric;
  /**
   * The unique user count associated with the metric (if applicable).
   *
   * @var string
   */
  public $uniqueUserCount;
  /**
   * The value of the metric.
   *
   * @var string
   */
  public $value;

  /**
   * The name of the metric
   *
   * @param string $metric
   */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return string
   */
  public function getMetric()
  {
    return $this->metric;
  }
  /**
   * The unique user count associated with the metric (if applicable).
   *
   * @param string $uniqueUserCount
   */
  public function setUniqueUserCount($uniqueUserCount)
  {
    $this->uniqueUserCount = $uniqueUserCount;
  }
  /**
   * @return string
   */
  public function getUniqueUserCount()
  {
    return $this->uniqueUserCount;
  }
  /**
   * The value of the metric.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetricValue::class, 'Google_Service_Chromewebstore_MetricValue');
