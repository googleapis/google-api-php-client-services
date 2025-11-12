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

class AgentStates extends \Google\Model
{
  /**
   * @var string
   */
  public $availableVersion;
  protected $hanaMonitoringType = ServiceStates::class;
  protected $hanaMonitoringDataType = '';
  /**
   * @var string
   */
  public $installedVersion;
  /**
   * @var bool
   */
  public $isFullyEnabled;
  protected $processMetricsType = ServiceStates::class;
  protected $processMetricsDataType = '';
  protected $systemDiscoveryType = ServiceStates::class;
  protected $systemDiscoveryDataType = '';

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
   * @param ServiceStates
   */
  public function setHanaMonitoring(ServiceStates $hanaMonitoring)
  {
    $this->hanaMonitoring = $hanaMonitoring;
  }
  /**
   * @return ServiceStates
   */
  public function getHanaMonitoring()
  {
    return $this->hanaMonitoring;
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
   * @param bool
   */
  public function setIsFullyEnabled($isFullyEnabled)
  {
    $this->isFullyEnabled = $isFullyEnabled;
  }
  /**
   * @return bool
   */
  public function getIsFullyEnabled()
  {
    return $this->isFullyEnabled;
  }
  /**
   * @param ServiceStates
   */
  public function setProcessMetrics(ServiceStates $processMetrics)
  {
    $this->processMetrics = $processMetrics;
  }
  /**
   * @return ServiceStates
   */
  public function getProcessMetrics()
  {
    return $this->processMetrics;
  }
  /**
   * @param ServiceStates
   */
  public function setSystemDiscovery(ServiceStates $systemDiscovery)
  {
    $this->systemDiscovery = $systemDiscovery;
  }
  /**
   * @return ServiceStates
   */
  public function getSystemDiscovery()
  {
    return $this->systemDiscovery;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentStates::class, 'Google_Service_WorkloadManager_AgentStates');
