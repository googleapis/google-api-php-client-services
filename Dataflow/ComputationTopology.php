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

class Google_Service_Dataflow_ComputationTopology extends Google_Collection
{
  protected $collection_key = 'stateFamilies';
  public $computationId;
  public $inputs;
  public $keyRanges;
  public $outputs;
  public $stateFamilies;
  public $systemStageName;
  public $userStageName;

  public function setComputationId($computationId)
  {
    $this->computationId = $computationId;
  }
  public function getComputationId()
  {
    return $this->computationId;
  }
  public function setInputs(array $inputs)
  {
    foreach ($inputs as $i) {
      if (!$i instanceof Google_Service_Dataflow_StreamLocation) {
        throw new InvalidArgumentException('First argument to setInputs must be an array of Google_Service_Dataflow_StreamLocation');
      }
    }
    $this->inputs = $inputs;
  }
  public function getInputs()
  {
    return $this->inputs;
  }
  public function setKeyRanges(array $keyRanges)
  {
    foreach ($keyRanges as $k) {
      if (!$k instanceof Google_Service_Dataflow_KeyRangeLocation) {
        throw new InvalidArgumentException('First argument to setKeyRanges must be an array of Google_Service_Dataflow_KeyRangeLocation');
      }
    }
    $this->keyRanges = $keyRanges;
  }
  public function getKeyRanges()
  {
    return $this->keyRanges;
  }
  public function setOutputs(array $outputs)
  {
    foreach ($outputs as $o) {
      if (!$o instanceof Google_Service_Dataflow_StreamLocation) {
        throw new InvalidArgumentException('First argument to setOutputs must be an array of Google_Service_Dataflow_StreamLocation');
      }
    }
    $this->outputs = $outputs;
  }
  public function getOutputs()
  {
    return $this->outputs;
  }
  public function setStateFamilies(array $stateFamilies)
  {
    foreach ($stateFamilies as $s) {
      if (!$s instanceof Google_Service_Dataflow_StateFamilyConfig) {
        throw new InvalidArgumentException('First argument to setStateFamilies must be an array of Google_Service_Dataflow_StateFamilyConfig');
      }
    }
    $this->stateFamilies = $stateFamilies;
  }
  public function getStateFamilies()
  {
    return $this->stateFamilies;
  }
  public function setSystemStageName($systemStageName)
  {
    $this->systemStageName = $systemStageName;
  }
  public function getSystemStageName()
  {
    return $this->systemStageName;
  }
  public function setUserStageName($userStageName)
  {
    $this->userStageName = $userStageName;
  }
  public function getUserStageName()
  {
    return $this->userStageName;
  }
}
