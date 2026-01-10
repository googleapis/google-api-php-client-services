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

namespace Google\Service\CloudKMS;

class ChallengeReply extends \Google\Model
{
  /**
   * Required. The public key associated with the 2FA key.
   *
   * @var string
   */
  public $publicKeyPem;
  /**
   * Required. The signed challenge associated with the 2FA key. The signature
   * must be RSASSA-PKCS1 v1.5 with a SHA256 digest.
   *
   * @var string
   */
  public $signedChallenge;

  /**
   * Required. The public key associated with the 2FA key.
   *
   * @param string $publicKeyPem
   */
  public function setPublicKeyPem($publicKeyPem)
  {
    $this->publicKeyPem = $publicKeyPem;
  }
  /**
   * @return string
   */
  public function getPublicKeyPem()
  {
    return $this->publicKeyPem;
  }
  /**
   * Required. The signed challenge associated with the 2FA key. The signature
   * must be RSASSA-PKCS1 v1.5 with a SHA256 digest.
   *
   * @param string $signedChallenge
   */
  public function setSignedChallenge($signedChallenge)
  {
    $this->signedChallenge = $signedChallenge;
  }
  /**
   * @return string
   */
  public function getSignedChallenge()
  {
    return $this->signedChallenge;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChallengeReply::class, 'Google_Service_CloudKMS_ChallengeReply');
