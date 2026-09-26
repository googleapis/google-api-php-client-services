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

namespace Google\Service\Slides;

class UpdateCommentPostRequest extends \Google\Model
{
  /**
   * The ID of the CommentThread which the post belongs to.
   *
   * @var string
   */
  public $commentId;
  /**
   * The new text of the comment, as plain text. This text content will be
   * handled similarly to comments created in the Slides editor. It will have
   * similar behaviors for formatting, notifications, etc. This field cannot be
   * empty, and must not exceed 2048 UTF-8 code units.
   *
   * @var string
   */
  public $content;
  /**
   * The ID of the post being updated.
   *
   * @var string
   */
  public $postId;

  /**
   * The ID of the CommentThread which the post belongs to.
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
   * The new text of the comment, as plain text. This text content will be
   * handled similarly to comments created in the Slides editor. It will have
   * similar behaviors for formatting, notifications, etc. This field cannot be
   * empty, and must not exceed 2048 UTF-8 code units.
   *
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * The ID of the post being updated.
   *
   * @param string $postId
   */
  public function setPostId($postId)
  {
    $this->postId = $postId;
  }
  /**
   * @return string
   */
  public function getPostId()
  {
    return $this->postId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UpdateCommentPostRequest::class, 'Google_Service_Slides_UpdateCommentPostRequest');
