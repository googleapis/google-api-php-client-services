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

class FindingDetail extends \Google\Model
{
  protected $compromisedCredentialsType = CompromisedCredentialsFindingDetail::class;
  protected $compromisedCredentialsDataType = '';
  protected $dataLeakType = DataLeakFindingDetail::class;
  protected $dataLeakDataType = '';
  /**
   * Output only. Name of the detail type. Will be set by the server during
   * creation to the name of the field that is set in the detail union.
   *
   * @var string
   */
  public $detailType;
  protected $inbandVulnerabilityType = InbandVulnerabilityFindingDetail::class;
  protected $inbandVulnerabilityDataType = '';
  protected $initialAccessBrokerType = InitialAccessBrokerFindingDetail::class;
  protected $initialAccessBrokerDataType = '';
  protected $insiderThreatType = InsiderThreatFindingDetail::class;
  protected $insiderThreatDataType = '';
  protected $misconfigurationType = MisconfigurationFindingDetail::class;
  protected $misconfigurationDataType = '';
  protected $suspiciousDomainType = SuspiciousDomainFindingDetail::class;
  protected $suspiciousDomainDataType = '';
  protected $targetTechnologyType = TargetTechnologyFindingDetail::class;
  protected $targetTechnologyDataType = '';

  /**
   * Compromised Credentials detail type.
   *
   * @param CompromisedCredentialsFindingDetail $compromisedCredentials
   */
  public function setCompromisedCredentials(CompromisedCredentialsFindingDetail $compromisedCredentials)
  {
    $this->compromisedCredentials = $compromisedCredentials;
  }
  /**
   * @return CompromisedCredentialsFindingDetail
   */
  public function getCompromisedCredentials()
  {
    return $this->compromisedCredentials;
  }
  /**
   * Data Leak finding detail type.
   *
   * @param DataLeakFindingDetail $dataLeak
   */
  public function setDataLeak(DataLeakFindingDetail $dataLeak)
  {
    $this->dataLeak = $dataLeak;
  }
  /**
   * @return DataLeakFindingDetail
   */
  public function getDataLeak()
  {
    return $this->dataLeak;
  }
  /**
   * Output only. Name of the detail type. Will be set by the server during
   * creation to the name of the field that is set in the detail union.
   *
   * @param string $detailType
   */
  public function setDetailType($detailType)
  {
    $this->detailType = $detailType;
  }
  /**
   * @return string
   */
  public function getDetailType()
  {
    return $this->detailType;
  }
  /**
   * Inband vulnerability detail type.
   *
   * @param InbandVulnerabilityFindingDetail $inbandVulnerability
   */
  public function setInbandVulnerability(InbandVulnerabilityFindingDetail $inbandVulnerability)
  {
    $this->inbandVulnerability = $inbandVulnerability;
  }
  /**
   * @return InbandVulnerabilityFindingDetail
   */
  public function getInbandVulnerability()
  {
    return $this->inbandVulnerability;
  }
  /**
   * Initial Access Broker finding detail type.
   *
   * @param InitialAccessBrokerFindingDetail $initialAccessBroker
   */
  public function setInitialAccessBroker(InitialAccessBrokerFindingDetail $initialAccessBroker)
  {
    $this->initialAccessBroker = $initialAccessBroker;
  }
  /**
   * @return InitialAccessBrokerFindingDetail
   */
  public function getInitialAccessBroker()
  {
    return $this->initialAccessBroker;
  }
  /**
   * Insider Threat finding detail type.
   *
   * @param InsiderThreatFindingDetail $insiderThreat
   */
  public function setInsiderThreat(InsiderThreatFindingDetail $insiderThreat)
  {
    $this->insiderThreat = $insiderThreat;
  }
  /**
   * @return InsiderThreatFindingDetail
   */
  public function getInsiderThreat()
  {
    return $this->insiderThreat;
  }
  /**
   * Misconfiguration finding detail type.
   *
   * @param MisconfigurationFindingDetail $misconfiguration
   */
  public function setMisconfiguration(MisconfigurationFindingDetail $misconfiguration)
  {
    $this->misconfiguration = $misconfiguration;
  }
  /**
   * @return MisconfigurationFindingDetail
   */
  public function getMisconfiguration()
  {
    return $this->misconfiguration;
  }
  /**
   * Domain Monitoring finding detail type.
   *
   * @param SuspiciousDomainFindingDetail $suspiciousDomain
   */
  public function setSuspiciousDomain(SuspiciousDomainFindingDetail $suspiciousDomain)
  {
    $this->suspiciousDomain = $suspiciousDomain;
  }
  /**
   * @return SuspiciousDomainFindingDetail
   */
  public function getSuspiciousDomain()
  {
    return $this->suspiciousDomain;
  }
  /**
   * Technology Watchlist finding detail type.
   *
   * @param TargetTechnologyFindingDetail $targetTechnology
   */
  public function setTargetTechnology(TargetTechnologyFindingDetail $targetTechnology)
  {
    $this->targetTechnology = $targetTechnology;
  }
  /**
   * @return TargetTechnologyFindingDetail
   */
  public function getTargetTechnology()
  {
    return $this->targetTechnology;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FindingDetail::class, 'Google_Service_ThreatIntelligenceService_FindingDetail');
