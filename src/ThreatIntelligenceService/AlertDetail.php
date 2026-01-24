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

class AlertDetail extends \Google\Model
{
  protected $dataLeakType = DataLeakAlertDetail::class;
  protected $dataLeakDataType = '';
  /**
   * Output only. Name of the detail type. Will be set by the server during
   * creation to the name of the field that is set in the detail union.
   *
   * @var string
   */
  public $detailType;
  protected $initialAccessBrokerType = InitialAccessBrokerAlertDetail::class;
  protected $initialAccessBrokerDataType = '';
  protected $insiderThreatType = InsiderThreatAlertDetail::class;
  protected $insiderThreatDataType = '';
  protected $suspiciousDomainType = SuspiciousDomainAlertDetail::class;
  protected $suspiciousDomainDataType = '';
  protected $targetTechnologyType = TargetTechnologyAlertDetail::class;
  protected $targetTechnologyDataType = '';

  /**
   * Data Leak alert detail type.
   *
   * @param DataLeakAlertDetail $dataLeak
   */
  public function setDataLeak(DataLeakAlertDetail $dataLeak)
  {
    $this->dataLeak = $dataLeak;
  }
  /**
   * @return DataLeakAlertDetail
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
   * Initial Access Broker alert detail type.
   *
   * @param InitialAccessBrokerAlertDetail $initialAccessBroker
   */
  public function setInitialAccessBroker(InitialAccessBrokerAlertDetail $initialAccessBroker)
  {
    $this->initialAccessBroker = $initialAccessBroker;
  }
  /**
   * @return InitialAccessBrokerAlertDetail
   */
  public function getInitialAccessBroker()
  {
    return $this->initialAccessBroker;
  }
  /**
   * Insider Threat alert detail type.
   *
   * @param InsiderThreatAlertDetail $insiderThreat
   */
  public function setInsiderThreat(InsiderThreatAlertDetail $insiderThreat)
  {
    $this->insiderThreat = $insiderThreat;
  }
  /**
   * @return InsiderThreatAlertDetail
   */
  public function getInsiderThreat()
  {
    return $this->insiderThreat;
  }
  /**
   * Domain Monitoring alert detail type.
   *
   * @param SuspiciousDomainAlertDetail $suspiciousDomain
   */
  public function setSuspiciousDomain(SuspiciousDomainAlertDetail $suspiciousDomain)
  {
    $this->suspiciousDomain = $suspiciousDomain;
  }
  /**
   * @return SuspiciousDomainAlertDetail
   */
  public function getSuspiciousDomain()
  {
    return $this->suspiciousDomain;
  }
  /**
   * Technology Watchlist alert detail type.
   *
   * @param TargetTechnologyAlertDetail $targetTechnology
   */
  public function setTargetTechnology(TargetTechnologyAlertDetail $targetTechnology)
  {
    $this->targetTechnology = $targetTechnology;
  }
  /**
   * @return TargetTechnologyAlertDetail
   */
  public function getTargetTechnology()
  {
    return $this->targetTechnology;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlertDetail::class, 'Google_Service_ThreatIntelligenceService_AlertDetail');
