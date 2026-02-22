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
  protected $dataLeakType = DataLeakFindingDetail::class;
  protected $dataLeakDataType = '';
  /**
   * Output only. Name of the detail type. Will be set by the server during
   * creation to the name of the field that is set in the detail union.
   *
   * @var string
   */
  public $detailType;
  protected $initialAccessBrokerType = InitialAccessBrokerFindingDetail::class;
  protected $initialAccessBrokerDataType = '';
  protected $insiderThreatType = InsiderThreatFindingDetail::class;
  protected $insiderThreatDataType = '';

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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FindingDetail::class, 'Google_Service_ThreatIntelligenceService_FindingDetail');
