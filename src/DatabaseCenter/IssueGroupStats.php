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

class IssueGroupStats extends \Google\Collection
{
  protected $collection_key = 'issueStats';
  /**
   * Database resource level health card name. This will corresponds to one of
   * the requested input group names.
   *
   * @var string
   */
  public $displayName;
  /**
   * The number of resource groups from the total groups as defined above that
   * are healthy with respect to all of the specified issues.
   *
   * @var int
   */
  public $healthyResourceGroupsCount;
  /**
   * The number of resources from the total defined above in field
   * total_resources_count that are healthy with respect to all of the specified
   * issues.
   *
   * @var int
   */
  public $healthyResourcesCount;
  protected $issueStatsType = IssueStats::class;
  protected $issueStatsDataType = 'array';
  /**
   * Total count of the groups of resources returned by the filter that also
   * have one or more resources for which any of the specified issues are
   * applicable.
   *
   * @var int
   */
  public $resourceGroupsCount;
  /**
   * Total count of resources returned by the filter for which any of the
   * specified issues are applicable.
   *
   * @var int
   */
  public $resourcesCount;

  /**
   * Database resource level health card name. This will corresponds to one of
   * the requested input group names.
   *
   * @param string $displayName
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
   * The number of resource groups from the total groups as defined above that
   * are healthy with respect to all of the specified issues.
   *
   * @param int $healthyResourceGroupsCount
   */
  public function setHealthyResourceGroupsCount($healthyResourceGroupsCount)
  {
    $this->healthyResourceGroupsCount = $healthyResourceGroupsCount;
  }
  /**
   * @return int
   */
  public function getHealthyResourceGroupsCount()
  {
    return $this->healthyResourceGroupsCount;
  }
  /**
   * The number of resources from the total defined above in field
   * total_resources_count that are healthy with respect to all of the specified
   * issues.
   *
   * @param int $healthyResourcesCount
   */
  public function setHealthyResourcesCount($healthyResourcesCount)
  {
    $this->healthyResourcesCount = $healthyResourcesCount;
  }
  /**
   * @return int
   */
  public function getHealthyResourcesCount()
  {
    return $this->healthyResourcesCount;
  }
  /**
   * List of issues stats containing count of resources having particular issue
   * category.
   *
   * @param IssueStats[] $issueStats
   */
  public function setIssueStats($issueStats)
  {
    $this->issueStats = $issueStats;
  }
  /**
   * @return IssueStats[]
   */
  public function getIssueStats()
  {
    return $this->issueStats;
  }
  /**
   * Total count of the groups of resources returned by the filter that also
   * have one or more resources for which any of the specified issues are
   * applicable.
   *
   * @param int $resourceGroupsCount
   */
  public function setResourceGroupsCount($resourceGroupsCount)
  {
    $this->resourceGroupsCount = $resourceGroupsCount;
  }
  /**
   * @return int
   */
  public function getResourceGroupsCount()
  {
    return $this->resourceGroupsCount;
  }
  /**
   * Total count of resources returned by the filter for which any of the
   * specified issues are applicable.
   *
   * @param int $resourcesCount
   */
  public function setResourcesCount($resourcesCount)
  {
    $this->resourcesCount = $resourcesCount;
  }
  /**
   * @return int
   */
  public function getResourcesCount()
  {
    return $this->resourcesCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IssueGroupStats::class, 'Google_Service_DatabaseCenter_IssueGroupStats');
