<?php
/*
 * Copyright 2014 Google Inc.
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

class Google_Service_WebSecurityScanner_ScanConfig extends Google_Collection
{
  protected $collection_key = 'startingUrls';
  protected $authenticationType = 'Google_Service_WebSecurityScanner_Authentication';
  protected $authenticationDataType = '';
  public $blacklistPatterns;
  public $displayName;
  public $exportToSecurityCommandCenter;
  public $managedScan;
  public $maxQps;
  public $name;
  public $riskLevel;
  protected $scheduleType = 'Google_Service_WebSecurityScanner_Schedule';
  protected $scheduleDataType = '';
  public $startingUrls;
  public $staticIpScan;
  public $userAgent;

  /**
   * @param Google_Service_WebSecurityScanner_Authentication
   */
  public function setAuthentication(Google_Service_WebSecurityScanner_Authentication $authentication)
  {
    $this->authentication = $authentication;
  }
  /**
   * @return Google_Service_WebSecurityScanner_Authentication
   */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  public function setBlacklistPatterns($blacklistPatterns)
  {
    $this->blacklistPatterns = $blacklistPatterns;
  }
  public function getBlacklistPatterns()
  {
    return $this->blacklistPatterns;
  }
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  public function getDisplayName()
  {
    return $this->displayName;
  }
  public function setExportToSecurityCommandCenter($exportToSecurityCommandCenter)
  {
    $this->exportToSecurityCommandCenter = $exportToSecurityCommandCenter;
  }
  public function getExportToSecurityCommandCenter()
  {
    return $this->exportToSecurityCommandCenter;
  }
  public function setManagedScan($managedScan)
  {
    $this->managedScan = $managedScan;
  }
  public function getManagedScan()
  {
    return $this->managedScan;
  }
  public function setMaxQps($maxQps)
  {
    $this->maxQps = $maxQps;
  }
  public function getMaxQps()
  {
    return $this->maxQps;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setRiskLevel($riskLevel)
  {
    $this->riskLevel = $riskLevel;
  }
  public function getRiskLevel()
  {
    return $this->riskLevel;
  }
  /**
   * @param Google_Service_WebSecurityScanner_Schedule
   */
  public function setSchedule(Google_Service_WebSecurityScanner_Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  /**
   * @return Google_Service_WebSecurityScanner_Schedule
   */
  public function getSchedule()
  {
    return $this->schedule;
  }
  public function setStartingUrls($startingUrls)
  {
    $this->startingUrls = $startingUrls;
  }
  public function getStartingUrls()
  {
    return $this->startingUrls;
  }
  public function setStaticIpScan($staticIpScan)
  {
    $this->staticIpScan = $staticIpScan;
  }
  public function getStaticIpScan()
  {
    return $this->staticIpScan;
  }
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  public function getUserAgent()
  {
    return $this->userAgent;
  }
}
