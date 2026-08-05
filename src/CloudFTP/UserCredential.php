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

class UserCredential extends \Google\Model
{
  /**
   * Type unspecified.
   */
  public const CREDENTIAL_TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * Public key credential.
   */
  public const CREDENTIAL_TYPE_PUBLIC_KEY = 'PUBLIC_KEY';
  /**
   * Required. Name of the user credential.
   *
   * @var string
   */
  public $credentialName;
  /**
   * Required. Type of credential.
   *
   * @var string
   */
  public $credentialType;
  /**
   * Optional. SSH public key body in OpenSSH format. Example: "ssh-rsa
   * AAAAB3NzaC1yc2EAAAADAQABAAABAQ..."
   *
   * @var string
   */
  public $sshPublicKeyBody;

  /**
   * Required. Name of the user credential.
   *
   * @param string $credentialName
   */
  public function setCredentialName($credentialName)
  {
    $this->credentialName = $credentialName;
  }
  /**
   * @return string
   */
  public function getCredentialName()
  {
    return $this->credentialName;
  }
  /**
   * Required. Type of credential.
   *
   * Accepted values: TYPE_UNSPECIFIED, PUBLIC_KEY
   *
   * @param self::CREDENTIAL_TYPE_* $credentialType
   */
  public function setCredentialType($credentialType)
  {
    $this->credentialType = $credentialType;
  }
  /**
   * @return self::CREDENTIAL_TYPE_*
   */
  public function getCredentialType()
  {
    return $this->credentialType;
  }
  /**
   * Optional. SSH public key body in OpenSSH format. Example: "ssh-rsa
   * AAAAB3NzaC1yc2EAAAADAQABAAABAQ..."
   *
   * @param string $sshPublicKeyBody
   */
  public function setSshPublicKeyBody($sshPublicKeyBody)
  {
    $this->sshPublicKeyBody = $sshPublicKeyBody;
  }
  /**
   * @return string
   */
  public function getSshPublicKeyBody()
  {
    return $this->sshPublicKeyBody;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserCredential::class, 'Google_Service_CloudFTP_UserCredential');
