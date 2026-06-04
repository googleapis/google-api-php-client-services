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

class GoogleAdsSearchads360V23ResourcesInsuranceVerificationArtifact extends \Google\Model
{
  /**
   * Not specified.
   */
  public const REJECTION_REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const REJECTION_REASON_UNKNOWN = 'UNKNOWN';
  /**
   * Business name doesn't match business name for the Local Services Ad.
   */
  public const REJECTION_REASON_BUSINESS_NAME_MISMATCH = 'BUSINESS_NAME_MISMATCH';
  /**
   * Insurance amount doesn't meet requirement listed in the legal summaries
   * documentation for that geographic + category ID combination.
   */
  public const REJECTION_REASON_INSURANCE_AMOUNT_INSUFFICIENT = 'INSURANCE_AMOUNT_INSUFFICIENT';
  /**
   * Insurance document is expired.
   */
  public const REJECTION_REASON_EXPIRED = 'EXPIRED';
  /**
   * Insurance document is missing a signature.
   */
  public const REJECTION_REASON_NO_SIGNATURE = 'NO_SIGNATURE';
  /**
   * Insurance document is missing a policy number.
   */
  public const REJECTION_REASON_NO_POLICY_NUMBER = 'NO_POLICY_NUMBER';
  /**
   * Commercial General Liability(CGL) box is not marked in the insurance
   * document.
   */
  public const REJECTION_REASON_NO_COMMERCIAL_GENERAL_LIABILITY = 'NO_COMMERCIAL_GENERAL_LIABILITY';
  /**
   * Insurance document is in an editable format.
   */
  public const REJECTION_REASON_EDITABLE_FORMAT = 'EDITABLE_FORMAT';
  /**
   * Insurance document does not cover insurance for a particular category.
   */
  public const REJECTION_REASON_CATEGORY_MISMATCH = 'CATEGORY_MISMATCH';
  /**
   * Insurance document is missing an expiration date.
   */
  public const REJECTION_REASON_MISSING_EXPIRATION_DATE = 'MISSING_EXPIRATION_DATE';
  /**
   * Insurance document is poor quality - blurry images, illegible, etc...
   */
  public const REJECTION_REASON_POOR_QUALITY = 'POOR_QUALITY';
  /**
   * Insurance document is suspected of being edited.
   */
  public const REJECTION_REASON_POTENTIALLY_EDITED = 'POTENTIALLY_EDITED';
  /**
   * Insurance document not accepted. For example, documents of insurance
   * proposals, but missing coverages are not accepted.
   */
  public const REJECTION_REASON_WRONG_DOCUMENT_TYPE = 'WRONG_DOCUMENT_TYPE';
  /**
   * Insurance document is not final.
   */
  public const REJECTION_REASON_NON_FINAL = 'NON_FINAL';
  /**
   * Insurance document has another flaw not listed explicitly.
   */
  public const REJECTION_REASON_OTHER = 'OTHER';
  /**
   * Output only. Insurance amount. This is measured in "micros" of the currency
   * mentioned in the insurance document.
   *
   * @var string
   */
  public $amountMicros;
  /**
   * Output only. The timestamp when this insurance expires. The format is
   * "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples:
   * "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $expirationDateTime;
  protected $insuranceDocumentReadonlyType = GoogleAdsSearchads360V23CommonLocalServicesDocumentReadOnly::class;
  protected $insuranceDocumentReadonlyDataType = '';
  /**
   * Output only. Insurance document's rejection reason.
   *
   * @var string
   */
  public $rejectionReason;

  /**
   * Output only. Insurance amount. This is measured in "micros" of the currency
   * mentioned in the insurance document.
   *
   * @param string $amountMicros
   */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /**
   * @return string
   */
  public function getAmountMicros()
  {
    return $this->amountMicros;
  }
  /**
   * Output only. The timestamp when this insurance expires. The format is
   * "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples:
   * "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @param string $expirationDateTime
   */
  public function setExpirationDateTime($expirationDateTime)
  {
    $this->expirationDateTime = $expirationDateTime;
  }
  /**
   * @return string
   */
  public function getExpirationDateTime()
  {
    return $this->expirationDateTime;
  }
  /**
   * Output only. The readonly field containing the information for an uploaded
   * insurance document.
   *
   * @param GoogleAdsSearchads360V23CommonLocalServicesDocumentReadOnly $insuranceDocumentReadonly
   */
  public function setInsuranceDocumentReadonly(GoogleAdsSearchads360V23CommonLocalServicesDocumentReadOnly $insuranceDocumentReadonly)
  {
    $this->insuranceDocumentReadonly = $insuranceDocumentReadonly;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocalServicesDocumentReadOnly
   */
  public function getInsuranceDocumentReadonly()
  {
    return $this->insuranceDocumentReadonly;
  }
  /**
   * Output only. Insurance document's rejection reason.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BUSINESS_NAME_MISMATCH,
   * INSURANCE_AMOUNT_INSUFFICIENT, EXPIRED, NO_SIGNATURE, NO_POLICY_NUMBER,
   * NO_COMMERCIAL_GENERAL_LIABILITY, EDITABLE_FORMAT, CATEGORY_MISMATCH,
   * MISSING_EXPIRATION_DATE, POOR_QUALITY, POTENTIALLY_EDITED,
   * WRONG_DOCUMENT_TYPE, NON_FINAL, OTHER
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesInsuranceVerificationArtifact::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesInsuranceVerificationArtifact');
