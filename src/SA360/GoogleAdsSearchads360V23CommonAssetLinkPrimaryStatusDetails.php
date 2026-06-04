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

class GoogleAdsSearchads360V23CommonAssetLinkPrimaryStatusDetails extends \Google\Model
{
  /**
   * Not specified.
   */
  public const REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const REASON_UNKNOWN = 'UNKNOWN';
  /**
   * The asset is paused for its linked rollup level. Contributes to a
   * PrimaryStatus of PAUSED.
   */
  public const REASON_ASSET_LINK_PAUSED = 'ASSET_LINK_PAUSED';
  /**
   * The asset is removed for its linked rollup level. Contributes to a
   * PrimaryStatus of REMOVED.
   */
  public const REASON_ASSET_LINK_REMOVED = 'ASSET_LINK_REMOVED';
  /**
   * The asset has been marked as disapproved. Contributes to a PrimaryStatus of
   * NOT_ELIGIBLE
   */
  public const REASON_ASSET_DISAPPROVED = 'ASSET_DISAPPROVED';
  /**
   * The asset has not completed policy review. Contributes to a PrimaryStatus
   * of PENDING.
   */
  public const REASON_ASSET_UNDER_REVIEW = 'ASSET_UNDER_REVIEW';
  /**
   * The asset is approved with policies applied. Contributes to a PrimaryStatus
   * of LIMITED.
   */
  public const REASON_ASSET_APPROVED_LABELED = 'ASSET_APPROVED_LABELED';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The asset is eligible to serve.
   */
  public const STATUS_ELIGIBLE = 'ELIGIBLE';
  /**
   * The user-specified asset link status is paused.
   */
  public const STATUS_PAUSED = 'PAUSED';
  /**
   * The user-specified asset link status is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * The asset may serve in the future.
   */
  public const STATUS_PENDING = 'PENDING';
  /**
   * The asset is serving in a partial capacity.
   */
  public const STATUS_LIMITED = 'LIMITED';
  /**
   * The asset is not eligible to serve.
   */
  public const STATUS_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
  protected $assetDisapprovedType = GoogleAdsSearchads360V23CommonAssetDisapproved::class;
  protected $assetDisapprovedDataType = '';
  /**
   * Provides the reason of this PrimaryStatus.
   *
   * @var string
   */
  public $reason;
  /**
   * Provides the PrimaryStatus of this status detail.
   *
   * @var string
   */
  public $status;

  /**
   * Provides the details for AssetLinkPrimaryStatusReason.ASSET_DISAPPROVED
   *
   * @param GoogleAdsSearchads360V23CommonAssetDisapproved $assetDisapproved
   */
  public function setAssetDisapproved(GoogleAdsSearchads360V23CommonAssetDisapproved $assetDisapproved)
  {
    $this->assetDisapproved = $assetDisapproved;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAssetDisapproved
   */
  public function getAssetDisapproved()
  {
    return $this->assetDisapproved;
  }
  /**
   * Provides the reason of this PrimaryStatus.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ASSET_LINK_PAUSED,
   * ASSET_LINK_REMOVED, ASSET_DISAPPROVED, ASSET_UNDER_REVIEW,
   * ASSET_APPROVED_LABELED
   *
   * @param self::REASON_* $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return self::REASON_*
   */
  public function getReason()
  {
    return $this->reason;
  }
  /**
   * Provides the PrimaryStatus of this status detail.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ELIGIBLE, PAUSED, REMOVED, PENDING,
   * LIMITED, NOT_ELIGIBLE
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
class_alias(GoogleAdsSearchads360V23CommonAssetLinkPrimaryStatusDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAssetLinkPrimaryStatusDetails');
