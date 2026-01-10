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

class RequiredActionQuorumReply extends \Google\Collection
{
  protected $collection_key = 'requiredChallengeReplies';
  protected $quorumChallengeRepliesType = ChallengeReply::class;
  protected $quorumChallengeRepliesDataType = 'array';
  protected $requiredChallengeRepliesType = ChallengeReply::class;
  protected $requiredChallengeRepliesDataType = 'array';

  /**
   * Required. Quorum members' signed challenge replies. These can be provided
   * across multiple requests. The proposal will be approved when
   * required_approver_count quorum_challenge_replies are provided and when all
   * required_challenge_replies are provided.
   *
   * @param ChallengeReply[] $quorumChallengeReplies
   */
  public function setQuorumChallengeReplies($quorumChallengeReplies)
  {
    $this->quorumChallengeReplies = $quorumChallengeReplies;
  }
  /**
   * @return ChallengeReply[]
   */
  public function getQuorumChallengeReplies()
  {
    return $this->quorumChallengeReplies;
  }
  /**
   * Required. All required challenges must be signed for the proposal to be
   * approved. These can be sent across multiple requests.
   *
   * @param ChallengeReply[] $requiredChallengeReplies
   */
  public function setRequiredChallengeReplies($requiredChallengeReplies)
  {
    $this->requiredChallengeReplies = $requiredChallengeReplies;
  }
  /**
   * @return ChallengeReply[]
   */
  public function getRequiredChallengeReplies()
  {
    return $this->requiredChallengeReplies;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequiredActionQuorumReply::class, 'Google_Service_CloudKMS_RequiredActionQuorumReply');
