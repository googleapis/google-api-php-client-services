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

class QuorumParameters extends \Google\Collection
{
  protected $collection_key = 'challenges';
  /**
   * Output only. The public keys associated with the 2FA keys that have already
   * approved the SingleTenantHsmInstanceProposal by signing the challenge.
   *
   * @var string[]
   */
  public $approvedTwoFactorPublicKeyPems;
  protected $challengesType = Challenge::class;
  protected $challengesDataType = 'array';
  /**
   * Output only. The required numbers of approvers. This is the M value used
   * for M of N quorum auth. It is less than the number of public keys.
   *
   * @var int
   */
  public $requiredApproverCount;

  /**
   * Output only. The public keys associated with the 2FA keys that have already
   * approved the SingleTenantHsmInstanceProposal by signing the challenge.
   *
   * @param string[] $approvedTwoFactorPublicKeyPems
   */
  public function setApprovedTwoFactorPublicKeyPems($approvedTwoFactorPublicKeyPems)
  {
    $this->approvedTwoFactorPublicKeyPems = $approvedTwoFactorPublicKeyPems;
  }
  /**
   * @return string[]
   */
  public function getApprovedTwoFactorPublicKeyPems()
  {
    return $this->approvedTwoFactorPublicKeyPems;
  }
  /**
   * Output only. The challenges to be signed by 2FA keys for quorum auth. M of
   * N of these challenges are required to be signed to approve the operation.
   *
   * @param Challenge[] $challenges
   */
  public function setChallenges($challenges)
  {
    $this->challenges = $challenges;
  }
  /**
   * @return Challenge[]
   */
  public function getChallenges()
  {
    return $this->challenges;
  }
  /**
   * Output only. The required numbers of approvers. This is the M value used
   * for M of N quorum auth. It is less than the number of public keys.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuorumParameters::class, 'Google_Service_CloudKMS_QuorumParameters');
