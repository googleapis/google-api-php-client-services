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

class GoogleCloudContactcenterinsightsV1GenerativeInsightsResponse extends \Google\Collection
{
  protected $collection_key = 'generativeResponses';
  protected $generativeResponsesType = GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponse::class;
  protected $generativeResponsesDataType = 'array';
  protected $transcriptType = GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscript::class;
  protected $transcriptDataType = '';

  /**
   * The full list of generative responses. Each response is ordered by time.
   *
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponse[] $generativeResponses
   */
  public function setGenerativeResponses($generativeResponses)
  {
    $this->generativeResponses = $generativeResponses;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightsResponseGenerativeResponse[]
   */
  public function getGenerativeResponses()
  {
    return $this->generativeResponses;
  }
  /**
   * The transcript of the generative insights conversation.
   *
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscript $transcript
   */
  public function setTranscript(GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscript $transcript)
  {
    $this->transcript = $transcript;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightConversationTranscript
   */
  public function getTranscript()
  {
    return $this->transcript;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1GenerativeInsightsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1GenerativeInsightsResponse');
