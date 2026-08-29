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

class DomainSetting extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Verification is pending. The customer needs to add the TXT record.
   */
  public const STATE_PENDING = 'PENDING';
  /**
   * Verification succeeded.
   */
  public const STATE_VERIFIED = 'VERIFIED';
  /**
   * Required. The domain name to match against.
   *
   * @var string
   */
  public $domain;
  protected $domainMonitoringConfigType = DomainMonitoringFeatureConfig::class;
  protected $domainMonitoringConfigDataType = '';
  /**
   * Output only. The verification state of the domain.
   *
   * @var string
   */
  public $state;

  /**
   * Required. The domain name to match against.
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
   * Optional. If not present, Domain Monitoring is enabled.
   *
   * @param DomainMonitoringFeatureConfig $domainMonitoringConfig
   */
  public function setDomainMonitoringConfig(DomainMonitoringFeatureConfig $domainMonitoringConfig)
  {
    $this->domainMonitoringConfig = $domainMonitoringConfig;
  }
  /**
   * @return DomainMonitoringFeatureConfig
   */
  public function getDomainMonitoringConfig()
  {
    return $this->domainMonitoringConfig;
  }
  /**
   * Output only. The verification state of the domain.
   *
   * Accepted values: STATE_UNSPECIFIED, PENDING, VERIFIED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DomainSetting::class, 'Google_Service_ThreatIntelligenceService_DomainSetting');
