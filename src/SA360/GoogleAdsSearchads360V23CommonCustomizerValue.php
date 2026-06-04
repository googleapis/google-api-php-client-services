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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonCustomizerValue extends \Google\Model
{
  /**
   * The status has not been specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Text customizer.
   */
  public const TYPE_TEXT = 'TEXT';
  /**
   * Number customizer.
   */
  public const TYPE_NUMBER = 'NUMBER';
  /**
   * Price customizer consisting of a number and a currency.
   */
  public const TYPE_PRICE = 'PRICE';
  /**
   * Percentage customizer consisting of a number and a '%'.
   */
  public const TYPE_PERCENT = 'PERCENT';
  /**
   * Required. Value to insert in creative text. Customizer values of all types
   * are stored as string to make formatting unambiguous.
   *
   * @var string
   */
  public $stringValue;
  /**
   * Required. The data type for the customizer value. It must match the
   * attribute type. The string_value content must match the constraints
   * associated with the type.
   *
   * @var string
   */
  public $type;

  /**
   * Required. Value to insert in creative text. Customizer values of all types
   * are stored as string to make formatting unambiguous.
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
  /**
   * Required. The data type for the customizer value. It must match the
   * attribute type. The string_value content must match the constraints
   * associated with the type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TEXT, NUMBER, PRICE, PERCENT
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCustomizerValue::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCustomizerValue');
