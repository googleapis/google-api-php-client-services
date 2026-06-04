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

class GoogleAdsSearchads360V23ResourcesLocalServicesVerificationArtifact extends \Google\Model
{
  /**
   * Not specified.
   */
  public const ARTIFACT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ARTIFACT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Background check verification artifact.
   */
  public const ARTIFACT_TYPE_BACKGROUND_CHECK = 'BACKGROUND_CHECK';
  /**
   * Insurance verification artifact.
   */
  public const ARTIFACT_TYPE_INSURANCE = 'INSURANCE';
  /**
   * License verification artifact.
   */
  public const ARTIFACT_TYPE_LICENSE = 'LICENSE';
  /**
   * Business registration check verification artifact.
   */
  public const ARTIFACT_TYPE_BUSINESS_REGISTRATION_CHECK = 'BUSINESS_REGISTRATION_CHECK';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Artifact has passed verification.
   */
  public const STATUS_PASSED = 'PASSED';
  /**
   * Artifact has failed verification.
   */
  public const STATUS_FAILED = 'FAILED';
  /**
   * Artifact is in the process of verification.
   */
  public const STATUS_PENDING = 'PENDING';
  /**
   * Artifact needs user to upload information before it is verified.
   */
  public const STATUS_NO_SUBMISSION = 'NO_SUBMISSION';
  /**
   * Artifact has been cancelled by the user.
   */
  public const STATUS_CANCELLED = 'CANCELLED';
  /**
   * Output only. The type of the verification artifact.
   *
   * @var string
   */
  public $artifactType;
  protected $backgroundCheckVerificationArtifactType = GoogleAdsSearchads360V23ResourcesBackgroundCheckVerificationArtifact::class;
  protected $backgroundCheckVerificationArtifactDataType = '';
  protected $businessRegistrationCheckVerificationArtifactType = GoogleAdsSearchads360V23ResourcesBusinessRegistrationCheckVerificationArtifact::class;
  protected $businessRegistrationCheckVerificationArtifactDataType = '';
  /**
   * Output only. The timestamp when this verification artifact was created. The
   * format is "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone.
   * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @var string
   */
  public $creationDateTime;
  /**
   * Output only. The ID of the verification artifact.
   *
   * @var string
   */
  public $id;
  protected $insuranceVerificationArtifactType = GoogleAdsSearchads360V23ResourcesInsuranceVerificationArtifact::class;
  protected $insuranceVerificationArtifactDataType = '';
  protected $licenseVerificationArtifactType = GoogleAdsSearchads360V23ResourcesLicenseVerificationArtifact::class;
  protected $licenseVerificationArtifactDataType = '';
  /**
   * Immutable. The resource name of the Local Services Verification. Local
   * Services Verification resource names have the form: `customers/{customer_id
   * }/localServicesVerificationArtifacts/{verification_artifact_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status of the verification artifact.
   *
   * @var string
   */
  public $status;

  /**
   * Output only. The type of the verification artifact.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BACKGROUND_CHECK, INSURANCE,
   * LICENSE, BUSINESS_REGISTRATION_CHECK
   *
   * @param self::ARTIFACT_TYPE_* $artifactType
   */
  public function setArtifactType($artifactType)
  {
    $this->artifactType = $artifactType;
  }
  /**
   * @return self::ARTIFACT_TYPE_*
   */
  public function getArtifactType()
  {
    return $this->artifactType;
  }
  /**
   * Output only. A background check verification artifact.
   *
   * @param GoogleAdsSearchads360V23ResourcesBackgroundCheckVerificationArtifact $backgroundCheckVerificationArtifact
   */
  public function setBackgroundCheckVerificationArtifact(GoogleAdsSearchads360V23ResourcesBackgroundCheckVerificationArtifact $backgroundCheckVerificationArtifact)
  {
    $this->backgroundCheckVerificationArtifact = $backgroundCheckVerificationArtifact;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBackgroundCheckVerificationArtifact
   */
  public function getBackgroundCheckVerificationArtifact()
  {
    return $this->backgroundCheckVerificationArtifact;
  }
  /**
   * Output only. A business registration check verification artifact.
   *
   * @param GoogleAdsSearchads360V23ResourcesBusinessRegistrationCheckVerificationArtifact $businessRegistrationCheckVerificationArtifact
   */
  public function setBusinessRegistrationCheckVerificationArtifact(GoogleAdsSearchads360V23ResourcesBusinessRegistrationCheckVerificationArtifact $businessRegistrationCheckVerificationArtifact)
  {
    $this->businessRegistrationCheckVerificationArtifact = $businessRegistrationCheckVerificationArtifact;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesBusinessRegistrationCheckVerificationArtifact
   */
  public function getBusinessRegistrationCheckVerificationArtifact()
  {
    return $this->businessRegistrationCheckVerificationArtifact;
  }
  /**
   * Output only. The timestamp when this verification artifact was created. The
   * format is "YYYY-MM-DD HH:MM:SS" in the Google Ads account's timezone.
   * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
   *
   * @param string $creationDateTime
   */
  public function setCreationDateTime($creationDateTime)
  {
    $this->creationDateTime = $creationDateTime;
  }
  /**
   * @return string
   */
  public function getCreationDateTime()
  {
    return $this->creationDateTime;
  }
  /**
   * Output only. The ID of the verification artifact.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. An insurance verification artifact.
   *
   * @param GoogleAdsSearchads360V23ResourcesInsuranceVerificationArtifact $insuranceVerificationArtifact
   */
  public function setInsuranceVerificationArtifact(GoogleAdsSearchads360V23ResourcesInsuranceVerificationArtifact $insuranceVerificationArtifact)
  {
    $this->insuranceVerificationArtifact = $insuranceVerificationArtifact;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesInsuranceVerificationArtifact
   */
  public function getInsuranceVerificationArtifact()
  {
    return $this->insuranceVerificationArtifact;
  }
  /**
   * Output only. A license verification artifact.
   *
   * @param GoogleAdsSearchads360V23ResourcesLicenseVerificationArtifact $licenseVerificationArtifact
   */
  public function setLicenseVerificationArtifact(GoogleAdsSearchads360V23ResourcesLicenseVerificationArtifact $licenseVerificationArtifact)
  {
    $this->licenseVerificationArtifact = $licenseVerificationArtifact;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesLicenseVerificationArtifact
   */
  public function getLicenseVerificationArtifact()
  {
    return $this->licenseVerificationArtifact;
  }
  /**
   * Immutable. The resource name of the Local Services Verification. Local
   * Services Verification resource names have the form: `customers/{customer_id
   * }/localServicesVerificationArtifacts/{verification_artifact_id}`
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
   * Output only. The status of the verification artifact.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, PASSED, FAILED, PENDING,
   * NO_SUBMISSION, CANCELLED
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
class_alias(GoogleAdsSearchads360V23ResourcesLocalServicesVerificationArtifact::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesLocalServicesVerificationArtifact');
