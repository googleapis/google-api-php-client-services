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

class GoogleAdsSearchads360V23ServicesPlannableUserList extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PLANNABLE_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PLANNABLE_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The user list is plannable.
   */
  public const PLANNABLE_STATUS_PLANNABLE = 'PLANNABLE';
  /**
   * The user list is not plannable.
   */
  public const PLANNABLE_STATUS_UNPLANNABLE = 'UNPLANNABLE';
  /**
   * Not specified.
   */
  public const USER_LIST_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const USER_LIST_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * UserList represented as a collection of conversion types.
   */
  public const USER_LIST_TYPE_REMARKETING = 'REMARKETING';
  /**
   * UserList represented as a combination of other user lists/interests.
   */
  public const USER_LIST_TYPE_LOGICAL = 'LOGICAL';
  /**
   * UserList created in the Google Ad Manager platform.
   */
  public const USER_LIST_TYPE_EXTERNAL_REMARKETING = 'EXTERNAL_REMARKETING';
  /**
   * UserList associated with a rule.
   */
  public const USER_LIST_TYPE_RULE_BASED = 'RULE_BASED';
  /**
   * UserList with users similar to users of another UserList.
   */
  public const USER_LIST_TYPE_SIMILAR = 'SIMILAR';
  /**
   * UserList of first-party CRM data provided by advertiser in the form of
   * emails or other formats.
   */
  public const USER_LIST_TYPE_CRM_BASED = 'CRM_BASED';
  /**
   * LookalikeUserlist, composed of users similar to those of a configurable
   * seed (set of UserLists)
   */
  public const USER_LIST_TYPE_LOOKALIKE = 'LOOKALIKE';
  /**
   * The name of the user list.
   *
   * @var string
   */
  public $displayName;
  /**
   * The plannable status of the user list.
   *
   * @var string
   */
  public $plannableStatus;
  protected $plannableUserListMetadataType = GoogleAdsSearchads360V23ServicesPlannableUserListMetadata::class;
  protected $plannableUserListMetadataDataType = '';
  protected $userListInfoType = GoogleAdsSearchads360V23CommonUserListInfo::class;
  protected $userListInfoDataType = '';
  /**
   * The user list type.
   *
   * @var string
   */
  public $userListType;

  /**
   * The name of the user list.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * The plannable status of the user list.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PLANNABLE, UNPLANNABLE
   *
   * @param self::PLANNABLE_STATUS_* $plannableStatus
   */
  public function setPlannableStatus($plannableStatus)
  {
    $this->plannableStatus = $plannableStatus;
  }
  /**
   * @return self::PLANNABLE_STATUS_*
   */
  public function getPlannableStatus()
  {
    return $this->plannableStatus;
  }
  /**
   * The relevant metadata for this user list.
   *
   * @param GoogleAdsSearchads360V23ServicesPlannableUserListMetadata $plannableUserListMetadata
   */
  public function setPlannableUserListMetadata(GoogleAdsSearchads360V23ServicesPlannableUserListMetadata $plannableUserListMetadata)
  {
    $this->plannableUserListMetadata = $plannableUserListMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesPlannableUserListMetadata
   */
  public function getPlannableUserListMetadata()
  {
    return $this->plannableUserListMetadata;
  }
  /**
   * The user list ID.
   *
   * @param GoogleAdsSearchads360V23CommonUserListInfo $userListInfo
   */
  public function setUserListInfo(GoogleAdsSearchads360V23CommonUserListInfo $userListInfo)
  {
    $this->userListInfo = $userListInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListInfo
   */
  public function getUserListInfo()
  {
    return $this->userListInfo;
  }
  /**
   * The user list type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REMARKETING, LOGICAL,
   * EXTERNAL_REMARKETING, RULE_BASED, SIMILAR, CRM_BASED, LOOKALIKE
   *
   * @param self::USER_LIST_TYPE_* $userListType
   */
  public function setUserListType($userListType)
  {
    $this->userListType = $userListType;
  }
  /**
   * @return self::USER_LIST_TYPE_*
   */
  public function getUserListType()
  {
    return $this->userListType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesPlannableUserList::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesPlannableUserList');
