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

class GoogleAdsSearchads360V23ServicesPlannableUserInterest extends \Google\Model
{
  /**
   * Not specified.
   */
  public const USER_INTEREST_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const USER_INTEREST_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The affinity for this user interest.
   */
  public const USER_INTEREST_TYPE_AFFINITY = 'AFFINITY';
  /**
   * The market for this user interest.
   */
  public const USER_INTEREST_TYPE_IN_MARKET = 'IN_MARKET';
  /**
   * Users known to have installed applications in the specified categories.
   */
  public const USER_INTEREST_TYPE_MOBILE_APP_INSTALL_USER = 'MOBILE_APP_INSTALL_USER';
  /**
   * The geographical location of the interest-based vertical.
   */
  public const USER_INTEREST_TYPE_VERTICAL_GEO = 'VERTICAL_GEO';
  /**
   * User interest criteria for new smart phone users.
   */
  public const USER_INTEREST_TYPE_NEW_SMART_PHONE_USER = 'NEW_SMART_PHONE_USER';
  protected $userInterestDataType = '';
  /**
   * The user interest display name. For example, "Autos & Vehicles"
   *
   * @var string
   */
  public $userInterestDisplayName;
  /**
   * The user interest path. For example, "/Autos & Vehicles/Motor
   * Vehicles/Motor Vehicles by Type/Off-Road Vehicles"
   *
   * @var string
   */
  public $userInterestPath;
  /**
   * The user interest type.
   *
   * @var string
   */
  public $userInterestType;

  /**
   * The user interest id.
   *
   * @param GoogleAdsSearchads360V23CommonUserInterestInfo $userInterest
   */
  public function setUserInterest(GoogleAdsSearchads360V23CommonUserInterestInfo $userInterest)
  {
    $this->userInterest = $userInterest;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserInterestInfo
   */
  public function getUserInterest()
  {
    return $this->userInterest;
  }
  /**
   * The user interest display name. For example, "Autos & Vehicles"
   *
   * @param string $userInterestDisplayName
   */
  public function setUserInterestDisplayName($userInterestDisplayName)
  {
    $this->userInterestDisplayName = $userInterestDisplayName;
  }
  /**
   * @return string
   */
  public function getUserInterestDisplayName()
  {
    return $this->userInterestDisplayName;
  }
  /**
   * The user interest path. For example, "/Autos & Vehicles/Motor
   * Vehicles/Motor Vehicles by Type/Off-Road Vehicles"
   *
   * @param string $userInterestPath
   */
  public function setUserInterestPath($userInterestPath)
  {
    $this->userInterestPath = $userInterestPath;
  }
  /**
   * @return string
   */
  public function getUserInterestPath()
  {
    return $this->userInterestPath;
  }
  /**
   * The user interest type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AFFINITY, IN_MARKET,
   * MOBILE_APP_INSTALL_USER, VERTICAL_GEO, NEW_SMART_PHONE_USER
   *
   * @param self::USER_INTEREST_TYPE_* $userInterestType
   */
  public function setUserInterestType($userInterestType)
  {
    $this->userInterestType = $userInterestType;
  }
  /**
   * @return self::USER_INTEREST_TYPE_*
   */
  public function getUserInterestType()
  {
    return $this->userInterestType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesPlannableUserInterest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesPlannableUserInterest');
