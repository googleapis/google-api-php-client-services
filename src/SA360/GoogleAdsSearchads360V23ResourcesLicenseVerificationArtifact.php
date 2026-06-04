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

class GoogleAdsSearchads360V23ResourcesLicenseVerificationArtifact extends \Google\Model
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
   * License is unauthorized or been revoked.
   */
  public const REJECTION_REASON_UNAUTHORIZED = 'UNAUTHORIZED';
  /**
   * License is expired.
   */
  public const REJECTION_REASON_EXPIRED = 'EXPIRED';
  /**
   * License is poor quality - blurry images, illegible, etc...
   */
  public const REJECTION_REASON_POOR_QUALITY = 'POOR_QUALITY';
  /**
   * License cannot be verified due to a not legitimate image.
   */
  public const REJECTION_REASON_UNVERIFIABLE = 'UNVERIFIABLE';
  /**
   * License is not the requested document type or contains an invalid ID.
   */
  public const REJECTION_REASON_WRONG_DOCUMENT_OR_ID = 'WRONG_DOCUMENT_OR_ID';
  /**
   * License has another flaw not listed explicitly.
   */
  public const REJECTION_REASON_OTHER = 'OTHER';
  /**
   * Output only. The timestamp when this license expires. The format is "YYYY-
   * MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples: "2018-03-05
   * 09:15:00" or "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $expirationDateTime;
  protected $licenseDocumentReadonlyType = GoogleAdsSearchads360V23CommonLocalServicesDocumentReadOnly::class;
  protected $licenseDocumentReadonlyDataType = '';
  /**
   * Output only. License number.
   *
   * @var string
   */
  public $licenseNumber;
  /**
   * Output only. License type / name.
   *
   * @var string
   */
  public $licenseType;
  /**
   * Output only. First name of the licensee.
   *
   * @var string
   */
  public $licenseeFirstName;
  /**
   * Output only. Last name of the licensee.
   *
   * @var string
   */
  public $licenseeLastName;
  /**
   * Output only. License rejection reason.
   *
   * @var string
   */
  public $rejectionReason;

  /**
   * Output only. The timestamp when this license expires. The format is "YYYY-
   * MM-DD HH:MM:SS" in the Google Ads account's timezone. Examples: "2018-03-05
   * 09:15:00" or "2018-02-01 14:34:30"
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
   * license document.
   *
   * @param GoogleAdsSearchads360V23CommonLocalServicesDocumentReadOnly $licenseDocumentReadonly
   */
  public function setLicenseDocumentReadonly(GoogleAdsSearchads360V23CommonLocalServicesDocumentReadOnly $licenseDocumentReadonly)
  {
    $this->licenseDocumentReadonly = $licenseDocumentReadonly;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocalServicesDocumentReadOnly
   */
  public function getLicenseDocumentReadonly()
  {
    return $this->licenseDocumentReadonly;
  }
  /**
   * Output only. License number.
   *
   * @param string $licenseNumber
   */
  public function setLicenseNumber($licenseNumber)
  {
    $this->licenseNumber = $licenseNumber;
  }
  /**
   * @return string
   */
  public function getLicenseNumber()
  {
    return $this->licenseNumber;
  }
  /**
   * Output only. License type / name.
   *
   * @param string $licenseType
   */
  public function setLicenseType($licenseType)
  {
    $this->licenseType = $licenseType;
  }
  /**
   * @return string
   */
  public function getLicenseType()
  {
    return $this->licenseType;
  }
  /**
   * Output only. First name of the licensee.
   *
   * @param string $licenseeFirstName
   */
  public function setLicenseeFirstName($licenseeFirstName)
  {
    $this->licenseeFirstName = $licenseeFirstName;
  }
  /**
   * @return string
   */
  public function getLicenseeFirstName()
  {
    return $this->licenseeFirstName;
  }
  /**
   * Output only. Last name of the licensee.
   *
   * @param string $licenseeLastName
   */
  public function setLicenseeLastName($licenseeLastName)
  {
    $this->licenseeLastName = $licenseeLastName;
  }
  /**
   * @return string
   */
  public function getLicenseeLastName()
  {
    return $this->licenseeLastName;
  }
  /**
   * Output only. License rejection reason.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BUSINESS_NAME_MISMATCH,
   * UNAUTHORIZED, EXPIRED, POOR_QUALITY, UNVERIFIABLE, WRONG_DOCUMENT_OR_ID,
   * OTHER
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
class_alias(GoogleAdsSearchads360V23ResourcesLicenseVerificationArtifact::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesLicenseVerificationArtifact');
