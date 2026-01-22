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

namespace Google\Service\HypercomputeCluster;

class NetworkReference extends \Google\Model
{
  /**
   * Output only. Name of the network, in the format
   * `projects/{project}/global/networks/{network}`.
   *
   * @var string
   */
  public $network;
  /**
   * Output only. Name of the particular subnetwork being used by the cluster,
   * in the format
   * `projects/{project}/regions/{region}/subnetworks/{subnetwork}`.
   *
   * @var string
   */
  public $subnetwork;

  /**
   * Output only. Name of the network, in the format
   * `projects/{project}/global/networks/{network}`.
   *
   * @param string $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Output only. Name of the particular subnetwork being used by the cluster,
   * in the format
   * `projects/{project}/regions/{region}/subnetworks/{subnetwork}`.
   *
   * @param string $subnetwork
   */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /**
   * @return string
   */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkReference::class, 'Google_Service_HypercomputeCluster_NetworkReference');
