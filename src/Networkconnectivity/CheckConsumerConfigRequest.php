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

namespace Google\Service\Networkconnectivity;

class CheckConsumerConfigRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $consumerNetwork;
  /**
   * @var string
   */
  public $endpointProject;
  /**
   * @var string
   */
  public $requestedIpVersion;
  /**
   * @var string
   */
  public $serviceClass;

  /**
   * @param string
   */
  public function setConsumerNetwork($consumerNetwork)
  {
    $this->consumerNetwork = $consumerNetwork;
  }
  /**
   * @return string
   */
  public function getConsumerNetwork()
  {
    return $this->consumerNetwork;
  }
  /**
   * @param string
   */
  public function setEndpointProject($endpointProject)
  {
    $this->endpointProject = $endpointProject;
  }
  /**
   * @return string
   */
  public function getEndpointProject()
  {
    return $this->endpointProject;
  }
  /**
   * @param string
   */
  public function setRequestedIpVersion($requestedIpVersion)
  {
    $this->requestedIpVersion = $requestedIpVersion;
  }
  /**
   * @return string
   */
  public function getRequestedIpVersion()
  {
    return $this->requestedIpVersion;
  }
  /**
   * @param string
   */
  public function setServiceClass($serviceClass)
  {
    $this->serviceClass = $serviceClass;
  }
  /**
   * @return string
   */
  public function getServiceClass()
  {
    return $this->serviceClass;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CheckConsumerConfigRequest::class, 'Google_Service_Networkconnectivity_CheckConsumerConfigRequest');
