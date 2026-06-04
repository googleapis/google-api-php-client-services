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

class GoogleAdsSearchads360V23CommonConsent extends \Google\Model
{
  /**
   * Not specified.
   */
  public const AD_PERSONALIZATION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Output-only. Represents a format not yet defined in this enum.
   */
  public const AD_PERSONALIZATION_UNKNOWN = 'UNKNOWN';
  /**
   * Granted.
   */
  public const AD_PERSONALIZATION_GRANTED = 'GRANTED';
  /**
   * Denied.
   */
  public const AD_PERSONALIZATION_DENIED = 'DENIED';
  /**
   * Not specified.
   */
  public const AD_USER_DATA_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Output-only. Represents a format not yet defined in this enum.
   */
  public const AD_USER_DATA_UNKNOWN = 'UNKNOWN';
  /**
   * Granted.
   */
  public const AD_USER_DATA_GRANTED = 'GRANTED';
  /**
   * Denied.
   */
  public const AD_USER_DATA_DENIED = 'DENIED';
  /**
   * This represents consent for ad personalization. This can only be set for
   * OfflineUserDataJobService and UserDataService.
   *
   * @var string
   */
  public $adPersonalization;
  /**
   * This represents consent for ad user data.
   *
   * @var string
   */
  public $adUserData;

  /**
   * This represents consent for ad personalization. This can only be set for
   * OfflineUserDataJobService and UserDataService.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, GRANTED, DENIED
   *
   * @param self::AD_PERSONALIZATION_* $adPersonalization
   */
  public function setAdPersonalization($adPersonalization)
  {
    $this->adPersonalization = $adPersonalization;
  }
  /**
   * @return self::AD_PERSONALIZATION_*
   */
  public function getAdPersonalization()
  {
    return $this->adPersonalization;
  }
  /**
   * This represents consent for ad user data.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, GRANTED, DENIED
   *
   * @param self::AD_USER_DATA_* $adUserData
   */
  public function setAdUserData($adUserData)
  {
    $this->adUserData = $adUserData;
  }
  /**
   * @return self::AD_USER_DATA_*
   */
  public function getAdUserData()
  {
    return $this->adUserData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonConsent::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonConsent');
