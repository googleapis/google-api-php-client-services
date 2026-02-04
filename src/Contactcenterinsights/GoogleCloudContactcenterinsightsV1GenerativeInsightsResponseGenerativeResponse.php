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

class GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponse extends \Google\Model
{
  /**
   * The chart spec for the data. This will be specified in the vega-lite or
   * vega format.
   *
   * @var array[]
   */
  public $chartSpec;
  /**
   * The generated SQL query from the LLM. Will be populated during the chart
   * building phase. The generated SQL will be cached in the corresponding chart
   * resource.
   *
   * @var string
   */
  public $generatedSqlQuery;
  protected $textMessageType = GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponseTextOutput::class;
  protected $textMessageDataType = '';
  /**
   * The text output from the LLM. Will be populated during the chart building
   * phase. For a reloaded chart, this will NOT be populated. May contain
   * THOUGHT or a FINAL response or some in-progress response.
   *
   * @deprecated
   * @var string
   */
  public $textOutput;

  /**
   * The chart spec for the data. This will be specified in the vega-lite or
   * vega format.
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
   * The generated SQL query from the LLM. Will be populated during the chart
   * building phase. The generated SQL will be cached in the corresponding chart
   * resource.
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
   * The text output from the LLM. Will be populated during the chart building
   * phase. For a reloaded chart, this will NOT be populated. May contain
   * THOUGHT or a FINAL response or some in-progress response.
   *
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponseTextOutput $textMessage
   */
  public function setTextMessage(GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponseTextOutput $textMessage)
  {
    $this->textMessage = $textMessage;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponseTextOutput
   */
  public function getTextMessage()
  {
    return $this->textMessage;
  }
  /**
   * The text output from the LLM. Will be populated during the chart building
   * phase. For a reloaded chart, this will NOT be populated. May contain
   * THOUGHT or a FINAL response or some in-progress response.
   *
   * @deprecated
   * @param string $textOutput
   */
  public function setTextOutput($textOutput)
  {
    $this->textOutput = $textOutput;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getTextOutput()
  {
    return $this->textOutput;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponse');
