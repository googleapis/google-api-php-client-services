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

class GoogleAdsSearchads360V23CommonUserListStringRuleItemInfo extends \Google\Model
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
   * Contains.
   */
  public const OPERATOR_CONTAINS = 'CONTAINS';
  /**
   * Equals.
   */
  public const OPERATOR_EQUALS = 'EQUALS';
  /**
   * Starts with.
   */
  public const OPERATOR_STARTS_WITH = 'STARTS_WITH';
  /**
   * Ends with.
   */
  public const OPERATOR_ENDS_WITH = 'ENDS_WITH';
  /**
   * Not equals.
   */
  public const OPERATOR_NOT_EQUALS = 'NOT_EQUALS';
  /**
   * Not contains.
   */
  public const OPERATOR_NOT_CONTAINS = 'NOT_CONTAINS';
  /**
   * Not starts with.
   */
  public const OPERATOR_NOT_STARTS_WITH = 'NOT_STARTS_WITH';
  /**
   * Not ends with.
   */
  public const OPERATOR_NOT_ENDS_WITH = 'NOT_ENDS_WITH';
  /**
   * String comparison operator. This field is required and must be populated
   * when creating a new string rule item.
   *
   * @var string
   */
  public $operator;
  /**
   * The right hand side of the string rule item. For URLs or referrer URLs, the
   * value can not contain illegal URL chars such as newlines, quotes, tabs, or
   * parentheses. This field is required and must be populated when creating a
   * new string rule item.
   *
   * @var string
   */
  public $value;

  /**
   * String comparison operator. This field is required and must be populated
   * when creating a new string rule item.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CONTAINS, EQUALS, STARTS_WITH,
   * ENDS_WITH, NOT_EQUALS, NOT_CONTAINS, NOT_STARTS_WITH, NOT_ENDS_WITH
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
  /**
   * The right hand side of the string rule item. For URLs or referrer URLs, the
   * value can not contain illegal URL chars such as newlines, quotes, tabs, or
   * parentheses. This field is required and must be populated when creating a
   * new string rule item.
   *
   * @param string $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUserListStringRuleItemInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserListStringRuleItemInfo');
