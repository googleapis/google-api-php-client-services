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

class Google_Service_Datastore_Key extends Google_Collection
{
  protected $collection_key = 'path';
  public $partitionId;
  public $path;

  public function setPartitionId(Google_Service_Datastore_PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }
  public function getPartitionId()
  {
    return $this->partitionId;
  }
  public function setPath(array $path)
  {
    foreach ($path as $p) {
      if (!$p instanceof Google_Service_Datastore_PathElement) {
        throw new InvalidArgumentException('First argument to setPath must be an array of Google_Service_Datastore_PathElement');
      }
    }
    $this->path = $path;
  }
  public function getPath()
  {
    return $this->path;
  }
}
