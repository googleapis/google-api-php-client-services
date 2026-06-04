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

class GoogleAdsSearchads360V23ServicesIdentityVerificationProgress extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PROGRAM_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const PROGRAM_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Verification is pending on user action to proceed.
   */
  public const PROGRAM_STATUS_PENDING_USER_ACTION = 'PENDING_USER_ACTION';
  /**
   * Verification is pending on review.
   */
  public const PROGRAM_STATUS_PENDING_REVIEW = 'PENDING_REVIEW';
  /**
   * Verification succeeded.
   */
  public const PROGRAM_STATUS_SUCCESS = 'SUCCESS';
  /**
   * Verification failed.
   */
  public const PROGRAM_STATUS_FAILURE = 'FAILURE';
  /**
   * Action URL for user to complete verification for the given verification
   * program type.
   *
   * @var string
   */
  public $actionUrl;
  /**
   * The timestamp when the action url will expire in "yyyy-MM-dd HH:mm:ss"
   * format.
   *
   * @var string
   */
  public $invitationLinkExpirationTime;
  /**
   * Current Status (PENDING_USER_ACTION, SUCCESS, FAILURE etc)
   *
   * @var string
   */
  public $programStatus;

  /**
   * Action URL for user to complete verification for the given verification
   * program type.
   *
   * @param string $actionUrl
   */
  public function setActionUrl($actionUrl)
  {
    $this->actionUrl = $actionUrl;
  }
  /**
   * @return string
   */
  public function getActionUrl()
  {
    return $this->actionUrl;
  }
  /**
   * The timestamp when the action url will expire in "yyyy-MM-dd HH:mm:ss"
   * format.
   *
   * @param string $invitationLinkExpirationTime
   */
  public function setInvitationLinkExpirationTime($invitationLinkExpirationTime)
  {
    $this->invitationLinkExpirationTime = $invitationLinkExpirationTime;
  }
  /**
   * @return string
   */
  public function getInvitationLinkExpirationTime()
  {
    return $this->invitationLinkExpirationTime;
  }
  /**
   * Current Status (PENDING_USER_ACTION, SUCCESS, FAILURE etc)
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PENDING_USER_ACTION, PENDING_REVIEW,
   * SUCCESS, FAILURE
   *
   * @param self::PROGRAM_STATUS_* $programStatus
   */
  public function setProgramStatus($programStatus)
  {
    $this->programStatus = $programStatus;
  }
  /**
   * @return self::PROGRAM_STATUS_*
   */
  public function getProgramStatus()
  {
    return $this->programStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesIdentityVerificationProgress::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesIdentityVerificationProgress');
