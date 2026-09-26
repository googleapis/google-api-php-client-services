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

class Post extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const COMMENT_ACTION_COMMENT_ACTION_TYPE_UNSPECIFIED = 'COMMENT_ACTION_TYPE_UNSPECIFIED';
  /**
   * No action change in this post.
   */
  public const COMMENT_ACTION_NO_COMMENT_ACTION_CHANGE = 'NO_COMMENT_ACTION_CHANGE';
  /**
   * This post resolves the thread.
   */
  public const COMMENT_ACTION_RESOLVE = 'RESOLVE';
  /**
   * This post reopens the thread.
   */
  public const COMMENT_ACTION_REOPEN = 'REOPEN';
  /**
   * Optional. The email of the user who is being newly assigned to the thread
   * as part of this post. Returns a 400 bad request error if: - The parent
   * thread is a CommentThread whose headPost does not have an assignee. -
   * commentAction is specified as `RESOLVE` or `REOPEN`. - `assignee_email`
   * exceeds 2048 UTF-8 code units.
   *
   * @var string
   */
  public $assigneeEmail;
  protected $authorType = PostAuthor::class;
  protected $authorDataType = '';
  /**
   * Action taken as part of creating the post.
   *
   * @var string
   */
  public $commentAction;
  /**
   * The content of the post. Required to be non-empty if comment_action is not
   * `RESOLVE` or `REOPEN`. This text content will be handled similarly to
   * comments created in the Slides editor. It will have similar behaviors for
   * formatting, notifications, etc. May not exceed 2048 UTF-8 code units.
   *
   * @var string
   */
  public $content;
  /**
   * Output only. The content of the post as HTML.
   *
   * @var string
   */
  public $contentHtml;
  /**
   * Output only. The time the post was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Whether the post is deleted. If `true`, content and author
   * fields will be empty.
   *
   * @var bool
   */
  public $deleted;
  /**
   * Output only. Whether the post is from a copied presentation. This field
   * cannot be set directly by callers.
   *
   * @var bool
   */
  public $fromCopiedPresentation;
  /**
   * Output only. Whether the post is from an imported presentation. This field
   * cannot be set directly by callers.
   *
   * @var bool
   */
  public $fromImportedPresentation;
  /**
   * Output only. The unique ID of the post.
   *
   * @var string
   */
  public $postId;
  /**
   * Output only. The time the post was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. The email of the user who is being newly assigned to the thread
   * as part of this post. Returns a 400 bad request error if: - The parent
   * thread is a CommentThread whose headPost does not have an assignee. -
   * commentAction is specified as `RESOLVE` or `REOPEN`. - `assignee_email`
   * exceeds 2048 UTF-8 code units.
   *
   * @param string $assigneeEmail
   */
  public function setAssigneeEmail($assigneeEmail)
  {
    $this->assigneeEmail = $assigneeEmail;
  }
  /**
   * @return string
   */
  public function getAssigneeEmail()
  {
    return $this->assigneeEmail;
  }
  /**
   * Output only. The user who created the post.
   *
   * @param PostAuthor $author
   */
  public function setAuthor(PostAuthor $author)
  {
    $this->author = $author;
  }
  /**
   * @return PostAuthor
   */
  public function getAuthor()
  {
    return $this->author;
  }
  /**
   * Action taken as part of creating the post.
   *
   * Accepted values: COMMENT_ACTION_TYPE_UNSPECIFIED, NO_COMMENT_ACTION_CHANGE,
   * RESOLVE, REOPEN
   *
   * @param self::COMMENT_ACTION_* $commentAction
   */
  public function setCommentAction($commentAction)
  {
    $this->commentAction = $commentAction;
  }
  /**
   * @return self::COMMENT_ACTION_*
   */
  public function getCommentAction()
  {
    return $this->commentAction;
  }
  /**
   * The content of the post. Required to be non-empty if comment_action is not
   * `RESOLVE` or `REOPEN`. This text content will be handled similarly to
   * comments created in the Slides editor. It will have similar behaviors for
   * formatting, notifications, etc. May not exceed 2048 UTF-8 code units.
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
   * Output only. The content of the post as HTML.
   *
   * @param string $contentHtml
   */
  public function setContentHtml($contentHtml)
  {
    $this->contentHtml = $contentHtml;
  }
  /**
   * @return string
   */
  public function getContentHtml()
  {
    return $this->contentHtml;
  }
  /**
   * Output only. The time the post was created.
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
   * Output only. Whether the post is deleted. If `true`, content and author
   * fields will be empty.
   *
   * @param bool $deleted
   */
  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }
  /**
   * @return bool
   */
  public function getDeleted()
  {
    return $this->deleted;
  }
  /**
   * Output only. Whether the post is from a copied presentation. This field
   * cannot be set directly by callers.
   *
   * @param bool $fromCopiedPresentation
   */
  public function setFromCopiedPresentation($fromCopiedPresentation)
  {
    $this->fromCopiedPresentation = $fromCopiedPresentation;
  }
  /**
   * @return bool
   */
  public function getFromCopiedPresentation()
  {
    return $this->fromCopiedPresentation;
  }
  /**
   * Output only. Whether the post is from an imported presentation. This field
   * cannot be set directly by callers.
   *
   * @param bool $fromImportedPresentation
   */
  public function setFromImportedPresentation($fromImportedPresentation)
  {
    $this->fromImportedPresentation = $fromImportedPresentation;
  }
  /**
   * @return bool
   */
  public function getFromImportedPresentation()
  {
    return $this->fromImportedPresentation;
  }
  /**
   * Output only. The unique ID of the post.
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
  /**
   * Output only. The time the post was last updated.
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
class_alias(Post::class, 'Google_Service_Slides_Post');
