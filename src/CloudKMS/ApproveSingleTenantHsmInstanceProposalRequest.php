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

class ApproveSingleTenantHsmInstanceProposalRequest extends \Google\Model
{
  protected $quorumReplyType = QuorumReply::class;
  protected $quorumReplyDataType = '';
  protected $requiredActionQuorumReplyType = RequiredActionQuorumReply::class;
  protected $requiredActionQuorumReplyDataType = '';

  /**
   * Required. The reply to QuorumParameters for approving the proposal.
   *
   * @param QuorumReply $quorumReply
   */
  public function setQuorumReply(QuorumReply $quorumReply)
  {
    $this->quorumReply = $quorumReply;
  }
  /**
   * @return QuorumReply
   */
  public function getQuorumReply()
  {
    return $this->quorumReply;
  }
  /**
   * Required. The reply to RequiredActionQuorumParameters for approving the
   * proposal.
   *
   * @param RequiredActionQuorumReply $requiredActionQuorumReply
   */
  public function setRequiredActionQuorumReply(RequiredActionQuorumReply $requiredActionQuorumReply)
  {
    $this->requiredActionQuorumReply = $requiredActionQuorumReply;
  }
  /**
   * @return RequiredActionQuorumReply
   */
  public function getRequiredActionQuorumReply()
  {
    return $this->requiredActionQuorumReply;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApproveSingleTenantHsmInstanceProposalRequest::class, 'Google_Service_CloudKMS_ApproveSingleTenantHsmInstanceProposalRequest');
