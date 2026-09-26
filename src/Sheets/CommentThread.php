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

namespace Google\Service\Sheets;

class CommentThread extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const STATUS_STATUS_UNSPECIFIED = 'STATUS_UNSPECIFIED';
  /**
   * The comment thread is open.
   */
  public const STATUS_OPEN = 'OPEN';
  /**
   * The comment thread is resolved.
   */
  public const STATUS_RESOLVED = 'RESOLVED';
  protected $collection_key = 'replies';
  /**
   * The ID of the CommentAnchor in the sheet that this thread is tied to.
   *
   * @var string
   */
  public $anchorId;
  /**
   * The unique ID of the comment thread.
   *
   * @var string
   */
  public $commentId;
  protected $headPostType = Post::class;
  protected $headPostDataType = '';
  /**
   * The quoted text from the spreadsheet when the comment was created,
   * formatted as plain-text.
   *
   * @var string
   */
  public $plainTextQuote;
  protected $repliesType = Post::class;
  protected $repliesDataType = 'array';
  /**
   * Whether the thread is open or resolved.
   *
   * @var string
   */
  public $status;

  /**
   * The ID of the CommentAnchor in the sheet that this thread is tied to.
   *
   * @param string $anchorId
   */
  public function setAnchorId($anchorId)
  {
    $this->anchorId = $anchorId;
  }
  /**
   * @return string
   */
  public function getAnchorId()
  {
    return $this->anchorId;
  }
  /**
   * The unique ID of the comment thread.
   *
   * @param string $commentId
   */
  public function setCommentId($commentId)
  {
    $this->commentId = $commentId;
  }
  /**
   * @return string
   */
  public function getCommentId()
  {
    return $this->commentId;
  }
  /**
   * The first post in the thread.
   *
   * @param Post $headPost
   */
  public function setHeadPost(Post $headPost)
  {
    $this->headPost = $headPost;
  }
  /**
   * @return Post
   */
  public function getHeadPost()
  {
    return $this->headPost;
  }
  /**
   * The quoted text from the spreadsheet when the comment was created,
   * formatted as plain-text.
   *
   * @param string $plainTextQuote
   */
  public function setPlainTextQuote($plainTextQuote)
  {
    $this->plainTextQuote = $plainTextQuote;
  }
  /**
   * @return string
   */
  public function getPlainTextQuote()
  {
    return $this->plainTextQuote;
  }
  /**
   * Replies to the head post.
   *
   * @param Post[] $replies
   */
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  /**
   * @return Post[]
   */
  public function getReplies()
  {
    return $this->replies;
  }
  /**
   * Whether the thread is open or resolved.
   *
   * Accepted values: STATUS_UNSPECIFIED, OPEN, RESOLVED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommentThread::class, 'Google_Service_Sheets_CommentThread');
