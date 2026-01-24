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

class SuspiciousDomainGtiDetails extends \Google\Model
{
  /**
   * Unspecified verdict.
   */
  public const VERDICT_SUSPICIOUS_DOMAIN_GTI_VERDICT_UNSPECIFIED = 'SUSPICIOUS_DOMAIN_GTI_VERDICT_UNSPECIFIED';
  /**
   * Verdict is clean; the entity is considered harmless.
   */
  public const VERDICT_SUSPICIOUS_DOMAIN_GTI_VERDICT_BENIGN = 'SUSPICIOUS_DOMAIN_GTI_VERDICT_BENIGN';
  /**
   * Verdict is undetected; no immediate evidence of malicious intent.
   */
  public const VERDICT_SUSPICIOUS_DOMAIN_GTI_VERDICT_UNDETECTED = 'SUSPICIOUS_DOMAIN_GTI_VERDICT_UNDETECTED';
  /**
   * Verdict is suspicious; possible malicious activity detected.
   */
  public const VERDICT_SUSPICIOUS_DOMAIN_GTI_VERDICT_SUSPICIOUS = 'SUSPICIOUS_DOMAIN_GTI_VERDICT_SUSPICIOUS';
  /**
   * Verdict is malicious; high confidence that the entity poses a threat.
   */
  public const VERDICT_SUSPICIOUS_DOMAIN_GTI_VERDICT_MALICIOUS = 'SUSPICIOUS_DOMAIN_GTI_VERDICT_MALICIOUS';
  /**
   * Verdict is not applicable; not able to generate a verdict for this entity.
   */
  public const VERDICT_SUSPICIOUS_DOMAIN_GTI_VERDICT_UNKNOWN = 'SUSPICIOUS_DOMAIN_GTI_VERDICT_UNKNOWN';
  /**
   * The threat score of the suspicious domain. The threat score is a number
   * between 0 and 100.
   *
   * @var int
   */
  public $threatScore;
  /**
   * Output only. The verdict of the suspicious domain.
   *
   * @var string
   */
  public $verdict;
  /**
   * VirusTotal link for the domain
   *
   * @var string
   */
  public $virustotalUri;

  /**
   * The threat score of the suspicious domain. The threat score is a number
   * between 0 and 100.
   *
   * @param int $threatScore
   */
  public function setThreatScore($threatScore)
  {
    $this->threatScore = $threatScore;
  }
  /**
   * @return int
   */
  public function getThreatScore()
  {
    return $this->threatScore;
  }
  /**
   * Output only. The verdict of the suspicious domain.
   *
   * Accepted values: SUSPICIOUS_DOMAIN_GTI_VERDICT_UNSPECIFIED,
   * SUSPICIOUS_DOMAIN_GTI_VERDICT_BENIGN,
   * SUSPICIOUS_DOMAIN_GTI_VERDICT_UNDETECTED,
   * SUSPICIOUS_DOMAIN_GTI_VERDICT_SUSPICIOUS,
   * SUSPICIOUS_DOMAIN_GTI_VERDICT_MALICIOUS,
   * SUSPICIOUS_DOMAIN_GTI_VERDICT_UNKNOWN
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
  /**
   * VirusTotal link for the domain
   *
   * @param string $virustotalUri
   */
  public function setVirustotalUri($virustotalUri)
  {
    $this->virustotalUri = $virustotalUri;
  }
  /**
   * @return string
   */
  public function getVirustotalUri()
  {
    return $this->virustotalUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuspiciousDomainGtiDetails::class, 'Google_Service_ThreatIntelligenceService_SuspiciousDomainGtiDetails');
