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

namespace Google\Service\Datastream;

class SpannerColumn extends \Google\Model
{
  /**
   * Required. The column name.
   *
   * @var string
   */
  public $column;
  /**
   * Optional. Spanner data type.
   *
   * @var string
   */
  public $dataType;
  /**
   * Optional. Whether or not the column is a primary key.
   *
   * @var bool
   */
  public $isPrimaryKey;
  /**
   * Optional. The ordinal position of the column in the table.
   *
   * @var string
   */
  public $ordinalPosition;

  /**
   * Required. The column name.
   *
   * @param string $column
   */
  public function setColumn($column)
  {
    $this->column = $column;
  }
  /**
   * @return string
   */
  public function getColumn()
  {
    return $this->column;
  }
  /**
   * Optional. Spanner data type.
   *
   * @param string $dataType
   */
  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }
  /**
   * @return string
   */
  public function getDataType()
  {
    return $this->dataType;
  }
  /**
   * Optional. Whether or not the column is a primary key.
   *
   * @param bool $isPrimaryKey
   */
  public function setIsPrimaryKey($isPrimaryKey)
  {
    $this->isPrimaryKey = $isPrimaryKey;
  }
  /**
   * @return bool
   */
  public function getIsPrimaryKey()
  {
    return $this->isPrimaryKey;
  }
  /**
   * Optional. The ordinal position of the column in the table.
   *
   * @param string $ordinalPosition
   */
  public function setOrdinalPosition($ordinalPosition)
  {
    $this->ordinalPosition = $ordinalPosition;
  }
  /**
   * @return string
   */
  public function getOrdinalPosition()
  {
    return $this->ordinalPosition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpannerColumn::class, 'Google_Service_Datastream_SpannerColumn');
