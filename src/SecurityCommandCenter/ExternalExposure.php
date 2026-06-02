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

class ExternalExposure extends \Google\Collection
{
  protected $collection_key = 'httpResponse';
  /**
   * @var string
   */
  public $backendBucket;
  /**
   * @var string
   */
  public $backendService;
  /**
   * @var string
   */
  public $exposedApplication;
  /**
   * @var string
   */
  public $exposedEndpoint;
  /**
   * @var string
   */
  public $exposedService;
  /**
   * @var string
   */
  public $forwardingRule;
  /**
   * @var string
   */
  public $hostnameUri;
  protected $httpResponseType = HttpResponse::class;
  protected $httpResponseDataType = 'array';
  /**
   * @var string
   */
  public $instanceGroup;
  /**
   * @var string
   */
  public $internalBackendService;
  /**
   * @var string
   */
  public $loadBalancerFirewallPolicy;
  /**
   * @var string
   */
  public $networkEndpointGroup;
  /**
   * @var string
   */
  public $networkIngressFirewallPolicy;
  /**
   * @var string
   */
  public $privateIpAddress;
  /**
   * @var string
   */
  public $privatePort;
  /**
   * @var string
   */
  public $pscNetworkAttachment;
  /**
   * @var string
   */
  public $pscServiceAttachment;
  /**
   * @var string
   */
  public $publicIpAddress;
  /**
   * @var string
   */
  public $publicPort;
  /**
   * @var string
   */
  public $serviceFirewallPolicy;

  /**
   * @param string $backendBucket
   */
  public function setBackendBucket($backendBucket)
  {
    $this->backendBucket = $backendBucket;
  }
  /**
   * @return string
   */
  public function getBackendBucket()
  {
    return $this->backendBucket;
  }
  /**
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
   * @param string $exposedApplication
   */
  public function setExposedApplication($exposedApplication)
  {
    $this->exposedApplication = $exposedApplication;
  }
  /**
   * @return string
   */
  public function getExposedApplication()
  {
    return $this->exposedApplication;
  }
  /**
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
   * @param string $hostnameUri
   */
  public function setHostnameUri($hostnameUri)
  {
    $this->hostnameUri = $hostnameUri;
  }
  /**
   * @return string
   */
  public function getHostnameUri()
  {
    return $this->hostnameUri;
  }
  /**
   * @param HttpResponse[] $httpResponse
   */
  public function setHttpResponse($httpResponse)
  {
    $this->httpResponse = $httpResponse;
  }
  /**
   * @return HttpResponse[]
   */
  public function getHttpResponse()
  {
    return $this->httpResponse;
  }
  /**
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
   * @param string $internalBackendService
   */
  public function setInternalBackendService($internalBackendService)
  {
    $this->internalBackendService = $internalBackendService;
  }
  /**
   * @return string
   */
  public function getInternalBackendService()
  {
    return $this->internalBackendService;
  }
  /**
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
   * @param string $networkIngressFirewallPolicy
   */
  public function setNetworkIngressFirewallPolicy($networkIngressFirewallPolicy)
  {
    $this->networkIngressFirewallPolicy = $networkIngressFirewallPolicy;
  }
  /**
   * @return string
   */
  public function getNetworkIngressFirewallPolicy()
  {
    return $this->networkIngressFirewallPolicy;
  }
  /**
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
   * @param string $pscNetworkAttachment
   */
  public function setPscNetworkAttachment($pscNetworkAttachment)
  {
    $this->pscNetworkAttachment = $pscNetworkAttachment;
  }
  /**
   * @return string
   */
  public function getPscNetworkAttachment()
  {
    return $this->pscNetworkAttachment;
  }
  /**
   * @param string $pscServiceAttachment
   */
  public function setPscServiceAttachment($pscServiceAttachment)
  {
    $this->pscServiceAttachment = $pscServiceAttachment;
  }
  /**
   * @return string
   */
  public function getPscServiceAttachment()
  {
    return $this->pscServiceAttachment;
  }
  /**
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
