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
   * Default value. This value is unused.
   */
  public const SUGGESTION_ACTION_SUGGESTION_ACTION_TYPE_UNSPECIFIED = 'SUGGESTION_ACTION_TYPE_UNSPECIFIED';
  /**
   * No action change in this post.
   */
  public const SUGGESTION_ACTION_NO_SUGGESTION_ACTION_CHANGE = 'NO_SUGGESTION_ACTION_CHANGE';
  /**
   * This post accepts the suggestion.
   */
  public const SUGGESTION_ACTION_ACCEPT = 'ACCEPT';
  /**
   * This post rejects the suggestion.
   */
  public const SUGGESTION_ACTION_REJECT = 'REJECT';
  /**
   * Optional. The email of the user who is being newly assigned to the thread
   * as part of this post. Returns a 400 bad request error if: - The parent
   * thread is a CommentThread whose headPost does not have an assignee. - The
   * parent thread is a SuggestionThread. - commentAction is specified as
   * `RESOLVE` or `REOPEN`. - `assigneeEmail` exceeds 2048 UTF-8 code units.
   *
   * @var string
   */
  public $assigneeEmail;
  protected $authorType = PostAuthor::class;
  protected $authorDataType = '';
  /**
   * Optional. The action type for comment posts.
   *
   * @var string
   */
  public $commentAction;
  /**
   * The content of the post. Required to be non-empty if commentAction is not
   * `RESOLVE` or `REOPEN`. This text content will be handled similarly to
   * comments created in the Docs editor. It will have similar behaviors for
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
   * Output only. Whether the post is from a copied document. This field cannot
   * be set directly by callers.
   *
   * @var bool
   */
  public $fromCopiedDocument;
  /**
   * Output only. Whether the post is from a document comparison. This field
   * cannot be set directly by callers.
   *
   * @var bool
   */
  public $fromDocumentComparison;
  /**
   * Output only. Whether the post is from an imported document. This field
   * cannot be set directly by callers.
   *
   * @var bool
   */
  public $fromImportedDocument;
  /**
   * Output only. The unique ID of the post.
   *
   * @var string
   */
  public $postId;
  /**
   * Output only. The action type for suggestion posts.
   *
   * @var string
   */
  public $suggestionAction;
  /**
   * Output only. The time the post was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. The email of the user who is being newly assigned to the thread
   * as part of this post. Returns a 400 bad request error if: - The parent
   * thread is a CommentThread whose headPost does not have an assignee. - The
   * parent thread is a SuggestionThread. - commentAction is specified as
   * `RESOLVE` or `REOPEN`. - `assigneeEmail` exceeds 2048 UTF-8 code units.
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
   * Optional. The action type for comment posts.
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
   * The content of the post. Required to be non-empty if commentAction is not
   * `RESOLVE` or `REOPEN`. This text content will be handled similarly to
   * comments created in the Docs editor. It will have similar behaviors for
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
   * Output only. Whether the post is from a copied document. This field cannot
   * be set directly by callers.
   *
   * @param bool $fromCopiedDocument
   */
  public function setFromCopiedDocument($fromCopiedDocument)
  {
    $this->fromCopiedDocument = $fromCopiedDocument;
  }
  /**
   * @return bool
   */
  public function getFromCopiedDocument()
  {
    return $this->fromCopiedDocument;
  }
  /**
   * Output only. Whether the post is from a document comparison. This field
   * cannot be set directly by callers.
   *
   * @param bool $fromDocumentComparison
   */
  public function setFromDocumentComparison($fromDocumentComparison)
  {
    $this->fromDocumentComparison = $fromDocumentComparison;
  }
  /**
   * @return bool
   */
  public function getFromDocumentComparison()
  {
    return $this->fromDocumentComparison;
  }
  /**
   * Output only. Whether the post is from an imported document. This field
   * cannot be set directly by callers.
   *
   * @param bool $fromImportedDocument
   */
  public function setFromImportedDocument($fromImportedDocument)
  {
    $this->fromImportedDocument = $fromImportedDocument;
  }
  /**
   * @return bool
   */
  public function getFromImportedDocument()
  {
    return $this->fromImportedDocument;
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
   * Output only. The action type for suggestion posts.
   *
   * Accepted values: SUGGESTION_ACTION_TYPE_UNSPECIFIED,
   * NO_SUGGESTION_ACTION_CHANGE, ACCEPT, REJECT
   *
   * @param self::SUGGESTION_ACTION_* $suggestionAction
   */
  public function setSuggestionAction($suggestionAction)
  {
    $this->suggestionAction = $suggestionAction;
  }
  /**
   * @return self::SUGGESTION_ACTION_*
   */
  public function getSuggestionAction()
  {
    return $this->suggestionAction;
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
class_alias(Post::class, 'Google_Service_Docs_Post');
