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

class GoogleAdsSearchads360V23CommonUserListNumberRuleItemInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const OPERATOR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const OPERATOR_UNKNOWN = 'UNKNOWN';
  /**
   * Greater than.
   */
  public const OPERATOR_GREATER_THAN = 'GREATER_THAN';
  /**
   * Greater than or equal.
   */
  public const OPERATOR_GREATER_THAN_OR_EQUAL = 'GREATER_THAN_OR_EQUAL';
  /**
   * Equals.
   */
  public const OPERATOR_EQUALS = 'EQUALS';
  /**
   * Not equals.
   */
  public const OPERATOR_NOT_EQUALS = 'NOT_EQUALS';
  /**
   * Less than.
   */
  public const OPERATOR_LESS_THAN = 'LESS_THAN';
  /**
   * Less than or equal.
   */
  public const OPERATOR_LESS_THAN_OR_EQUAL = 'LESS_THAN_OR_EQUAL';
  /**
   * Number comparison operator. This field is required and must be populated
   * when creating a new number rule item.
   *
   * @var string
   */
  public $operator;
  /**
   * Number value to be compared with the variable. This field is required and
   * must be populated when creating a new number rule item.
   *
   * @var 
   */
  public $value;

  /**
   * Number comparison operator. This field is required and must be populated
   * when creating a new number rule item.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, GREATER_THAN, GREATER_THAN_OR_EQUAL,
   * EQUALS, NOT_EQUALS, LESS_THAN, LESS_THAN_OR_EQUAL
   *
   * @param self::OPERATOR_* $operator
   */
  public function setOperator($operator)
  {
    $this->operator = $operator;
  }
  /**
   * @return self::OPERATOR_*
   */
  public function getOperator()
  {
    return $this->operator;
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
class_alias(GoogleAdsSearchads360V23CommonUserListNumberRuleItemInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserListNumberRuleItemInfo');
