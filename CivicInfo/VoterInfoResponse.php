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

class Google_Service_CivicInfo_VoterInfoResponse extends Google_Collection
{
  protected $collection_key = 'state';
  public $contests;
  public $dropOffLocations;
  public $earlyVoteSites;
  public $election;
  public $kind;
  public $mailOnly;
  public $normalizedInput;
  public $otherElections;
  public $pollingLocations;
  public $precinctId;
  public $state;

  public function setContests(array $contests)
  {
    foreach ($contests as $c) {
      if (!$c instanceof Google_Service_CivicInfo_Contest) {
        throw new InvalidArgumentException('First argument to setContests must be an array of Google_Service_CivicInfo_Contest');
      }
    }
    $this->contests = $contests;
  }
  public function getContests()
  {
    return $this->contests;
  }
  public function setDropOffLocations(array $dropOffLocations)
  {
    foreach ($dropOffLocations as $d) {
      if (!$d instanceof Google_Service_CivicInfo_PollingLocation) {
        throw new InvalidArgumentException('First argument to setDropOffLocations must be an array of Google_Service_CivicInfo_PollingLocation');
      }
    }
    $this->dropOffLocations = $dropOffLocations;
  }
  public function getDropOffLocations()
  {
    return $this->dropOffLocations;
  }
  public function setEarlyVoteSites(array $earlyVoteSites)
  {
    foreach ($earlyVoteSites as $e) {
      if (!$e instanceof Google_Service_CivicInfo_PollingLocation) {
        throw new InvalidArgumentException('First argument to setEarlyVoteSites must be an array of Google_Service_CivicInfo_PollingLocation');
      }
    }
    $this->earlyVoteSites = $earlyVoteSites;
  }
  public function getEarlyVoteSites()
  {
    return $this->earlyVoteSites;
  }
  public function setElection(Google_Service_CivicInfo_Election $election)
  {
    $this->election = $election;
  }
  public function getElection()
  {
    return $this->election;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMailOnly($mailOnly)
  {
    $this->mailOnly = $mailOnly;
  }
  public function getMailOnly()
  {
    return $this->mailOnly;
  }
  public function setNormalizedInput(Google_Service_CivicInfo_SimpleAddressType $normalizedInput)
  {
    $this->normalizedInput = $normalizedInput;
  }
  public function getNormalizedInput()
  {
    return $this->normalizedInput;
  }
  public function setOtherElections(array $otherElections)
  {
    foreach ($otherElections as $o) {
      if (!$o instanceof Google_Service_CivicInfo_Election) {
        throw new InvalidArgumentException('First argument to setOtherElections must be an array of Google_Service_CivicInfo_Election');
      }
    }
    $this->otherElections = $otherElections;
  }
  public function getOtherElections()
  {
    return $this->otherElections;
  }
  public function setPollingLocations(array $pollingLocations)
  {
    foreach ($pollingLocations as $p) {
      if (!$p instanceof Google_Service_CivicInfo_PollingLocation) {
        throw new InvalidArgumentException('First argument to setPollingLocations must be an array of Google_Service_CivicInfo_PollingLocation');
      }
    }
    $this->pollingLocations = $pollingLocations;
  }
  public function getPollingLocations()
  {
    return $this->pollingLocations;
  }
  public function setPrecinctId($precinctId)
  {
    $this->precinctId = $precinctId;
  }
  public function getPrecinctId()
  {
    return $this->precinctId;
  }
  public function setState(array $state)
  {
    foreach ($state as $s) {
      if (!$s instanceof Google_Service_CivicInfo_AdministrationRegion) {
        throw new InvalidArgumentException('First argument to setState must be an array of Google_Service_CivicInfo_AdministrationRegion');
      }
    }
    $this->state = $state;
  }
  public function getState()
  {
    return $this->state;
  }
}
