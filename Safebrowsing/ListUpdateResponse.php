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

class Google_Service_Safebrowsing_ListUpdateResponse extends Google_Collection
{
  protected $collection_key = 'removals';
  public $additions;
  public $checksum;
  public $newClientState;
  public $platformType;
  public $removals;
  public $responseType;
  public $threatEntryType;
  public $threatType;

  public function setAdditions(array $additions)
  {
    foreach ($additions as $a) {
      if (!$a instanceof Google_Service_Safebrowsing_ThreatEntrySet) {
        throw new InvalidArgumentException('First argument to setAdditions must be an array of Google_Service_Safebrowsing_ThreatEntrySet');
      }
    }
    $this->additions = $additions;
  }
  public function getAdditions()
  {
    return $this->additions;
  }
  public function setChecksum(Google_Service_Safebrowsing_Checksum $checksum)
  {
    $this->checksum = $checksum;
  }
  public function getChecksum()
  {
    return $this->checksum;
  }
  public function setNewClientState($newClientState)
  {
    $this->newClientState = $newClientState;
  }
  public function getNewClientState()
  {
    return $this->newClientState;
  }
  public function setPlatformType($platformType)
  {
    $this->platformType = $platformType;
  }
  public function getPlatformType()
  {
    return $this->platformType;
  }
  public function setRemovals(array $removals)
  {
    foreach ($removals as $r) {
      if (!$r instanceof Google_Service_Safebrowsing_ThreatEntrySet) {
        throw new InvalidArgumentException('First argument to setRemovals must be an array of Google_Service_Safebrowsing_ThreatEntrySet');
      }
    }
    $this->removals = $removals;
  }
  public function getRemovals()
  {
    return $this->removals;
  }
  public function setResponseType($responseType)
  {
    $this->responseType = $responseType;
  }
  public function getResponseType()
  {
    return $this->responseType;
  }
  public function setThreatEntryType($threatEntryType)
  {
    $this->threatEntryType = $threatEntryType;
  }
  public function getThreatEntryType()
  {
    return $this->threatEntryType;
  }
  public function setThreatType($threatType)
  {
    $this->threatType = $threatType;
  }
  public function getThreatType()
  {
    return $this->threatType;
  }
}
