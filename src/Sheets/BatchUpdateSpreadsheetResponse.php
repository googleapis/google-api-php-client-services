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

class BatchUpdateSpreadsheetResponse extends \Google\Collection
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
  protected $repliesType = Response::class;
  protected $repliesDataType = 'array';
  /**
   * The spreadsheet the updates were applied to.
   *
   * @var string
   */
  public $spreadsheetId;
  protected $updatedSpreadsheetType = Spreadsheet::class;
  protected $updatedSpreadsheetDataType = '';

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
   * The spreadsheet the updates were applied to.
   *
   * @param string $spreadsheetId
   */
  public function setSpreadsheetId($spreadsheetId)
  {
    $this->spreadsheetId = $spreadsheetId;
  }
  /**
   * @return string
   */
  public function getSpreadsheetId()
  {
    return $this->spreadsheetId;
  }
  /**
   * The spreadsheet after updates were applied. This is only set if
   * BatchUpdateSpreadsheetRequest.include_spreadsheet_in_response is `true`.
   *
   * @param Spreadsheet $updatedSpreadsheet
   */
  public function setUpdatedSpreadsheet(Spreadsheet $updatedSpreadsheet)
  {
    $this->updatedSpreadsheet = $updatedSpreadsheet;
  }
  /**
   * @return Spreadsheet
   */
  public function getUpdatedSpreadsheet()
  {
    return $this->updatedSpreadsheet;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchUpdateSpreadsheetResponse::class, 'Google_Service_Sheets_BatchUpdateSpreadsheetResponse');
