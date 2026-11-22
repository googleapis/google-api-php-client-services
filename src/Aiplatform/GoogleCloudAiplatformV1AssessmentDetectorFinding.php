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

class GoogleCloudAiplatformV1AssessmentDetectorFinding extends \Google\Collection
{
  /**
   * Unspecified severity.
   */
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * Low severity.
   */
  public const SEVERITY_SEVERITY_LOW = 'SEVERITY_LOW';
  /**
   * Medium severity.
   */
  public const SEVERITY_SEVERITY_MEDIUM = 'SEVERITY_MEDIUM';
  /**
   * High severity.
   */
  public const SEVERITY_SEVERITY_HIGH = 'SEVERITY_HIGH';
  /**
   * Critical severity.
   */
  public const SEVERITY_SEVERITY_CRITICAL = 'SEVERITY_CRITICAL';
  protected $collection_key = 'recommendations';
  /**
   * The detector ID.
   *
   * @var string
   */
  public $detectorId;
  /**
   * The detector display name.
   *
   * @var string
   */
  public $displayName;
  /**
   * The explanation of the finding.
   *
   * @var string
   */
  public $explanation;
  /**
   * The probability that this finding is an anomaly, in the range [0.0, 1.0].
   *
   * @var 
   */
  public $probability;
  /**
   * The list of recommendations for this detector finding.
   *
   * @var string[]
   */
  public $recommendations;
  /**
   * The severity of the finding.
   *
   * @var string
   */
  public $severity;

  /**
   * The detector ID.
   *
   * @param string $detectorId
   */
  public function setDetectorId($detectorId)
  {
    $this->detectorId = $detectorId;
  }
  /**
   * @return string
   */
  public function getDetectorId()
  {
    return $this->detectorId;
  }
  /**
   * The detector display name.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * The explanation of the finding.
   *
   * @param string $explanation
   */
  public function setExplanation($explanation)
  {
    $this->explanation = $explanation;
  }
  /**
   * @return string
   */
  public function getExplanation()
  {
    return $this->explanation;
  }
  public function setProbability($probability)
  {
    $this->probability = $probability;
  }
  public function getProbability()
  {
    return $this->probability;
  }
  /**
   * The list of recommendations for this detector finding.
   *
   * @param string[] $recommendations
   */
  public function setRecommendations($recommendations)
  {
    $this->recommendations = $recommendations;
  }
  /**
   * @return string[]
   */
  public function getRecommendations()
  {
    return $this->recommendations;
  }
  /**
   * The severity of the finding.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, SEVERITY_LOW, SEVERITY_MEDIUM,
   * SEVERITY_HIGH, SEVERITY_CRITICAL
   *
   * @param self::SEVERITY_* $severity
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return self::SEVERITY_*
   */
  public function getSeverity()
  {
    return $this->severity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AssessmentDetectorFinding::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AssessmentDetectorFinding');
