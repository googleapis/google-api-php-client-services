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

class GoogleAdsSearchads360V23CommonCrmBasedUserListInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DATA_SOURCE_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const DATA_SOURCE_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The uploaded data is first-party data.
   */
  public const DATA_SOURCE_TYPE_FIRST_PARTY = 'FIRST_PARTY';
  /**
   * The uploaded data is from a third-party credit bureau.
   */
  public const DATA_SOURCE_TYPE_THIRD_PARTY_CREDIT_BUREAU = 'THIRD_PARTY_CREDIT_BUREAU';
  /**
   * The uploaded data is from a third-party voter file.
   */
  public const DATA_SOURCE_TYPE_THIRD_PARTY_VOTER_FILE = 'THIRD_PARTY_VOTER_FILE';
  /**
   * The uploaded data is third party partner data.
   */
  public const DATA_SOURCE_TYPE_THIRD_PARTY_PARTNER_DATA = 'THIRD_PARTY_PARTNER_DATA';
  /**
   * Not specified.
   */
  public const UPLOAD_KEY_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const UPLOAD_KEY_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Members are matched from customer info such as email address, phone number
   * or physical address.
   */
  public const UPLOAD_KEY_TYPE_CONTACT_INFO = 'CONTACT_INFO';
  /**
   * Members are matched from a user id generated and assigned by the
   * advertiser.
   */
  public const UPLOAD_KEY_TYPE_CRM_ID = 'CRM_ID';
  /**
   * Members are matched from mobile advertising ids.
   */
  public const UPLOAD_KEY_TYPE_MOBILE_ADVERTISING_ID = 'MOBILE_ADVERTISING_ID';
  /**
   * A string that uniquely identifies a mobile application from which the data
   * was collected. For iOS, the ID string is the 9 digit string that appears at
   * the end of an App Store URL (for example, "476943146" for "Flood-It! 2"
   * whose App Store link is http://itunes.apple.com/us/app/flood-
   * it!-2/id476943146). For Android, the ID string is the application's package
   * name (for example, "com.labpixies.colordrips" for "Color Drips" given
   * Google Play link
   * https://play.google.com/store/apps/details?id=com.labpixies.colordrips).
   * Required when creating CrmBasedUserList for uploading mobile advertising
   * IDs.
   *
   * @var string
   */
  public $appId;
  /**
   * Data source of the list. Default value is FIRST_PARTY. Only customers on
   * the allow-list can create third-party sourced CRM lists.
   *
   * @var string
   */
  public $dataSourceType;
  /**
   * Matching key type of the list. Mixed data types are not allowed on the same
   * list. This field is required for an ADD operation.
   *
   * @var string
   */
  public $uploadKeyType;

  /**
   * A string that uniquely identifies a mobile application from which the data
   * was collected. For iOS, the ID string is the 9 digit string that appears at
   * the end of an App Store URL (for example, "476943146" for "Flood-It! 2"
   * whose App Store link is http://itunes.apple.com/us/app/flood-
   * it!-2/id476943146). For Android, the ID string is the application's package
   * name (for example, "com.labpixies.colordrips" for "Color Drips" given
   * Google Play link
   * https://play.google.com/store/apps/details?id=com.labpixies.colordrips).
   * Required when creating CrmBasedUserList for uploading mobile advertising
   * IDs.
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
   * Data source of the list. Default value is FIRST_PARTY. Only customers on
   * the allow-list can create third-party sourced CRM lists.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FIRST_PARTY,
   * THIRD_PARTY_CREDIT_BUREAU, THIRD_PARTY_VOTER_FILE, THIRD_PARTY_PARTNER_DATA
   *
   * @param self::DATA_SOURCE_TYPE_* $dataSourceType
   */
  public function setDataSourceType($dataSourceType)
  {
    $this->dataSourceType = $dataSourceType;
  }
  /**
   * @return self::DATA_SOURCE_TYPE_*
   */
  public function getDataSourceType()
  {
    return $this->dataSourceType;
  }
  /**
   * Matching key type of the list. Mixed data types are not allowed on the same
   * list. This field is required for an ADD operation.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONTACT_INFO, CRM_ID,
   * MOBILE_ADVERTISING_ID
   *
   * @param self::UPLOAD_KEY_TYPE_* $uploadKeyType
   */
  public function setUploadKeyType($uploadKeyType)
  {
    $this->uploadKeyType = $uploadKeyType;
  }
  /**
   * @return self::UPLOAD_KEY_TYPE_*
   */
  public function getUploadKeyType()
  {
    return $this->uploadKeyType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCrmBasedUserListInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCrmBasedUserListInfo');
