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

class Google_Service_Safebrowsing_ThreatInfo extends Google_Collection
{
  protected $collection_key = 'threatTypes';
  public $platformTypes;
  public $threatEntries;
  public $threatEntryTypes;
  public $threatTypes;

  public function setPlatformTypes(array $platformTypes)
  {
    $this->platformTypes = $platformTypes;
  }
  public function getPlatformTypes()
  {
    return $this->platformTypes;
  }
  public function setThreatEntries(array $threatEntries)
  {
    foreach ($threatEntries as $t) {
      if (!$t instanceof Google_Service_Safebrowsing_ThreatEntry) {
        throw new InvalidArgumentException('First argument to setThreatEntries must be an array of Google_Service_Safebrowsing_ThreatEntry');
      }
    }
    $this->threatEntries = $threatEntries;
  }
  public function getThreatEntries()
  {
    return $this->threatEntries;
  }
  public function setThreatEntryTypes(array $threatEntryTypes)
  {
    $this->threatEntryTypes = $threatEntryTypes;
  }
  public function getThreatEntryTypes()
  {
    return $this->threatEntryTypes;
  }
  public function setThreatTypes(array $threatTypes)
  {
    $this->threatTypes = $threatTypes;
  }
  public function getThreatTypes()
  {
    return $this->threatTypes;
  }
}
