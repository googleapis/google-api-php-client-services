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

class GoogleAdsSearchads360V23ServicesProvideLeadFeedbackResponse extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CREDIT_ISSUANCE_DECISION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CREDIT_ISSUANCE_DECISION_UNKNOWN = 'UNKNOWN';
  /**
   * Bonus credit is issued successfully and bonus credit cap has not reached
   * the threshold after issuing this bonus credit.
   */
  public const CREDIT_ISSUANCE_DECISION_SUCCESS_NOT_REACHED_THRESHOLD = 'SUCCESS_NOT_REACHED_THRESHOLD';
  /**
   * Bonus credit is issued successfully and bonus credit cap has reached the
   * threshold after issuing this bonus credit.
   */
  public const CREDIT_ISSUANCE_DECISION_SUCCESS_REACHED_THRESHOLD = 'SUCCESS_REACHED_THRESHOLD';
  /**
   * Bonus credit is not issued because the provider has reached the bonus
   * credit cap.
   */
  public const CREDIT_ISSUANCE_DECISION_FAIL_OVER_THRESHOLD = 'FAIL_OVER_THRESHOLD';
  /**
   * Bonus credit is not issued because this lead is not eligible for bonus
   * credit.
   */
  public const CREDIT_ISSUANCE_DECISION_FAIL_NOT_ELIGIBLE = 'FAIL_NOT_ELIGIBLE';
  /**
   * Required. Decision of bonus credit issued or rejected. If a bonus credit is
   * issued, it will be available for use in about two months.
   *
   * @var string
   */
  public $creditIssuanceDecision;

  /**
   * Required. Decision of bonus credit issued or rejected. If a bonus credit is
   * issued, it will be available for use in about two months.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SUCCESS_NOT_REACHED_THRESHOLD,
   * SUCCESS_REACHED_THRESHOLD, FAIL_OVER_THRESHOLD, FAIL_NOT_ELIGIBLE
   *
   * @param self::CREDIT_ISSUANCE_DECISION_* $creditIssuanceDecision
   */
  public function setCreditIssuanceDecision($creditIssuanceDecision)
  {
    $this->creditIssuanceDecision = $creditIssuanceDecision;
  }
  /**
   * @return self::CREDIT_ISSUANCE_DECISION_*
   */
  public function getCreditIssuanceDecision()
  {
    return $this->creditIssuanceDecision;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesProvideLeadFeedbackResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesProvideLeadFeedbackResponse');
