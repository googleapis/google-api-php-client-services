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

namespace Google\Service\CustomerEngagementSuite;

class TransferRuleDisablePlannerTransfer extends \Google\Model
{
  protected $expressionConditionType = ExpressionCondition::class;
  protected $expressionConditionDataType = '';

  /**
   * Required. If the condition evaluates to true, planner will not be allowed
   * to transfer to the target agent.
   *
   * @param ExpressionCondition $expressionCondition
   */
  public function setExpressionCondition(ExpressionCondition $expressionCondition)
  {
    $this->expressionCondition = $expressionCondition;
  }
  /**
   * @return ExpressionCondition
   */
  public function getExpressionCondition()
  {
    return $this->expressionCondition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferRuleDisablePlannerTransfer::class, 'Google_Service_CustomerEngagementSuite_TransferRuleDisablePlannerTransfer');
