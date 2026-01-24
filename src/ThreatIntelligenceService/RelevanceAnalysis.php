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

class RelevanceAnalysis extends \Google\Model
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
  public const RELEVANCE_LEVEL_RELEVANCE_LEVEL_UNSPECIFIED = 'RELEVANCE_LEVEL_UNSPECIFIED';
  /**
   * Low Relevance.
   */
  public const RELEVANCE_LEVEL_RELEVANCE_LEVEL_LOW = 'RELEVANCE_LEVEL_LOW';
  /**
   * Medium Relevance.
   */
  public const RELEVANCE_LEVEL_RELEVANCE_LEVEL_MEDIUM = 'RELEVANCE_LEVEL_MEDIUM';
  /**
   * High Relevance.
   */
  public const RELEVANCE_LEVEL_RELEVANCE_LEVEL_HIGH = 'RELEVANCE_LEVEL_HIGH';
  /**
   * The level of confidence in the given verdict.
   *
   * @var string
   */
  public $confidence;
  protected $evidenceType = Evidence::class;
  protected $evidenceDataType = '';
  /**
   * Human-readable explanation from the matcher, detailing why a particular
   * result is considered relevant or not relevant.
   *
   * @var string
   */
  public $reasoning;
  /**
   * The level of relevance.
   *
   * @var string
   */
  public $relevanceLevel;
  /**
   * Indicates whether the threat is considered relevant.
   *
   * @var bool
   */
  public $relevant;

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
   * Evidence supporting the verdict, including matched and unmatched items.
   *
   * @param Evidence $evidence
   */
  public function setEvidence(Evidence $evidence)
  {
    $this->evidence = $evidence;
  }
  /**
   * @return Evidence
   */
  public function getEvidence()
  {
    return $this->evidence;
  }
  /**
   * Human-readable explanation from the matcher, detailing why a particular
   * result is considered relevant or not relevant.
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
   * The level of relevance.
   *
   * Accepted values: RELEVANCE_LEVEL_UNSPECIFIED, RELEVANCE_LEVEL_LOW,
   * RELEVANCE_LEVEL_MEDIUM, RELEVANCE_LEVEL_HIGH
   *
   * @param self::RELEVANCE_LEVEL_* $relevanceLevel
   */
  public function setRelevanceLevel($relevanceLevel)
  {
    $this->relevanceLevel = $relevanceLevel;
  }
  /**
   * @return self::RELEVANCE_LEVEL_*
   */
  public function getRelevanceLevel()
  {
    return $this->relevanceLevel;
  }
  /**
   * Indicates whether the threat is considered relevant.
   *
   * @param bool $relevant
   */
  public function setRelevant($relevant)
  {
    $this->relevant = $relevant;
  }
  /**
   * @return bool
   */
  public function getRelevant()
  {
    return $this->relevant;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RelevanceAnalysis::class, 'Google_Service_ThreatIntelligenceService_RelevanceAnalysis');
