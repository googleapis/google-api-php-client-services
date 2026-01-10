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

class QuorumAuth extends \Google\Collection
{
  protected $collection_key = 'twoFactorPublicKeyPems';
  /**
   * Output only. The required numbers of approvers. The M value used for M of N
   * quorum auth. Must be greater than or equal to 2 and less than or equal to
   * total_approver_count - 1.
   *
   * @var int
   */
  public $requiredApproverCount;
  /**
   * Required. The total number of approvers. This is the N value used for M of
   * N quorum auth. Must be greater than or equal to 3 and less than or equal to
   * 16.
   *
   * @var int
   */
  public $totalApproverCount;
  /**
   * Output only. The public keys associated with the 2FA keys for M of N quorum
   * auth.
   *
   * @var string[]
   */
  public $twoFactorPublicKeyPems;

  /**
   * Output only. The required numbers of approvers. The M value used for M of N
   * quorum auth. Must be greater than or equal to 2 and less than or equal to
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
   * Required. The total number of approvers. This is the N value used for M of
   * N quorum auth. Must be greater than or equal to 3 and less than or equal to
   * 16.
   *
   * @param int $totalApproverCount
   */
  public function setTotalApproverCount($totalApproverCount)
  {
    $this->totalApproverCount = $totalApproverCount;
  }
  /**
   * @return int
   */
  public function getTotalApproverCount()
  {
    return $this->totalApproverCount;
  }
  /**
   * Output only. The public keys associated with the 2FA keys for M of N quorum
   * auth.
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
class_alias(QuorumAuth::class, 'Google_Service_CloudKMS_QuorumAuth');
