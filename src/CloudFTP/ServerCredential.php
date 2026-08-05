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

namespace Google\Service\CloudFTP;

class ServerCredential extends \Google\Model
{
  /**
   * Output only. Asymmetric algorithm used by the public key. Possible values
   * (can be expanded in future): - ssh-ed25519
   *
   * @var string
   */
  public $asymmetricAlgorithm;
  /**
   * Output only. The fingerprint is a hash of the public key, and is displayed
   * when clients access the server for the first time to verify the server's
   * identity.
   *
   * @var string
   */
  public $fingerprint;

  /**
   * Output only. Asymmetric algorithm used by the public key. Possible values
   * (can be expanded in future): - ssh-ed25519
   *
   * @param string $asymmetricAlgorithm
   */
  public function setAsymmetricAlgorithm($asymmetricAlgorithm)
  {
    $this->asymmetricAlgorithm = $asymmetricAlgorithm;
  }
  /**
   * @return string
   */
  public function getAsymmetricAlgorithm()
  {
    return $this->asymmetricAlgorithm;
  }
  /**
   * Output only. The fingerprint is a hash of the public key, and is displayed
   * when clients access the server for the first time to verify the server's
   * identity.
   *
   * @param string $fingerprint
   */
  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }
  /**
   * @return string
   */
  public function getFingerprint()
  {
    return $this->fingerprint;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ServerCredential::class, 'Google_Service_CloudFTP_ServerCredential');
