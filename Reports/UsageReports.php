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

class Google_Service_Reports_UsageReports extends Google_Collection
{
  protected $collection_key = 'warnings';
  public $etag;
  public $kind;
  public $nextPageToken;
  public $usageReports;
  public $warnings;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  public function getEtag()
  {
    return $this->etag;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  public function setUsageReports(array $usageReports)
  {
    foreach ($usageReports as $u) {
      if (!$u instanceof Google_Service_Reports_UsageReport) {
        throw new InvalidArgumentException('First argument to setUsageReports must be an array of Google_Service_Reports_UsageReport');
      }
    }
    $this->usageReports = $usageReports;
  }
  public function getUsageReports()
  {
    return $this->usageReports;
  }
  public function setWarnings(array $warnings)
  {
    foreach ($warnings as $w) {
      if (!$w instanceof Google_Service_Reports_UsageReportsWarnings) {
        throw new InvalidArgumentException('First argument to setWarnings must be an array of Google_Service_Reports_UsageReportsWarnings');
      }
    }
    $this->warnings = $warnings;
  }
  public function getWarnings()
  {
    return $this->warnings;
  }
}
