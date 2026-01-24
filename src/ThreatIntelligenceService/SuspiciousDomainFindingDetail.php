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

class SuspiciousDomainFindingDetail extends \Google\Model
{
  /**
   * Default value, should never be set.
   */
  public const SEVERITY_SEVERITY_UNSPECIFIED = 'SEVERITY_UNSPECIFIED';
  /**
   * Low severity.
   */
  public const SEVERITY_LOW = 'LOW';
  /**
   * Medium severity.
   */
  public const SEVERITY_MEDIUM = 'MEDIUM';
  /**
   * High severity.
   */
  public const SEVERITY_HIGH = 'HIGH';
  /**
   * Critical severity.
   */
  public const SEVERITY_CRITICAL = 'CRITICAL';
  protected $dnsType = SuspiciousDomainDnsDetails::class;
  protected $dnsDataType = '';
  /**
   * Required. The suspicious domain name.
   *
   * @var string
   */
  public $domain;
  protected $gtiDetailsType = SuspiciousDomainGtiDetails::class;
  protected $gtiDetailsDataType = '';
  /**
   * Required. Reference to the match score of the finding. This is a float
   * value between 0 and 1 calculated by the matching engine.
   *
   * @var float
   */
  public $matchScore;
  /**
   * Required. The severity of the finding. This indicates the potential impact
   * of the threat.
   *
   * @var string
   */
  public $severity;
  protected $whoisType = SuspiciousDomainWhoIsDetails::class;
  protected $whoisDataType = '';

  /**
   * The DNS details of the suspicious domain.
   *
   * @param SuspiciousDomainDnsDetails $dns
   */
  public function setDns(SuspiciousDomainDnsDetails $dns)
  {
    $this->dns = $dns;
  }
  /**
   * @return SuspiciousDomainDnsDetails
   */
  public function getDns()
  {
    return $this->dns;
  }
  /**
   * Required. The suspicious domain name.
   *
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * The GTI details of the suspicious domain.
   *
   * @param SuspiciousDomainGtiDetails $gtiDetails
   */
  public function setGtiDetails(SuspiciousDomainGtiDetails $gtiDetails)
  {
    $this->gtiDetails = $gtiDetails;
  }
  /**
   * @return SuspiciousDomainGtiDetails
   */
  public function getGtiDetails()
  {
    return $this->gtiDetails;
  }
  /**
   * Required. Reference to the match score of the finding. This is a float
   * value between 0 and 1 calculated by the matching engine.
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
   * Required. The severity of the finding. This indicates the potential impact
   * of the threat.
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
  /**
   * The whois details of the suspicious domain.
   *
   * @param SuspiciousDomainWhoIsDetails $whois
   */
  public function setWhois(SuspiciousDomainWhoIsDetails $whois)
  {
    $this->whois = $whois;
  }
  /**
   * @return SuspiciousDomainWhoIsDetails
   */
  public function getWhois()
  {
    return $this->whois;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SuspiciousDomainFindingDetail::class, 'Google_Service_ThreatIntelligenceService_SuspiciousDomainFindingDetail');
