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

class GoogleAdsSearchads360V23CommonUserListLogicalRuleInfo extends \Google\Collection
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
   * And - all of the operands.
   */
  public const OPERATOR_ALL = 'ALL';
  /**
   * Or - at least one of the operands.
   */
  public const OPERATOR_ANY = 'ANY';
  /**
   * Not - none of the operands.
   */
  public const OPERATOR_NONE = 'NONE';
  protected $collection_key = 'ruleOperands';
  /**
   * The logical operator of the rule.
   *
   * @var string
   */
  public $operator;
  protected $ruleOperandsType = GoogleAdsSearchads360V23CommonLogicalUserListOperandInfo::class;
  protected $ruleOperandsDataType = 'array';

  /**
   * The logical operator of the rule.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ALL, ANY, NONE
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
   * The list of operands of the rule.
   *
   * @param GoogleAdsSearchads360V23CommonLogicalUserListOperandInfo[] $ruleOperands
   */
  public function setRuleOperands($ruleOperands)
  {
    $this->ruleOperands = $ruleOperands;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLogicalUserListOperandInfo[]
   */
  public function getRuleOperands()
  {
    return $this->ruleOperands;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUserListLogicalRuleInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserListLogicalRuleInfo');
