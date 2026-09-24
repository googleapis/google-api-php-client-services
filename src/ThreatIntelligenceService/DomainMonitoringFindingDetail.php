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

class DomainMonitoringFindingDetail extends \Google\Model
{
  protected $dnsDetailsType = DomainMonitoringDnsDetails::class;
  protected $dnsDetailsDataType = '';
  protected $domainDetailsType = DomainMonitoringDomainDetails::class;
  protected $domainDetailsDataType = '';
  protected $gtiDetailsType = DomainMonitoringGtiDetails::class;
  protected $gtiDetailsDataType = '';
  protected $infrastructureType = Infrastructure::class;
  protected $infrastructureDataType = '';
  /**
   * Optional. The matched domain.
   *
   * @var string
   */
  public $matchedDomain;
  /**
   * The protected brand name that triggered the alert.
   *
   * @var string
   */
  public $protectedBrand;
  protected $protectedDomainType = DomainMonitoringDomainDetails::class;
  protected $protectedDomainDataType = '';
  protected $registrationDetailsType = DnsRegistrationDetails::class;
  protected $registrationDetailsDataType = '';
  protected $relationshipsType = Relationships::class;
  protected $relationshipsDataType = '';
  protected $threatAttributionDetailsType = ThreatAttributionDetails::class;
  protected $threatAttributionDetailsDataType = '';
  protected $urlDetailsType = DomainMonitoringUrlDetails::class;
  protected $urlDetailsDataType = '';
  protected $whoisDetailsType = DomainMonitoringWhoIsDetails::class;
  protected $whoisDetailsDataType = '';

  /**
   * Optional. The DNS details of the domain or URL.
   *
   * @param DomainMonitoringDnsDetails $dnsDetails
   */
  public function setDnsDetails(DomainMonitoringDnsDetails $dnsDetails)
  {
    $this->dnsDetails = $dnsDetails;
  }
  /**
   * @return DomainMonitoringDnsDetails
   */
  public function getDnsDetails()
  {
    return $this->dnsDetails;
  }
  /**
   * Details specific to a monitored domain.
   *
   * @param DomainMonitoringDomainDetails $domainDetails
   */
  public function setDomainDetails(DomainMonitoringDomainDetails $domainDetails)
  {
    $this->domainDetails = $domainDetails;
  }
  /**
   * @return DomainMonitoringDomainDetails
   */
  public function getDomainDetails()
  {
    return $this->domainDetails;
  }
  /**
   * Optional. The GTI details of the domain or URL.
   *
   * @param DomainMonitoringGtiDetails $gtiDetails
   */
  public function setGtiDetails(DomainMonitoringGtiDetails $gtiDetails)
  {
    $this->gtiDetails = $gtiDetails;
  }
  /**
   * @return DomainMonitoringGtiDetails
   */
  public function getGtiDetails()
  {
    return $this->gtiDetails;
  }
  /**
   * Optional. The infrastructure of the domain or URL.
   *
   * @param Infrastructure $infrastructure
   */
  public function setInfrastructure(Infrastructure $infrastructure)
  {
    $this->infrastructure = $infrastructure;
  }
  /**
   * @return Infrastructure
   */
  public function getInfrastructure()
  {
    return $this->infrastructure;
  }
  /**
   * Optional. The matched domain.
   *
   * @param string $matchedDomain
   */
  public function setMatchedDomain($matchedDomain)
  {
    $this->matchedDomain = $matchedDomain;
  }
  /**
   * @return string
   */
  public function getMatchedDomain()
  {
    return $this->matchedDomain;
  }
  /**
   * The protected brand name that triggered the alert.
   *
   * @param string $protectedBrand
   */
  public function setProtectedBrand($protectedBrand)
  {
    $this->protectedBrand = $protectedBrand;
  }
  /**
   * @return string
   */
  public function getProtectedBrand()
  {
    return $this->protectedBrand;
  }
  /**
   * The protected domain that triggered the alert.
   *
   * @param DomainMonitoringDomainDetails $protectedDomain
   */
  public function setProtectedDomain(DomainMonitoringDomainDetails $protectedDomain)
  {
    $this->protectedDomain = $protectedDomain;
  }
  /**
   * @return DomainMonitoringDomainDetails
   */
  public function getProtectedDomain()
  {
    return $this->protectedDomain;
  }
  /**
   * Optional. Extracted WHOIS and DNS registration details.
   *
   * @param DnsRegistrationDetails $registrationDetails
   */
  public function setRegistrationDetails(DnsRegistrationDetails $registrationDetails)
  {
    $this->registrationDetails = $registrationDetails;
  }
  /**
   * @return DnsRegistrationDetails
   */
  public function getRegistrationDetails()
  {
    return $this->registrationDetails;
  }
  /**
   * Optional. The relationships of the domain or URL.
   *
   * @param Relationships $relationships
   */
  public function setRelationships(Relationships $relationships)
  {
    $this->relationships = $relationships;
  }
  /**
   * @return Relationships
   */
  public function getRelationships()
  {
    return $this->relationships;
  }
  /**
   * Optional. The threat attribution details of the domain or URL.
   *
   * @param ThreatAttributionDetails $threatAttributionDetails
   */
  public function setThreatAttributionDetails(ThreatAttributionDetails $threatAttributionDetails)
  {
    $this->threatAttributionDetails = $threatAttributionDetails;
  }
  /**
   * @return ThreatAttributionDetails
   */
  public function getThreatAttributionDetails()
  {
    return $this->threatAttributionDetails;
  }
  /**
   * Details specific to a monitored URL.
   *
   * @param DomainMonitoringUrlDetails $urlDetails
   */
  public function setUrlDetails(DomainMonitoringUrlDetails $urlDetails)
  {
    $this->urlDetails = $urlDetails;
  }
  /**
   * @return DomainMonitoringUrlDetails
   */
  public function getUrlDetails()
  {
    return $this->urlDetails;
  }
  /**
   * Optional. The whois details of the domain or URL.
   *
   * @param DomainMonitoringWhoIsDetails $whoisDetails
   */
  public function setWhoisDetails(DomainMonitoringWhoIsDetails $whoisDetails)
  {
    $this->whoisDetails = $whoisDetails;
  }
  /**
   * @return DomainMonitoringWhoIsDetails
   */
  public function getWhoisDetails()
  {
    return $this->whoisDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DomainMonitoringFindingDetail::class, 'Google_Service_ThreatIntelligenceService_DomainMonitoringFindingDetail');
