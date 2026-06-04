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

class GoogleAdsSearchads360V23ResourcesGranularInsuranceStatus extends \Google\Model
{
  /**
   * Not specified.
   */
  public const VERIFICATION_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Unknown verification status.
   */
  public const VERIFICATION_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Verification has started, but has not finished.
   */
  public const VERIFICATION_STATUS_NEEDS_REVIEW = 'NEEDS_REVIEW';
  /**
   * Verification has failed.
   */
  public const VERIFICATION_STATUS_FAILED = 'FAILED';
  /**
   * Verification has passed.
   */
  public const VERIFICATION_STATUS_PASSED = 'PASSED';
  /**
   * Verification is not applicable.
   */
  public const VERIFICATION_STATUS_NOT_APPLICABLE = 'NOT_APPLICABLE';
  /**
   * Verification is required but pending submission.
   */
  public const VERIFICATION_STATUS_NO_SUBMISSION = 'NO_SUBMISSION';
  /**
   * Not all required verification has been submitted.
   */
  public const VERIFICATION_STATUS_PARTIAL_SUBMISSION = 'PARTIAL_SUBMISSION';
  /**
   * Verification needs review by Local Services Ads Ops Specialist.
   */
  public const VERIFICATION_STATUS_PENDING_ESCALATION = 'PENDING_ESCALATION';
  /**
   * Output only. Service category associated with the status. For example,
   * xcat:service_area_business_plumber. For more details see:
   * https://developers.google.com/google-ads/api/data/codes-
   * formats#local_services_ids
   *
   * @var string
   */
  public $categoryId;
  /**
   * Output only. Geotarget criterion ID associated with the status. Can be on
   * country or state/province geo level, depending on requirements and
   * location. See https://developers.google.com/google-ads/api/data/geotargets
   * for more information.
   *
   * @var string
   */
  public $geoCriterionId;
  /**
   * Output only. Granular insurance status, per geo + vertical.
   *
   * @var string
   */
  public $verificationStatus;

  /**
   * Output only. Service category associated with the status. For example,
   * xcat:service_area_business_plumber. For more details see:
   * https://developers.google.com/google-ads/api/data/codes-
   * formats#local_services_ids
   *
   * @param string $categoryId
   */
  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }
  /**
   * @return string
   */
  public function getCategoryId()
  {
    return $this->categoryId;
  }
  /**
   * Output only. Geotarget criterion ID associated with the status. Can be on
   * country or state/province geo level, depending on requirements and
   * location. See https://developers.google.com/google-ads/api/data/geotargets
   * for more information.
   *
   * @param string $geoCriterionId
   */
  public function setGeoCriterionId($geoCriterionId)
  {
    $this->geoCriterionId = $geoCriterionId;
  }
  /**
   * @return string
   */
  public function getGeoCriterionId()
  {
    return $this->geoCriterionId;
  }
  /**
   * Output only. Granular insurance status, per geo + vertical.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NEEDS_REVIEW, FAILED, PASSED,
   * NOT_APPLICABLE, NO_SUBMISSION, PARTIAL_SUBMISSION, PENDING_ESCALATION
   *
   * @param self::VERIFICATION_STATUS_* $verificationStatus
   */
  public function setVerificationStatus($verificationStatus)
  {
    $this->verificationStatus = $verificationStatus;
  }
  /**
   * @return self::VERIFICATION_STATUS_*
   */
  public function getVerificationStatus()
  {
    return $this->verificationStatus;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesGranularInsuranceStatus::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesGranularInsuranceStatus');
