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

class PullRequestComment extends \Google\Model
{
  protected $codeType = Code::class;
  protected $codeDataType = '';
  protected $commentType = Comment::class;
  protected $commentDataType = '';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $name;
  protected $reviewType = Review::class;
  protected $reviewDataType = '';
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param Code
   */
  public function setCode(Code $code)
  {
    $this->code = $code;
  }
  /**
   * @return Code
   */
  public function getCode()
  {
    return $this->code;
  }
  /**
   * @param Comment
   */
  public function setComment(Comment $comment)
  {
    $this->comment = $comment;
  }
  /**
   * @return Comment
   */
  public function getComment()
  {
    return $this->comment;
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
   * @param Review
   */
  public function setReview(Review $review)
  {
    $this->review = $review;
  }
  /**
   * @return Review
   */
  public function getReview()
  {
    return $this->review;
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
class_alias(PullRequestComment::class, 'Google_Service_SecureSourceManager_PullRequestComment');
