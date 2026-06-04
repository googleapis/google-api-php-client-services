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

class GoogleAdsSearchads360V23CommonUserListRuleInfo extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const RULE_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const RULE_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Conjunctive normal form.
   */
  public const RULE_TYPE_AND_OF_ORS = 'AND_OF_ORS';
  /**
   * Disjunctive normal form.
   */
  public const RULE_TYPE_OR_OF_ANDS = 'OR_OF_ANDS';
  protected $collection_key = 'ruleItemGroups';
  protected $ruleItemGroupsType = GoogleAdsSearchads360V23CommonUserListRuleItemGroupInfo::class;
  protected $ruleItemGroupsDataType = 'array';
  /**
   * Rule type is used to determine how to group rule items. The default is OR
   * of ANDs (disjunctive normal form). That is, rule items will be ANDed
   * together within rule item groups and the groups themselves will be ORed
   * together. OR of ANDs is the only supported type for FlexibleRuleUserList.
   *
   * @var string
   */
  public $ruleType;

  /**
   * List of rule item groups that defines this rule. Rule item groups are
   * grouped together based on rule_type.
   *
   * @param GoogleAdsSearchads360V23CommonUserListRuleItemGroupInfo[] $ruleItemGroups
   */
  public function setRuleItemGroups($ruleItemGroups)
  {
    $this->ruleItemGroups = $ruleItemGroups;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListRuleItemGroupInfo[]
   */
  public function getRuleItemGroups()
  {
    return $this->ruleItemGroups;
  }
  /**
   * Rule type is used to determine how to group rule items. The default is OR
   * of ANDs (disjunctive normal form). That is, rule items will be ANDed
   * together within rule item groups and the groups themselves will be ORed
   * together. OR of ANDs is the only supported type for FlexibleRuleUserList.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AND_OF_ORS, OR_OF_ANDS
   *
   * @param self::RULE_TYPE_* $ruleType
   */
  public function setRuleType($ruleType)
  {
    $this->ruleType = $ruleType;
  }
  /**
   * @return self::RULE_TYPE_*
   */
  public function getRuleType()
  {
    return $this->ruleType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonUserListRuleInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonUserListRuleInfo');
