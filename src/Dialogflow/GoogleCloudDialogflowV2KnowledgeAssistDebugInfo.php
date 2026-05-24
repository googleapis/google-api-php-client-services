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

namespace Google\Service\Dialogflow;

class GoogleCloudDialogflowV2KnowledgeAssistDebugInfo extends \Google\Model
{
  public const DATASTORE_RESPONSE_REASON_DATASTORE_RESPONSE_REASON_UNSPECIFIED = 'DATASTORE_RESPONSE_REASON_UNSPECIFIED';
  public const DATASTORE_RESPONSE_REASON_NONE = 'NONE';
  public const DATASTORE_RESPONSE_REASON_SEARCH_OUT_OF_QUOTA = 'SEARCH_OUT_OF_QUOTA';
  public const DATASTORE_RESPONSE_REASON_SEARCH_EMPTY_RESULTS = 'SEARCH_EMPTY_RESULTS';
  public const DATASTORE_RESPONSE_REASON_ANSWER_GENERATION_GEN_AI_DISABLED = 'ANSWER_GENERATION_GEN_AI_DISABLED';
  public const DATASTORE_RESPONSE_REASON_ANSWER_GENERATION_OUT_OF_QUOTA = 'ANSWER_GENERATION_OUT_OF_QUOTA';
  public const DATASTORE_RESPONSE_REASON_ANSWER_GENERATION_ERROR = 'ANSWER_GENERATION_ERROR';
  public const DATASTORE_RESPONSE_REASON_ANSWER_GENERATION_NOT_ENOUGH_INFO = 'ANSWER_GENERATION_NOT_ENOUGH_INFO';
  public const DATASTORE_RESPONSE_REASON_ANSWER_GENERATION_RAI_FAILED = 'ANSWER_GENERATION_RAI_FAILED';
  public const DATASTORE_RESPONSE_REASON_ANSWER_GENERATION_NOT_GROUNDED = 'ANSWER_GENERATION_NOT_GROUNDED';
  public const QUERY_CATEGORIZATION_FAILURE_REASON_QUERY_CATEGORIZATION_FAILURE_REASON_UNSPECIFIED = 'QUERY_CATEGORIZATION_FAILURE_REASON_UNSPECIFIED';
  public const QUERY_CATEGORIZATION_FAILURE_REASON_QUERY_CATEGORIZATION_INVALID_CONFIG = 'QUERY_CATEGORIZATION_INVALID_CONFIG';
  public const QUERY_CATEGORIZATION_FAILURE_REASON_QUERY_CATEGORIZATION_RESULT_NOT_FOUND = 'QUERY_CATEGORIZATION_RESULT_NOT_FOUND';
  public const QUERY_CATEGORIZATION_FAILURE_REASON_QUERY_CATEGORIZATION_FAILED = 'QUERY_CATEGORIZATION_FAILED';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_FAILURE_REASON_UNSPECIFIED = 'QUERY_GENERATION_FAILURE_REASON_UNSPECIFIED';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_OUT_OF_QUOTA = 'QUERY_GENERATION_OUT_OF_QUOTA';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_FAILED = 'QUERY_GENERATION_FAILED';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_NO_QUERY_GENERATED = 'QUERY_GENERATION_NO_QUERY_GENERATED';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_RAI_FAILED = 'QUERY_GENERATION_RAI_FAILED';
  public const QUERY_GENERATION_FAILURE_REASON_NOT_IN_ALLOWLIST = 'NOT_IN_ALLOWLIST';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_QUERY_REDACTED = 'QUERY_GENERATION_QUERY_REDACTED';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_LLM_RESPONSE_PARSE_FAILED = 'QUERY_GENERATION_LLM_RESPONSE_PARSE_FAILED';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_EMPTY_CONVERSATION = 'QUERY_GENERATION_EMPTY_CONVERSATION';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_EMPTY_LAST_MESSAGE = 'QUERY_GENERATION_EMPTY_LAST_MESSAGE';
  public const QUERY_GENERATION_FAILURE_REASON_QUERY_GENERATION_TRIGGERING_EVENT_CONDITION_NOT_MET = 'QUERY_GENERATION_TRIGGERING_EVENT_CONDITION_NOT_MET';
  /**
   * @var array[]
   */
  public $cesDebugInfo;
  /**
   * @var string
   */
  public $datastoreResponseReason;
  protected $ingestedContextReferenceDebugInfoType = GoogleCloudDialogflowV2IngestedContextReferenceDebugInfo::class;
  protected $ingestedContextReferenceDebugInfoDataType = '';
  protected $knowledgeAssistBehaviorType = GoogleCloudDialogflowV2KnowledgeAssistDebugInfoKnowledgeAssistBehavior::class;
  protected $knowledgeAssistBehaviorDataType = '';
  /**
   * @var string
   */
  public $queryCategorizationFailureReason;
  protected $queryGenerationDebugInfoType = GoogleCloudDialogflowV2KnowledgeAssistDebugInfoQueryGenerationDebugInfo::class;
  protected $queryGenerationDebugInfoDataType = '';
  /**
   * @var string
   */
  public $queryGenerationFailureReason;
  protected $serviceLatencyType = GoogleCloudDialogflowV2ServiceLatency::class;
  protected $serviceLatencyDataType = '';

