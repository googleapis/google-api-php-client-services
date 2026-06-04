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

class GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLinkIdentifier extends \Google\Model
{
  /**
   * Not specified.
   */
  public const APP_VENDOR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const APP_VENDOR_UNKNOWN = 'UNKNOWN';
  /**
   * Mobile app vendor for Apple app store.
   */
  public const APP_VENDOR_APPLE_APP_STORE = 'APPLE_APP_STORE';
  /**
   * Mobile app vendor for Google app store.
   */
  public const APP_VENDOR_GOOGLE_APP_STORE = 'GOOGLE_APP_STORE';
  /**
   * Immutable. The ID of the app analytics provider. This field should not be
   * empty when creating a new third party app analytics link. It is unable to
   * be modified after the creation of the link.
   *
   * @var string
   */
  public $appAnalyticsProviderId;
  /**
   * Immutable. A string that uniquely identifies a mobile application from
   * which the data was collected to the Google Ads API. For iOS, the ID string
   * is the 9 digit string that appears at the end of an App Store URL (for
   * example, "422689480" for "Gmail" whose App Store link is
   * https://apps.apple.com/us/app/gmail-email-by-google/id422689480). For
   * Android, the ID string is the application's package name (for example,
   * "com.google.android.gm" for "Gmail" given Google Play link
   * https://play.google.com/store/apps/details?id=com.google.android.gm) This
   * field should not be empty when creating a new third party app analytics
   * link. It is unable to be modified after the creation of the link.
   *
   * @var string
   */
  public $appId;
  /**
   * Immutable. The vendor of the app. This field should not be empty when
   * creating a new third party app analytics link. It is unable to be modified
   * after the creation of the link.
   *
   * @var string
   */
  public $appVendor;

  /**
   * Immutable. The ID of the app analytics provider. This field should not be
   * empty when creating a new third party app analytics link. It is unable to
   * be modified after the creation of the link.
   *
   * @param string $appAnalyticsProviderId
   */
  public function setAppAnalyticsProviderId($appAnalyticsProviderId)
  {
    $this->appAnalyticsProviderId = $appAnalyticsProviderId;
  }
  /**
   * @return string
   */
  public function getAppAnalyticsProviderId()
  {
    return $this->appAnalyticsProviderId;
  }
  /**
   * Immutable. A string that uniquely identifies a mobile application from
   * which the data was collected to the Google Ads API. For iOS, the ID string
   * is the 9 digit string that appears at the end of an App Store URL (for
   * example, "422689480" for "Gmail" whose App Store link is
   * https://apps.apple.com/us/app/gmail-email-by-google/id422689480). For
   * Android, the ID string is the application's package name (for example,
   * "com.google.android.gm" for "Gmail" given Google Play link
   * https://play.google.com/store/apps/details?id=com.google.android.gm) This
   * field should not be empty when creating a new third party app analytics
   * link. It is unable to be modified after the creation of the link.
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
   * Immutable. The vendor of the app. This field should not be empty when
   * creating a new third party app analytics link. It is unable to be modified
   * after the creation of the link.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, APPLE_APP_STORE, GOOGLE_APP_STORE
   *
   * @param self::APP_VENDOR_* $appVendor
   */
  public function setAppVendor($appVendor)
  {
    $this->appVendor = $appVendor;
  }
  /**
   * @return self::APP_VENDOR_*
   */
  public function getAppVendor()
  {
    return $this->appVendor;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLinkIdentifier::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLinkIdentifier');
