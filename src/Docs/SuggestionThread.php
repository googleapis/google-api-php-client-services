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

namespace Google\Service\Docs;

class SuggestionThread extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const STATUS_STATUS_UNSPECIFIED = 'STATUS_UNSPECIFIED';
  /**
   * The suggestion thread is open.
   */
  public const STATUS_OPEN = 'OPEN';
  /**
   * The suggestion thread is accepted.
   */
  public const STATUS_ACCEPTED = 'ACCEPTED';
  /**
   * The suggestion thread is rejected.
   */
  public const STATUS_REJECTED = 'REJECTED';
  protected $collection_key = 'replies';
  protected $headPostType = Post::class;
  protected $headPostDataType = '';
  protected $repliesType = Post::class;
  protected $repliesDataType = 'array';
  /**
   * Whether the thread is open, accepted, or rejected.
   *
   * @var string
   */
  public $status;
  /**
   * The unique ID of the suggestion.
   *
   * @var string
   */
  public $suggestionId;
  /**
   * Summary of the suggested differences in the document, in HTML. May be
   * empty.
   *
   * @var string
   */
  public $summaryHtml;
  /**
   * Summary of the suggested differences in the document, in plain text. May be
   * empty.
   *
   * @var string
   */
  public $summaryText;

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
   * Whether the thread is open, accepted, or rejected.
   *
   * Accepted values: STATUS_UNSPECIFIED, OPEN, ACCEPTED, REJECTED
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
  /**
   * The unique ID of the suggestion.
   *
   * @param string $suggestionId
   */
  public function setSuggestionId($suggestionId)
  {
    $this->suggestionId = $suggestionId;
  }
  /**
   * @return string
   */
  public function getSuggestionId()
  {
    return $this->suggestionId;
  }
  /**
   * Summary of the suggested differences in the document, in HTML. May be
   * empty.
   *
   * @param string $summaryHtml
   */
  public function setSummaryHtml($summaryHtml)
  {
    $this->summaryHtml = $summaryHtml;
  }
  /**
   * @return string
   */
  public function getSummaryHtml()
  {
    return $this->summaryHtml;
  }
  /**
   * Summary of the suggested differences in the document, in plain text. May be
   * empty.
   *
   * @param string $summaryText
   */
  public function setSummaryText($summaryText)
  {
    $this->summaryText = $summaryText;
  }
  /**
   * @return string
   */
  public function getSummaryText()
  {
    return $this->summaryText;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuggestionThread::class, 'Google_Service_Docs_SuggestionThread');
