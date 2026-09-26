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

class InsertCommentRequest extends \Google\Model
{
  /**
   * Optional. The email address of the assignee of the comment. Leave empty for
   * a non-assigned comment. May not exceed 2048 UTF-8 code units.
   *
   * @var string
   */
  public $assigneeEmailAddress;
  /**
   * The text of the comment, as plain text. This text content will be handled
   * similarly to comments created in the Sheets editor. It will have similar
   * behaviors for formatting, notifications, etc. This field cannot be empty,
   * and must not exceed 2048 UTF-8 code units.
   *
   * @var string
   */
  public $content;
  protected $coordinateType = GridCoordinate::class;
  protected $coordinateDataType = '';

  /**
   * Optional. The email address of the assignee of the comment. Leave empty for
   * a non-assigned comment. May not exceed 2048 UTF-8 code units.
   *
   * @param string $assigneeEmailAddress
   */
  public function setAssigneeEmailAddress($assigneeEmailAddress)
  {
    $this->assigneeEmailAddress = $assigneeEmailAddress;
  }
  /**
   * @return string
   */
  public function getAssigneeEmailAddress()
  {
    return $this->assigneeEmailAddress;
  }
  /**
   * The text of the comment, as plain text. This text content will be handled
   * similarly to comments created in the Sheets editor. It will have similar
   * behaviors for formatting, notifications, etc. This field cannot be empty,
   * and must not exceed 2048 UTF-8 code units.
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
   * The GridCoordinate in the sheet that is tied to this comment.
   *
   * @param GridCoordinate $coordinate
   */
  public function setCoordinate(GridCoordinate $coordinate)
  {
    $this->coordinate = $coordinate;
  }
  /**
   * @return GridCoordinate
   */
  public function getCoordinate()
  {
    return $this->coordinate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InsertCommentRequest::class, 'Google_Service_Sheets_InsertCommentRequest');
