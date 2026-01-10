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

class RequiredActionQuorumParameters extends \Google\Collection
{
  protected $collection_key = 'requiredChallenges';
  /**
   * Output only. The public keys associated with the 2FA keys that have already
   * approved the SingleTenantHsmInstanceProposal by signing the challenge.
   *
   * @var string[]
   */
  public $approvedTwoFactorPublicKeyPems;
  protected $quorumChallengesType = Challenge::class;
  protected $quorumChallengesDataType = 'array';
  /**
   * Output only. The required number of quorum approvers. This is the M value
   * used for M of N quorum auth. It is less than the number of public keys.
   *
   * @var int
   */
  public $requiredApproverCount;
  protected $requiredChallengesType = Challenge::class;
  protected $requiredChallengesDataType = 'array';

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
   * @param Challenge[] $quorumChallenges
   */
  public function setQuorumChallenges($quorumChallenges)
  {
    $this->quorumChallenges = $quorumChallenges;
  }
  /**
   * @return Challenge[]
   */
  public function getQuorumChallenges()
  {
    return $this->quorumChallenges;
  }
  /**
   * Output only. The required number of quorum approvers. This is the M value
   * used for M of N quorum auth. It is less than the number of public keys.
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
   * Output only. A list of specific challenges that must be signed. For some
   * operations, this will contain a single challenge.
   *
   * @param Challenge[] $requiredChallenges
   */
  public function setRequiredChallenges($requiredChallenges)
  {
    $this->requiredChallenges = $requiredChallenges;
  }
  /**
   * @return Challenge[]
   */
  public function getRequiredChallenges()
  {
    return $this->requiredChallenges;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequiredActionQuorumParameters::class, 'Google_Service_CloudKMS_RequiredActionQuorumParameters');
