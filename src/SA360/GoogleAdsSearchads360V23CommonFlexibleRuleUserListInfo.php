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

class GoogleAdsSearchads360V23CommonFlexibleRuleUserListInfo extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const INCLUSIVE_RULE_OPERATOR_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const INCLUSIVE_RULE_OPERATOR_UNKNOWN = 'UNKNOWN';
  /**
   * A AND B.
   */
  public const INCLUSIVE_RULE_OPERATOR_AND = 'AND';
  /**
   * A OR B.
   */
  public const INCLUSIVE_RULE_OPERATOR_OR = 'OR';
  protected $collection_key = 'inclusiveOperands';
  protected $exclusiveOperandsType = GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo::class;
  protected $exclusiveOperandsDataType = 'array';
  protected $inclusiveOperandsType = GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo::class;
  protected $inclusiveOperandsDataType = 'array';
  /**
   * Operator that defines how the inclusive operands are combined.
   *
   * @var string
   */
  public $inclusiveRuleOperator;

  /**
   * Rules representing users that should be excluded from the user list. These
   * are located on the right side of the AND_NOT operator, and joined together
   * by OR.
   *
   * @param GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo[] $exclusiveOperands
   */
  public function setExclusiveOperands($exclusiveOperands)
  {
    $this->exclusiveOperands = $exclusiveOperands;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo[]
   */
  public function getExclusiveOperands()
  {
    return $this->exclusiveOperands;
  }
  /**
   * Rules representing users that should be included in the user list. These
   * are located on the left side of the AND_NOT operator, and joined together
   * by either AND/OR as specified by the inclusive_rule_operator.
   *
   * @param GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo[] $inclusiveOperands
   */
  public function setInclusiveOperands($inclusiveOperands)
  {
    $this->inclusiveOperands = $inclusiveOperands;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo[]
   */
  public function getInclusiveOperands()
  {
    return $this->inclusiveOperands;
  }
  /**
   * Operator that defines how the inclusive operands are combined.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AND, OR
   *
   * @param self::INCLUSIVE_RULE_OPERATOR_* $inclusiveRuleOperator
   */
  public function setInclusiveRuleOperator($inclusiveRuleOperator)
  {
    $this->inclusiveRuleOperator = $inclusiveRuleOperator;
  }
  /**
   * @return self::INCLUSIVE_RULE_OPERATOR_*
   */
  public function getInclusiveRuleOperator()
  {
    return $this->inclusiveRuleOperator;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonFlexibleRuleUserListInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonFlexibleRuleUserListInfo');
