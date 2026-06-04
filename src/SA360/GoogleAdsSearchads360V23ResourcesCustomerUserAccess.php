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

class GoogleAdsSearchads360V23ResourcesCustomerUserAccess extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ACCESS_ROLE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ACCESS_ROLE_UNKNOWN = 'UNKNOWN';
  /**
   * Owns its account and can control the addition of other users.
   */
  public const ACCESS_ROLE_ADMIN = 'ADMIN';
  /**
   * Can modify , but can't affect other users.
   */
  public const ACCESS_ROLE_STANDARD = 'STANDARD';
  /**
   * Can view and account changes, but cannot make edits.
   */
  public const ACCESS_ROLE_READ_ONLY = 'READ_ONLY';
  /**
   * Role for \"email only\" access. Represents an email recipient rather than a
   * true User entity.
   */
  public const ACCESS_ROLE_EMAIL_ONLY = 'EMAIL_ONLY';
  /**
   * Output only. The customer user access creation time. Read only field The
   * format is "YYYY-MM-DD HH:MM:SS". Examples: "2018-03-05 09:15:00" or
   * "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $accessCreationDateTime;
  /**
   * Access role of the user.
   *
   * @var string
   */
  public $accessRole;
  /**
   * Output only. Email address of the user. Read only field
   *
   * @var string
   */
  public $emailAddress;
  /**
   * Output only. The email address of the inviter user. Read only field
   *
   * @var string
   */
  public $inviterUserEmailAddress;
  /**
   * Immutable. Name of the resource. Resource names have the form:
   * `customers/{customer_id}/customerUserAccesses/{user_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. User id of the user with the customer access. Read only field
   *
   * @var string
   */
  public $userId;

  /**
   * Output only. The customer user access creation time. Read only field The
   * format is "YYYY-MM-DD HH:MM:SS". Examples: "2018-03-05 09:15:00" or
   * "2018-02-01 14:34:30"
   *
   * @param string $accessCreationDateTime
   */
  public function setAccessCreationDateTime($accessCreationDateTime)
  {
    $this->accessCreationDateTime = $accessCreationDateTime;
  }
  /**
   * @return string
   */
  public function getAccessCreationDateTime()
  {
    return $this->accessCreationDateTime;
  }
  /**
   * Access role of the user.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADMIN, STANDARD, READ_ONLY,
   * EMAIL_ONLY
   *
   * @param self::ACCESS_ROLE_* $accessRole
   */
  public function setAccessRole($accessRole)
  {
    $this->accessRole = $accessRole;
  }
  /**
   * @return self::ACCESS_ROLE_*
   */
  public function getAccessRole()
  {
    return $this->accessRole;
  }
  /**
   * Output only. Email address of the user. Read only field
   *
   * @param string $emailAddress
   */
  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }
  /**
   * @return string
   */
  public function getEmailAddress()
  {
    return $this->emailAddress;
  }
  /**
   * Output only. The email address of the inviter user. Read only field
   *
   * @param string $inviterUserEmailAddress
   */
  public function setInviterUserEmailAddress($inviterUserEmailAddress)
  {
    $this->inviterUserEmailAddress = $inviterUserEmailAddress;
  }
  /**
   * @return string
   */
  public function getInviterUserEmailAddress()
  {
    return $this->inviterUserEmailAddress;
  }
  /**
   * Immutable. Name of the resource. Resource names have the form:
   * `customers/{customer_id}/customerUserAccesses/{user_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. User id of the user with the customer access. Read only field
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerUserAccess::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerUserAccess');
