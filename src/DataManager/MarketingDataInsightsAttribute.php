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

namespace Google\Service\DataManager;

class MarketingDataInsightsAttribute extends \Google\Model
{
  /**
   * Not specified.
   */
  public const AGE_RANGE_AGE_RANGE_UNSPECIFIED = 'AGE_RANGE_UNSPECIFIED';
  /**
   * Unknown.
   */
  public const AGE_RANGE_AGE_RANGE_UNKNOWN = 'AGE_RANGE_UNKNOWN';
  /**
   * Between 18 and 24 years old.
   */
  public const AGE_RANGE_AGE_RANGE_18_24 = 'AGE_RANGE_18_24';
  /**
   * Between 25 and 34 years old.
   */
  public const AGE_RANGE_AGE_RANGE_25_34 = 'AGE_RANGE_25_34';
  /**
   * Between 35 and 44 years old.
   */
  public const AGE_RANGE_AGE_RANGE_35_44 = 'AGE_RANGE_35_44';
  /**
   * Between 45 and 54 years old.
   */
  public const AGE_RANGE_AGE_RANGE_45_54 = 'AGE_RANGE_45_54';
  /**
   * Between 55 and 64 years old.
   */
  public const AGE_RANGE_AGE_RANGE_55_64 = 'AGE_RANGE_55_64';
  /**
   * 65 years old and beyond.
   */
  public const AGE_RANGE_AGE_RANGE_65_UP = 'AGE_RANGE_65_UP';
  /**
   * Not specified.
   */
  public const GENDER_GENDER_UNSPECIFIED = 'GENDER_UNSPECIFIED';
  /**
   * Unknown.
   */
  public const GENDER_GENDER_UNKNOWN = 'GENDER_UNKNOWN';
  /**
   * Male.
   */
  public const GENDER_GENDER_MALE = 'GENDER_MALE';
  /**
   * Female.
   */
  public const GENDER_GENDER_FEMALE = 'GENDER_FEMALE';
  /**
   * Age range of the audience for which the lift is provided.
   *
   * @var string
   */
  public $ageRange;
  /**
   * Gender of the audience for which the lift is provided.
   *
   * @var string
   */
  public $gender;
  /**
   * Measure of lift that the audience has for the attribute value as compared
   * to the baseline. Range [0-1].
   *
   * @var float
   */
  public $lift;
  /**
   * The user interest ID.
   *
   * @var string
   */
  public $userInterestId;

  /**
   * Age range of the audience for which the lift is provided.
   *
   * Accepted values: AGE_RANGE_UNSPECIFIED, AGE_RANGE_UNKNOWN, AGE_RANGE_18_24,
   * AGE_RANGE_25_34, AGE_RANGE_35_44, AGE_RANGE_45_54, AGE_RANGE_55_64,
   * AGE_RANGE_65_UP
   *
   * @param self::AGE_RANGE_* $ageRange
   */
  public function setAgeRange($ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /**
   * @return self::AGE_RANGE_*
   */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
  /**
   * Gender of the audience for which the lift is provided.
   *
   * Accepted values: GENDER_UNSPECIFIED, GENDER_UNKNOWN, GENDER_MALE,
   * GENDER_FEMALE
   *
   * @param self::GENDER_* $gender
   */
  public function setGender($gender)
  {
    $this->gender = $gender;
  }
  /**
   * @return self::GENDER_*
   */
  public function getGender()
  {
    return $this->gender;
  }
  /**
   * Measure of lift that the audience has for the attribute value as compared
   * to the baseline. Range [0-1].
   *
   * @param float $lift
   */
  public function setLift($lift)
  {
    $this->lift = $lift;
  }
  /**
   * @return float
   */
  public function getLift()
  {
    return $this->lift;
  }
  /**
   * The user interest ID.
   *
   * @param string $userInterestId
   */
  public function setUserInterestId($userInterestId)
  {
    $this->userInterestId = $userInterestId;
  }
  /**
   * @return string
   */
  public function getUserInterestId()
  {
    return $this->userInterestId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MarketingDataInsightsAttribute::class, 'Google_Service_DataManager_MarketingDataInsightsAttribute');
