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

class GoogleAdsSearchads360V23CommonLogicalUserListInfo extends \Google\Collection
{
  protected $collection_key = 'rules';
  protected $rulesType = GoogleAdsSearchads360V23CommonUserListLogicalRuleInfo::class;
  protected $rulesDataType = 'array';

  /**
   * Logical list rules that define this user list. The rules are defined as a
   * logical operator (ALL/ANY/NONE) and a list of user lists. All the rules are
   * ANDed when they are evaluated. Required for creating a logical user list.
   *
   * @param GoogleAdsSearchads360V23CommonUserListLogicalRuleInfo[] $rules
   */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListLogicalRuleInfo[]
   */
  public function getRules()
  {
    return $this->rules;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLogicalUserListInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLogicalUserListInfo');
