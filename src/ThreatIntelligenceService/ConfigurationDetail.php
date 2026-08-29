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

class ConfigurationDetail extends \Google\Model
{
  protected $customThreatScenarioType = CustomThreatScenarioConfig::class;
  protected $customThreatScenarioDataType = '';
  protected $customerProfileType = CustomerProfileConfig::class;
  protected $customerProfileDataType = '';
  /**
   * Output only. Name of the detail type. Will be set by the server during
   * creation to the name of the field that is set in the detail union.
   *
   * @var string
   */
  public $detailType;
  protected $domainConfigurationType = DomainConfiguration::class;
  protected $domainConfigurationDataType = '';
  protected $technologyWatchlistType = TechnologyWatchListConfig::class;
  protected $technologyWatchlistDataType = '';

  /**
   * Custom Threat Scenario detail config.
   *
   * @param CustomThreatScenarioConfig $customThreatScenario
   */
  public function setCustomThreatScenario(CustomThreatScenarioConfig $customThreatScenario)
  {
    $this->customThreatScenario = $customThreatScenario;
  }
  /**
   * @return CustomThreatScenarioConfig
   */
  public function getCustomThreatScenario()
  {
    return $this->customThreatScenario;
  }
  /**
   * Customer Profile detail config.
   *
   * @param CustomerProfileConfig $customerProfile
   */
  public function setCustomerProfile(CustomerProfileConfig $customerProfile)
  {
    $this->customerProfile = $customerProfile;
  }
  /**
   * @return CustomerProfileConfig
   */
  public function getCustomerProfile()
  {
    return $this->customerProfile;
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
   * Domain Configuration detail config.
   *
   * @param DomainConfiguration $domainConfiguration
   */
  public function setDomainConfiguration(DomainConfiguration $domainConfiguration)
  {
    $this->domainConfiguration = $domainConfiguration;
  }
  /**
   * @return DomainConfiguration
   */
  public function getDomainConfiguration()
  {
    return $this->domainConfiguration;
  }
  /**
   * Technology Watchlist detail config.
   *
   * @param TechnologyWatchListConfig $technologyWatchlist
   */
  public function setTechnologyWatchlist(TechnologyWatchListConfig $technologyWatchlist)
  {
    $this->technologyWatchlist = $technologyWatchlist;
  }
  /**
   * @return TechnologyWatchListConfig
   */
  public function getTechnologyWatchlist()
  {
    return $this->technologyWatchlist;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConfigurationDetail::class, 'Google_Service_ThreatIntelligenceService_ConfigurationDetail');
