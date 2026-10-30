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

class PullRequest extends \Google\Model
{
  /**
   * Mergeability state is unspecified.
   */
  public const MERGEABILITY_MERGEABILITY_UNSPECIFIED = 'MERGEABILITY_UNSPECIFIED';
  /**
   * The pull request can be merged cleanly without Git conflicts.
   */
  public const MERGEABILITY_MERGEABLE = 'MERGEABLE';
  /**
   * The pull request has merge conflicts and cannot be merged cleanly.
   */
  public const MERGEABILITY_CONFLICTING = 'CONFLICTING';
  /**
   * The mergeability state is currently being computed asynchronously by the
   * upstream SCM provider.
   */
  public const MERGEABILITY_COMPUTING = 'COMPUTING';
  /**
   * Default value.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The PR is open.
   */
  public const STATE_OPEN = 'OPEN';
  /**
   * The PR is closed.
   */
  public const STATE_CLOSED = 'CLOSED';
  /**
   * The PR is merged.
   */
  public const STATE_MERGED = 'MERGED';
  /**
   * The PR is declined. Only used by SCM providers that support declining pull
   * requests. Never used for GitHub, GitHub Enterprise, GitLab, or GitLab
   * Enterprise, where a pull request closed without being merged is `CLOSED`.
   */
  public const STATE_DECLINED = 'DECLINED';
  /**
   * Output only. The username of the author.
   *
   * @var string
   */
  public $author;
  /**
   * Required. The target commit SHA of the base branch.
   *
   * @var string
   */
  public $baseRef;
  /**
   * Optional. The body description of the PR.
   *
   * @var string
   */
  public $body;
  /**
   * Output only. When the PR was closed.
   *
   * @var string
   */
  public $closeTime;
  /**
   * Output only. When the PR was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. When the PR was declined. Only set for SCM providers that
   * support declining pull requests. Never set for GitHub, GitHub Enterprise,
   * GitLab, or GitLab Enterprise, where a pull request closed without being
   * merged is `CLOSED`.
   *
   * @var string
   */
  public $declineTime;
  /**
   * Required. The source commit SHA of the head branch.
   *
   * @var string
   */
  public $headRef;
  /**
   * Output only. The HTML URL of the pull request on the SCM provider.
   *
   * @var string
   */
  public $htmlUrl;
  /**
   * Required. The ID of the PR.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. When the PR was merged.
   *
   * @var string
   */
  public $mergeTime;
  /**
   * Output only. The mergeability state of the pull request.
   *
   * @var string
   */
  public $mergeability;
  /**
   * Output only. The current state of the PR.
   *
   * @var string
   */
  public $state;
  /**
   * Required. The title of the PR.
   *
   * @var string
   */
  public $title;
  /**
   * Output only. When the PR was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The username of the author.
   *
   * @param string $author
   */
  public function setAuthor($author)
  {
    $this->author = $author;
  }
  /**
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
  }
  /**
   * Required. The target commit SHA of the base branch.
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
   * Optional. The body description of the PR.
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
   * Output only. When the PR was closed.
   *
   * @param string $closeTime
   */
  public function setCloseTime($closeTime)
  {
    $this->closeTime = $closeTime;
  }
  /**
   * @return string
   */
  public function getCloseTime()
  {
    return $this->closeTime;
  }
  /**
   * Output only. When the PR was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. When the PR was declined. Only set for SCM providers that
   * support declining pull requests. Never set for GitHub, GitHub Enterprise,
   * GitLab, or GitLab Enterprise, where a pull request closed without being
   * merged is `CLOSED`.
   *
   * @param string $declineTime
   */
  public function setDeclineTime($declineTime)
  {
    $this->declineTime = $declineTime;
  }
  /**
   * @return string
   */
  public function getDeclineTime()
  {
    return $this->declineTime;
  }
  /**
   * Required. The source commit SHA of the head branch.
   *
   * @param string $headRef
   */
  public function setHeadRef($headRef)
  {
    $this->headRef = $headRef;
  }
  /**
   * @return string
   */
  public function getHeadRef()
  {
    return $this->headRef;
  }
  /**
   * Output only. The HTML URL of the pull request on the SCM provider.
   *
   * @param string $htmlUrl
   */
  public function setHtmlUrl($htmlUrl)
  {
    $this->htmlUrl = $htmlUrl;
  }
  /**
   * @return string
   */
  public function getHtmlUrl()
  {
    return $this->htmlUrl;
  }
  /**
   * Required. The ID of the PR.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. When the PR was merged.
   *
   * @param string $mergeTime
   */
  public function setMergeTime($mergeTime)
  {
    $this->mergeTime = $mergeTime;
  }
  /**
   * @return string
   */
  public function getMergeTime()
  {
    return $this->mergeTime;
  }
  /**
   * Output only. The mergeability state of the pull request.
   *
   * Accepted values: MERGEABILITY_UNSPECIFIED, MERGEABLE, CONFLICTING,
   * COMPUTING
   *
   * @param self::MERGEABILITY_* $mergeability
   */
  public function setMergeability($mergeability)
  {
    $this->mergeability = $mergeability;
  }
  /**
   * @return self::MERGEABILITY_*
   */
  public function getMergeability()
  {
    return $this->mergeability;
  }
  /**
   * Output only. The current state of the PR.
   *
   * Accepted values: STATE_UNSPECIFIED, OPEN, CLOSED, MERGED, DECLINED
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
   * Required. The title of the PR.
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
  /**
   * Output only. When the PR was updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PullRequest::class, 'Google_Service_DeveloperConnect_PullRequest');
