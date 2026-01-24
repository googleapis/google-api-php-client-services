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

class InitialAccessBrokerFindingDetail extends \Google\Model
{
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  public const SEVERITY_LOW = 'LOW';
  public const SEVERITY_MEDIUM = 'MEDIUM';
  public const SEVERITY_HIGH = 'HIGH';
  public const SEVERITY_CRITICAL = 'CRITICAL';
  /**
   * Required. The unique identifier of the document that triggered the IAB
   * finding. This ID can be used to retrieve the content of the document for
   * further analysis.
   *
   * @var string
   */
  public $documentId;
  /**
   * Required. Reference to the match score of the IAB finding. This is a float
   * value between 0 and 1 calculated by the matching engine based on the
   * similarity of the document and the user provided configurations.
   *
   * @var float
   */
  public $matchScore;
  /**
   * Required. The severity of the IAB finding. This indicates the potential
   * impact of the threat.
   *
   * @var string
   */
  public $severity;

  /**
   * Required. The unique identifier of the document that triggered the IAB
   * finding. This ID can be used to retrieve the content of the document for
   * further analysis.
   *
   * @param string $documentId
   */
  public function setDocumentId($documentId)
  {
    $this->documentId = $documentId;
  }
  /**
   * @return string
   */
  public function getDocumentId()
  {
    return $this->documentId;
  }
  /**
   * Required. Reference to the match score of the IAB finding. This is a float
   * value between 0 and 1 calculated by the matching engine based on the
   * similarity of the document and the user provided configurations.
   *
   * @param float $matchScore
   */
  public function setMatchScore($matchScore)
  {
    $this->matchScore = $matchScore;
  }
  /**
   * @return float
   */
  public function getMatchScore()
  {
    return $this->matchScore;
  }
  /**
   * Required. The severity of the IAB finding. This indicates the potential
   * impact of the threat.
   *
   * Accepted values: SEVERITY_UNSPECIFIED, LOW, MEDIUM, HIGH, CRITICAL
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
class_alias(InitialAccessBrokerFindingDetail::class, 'Google_Service_ThreatIntelligenceService_InitialAccessBrokerFindingDetail');
