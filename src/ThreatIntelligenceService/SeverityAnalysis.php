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

namespace Google\Service\ThreatIntelligenceService;

class SeverityAnalysis extends \Google\Model
{
  /**
   * Default value. Confidence level is not specified.
   */
  public const CONFIDENCE_CONFIDENCE_LEVEL_UNSPECIFIED = 'CONFIDENCE_LEVEL_UNSPECIFIED';
  /**
   * Low confidence in the verdict.
   */
  public const CONFIDENCE_CONFIDENCE_LEVEL_LOW = 'CONFIDENCE_LEVEL_LOW';
  /**
   * Medium confidence in the verdict.
   */
  public const CONFIDENCE_CONFIDENCE_LEVEL_MEDIUM = 'CONFIDENCE_LEVEL_MEDIUM';
  /**
   * High confidence in the verdict.
   */
  public const CONFIDENCE_CONFIDENCE_LEVEL_HIGH = 'CONFIDENCE_LEVEL_HIGH';
  /**
   * Default value, should never be set.
   */
  public const SEVERITY_LEVEL_SEVERITY_LEVEL_UNSPECIFIED = 'SEVERITY_LEVEL_UNSPECIFIED';
  /**
   * Low Severity.
   */
  public const SEVERITY_LEVEL_SEVERITY_LEVEL_LOW = 'SEVERITY_LEVEL_LOW';
  /**
   * Medium Severity.
   */
  public const SEVERITY_LEVEL_SEVERITY_LEVEL_MEDIUM = 'SEVERITY_LEVEL_MEDIUM';
  /**
   * High Severity.
   */
  public const SEVERITY_LEVEL_SEVERITY_LEVEL_HIGH = 'SEVERITY_LEVEL_HIGH';
  /**
   * The level of confidence in the given verdict.
   *
   * @var string
   */
  public $confidence;
  /**
   * Human-readable explanation from the model, detailing why a particular
   * result is considered to have a certain severity.
   *
   * @var string
   */
  public $reasoning;
  /**
   * The level of severity.
   *
   * @var string
   */
  public $severityLevel;

  /**
   * The level of confidence in the given verdict.
   *
   * Accepted values: CONFIDENCE_LEVEL_UNSPECIFIED, CONFIDENCE_LEVEL_LOW,
   * CONFIDENCE_LEVEL_MEDIUM, CONFIDENCE_LEVEL_HIGH
   *
   * @param self::CONFIDENCE_* $confidence
   */
  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }
  /**
   * @return self::CONFIDENCE_*
   */
  public function getConfidence()
  {
    return $this->confidence;
  }
  /**
   * Human-readable explanation from the model, detailing why a particular
   * result is considered to have a certain severity.
   *
   * @param string $reasoning
   */
  public function setReasoning($reasoning)
  {
    $this->reasoning = $reasoning;
  }
  /**
   * @return string
   */
  public function getReasoning()
  {
    return $this->reasoning;
  }
  /**
   * The level of severity.
   *
   * Accepted values: SEVERITY_LEVEL_UNSPECIFIED, SEVERITY_LEVEL_LOW,
   * SEVERITY_LEVEL_MEDIUM, SEVERITY_LEVEL_HIGH
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
class_alias(SeverityAnalysis::class, 'Google_Service_ThreatIntelligenceService_SeverityAnalysis');
