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

class GoogleAdsSearchads360V23CommonBrandInfo extends \Google\Model
{
  /**
   * No value has been specified.
   */
  public const REJECTION_REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const REJECTION_REASON_UNKNOWN = 'UNKNOWN';
  /**
   * Brand is already present in the commercial brand set.
   */
  public const REJECTION_REASON_EXISTING_BRAND = 'EXISTING_BRAND';
  /**
   * Brand is already present in the commercial brand set, but is a variant.
   */
  public const REJECTION_REASON_EXISTING_BRAND_VARIANT = 'EXISTING_BRAND_VARIANT';
  /**
   * Brand information is not correct (eg: URL and name don't match).
   */
  public const REJECTION_REASON_INCORRECT_INFORMATION = 'INCORRECT_INFORMATION';
  /**
   * Not a valid brand as per Google policy.
   */
  public const REJECTION_REASON_NOT_A_BRAND = 'NOT_A_BRAND';
  /**
   * No value has been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Brand is verified and globally available for selection
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * Brand was globally available in past but is no longer a valid brand (based
   * on business criteria)
   */
  public const STATUS_DEPRECATED = 'DEPRECATED';
  /**
   * Brand is unverified and customer scoped, but can be selected by customer
   * (only who requested for same) for targeting
   */
  public const STATUS_UNVERIFIED = 'UNVERIFIED';
  /**
   * Was a customer-scoped (unverified) brand, which got approved by business
   * and added to the global list. Its assigned CKG MID should be used instead
   * of this
   */
  public const STATUS_APPROVED = 'APPROVED';
  /**
   * Was a customer-scoped (unverified) brand, but the request was canceled by
   * customer and this brand id is no longer valid
   */
  public const STATUS_CANCELLED = 'CANCELLED';
  /**
   * Was a customer-scoped (unverified) brand, but the request was rejected by
   * internal business team and this brand id is no longer valid
   */
  public const STATUS_REJECTED = 'REJECTED';
  /**
   * Output only. A text representation of a brand.
   *
   * @var string
   */
  public $displayName;
  /**
   * The Commercial KG MID for the brand.
   *
   * @var string
   */
  public $entityId;
  /**
   * Output only. The primary url of a brand.
   *
   * @var string
   */
  public $primaryUrl;
  /**
   * Output only. The rejection reason when a brand status is REJECTED.
   *
   * @var string
   */
  public $rejectionReason;
  /**
   * Output only. The status of a brand.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. A text representation of a brand.
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
   * The Commercial KG MID for the brand.
   *
   * @param string $entityId
   */
  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }
  /**
   * @return string
   */
  public function getEntityId()
  {
    return $this->entityId;
  }
  /**
   * Output only. The primary url of a brand.
   *
   * @param string $primaryUrl
   */
  public function setPrimaryUrl($primaryUrl)
  {
    $this->primaryUrl = $primaryUrl;
  }
  /**
   * @return string
   */
  public function getPrimaryUrl()
  {
    return $this->primaryUrl;
  }
  /**
   * Output only. The rejection reason when a brand status is REJECTED.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXISTING_BRAND,
   * EXISTING_BRAND_VARIANT, INCORRECT_INFORMATION, NOT_A_BRAND
   *
   * @param self::REJECTION_REASON_* $rejectionReason
   */
  public function setRejectionReason($rejectionReason)
  {
    $this->rejectionReason = $rejectionReason;
  }
  /**
   * @return self::REJECTION_REASON_*
   */
  public function getRejectionReason()
  {
    return $this->rejectionReason;
  }
  /**
   * Output only. The status of a brand.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, DEPRECATED, UNVERIFIED,
   * APPROVED, CANCELLED, REJECTED
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonBrandInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonBrandInfo');