  /**
   * @param array[] $cesDebugInfo
   */
  public function setCesDebugInfo($cesDebugInfo)
  {
    $this->cesDebugInfo = $cesDebugInfo;
  }
  /**
   * @return array[]
   */
  public function getCesDebugInfo()
  {
    return $this->cesDebugInfo;
  }
  /**
   * @param self::DATASTORE_RESPONSE_REASON_* $datastoreResponseReason
   */
  public function setDatastoreResponseReason($datastoreResponseReason)
  {
    $this->datastoreResponseReason = $datastoreResponseReason;
  }
  /**
   * @return self::DATASTORE_RESPONSE_REASON_*
   */
  public function getDatastoreResponseReason()
  {
    return $this->datastoreResponseReason;
  }
  /**
   * @param GoogleCloudDialogflowV2IngestedContextReferenceDebugInfo $ingestedContextReferenceDebugInfo
   */
  public function setIngestedContextReferenceDebugInfo(GoogleCloudDialogflowV2IngestedContextReferenceDebugInfo $ingestedContextReferenceDebugInfo)
  {
    $this->ingestedContextReferenceDebugInfo = $ingestedContextReferenceDebugInfo;
  }
  /**
   * @return GoogleCloudDialogflowV2IngestedContextReferenceDebugInfo
   */
  public function getIngestedContextReferenceDebugInfo()
  {
    return $this->ingestedContextReferenceDebugInfo;
  }
  /**
   * @param GoogleCloudDialogflowV2KnowledgeAssistDebugInfoKnowledgeAssistBehavior $knowledgeAssistBehavior
   */
  public function setKnowledgeAssistBehavior(GoogleCloudDialogflowV2KnowledgeAssistDebugInfoKnowledgeAssistBehavior $knowledgeAssistBehavior)
  {
    $this->knowledgeAssistBehavior = $knowledgeAssistBehavior;
  }
  /**
   * @return GoogleCloudDialogflowV2KnowledgeAssistDebugInfoKnowledgeAssistBehavior
   */
  public function getKnowledgeAssistBehavior()
  {
    return $this->knowledgeAssistBehavior;
  }
  /**
   * @param self::QUERY_CATEGORIZATION_FAILURE_REASON_* $queryCategorizationFailureReason
   */
  public function setQueryCategorizationFailureReason($queryCategorizationFailureReason)
  {
    $this->queryCategorizationFailureReason = $queryCategorizationFailureReason;
  }
  /**
   * @return self::QUERY_CATEGORIZATION_FAILURE_REASON_*
   */
  public function getQueryCategorizationFailureReason()
  {
    return $this->queryCategorizationFailureReason;
  }
  /**
   * @param GoogleCloudDialogflowV2KnowledgeAssistDebugInfoQueryGenerationDebugInfo $queryGenerationDebugInfo
   */
  public function setQueryGenerationDebugInfo(GoogleCloudDialogflowV2KnowledgeAssistDebugInfoQueryGenerationDebugInfo $queryGenerationDebugInfo)
  {
    $this->queryGenerationDebugInfo = $queryGenerationDebugInfo;
  }
  /**
   * @return GoogleCloudDialogflowV2KnowledgeAssistDebugInfoQueryGenerationDebugInfo
   */
  public function getQueryGenerationDebugInfo()
  {
    return $this->queryGenerationDebugInfo;
  }
  /**
   * @param self::QUERY_GENERATION_FAILURE_REASON_* $queryGenerationFailureReason
   */
  public function setQueryGenerationFailureReason($queryGenerationFailureReason)
  {
    $this->queryGenerationFailureReason = $queryGenerationFailureReason;
  }
  /**
   * @return self::QUERY_GENERATION_FAILURE_REASON_*
   */
  public function getQueryGenerationFailureReason()
  {
    return $this->queryGenerationFailureReason;
  }
  /**
   * @param GoogleCloudDialogflowV2ServiceLatency $serviceLatency
   */
  public function setServiceLatency(GoogleCloudDialogflowV2ServiceLatency $serviceLatency)
  {
    $this->serviceLatency = $serviceLatency;
  }
  /**
   * @return GoogleCloudDialogflowV2ServiceLatency
   */
  public function getServiceLatency()
  {
    return $this->serviceLatency;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDialogflowV2KnowledgeAssistDebugInfo::class, 'Google_Service_Dialogflow_GoogleCloudDialogflowV2KnowledgeAssistDebugInfo');
