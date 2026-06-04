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

class GoogleAdsSearchads360V23ServicesTargetFrequencySettings extends \Google\Model
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
   * Optimize bidding to reach Target Frequency in a week.
   */
  public const TIME_UNIT_WEEKLY = 'WEEKLY';
  /**
   * Optimize bidding to reach Target Frequency in a month.
   */
  public const TIME_UNIT_MONTHLY = 'MONTHLY';
  /**
   * Required. The target frequency goal per selected time unit.
   *
   * @var int
   */
  public $targetFrequency;
  /**
   * Required. The time unit used to describe the time frame for
   * target_frequency.
   *
   * @var string
   */
  public $timeUnit;

  /**
   * Required. The target frequency goal per selected time unit.
   *
   * @param int $targetFrequency
   */
  public function setTargetFrequency($targetFrequency)
  {
    $this->targetFrequency = $targetFrequency;
  }
  /**
   * @return int
   */
  public function getTargetFrequency()
  {
    return $this->targetFrequency;
  }
  /**
   * Required. The time unit used to describe the time frame for
   * target_frequency.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, WEEKLY, MONTHLY
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
class_alias(GoogleAdsSearchads360V23ServicesTargetFrequencySettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesTargetFrequencySettings');
