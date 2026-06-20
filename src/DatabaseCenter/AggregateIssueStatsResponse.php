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

namespace Google\Service\DatabaseCenter;

class AggregateIssueStatsResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  protected $issueGroupStatsType = IssueGroupStats::class;
  protected $issueGroupStatsDataType = 'array';
  /**
   * Total count of the resource filtered in based on the user given filter.
   *
   * @var int
   */
  public $totalResourceGroupsCount;
  /**
   * Total count of the resources filtered in based on the user given filter.
   *
   * @var int
   */
  public $totalResourcesCount;
  /**
   * Unordered list. List of unreachable regions from where data could not be
   * retrieved.
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * List of issue group stats where each group contains stats for resources
   * having a particular combination of relevant issues.
   *
   * @param IssueGroupStats[] $issueGroupStats
   */
  public function setIssueGroupStats($issueGroupStats)
  {
    $this->issueGroupStats = $issueGroupStats;
  }
  /**
   * @return IssueGroupStats[]
   */
  public function getIssueGroupStats()
  {
    return $this->issueGroupStats;
  }
  /**
   * Total count of the resource filtered in based on the user given filter.
   *
   * @param int $totalResourceGroupsCount
   */
  public function setTotalResourceGroupsCount($totalResourceGroupsCount)
  {
    $this->totalResourceGroupsCount = $totalResourceGroupsCount;
  }
  /**
   * @return int
   */
  public function getTotalResourceGroupsCount()
  {
    return $this->totalResourceGroupsCount;
  }
  /**
   * Total count of the resources filtered in based on the user given filter.
   *
   * @param int $totalResourcesCount
   */
  public function setTotalResourcesCount($totalResourcesCount)
  {
    $this->totalResourcesCount = $totalResourcesCount;
  }
  /**
   * @return int
   */
  public function getTotalResourcesCount()
  {
    return $this->totalResourcesCount;
  }
  /**
   * Unordered list. List of unreachable regions from where data could not be
   * retrieved.
   *
   * @param string[] $unreachable
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregateIssueStatsResponse::class, 'Google_Service_DatabaseCenter_AggregateIssueStatsResponse');
