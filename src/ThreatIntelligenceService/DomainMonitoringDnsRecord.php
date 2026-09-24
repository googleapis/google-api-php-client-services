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

class DomainMonitoringDnsRecord extends \Google\Model
{
  /**
   * Optional. The ASN hosting the domain.
   *
   * @var string
   */
  public $asnHosting;
  /**
   * Optional. The region code of the ASN. Use ISO 3166-1 alpha-2 codes.
   *
   * @var string
   */
  public $asnRegionCode;
  /**
   * Optional. The region code associated with the resolved IP. Use ISO 3166-1
   * alpha-2 codes.
   *
   * @var string
   */
  public $ipRegionCode;
  /**
   * Optional. The value of the DNS record.
   *
   * @var string
   */
  public $recordData;
  /**
   * Optional. The resolved IP address.
   *
   * @var string
   */
  public $resolvedIp;
  /**
   * Optional. The TTL of the DNS record.
   *
   * @var int
   */
  public $ttl;
  /**
   * Optional. The type of the DNS record.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. The ASN hosting the domain.
   *
   * @param string $asnHosting
   */
  public function setAsnHosting($asnHosting)
  {
    $this->asnHosting = $asnHosting;
  }
  /**
   * @return string
   */
  public function getAsnHosting()
  {
    return $this->asnHosting;
  }
  /**
   * Optional. The region code of the ASN. Use ISO 3166-1 alpha-2 codes.
   *
   * @param string $asnRegionCode
   */
  public function setAsnRegionCode($asnRegionCode)
  {
    $this->asnRegionCode = $asnRegionCode;
  }
  /**
   * @return string
   */
  public function getAsnRegionCode()
  {
    return $this->asnRegionCode;
  }
  /**
   * Optional. The region code associated with the resolved IP. Use ISO 3166-1
   * alpha-2 codes.
   *
   * @param string $ipRegionCode
   */
  public function setIpRegionCode($ipRegionCode)
  {
    $this->ipRegionCode = $ipRegionCode;
  }
  /**
   * @return string
   */
  public function getIpRegionCode()
  {
    return $this->ipRegionCode;
  }
  /**
   * Optional. The value of the DNS record.
   *
   * @param string $recordData
   */
  public function setRecordData($recordData)
  {
    $this->recordData = $recordData;
  }
  /**
   * @return string
   */
  public function getRecordData()
  {
    return $this->recordData;
  }
  /**
   * Optional. The resolved IP address.
   *
   * @param string $resolvedIp
   */
  public function setResolvedIp($resolvedIp)
  {
    $this->resolvedIp = $resolvedIp;
  }
  /**
   * @return string
   */
  public function getResolvedIp()
  {
    return $this->resolvedIp;
  }
  /**
   * Optional. The TTL of the DNS record.
   *
   * @param int $ttl
   */
  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }
  /**
   * @return int
   */
  public function getTtl()
  {
    return $this->ttl;
  }
  /**
   * Optional. The type of the DNS record.
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DomainMonitoringDnsRecord::class, 'Google_Service_ThreatIntelligenceService_DomainMonitoringDnsRecord');
