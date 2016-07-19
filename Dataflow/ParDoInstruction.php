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

class Google_Service_Dataflow_ParDoInstruction extends Google_Collection
{
  protected $collection_key = 'sideInputs';
  public $input;
  public $multiOutputInfos;
  public $numOutputs;
  public $sideInputs;
  public $userFn;

  public function setInput(Google_Service_Dataflow_InstructionInput $input)
  {
    $this->input = $input;
  }
  public function getInput()
  {
    return $this->input;
  }
  public function setMultiOutputInfos(array $multiOutputInfos)
  {
    foreach ($multiOutputInfos as $m) {
      if (!$m instanceof Google_Service_Dataflow_MultiOutputInfo) {
        throw new InvalidArgumentException('First argument to setMultiOutputInfos must be an array of Google_Service_Dataflow_MultiOutputInfo');
      }
    }
    $this->multiOutputInfos = $multiOutputInfos;
  }
  public function getMultiOutputInfos()
  {
    return $this->multiOutputInfos;
  }
  public function setNumOutputs($numOutputs)
  {
    $this->numOutputs = $numOutputs;
  }
  public function getNumOutputs()
  {
    return $this->numOutputs;
  }
  public function setSideInputs(array $sideInputs)
  {
    foreach ($sideInputs as $s) {
      if (!$s instanceof Google_Service_Dataflow_SideInputInfo) {
        throw new InvalidArgumentException('First argument to setSideInputs must be an array of Google_Service_Dataflow_SideInputInfo');
      }
    }
    $this->sideInputs = $sideInputs;
  }
  public function getSideInputs()
  {
    return $this->sideInputs;
  }
  public function setUserFn(array $userFn)
  {
    $this->userFn = $userFn;
  }
  public function getUserFn()
  {
    return $this->userFn;
  }
}
