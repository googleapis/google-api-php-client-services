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

class PullRequestReviewComment extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const SIDE_DIFF_SIDE_UNSPECIFIED = 'DIFF_SIDE_UNSPECIFIED';
  /**
   * The side of the diff before changes (deleted or modified lines).
   */
  public const SIDE_BASE = 'BASE';
  /**
   * The side of the diff after changes (added or modified lines).
   */
  public const SIDE_HEAD = 'HEAD';
  /**
   * Output only. The username of the author.
   *
   * @var string
   */
  public $author;
  /**
   * Required. The body of the comment.
   *
   * @var string
   */
  public $body;
  /**
   * Output only. The commit SHA the comment was actually applied to.
   *
   * @var string
   */
  public $commitId;
  /**
   * Output only. When the comment was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The first line of the comment range (inclusive). If not
   * specified, the comment applies only to the `last_line`.
   *
   * @var int
   */
  public $firstLine;
  /**
   * Output only. The ID of the comment.
   *
   * @var string
   */
  public $id;
  /**
   * Required. The last line of the comment range (inclusive). If `first_line`
   * is not specified, the comment applies only to this line.
   *
   * @var int
   */
  public $lastLine;
  /**
   * Required. The file path to comment on.
   *
   * @var string
   */
  public $path;
  /**
   * Optional. The side of the diff to comment on. Defaults to HEAD.
   *
   * @var string
   */
  public $side;
  /**
   * Output only. When the comment was updated.
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
   * Required. The body of the comment.
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
   * Output only. The commit SHA the comment was actually applied to.
   *
   * @param string $commitId
   */
  public function setCommitId($commitId)
  {
    $this->commitId = $commitId;
  }
  /**
   * @return string
   */
  public function getCommitId()
  {
    return $this->commitId;
  }
  /**
   * Output only. When the comment was created.
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
   * Optional. The first line of the comment range (inclusive). If not
   * specified, the comment applies only to the `last_line`.
   *
   * @param int $firstLine
   */
  public function setFirstLine($firstLine)
  {
    $this->firstLine = $firstLine;
  }
  /**
   * @return int
   */
  public function getFirstLine()
  {
    return $this->firstLine;
  }
  /**
   * Output only. The ID of the comment.
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
   * Required. The last line of the comment range (inclusive). If `first_line`
   * is not specified, the comment applies only to this line.
   *
   * @param int $lastLine
   */
  public function setLastLine($lastLine)
  {
    $this->lastLine = $lastLine;
  }
  /**
   * @return int
   */
  public function getLastLine()
  {
    return $this->lastLine;
  }
  /**
   * Required. The file path to comment on.
   *
   * @param string $path
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * Optional. The side of the diff to comment on. Defaults to HEAD.
   *
   * Accepted values: DIFF_SIDE_UNSPECIFIED, BASE, HEAD
   *
   * @param self::SIDE_* $side
   */
  public function setSide($side)
  {
    $this->side = $side;
  }
  /**
   * @return self::SIDE_*
   */
  public function getSide()
  {
    return $this->side;
  }
  /**
   * Output only. When the comment was updated.
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
class_alias(PullRequestReviewComment::class, 'Google_Service_DeveloperConnect_PullRequestReviewComment');
