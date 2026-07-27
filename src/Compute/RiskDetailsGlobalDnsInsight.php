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

namespace Google\Service\Compute;

class RiskDetailsGlobalDnsInsight extends \Google\Model
{
  /**
   * Indicates whether the project's default DNS setting is global DNS.
   *
   * @var bool
   */
  public $projectDefaultIsGlobalDns;
  /**
   * The observation window for the query counts.
   *
   * @var string
   */
  public $queryObservationWindow;
  /**
   * The number of queries that are risky. This is always less than or equal to
   * total_query_count.
   *
   * @var string
   */
  public $riskyQueryCount;
  /**
   * The total number of queries in the observation window.
   *
   * @var string
   */
  public $totalQueryCount;

  /**
   * Indicates whether the project's default DNS setting is global DNS.
   *
   * @param bool $projectDefaultIsGlobalDns
   */
  public function setProjectDefaultIsGlobalDns($projectDefaultIsGlobalDns)
  {
    $this->projectDefaultIsGlobalDns = $projectDefaultIsGlobalDns;
  }
  /**
   * @return bool
   */
  public function getProjectDefaultIsGlobalDns()
  {
    return $this->projectDefaultIsGlobalDns;
  }
  /**
   * The observation window for the query counts.
   *
   * @param string $queryObservationWindow
   */
  public function setQueryObservationWindow($queryObservationWindow)
  {
    $this->queryObservationWindow = $queryObservationWindow;
  }
  /**
   * @return string
   */
  public function getQueryObservationWindow()
  {
    return $this->queryObservationWindow;
  }
  /**
   * The number of queries that are risky. This is always less than or equal to
   * total_query_count.
   *
   * @param string $riskyQueryCount
   */
  public function setRiskyQueryCount($riskyQueryCount)
  {
    $this->riskyQueryCount = $riskyQueryCount;
  }
  /**
   * @return string
   */
  public function getRiskyQueryCount()
  {
    return $this->riskyQueryCount;
  }
  /**
   * The total number of queries in the observation window.
   *
   * @param string $totalQueryCount
   */
  public function setTotalQueryCount($totalQueryCount)
  {
    $this->totalQueryCount = $totalQueryCount;
  }
  /**
   * @return string
   */
  public function getTotalQueryCount()
  {
    return $this->totalQueryCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RiskDetailsGlobalDnsInsight::class, 'Google_Service_Compute_RiskDetailsGlobalDnsInsight');
