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

class Google_Service_Dataflow_SeqMapTask extends Google_Collection
{
  protected $collection_key = 'outputInfos';
  public $inputs;
  public $name;
  public $outputInfos;
  public $stageName;
  public $systemName;
  public $userFn;

  public function setInputs(array $inputs)
  {
    foreach ($inputs as $i) {
      if (!$i instanceof Google_Service_Dataflow_SideInputInfo) {
        throw new InvalidArgumentException('First argument to setInputs must be an array of Google_Service_Dataflow_SideInputInfo');
      }
    }
    $this->inputs = $inputs;
  }
  public function getInputs()
  {
    return $this->inputs;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOutputInfos(array $outputInfos)
  {
    foreach ($outputInfos as $o) {
      if (!$o instanceof Google_Service_Dataflow_SeqMapTaskOutputInfo) {
        throw new InvalidArgumentException('First argument to setOutputInfos must be an array of Google_Service_Dataflow_SeqMapTaskOutputInfo');
      }
    }
    $this->outputInfos = $outputInfos;
  }
  public function getOutputInfos()
  {
    return $this->outputInfos;
  }
  public function setStageName($stageName)
  {
    $this->stageName = $stageName;
  }
  public function getStageName()
  {
    return $this->stageName;
  }
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  public function getSystemName()
  {
    return $this->systemName;
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
