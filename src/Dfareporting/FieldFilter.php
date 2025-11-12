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

class FieldFilter extends \Google\Model
{
  /**
   * @var bool
   */
  public $boolValue;
  protected $dependentFieldValueType = DependentFieldValue::class;
  protected $dependentFieldValueDataType = '';
  /**
   * @var int
   */
  public $fieldId;
  /**
   * @var string
   */
  public $matchType;
  protected $requestValueType = RequestValue::class;
  protected $requestValueDataType = '';
  /**
   * @var string
   */
  public $stringValue;
  /**
   * @var string
   */
  public $valueType;

  /**
   * @param bool
   */
  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }
  /**
   * @return bool
   */
  public function getBoolValue()
  {
    return $this->boolValue;
  }
  /**
   * @param DependentFieldValue
   */
  public function setDependentFieldValue(DependentFieldValue $dependentFieldValue)
  {
    $this->dependentFieldValue = $dependentFieldValue;
  }
  /**
   * @return DependentFieldValue
   */
  public function getDependentFieldValue()
  {
    return $this->dependentFieldValue;
  }
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
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  /**
   * @return string
   */
  public function getMatchType()
  {
    return $this->matchType;
  }
  /**
   * @param RequestValue
   */
  public function setRequestValue(RequestValue $requestValue)
  {
    $this->requestValue = $requestValue;
  }
  /**
   * @return RequestValue
   */
  public function getRequestValue()
  {
    return $this->requestValue;
  }
  /**
   * @param string
   */
  public function setStringValue($stringValue)
  {
    $this->stringValue = $stringValue;
  }
  /**
   * @return string
   */
  public function getStringValue()
  {
    return $this->stringValue;
  }
  /**
   * @param string
   */
  public function setValueType($valueType)
  {
    $this->valueType = $valueType;
  }
  /**
   * @return string
   */
  public function getValueType()
  {
    return $this->valueType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldFilter::class, 'Google_Service_Dfareporting_FieldFilter');
