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

class GoogleAdsSearchads360V23ServicesIdentityVerificationRequirement extends \Google\Model
{
  /**
   * The deadline to submit verification.
   *
   * @var string
   */
  public $verificationCompletionDeadlineTime;
  /**
   * The deadline to start verification in "yyyy-MM-dd HH:mm:ss" format.
   *
   * @var string
   */
  public $verificationStartDeadlineTime;

  /**
   * The deadline to submit verification.
   *
   * @param string $verificationCompletionDeadlineTime
   */
  public function setVerificationCompletionDeadlineTime($verificationCompletionDeadlineTime)
  {
    $this->verificationCompletionDeadlineTime = $verificationCompletionDeadlineTime;
  }
  /**
   * @return string
   */
  public function getVerificationCompletionDeadlineTime()
  {
    return $this->verificationCompletionDeadlineTime;
  }
  /**
   * The deadline to start verification in "yyyy-MM-dd HH:mm:ss" format.
   *
   * @param string $verificationStartDeadlineTime
   */
  public function setVerificationStartDeadlineTime($verificationStartDeadlineTime)
  {
    $this->verificationStartDeadlineTime = $verificationStartDeadlineTime;
  }
  /**
   * @return string
   */
  public function getVerificationStartDeadlineTime()
  {
    return $this->verificationStartDeadlineTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesIdentityVerificationRequirement::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesIdentityVerificationRequirement');
