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

class GoogleAdsSearchads360V23ResourcesBusinessRegistrationCheckVerificationArtifact extends \Google\Model
{
  /**
   * Not specified.
   */
  public const REGISTRATION_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const REGISTRATION_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Registration number check type.
   */
  public const REGISTRATION_TYPE_NUMBER = 'NUMBER';
  /**
   * Registration document check type.
   */
  public const REGISTRATION_TYPE_DOCUMENT = 'DOCUMENT';
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
   * Business details mismatch.
   */
  public const REJECTION_REASON_BUSINESS_DETAILS_MISMATCH = 'BUSINESS_DETAILS_MISMATCH';
  /**
   * Business registration ID not found.
   */
  public const REJECTION_REASON_ID_NOT_FOUND = 'ID_NOT_FOUND';
  /**
   * Uploaded document not clear, blurry, etc.
   */
  public const REJECTION_REASON_POOR_DOCUMENT_IMAGE_QUALITY = 'POOR_DOCUMENT_IMAGE_QUALITY';
  /**
   * Uploaded document has expired.
   */
  public const REJECTION_REASON_DOCUMENT_EXPIRED = 'DOCUMENT_EXPIRED';
  /**
   * Document revoked or annuled.
   */
  public const REJECTION_REASON_DOCUMENT_INVALID = 'DOCUMENT_INVALID';
  /**
   * Document type mismatch.
   */
  public const REJECTION_REASON_DOCUMENT_TYPE_MISMATCH = 'DOCUMENT_TYPE_MISMATCH';
  /**
   * Uploaded document could not be verified as legitimate.
   */
  public const REJECTION_REASON_DOCUMENT_UNVERIFIABLE = 'DOCUMENT_UNVERIFIABLE';
  /**
   * The business registration process could not be completed due to an issue.
   * Contact https://support.google.com/localservices to learn more.
   */
  public const REJECTION_REASON_OTHER = 'OTHER';
  /**
   * Output only. The id of the check, such as vat_tax_id, representing "VAT Tax
   * ID" requirement.
   *
   * @var string
   */
  public $checkId;
  protected $registrationDocumentType = GoogleAdsSearchads360V23ResourcesBusinessRegistrationDocument::class;
  protected $registrationDocumentDataType = '';
  protected $registrationNumberType = GoogleAdsSearchads360V23ResourcesBusinessRegistrationNumber::class;
  protected $registrationNumberDataType = '';
  /**
   * Output only. The type of business registration check (number, document).
   *
   * @var string
   */
  public $registrationType;
  /**
   * Output only. Registration document rejection reason.
   *
   * @var string
   */
  public $rejectionReason;

  /**
   * Output only. The id of the check, such as vat_tax_id, representing "VAT Tax
   * ID" requirement.
   *
   * @param string $checkId
   */
  public function setCheckId($checkId)
  {
    $this->checkId = $checkId;
  }
  /**
   * @return string
   */
  public function getCheckId()
  {
    return $this->checkId;
  }
  /**
   * Output only. Message storing document info for the business.
   *
   * @param GoogleAdsSearchads360V23ResourcesBusinessRegistrationDocument $registrationDocument
   */
  public function setRegistrationDocument(GoogleAdsSearchads360V23ResourcesBusinessRegistrationDocument $registrationDocument)
  {
    $this->registrationDocument = $registrationDocument;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBusinessRegistrationDocument
   */
  public function getRegistrationDocument()
  {
    return $this->registrationDocument;
  }
  /**
   * Output only. Message storing government issued number for the business.
   *
   * @param GoogleAdsSearchads360V23ResourcesBusinessRegistrationNumber $registrationNumber
   */
  public function setRegistrationNumber(GoogleAdsSearchads360V23ResourcesBusinessRegistrationNumber $registrationNumber)
  {
    $this->registrationNumber = $registrationNumber;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBusinessRegistrationNumber
   */
  public function getRegistrationNumber()
  {
    return $this->registrationNumber;
  }
  /**
   * Output only. The type of business registration check (number, document).
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NUMBER, DOCUMENT
   *
   * @param self::REGISTRATION_TYPE_* $registrationType
   */
  public function setRegistrationType($registrationType)
  {
    $this->registrationType = $registrationType;
  }
  /**
   * @return self::REGISTRATION_TYPE_*
   */
  public function getRegistrationType()
  {
    return $this->registrationType;
  }
  /**
   * Output only. Registration document rejection reason.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BUSINESS_NAME_MISMATCH,
   * BUSINESS_DETAILS_MISMATCH, ID_NOT_FOUND, POOR_DOCUMENT_IMAGE_QUALITY,
   * DOCUMENT_EXPIRED, DOCUMENT_INVALID, DOCUMENT_TYPE_MISMATCH,
   * DOCUMENT_UNVERIFIABLE, OTHER
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
class_alias(GoogleAdsSearchads360V23ResourcesBusinessRegistrationCheckVerificationArtifact::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesBusinessRegistrationCheckVerificationArtifact');
