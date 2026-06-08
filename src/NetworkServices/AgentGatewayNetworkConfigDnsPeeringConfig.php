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

namespace Google\Service\NetworkServices;

class AgentGatewayNetworkConfigDnsPeeringConfig extends \Google\Collection
{
  protected $collection_key = 'domains';
  /**
   * Required. Domain names for which DNS queries should be forwarded to the
   * target network.
   *
   * @var string[]
   */
  public $domains;
  /**
   * Required. Target network in 'target project' to which DNS queries should be
   * forwarded to. Must be in format of
   * `projects/{project}/global/networks/{network}`.
   *
   * @var string
   */
  public $targetNetwork;
  /**
   * Required. Target project ID to which DNS queries should be forwarded to.
   * This can be the same project that contains the AgentGateway or a different
   * project.
   *
   * @var string
   */
  public $targetProject;

  /**
   * Required. Domain names for which DNS queries should be forwarded to the
   * target network.
   *
   * @param string[] $domains
   */
  public function setDomains($domains)
  {
    $this->domains = $domains;
  }
  /**
   * @return string[]
   */
  public function getDomains()
  {
    return $this->domains;
  }
  /**
   * Required. Target network in 'target project' to which DNS queries should be
   * forwarded to. Must be in format of
   * `projects/{project}/global/networks/{network}`.
   *
   * @param string $targetNetwork
   */
  public function setTargetNetwork($targetNetwork)
  {
    $this->targetNetwork = $targetNetwork;
  }
  /**
   * @return string
   */
  public function getTargetNetwork()
  {
    return $this->targetNetwork;
  }
  /**
   * Required. Target project ID to which DNS queries should be forwarded to.
   * This can be the same project that contains the AgentGateway or a different
   * project.
   *
   * @param string $targetProject
   */
  public function setTargetProject($targetProject)
  {
    $this->targetProject = $targetProject;
  }
  /**
   * @return string
   */
  public function getTargetProject()
  {
    return $this->targetProject;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentGatewayNetworkConfigDnsPeeringConfig::class, 'Google_Service_NetworkServices_AgentGatewayNetworkConfigDnsPeeringConfig');
