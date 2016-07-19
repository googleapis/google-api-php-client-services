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

class Google_Service_Dataflow_StreamingComputationTask extends Google_Collection
{
  protected $collection_key = 'dataDisks';
  public $computationRanges;
  public $dataDisks;
  public $taskType;

  public function setComputationRanges(array $computationRanges)
  {
    foreach ($computationRanges as $c) {
      if (!$c instanceof Google_Service_Dataflow_StreamingComputationRanges) {
        throw new InvalidArgumentException('First argument to setComputationRanges must be an array of Google_Service_Dataflow_StreamingComputationRanges');
      }
    }
    $this->computationRanges = $computationRanges;
  }
  public function getComputationRanges()
  {
    return $this->computationRanges;
  }
  public function setDataDisks(array $dataDisks)
  {
    foreach ($dataDisks as $d) {
      if (!$d instanceof Google_Service_Dataflow_MountedDataDisk) {
        throw new InvalidArgumentException('First argument to setDataDisks must be an array of Google_Service_Dataflow_MountedDataDisk');
      }
    }
    $this->dataDisks = $dataDisks;
  }
  public function getDataDisks()
  {
    return $this->dataDisks;
  }
  public function setTaskType($taskType)
  {
    $this->taskType = $taskType;
  }
  public function getTaskType()
  {
    return $this->taskType;
  }
}
