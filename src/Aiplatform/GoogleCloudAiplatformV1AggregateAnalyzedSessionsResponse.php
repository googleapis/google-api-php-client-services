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

class GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponse extends \Google\Collection
{
  protected $collection_key = 'agentAggregates';
  protected $agentAggregatesType = GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponseAgentAggregate::class;
  protected $agentAggregatesDataType = 'array';
  /**
   * A token, which can be sent as `page_token` to retrieve the next page. If
   * this field is omitted, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;
  protected $summaryType = GoogleCloudAiplatformV1ListAnalyzedSessionsResponseViewSummary::class;
  protected $summaryDataType = '';

  /**
   * Aggregated statistics — exactly one entry per unique MonitoredAgent matched
   * by the request.
   *
   * @param GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponseAgentAggregate[] $agentAggregates
   */
  public function setAgentAggregates($agentAggregates)
  {
    $this->agentAggregates = $agentAggregates;
  }
  /**
   * @return GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponseAgentAggregate[]
   */
  public function getAgentAggregates()
  {
    return $this->agentAggregates;
  }
  /**
   * A token, which can be sent as `page_token` to retrieve the next page. If
   * this field is omitted, there are no subsequent pages.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * Overall summary across every MonitoredAgent included in the response.
   *
   * @param GoogleCloudAiplatformV1ListAnalyzedSessionsResponseViewSummary $summary
   */
  public function setSummary(GoogleCloudAiplatformV1ListAnalyzedSessionsResponseViewSummary $summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return GoogleCloudAiplatformV1ListAnalyzedSessionsResponseViewSummary
   */
  public function getSummary()
  {
    return $this->summary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponse::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponse');
