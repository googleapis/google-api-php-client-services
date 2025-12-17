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

namespace Google\Service\Docs;

class DateElementPropertiesSuggestionState extends \Google\Model
{
  /**
   * Indicates if there was a suggested change to date_format.
   *
   * @var bool
   */
  public $dateFormatSuggested;
  /**
   * Indicates if there was a suggested change to locale.
   *
   * @var bool
   */
  public $localeSuggested;
  /**
   * Indicates if there was a suggested change to time_format.
   *
   * @var bool
   */
  public $timeFormatSuggested;
  /**
   * Indicates if there was a suggested change to time_zone_id.
   *
   * @var bool
   */
  public $timeZoneIdSuggested;
  /**
   * Indicates if there was a suggested change to timestamp.
   *
   * @var bool
   */
  public $timestampSuggested;

  /**
   * Indicates if there was a suggested change to date_format.
   *
   * @param bool $dateFormatSuggested
   */
  public function setDateFormatSuggested($dateFormatSuggested)
  {
    $this->dateFormatSuggested = $dateFormatSuggested;
  }
  /**
   * @return bool
   */
  public function getDateFormatSuggested()
  {
    return $this->dateFormatSuggested;
  }
  /**
   * Indicates if there was a suggested change to locale.
   *
   * @param bool $localeSuggested
   */
  public function setLocaleSuggested($localeSuggested)
  {
    $this->localeSuggested = $localeSuggested;
  }
  /**
   * @return bool
   */
  public function getLocaleSuggested()
  {
    return $this->localeSuggested;
  }
  /**
   * Indicates if there was a suggested change to time_format.
   *
   * @param bool $timeFormatSuggested
   */
  public function setTimeFormatSuggested($timeFormatSuggested)
  {
    $this->timeFormatSuggested = $timeFormatSuggested;
  }
  /**
   * @return bool
   */
  public function getTimeFormatSuggested()
  {
    return $this->timeFormatSuggested;
  }
  /**
   * Indicates if there was a suggested change to time_zone_id.
   *
   * @param bool $timeZoneIdSuggested
   */
  public function setTimeZoneIdSuggested($timeZoneIdSuggested)
  {
    $this->timeZoneIdSuggested = $timeZoneIdSuggested;
  }
  /**
   * @return bool
   */
  public function getTimeZoneIdSuggested()
  {
    return $this->timeZoneIdSuggested;
  }
  /**
   * Indicates if there was a suggested change to timestamp.
   *
   * @param bool $timestampSuggested
   */
  public function setTimestampSuggested($timestampSuggested)
  {
    $this->timestampSuggested = $timestampSuggested;
  }
  /**
   * @return bool
   */
  public function getTimestampSuggested()
  {
    return $this->timestampSuggested;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DateElementPropertiesSuggestionState::class, 'Google_Service_Docs_DateElementPropertiesSuggestionState');
