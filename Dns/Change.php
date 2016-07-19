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

class Google_Service_Dns_Change extends Google_Collection
{
  protected $collection_key = 'deletions';
  public $additions;
  public $deletions;
  public $id;
  public $kind;
  public $startTime;
  public $status;

  public function setAdditions(array $additions)
  {
    foreach ($additions as $a) {
      if (!$a instanceof Google_Service_Dns_ResourceRecordSet) {
        throw new InvalidArgumentException('First argument to setAdditions must be an array of Google_Service_Dns_ResourceRecordSet');
      }
    }
    $this->additions = $additions;
  }
  public function getAdditions()
  {
    return $this->additions;
  }
  public function setDeletions(array $deletions)
  {
    foreach ($deletions as $d) {
      if (!$d instanceof Google_Service_Dns_ResourceRecordSet) {
        throw new InvalidArgumentException('First argument to setDeletions must be an array of Google_Service_Dns_ResourceRecordSet');
      }
    }
    $this->deletions = $deletions;
  }
  public function getDeletions()
  {
    return $this->deletions;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  public function getStartTime()
  {
    return $this->startTime;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
}
