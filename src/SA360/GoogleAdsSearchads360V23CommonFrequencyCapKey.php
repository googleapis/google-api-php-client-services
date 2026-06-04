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

class GoogleAdsSearchads360V23CommonFrequencyCapKey extends \Google\Model
{
  /**
   * Not specified.
   */
  public const EVENT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EVENT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The cap applies on ad impressions.
   */
  public const EVENT_TYPE_IMPRESSION = 'IMPRESSION';
  /**
   * The cap applies on video ad views.
   */
  public const EVENT_TYPE_VIDEO_VIEW = 'VIDEO_VIEW';
  /**
   * Not specified.
   */
  public const LEVEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const LEVEL_UNKNOWN = 'UNKNOWN';
  /**
   * The cap is applied at the ad group ad level.
   */
  public const LEVEL_AD_GROUP_AD = 'AD_GROUP_AD';
  /**
   * The cap is applied at the ad group level.
   */
  public const LEVEL_AD_GROUP = 'AD_GROUP';
  /**
   * The cap is applied at the campaign level.
   */
  public const LEVEL_CAMPAIGN = 'CAMPAIGN';
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
   * The type of event that the cap applies to (for example, impression).
   *
   * @var string
   */
  public $eventType;
  /**
   * The level on which the cap is to be applied (for example, ad group ad, ad
   * group). The cap is applied to all the entities of this level.
   *
   * @var string
   */
  public $level;
  /**
   * Number of time units the cap lasts.
   *
   * @var int
   */
  public $timeLength;
  /**
   * Unit of time the cap is defined at (for example, day, week).
   *
   * @var string
   */
  public $timeUnit;

  /**
   * The type of event that the cap applies to (for example, impression).
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, IMPRESSION, VIDEO_VIEW
   *
   * @param self::EVENT_TYPE_* $eventType
   */
  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }
  /**
   * @return self::EVENT_TYPE_*
   */
  public function getEventType()
  {
    return $this->eventType;
  }
  /**
   * The level on which the cap is to be applied (for example, ad group ad, ad
   * group). The cap is applied to all the entities of this level.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_GROUP_AD, AD_GROUP, CAMPAIGN
   *
   * @param self::LEVEL_* $level
   */
  public function setLevel($level)
  {
    $this->level = $level;
  }
  /**
   * @return self::LEVEL_*
   */
  public function getLevel()
  {
    return $this->level;
  }
  /**
   * Number of time units the cap lasts.
   *
   * @param int $timeLength
   */
  public function setTimeLength($timeLength)
  {
    $this->timeLength = $timeLength;
  }
  /**
   * @return int
   */
  public function getTimeLength()
  {
    return $this->timeLength;
  }
  /**
   * Unit of time the cap is defined at (for example, day, week).
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
class_alias(GoogleAdsSearchads360V23CommonFrequencyCapKey::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonFrequencyCapKey');
