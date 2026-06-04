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

class GoogleAdsSearchads360V23CommonMonthlySearchVolume extends \Google\Model
{
  /**
   * Not specified.
   */
  public const MONTH_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const MONTH_UNKNOWN = 'UNKNOWN';
  /**
   * January.
   */
  public const MONTH_JANUARY = 'JANUARY';
  /**
   * February.
   */
  public const MONTH_FEBRUARY = 'FEBRUARY';
  /**
   * March.
   */
  public const MONTH_MARCH = 'MARCH';
  /**
   * April.
   */
  public const MONTH_APRIL = 'APRIL';
  /**
   * May.
   */
  public const MONTH_MAY = 'MAY';
  /**
   * June.
   */
  public const MONTH_JUNE = 'JUNE';
  /**
   * July.
   */
  public const MONTH_JULY = 'JULY';
  /**
   * August.
   */
  public const MONTH_AUGUST = 'AUGUST';
  /**
   * September.
   */
  public const MONTH_SEPTEMBER = 'SEPTEMBER';
  /**
   * October.
   */
  public const MONTH_OCTOBER = 'OCTOBER';
  /**
   * November.
   */
  public const MONTH_NOVEMBER = 'NOVEMBER';
  /**
   * December.
   */
  public const MONTH_DECEMBER = 'DECEMBER';
  /**
   * The month of the search volume.
   *
   * @var string
   */
  public $month;
  /**
   * Approximate number of searches for the month. A null value indicates the
   * search volume is unavailable for that month.
   *
   * @var string
   */
  public $monthlySearches;
  /**
   * The year of the search volume (for example, 2020).
   *
   * @var string
   */
  public $year;

  /**
   * The month of the search volume.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, JANUARY, FEBRUARY, MARCH, APRIL,
   * MAY, JUNE, JULY, AUGUST, SEPTEMBER, OCTOBER, NOVEMBER, DECEMBER
   *
   * @param self::MONTH_* $month
   */
  public function setMonth($month)
  {
    $this->month = $month;
  }
  /**
   * @return self::MONTH_*
   */
  public function getMonth()
  {
    return $this->month;
  }
  /**
   * Approximate number of searches for the month. A null value indicates the
   * search volume is unavailable for that month.
   *
   * @param string $monthlySearches
   */
  public function setMonthlySearches($monthlySearches)
  {
    $this->monthlySearches = $monthlySearches;
  }
  /**
   * @return string
   */
  public function getMonthlySearches()
  {
    return $this->monthlySearches;
  }
  /**
   * The year of the search volume (for example, 2020).
   *
   * @param string $year
   */
  public function setYear($year)
  {
    $this->year = $year;
  }
  /**
   * @return string
   */
  public function getYear()
  {
    return $this->year;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonMonthlySearchVolume::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonMonthlySearchVolume');
