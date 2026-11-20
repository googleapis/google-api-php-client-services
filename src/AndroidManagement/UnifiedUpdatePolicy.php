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

namespace Google\Service\AndroidManagement;

class UnifiedUpdatePolicy extends \Google\Collection
{
  protected $collection_key = 'rules';
  protected $rulesType = Rule::class;
  protected $rulesDataType = 'array';

  /**
   * Optional. When the policy is evaluated for a given target, all rules which
   * refer to that target are evaluated in sequence. The first rule for which
   * the predicate evaluates to true is considered, and its outcome is used. If
   * no rule matches, the default update behavior applies. In other words, this
   * behaves like a chained if-else statement.However, each update can only be
   * deferred for a limited time. After an update has been available for longer
   * than its maximum deferral period, rules with an outcome of BLOCK or
   * USER_PROMPT no longer delay it. The update then follows a matching rule
   * with an outcome of FORCE or the default update behavior. The maximum
   * deferral period depends on the target type and, for OS updates, the
   * management mode.At most 100 rules are allowed.
   *
   * @param Rule[] $rules
   */
  public function setRules($rules)
  {
    $this->rules = $rules;
  }
  /**
   * @return Rule[]
   */
  public function getRules()
  {
    return $this->rules;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UnifiedUpdatePolicy::class, 'Google_Service_AndroidManagement_UnifiedUpdatePolicy');
