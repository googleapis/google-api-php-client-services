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

namespace Google\Service\Dfareporting;

class FieldError extends \Google\Collection
{
  protected $collection_key = 'fieldValues';
  /**
   * @var int
   */
  public $fieldId;
  /**
   * @var string
   */
  public $fieldName;
  /**
   * @var string[]
   */
  public $fieldValues;
  /**
   * @var string
   */
  public $ingestionError;
  /**
   * @var bool
   */
  public $isError;

  /**
   * @param int
   */
  public function setFieldId($fieldId)
  {
    $this->fieldId = $fieldId;
  }
  /**
   * @return int
   */
  public function getFieldId()
  {
    return $this->fieldId;
  }
  /**
   * @param string
   */
  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }
  /**
   * @return string
   */
  public function getFieldName()
  {
    return $this->fieldName;
  }
  /**
   * @param string[]
   */
  public function setFieldValues($fieldValues)
  {
    $this->fieldValues = $fieldValues;
  }
  /**
   * @return string[]
   */
  public function getFieldValues()
  {
    return $this->fieldValues;
  }
  /**
   * @param string
   */
  public function setIngestionError($ingestionError)
  {
    $this->ingestionError = $ingestionError;
  }
  /**
   * @return string
   */
  public function getIngestionError()
  {
    return $this->ingestionError;
  }
  /**
   * @param bool
   */
  public function setIsError($isError)
  {
    $this->isError = $isError;
  }
  /**
   * @return bool
   */
  public function getIsError()
  {
    return $this->isError;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldError::class, 'Google_Service_Dfareporting_FieldError');
