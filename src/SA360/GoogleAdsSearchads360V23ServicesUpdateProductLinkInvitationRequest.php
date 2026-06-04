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

class GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationRequest extends \Google\Model
{
  /**
   * Not specified.
   */
  public const PRODUCT_LINK_INVITATION_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRODUCT_LINK_INVITATION_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The invitation is accepted.
   */
  public const PRODUCT_LINK_INVITATION_STATUS_ACCEPTED = 'ACCEPTED';
  /**
   * An invitation has been sent to the other account. A user on the other
   * account may now accept the invitation by setting the status to ACCEPTED.
   */
  public const PRODUCT_LINK_INVITATION_STATUS_REQUESTED = 'REQUESTED';
  /**
   * This invitation has been sent by a user on the other account. It may be
   * accepted by a user on this account by setting the status to ACCEPTED.
   */
  public const PRODUCT_LINK_INVITATION_STATUS_PENDING_APPROVAL = 'PENDING_APPROVAL';
  /**
   * The invitation is revoked by the user who sent the invitation.
   */
  public const PRODUCT_LINK_INVITATION_STATUS_REVOKED = 'REVOKED';
  /**
   * The invitation has been rejected by the invitee.
   */
  public const PRODUCT_LINK_INVITATION_STATUS_REJECTED = 'REJECTED';
  /**
   * The invitation has timed out before being accepted by the invitee.
   */
  public const PRODUCT_LINK_INVITATION_STATUS_EXPIRED = 'EXPIRED';
  /**
   * Required. The product link invitation to be created.
   *
   * @var string
   */
  public $productLinkInvitationStatus;
  /**
   * Required. Resource name of the product link invitation.
   *
   * @var string
   */
  public $resourceName;

  /**
   * Required. The product link invitation to be created.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ACCEPTED, REQUESTED,
   * PENDING_APPROVAL, REVOKED, REJECTED, EXPIRED
   *
   * @param self::PRODUCT_LINK_INVITATION_STATUS_* $productLinkInvitationStatus
   */
  public function setProductLinkInvitationStatus($productLinkInvitationStatus)
  {
    $this->productLinkInvitationStatus = $productLinkInvitationStatus;
  }
  /**
   * @return self::PRODUCT_LINK_INVITATION_STATUS_*
   */
  public function getProductLinkInvitationStatus()
  {
    return $this->productLinkInvitationStatus;
  }
  /**
   * Required. Resource name of the product link invitation.
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
class_alias(GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesUpdateProductLinkInvitationRequest');
