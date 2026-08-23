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

class GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopePredicate extends \Google\Model
{
  protected $durationType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate::class;
  protected $durationDataType = '';
  protected $modelCallErrorsType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate::class;
  protected $modelCallErrorsDataType = '';
  protected $modelCallsType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate::class;
  protected $modelCallsDataType = '';
  protected $toolCallErrorsType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate::class;
  protected $toolCallErrorsDataType = '';
  protected $toolCallsType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate::class;
  protected $toolCallsDataType = '';
  protected $totalTokenUsageType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate::class;
  protected $totalTokenUsageDataType = '';
  protected $userTurnsType = GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate::class;
  protected $userTurnsDataType = '';

  /**
   * Filter on the duration of a session (in seconds).
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $duration
   */
  public function setDuration(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * Filter on the number of LLM call errors within a session.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $modelCallErrors
   */
  public function setModelCallErrors(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $modelCallErrors)
  {
    $this->modelCallErrors = $modelCallErrors;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate
   */
  public function getModelCallErrors()
  {
    return $this->modelCallErrors;
  }
  /**
   * Filter on the number of underlying LLM calls within a session.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $modelCalls
   */
  public function setModelCalls(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $modelCalls)
  {
    $this->modelCalls = $modelCalls;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate
   */
  public function getModelCalls()
  {
    return $this->modelCalls;
  }
  /**
   * Filter on the number of tool call errors within a session.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $toolCallErrors
   */
  public function setToolCallErrors(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $toolCallErrors)
  {
    $this->toolCallErrors = $toolCallErrors;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate
   */
  public function getToolCallErrors()
  {
    return $this->toolCallErrors;
  }
  /**
   * Filter on the number of underlying tool calls within a session.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $toolCalls
   */
  public function setToolCalls(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $toolCalls)
  {
    $this->toolCalls = $toolCalls;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate
   */
  public function getToolCalls()
  {
    return $this->toolCalls;
  }
  /**
   * Filter on the total token usage within a session.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $totalTokenUsage
   */
  public function setTotalTokenUsage(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $totalTokenUsage)
  {
    $this->totalTokenUsage = $totalTokenUsage;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate
   */
  public function getTotalTokenUsage()
  {
    return $this->totalTokenUsage;
  }
  /**
   * Filter on the number of user turns within a session.
   *
   * @param GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $userTurns
   */
  public function setUserTurns(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate $userTurns)
  {
    $this->userTurns = $userTurns;
  }
  /**
   * @return GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilityNumericPredicate
   */
  public function getUserTurns()
  {
    return $this->userTurns;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopePredicate::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1OnlineEvaluatorCloudObservabilitySessionScopePredicate');
