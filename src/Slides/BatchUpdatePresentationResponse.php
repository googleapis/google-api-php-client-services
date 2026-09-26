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

class BatchUpdatePresentationResponse extends \Google\Collection
{
  /**
   * The status of comment updates is unspecified.
   */
  public const COMMENT_UPDATE_STATE_COMMENT_UPDATE_STATE_UNSPECIFIED = 'COMMENT_UPDATE_STATE_UNSPECIFIED';
  /**
   * No comment updates were requested in the batch request.
   */
  public const COMMENT_UPDATE_STATE_NO_UPDATES_REQUESTED = 'NO_UPDATES_REQUESTED';
  /**
   * All requested comment updates were applied in the batch request.
   */
  public const COMMENT_UPDATE_STATE_ALL_SAVED = 'ALL_SAVED';
  /**
   * All requested comment updates failed.
   */
  public const COMMENT_UPDATE_STATE_ALL_FAILED_UNKNOWN_REASON = 'ALL_FAILED_UNKNOWN_REASON';
  protected $collection_key = 'replies';
  /**
   * Whether comment updates were applied in the batch request. [Developer
   * Preview](https://developers.google.com/workspace/preview).
   *
   * @var string
   */
  public $commentUpdateState;
  /**
   * The presentation the updates were applied to.
   *
   * @var string
   */
  public $presentationId;
  protected $repliesType = Response::class;
  protected $repliesDataType = 'array';
  protected $writeControlType = WriteControl::class;
  protected $writeControlDataType = '';

  /**
   * Whether comment updates were applied in the batch request. [Developer
   * Preview](https://developers.google.com/workspace/preview).
   *
   * Accepted values: COMMENT_UPDATE_STATE_UNSPECIFIED, NO_UPDATES_REQUESTED,
   * ALL_SAVED, ALL_FAILED_UNKNOWN_REASON
   *
   * @param self::COMMENT_UPDATE_STATE_* $commentUpdateState
   */
  public function setCommentUpdateState($commentUpdateState)
  {
    $this->commentUpdateState = $commentUpdateState;
  }
  /**
   * @return self::COMMENT_UPDATE_STATE_*
   */
  public function getCommentUpdateState()
  {
    return $this->commentUpdateState;
  }
  /**
   * The presentation the updates were applied to.
   *
   * @param string $presentationId
   */
  public function setPresentationId($presentationId)
  {
    $this->presentationId = $presentationId;
  }
  /**
   * @return string
   */
  public function getPresentationId()
  {
    return $this->presentationId;
  }
  /**
   * The reply of the updates. This maps 1:1 with the updates, although replies
   * to some requests may be empty.
   *
   * @param Response[] $replies
   */
  public function setReplies($replies)
  {
    $this->replies = $replies;
  }
  /**
   * @return Response[]
   */
  public function getReplies()
  {
    return $this->replies;
  }
  /**
   * The updated write control after applying the request.
   *
   * @param WriteControl $writeControl
   */
  public function setWriteControl(WriteControl $writeControl)
  {
    $this->writeControl = $writeControl;
  }
  /**
   * @return WriteControl
   */
  public function getWriteControl()
  {
    return $this->writeControl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchUpdatePresentationResponse::class, 'Google_Service_Slides_BatchUpdatePresentationResponse');
