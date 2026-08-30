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

namespace Google\Service\AgenciesAndBrands;

class ReportValue extends \Google\Model
{
  /**
   * For boolean values.
   *
   * @var bool
   */
  public $boolValue;
  /**
   * For bytes values.
   *
   * @var string
   */
  public $bytesValue;
  protected $doubleListValueType = DoubleList::class;
  protected $doubleListValueDataType = '';
  /**
   * For double values.
   *
   * @var 
   */
  public $doubleValue;
  protected $intListValueType = IntList::class;
  protected $intListValueDataType = '';
  /**
   * For integer values.
   *
   * @var string
   */
  public $intValue;
  protected $stringListValueType = StringList::class;
  protected $stringListValueDataType = '';
  /**
   * For string values.
   *
   * @var string
   */
  public $stringValue;

  /**
   * For boolean values.
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
  /**
   * For bytes values.
   *
   * @param string $bytesValue
   */
  public function setBytesValue($bytesValue)
  {
    $this->bytesValue = $bytesValue;
  }
  /**
   * @return string
   */
  public function getBytesValue()
  {
    return $this->bytesValue;
  }
  /**
   * For lists of double values.
   *
   * @param DoubleList $doubleListValue
   */
  public function setDoubleListValue(DoubleList $doubleListValue)
  {
    $this->doubleListValue = $doubleListValue;
  }
  /**
   * @return DoubleList
   */
  public function getDoubleListValue()
  {
    return $this->doubleListValue;
  }
  public function setDoubleValue($doubleValue)
  {
    $this->doubleValue = $doubleValue;
  }
  public function getDoubleValue()
  {
    return $this->doubleValue;
  }
  /**
   * For lists of integer values.
   *
   * @param IntList $intListValue
   */
  public function setIntListValue(IntList $intListValue)
  {
    $this->intListValue = $intListValue;
  }
  /**
   * @return IntList
   */
  public function getIntListValue()
  {
    return $this->intListValue;
  }
  /**
   * For integer values.
   *
   * @param string $intValue
   */
  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }
  /**
   * @return string
   */
  public function getIntValue()
  {
    return $this->intValue;
  }
  /**
   * For lists of string values.
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
   * For string values.
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
class_alias(ReportValue::class, 'Google_Service_AgenciesAndBrands_ReportValue');
