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

class DomainMonitoringDnsDetails extends \Google\Collection
{
  protected $collection_key = 'dnsRecords';
  protected $dnsRecordsType = DomainMonitoringDnsRecord::class;
  protected $dnsRecordsDataType = 'array';
  /**
   * Optional. The time the DNS details were retrieved.
   *
   * @var string
   */
  public $retrievalTime;

  /**
   * Optional. The DNS records of the domain.
   *
   * @param DomainMonitoringDnsRecord[] $dnsRecords
   */
  public function setDnsRecords($dnsRecords)
  {
    $this->dnsRecords = $dnsRecords;
  }
  /**
   * @return DomainMonitoringDnsRecord[]
   */
  public function getDnsRecords()
  {
    return $this->dnsRecords;
  }
  /**
   * Optional. The time the DNS details were retrieved.
   *
   * @param string $retrievalTime
   */
  public function setRetrievalTime($retrievalTime)
  {
    $this->retrievalTime = $retrievalTime;
  }
  /**
   * @return string
   */
  public function getRetrievalTime()
  {
    return $this->retrievalTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DomainMonitoringDnsDetails::class, 'Google_Service_ThreatIntelligenceService_DomainMonitoringDnsDetails');
