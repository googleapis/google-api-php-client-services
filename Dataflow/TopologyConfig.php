<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Dataflow_TopologyConfig extends Google_Collection
{
  protected $collection_key = 'dataDiskAssignments';
  public $computations;
  public $dataDiskAssignments;
  public $forwardingKeyBits;
  public $persistentStateVersion;
  public $userStageToComputationNameMap;

  public function setComputations(array $computations)
  {
    foreach ($computations as $c) {
      if (!$c instanceof Google_Service_Dataflow_ComputationTopology) {
        throw new InvalidArgumentException('First argument to setComputations must be an array of Google_Service_Dataflow_ComputationTopology');
      }
    }
    $this->computations = $computations;
  }
  public function getComputations()
  {
    return $this->computations;
  }
  public function setDataDiskAssignments(array $dataDiskAssignments)
  {
    foreach ($dataDiskAssignments as $d) {
      if (!$d instanceof Google_Service_Dataflow_DataDiskAssignment) {
        throw new InvalidArgumentException('First argument to setDataDiskAssignments must be an array of Google_Service_Dataflow_DataDiskAssignment');
      }
    }
    $this->dataDiskAssignments = $dataDiskAssignments;
  }
  public function getDataDiskAssignments()
  {
    return $this->dataDiskAssignments;
  }
  public function setForwardingKeyBits($forwardingKeyBits)
  {
    $this->forwardingKeyBits = $forwardingKeyBits;
  }
  public function getForwardingKeyBits()
  {
    return $this->forwardingKeyBits;
  }
  public function setPersistentStateVersion($persistentStateVersion)
  {
    $this->persistentStateVersion = $persistentStateVersion;
  }
  public function getPersistentStateVersion()
  {
    return $this->persistentStateVersion;
  }
  public function setUserStageToComputationNameMap(array $userStageToComputationNameMap)
  {
    $this->userStageToComputationNameMap = $userStageToComputationNameMap;
  }
  public function getUserStageToComputationNameMap()
  {
    return $this->userStageToComputationNameMap;
  }
}
