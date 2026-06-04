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

class GoogleAdsSearchads360V23ResourcesAccountLink extends \Google\Model
{
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The link is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The link is removed/disabled.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * The link to the other account has been requested. A user on the other
   * account may now approve the link by setting the status to ENABLED.
   */
  public const STATUS_REQUESTED = 'REQUESTED';
  /**
   * This link has been requested by a user on the other account. It may be
   * approved by a user on this account by setting the status to ENABLED.
   */
  public const STATUS_PENDING_APPROVAL = 'PENDING_APPROVAL';
  /**
   * The link is rejected by the approver.
   */
  public const STATUS_REJECTED = 'REJECTED';
  /**
   * The link is revoked by the user who requested the link.
   */
  public const STATUS_REVOKED = 'REVOKED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * A link to provide third party app analytics data.
   */
  public const TYPE_THIRD_PARTY_APP_ANALYTICS = 'THIRD_PARTY_APP_ANALYTICS';
  /**
   * Output only. The ID of the link. This field is read only.
   *
   * @var string
   */
  public $accountLinkId;
  /**
   * Immutable. Resource name of the account link. AccountLink resource names
   * have the form: `customers/{customer_id}/accountLinks/{account_link_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The status of the link.
   *
   * @var string
   */
  public $status;
  protected $thirdPartyAppAnalyticsType = GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLinkIdentifier::class;
  protected $thirdPartyAppAnalyticsDataType = '';
  /**
   * Output only. The type of the linked account.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The ID of the link. This field is read only.
   *
   * @param string $accountLinkId
   */
  public function setAccountLinkId($accountLinkId)
  {
    $this->accountLinkId = $accountLinkId;
  }
  /**
   * @return string
   */
  public function getAccountLinkId()
  {
    return $this->accountLinkId;
  }
  /**
   * Immutable. Resource name of the account link. AccountLink resource names
   * have the form: `customers/{customer_id}/accountLinks/{account_link_id}`
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
   * The status of the link.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, REMOVED, REQUESTED,
   * PENDING_APPROVAL, REJECTED, REVOKED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Immutable. A third party app analytics link.
   *
   * @param GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLinkIdentifier $thirdPartyAppAnalytics
   */
  public function setThirdPartyAppAnalytics(GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLinkIdentifier $thirdPartyAppAnalytics)
  {
    $this->thirdPartyAppAnalytics = $thirdPartyAppAnalytics;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesThirdPartyAppAnalyticsLinkIdentifier
   */
  public function getThirdPartyAppAnalytics()
  {
    return $this->thirdPartyAppAnalytics;
  }
  /**
   * Output only. The type of the linked account.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, THIRD_PARTY_APP_ANALYTICS
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAccountLink::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAccountLink');
