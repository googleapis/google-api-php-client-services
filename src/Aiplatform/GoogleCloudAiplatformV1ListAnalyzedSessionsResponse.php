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

class GoogleCloudAiplatformV1ListAnalyzedSessionsResponse extends \Google\Collection
{
  protected $collection_key = 'analyzedSessions';
  protected $analyzedSessionsType = GoogleCloudAiplatformV1AnalyzedSession::class;
  protected $analyzedSessionsDataType = 'array';
  /**
   * A token to retrieve the next page of results.
   *
   * @var string
   */
  public $nextPageToken;
  protected $summaryType = GoogleCloudAiplatformV1ListAnalyzedSessionsResponseViewSummary::class;
  protected $summaryDataType = '';

  /**
   * The list of analyzed sessions.
   *
   * @param GoogleCloudAiplatformV1AnalyzedSession[] $analyzedSessions
   */
  public function setAnalyzedSessions($analyzedSessions)
  {
    $this->analyzedSessions = $analyzedSessions;
  }
  /**
   * @return GoogleCloudAiplatformV1AnalyzedSession[]
   */
  public function getAnalyzedSessions()
  {
    return $this->analyzedSessions;
  }
  /**
   * A token to retrieve the next page of results.
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
   * Summary statistics computed across the sessions on the current page only.
   * For statistics across the entire result set, use AggregateAnalyzedSessions.
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
class_alias(GoogleCloudAiplatformV1ListAnalyzedSessionsResponse::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ListAnalyzedSessionsResponse');
