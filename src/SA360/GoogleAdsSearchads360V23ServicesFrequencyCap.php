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

class GoogleAdsSearchads360V23ServicesFrequencyCap extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TIME_UNIT_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TIME_UNIT_UNKNOWN = 'UNKNOWN';
  /**
   * The cap would define limit per one day.
   */
  public const TIME_UNIT_DAY = 'DAY';
  /**
   * The cap would define limit per one week.
   */
  public const TIME_UNIT_WEEK = 'WEEK';
  /**
   * The cap would define limit per one month.
   */
  public const TIME_UNIT_MONTH = 'MONTH';
  /**
   * Required. The number of impressions, inclusive.
   *
   * @var int
   */
  public $impressions;
  /**
   * Required. The type of time unit.
   *
   * @var string
   */
  public $timeUnit;

  /**
   * Required. The number of impressions, inclusive.
   *
   * @param int $impressions
   */
  public function setImpressions($impressions)
  {
    $this->impressions = $impressions;
  }
  /**
   * @return int
   */
  public function getImpressions()
  {
    return $this->impressions;
  }
  /**
   * Required. The type of time unit.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DAY, WEEK, MONTH
   *
   * @param self::TIME_UNIT_* $timeUnit
   */
  public function setTimeUnit($timeUnit)
  {
    $this->timeUnit = $timeUnit;
  }
  /**
   * @return self::TIME_UNIT_*
   */
  public function getTimeUnit()
  {
    return $this->timeUnit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesFrequencyCap::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesFrequencyCap');
