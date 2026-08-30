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

namespace Google\Service\CurationPartners;

class Row extends \Google\Collection
{
  protected $collection_key = 'metricValueGroups';
  protected $dimensionValuesType = ReportValue::class;
  protected $dimensionValuesDataType = 'array';
  protected $metricValueGroupsType = MetricValueGroup::class;
  protected $metricValueGroupsDataType = 'array';

  /**
   * The order of the dimension values is the same as the order of the
   * dimensions specified in the request.
   *
   * @param ReportValue[] $dimensionValues
   */
  public function setDimensionValues($dimensionValues)
  {
    $this->dimensionValues = $dimensionValues;
  }
  /**
   * @return ReportValue[]
   */
  public function getDimensionValues()
  {
    return $this->dimensionValues;
  }
  /**
   * The length of the metric_value_groups field will be equal to the length of
   * the date_ranges field in the fetch response. The metric_value_groups field
   * is ordered such that each index corresponds to the date_range at the same
   * index. For example, given date_ranges [x, y], metric_value_groups will have
   * a length of two. The first entry in metric_value_groups represents the
   * metrics for date x and the second entry in metric_value_groups represents
   * the metrics for date y.
   *
   * @param MetricValueGroup[] $metricValueGroups
   */
  public function setMetricValueGroups($metricValueGroups)
  {
    $this->metricValueGroups = $metricValueGroups;
  }
  /**
   * @return MetricValueGroup[]
   */
  public function getMetricValueGroups()
  {
    return $this->metricValueGroups;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Row::class, 'Google_Service_CurationPartners_Row');
