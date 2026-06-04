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

class GoogleAdsSearchads360V23ServicesPlannableUserListMetadata extends \Google\Model
{
  /**
   * Not specified.
   */
  public const USER_LIST_CRM_DATA_SOURCE_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const USER_LIST_CRM_DATA_SOURCE_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The uploaded data is first-party data.
   */
  public const USER_LIST_CRM_DATA_SOURCE_TYPE_FIRST_PARTY = 'FIRST_PARTY';
  /**
   * The uploaded data is from a third-party credit bureau.
   */
  public const USER_LIST_CRM_DATA_SOURCE_TYPE_THIRD_PARTY_CREDIT_BUREAU = 'THIRD_PARTY_CREDIT_BUREAU';
  /**
   * The uploaded data is from a third-party voter file.
   */
  public const USER_LIST_CRM_DATA_SOURCE_TYPE_THIRD_PARTY_VOTER_FILE = 'THIRD_PARTY_VOTER_FILE';
  /**
   * The uploaded data is third party partner data.
   */
  public const USER_LIST_CRM_DATA_SOURCE_TYPE_THIRD_PARTY_PARTNER_DATA = 'THIRD_PARTY_PARTNER_DATA';
  /**
   * The data source type of a CRM based user list.
   *
   * @var string
   */
  public $userListCrmDataSourceType;

  /**
   * The data source type of a CRM based user list.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FIRST_PARTY,
   * THIRD_PARTY_CREDIT_BUREAU, THIRD_PARTY_VOTER_FILE, THIRD_PARTY_PARTNER_DATA
   *
   * @param self::USER_LIST_CRM_DATA_SOURCE_TYPE_* $userListCrmDataSourceType
   */
  public function setUserListCrmDataSourceType($userListCrmDataSourceType)
  {
    $this->userListCrmDataSourceType = $userListCrmDataSourceType;
  }
  /**
   * @return self::USER_LIST_CRM_DATA_SOURCE_TYPE_*
   */
  public function getUserListCrmDataSourceType()
  {
    return $this->userListCrmDataSourceType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesPlannableUserListMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesPlannableUserListMetadata');
