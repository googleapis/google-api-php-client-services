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

namespace Google\Service\CloudAuditManager;

class ParamValue extends \Google\Model
{
  /**
   * Optional. A boolean value.
   *
   * @var bool
   */
  public $boolValue;
  /**
   * Optional. A double value.
   *
   * @var 
   */
  public $numberValue;
  protected $oneofValueType = Parameter::class;
  protected $oneofValueDataType = '';
  protected $stringListValueType = StringList::class;
  protected $stringListValueDataType = '';
  /**
   * Optional. A string value.
   *
   * @var string
   */
  public $stringValue;

  /**
   * Optional. A boolean value.
   *
   * @param bool $boolValue
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
  public function setNumberValue($numberValue)
  {
    $this->numberValue = $numberValue;
  }
  public function getNumberValue()
  {
    return $this->numberValue;
  }
  /**
   * Optional. Sub-parameter values.
   *
   * @param Parameter $oneofValue
   */
  public function setOneofValue(Parameter $oneofValue)
  {
    $this->oneofValue = $oneofValue;
  }
  /**
   * @return Parameter
   */
  public function getOneofValue()
  {
    return $this->oneofValue;
  }
  /**
   * Optional. A repeated string.
   *
   * @param StringList $stringListValue
   */
  public function setStringListValue(StringList $stringListValue)
  {
    $this->stringListValue = $stringListValue;
  }
  /**
   * @return StringList
   */
  public function getStringListValue()
  {
    return $this->stringListValue;
  }
  /**
   * Optional. A string value.
   *
   * @param string $stringValue
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ParamValue::class, 'Google_Service_CloudAuditManager_ParamValue');
