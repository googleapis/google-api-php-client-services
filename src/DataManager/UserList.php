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

class UserList extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ACCESS_REASON_ACCESS_REASON_UNSPECIFIED = 'ACCESS_REASON_UNSPECIFIED';
  /**
   * The resource is owned by the user.
   */
  public const ACCESS_REASON_OWNED = 'OWNED';
  /**
   * The resource is shared to the user.
   */
  public const ACCESS_REASON_SHARED = 'SHARED';
  /**
   * The resource is licensed to the user.
   */
  public const ACCESS_REASON_LICENSED = 'LICENSED';
  /**
   * The user subscribed to the resource.
   */
  public const ACCESS_REASON_SUBSCRIBED = 'SUBSCRIBED';
  /**
   * The resource is accessible to the user.
   */
  public const ACCESS_REASON_AFFILIATED = 'AFFILIATED';
  /**
   * Not specified.
   */
  public const ACCOUNT_ACCESS_STATUS_ACCESS_STATUS_UNSPECIFIED = 'ACCESS_STATUS_UNSPECIFIED';
  /**
   * The access is enabled.
   */
  public const ACCOUNT_ACCESS_STATUS_ENABLED = 'ENABLED';
  /**
   * The access is disabled.
   */
  public const ACCOUNT_ACCESS_STATUS_DISABLED = 'DISABLED';
  /**
   * Not specified.
   */
  public const CLOSING_REASON_CLOSING_REASON_UNSPECIFIED = 'CLOSING_REASON_UNSPECIFIED';
  /**
   * The user list was closed because it has not been used in targeting
   * recently. See https://support.google.com/google-ads/answer/2472738 for
   * details.
   */
  public const CLOSING_REASON_UNUSED = 'UNUSED';
  /**
   * Not specified.
   */
  public const MEMBERSHIP_STATUS_MEMBERSHIP_STATUS_UNSPECIFIED = 'MEMBERSHIP_STATUS_UNSPECIFIED';
  /**
   * Open status - User list is accruing members and can be targeted to.
   */
  public const MEMBERSHIP_STATUS_OPEN = 'OPEN';
  /**
   * Closed status - No new members being added.
   */
  public const MEMBERSHIP_STATUS_CLOSED = 'CLOSED';
  /**
   * Output only. The reason this account has been granted access to the list.
   *
   * @var string
   */
  public $accessReason;
  /**
   * Optional. Indicates if this share is still enabled. When a user list is
   * shared with the account this field is set to `ENABLED`. Later the user list
   * owner can decide to revoke the share and make it `DISABLED`.
   *
   * @var string
   */
  public $accountAccessStatus;
  /**
   * Output only. The reason why this user list membership status is closed.
   *
   * @var string
   */
  public $closingReason;
  /**
   * Optional. A description of the user list.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The display name of the user list.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The unique ID of the user list.
   *
   * @var string
   */
  public $id;
  protected $ingestedUserListInfoType = IngestedUserListInfo::class;
  protected $ingestedUserListInfoDataType = '';
  /**
   * Optional. An ID from external system. It is used by user list sellers to
   * correlate IDs on their systems.
   *
   * @var string
   */
  public $integrationCode;
  /**
   * Optional. The duration a user remains in the user list. Valid durations are
   * exact multiples of 24 hours (86400 seconds). Providing a value that is not
   * an exact multiple of 24 hours will result in an INVALID_ARGUMENT error.
   *
   * @var string
   */
  public $membershipDuration;
  /**
   * Optional. Membership status of this user list.
   *
   * @var string
   */
  public $membershipStatus;
  /**
   * Identifier. The resource name of the user list. Format:
   * accountTypes/{account_type}/accounts/{account}/userLists/{user_list}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. An option that indicates if a user may edit a list.
   *
   * @var bool
   */
  public $readOnly;
  protected $sizeInfoType = SizeInfo::class;
  protected $sizeInfoDataType = '';
  protected $targetNetworkInfoType = TargetNetworkInfo::class;
  protected $targetNetworkInfoDataType = '';

  /**
   * Output only. The reason this account has been granted access to the list.
   *
   * Accepted values: ACCESS_REASON_UNSPECIFIED, OWNED, SHARED, LICENSED,
   * SUBSCRIBED, AFFILIATED
   *
   * @param self::ACCESS_REASON_* $accessReason
   */
  public function setAccessReason($accessReason)
  {
    $this->accessReason = $accessReason;
  }
  /**
   * @return self::ACCESS_REASON_*
   */
  public function getAccessReason()
  {
    return $this->accessReason;
  }
  /**
   * Optional. Indicates if this share is still enabled. When a user list is
   * shared with the account this field is set to `ENABLED`. Later the user list
   * owner can decide to revoke the share and make it `DISABLED`.
   *
   * Accepted values: ACCESS_STATUS_UNSPECIFIED, ENABLED, DISABLED
   *
   * @param self::ACCOUNT_ACCESS_STATUS_* $accountAccessStatus
   */
  public function setAccountAccessStatus($accountAccessStatus)
  {
    $this->accountAccessStatus = $accountAccessStatus;
  }
  /**
   * @return self::ACCOUNT_ACCESS_STATUS_*
   */
  public function getAccountAccessStatus()
  {
    return $this->accountAccessStatus;
  }
  /**
   * Output only. The reason why this user list membership status is closed.
   *
   * Accepted values: CLOSING_REASON_UNSPECIFIED, UNUSED
   *
   * @param self::CLOSING_REASON_* $closingReason
   */
  public function setClosingReason($closingReason)
  {
    $this->closingReason = $closingReason;
  }
  /**
   * @return self::CLOSING_REASON_*
   */
  public function getClosingReason()
  {
    return $this->closingReason;
  }
  /**
   * Optional. A description of the user list.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. The display name of the user list.
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
   * Output only. The unique ID of the user list.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. Represents a user list that is populated by user ingested data.
   *
   * @param IngestedUserListInfo $ingestedUserListInfo
   */
  public function setIngestedUserListInfo(IngestedUserListInfo $ingestedUserListInfo)
  {
    $this->ingestedUserListInfo = $ingestedUserListInfo;
  }
  /**
   * @return IngestedUserListInfo
   */
  public function getIngestedUserListInfo()
  {
    return $this->ingestedUserListInfo;
  }
  /**
   * Optional. An ID from external system. It is used by user list sellers to
   * correlate IDs on their systems.
   *
   * @param string $integrationCode
   */
  public function setIntegrationCode($integrationCode)
  {
    $this->integrationCode = $integrationCode;
  }
  /**
   * @return string
   */
  public function getIntegrationCode()
  {
    return $this->integrationCode;
  }
  /**
   * Optional. The duration a user remains in the user list. Valid durations are
   * exact multiples of 24 hours (86400 seconds). Providing a value that is not
   * an exact multiple of 24 hours will result in an INVALID_ARGUMENT error.
   *
   * @param string $membershipDuration
   */
  public function setMembershipDuration($membershipDuration)
  {
    $this->membershipDuration = $membershipDuration;
  }
  /**
   * @return string
   */
  public function getMembershipDuration()
  {
    return $this->membershipDuration;
  }
  /**
   * Optional. Membership status of this user list.
   *
   * Accepted values: MEMBERSHIP_STATUS_UNSPECIFIED, OPEN, CLOSED
   *
   * @param self::MEMBERSHIP_STATUS_* $membershipStatus
   */
  public function setMembershipStatus($membershipStatus)
  {
    $this->membershipStatus = $membershipStatus;
  }
  /**
   * @return self::MEMBERSHIP_STATUS_*
   */
  public function getMembershipStatus()
  {
    return $this->membershipStatus;
  }
  /**
   * Identifier. The resource name of the user list. Format:
   * accountTypes/{account_type}/accounts/{account}/userLists/{user_list}
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
  /**
   * Output only. An option that indicates if a user may edit a list.
   *
   * @param bool $readOnly
   */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /**
   * @return bool
   */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
  /**
   * Output only. Estimated number of members in this user list in different
   * target networks.
   *
   * @param SizeInfo $sizeInfo
   */
  public function setSizeInfo(SizeInfo $sizeInfo)
  {
    $this->sizeInfo = $sizeInfo;
  }
  /**
   * @return SizeInfo
   */
  public function getSizeInfo()
  {
    return $this->sizeInfo;
  }
  /**
   * Optional. Eligibility information for different target networks.
   *
   * @param TargetNetworkInfo $targetNetworkInfo
   */
  public function setTargetNetworkInfo(TargetNetworkInfo $targetNetworkInfo)
  {
    $this->targetNetworkInfo = $targetNetworkInfo;
  }
  /**
   * @return TargetNetworkInfo
   */
  public function getTargetNetworkInfo()
  {
    return $this->targetNetworkInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserList::class, 'Google_Service_DataManager_UserList');
