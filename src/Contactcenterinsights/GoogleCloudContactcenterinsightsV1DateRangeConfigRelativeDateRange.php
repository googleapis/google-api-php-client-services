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

class GoogleCloudContactcenterinsightsV1DateRangeConfigRelativeDateRange extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const UNIT_TIME_UNIT_UNSPECIFIED = 'TIME_UNIT_UNSPECIFIED';
  /**
   * Day.
   */
  public const UNIT_DAY = 'DAY';
  /**
   * Week.
   */
  public const UNIT_WEEK = 'WEEK';
  /**
   * Month.
   */
  public const UNIT_MONTH = 'MONTH';
  /**
   * Quarter.
   */
  public const UNIT_QUARTER = 'QUARTER';
  /**
   * Year.
   */
  public const UNIT_YEAR = 'YEAR';
  /**
   * Required. The quantity of units in the past.
   *
   * @var string
   */
  public $quantity;
  /**
   * Required. The unit of time.
   *
   * @var string
   */
  public $unit;

  /**
   * Required. The quantity of units in the past.
   *
   * @param string $quantity
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /**
   * @return string
   */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /**
   * Required. The unit of time.
   *
   * Accepted values: TIME_UNIT_UNSPECIFIED, DAY, WEEK, MONTH, QUARTER, YEAR
   *
   * @param self::UNIT_* $unit
   */
  public function setUnit($unit)
  {
    $this->unit = $unit;
  }
  /**
   * @return self::UNIT_*
   */
  public function getUnit()
  {
    return $this->unit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1DateRangeConfigRelativeDateRange::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DateRangeConfigRelativeDateRange');
