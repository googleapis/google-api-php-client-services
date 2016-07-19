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

class Google_Service_Clouderrorreporting_ErrorGroupStats extends Google_Collection
{
  protected $collection_key = 'timedCounts';
  public $affectedServices;
  public $affectedUsersCount;
  public $count;
  public $firstSeenTime;
  public $group;
  public $lastSeenTime;
  public $numAffectedServices;
  public $representative;
  public $timedCounts;

  public function setAffectedServices(array $affectedServices)
  {
    foreach ($affectedServices as $a) {
      if (!$a instanceof Google_Service_Clouderrorreporting_ServiceContext) {
        throw new InvalidArgumentException('First argument to setAffectedServices must be an array of Google_Service_Clouderrorreporting_ServiceContext');
      }
    }
    $this->affectedServices = $affectedServices;
  }
  public function getAffectedServices()
  {
    return $this->affectedServices;
  }
  public function setAffectedUsersCount($affectedUsersCount)
  {
    $this->affectedUsersCount = $affectedUsersCount;
  }
  public function getAffectedUsersCount()
  {
    return $this->affectedUsersCount;
  }
  public function setCount($count)
  {
    $this->count = $count;
  }
  public function getCount()
  {
    return $this->count;
  }
  public function setFirstSeenTime($firstSeenTime)
  {
    $this->firstSeenTime = $firstSeenTime;
  }
  public function getFirstSeenTime()
  {
    return $this->firstSeenTime;
  }
  public function setGroup(Google_Service_Clouderrorreporting_ErrorGroup $group)
  {
    $this->group = $group;
  }
  public function getGroup()
  {
    return $this->group;
  }
  public function setLastSeenTime($lastSeenTime)
  {
    $this->lastSeenTime = $lastSeenTime;
  }
  public function getLastSeenTime()
  {
    return $this->lastSeenTime;
  }
  public function setNumAffectedServices($numAffectedServices)
  {
    $this->numAffectedServices = $numAffectedServices;
  }
  public function getNumAffectedServices()
  {
    return $this->numAffectedServices;
  }
  public function setRepresentative(Google_Service_Clouderrorreporting_ErrorEvent $representative)
  {
    $this->representative = $representative;
  }
  public function getRepresentative()
  {
    return $this->representative;
  }
  public function setTimedCounts(array $timedCounts)
  {
    foreach ($timedCounts as $t) {
      if (!$t instanceof Google_Service_Clouderrorreporting_TimedCount) {
        throw new InvalidArgumentException('First argument to setTimedCounts must be an array of Google_Service_Clouderrorreporting_TimedCount');
      }
    }
    $this->timedCounts = $timedCounts;
  }
  public function getTimedCounts()
  {
    return $this->timedCounts;
  }
}
