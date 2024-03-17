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

class ScanRun extends \Google\Collection
{
  protected $collection_key = 'warningTraces';
  /**
   * @var string
   */
  public $endTime;
  protected $errorTraceType = ScanRunErrorTrace::class;
  protected $errorTraceDataType = '';
  /**
   * @var string
   */
  public $executionState;
  /**
   * @var bool
   */
  public $hasVulnerabilities;
  /**
   * @var string
   */
  public $name;
  /**
   * @var int
   */
  public $progressPercent;
  /**
   * @var string
   */
  public $resultState;
  /**
   * @var string
   */
  public $startTime;
  /**
   * @var string
   */
  public $urlsCrawledCount;
  /**
   * @var string
   */
  public $urlsTestedCount;
  protected $warningTracesType = ScanRunWarningTrace::class;
  protected $warningTracesDataType = 'array';

  /**
   * @param string
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * @param ScanRunErrorTrace
   */
  public function setErrorTrace(ScanRunErrorTrace $errorTrace)
  {
    $this->errorTrace = $errorTrace;
  }
  /**
   * @return ScanRunErrorTrace
   */
  public function getErrorTrace()
  {
    return $this->errorTrace;
  }
  /**
   * @param string
   */
  public function setExecutionState($executionState)
  {
    $this->executionState = $executionState;
  }
  /**
   * @return string
   */
  public function getExecutionState()
  {
    return $this->executionState;
  }
  /**
   * @param bool
   */
  public function setHasVulnerabilities($hasVulnerabilities)
  {
    $this->hasVulnerabilities = $hasVulnerabilities;
  }
  /**
   * @return bool
   */
  public function getHasVulnerabilities()
  {
    return $this->hasVulnerabilities;
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
   * @param int
   */
  public function setProgressPercent($progressPercent)
  {
    $this->progressPercent = $progressPercent;
  }
  /**
   * @return int
   */
  public function getProgressPercent()
  {
    return $this->progressPercent;
  }
  /**
   * @param string
   */
  public function setResultState($resultState)
  {
    $this->resultState = $resultState;
  }
  /**
   * @return string
   */
  public function getResultState()
  {
    return $this->resultState;
  }
  /**
   * @param string
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * @param string
   */
  public function setUrlsCrawledCount($urlsCrawledCount)
  {
    $this->urlsCrawledCount = $urlsCrawledCount;
  }
  /**
   * @return string
   */
  public function getUrlsCrawledCount()
  {
    return $this->urlsCrawledCount;
  }
  /**
   * @param string
   */
  public function setUrlsTestedCount($urlsTestedCount)
  {
    $this->urlsTestedCount = $urlsTestedCount;
  }
  /**
   * @return string
   */
  public function getUrlsTestedCount()
  {
    return $this->urlsTestedCount;
  }
  /**
   * @param ScanRunWarningTrace[]
   */
  public function setWarningTraces($warningTraces)
  {
    $this->warningTraces = $warningTraces;
  }
  /**
   * @return ScanRunWarningTrace[]
   */
  public function getWarningTraces()
  {
    return $this->warningTraces;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScanRun::class, 'Google_Service_WebSecurityScanner_ScanRun');
