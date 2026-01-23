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

class GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigMetadataFullConversationCorrelationStats extends \Google\Collection
{
  protected $collection_key = 'partialErrors';
  protected $conversationCorrelationErrorsType = GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigMetadataFullConversationCorrelationStatsConversationCorrelationError::class;
  protected $conversationCorrelationErrorsDataType = 'array';
  /**
   * The number of conversations correlated.
   *
   * @var int
   */
  public $correlatedConversationsCount;
  /**
   * The number of conversations that failed correlation.
   *
   * @var int
   */
  public $failedConversationsCount;
  protected $partialErrorsType = GoogleRpcStatus::class;
  protected $partialErrorsDataType = 'array';
  /**
   * The number of conversations sampled.
   *
   * @var int
   */
  public $sampledConversationsCount;

  /**
   * A list of errors that occurred during correlation, one for each
   * conversation that failed.
   *
   * @param GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigMetadataFullConversationCorrelationStatsConversationCorrelationError[] $conversationCorrelationErrors
   */
  public function setConversationCorrelationErrors($conversationCorrelationErrors)
  {
    $this->conversationCorrelationErrors = $conversationCorrelationErrors;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigMetadataFullConversationCorrelationStatsConversationCorrelationError[]
   */
  public function getConversationCorrelationErrors()
  {
    return $this->conversationCorrelationErrors;
  }
  /**
   * The number of conversations correlated.
   *
   * @param int $correlatedConversationsCount
   */
  public function setCorrelatedConversationsCount($correlatedConversationsCount)
  {
    $this->correlatedConversationsCount = $correlatedConversationsCount;
  }
  /**
   * @return int
   */
  public function getCorrelatedConversationsCount()
  {
    return $this->correlatedConversationsCount;
  }
  /**
   * The number of conversations that failed correlation.
   *
   * @param int $failedConversationsCount
   */
  public function setFailedConversationsCount($failedConversationsCount)
  {
    $this->failedConversationsCount = $failedConversationsCount;
  }
  /**
   * @return int
   */
  public function getFailedConversationsCount()
  {
    return $this->failedConversationsCount;
  }
  /**
   * Partial errors during test correlation config operation that might cause
   * the operation output to be incomplete.
   *
   * @param GoogleRpcStatus[] $partialErrors
   */
  public function setPartialErrors($partialErrors)
  {
    $this->partialErrors = $partialErrors;
  }
  /**
   * @return GoogleRpcStatus[]
   */
  public function getPartialErrors()
  {
    return $this->partialErrors;
  }
  /**
   * The number of conversations sampled.
   *
   * @param int $sampledConversationsCount
   */
  public function setSampledConversationsCount($sampledConversationsCount)
  {
    $this->sampledConversationsCount = $sampledConversationsCount;
  }
  /**
   * @return int
   */
  public function getSampledConversationsCount()
  {
    return $this->sampledConversationsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigMetadataFullConversationCorrelationStats::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainTestCorrelationConfigMetadataFullConversationCorrelationStats');
