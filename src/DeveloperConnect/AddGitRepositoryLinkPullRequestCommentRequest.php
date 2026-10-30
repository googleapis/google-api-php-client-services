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

namespace Google\Service\DeveloperConnect;

class AddGitRepositoryLinkPullRequestCommentRequest extends \Google\Model
{
  protected $commentType = PullRequestComment::class;
  protected $commentDataType = '';
  /**
   * Required. The ID of the Pull Request.
   *
   * @var string
   */
  public $pullRequestId;

  /**
   * Required. The comment to add.
   *
   * @param PullRequestComment $comment
   */
  public function setComment(PullRequestComment $comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return PullRequestComment
   */
  public function getComment()
  {
    return $this->comment;
  }
  /**
   * Required. The ID of the Pull Request.
   *
   * @param string $pullRequestId
   */
  public function setPullRequestId($pullRequestId)
  {
    $this->pullRequestId = $pullRequestId;
  }
  /**
   * @return string
   */
  public function getPullRequestId()
  {
    return $this->pullRequestId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddGitRepositoryLinkPullRequestCommentRequest::class, 'Google_Service_DeveloperConnect_AddGitRepositoryLinkPullRequestCommentRequest');
