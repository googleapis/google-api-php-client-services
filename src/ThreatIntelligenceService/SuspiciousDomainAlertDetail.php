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

class SuspiciousDomainAlertDetail extends \Google\Model
{
  /**
   * Unspecified status.
   */
  public const WEB_RISK_STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_UNSPECIFIED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_UNSPECIFIED';
  /**
   * Issue has not been submitted to WebRisk.
   */
  public const WEB_RISK_STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_NOT_SUBMITTED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_NOT_SUBMITTED';
  /**
   * Issue has been submitted to WebRisk.
   */
  public const WEB_RISK_STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_SUBMITTED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_SUBMITTED';
  /**
   * Issue has been submitted to WebRisk and is being processed.
   */
  public const WEB_RISK_STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_PROCESSING = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_PROCESSING';
  /**
   * Issue has been processed by WebRisk and the domain was added to the
   * blocklist.
   */
  public const WEB_RISK_STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_ADDED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_ADDED';
  /**
   * Issue has been processed by WebRisk and was rejected.
   */
  public const WEB_RISK_STATE_SUSPICIOUS_DOMAIN_WEB_RISK_STATE_REJECTED = 'SUSPICIOUS_DOMAIN_WEB_RISK_STATE_REJECTED';
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
   * Output only. Name of Web Risk submission operation.
   *
   * @var string
   */
  public $webRiskOperation;
  /**
   * Output only. Status of the Web Risk submission.
   *
   * @var string
   */
  public $webRiskState;
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
   * Output only. Name of Web Risk submission operation.
   *
   * @param string $webRiskOperation
   */
  public function setWebRiskOperation($webRiskOperation)
  {
    $this->webRiskOperation = $webRiskOperation;
  }
  /**
   * @return string
   */
  public function getWebRiskOperation()
  {
    return $this->webRiskOperation;
  }
  /**
   * Output only. Status of the Web Risk submission.
   *
   * Accepted values: SUSPICIOUS_DOMAIN_WEB_RISK_STATE_UNSPECIFIED,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_NOT_SUBMITTED,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_SUBMITTED,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_PROCESSING,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_ADDED,
   * SUSPICIOUS_DOMAIN_WEB_RISK_STATE_REJECTED
   *
   * @param self::WEB_RISK_STATE_* $webRiskState
   */
  public function setWebRiskState($webRiskState)
  {
    $this->webRiskState = $webRiskState;
  }
  /**
   * @return self::WEB_RISK_STATE_*
   */
  public function getWebRiskState()
  {
    return $this->webRiskState;
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
class_alias(SuspiciousDomainAlertDetail::class, 'Google_Service_ThreatIntelligenceService_SuspiciousDomainAlertDetail');
