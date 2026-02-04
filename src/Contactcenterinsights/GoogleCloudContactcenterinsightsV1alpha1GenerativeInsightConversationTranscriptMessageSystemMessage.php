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

class GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessage extends \Google\Model
{
  /**
   * Chart spec from LLM
   *
   * @var array[]
   */
  public $chartSpec;
  /**
   * Raw SQL from LLM, before templatization
   *
   * @var string
   */
  public $generatedSqlQuery;
  protected $textMessageType = GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessageTextOutput::class;
  protected $textMessageDataType = '';
  /**
   * Optional. User provided chart spec
   *
   * @var array[]
   */
  public $userProvidedChartSpec;
  /**
   * Optional. User provided SQL query
   *
   * @var string
   */
  public $userProvidedSqlQuery;

  /**
   * Chart spec from LLM
   *
   * @param array[] $chartSpec
   */
  public function setChartSpec($chartSpec)
  {
    $this->chartSpec = $chartSpec;
  }
  /**
   * @return array[]
   */
  public function getChartSpec()
  {
    return $this->chartSpec;
  }
  /**
   * Raw SQL from LLM, before templatization
   *
   * @param string $generatedSqlQuery
   */
  public function setGeneratedSqlQuery($generatedSqlQuery)
  {
    $this->generatedSqlQuery = $generatedSqlQuery;
  }
  /**
   * @return string
   */
  public function getGeneratedSqlQuery()
  {
    return $this->generatedSqlQuery;
  }
  /**
   * A direct natural language response to the user message.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessageTextOutput $textMessage
   */
  public function setTextMessage(GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessageTextOutput $textMessage)
  {
    $this->textMessage = $textMessage;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessageTextOutput
   */
  public function getTextMessage()
  {
    return $this->textMessage;
  }
  /**
   * Optional. User provided chart spec
   *
   * @param array[] $userProvidedChartSpec
   */
  public function setUserProvidedChartSpec($userProvidedChartSpec)
  {
    $this->userProvidedChartSpec = $userProvidedChartSpec;
  }
  /**
   * @return array[]
   */
  public function getUserProvidedChartSpec()
  {
    return $this->userProvidedChartSpec;
  }
  /**
   * Optional. User provided SQL query
   *
   * @param string $userProvidedSqlQuery
   */
  public function setUserProvidedSqlQuery($userProvidedSqlQuery)
  {
    $this->userProvidedSqlQuery = $userProvidedSqlQuery;
  }
  /**
   * @return string
   */
  public function getUserProvidedSqlQuery()
  {
    return $this->userProvidedSqlQuery;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessage::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessage');
