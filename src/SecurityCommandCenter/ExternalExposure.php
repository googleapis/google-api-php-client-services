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

namespace Google\Service\SecurityCommandCenter;

class ExternalExposure extends \Google\Model
{
  /**
   * The full resource name of load balancer backend service, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/backendServices/{name}".
   *
   * @var string
   */
  public $backendService;
  /**
   * The resource which is running the exposed service, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/zones/{zone}/instances/{instance}.”
   *
   * @var string
   */
  public $exposedEndpoint;
  /**
   * The name and version of the service, for example, "Jupyter Notebook
   * 6.14.0".
   *
   * @var string
   */
  public $exposedService;
  /**
   * The full resource name of the forwarding rule, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/forwardingRules/{forwarding-rule-name}".
   *
   * @var string
   */
  public $forwardingRule;
  /**
   * The full resource name of the instance group, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/instanceGroups/{name}".
   *
   * @var string
   */
  public $instanceGroup;
  /**
   * The full resource name of the load balancer firewall policy, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/firewallPolicies/{policy-name}".
   *
   * @var string
   */
  public $loadBalancerFirewallPolicy;
  /**
   * The full resource name of the network endpoint group, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/networkEndpointGroups/{name}".
   *
   * @var string
   */
  public $networkEndpointGroup;
  /**
   * Private IP address of the exposed endpoint.
   *
   * @var string
   */
  public $privateIpAddress;
  /**
   * Port number associated with private IP address.
   *
   * @var string
   */
  public $privatePort;
  /**
   * Public IP address of the exposed endpoint.
   *
   * @var string
   */
  public $publicIpAddress;
  /**
   * Public port number of the exposed endpoint.
   *
   * @var string
   */
  public $publicPort;
  /**
   * The full resource name of the firewall policy of the exposed service, for
   * example, "//compute.googleapis.com/projects/{project-
   * id}/global/firewallPolicies/{policy-name}".
   *
   * @var string
   */
  public $serviceFirewallPolicy;

  /**
   * The full resource name of load balancer backend service, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/backendServices/{name}".
   *
   * @param string $backendService
   */
  public function setBackendService($backendService)
  {
    $this->backendService = $backendService;
  }
  /**
   * @return string
   */
  public function getBackendService()
  {
    return $this->backendService;
  }
  /**
   * The resource which is running the exposed service, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/zones/{zone}/instances/{instance}.”
   *
   * @param string $exposedEndpoint
   */
  public function setExposedEndpoint($exposedEndpoint)
  {
    $this->exposedEndpoint = $exposedEndpoint;
  }
  /**
   * @return string
   */
  public function getExposedEndpoint()
  {
    return $this->exposedEndpoint;
  }
  /**
   * The name and version of the service, for example, "Jupyter Notebook
   * 6.14.0".
   *
   * @param string $exposedService
   */
  public function setExposedService($exposedService)
  {
    $this->exposedService = $exposedService;
  }
  /**
   * @return string
   */
  public function getExposedService()
  {
    return $this->exposedService;
  }
  /**
   * The full resource name of the forwarding rule, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/forwardingRules/{forwarding-rule-name}".
   *
   * @param string $forwardingRule
   */
  public function setForwardingRule($forwardingRule)
  {
    $this->forwardingRule = $forwardingRule;
  }
  /**
   * @return string
   */
  public function getForwardingRule()
  {
    return $this->forwardingRule;
  }
  /**
   * The full resource name of the instance group, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/instanceGroups/{name}".
   *
   * @param string $instanceGroup
   */
  public function setInstanceGroup($instanceGroup)
  {
    $this->instanceGroup = $instanceGroup;
  }
  /**
   * @return string
   */
  public function getInstanceGroup()
  {
    return $this->instanceGroup;
  }
  /**
   * The full resource name of the load balancer firewall policy, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/firewallPolicies/{policy-name}".
   *
   * @param string $loadBalancerFirewallPolicy
   */
  public function setLoadBalancerFirewallPolicy($loadBalancerFirewallPolicy)
  {
    $this->loadBalancerFirewallPolicy = $loadBalancerFirewallPolicy;
  }
  /**
   * @return string
   */
  public function getLoadBalancerFirewallPolicy()
  {
    return $this->loadBalancerFirewallPolicy;
  }
  /**
   * The full resource name of the network endpoint group, for example,
   * "//compute.googleapis.com/projects/{project-
   * id}/global/networkEndpointGroups/{name}".
   *
   * @param string $networkEndpointGroup
   */
  public function setNetworkEndpointGroup($networkEndpointGroup)
  {
    $this->networkEndpointGroup = $networkEndpointGroup;
  }
  /**
   * @return string
   */
  public function getNetworkEndpointGroup()
  {
    return $this->networkEndpointGroup;
  }
  /**
   * Private IP address of the exposed endpoint.
   *
   * @param string $privateIpAddress
   */
  public function setPrivateIpAddress($privateIpAddress)
  {
    $this->privateIpAddress = $privateIpAddress;
  }
  /**
   * @return string
   */
  public function getPrivateIpAddress()
  {
    return $this->privateIpAddress;
  }
  /**
   * Port number associated with private IP address.
   *
   * @param string $privatePort
   */
  public function setPrivatePort($privatePort)
  {
    $this->privatePort = $privatePort;
  }
  /**
   * @return string
   */
  public function getPrivatePort()
  {
    return $this->privatePort;
  }
  /**
   * Public IP address of the exposed endpoint.
   *
   * @param string $publicIpAddress
   */
  public function setPublicIpAddress($publicIpAddress)
  {
    $this->publicIpAddress = $publicIpAddress;
  }
  /**
   * @return string
   */
  public function getPublicIpAddress()
  {
    return $this->publicIpAddress;
  }
  /**
   * Public port number of the exposed endpoint.
   *
   * @param string $publicPort
   */
  public function setPublicPort($publicPort)
  {
    $this->publicPort = $publicPort;
  }
  /**
   * @return string
   */
  public function getPublicPort()
  {
    return $this->publicPort;
  }
  /**
   * The full resource name of the firewall policy of the exposed service, for
   * example, "//compute.googleapis.com/projects/{project-
   * id}/global/firewallPolicies/{policy-name}".
   *
   * @param string $serviceFirewallPolicy
   */
  public function setServiceFirewallPolicy($serviceFirewallPolicy)
  {
    $this->serviceFirewallPolicy = $serviceFirewallPolicy;
  }
  /**
   * @return string
   */
  public function getServiceFirewallPolicy()
  {
    return $this->serviceFirewallPolicy;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExternalExposure::class, 'Google_Service_SecurityCommandCenter_ExternalExposure');
