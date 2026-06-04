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

namespace Google\Service\Compute;

class ResourceStatusPhysicalHostTopologyAdditionalAttributes extends \Google\Model
{
  /**
   * Output only. The IDs of the accelerator topologies the instance belongs to.
   * For example The key will be topologies like "4x4", "2x2x2" and the value
   * will be the location ID of the topologies.
   *
   * @var string[]
   */
  public $acceleratorTopologyIds;

  /**
   * Output only. The IDs of the accelerator topologies the instance belongs to.
   * For example The key will be topologies like "4x4", "2x2x2" and the value
   * will be the location ID of the topologies.
   *
   * @param string[] $acceleratorTopologyIds
   */
  public function setAcceleratorTopologyIds($acceleratorTopologyIds)
  {
    $this->acceleratorTopologyIds = $acceleratorTopologyIds;
  }
  /**
   * @return string[]
   */
  public function getAcceleratorTopologyIds()
  {
    return $this->acceleratorTopologyIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceStatusPhysicalHostTopologyAdditionalAttributes::class, 'Google_Service_Compute_ResourceStatusPhysicalHostTopologyAdditionalAttributes');
