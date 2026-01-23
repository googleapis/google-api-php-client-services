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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1CorrelationRule extends \Google\Model
{
  /**
   * Optional. Whether the config is active to be evaluated.
   *
   * @var bool
   */
  public $active;
  /**
   * Optional. A cel expression (go/cel) to be evaluated as a boolean value. Two
   * variables conversation_a and conversation_b will be available for
   * evaluation. This expression should evaluate to true if conversation_a and
   * conversation_b should be joined. This is used as an extra constraint on top
   * of the join_key_expression to further refine the group of conversations
   * that are joined together and will be evaluated in both directions. for two
   * conversations c1 and c2 and the result will be OR'd. We will evaluate:
   * f(c1, c2) OR f(c2, c1)
   *
   * @var string
   */
  public $constraintExpression;
  /**
   * Optional. A cel expression (go/cel) to be evaluated as a string value. This
   * string value will be used as the join key for the correlation.
   *
   * @var string
   */
  public $joinKeyExpression;
  /**
   * Required. The unique identifier of the rule.
   *
   * @var string
   */
  public $ruleId;

  /**
   * Optional. Whether the config is active to be evaluated.
   *
   * @param bool $active
   */
  public function setActive($active)
  {
    $this->active = $active;
  }
  /**
   * @return bool
   */
  public function getActive()
  {
    return $this->active;
  }
  /**
   * Optional. A cel expression (go/cel) to be evaluated as a boolean value. Two
   * variables conversation_a and conversation_b will be available for
   * evaluation. This expression should evaluate to true if conversation_a and
   * conversation_b should be joined. This is used as an extra constraint on top
   * of the join_key_expression to further refine the group of conversations
   * that are joined together and will be evaluated in both directions. for two
   * conversations c1 and c2 and the result will be OR'd. We will evaluate:
   * f(c1, c2) OR f(c2, c1)
   *
   * @param string $constraintExpression
   */
  public function setConstraintExpression($constraintExpression)
  {
    $this->constraintExpression = $constraintExpression;
  }
  /**
   * @return string
   */
  public function getConstraintExpression()
  {
    return $this->constraintExpression;
  }
  /**
   * Optional. A cel expression (go/cel) to be evaluated as a string value. This
   * string value will be used as the join key for the correlation.
   *
   * @param string $joinKeyExpression
   */
  public function setJoinKeyExpression($joinKeyExpression)
  {
    $this->joinKeyExpression = $joinKeyExpression;
  }
  /**
   * @return string
   */
  public function getJoinKeyExpression()
  {
    return $this->joinKeyExpression;
  }
  /**
   * Required. The unique identifier of the rule.
   *
   * @param string $ruleId
   */
  public function setRuleId($ruleId)
  {
    $this->ruleId = $ruleId;
  }
  /**
   * @return string
   */
  public function getRuleId()
  {
    return $this->ruleId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1CorrelationRule::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1CorrelationRule');
