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

namespace Google\Service\CurationPartners;

class Sort extends \Google\Model
{
  /**
   * Optional. The sort order. If true the sort will be descending.
   *
   * @var bool
   */
  public $descending;
  protected $fieldType = Field::class;
  protected $fieldDataType = '';

  /**
   * Optional. The sort order. If true the sort will be descending.
   *
   * @param bool $descending
   */
  public function setDescending($descending)
  {
    $this->descending = $descending;
  }
  /**
   * @return bool
   */
  public function getDescending()
  {
    return $this->descending;
  }
  /**
   * Required. A field (dimension or metric) to sort by.
   *
   * @param Field $field
   */
  public function setField(Field $field)
  {
    $this->field = $field;
  }
  /**
   * @return Field
   */
  public function getField()
  {
    return $this->field;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Sort::class, 'Google_Service_CurationPartners_Sort');
