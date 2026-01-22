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

class NetworkResourceConfig extends \Google\Model
{
  protected $existingNetworkType = ExistingNetworkConfig::class;
  protected $existingNetworkDataType = '';
  protected $newNetworkType = NewNetworkConfig::class;
  protected $newNetworkDataType = '';

  /**
   * Optional. Immutable. If set, indicates that an existing network should be
   * imported.
   *
   * @param ExistingNetworkConfig $existingNetwork
   */
  public function setExistingNetwork(ExistingNetworkConfig $existingNetwork)
  {
    $this->existingNetwork = $existingNetwork;
  }
  /**
   * @return ExistingNetworkConfig
   */
  public function getExistingNetwork()
  {
    return $this->existingNetwork;
  }
  /**
   * Optional. Immutable. If set, indicates that a new network should be
   * created.
   *
   * @param NewNetworkConfig $newNetwork
   */
  public function setNewNetwork(NewNetworkConfig $newNetwork)
  {
    $this->newNetwork = $newNetwork;
  }
  /**
   * @return NewNetworkConfig
   */
  public function getNewNetwork()
  {
    return $this->newNetwork;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkResourceConfig::class, 'Google_Service_HypercomputeCluster_NetworkResourceConfig');
