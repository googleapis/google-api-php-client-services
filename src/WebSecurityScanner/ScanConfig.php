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

namespace Google\Service\WebSecurityScanner;

class ScanConfig extends \Google\Collection
{
  protected $collection_key = 'startingUrls';
  protected $authenticationType = Authentication::class;
  protected $authenticationDataType = '';
  /**
   * @var string[]
   */
  public $blacklistPatterns;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $exportToSecurityCommandCenter;
  /**
   * @var bool
   */
  public $ignoreHttpStatusErrors;
  /**
   * @var bool
   */
  public $managedScan;
  /**
   * @var int
   */
  public $maxQps;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $riskLevel;
  protected $scheduleType = Schedule::class;
  protected $scheduleDataType = '';
  /**
   * @var string[]
   */
  public $startingUrls;
  /**
   * @var bool
   */
  public $staticIpScan;
  /**
   * @var string
   */
  public $userAgent;

  /**
   * @param Authentication
   */
  public function setAuthentication(Authentication $authentication)
  {
    $this->authentication = $authentication;
  }
  /**
   * @return Authentication
   */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  /**
   * @param string[]
   */
  public function setBlacklistPatterns($blacklistPatterns)
  {
    $this->blacklistPatterns = $blacklistPatterns;
  }
  /**
   * @return string[]
   */
  public function getBlacklistPatterns()
  {
    return $this->blacklistPatterns;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setExportToSecurityCommandCenter($exportToSecurityCommandCenter)
  {
    $this->exportToSecurityCommandCenter = $exportToSecurityCommandCenter;
  }
  /**
   * @return string
   */
  public function getExportToSecurityCommandCenter()
  {
    return $this->exportToSecurityCommandCenter;
  }
  /**
   * @param bool
   */
  public function setIgnoreHttpStatusErrors($ignoreHttpStatusErrors)
  {
    $this->ignoreHttpStatusErrors = $ignoreHttpStatusErrors;
  }
  /**
   * @return bool
   */
  public function getIgnoreHttpStatusErrors()
  {
    return $this->ignoreHttpStatusErrors;
  }
  /**
   * @param bool
   */
  public function setManagedScan($managedScan)
  {
    $this->managedScan = $managedScan;
  }
  /**
   * @return bool
   */
  public function getManagedScan()
  {
    return $this->managedScan;
  }
  /**
   * @param int
   */
  public function setMaxQps($maxQps)
  {
    $this->maxQps = $maxQps;
  }
  /**
   * @return int
   */
  public function getMaxQps()
  {
    return $this->maxQps;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setRiskLevel($riskLevel)
  {
    $this->riskLevel = $riskLevel;
  }
  /**
   * @return string
   */
  public function getRiskLevel()
  {
    return $this->riskLevel;
  }
  /**
   * @param Schedule
   */
  public function setSchedule(Schedule $schedule)
  {
    $this->schedule = $schedule;
  }
  /**
   * @return Schedule
   */
  public function getSchedule()
  {
    return $this->schedule;
  }
  /**
   * @param string[]
   */
  public function setStartingUrls($startingUrls)
  {
    $this->startingUrls = $startingUrls;
  }
  /**
   * @return string[]
   */
  public function getStartingUrls()
  {
    return $this->startingUrls;
  }
  /**
   * @param bool
   */
  public function setStaticIpScan($staticIpScan)
  {
    $this->staticIpScan = $staticIpScan;
  }
  /**
   * @return bool
   */
  public function getStaticIpScan()
  {
    return $this->staticIpScan;
  }
  /**
   * @param string
   */
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  /**
   * @return string
   */
  public function getUserAgent()
  {
    return $this->userAgent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScanConfig::class, 'Google_Service_WebSecurityScanner_ScanConfig');
