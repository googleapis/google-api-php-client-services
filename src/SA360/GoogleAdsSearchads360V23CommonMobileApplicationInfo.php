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

class GoogleAdsSearchads360V23CommonMobileApplicationInfo extends \Google\Model
{
  /**
   * A string that uniquely identifies a mobile application to Google Ads API.
   * The format of this string is "{platform}-{platform_native_id}", where
   * platform is "1" for iOS apps and "2" for Android apps, and where
   * platform_native_id is the mobile application identifier native to the
   * corresponding platform. For iOS, this native identifier is the 9 digit
   * string that appears at the end of an App Store URL (for example,
   * "476943146" for "Flood-It! 2" whose App Store link is
   * "http://itunes.apple.com/us/app/flood-it!-2/id476943146"). For Android,
   * this native identifier is the application's package name (for example,
   * "com.labpixies.colordrips" for "Color Drips" given Google Play link
   * "https://play.google.com/store/apps/details?id=com.labpixies.colordrips").
   * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
   * and "2-com.labpixies.colordrips" for Android. This field is required and
   * must be set in CREATE operations.
   *
   * @var string
   */
  public $appId;
  /**
   * Name of this mobile application.
   *
   * @var string
   */
  public $name;

  /**
   * A string that uniquely identifies a mobile application to Google Ads API.
   * The format of this string is "{platform}-{platform_native_id}", where
   * platform is "1" for iOS apps and "2" for Android apps, and where
   * platform_native_id is the mobile application identifier native to the
   * corresponding platform. For iOS, this native identifier is the 9 digit
   * string that appears at the end of an App Store URL (for example,
   * "476943146" for "Flood-It! 2" whose App Store link is
   * "http://itunes.apple.com/us/app/flood-it!-2/id476943146"). For Android,
   * this native identifier is the application's package name (for example,
   * "com.labpixies.colordrips" for "Color Drips" given Google Play link
   * "https://play.google.com/store/apps/details?id=com.labpixies.colordrips").
   * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
   * and "2-com.labpixies.colordrips" for Android. This field is required and
   * must be set in CREATE operations.
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
   * Name of this mobile application.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonMobileApplicationInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonMobileApplicationInfo');
