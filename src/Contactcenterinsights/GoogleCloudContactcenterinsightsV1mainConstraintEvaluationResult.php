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

class GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResult extends \Google\Collection
{
  protected $collection_key = 'ruleConstraintResults';
  /**
   * The first conversation resource name.
   *
   * @var string
   */
  public $conversationA;
  /**
   * The second conversation resource name.
   *
   * @var string
   */
  public $conversationB;
  protected $ruleConstraintResultsType = GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResultRuleConstraintResult::class;
  protected $ruleConstraintResultsDataType = 'array';

  /**
   * The first conversation resource name.
   *
   * @param string $conversationA
   */
  public function setConversationA($conversationA)
  {
    $this->conversationA = $conversationA;
  }
  /**
   * @return string
   */
  public function getConversationA()
  {
    return $this->conversationA;
  }
  /**
   * The second conversation resource name.
   *
   * @param string $conversationB
   */
  public function setConversationB($conversationB)
  {
    $this->conversationB = $conversationB;
  }
  /**
   * @return string
   */
  public function getConversationB()
  {
    return $this->conversationB;
  }
  /**
   * The results for each applicable constraint rule.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResultRuleConstraintResult[] $ruleConstraintResults
   */
  public function setRuleConstraintResults($ruleConstraintResults)
  {
    $this->ruleConstraintResults = $ruleConstraintResults;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResultRuleConstraintResult[]
   */
  public function getRuleConstraintResults()
  {
    return $this->ruleConstraintResults;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResult::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResult');
