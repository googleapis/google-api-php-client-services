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

class GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo extends \Google\Model
{
  /**
   * Lookback window for this rule in days. From now until X days ago.
   *
   * @var string
   */
  public $lookbackWindowDays;
  protected $ruleType = GoogleAdsSearchads360V23CommonUserListRuleInfo::class;
  protected $ruleDataType = '';

  /**
   * Lookback window for this rule in days. From now until X days ago.
   *
   * @param string $lookbackWindowDays
   */
  public function setLookbackWindowDays($lookbackWindowDays)
  {
    $this->lookbackWindowDays = $lookbackWindowDays;
  }
  /**
   * @return string
   */
  public function getLookbackWindowDays()
  {
    return $this->lookbackWindowDays;
  }
  /**
   * List of rule item groups that defines this rule. Rule item groups are
   * grouped together.
   *
   * @param GoogleAdsSearchads360V23CommonUserListRuleInfo $rule
   */
  public function setRule(GoogleAdsSearchads360V23CommonUserListRuleInfo $rule)
  {
    $this->rule = $rule;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListRuleInfo
   */
  public function getRule()
  {
    return $this->rule;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonFlexibleRuleOperandInfo');
