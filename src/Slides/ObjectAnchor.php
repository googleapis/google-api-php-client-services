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

class ObjectAnchor extends \Google\Model
{
  /**
   * Output only. The page or page element that the comment thread is anchored
   * to.
   *
   * @var string
   */
  public $objectId;
  protected $shapeTextAnchorsType = ShapeTextAnchors::class;
  protected $shapeTextAnchorsDataType = '';
  protected $tableCellAnchorsType = TableCellAnchors::class;
  protected $tableCellAnchorsDataType = '';

  /**
   * Output only. The page or page element that the comment thread is anchored
   * to.
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
   * Populated for Shapes that have comments anchored to ranges of text in the
   * shape's text.
   *
   * @param ShapeTextAnchors $shapeTextAnchors
   */
  public function setShapeTextAnchors(ShapeTextAnchors $shapeTextAnchors)
  {
    $this->shapeTextAnchors = $shapeTextAnchors;
  }
  /**
   * @return ShapeTextAnchors
   */
  public function getShapeTextAnchors()
  {
    return $this->shapeTextAnchors;
  }
  /**
   * Populated for Tables that have comments anchored to ranges of text in one
   * or more of the table's cells.
   *
   * @param TableCellAnchors $tableCellAnchors
   */
  public function setTableCellAnchors(TableCellAnchors $tableCellAnchors)
  {
    $this->tableCellAnchors = $tableCellAnchors;
  }
  /**
   * @return TableCellAnchors
   */
  public function getTableCellAnchors()
  {
    return $this->tableCellAnchors;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ObjectAnchor::class, 'Google_Service_Slides_ObjectAnchor');
