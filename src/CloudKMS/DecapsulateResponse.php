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

class DecapsulateResponse extends \Google\Model
{
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $protectionLevel;
  /**
   * @var string
   */
  public $sharedSecret;
  /**
   * @var string
   */
  public $sharedSecretCrc32c;
  /**
   * @var bool
   */
  public $verifiedCiphertextCrc32c;

  /**
   * @param string
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
   * @param string
   */
  public function setProtectionLevel($protectionLevel)
  {
    $this->protectionLevel = $protectionLevel;
  }
  /**
   * @return string
   */
  public function getProtectionLevel()
  {
    return $this->protectionLevel;
  }
  /**
   * @param string
   */
  public function setSharedSecret($sharedSecret)
  {
    $this->sharedSecret = $sharedSecret;
  }
  /**
   * @return string
   */
  public function getSharedSecret()
  {
    return $this->sharedSecret;
  }
  /**
   * @param string
   */
  public function setSharedSecretCrc32c($sharedSecretCrc32c)
  {
    $this->sharedSecretCrc32c = $sharedSecretCrc32c;
  }
  /**
   * @return string
   */
  public function getSharedSecretCrc32c()
  {
    return $this->sharedSecretCrc32c;
  }
  /**
   * @param bool
   */
  public function setVerifiedCiphertextCrc32c($verifiedCiphertextCrc32c)
  {
    $this->verifiedCiphertextCrc32c = $verifiedCiphertextCrc32c;
  }
  /**
   * @return bool
   */
  public function getVerifiedCiphertextCrc32c()
  {
    return $this->verifiedCiphertextCrc32c;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DecapsulateResponse::class, 'Google_Service_CloudKMS_DecapsulateResponse');
