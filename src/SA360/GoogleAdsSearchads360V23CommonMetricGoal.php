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

class GoogleAdsSearchads360V23CommonMetricGoal extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DIRECTION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DIRECTION_UNKNOWN = 'UNKNOWN';
  /**
   * The goal of the experiment is to not change the metric.
   */
  public const DIRECTION_NO_CHANGE = 'NO_CHANGE';
  /**
   * The goal of the experiment is to increate the metric.
   */
  public const DIRECTION_INCREASE = 'INCREASE';
  /**
   * The goal of the experiment is to decrease the metric.
   */
  public const DIRECTION_DECREASE = 'DECREASE';
  /**
   * The goal of the experiment is to either not change or increase the metric.
   */
  public const DIRECTION_NO_CHANGE_OR_INCREASE = 'NO_CHANGE_OR_INCREASE';
  /**
   * The goal of the experiment is to either not change or decrease the metric.
   */
  public const DIRECTION_NO_CHANGE_OR_DECREASE = 'NO_CHANGE_OR_DECREASE';
  /**
   * Not specified.
   */
  public const METRIC_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const METRIC_UNKNOWN = 'UNKNOWN';
  /**
   * The goal of the experiment is clicks.
   */
  public const METRIC_CLICKS = 'CLICKS';
  /**
   * The goal of the experiment is impressions.
   */
  public const METRIC_IMPRESSIONS = 'IMPRESSIONS';
  /**
   * The goal of the experiment is cost.
   */
  public const METRIC_COST = 'COST';
  /**
   * The goal of the experiment is conversion rate.
   */
  public const METRIC_CONVERSIONS_PER_INTERACTION_RATE = 'CONVERSIONS_PER_INTERACTION_RATE';
  /**
   * The goal of the experiment is cost per conversion.
   */
  public const METRIC_COST_PER_CONVERSION = 'COST_PER_CONVERSION';
  /**
   * The goal of the experiment is conversion value per cost.
   */
  public const METRIC_CONVERSIONS_VALUE_PER_COST = 'CONVERSIONS_VALUE_PER_COST';
  /**
   * The goal of the experiment is avg cpc.
   */
  public const METRIC_AVERAGE_CPC = 'AVERAGE_CPC';
  /**
   * The goal of the experiment is ctr.
   */
  public const METRIC_CTR = 'CTR';
  /**
   * The goal of the experiment is incremental conversions.
   */
  public const METRIC_INCREMENTAL_CONVERSIONS = 'INCREMENTAL_CONVERSIONS';
  /**
   * The goal of the experiment is completed video views.
   */
  public const METRIC_COMPLETED_VIDEO_VIEWS = 'COMPLETED_VIDEO_VIEWS';
  /**
   * The goal of the experiment is custom algorithms.
   */
  public const METRIC_CUSTOM_ALGORITHMS = 'CUSTOM_ALGORITHMS';
  /**
   * The goal of the experiment is conversions.
   */
  public const METRIC_CONVERSIONS = 'CONVERSIONS';
  /**
   * The goal of the experiment is conversion value.
   */
  public const METRIC_CONVERSION_VALUE = 'CONVERSION_VALUE';
  /**
   * The metric direction of the goal. For example, increase, decrease, no
   * change.
   *
   * @var string
   */
  public $direction;
  /**
   * The metric of the goal. For example, clicks, impressions, cost,
   * conversions, etc.
   *
   * @var string
   */
  public $metric;

  /**
   * The metric direction of the goal. For example, increase, decrease, no
   * change.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NO_CHANGE, INCREASE, DECREASE,
   * NO_CHANGE_OR_INCREASE, NO_CHANGE_OR_DECREASE
   *
   * @param self::DIRECTION_* $direction
   */
  public function setDirection($direction)
  {
    $this->direction = $direction;
  }
  /**
   * @return self::DIRECTION_*
   */
  public function getDirection()
  {
    return $this->direction;
  }
  /**
   * The metric of the goal. For example, clicks, impressions, cost,
   * conversions, etc.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CLICKS, IMPRESSIONS, COST,
   * CONVERSIONS_PER_INTERACTION_RATE, COST_PER_CONVERSION,
   * CONVERSIONS_VALUE_PER_COST, AVERAGE_CPC, CTR, INCREMENTAL_CONVERSIONS,
   * COMPLETED_VIDEO_VIEWS, CUSTOM_ALGORITHMS, CONVERSIONS, CONVERSION_VALUE
   *
   * @param self::METRIC_* $metric
   */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return self::METRIC_*
   */
  public function getMetric()
  {
    return $this->metric;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonMetricGoal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonMetricGoal');
