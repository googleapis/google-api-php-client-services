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

class Configuration extends \Google\Model
{
  /**
   * Configuration state is unspecified. This is not expected to occur.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Configuration is enabled for the customer.
   */
  public const STATE_ENABLED = 'ENABLED';
  /**
   * Configuration is disabled for the customer.
   */
  public const STATE_DISABLED = 'DISABLED';
  /**
   * Configuration is deprecated, no new configs are allowed to be created.
   */
  public const STATE_DEPRECATED = 'DEPRECATED';
  protected $auditType = Audit::class;
  protected $auditDataType = '';
  /**
   * Optional. A description of the configuration.
   *
   * @var string
   */
  public $description;
  protected $detailType = ConfigurationDetail::class;
  protected $detailDataType = '';
  /**
   * Output only. Human readable name for the configuration.
   *
   * @var string
   */
  public $displayName;
  /**
   * Identifier. Server generated name for the configuration. format is
   * vaults/{vault}/configurations/{configuration}
   *
   * @var string
   */
  public $name;
  /**
   * Required. Name of the service that provides the configuration.
   *
   * @var string
   */
  public $provider;
  /**
   * Optional. State of the configuration.
   *
   * @var string
   */
  public $state;
  /**
   * Optional. A user-manipulatable version. Does not adhere to a specific
   * format
   *
   * @var string
   */
  public $version;

  /**
   * Output only. Audit information for the configuration.
   *
   * @param Audit $audit
   */
  public function setAudit(Audit $audit)
  {
    $this->audit = $audit;
  }
  /**
   * @return Audit
   */
  public function getAudit()
  {
    return $this->audit;
  }
  /**
   * Optional. A description of the configuration.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. Domain specific details for the configuration.
   *
   * @param ConfigurationDetail $detail
   */
  public function setDetail(ConfigurationDetail $detail)
  {
    $this->detail = $detail;
  }
  /**
   * @return ConfigurationDetail
   */
  public function getDetail()
  {
    return $this->detail;
  }
  /**
   * Output only. Human readable name for the configuration.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Identifier. Server generated name for the configuration. format is
   * vaults/{vault}/configurations/{configuration}
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Required. Name of the service that provides the configuration.
   *
   * @param string $provider
   */
  public function setProvider($provider)
  {
    $this->provider = $provider;
  }
  /**
   * @return string
   */
  public function getProvider()
  {
    return $this->provider;
  }
  /**
   * Optional. State of the configuration.
   *
   * Accepted values: STATE_UNSPECIFIED, ENABLED, DISABLED, DEPRECATED
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
  /**
   * Optional. A user-manipulatable version. Does not adhere to a specific
   * format
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Configuration::class, 'Google_Service_ThreatIntelligenceService_Configuration');
