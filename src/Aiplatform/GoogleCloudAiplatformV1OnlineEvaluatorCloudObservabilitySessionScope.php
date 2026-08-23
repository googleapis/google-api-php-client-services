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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScope extends \Google\Collection
{
  protected $collection_key = 'filter';
  protected $filterType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopePredicate::class;
  protected $filterDataType = 'array';
  protected $inactivityTriggerType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopeInactivityTrigger::class;
  protected $inactivityTriggerDataType = '';

  /**
   * Optional. A list of predicates to filter sessions. Multiple predicates are
   * combined using AND. The maximum number of predicates is 10.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopePredicate[] $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopePredicate[]
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * Session is considered ready for evaluation when there are no new traces for
   * a specified period of inactivity.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopeInactivityTrigger $inactivityTrigger
   */
  public function setInactivityTrigger(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopeInactivityTrigger $inactivityTrigger)
  {
    $this->inactivityTrigger = $inactivityTrigger;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopeInactivityTrigger
   */
  public function getInactivityTrigger()
  {
    return $this->inactivityTrigger;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScope::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScope');
