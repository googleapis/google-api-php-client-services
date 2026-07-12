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

class UpgradeKeyTrust extends \Google\Model
{
  /**
   * Required. The name of the CryptoKeyVersion to promote.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The public key associated with the 2FA key that will sign the
   * login nonce for this operation.
   *
   * @var string
   */
  public $twoFactorPublicKeyPem;

  /**
   * Required. The name of the CryptoKeyVersion to promote.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. The public key associated with the 2FA key that will sign the
   * login nonce for this operation.
   *
   * @param string $twoFactorPublicKeyPem
   */
  public function setTwoFactorPublicKeyPem($twoFactorPublicKeyPem)
  {
    $this->twoFactorPublicKeyPem = $twoFactorPublicKeyPem;
  }
  /**
   * @return string
   */
  public function getTwoFactorPublicKeyPem()
  {
    return $this->twoFactorPublicKeyPem;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpgradeKeyTrust::class, 'Google_Service_CloudKMS_UpgradeKeyTrust');
