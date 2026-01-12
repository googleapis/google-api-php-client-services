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

class GkePodInfo extends \Google\Model
{
  /**
   * IP address of a GKE Pod. If the Pod is dual-stack, this is the IP address
   * relevant to the trace.
   *
   * @var string
   */
  public $ipAddress;
  /**
   * URI of the network containing the GKE Pod.
   *
   * @var string
   */
  public $networkUri;
  /**
   * URI of a GKE Pod. For Pods in regional Clusters, the URI format is: `projec
   * ts/{project}/locations/{location}/clusters/{cluster}/k8s/namespaces/{namesp
   * ace}/pods/{pod}` For Pods in zonal Clusters, the URI format is: `projects/{
   * project}/zones/{zone}/clusters/{cluster}/k8s/namespaces/{namespace}/pods/{p
   * od}`
   *
   * @var string
   */
  public $podUri;

  /**
   * IP address of a GKE Pod. If the Pod is dual-stack, this is the IP address
   * relevant to the trace.
   *
   * @param string $ipAddress
   */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /**
   * @return string
   */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /**
   * URI of the network containing the GKE Pod.
   *
   * @param string $networkUri
   */
  public function setNetworkUri($networkUri)
  {
    $this->networkUri = $networkUri;
  }
  /**
   * @return string
   */
  public function getNetworkUri()
  {
    return $this->networkUri;
  }
  /**
   * URI of a GKE Pod. For Pods in regional Clusters, the URI format is: `projec
   * ts/{project}/locations/{location}/clusters/{cluster}/k8s/namespaces/{namesp
   * ace}/pods/{pod}` For Pods in zonal Clusters, the URI format is: `projects/{
   * project}/zones/{zone}/clusters/{cluster}/k8s/namespaces/{namespace}/pods/{p
   * od}`
   *
   * @param string $podUri
   */
  public function setPodUri($podUri)
  {
    $this->podUri = $podUri;
  }
  /**
   * @return string
   */
  public function getPodUri()
  {
    return $this->podUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GkePodInfo::class, 'Google_Service_NetworkManagement_GkePodInfo');
