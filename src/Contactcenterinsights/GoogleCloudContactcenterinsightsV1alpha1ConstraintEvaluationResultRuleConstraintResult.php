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

class GoogleCloudContactcenterinsightsV1alpha1ConstraintEvaluationResultRuleConstraintResult extends \Google\Model
{
  /**
   * Whether the constraint expression evaluated to true for (A, B) or (B, A).
   *
   * @var bool
   */
  public $constraintMet;
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  /**
   * The rule ID.
   *
   * @var string
   */
  public $ruleId;

  /**
   * Whether the constraint expression evaluated to true for (A, B) or (B, A).
   *
   * @param bool $constraintMet
   */
  public function setConstraintMet($constraintMet)
  {
    $this->constraintMet = $constraintMet;
  }
  /**
   * @return bool
   */
  public function getConstraintMet()
  {
    return $this->constraintMet;
  }
  /**
   * The error status if the constraint expression failed to evaluate.
   *
   * @param GoogleRpcStatus $error
   */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /**
   * @return GoogleRpcStatus
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * The rule ID.
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
class_alias(GoogleCloudContactcenterinsightsV1alpha1ConstraintEvaluationResultRuleConstraintResult::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1ConstraintEvaluationResultRuleConstraintResult');
