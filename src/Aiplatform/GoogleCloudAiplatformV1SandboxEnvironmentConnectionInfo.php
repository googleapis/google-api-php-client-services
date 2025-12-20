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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1SandboxEnvironmentConnectionInfo extends \Google\Model
{
  /**
   * Output only. The hostname of the load balancer.
   *
   * @var string
   */
  public $loadBalancerHostname;
  /**
   * Output only. The IP address of the load balancer.
   *
   * @var string
   */
  public $loadBalancerIp;
  /**
   * Output only. The internal IP address of the SandboxEnvironment.
   *
   * @var string
   */
  public $sandboxInternalIp;

  /**
   * Output only. The hostname of the load balancer.
   *
   * @param string $loadBalancerHostname
   */
  public function setLoadBalancerHostname($loadBalancerHostname)
  {
    $this->loadBalancerHostname = $loadBalancerHostname;
  }
  /**
   * @return string
   */
  public function getLoadBalancerHostname()
  {
    return $this->loadBalancerHostname;
  }
  /**
   * Output only. The IP address of the load balancer.
   *
   * @param string $loadBalancerIp
   */
  public function setLoadBalancerIp($loadBalancerIp)
  {
    $this->loadBalancerIp = $loadBalancerIp;
  }
  /**
   * @return string
   */
  public function getLoadBalancerIp()
  {
    return $this->loadBalancerIp;
  }
  /**
   * Output only. The internal IP address of the SandboxEnvironment.
   *
   * @param string $sandboxInternalIp
   */
  public function setSandboxInternalIp($sandboxInternalIp)
  {
    $this->sandboxInternalIp = $sandboxInternalIp;
  }
  /**
   * @return string
   */
  public function getSandboxInternalIp()
  {
    return $this->sandboxInternalIp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentConnectionInfo::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentConnectionInfo');
