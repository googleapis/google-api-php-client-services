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

class GoogleAdsSearchads360V23ServicesStartIdentityVerificationRequest extends \Google\Model
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
  /**
   * Required. The verification program type for which we want to start the
   * verification.
   *
   * @var string
   */
  public $verificationProgram;

  /**
   * Required. The verification program type for which we want to start the
   * verification.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesStartIdentityVerificationRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesStartIdentityVerificationRequest');
