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

class RegisterTwoFactorAuthKeys extends \Google\Collection
{
  protected $collection_key = 'twoFactorPublicKeyPems';
  /**
   * Required. The required numbers of approvers to set for the
   * SingleTenantHsmInstance. This is the M value used for M of N quorum auth.
   * Must be greater than or equal to 2 and less than or equal to
   * total_approver_count - 1.
   *
   * @var int
   */
  public $requiredApproverCount;
  /**
   * Required. The public keys associated with the 2FA keys for M of N quorum
   * auth. Public keys must be associated with RSA 2048 keys.
   *
   * @var string[]
   */
  public $twoFactorPublicKeyPems;

  /**
   * Required. The required numbers of approvers to set for the
   * SingleTenantHsmInstance. This is the M value used for M of N quorum auth.
   * Must be greater than or equal to 2 and less than or equal to
   * total_approver_count - 1.
   *
   * @param int $requiredApproverCount
   */
  public function setRequiredApproverCount($requiredApproverCount)
  {
    $this->requiredApproverCount = $requiredApproverCount;
  }
  /**
   * @return int
   */
  public function getRequiredApproverCount()
  {
    return $this->requiredApproverCount;
  }
  /**
   * Required. The public keys associated with the 2FA keys for M of N quorum
   * auth. Public keys must be associated with RSA 2048 keys.
   *
   * @param string[] $twoFactorPublicKeyPems
   */
  public function setTwoFactorPublicKeyPems($twoFactorPublicKeyPems)
  {
    $this->twoFactorPublicKeyPems = $twoFactorPublicKeyPems;
  }
  /**
   * @return string[]
   */
  public function getTwoFactorPublicKeyPems()
  {
    return $this->twoFactorPublicKeyPems;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RegisterTwoFactorAuthKeys::class, 'Google_Service_CloudKMS_RegisterTwoFactorAuthKeys');
