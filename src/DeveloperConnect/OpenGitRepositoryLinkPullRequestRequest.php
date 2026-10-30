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

class OpenGitRepositoryLinkPullRequestRequest extends \Google\Model
{
  protected $pullRequestType = PullRequest::class;
  protected $pullRequestDataType = '';

  /**
   * Required. The Pull Request details to open. Input fields used: title, body,
   * head_ref, base_ref.
   *
   * @param PullRequest $pullRequest
   */
  public function setPullRequest(PullRequest $pullRequest)
  {
    $this->pullRequest = $pullRequest;
  }
  /**
   * @return PullRequest
   */
  public function getPullRequest()
  {
    return $this->pullRequest;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OpenGitRepositoryLinkPullRequestRequest::class, 'Google_Service_DeveloperConnect_OpenGitRepositoryLinkPullRequestRequest');
