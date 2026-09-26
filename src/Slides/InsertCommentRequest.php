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
   * similarly to comments created in the Slides editor. It will have similar
   * behaviors for formatting, notifications, etc. This field cannot be empty,
   * and must not exceed 2048 UTF-8 code units.
   *
   * @var string
   */
  public $content;
  /**
   * The object ID of the Page or PageElement that is tied to this comment. If
   * the specified object_id is a Group, the comment will be anchored to at most
   * 100 of the group's non-group descendants.
   *
   * @var string
   */
  public $objectId;
  protected $shapeTextAnchorType = ShapeTextAnchor::class;
  protected $shapeTextAnchorDataType = '';
  protected $tableAnchorType = TableAnchor::class;
  protected $tableAnchorDataType = '';
  protected $tableCellTextAnchorType = TableCellTextAnchor::class;
  protected $tableCellTextAnchorDataType = '';

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
   * similarly to comments created in the Slides editor. It will have similar
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
   * The object ID of the Page or PageElement that is tied to this comment. If
   * the specified object_id is a Group, the comment will be anchored to at most
   * 100 of the group's non-group descendants.
   *
   * @param string $objectId
   */
  public function setObjectId($objectId)
  {
    $this->objectId = $objectId;
  }
  /**
   * @return string
   */
  public function getObjectId()
  {
    return $this->objectId;
  }
  /**
   * Anchors a comment to a specific range of text within a Shape.
   *
   * @param ShapeTextAnchor $shapeTextAnchor
   */
  public function setShapeTextAnchor(ShapeTextAnchor $shapeTextAnchor)
  {
    $this->shapeTextAnchor = $shapeTextAnchor;
  }
  /**
   * @return ShapeTextAnchor
   */
  public function getShapeTextAnchor()
  {
    return $this->shapeTextAnchor;
  }
  /**
   * Anchors a comment to a specific range of cells within a Table. Returns a
   * 400 bad request error if no cells within the range contain text.
   *
   * @param TableAnchor $tableAnchor
   */
  public function setTableAnchor(TableAnchor $tableAnchor)
  {
    $this->tableAnchor = $tableAnchor;
  }
  /**
   * @return TableAnchor
   */
  public function getTableAnchor()
  {
    return $this->tableAnchor;
  }
  /**
   * Anchors a comment to a specific range of text within a single cell in a
   * Table.
   *
   * @param TableCellTextAnchor $tableCellTextAnchor
   */
  public function setTableCellTextAnchor(TableCellTextAnchor $tableCellTextAnchor)
  {
    $this->tableCellTextAnchor = $tableCellTextAnchor;
  }
  /**
   * @return TableCellTextAnchor
   */
  public function getTableCellTextAnchor()
  {
    return $this->tableCellTextAnchor;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InsertCommentRequest::class, 'Google_Service_Slides_InsertCommentRequest');
