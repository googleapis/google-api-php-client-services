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

class DomainMonitoringGtiDetails extends \Google\Model
{
  /**
   * Default value. The verdict is not set or unspecified.
   */
  public const VERDICT_DOMAIN_MONITORING_GTI_VERDICT_UNSPECIFIED = 'DOMAIN_MONITORING_GTI_VERDICT_UNSPECIFIED';
  /**
   * Verdict is clean; the entity is considered harmless.
   */
  public const VERDICT_DOMAIN_MONITORING_GTI_VERDICT_BENIGN = 'DOMAIN_MONITORING_GTI_VERDICT_BENIGN';
  /**
   * Verdict is undetected; no immediate evidence of malicious intent.
   */
  public const VERDICT_DOMAIN_MONITORING_GTI_VERDICT_UNDETECTED = 'DOMAIN_MONITORING_GTI_VERDICT_UNDETECTED';
  /**
   * Verdict is suspicious; possible malicious activity detected.
   */
  public const VERDICT_DOMAIN_MONITORING_GTI_VERDICT_SUSPICIOUS = 'DOMAIN_MONITORING_GTI_VERDICT_SUSPICIOUS';
  /**
   * Verdict is malicious; high confidence that the entity poses a threat.
   */
  public const VERDICT_DOMAIN_MONITORING_GTI_VERDICT_MALICIOUS = 'DOMAIN_MONITORING_GTI_VERDICT_MALICIOUS';
  /**
   * Verdict is not applicable; not able to generate a verdict for this entity.
   */
  public const VERDICT_DOMAIN_MONITORING_GTI_VERDICT_UNKNOWN = 'DOMAIN_MONITORING_GTI_VERDICT_UNKNOWN';
  protected $avDetectionsType = AVDetections::class;
  protected $avDetectionsDataType = '';
  /**
   * Optional. The permutation technique used for the domain (e.g., dictionary,
   * homoglyph).
   *
   * @var string
   */
  public $domainPermutation;
  /**
   * Optional. The GTI link for the domain.
   *
   * @var string
   */
  public $gtiDomainUri;
  /**
   * Optional. The GTI score of the domain. The threat score is a number between
   * 0 and 100.
   *
   * @var int
   */
  public $gtiScore;
  /**
   * Optional. The threat classification of the domain, obtained from the domain
   * report (e.g. DomainMonitoring).
   *
   * @var string
   */
  public $threatClassification;
  /**
   * Output only. The verdict of the domain.
   *
   * @var string
   */
  public $verdict;

  /**
   * Optional. Detection counts across vendor feeds.
   *
   * @param AVDetections $avDetections
   */
  public function setAvDetections(AVDetections $avDetections)
  {
    $this->avDetections = $avDetections;
  }
  /**
   * @return AVDetections
   */
  public function getAvDetections()
  {
    return $this->avDetections;
  }
  /**
   * Optional. The permutation technique used for the domain (e.g., dictionary,
   * homoglyph).
   *
   * @param string $domainPermutation
   */
  public function setDomainPermutation($domainPermutation)
  {
    $this->domainPermutation = $domainPermutation;
  }
  /**
   * @return string
   */
  public function getDomainPermutation()
  {
    return $this->domainPermutation;
  }
  /**
   * Optional. The GTI link for the domain.
   *
   * @param string $gtiDomainUri
   */
  public function setGtiDomainUri($gtiDomainUri)
  {
    $this->gtiDomainUri = $gtiDomainUri;
  }
  /**
   * @return string
   */
  public function getGtiDomainUri()
  {
    return $this->gtiDomainUri;
  }
  /**
   * Optional. The GTI score of the domain. The threat score is a number between
   * 0 and 100.
   *
   * @param int $gtiScore
   */
  public function setGtiScore($gtiScore)
  {
    $this->gtiScore = $gtiScore;
  }
  /**
   * @return int
   */
  public function getGtiScore()
  {
    return $this->gtiScore;
  }
  /**
   * Optional. The threat classification of the domain, obtained from the domain
   * report (e.g. DomainMonitoring).
   *
   * @param string $threatClassification
   */
  public function setThreatClassification($threatClassification)
  {
    $this->threatClassification = $threatClassification;
  }
  /**
   * @return string
   */
  public function getThreatClassification()
  {
    return $this->threatClassification;
  }
  /**
   * Output only. The verdict of the domain.
   *
   * Accepted values: DOMAIN_MONITORING_GTI_VERDICT_UNSPECIFIED,
   * DOMAIN_MONITORING_GTI_VERDICT_BENIGN,
   * DOMAIN_MONITORING_GTI_VERDICT_UNDETECTED,
   * DOMAIN_MONITORING_GTI_VERDICT_SUSPICIOUS,
   * DOMAIN_MONITORING_GTI_VERDICT_MALICIOUS,
   * DOMAIN_MONITORING_GTI_VERDICT_UNKNOWN
   *
   * @param self::VERDICT_* $verdict
   */
  public function setVerdict($verdict)
  {
    $this->verdict = $verdict;
  }
  /**
   * @return self::VERDICT_*
   */
  public function getVerdict()
  {
    return $this->verdict;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DomainMonitoringGtiDetails::class, 'Google_Service_ThreatIntelligenceService_DomainMonitoringGtiDetails');
