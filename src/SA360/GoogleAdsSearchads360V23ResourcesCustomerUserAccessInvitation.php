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

class GoogleAdsSearchads360V23ResourcesCustomerUserAccessInvitation extends \Google\Model
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
   * Not specified.
   */
  public const INVITATION_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const INVITATION_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The initial state of an invitation, before being acted upon by anyone.
   */
  public const INVITATION_STATUS_PENDING = 'PENDING';
  /**
   * Invitation process was terminated by the email recipient. No new user was
   * created.
   */
  public const INVITATION_STATUS_DECLINED = 'DECLINED';
  /**
   * Invitation URLs expired without being acted upon. No new user can be
   * created. Invitations expire 20 days after creation.
   */
  public const INVITATION_STATUS_EXPIRED = 'EXPIRED';
  /**
   * Immutable. Access role of the user.
   *
   * @var string
   */
  public $accessRole;
  /**
   * Output only. Time invitation was created. This field is read-only. The
   * format is "YYYY-MM-DD HH:MM:SS". Examples: "2018-03-05 09:15:00" or
   * "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $creationDateTime;
  /**
   * Immutable. Email address the invitation was sent to. This can differ from
   * the email address of the account that accepts the invite.
   *
   * @var string
   */
  public $emailAddress;
  /**
   * Output only. The ID of the invitation. This field is read-only.
   *
   * @var string
   */
  public $invitationId;
  /**
   * Output only. Invitation status of the user.
   *
   * @var string
   */
  public $invitationStatus;
  /**
   * Immutable. Name of the resource. Resource names have the form:
   * `customers/{customer_id}/customerUserAccessInvitations/{invitation_id}`
   *
   * @var string
   */
  public $resourceName;

  /**
   * Immutable. Access role of the user.
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
   * Output only. Time invitation was created. This field is read-only. The
   * format is "YYYY-MM-DD HH:MM:SS". Examples: "2018-03-05 09:15:00" or
   * "2018-02-01 14:34:30"
   *
   * @param string $creationDateTime
   */
  public function setCreationDateTime($creationDateTime)
  {
    $this->creationDateTime = $creationDateTime;
  }
  /**
   * @return string
   */
  public function getCreationDateTime()
  {
    return $this->creationDateTime;
  }
  /**
   * Immutable. Email address the invitation was sent to. This can differ from
   * the email address of the account that accepts the invite.
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
   * Output only. The ID of the invitation. This field is read-only.
   *
   * @param string $invitationId
   */
  public function setInvitationId($invitationId)
  {
    $this->invitationId = $invitationId;
  }
  /**
   * @return string
   */
  public function getInvitationId()
  {
    return $this->invitationId;
  }
  /**
   * Output only. Invitation status of the user.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING, DECLINED, EXPIRED
   *
   * @param self::INVITATION_STATUS_* $invitationStatus
   */
  public function setInvitationStatus($invitationStatus)
  {
    $this->invitationStatus = $invitationStatus;
  }
  /**
   * @return self::INVITATION_STATUS_*
   */
  public function getInvitationStatus()
  {
    return $this->invitationStatus;
  }
  /**
   * Immutable. Name of the resource. Resource names have the form:
   * `customers/{customer_id}/customerUserAccessInvitations/{invitation_id}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerUserAccessInvitation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerUserAccessInvitation');
