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

class GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary extends \Google\Collection
{
  /**
   * Unspecified severity.
   */
  public const SEVERITY_LEVEL_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * Low severity.
   */
  public const SEVERITY_LEVEL_SEVERITY_LOW = 'SEVERITY_LOW';
  /**
   * Medium severity.
   */
  public const SEVERITY_LEVEL_SEVERITY_MEDIUM = 'SEVERITY_MEDIUM';
  /**
   * High severity.
   */
  public const SEVERITY_LEVEL_SEVERITY_HIGH = 'SEVERITY_HIGH';
  /**
   * Critical severity.
   */
  public const SEVERITY_LEVEL_SEVERITY_CRITICAL = 'SEVERITY_CRITICAL';
  protected $collection_key = 'detectorIds';
  /**
   * The list of detectors summaries for this severity level.
   *
   * @var string[]
   */
  public $detectorIds;
  /**
   * Output only. The number of distinct sessions whose maximum severity equals
   * `severity_level`. Each session is counted in exactly one bucket (its
   * highest severity). Scope depends on where this appears: a global count on
   * `AggregateAnalyzedSessionsResponse.summary`, per-agent on
   * `agent_aggregates` entries, and page-scoped on
   * `ListAnalyzedSessionsResponse`.
   *
   * @var int
   */
  public $sessionsCount;
  /**
   * The severity level of the detector.
   *
   * @var string
   */
  public $severityLevel;

  /**
   * The list of detectors summaries for this severity level.
   *
   * @param string[] $detectorIds
   */
  public function setDetectorIds($detectorIds)
  {
    $this->detectorIds = $detectorIds;
  }
  /**
   * @return string[]
   */
  public function getDetectorIds()
  {
    return $this->detectorIds;
  }
  /**
   * Output only. The number of distinct sessions whose maximum severity equals
   * `severity_level`. Each session is counted in exactly one bucket (its
   * highest severity). Scope depends on where this appears: a global count on
   * `AggregateAnalyzedSessionsResponse.summary`, per-agent on
   * `agent_aggregates` entries, and page-scoped on
   * `ListAnalyzedSessionsResponse`.
   *
   * @param int $sessionsCount
   */
  public function setSessionsCount($sessionsCount)
  {
    $this->sessionsCount = $sessionsCount;
  }
  /**
   * @return int
   */
  public function getSessionsCount()
  {
    return $this->sessionsCount;
  }
  /**
   * The severity level of the detector.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, SEVERITY_LOW, SEVERITY_MEDIUM,
   * SEVERITY_HIGH, SEVERITY_CRITICAL
   *
   * @param self::SEVERITY_LEVEL_* $severityLevel
   */
  public function setSeverityLevel($severityLevel)
  {
    $this->severityLevel = $severityLevel;
  }
  /**
   * @return self::SEVERITY_LEVEL_*
   */
  public function getSeverityLevel()
  {
    return $this->severityLevel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary');
