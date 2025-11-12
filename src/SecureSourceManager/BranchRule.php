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

namespace Google\Service\SecureSourceManager;

class BranchRule extends \Google\Collection
{
  protected $collection_key = 'requiredStatusChecks';
  /**
   * @var bool
   */
  public $allowStaleReviews;
  /**
   * @var string[]
   */
  public $annotations;
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var bool
   */
  public $disabled;
  /**
   * @var string
   */
  public $etag;
  /**
   * @var string
   */
  public $includePattern;
  /**
   * @var int
   */
  public $minimumApprovalsCount;
  /**
   * @var int
   */
  public $minimumReviewsCount;
  /**
   * @var string
   */
  public $name;
  /**
   * @var bool
   */
  public $requireCommentsResolved;
  /**
   * @var bool
   */
  public $requireLinearHistory;
  /**
   * @var bool
   */
  public $requirePullRequest;
  protected $requiredStatusChecksType = Check::class;
  protected $requiredStatusChecksDataType = 'array';
  /**
   * @var string
   */
  public $uid;
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param bool
   */
  public function setAllowStaleReviews($allowStaleReviews)
  {
    $this->allowStaleReviews = $allowStaleReviews;
  }
  /**
   * @return bool
   */
  public function getAllowStaleReviews()
  {
    return $this->allowStaleReviews;
  }
  /**
   * @param string[]
   */
  public function setAnnotations($annotations)
  {
    $this->annotations = $annotations;
  }
  /**
   * @return string[]
   */
  public function getAnnotations()
  {
    return $this->annotations;
  }
  /**
   * @param string
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
   * @param bool
   */
  public function setDisabled($disabled)
  {
    $this->disabled = $disabled;
  }
  /**
   * @return bool
   */
  public function getDisabled()
  {
    return $this->disabled;
  }
  /**
   * @param string
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * @param string
   */
  public function setIncludePattern($includePattern)
  {
    $this->includePattern = $includePattern;
  }
  /**
   * @return string
   */
  public function getIncludePattern()
  {
    return $this->includePattern;
  }
  /**
   * @param int
   */
  public function setMinimumApprovalsCount($minimumApprovalsCount)
  {
    $this->minimumApprovalsCount = $minimumApprovalsCount;
  }
  /**
   * @return int
   */
  public function getMinimumApprovalsCount()
  {
    return $this->minimumApprovalsCount;
  }
  /**
   * @param int
   */
  public function setMinimumReviewsCount($minimumReviewsCount)
  {
    $this->minimumReviewsCount = $minimumReviewsCount;
  }
  /**
   * @return int
   */
  public function getMinimumReviewsCount()
  {
    return $this->minimumReviewsCount;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param bool
   */
  public function setRequireCommentsResolved($requireCommentsResolved)
  {
    $this->requireCommentsResolved = $requireCommentsResolved;
  }
  /**
   * @return bool
   */
  public function getRequireCommentsResolved()
  {
    return $this->requireCommentsResolved;
  }
  /**
   * @param bool
   */
  public function setRequireLinearHistory($requireLinearHistory)
  {
    $this->requireLinearHistory = $requireLinearHistory;
  }
  /**
   * @return bool
   */
  public function getRequireLinearHistory()
  {
    return $this->requireLinearHistory;
  }
  /**
   * @param bool
   */
  public function setRequirePullRequest($requirePullRequest)
  {
    $this->requirePullRequest = $requirePullRequest;
  }
  /**
   * @return bool
   */
  public function getRequirePullRequest()
  {
    return $this->requirePullRequest;
  }
  /**
   * @param Check[]
   */
  public function setRequiredStatusChecks($requiredStatusChecks)
  {
    $this->requiredStatusChecks = $requiredStatusChecks;
  }
  /**
   * @return Check[]
   */
  public function getRequiredStatusChecks()
  {
    return $this->requiredStatusChecks;
  }
  /**
   * @param string
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
  /**
   * @param string
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
class_alias(BranchRule::class, 'Google_Service_SecureSourceManager_BranchRule');
