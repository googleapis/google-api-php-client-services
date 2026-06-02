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

namespace Google\Service\SecurityCommandCenter;

class PolicyViolationSummary extends \Google\Model
{
  /**
   * @var string
   */
  public $conformantResourcesCount;
  /**
   * @var string
   */
  public $evaluationErrorsCount;
  /**
   * @var string
   */
  public $outOfScopeResourcesCount;
  /**
   * @var string
   */
  public $policyViolationsCount;

  /**
   * @param string $conformantResourcesCount
   */
  public function setConformantResourcesCount($conformantResourcesCount)
  {
    $this->conformantResourcesCount = $conformantResourcesCount;
  }
  /**
   * @return string
   */
  public function getConformantResourcesCount()
  {
    return $this->conformantResourcesCount;
  }
  /**
   * @param string $evaluationErrorsCount
   */
  public function setEvaluationErrorsCount($evaluationErrorsCount)
  {
    $this->evaluationErrorsCount = $evaluationErrorsCount;
  }
  /**
   * @return string
   */
  public function getEvaluationErrorsCount()
  {
    return $this->evaluationErrorsCount;
  }
  /**
   * @param string $outOfScopeResourcesCount
   */
  public function setOutOfScopeResourcesCount($outOfScopeResourcesCount)
  {
    $this->outOfScopeResourcesCount = $outOfScopeResourcesCount;
  }
  /**
   * @return string
   */
  public function getOutOfScopeResourcesCount()
  {
    return $this->outOfScopeResourcesCount;
  }
  /**
   * @param string $policyViolationsCount
   */
  public function setPolicyViolationsCount($policyViolationsCount)
  {
    $this->policyViolationsCount = $policyViolationsCount;
  }
  /**
   * @return string
   */
  public function getPolicyViolationsCount()
  {
    return $this->policyViolationsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PolicyViolationSummary::class, 'Google_Service_SecurityCommandCenter_PolicyViolationSummary');
