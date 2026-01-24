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

class PriorityAnalysis extends \Google\Model
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
  public const PRIORITY_LEVEL_PRIORITY_LEVEL_UNSPECIFIED = 'PRIORITY_LEVEL_UNSPECIFIED';
  /**
   * Low Priority.
   */
  public const PRIORITY_LEVEL_PRIORITY_LEVEL_LOW = 'PRIORITY_LEVEL_LOW';
  /**
   * Medium Priority.
   */
  public const PRIORITY_LEVEL_PRIORITY_LEVEL_MEDIUM = 'PRIORITY_LEVEL_MEDIUM';
  /**
   * High Priority.
   */
  public const PRIORITY_LEVEL_PRIORITY_LEVEL_HIGH = 'PRIORITY_LEVEL_HIGH';
  /**
   * Critical Priority.
   */
  public const PRIORITY_LEVEL_PRIORITY_LEVEL_CRITICAL = 'PRIORITY_LEVEL_CRITICAL';
  /**
   * The level of confidence in the given verdict.
   *
   * @var string
   */
  public $confidence;
  /**
   * The level of Priority.
   *
   * @var string
   */
  public $priorityLevel;
  /**
   * Human-readable explanation from the model, detailing why a particular
   * result is considered to have a certain priority.
   *
   * @var string
   */
  public $reasoning;

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
   * The level of Priority.
   *
   * Accepted values: PRIORITY_LEVEL_UNSPECIFIED, PRIORITY_LEVEL_LOW,
   * PRIORITY_LEVEL_MEDIUM, PRIORITY_LEVEL_HIGH, PRIORITY_LEVEL_CRITICAL
   *
   * @param self::PRIORITY_LEVEL_* $priorityLevel
   */
  public function setPriorityLevel($priorityLevel)
  {
    $this->priorityLevel = $priorityLevel;
  }
  /**
   * @return self::PRIORITY_LEVEL_*
   */
  public function getPriorityLevel()
  {
    return $this->priorityLevel;
  }
  /**
   * Human-readable explanation from the model, detailing why a particular
   * result is considered to have a certain priority.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PriorityAnalysis::class, 'Google_Service_ThreatIntelligenceService_PriorityAnalysis');
