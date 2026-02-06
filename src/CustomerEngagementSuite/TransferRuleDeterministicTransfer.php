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

class TransferRuleDeterministicTransfer extends \Google\Model
{
  protected $expressionConditionType = ExpressionCondition::class;
  protected $expressionConditionDataType = '';
  protected $pythonCodeConditionType = PythonCodeCondition::class;
  protected $pythonCodeConditionDataType = '';

  /**
   * Optional. A rule that evaluates a session state condition. If the condition
   * evaluates to true, the transfer occurs.
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
  /**
   * Optional. A rule that uses Python code block to evaluate the conditions. If
   * the condition evaluates to true, the transfer occurs.
   *
   * @param PythonCodeCondition $pythonCodeCondition
   */
  public function setPythonCodeCondition(PythonCodeCondition $pythonCodeCondition)
  {
    $this->pythonCodeCondition = $pythonCodeCondition;
  }
  /**
   * @return PythonCodeCondition
   */
  public function getPythonCodeCondition()
  {
    return $this->pythonCodeCondition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferRuleDeterministicTransfer::class, 'Google_Service_CustomerEngagementSuite_TransferRuleDeterministicTransfer');
