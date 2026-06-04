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

class GoogleAdsSearchads360V23CommonUserListDateRuleItemInfo extends \Google\Model
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
   * Equals.
   */
  public const OPERATOR_EQUALS = 'EQUALS';
  /**
   * Not Equals.
   */
  public const OPERATOR_NOT_EQUALS = 'NOT_EQUALS';
  /**
   * Before.
   */
  public const OPERATOR_BEFORE = 'BEFORE';
  /**
   * After.
   */
  public const OPERATOR_AFTER = 'AFTER';
  /**
   * The relative date value of the right hand side denoted by number of days
   * offset from now. The value field will override this field when both are
   * present.
   *
   * @var string
   */
  public $offsetInDays;
  /**
   * Date comparison operator. This field is required and must be populated when
   * creating new date rule item.
   *
   * @var string
   */
  public $operator;
  /**
   * String representing date value to be compared with the rule variable.
   * Supported date format is YYYY-MM-DD. Times are reported in the customer's
   * time zone.
   *
   * @var string
   */
  public $value;

  /**
   * The relative date value of the right hand side denoted by number of days
   * offset from now. The value field will override this field when both are
   * present.
   *
   * @param string $offsetInDays
   */
  public function setOffsetInDays($offsetInDays)
  {
    $this->offsetInDays = $offsetInDays;
  }
  /**
   * @return string
   */
  public function getOffsetInDays()
  {
    return $this->offsetInDays;
  }
  /**
   * Date comparison operator. This field is required and must be populated when
   * creating new date rule item.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EQUALS, NOT_EQUALS, BEFORE, AFTER
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
   * String representing date value to be compared with the rule variable.
   * Supported date format is YYYY-MM-DD. Times are reported in the customer's
   * time zone.
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
class_alias(GoogleAdsSearchads360V23CommonUserListDateRuleItemInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserListDateRuleItemInfo');
