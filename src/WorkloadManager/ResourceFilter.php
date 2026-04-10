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

namespace Google\Service\WorkloadManager;

class ResourceFilter extends \Google\Collection
{
  protected $collection_key = 'scopes';
  protected $gceInstanceFilterType = GceInstanceFilter::class;
  protected $gceInstanceFilterDataType = '';
  /**
   * Labels to filter resources by. Each key-value pair in the map must exist on
   * the resource for it to be included (e.g. VM instance labels). For example,
   * specifying `{ "env": "prod", "database": "nosql" }` will only include
   * resources that have labels `env=prod` and `database=nosql`.
   *
   * @var string[]
   */
  public $inclusionLabels;
  /**
   * The pattern to filter resources by their id For example, a pattern of
   * ".*prod-cluster.*" will match all resources that contain "prod-cluster" in
   * their ID.
   *
   * @var string[]
   */
  public $resourceIdPatterns;
  /**
   * The scopes of evaluation resource. Format: * `projects/{project_id}` *
   * `folders/{folder_id}` * `organizations/{organization_id}`
   *
   * @var string[]
   */
  public $scopes;

  /**
   * Filter compute engine resources.
   *
   * @param GceInstanceFilter $gceInstanceFilter
   */
  public function setGceInstanceFilter(GceInstanceFilter $gceInstanceFilter)
  {
    $this->gceInstanceFilter = $gceInstanceFilter;
  }
  /**
   * @return GceInstanceFilter
   */
  public function getGceInstanceFilter()
  {
    return $this->gceInstanceFilter;
  }
  /**
   * Labels to filter resources by. Each key-value pair in the map must exist on
   * the resource for it to be included (e.g. VM instance labels). For example,
   * specifying `{ "env": "prod", "database": "nosql" }` will only include
   * resources that have labels `env=prod` and `database=nosql`.
   *
   * @param string[] $inclusionLabels
   */
  public function setInclusionLabels($inclusionLabels)
  {
    $this->inclusionLabels = $inclusionLabels;
  }
  /**
   * @return string[]
   */
  public function getInclusionLabels()
  {
    return $this->inclusionLabels;
  }
  /**
   * The pattern to filter resources by their id For example, a pattern of
   * ".*prod-cluster.*" will match all resources that contain "prod-cluster" in
   * their ID.
   *
   * @param string[] $resourceIdPatterns
   */
  public function setResourceIdPatterns($resourceIdPatterns)
  {
    $this->resourceIdPatterns = $resourceIdPatterns;
  }
  /**
   * @return string[]
   */
  public function getResourceIdPatterns()
  {
    return $this->resourceIdPatterns;
  }
  /**
   * The scopes of evaluation resource. Format: * `projects/{project_id}` *
   * `folders/{folder_id}` * `organizations/{organization_id}`
   *
   * @param string[] $scopes
   */
  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }
  /**
   * @return string[]
   */
  public function getScopes()
  {
    return $this->scopes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourceFilter::class, 'Google_Service_WorkloadManager_ResourceFilter');
