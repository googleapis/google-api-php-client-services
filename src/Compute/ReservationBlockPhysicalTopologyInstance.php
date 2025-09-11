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

class ReservationBlockPhysicalTopologyInstance extends \Google\Model
{
  /**
   * @var string
   */
  public $instanceId;
  protected $physicalHostTopologyType = ReservationBlockPhysicalTopologyInstancePhysicalHostTopology::class;
  protected $physicalHostTopologyDataType = '';
  /**
   * @var string
   */
  public $projectId;

  /**
   * @param string
   */
  public function setInstanceId($instanceId)
  {
    $this->instanceId = $instanceId;
  }
  /**
   * @return string
   */
  public function getInstanceId()
  {
    return $this->instanceId;
  }
  /**
   * @param ReservationBlockPhysicalTopologyInstancePhysicalHostTopology
   */
  public function setPhysicalHostTopology(ReservationBlockPhysicalTopologyInstancePhysicalHostTopology $physicalHostTopology)
  {
    $this->physicalHostTopology = $physicalHostTopology;
  }
  /**
   * @return ReservationBlockPhysicalTopologyInstancePhysicalHostTopology
   */
  public function getPhysicalHostTopology()
  {
    return $this->physicalHostTopology;
  }
  /**
   * @param string
   */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /**
   * @return string
   */
  public function getProjectId()
  {
    return $this->projectId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReservationBlockPhysicalTopologyInstance::class, 'Google_Service_Compute_ReservationBlockPhysicalTopologyInstance');
