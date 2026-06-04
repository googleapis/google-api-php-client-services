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

class GoogleAdsSearchads360V23CommonHotelCheckInDayInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DAY_OF_WEEK_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DAY_OF_WEEK_UNKNOWN = 'UNKNOWN';
  /**
   * Monday.
   */
  public const DAY_OF_WEEK_MONDAY = 'MONDAY';
  /**
   * Tuesday.
   */
  public const DAY_OF_WEEK_TUESDAY = 'TUESDAY';
  /**
   * Wednesday.
   */
  public const DAY_OF_WEEK_WEDNESDAY = 'WEDNESDAY';
  /**
   * Thursday.
   */
  public const DAY_OF_WEEK_THURSDAY = 'THURSDAY';
  /**
   * Friday.
   */
  public const DAY_OF_WEEK_FRIDAY = 'FRIDAY';
  /**
   * Saturday.
   */
  public const DAY_OF_WEEK_SATURDAY = 'SATURDAY';
  /**
   * Sunday.
   */
  public const DAY_OF_WEEK_SUNDAY = 'SUNDAY';
  /**
   * The day of the week.
   *
   * @var string
   */
  public $dayOfWeek;

  /**
   * The day of the week.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MONDAY, TUESDAY, WEDNESDAY,
   * THURSDAY, FRIDAY, SATURDAY, SUNDAY
   *
   * @param self::DAY_OF_WEEK_* $dayOfWeek
   */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /**
   * @return self::DAY_OF_WEEK_*
   */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonHotelCheckInDayInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonHotelCheckInDayInfo');
