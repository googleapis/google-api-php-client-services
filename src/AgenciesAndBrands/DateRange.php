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

namespace Google\Service\AgenciesAndBrands;

class DateRange extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const RELATIVE_RELATIVE_DATE_RANGE_UNSPECIFIED = 'RELATIVE_DATE_RANGE_UNSPECIFIED';
  /**
   * The date the report is run.
   */
  public const RELATIVE_TODAY = 'TODAY';
  /**
   * The date a day before the date that the report is run.
   */
  public const RELATIVE_YESTERDAY = 'YESTERDAY';
  /**
   * From the beginning of the calendar week in which the up to and including
   * the day the report is run.
   */
  public const RELATIVE_THIS_WEEK_TO_DATE = 'THIS_WEEK_TO_DATE';
  /**
   * From the beginning of the calendar week in which the report is run, up to
   * and including the day before the report is run.
   */
  public const RELATIVE_THIS_WEEK_TO_YESTERDAY = 'THIS_WEEK_TO_YESTERDAY';
  /**
   * From the beginning of the calendar month in which the report is run, to up
   * to and including the day the report is run.
   */
  public const RELATIVE_THIS_MONTH_TO_DATE = 'THIS_MONTH_TO_DATE';
  /**
   * From the beginning of the calendar month in which the report is run, up to
   * and including the day before the report is run.
   */
  public const RELATIVE_THIS_MONTH_TO_YESTERDAY = 'THIS_MONTH_TO_YESTERDAY';
  /**
   * From the beginning of the calendar quarter in which the report is run, up
   * to and including the day the report is run.
   */
  public const RELATIVE_THIS_QUARTER_TO_DATE = 'THIS_QUARTER_TO_DATE';
  /**
   * From the beginning of the calendar quarter in which the report is run, up
   * to and including the day before the report is run.
   */
  public const RELATIVE_THIS_QUARTER_TO_YESTERDAY = 'THIS_QUARTER_TO_YESTERDAY';
  /**
   * From the beginning of the calendar year in which the report is run, to up
   * to and including the day the report is run.
   */
  public const RELATIVE_THIS_YEAR_TO_DATE = 'THIS_YEAR_TO_DATE';
  /**
   * From the beginning of the calendar year in which the report is run, to up
   * to and including the day before the report is run.
   */
  public const RELATIVE_THIS_YEAR_TO_YESTERDAY = 'THIS_YEAR_TO_YESTERDAY';
  /**
   * The entire previous calendar week, Monday to Sunday (inclusive), preceding
   * the calendar week the report is run.
   */
  public const RELATIVE_LAST_WEEK = 'LAST_WEEK';
  /**
   * The entire previous calendar week, Sunday to Saturday (inclusive),
   * preceding the calendar week the report is run.
   */
  public const RELATIVE_LAST_WEEK_STARTING_SUNDAY = 'LAST_WEEK_STARTING_SUNDAY';
  /**
   * The entire previous calendar month preceding the calendar month the report
   * is run.
   */
  public const RELATIVE_LAST_MONTH = 'LAST_MONTH';
  /**
   * The entire previous calendar quarter preceding the calendar quarter the
   * report is run.
   */
  public const RELATIVE_LAST_QUARTER = 'LAST_QUARTER';
  /**
   * The entire previous calendar year preceding the calendar year the report is
   * run.
   */
  public const RELATIVE_LAST_YEAR = 'LAST_YEAR';
  /**
   * The 7 days preceding the day the report is run.
   */
  public const RELATIVE_LAST_7_DAYS = 'LAST_7_DAYS';
  /**
   * The 30 days preceding the day the report is run.
   */
  public const RELATIVE_LAST_30_DAYS = 'LAST_30_DAYS';
  /**
   * The 60 days preceding the day the report is run.
   */
  public const RELATIVE_LAST_60_DAYS = 'LAST_60_DAYS';
  /**
   * The 90 days preceding the day the report is run.
   */
  public const RELATIVE_LAST_90_DAYS = 'LAST_90_DAYS';
  /**
   * The 93 days preceding the day the report is run.
   */
  public const RELATIVE_LAST_93_DAYS = 'LAST_93_DAYS';
  /**
   * The 180 days preceding the day the report is run.
   */
  public const RELATIVE_LAST_180_DAYS = 'LAST_180_DAYS';
  /**
   * The 360 days preceding the day the report is run.
   */
  public const RELATIVE_LAST_360_DAYS = 'LAST_360_DAYS';
  /**
   * The 365 days preceding the day the report is run.
   */
  public const RELATIVE_LAST_365_DAYS = 'LAST_365_DAYS';
  /**
   * The entire previous 3 calendar months preceding the calendar month the
   * report is run.
   */
  public const RELATIVE_LAST_3_MONTHS = 'LAST_3_MONTHS';
  /**
   * The entire previous 6 calendar months preceding the calendar month the
   * report is run.
   */
  public const RELATIVE_LAST_6_MONTHS = 'LAST_6_MONTHS';
  /**
   * The entire previous 12 calendar months preceding the calendar month the
   * report is run.
   */
  public const RELATIVE_LAST_12_MONTHS = 'LAST_12_MONTHS';
  /**
   * From 3 years before the report is run, to the day before the report is run,
   * inclusive.
   */
  public const RELATIVE_ALL_AVAILABLE = 'ALL_AVAILABLE';
  protected $fixedType = FixedDateRange::class;
  protected $fixedDataType = '';
  /**
   * A relative date range.
   *
   * @var string
   */
  public $relative;

  /**
   * A fixed date range.
   *
   * @param FixedDateRange $fixed
   */
  public function setFixed(FixedDateRange $fixed)
  {
    $this->fixed = $fixed;
  }
  /**
   * @return FixedDateRange
   */
  public function getFixed()
  {
    return $this->fixed;
  }
  /**
   * A relative date range.
   *
   * Accepted values: RELATIVE_DATE_RANGE_UNSPECIFIED, TODAY, YESTERDAY,
   * THIS_WEEK_TO_DATE, THIS_WEEK_TO_YESTERDAY, THIS_MONTH_TO_DATE,
   * THIS_MONTH_TO_YESTERDAY, THIS_QUARTER_TO_DATE, THIS_QUARTER_TO_YESTERDAY,
   * THIS_YEAR_TO_DATE, THIS_YEAR_TO_YESTERDAY, LAST_WEEK,
   * LAST_WEEK_STARTING_SUNDAY, LAST_MONTH, LAST_QUARTER, LAST_YEAR,
   * LAST_7_DAYS, LAST_30_DAYS, LAST_60_DAYS, LAST_90_DAYS, LAST_93_DAYS,
   * LAST_180_DAYS, LAST_360_DAYS, LAST_365_DAYS, LAST_3_MONTHS, LAST_6_MONTHS,
   * LAST_12_MONTHS, ALL_AVAILABLE
   *
   * @param self::RELATIVE_* $relative
   */
  public function setRelative($relative)
  {
    $this->relative = $relative;
  }
  /**
   * @return self::RELATIVE_*
   */
  public function getRelative()
  {
    return $this->relative;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DateRange::class, 'Google_Service_AgenciesAndBrands_DateRange');
