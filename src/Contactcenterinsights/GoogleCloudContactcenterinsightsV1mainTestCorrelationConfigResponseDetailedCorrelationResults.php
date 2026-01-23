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

class GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigResponseDetailedCorrelationResults extends \Google\Collection
{
  protected $collection_key = 'joinKeyResults';
  protected $constraintResultsType = GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResult::class;
  protected $constraintResultsDataType = 'array';
  protected $joinKeyResultsType = GoogleCloudContactcenterinsightsV1mainConversationCorrelationResult::class;
  protected $joinKeyResultsDataType = 'array';

  /**
   * A list of constraint evaluation results for each pair of conversations.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResult[] $constraintResults
   */
  public function setConstraintResults($constraintResults)
  {
    $this->constraintResults = $constraintResults;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConstraintEvaluationResult[]
   */
  public function getConstraintResults()
  {
    return $this->constraintResults;
  }
  /**
   * A list of join key correlation results for each conversation tested.
   *
   * @param GoogleCloudContactcenterinsightsV1mainConversationCorrelationResult[] $joinKeyResults
   */
  public function setJoinKeyResults($joinKeyResults)
  {
    $this->joinKeyResults = $joinKeyResults;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainConversationCorrelationResult[]
   */
  public function getJoinKeyResults()
  {
    return $this->joinKeyResults;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigResponseDetailedCorrelationResults::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigResponseDetailedCorrelationResults');
