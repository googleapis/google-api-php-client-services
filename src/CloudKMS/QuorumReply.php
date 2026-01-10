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

class QuorumReply extends \Google\Collection
{
  protected $collection_key = 'challengeReplies';
  protected $challengeRepliesType = ChallengeReply::class;
  protected $challengeRepliesDataType = 'array';

  /**
   * Required. The challenge replies to approve the proposal. Challenge replies
   * can be sent across multiple requests. The proposal will be approved when
   * required_approver_count challenge replies are provided.
   *
   * @param ChallengeReply[] $challengeReplies
   */
  public function setChallengeReplies($challengeReplies)
  {
    $this->challengeReplies = $challengeReplies;
  }
  /**
   * @return ChallengeReply[]
   */
  public function getChallengeReplies()
  {
    return $this->challengeReplies;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QuorumReply::class, 'Google_Service_CloudKMS_QuorumReply');
