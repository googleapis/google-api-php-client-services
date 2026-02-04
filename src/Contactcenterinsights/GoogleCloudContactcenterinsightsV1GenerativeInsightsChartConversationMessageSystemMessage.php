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

class GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessage extends \Google\Model
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
  protected $textOutputType = GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessageTextOutput::class;
  protected $textOutputDataType = '';

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
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessageTextOutput $textOutput
   */
  public function setTextOutput(GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessageTextOutput $textOutput)
  {
    $this->textOutput = $textOutput;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessageTextOutput
   */
  public function getTextOutput()
  {
    return $this->textOutput;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessage::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessage');
