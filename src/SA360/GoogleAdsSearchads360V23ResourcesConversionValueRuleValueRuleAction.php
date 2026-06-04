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

class GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAction extends \Google\Model
{
  /**
   * Not specified.
   */
  public const OPERATION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const OPERATION_UNKNOWN = 'UNKNOWN';
  /**
   * Add provided value to conversion value.
   */
  public const OPERATION_ADD = 'ADD';
  /**
   * Multiply conversion value by provided value.
   */
  public const OPERATION_MULTIPLY = 'MULTIPLY';
  /**
   * Set conversion value to provided value.
   */
  public const OPERATION_SET = 'SET';
  /**
   * Specifies applied operation.
   *
   * @var string
   */
  public $operation;
  /**
   * Specifies applied value.
   *
   * @var 
   */
  public $value;

  /**
   * Specifies applied operation.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ADD, MULTIPLY, SET
   *
   * @param self::OPERATION_* $operation
   */
  public function setOperation($operation)
  {
    $this->operation = $operation;
  }
  /**
   * @return self::OPERATION_*
   */
  public function getOperation()
  {
    return $this->operation;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAction::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleAction');
