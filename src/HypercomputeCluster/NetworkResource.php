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

class NetworkResource extends \Google\Model
{
  protected $configType = NetworkResourceConfig::class;
  protected $configDataType = '';
  protected $networkType = NetworkReference::class;
  protected $networkDataType = '';

  /**
   * Immutable. Configuration for this network resource, which describes how it
   * should be created or imported. This field only controls how the network
   * resource is initially created or imported. Subsequent changes to the
   * network resource should be made via the resource's API and will not be
   * reflected in the configuration.
   *
   * @param NetworkResourceConfig $config
   */
  public function setConfig(NetworkResourceConfig $config)
  {
    $this->config = $config;
  }
  /**
   * @return NetworkResourceConfig
   */
  public function getConfig()
  {
    return $this->config;
  }
  /**
   * Reference to a network in Google Compute Engine.
   *
   * @param NetworkReference $network
   */
  public function setNetwork(NetworkReference $network)
  {
    $this->network = $network;
  }
  /**
   * @return NetworkReference
   */
  public function getNetwork()
  {
    return $this->network;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkResource::class, 'Google_Service_HypercomputeCluster_NetworkResource');
