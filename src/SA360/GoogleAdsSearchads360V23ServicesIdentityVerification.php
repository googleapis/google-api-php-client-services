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

class GoogleAdsSearchads360V23ServicesIdentityVerification extends \Google\Model
{
  /**
   * Not specified.
   */
  public const VERIFICATION_PROGRAM_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const VERIFICATION_PROGRAM_UNKNOWN = 'UNKNOWN';
  /**
   * Advertiser submits documents to verify their identity.
   */
  public const VERIFICATION_PROGRAM_ADVERTISER_IDENTITY_VERIFICATION = 'ADVERTISER_IDENTITY_VERIFICATION';
  protected $identityVerificationRequirementType = GoogleAdsSearchads360V23ServicesIdentityVerificationRequirement::class;
  protected $identityVerificationRequirementDataType = '';
  /**
   * The verification program type.
   *
   * @var string
   */
  public $verificationProgram;
  protected $verificationProgressType = GoogleAdsSearchads360V23ServicesIdentityVerificationProgress::class;
  protected $verificationProgressDataType = '';

  /**
   * The verification requirement for this verification program for this
   * customer.
   *
   * @param GoogleAdsSearchads360V23ServicesIdentityVerificationRequirement $identityVerificationRequirement
   */
  public function setIdentityVerificationRequirement(GoogleAdsSearchads360V23ServicesIdentityVerificationRequirement $identityVerificationRequirement)
  {
    $this->identityVerificationRequirement = $identityVerificationRequirement;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesIdentityVerificationRequirement
   */
  public function getIdentityVerificationRequirement()
  {
    return $this->identityVerificationRequirement;
  }
  /**
   * The verification program type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADVERTISER_IDENTITY_VERIFICATION
   *
   * @param self::VERIFICATION_PROGRAM_* $verificationProgram
   */
  public function setVerificationProgram($verificationProgram)
  {
    $this->verificationProgram = $verificationProgram;
  }
  /**
   * @return self::VERIFICATION_PROGRAM_*
   */
  public function getVerificationProgram()
  {
    return $this->verificationProgram;
  }
  /**
   * Information regarding progress for this verification program for this
   * customer.
   *
   * @param GoogleAdsSearchads360V23ServicesIdentityVerificationProgress $verificationProgress
   */
  public function setVerificationProgress(GoogleAdsSearchads360V23ServicesIdentityVerificationProgress $verificationProgress)
  {
    $this->verificationProgress = $verificationProgress;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesIdentityVerificationProgress
   */
  public function getVerificationProgress()
  {
    return $this->verificationProgress;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesIdentityVerification::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesIdentityVerification');
