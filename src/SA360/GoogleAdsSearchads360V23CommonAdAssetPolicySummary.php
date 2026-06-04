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

class GoogleAdsSearchads360V23CommonAdAssetPolicySummary extends \Google\Collection
{
  /**
   * No value has been specified.
   */
  public const APPROVAL_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const APPROVAL_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Will not serve.
   */
  public const APPROVAL_STATUS_DISAPPROVED = 'DISAPPROVED';
  /**
   * Serves with restrictions.
   */
  public const APPROVAL_STATUS_APPROVED_LIMITED = 'APPROVED_LIMITED';
  /**
   * Serves without restrictions.
   */
  public const APPROVAL_STATUS_APPROVED = 'APPROVED';
  /**
   * Will not serve in targeted countries, but may serve for users who are
   * searching for information about the targeted countries.
   */
  public const APPROVAL_STATUS_AREA_OF_INTEREST_ONLY = 'AREA_OF_INTEREST_ONLY';
  /**
   * No value has been specified.
   */
  public const REVIEW_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const REVIEW_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Currently under review.
   */
  public const REVIEW_STATUS_REVIEW_IN_PROGRESS = 'REVIEW_IN_PROGRESS';
  /**
   * Primary review complete. Other reviews may be continuing.
   */
  public const REVIEW_STATUS_REVIEWED = 'REVIEWED';
  /**
   * The resource has been resubmitted for approval or its policy decision has
   * been appealed.
   */
  public const REVIEW_STATUS_UNDER_APPEAL = 'UNDER_APPEAL';
  /**
   * The resource is eligible and may be serving but could still undergo further
   * review.
   */
  public const REVIEW_STATUS_ELIGIBLE_MAY_SERVE = 'ELIGIBLE_MAY_SERVE';
  protected $collection_key = 'policyTopicEntries';
  /**
   * The overall approval status of this asset, which is calculated based on the
   * status of its individual policy topic entries.
   *
   * @var string
   */
  public $approvalStatus;
  protected $policyTopicEntriesType = GoogleAdsSearchads360V23CommonPolicyTopicEntry::class;
  protected $policyTopicEntriesDataType = 'array';
  /**
   * Where in the review process this asset.
   *
   * @var string
   */
  public $reviewStatus;

  /**
   * The overall approval status of this asset, which is calculated based on the
   * status of its individual policy topic entries.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DISAPPROVED, APPROVED_LIMITED,
   * APPROVED, AREA_OF_INTEREST_ONLY
   *
   * @param self::APPROVAL_STATUS_* $approvalStatus
   */
  public function setApprovalStatus($approvalStatus)
  {
    $this->approvalStatus = $approvalStatus;
  }
  /**
   * @return self::APPROVAL_STATUS_*
   */
  public function getApprovalStatus()
  {
    return $this->approvalStatus;
  }
  /**
   * The list of policy findings for this asset.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicEntry[] $policyTopicEntries
   */
  public function setPolicyTopicEntries($policyTopicEntries)
  {
    $this->policyTopicEntries = $policyTopicEntries;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicEntry[]
   */
  public function getPolicyTopicEntries()
  {
    return $this->policyTopicEntries;
  }
  /**
   * Where in the review process this asset.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, REVIEW_IN_PROGRESS, REVIEWED,
   * UNDER_APPEAL, ELIGIBLE_MAY_SERVE
   *
   * @param self::REVIEW_STATUS_* $reviewStatus
   */
  public function setReviewStatus($reviewStatus)
  {
    $this->reviewStatus = $reviewStatus;
  }
  /**
   * @return self::REVIEW_STATUS_*
   */
  public function getReviewStatus()
  {
    return $this->reviewStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAdAssetPolicySummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAdAssetPolicySummary');
