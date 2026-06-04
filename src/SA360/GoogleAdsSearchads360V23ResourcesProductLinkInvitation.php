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

class GoogleAdsSearchads360V23ResourcesProductLinkInvitation extends \Google\Model
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
   * The invitation is accepted.
   */
  public const STATUS_ACCEPTED = 'ACCEPTED';
  /**
   * An invitation has been sent to the other account. A user on the other
   * account may now accept the invitation by setting the status to ACCEPTED.
   */
  public const STATUS_REQUESTED = 'REQUESTED';
  /**
   * This invitation has been sent by a user on the other account. It may be
   * accepted by a user on this account by setting the status to ACCEPTED.
   */
  public const STATUS_PENDING_APPROVAL = 'PENDING_APPROVAL';
  /**
   * The invitation is revoked by the user who sent the invitation.
   */
  public const STATUS_REVOKED = 'REVOKED';
  /**
   * The invitation has been rejected by the invitee.
   */
  public const STATUS_REJECTED = 'REJECTED';
  /**
   * The invitation has timed out before being accepted by the invitee.
   */
  public const STATUS_EXPIRED = 'EXPIRED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * A link to Data partner.
   */
  public const TYPE_DATA_PARTNER = 'DATA_PARTNER';
  /**
   * A link to Google Ads.
   */
  public const TYPE_GOOGLE_ADS = 'GOOGLE_ADS';
  /**
   * A link to Hotel Center.
   */
  public const TYPE_HOTEL_CENTER = 'HOTEL_CENTER';
  /**
   * A link to Google Merchant Center.
   */
  public const TYPE_MERCHANT_CENTER = 'MERCHANT_CENTER';
  /**
   * A link to the Google Ads account of the advertising partner.
   */
  public const TYPE_ADVERTISING_PARTNER = 'ADVERTISING_PARTNER';
  protected $advertisingPartnerType = GoogleAdsSearchads360V23ResourcesAdvertisingPartnerLinkInvitationIdentifier::class;
  protected $advertisingPartnerDataType = '';
  protected $hotelCenterType = GoogleAdsSearchads360V23ResourcesHotelCenterLinkInvitationIdentifier::class;
  protected $hotelCenterDataType = '';
  protected $merchantCenterType = GoogleAdsSearchads360V23ResourcesMerchantCenterLinkInvitationIdentifier::class;
  protected $merchantCenterDataType = '';
  /**
   * Output only. The ID of the product link invitation. This field is read
   * only.
   *
   * @var string
   */
  public $productLinkInvitationId;
  /**
   * Immutable. The resource name of a product link invitation. Product link
   * invitation resource names have the form: `customers/{customer_id}/productLi
   * nkInvitations/{product_link_invitation_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the product link invitation. This field is read
   * only.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. The type of the invited account. This field is read only and
   * can be used for filtering invitations with {@code
   * GoogleAdsService.SearchGoogleAdsRequest}.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. Advertising Partner link invitation.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdvertisingPartnerLinkInvitationIdentifier $advertisingPartner
   */
  public function setAdvertisingPartner(GoogleAdsSearchads360V23ResourcesAdvertisingPartnerLinkInvitationIdentifier $advertisingPartner)
  {
    $this->advertisingPartner = $advertisingPartner;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdvertisingPartnerLinkInvitationIdentifier
   */
  public function getAdvertisingPartner()
  {
    return $this->advertisingPartner;
  }
  /**
   * Output only. Hotel link invitation.
   *
   * @param GoogleAdsSearchads360V23ResourcesHotelCenterLinkInvitationIdentifier $hotelCenter
   */
  public function setHotelCenter(GoogleAdsSearchads360V23ResourcesHotelCenterLinkInvitationIdentifier $hotelCenter)
  {
    $this->hotelCenter = $hotelCenter;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesHotelCenterLinkInvitationIdentifier
   */
  public function getHotelCenter()
  {
    return $this->hotelCenter;
  }
  /**
   * Output only. Merchant Center link invitation.
   *
   * @param GoogleAdsSearchads360V23ResourcesMerchantCenterLinkInvitationIdentifier $merchantCenter
   */
  public function setMerchantCenter(GoogleAdsSearchads360V23ResourcesMerchantCenterLinkInvitationIdentifier $merchantCenter)
  {
    $this->merchantCenter = $merchantCenter;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMerchantCenterLinkInvitationIdentifier
   */
  public function getMerchantCenter()
  {
    return $this->merchantCenter;
  }
  /**
   * Output only. The ID of the product link invitation. This field is read
   * only.
   *
   * @param string $productLinkInvitationId
   */
  public function setProductLinkInvitationId($productLinkInvitationId)
  {
    $this->productLinkInvitationId = $productLinkInvitationId;
  }
  /**
   * @return string
   */
  public function getProductLinkInvitationId()
  {
    return $this->productLinkInvitationId;
  }
  /**
   * Immutable. The resource name of a product link invitation. Product link
   * invitation resource names have the form: `customers/{customer_id}/productLi
   * nkInvitations/{product_link_invitation_id}`
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
   * Output only. The status of the product link invitation. This field is read
   * only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ACCEPTED, REQUESTED,
   * PENDING_APPROVAL, REVOKED, REJECTED, EXPIRED
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
   * Output only. The type of the invited account. This field is read only and
   * can be used for filtering invitations with {@code
   * GoogleAdsService.SearchGoogleAdsRequest}.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DATA_PARTNER, GOOGLE_ADS,
   * HOTEL_CENTER, MERCHANT_CENTER, ADVERTISING_PARTNER
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
class_alias(GoogleAdsSearchads360V23ResourcesProductLinkInvitation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesProductLinkInvitation');
