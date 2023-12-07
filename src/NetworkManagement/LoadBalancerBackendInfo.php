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

namespace Google\Service\NetworkManagement;

class LoadBalancerBackendInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $backendDisplayName;
  /**
   * @var string
   */
  public $backendServiceUri;
  /**
   * @var string
   */
  public $healthCheckConfigState;
  /**
   * @var string
   */
  public $healthCheckUri;
  /**
   * @var string
   */
  public $instanceGroupUri;
  /**
   * @var string
   */
  public $instanceUri;
  /**
   * @var string
   */
  public $networkEndpointGroupUri;

  /**
   * @param string
   */
  public function setBackendDisplayName($backendDisplayName)
  {
    $this->backendDisplayName = $backendDisplayName;
  }
  /**
   * @return string
   */
  public function getBackendDisplayName()
  {
    return $this->backendDisplayName;
  }
  /**
   * @param string
   */
  public function setBackendServiceUri($backendServiceUri)
  {
    $this->backendServiceUri = $backendServiceUri;
  }
  /**
   * @return string
   */
  public function getBackendServiceUri()
  {
    return $this->backendServiceUri;
  }
  /**
   * @param string
   */
  public function setHealthCheckConfigState($healthCheckConfigState)
  {
    $this->healthCheckConfigState = $healthCheckConfigState;
  }
  /**
   * @return string
   */
  public function getHealthCheckConfigState()
  {
    return $this->healthCheckConfigState;
  }
  /**
   * @param string
   */
  public function setHealthCheckUri($healthCheckUri)
  {
    $this->healthCheckUri = $healthCheckUri;
  }
  /**
   * @return string
   */
  public function getHealthCheckUri()
  {
    return $this->healthCheckUri;
  }
  /**
   * @param string
   */
  public function setInstanceGroupUri($instanceGroupUri)
  {
    $this->instanceGroupUri = $instanceGroupUri;
  }
  /**
   * @return string
   */
  public function getInstanceGroupUri()
  {
    return $this->instanceGroupUri;
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
   * @param string
   */
  public function setNetworkEndpointGroupUri($networkEndpointGroupUri)
  {
    $this->networkEndpointGroupUri = $networkEndpointGroupUri;
  }
  /**
   * @return string
   */
  public function getNetworkEndpointGroupUri()
  {
    return $this->networkEndpointGroupUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LoadBalancerBackendInfo::class, 'Google_Service_NetworkManagement_LoadBalancerBackendInfo');
