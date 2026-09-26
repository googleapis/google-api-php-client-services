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

class AddCommentReplyRequest extends \Google\Model
{
  /**
   * The ID of the CommentThread to add the reply to.
   *
   * @var string
   */
  public $commentId;
  protected $postType = Post::class;
  protected $postDataType = '';

  /**
   * The ID of the CommentThread to add the reply to.
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
   * The Post representing the reply.
   *
   * @param Post $post
   */
  public function setPost(Post $post)
  {
    $this->post = $post;
  }
  /**
   * @return Post
   */
  public function getPost()
  {
    return $this->post;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AddCommentReplyRequest::class, 'Google_Service_Sheets_AddCommentReplyRequest');
