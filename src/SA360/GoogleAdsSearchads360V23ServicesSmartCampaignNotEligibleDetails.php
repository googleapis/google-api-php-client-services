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

class GoogleAdsSearchads360V23ServicesSmartCampaignNotEligibleDetails extends \Google\Model
{
  /**
   * The status has not been specified.
   */
  public const NOT_ELIGIBLE_REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const NOT_ELIGIBLE_REASON_UNKNOWN = 'UNKNOWN';
  /**
   * The campaign is not eligible to serve because of an issue with the account.
   */
  public const NOT_ELIGIBLE_REASON_ACCOUNT_ISSUE = 'ACCOUNT_ISSUE';
  /**
   * The campaign is not eligible to serve because of a payment issue.
   */
  public const NOT_ELIGIBLE_REASON_BILLING_ISSUE = 'BILLING_ISSUE';
  /**
   * The business profile location associated with the campaign has been
   * removed.
   */
  public const NOT_ELIGIBLE_REASON_BUSINESS_PROFILE_LOCATION_REMOVED = 'BUSINESS_PROFILE_LOCATION_REMOVED';
  /**
   * All system-generated ads have been disapproved. Consult the policy_summary
   * field in the AdGroupAd resource for more details.
   */
  public const NOT_ELIGIBLE_REASON_ALL_ADS_DISAPPROVED = 'ALL_ADS_DISAPPROVED';
  /**
   * The reason why the Smart campaign is not eligible to serve.
   *
   * @var string
   */
  public $notEligibleReason;

  /**
   * The reason why the Smart campaign is not eligible to serve.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ACCOUNT_ISSUE, BILLING_ISSUE,
   * BUSINESS_PROFILE_LOCATION_REMOVED, ALL_ADS_DISAPPROVED
   *
   * @param self::NOT_ELIGIBLE_REASON_* $notEligibleReason
   */
  public function setNotEligibleReason($notEligibleReason)
  {
    $this->notEligibleReason = $notEligibleReason;
  }
  /**
   * @return self::NOT_ELIGIBLE_REASON_*
   */
  public function getNotEligibleReason()
  {
    return $this->notEligibleReason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSmartCampaignNotEligibleDetails::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSmartCampaignNotEligibleDetails');
