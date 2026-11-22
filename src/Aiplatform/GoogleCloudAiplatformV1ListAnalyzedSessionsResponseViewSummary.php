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

class GoogleCloudAiplatformV1ListAnalyzedSessionsResponseViewSummary extends \Google\Model
{
  /**
   * Output only. The number of distinct agents in the request scope with at
   * least one anomalous session in the time window. On
   * `AggregateAnalyzedSessionsResponse.summary` this is a global count; it is
   * not populated on `ListAnalyzedSessionsResponse.summary`.
   *
   * @var int
   */
  public $anomalousAgentsCount;
  /**
   * Number of anomalous sessions.
   *
   * @var int
   */
  public $anomalousSessionsCount;
  /**
   * Output only. The number of distinct sessions in the time window that were
   * scanned by the LLM judge.
   *
   * @var int
   */
  public $llmScannedSessionsCount;
  protected $severitiesType = GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary::class;
  protected $severitiesDataType = 'map';
  /**
   * Total number of sessions.
   *
   * @var int
   */
  public $totalSessionsCount;

  /**
   * Output only. The number of distinct agents in the request scope with at
   * least one anomalous session in the time window. On
   * `AggregateAnalyzedSessionsResponse.summary` this is a global count; it is
   * not populated on `ListAnalyzedSessionsResponse.summary`.
   *
   * @param int $anomalousAgentsCount
   */
  public function setAnomalousAgentsCount($anomalousAgentsCount)
  {
    $this->anomalousAgentsCount = $anomalousAgentsCount;
  }
  /**
   * @return int
   */
  public function getAnomalousAgentsCount()
  {
    return $this->anomalousAgentsCount;
  }
  /**
   * Number of anomalous sessions.
   *
   * @param int $anomalousSessionsCount
   */
  public function setAnomalousSessionsCount($anomalousSessionsCount)
  {
    $this->anomalousSessionsCount = $anomalousSessionsCount;
  }
  /**
   * @return int
   */
  public function getAnomalousSessionsCount()
  {
    return $this->anomalousSessionsCount;
  }
  /**
   * Output only. The number of distinct sessions in the time window that were
   * scanned by the LLM judge.
   *
   * @param int $llmScannedSessionsCount
   */
  public function setLlmScannedSessionsCount($llmScannedSessionsCount)
  {
    $this->llmScannedSessionsCount = $llmScannedSessionsCount;
  }
  /**
   * @return int
   */
  public function getLlmScannedSessionsCount()
  {
    return $this->llmScannedSessionsCount;
  }
  /**
   * The list of severity summaries for the analyzed sessions. The key is the
   * string representation of Severity enum: "SEVERITY_UNSPECIFIED",
   * "SEVERITY_CRITICAL", "SEVERITY_HIGH", "SEVERITY_MEDIUM", "SEVERITY_LOW".
   *
   * @param GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary[] $severities
   */
  public function setSeverities($severities)
  {
    $this->severities = $severities;
  }
  /**
   * @return GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary[]
   */
  public function getSeverities()
  {
    return $this->severities;
  }
  /**
   * Total number of sessions.
   *
   * @param int $totalSessionsCount
   */
  public function setTotalSessionsCount($totalSessionsCount)
  {
    $this->totalSessionsCount = $totalSessionsCount;
  }
  /**
   * @return int
   */
  public function getTotalSessionsCount()
  {
    return $this->totalSessionsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ListAnalyzedSessionsResponseViewSummary::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ListAnalyzedSessionsResponseViewSummary');
