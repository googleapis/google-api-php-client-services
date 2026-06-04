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

class GoogleAdsSearchads360V23CommonLegacyAppInstallAdInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const APP_STORE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const APP_STORE_UNKNOWN = 'UNKNOWN';
  /**
   * Apple iTunes.
   */
  public const APP_STORE_APPLE_APP_STORE = 'APPLE_APP_STORE';
  /**
   * Google Play.
   */
  public const APP_STORE_GOOGLE_PLAY = 'GOOGLE_PLAY';
  /**
   * Windows Store.
   */
  public const APP_STORE_WINDOWS_STORE = 'WINDOWS_STORE';
  /**
   * Windows Phone Store.
   */
  public const APP_STORE_WINDOWS_PHONE_STORE = 'WINDOWS_PHONE_STORE';
  /**
   * The app is hosted in a Chinese app store.
   */
  public const APP_STORE_CN_APP_STORE = 'CN_APP_STORE';
  /**
   * The ID of the mobile app.
   *
   * @var string
   */
  public $appId;
  /**
   * The app store the mobile app is available in.
   *
   * @var string
   */
  public $appStore;
  /**
   * The first description line of the ad.
   *
   * @var string
   */
  public $description1;
  /**
   * The second description line of the ad.
   *
   * @var string
   */
  public $description2;
  /**
   * The headline of the ad.
   *
   * @var string
   */
  public $headline;

  /**
   * The ID of the mobile app.
   *
   * @param string $appId
   */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /**
   * @return string
   */
  public function getAppId()
  {
    return $this->appId;
  }
  /**
   * The app store the mobile app is available in.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, APPLE_APP_STORE, GOOGLE_PLAY,
   * WINDOWS_STORE, WINDOWS_PHONE_STORE, CN_APP_STORE
   *
   * @param self::APP_STORE_* $appStore
   */
  public function setAppStore($appStore)
  {
    $this->appStore = $appStore;
  }
  /**
   * @return self::APP_STORE_*
   */
  public function getAppStore()
  {
    return $this->appStore;
  }
  /**
   * The first description line of the ad.
   *
   * @param string $description1
   */
  public function setDescription1($description1)
  {
    $this->description1 = $description1;
  }
  /**
   * @return string
   */
  public function getDescription1()
  {
    return $this->description1;
  }
  /**
   * The second description line of the ad.
   *
   * @param string $description2
   */
  public function setDescription2($description2)
  {
    $this->description2 = $description2;
  }
  /**
   * @return string
   */
  public function getDescription2()
  {
    return $this->description2;
  }
  /**
   * The headline of the ad.
   *
   * @param string $headline
   */
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /**
   * @return string
   */
  public function getHeadline()
  {
    return $this->headline;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLegacyAppInstallAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLegacyAppInstallAdInfo');
