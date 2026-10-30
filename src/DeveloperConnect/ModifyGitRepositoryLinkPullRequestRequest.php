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

class ModifyGitRepositoryLinkPullRequestRequest extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The pull request is open.
   */
  public const STATE_OPEN = 'OPEN';
  /**
   * The pull request is closed.
   */
  public const STATE_CLOSED = 'CLOSED';
  /**
   * Optional. The target branch to merge into.
   *
   * @var string
   */
  public $baseRef;
  /**
   * Optional. The body description of the Pull Request.
   *
   * @var string
   */
  public $body;
  /**
   * Required. The SCM-specific pull request identifier (for example, "45").
   *
   * @var string
   */
  public $pullRequestId;
  /**
   * Optional. The state of the Pull Request.
   *
   * @var string
   */
  public $state;
  /**
   * Optional. The title of the Pull Request.
   *
   * @var string
   */
  public $title;

  /**
   * Optional. The target branch to merge into.
   *
   * @param string $baseRef
   */
  public function setBaseRef($baseRef)
  {
    $this->baseRef = $baseRef;
  }
  /**
   * @return string
   */
  public function getBaseRef()
  {
    return $this->baseRef;
  }
  /**
   * Optional. The body description of the Pull Request.
   *
   * @param string $body
   */
  public function setBody($body)
  {
    $this->body = $body;
  }
  /**
   * @return string
   */
  public function getBody()
  {
    return $this->body;
  }
  /**
   * Required. The SCM-specific pull request identifier (for example, "45").
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
  /**
   * Optional. The state of the Pull Request.
   *
   * Accepted values: STATE_UNSPECIFIED, OPEN, CLOSED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Optional. The title of the Pull Request.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ModifyGitRepositoryLinkPullRequestRequest::class, 'Google_Service_DeveloperConnect_ModifyGitRepositoryLinkPullRequestRequest');
