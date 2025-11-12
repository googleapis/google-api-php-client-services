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

namespace Google\Service\WorkloadManager;

class AgentStatus extends \Google\Collection
{
  protected $collection_key = 'services';
  /**
   * @var string
   */
  public $agentName;
  /**
   * @var string
   */
  public $availableVersion;
  /**
   * @var string
   */
  public $cloudApiAccessFullScopesGranted;
  /**
   * @var string
   */
  public $configurationErrorMessage;
  /**
   * @var string
   */
  public $configurationFilePath;
  /**
   * @var string
   */
  public $configurationValid;
  /**
   * @var string
   */
  public $installedVersion;
  /**
   * @var string
   */
  public $instanceUri;
  protected $kernelVersionType = SapDiscoveryResourceInstancePropertiesKernelVersion::class;
  protected $kernelVersionDataType = '';
  protected $referencesType = AgentStatusReference::class;
  protected $referencesDataType = 'array';
  protected $servicesType = AgentStatusServiceStatus::class;
  protected $servicesDataType = 'array';
  /**
   * @var string
   */
  public $systemdServiceEnabled;
  /**
   * @var string
   */
  public $systemdServiceRunning;

  /**
   * @param string
   */
  public function setAgentName($agentName)
  {
    $this->agentName = $agentName;
  }
  /**
   * @return string
   */
  public function getAgentName()
  {
    return $this->agentName;
  }
  /**
   * @param string
   */
  public function setAvailableVersion($availableVersion)
  {
    $this->availableVersion = $availableVersion;
  }
  /**
   * @return string
   */
  public function getAvailableVersion()
  {
    return $this->availableVersion;
  }
  /**
   * @param string
   */
  public function setCloudApiAccessFullScopesGranted($cloudApiAccessFullScopesGranted)
  {
    $this->cloudApiAccessFullScopesGranted = $cloudApiAccessFullScopesGranted;
  }
  /**
   * @return string
   */
  public function getCloudApiAccessFullScopesGranted()
  {
    return $this->cloudApiAccessFullScopesGranted;
  }
  /**
   * @param string
   */
  public function setConfigurationErrorMessage($configurationErrorMessage)
  {
    $this->configurationErrorMessage = $configurationErrorMessage;
  }
  /**
   * @return string
   */
  public function getConfigurationErrorMessage()
  {
    return $this->configurationErrorMessage;
  }
  /**
   * @param string
   */
  public function setConfigurationFilePath($configurationFilePath)
  {
    $this->configurationFilePath = $configurationFilePath;
  }
  /**
   * @return string
   */
  public function getConfigurationFilePath()
  {
    return $this->configurationFilePath;
  }
  /**
   * @param string
   */
  public function setConfigurationValid($configurationValid)
  {
    $this->configurationValid = $configurationValid;
  }
  /**
   * @return string
   */
  public function getConfigurationValid()
  {
    return $this->configurationValid;
  }
  /**
   * @param string
   */
  public function setInstalledVersion($installedVersion)
  {
    $this->installedVersion = $installedVersion;
  }
  /**
   * @return string
   */
  public function getInstalledVersion()
  {
    return $this->installedVersion;
  }
  /**
   * @param string
   */
  public function setInstanceUri($instanceUri)
  {
    $this->instanceUri = $instanceUri;
  }
  /**
   * @return string
   */
  public function getInstanceUri()
  {
    return $this->instanceUri;
  }
  /**
   * @param SapDiscoveryResourceInstancePropertiesKernelVersion
   */
  public function setKernelVersion(SapDiscoveryResourceInstancePropertiesKernelVersion $kernelVersion)
  {
    $this->kernelVersion = $kernelVersion;
  }
  /**
   * @return SapDiscoveryResourceInstancePropertiesKernelVersion
   */
  public function getKernelVersion()
  {
    return $this->kernelVersion;
  }
  /**
   * @param AgentStatusReference[]
   */
  public function setReferences($references)
  {
    $this->references = $references;
  }
  /**
   * @return AgentStatusReference[]
   */
  public function getReferences()
  {
    return $this->references;
  }
  /**
   * @param AgentStatusServiceStatus[]
   */
  public function setServices($services)
  {
    $this->services = $services;
  }
  /**
   * @return AgentStatusServiceStatus[]
   */
  public function getServices()
  {
    return $this->services;
  }
  /**
   * @param string
   */
  public function setSystemdServiceEnabled($systemdServiceEnabled)
  {
    $this->systemdServiceEnabled = $systemdServiceEnabled;
  }
  /**
   * @return string
   */
  public function getSystemdServiceEnabled()
  {
    return $this->systemdServiceEnabled;
  }
  /**
   * @param string
   */
  public function setSystemdServiceRunning($systemdServiceRunning)
  {
    $this->systemdServiceRunning = $systemdServiceRunning;
  }
  /**
   * @return string
   */
  public function getSystemdServiceRunning()
  {
    return $this->systemdServiceRunning;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentStatus::class, 'Google_Service_WorkloadManager_AgentStatus');
