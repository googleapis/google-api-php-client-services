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

class AggregateIssueStatsRequest extends \Google\Collection
{
  protected $collection_key = 'signalTypeGroups';
  protected $baselineDateType = Date::class;
  protected $baselineDateDataType = '';
  /**
   * Optional. The expression to filter resources. Supported fields are:
   * `full_resource_name`, `resource_type`, `container`, `product.type`,
   * `product.engine`, `product.version`, `location`, `labels`, `issues`, fields
   * of availability_info, data_protection_info,'resource_name', etc. The
   * expression is a list of zero or more restrictions combined via logical
   * operators `AND` and `OR`. When `AND` and `OR` are both used in the
   * expression, parentheses must be appropriately used to group the
   * combinations. Example: `location="us-east1"` Example:
   * `container="projects/123" OR container="projects/456"` Example:
   * `(container="projects/123" OR container="projects/456") AND location="us-
   * east1"`
   *
   * @var string
   */
  public $filter;
  /**
   * Required. Parent can be a project, a folder, or an organization. The search
   * is limited to the resources within the `scope`. The allowed values are: *
   * projects/{PROJECT_ID} (e.g., "projects/foo-bar") *
   * projects/{PROJECT_NUMBER} (e.g., "projects/12345678") *
   * folders/{FOLDER_NUMBER} (e.g., "folders/1234567") *
   * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
   *
   * @var string
   */
  public $parent;
  protected $signalTypeGroupsType = SignalTypeGroup::class;
  protected $signalTypeGroupsDataType = 'array';

  /**
   * Optional. The baseline date w.r.t. which the delta counts are calculated.
   * If not set, delta counts are not included in the response and the response
   * indicates the current state of the fleet.
   *
   * @param Date $baselineDate
   */
  public function setBaselineDate(Date $baselineDate)
  {
    $this->baselineDate = $baselineDate;
  }
  /**
   * @return Date
   */
  public function getBaselineDate()
  {
    return $this->baselineDate;
  }
  /**
   * Optional. The expression to filter resources. Supported fields are:
   * `full_resource_name`, `resource_type`, `container`, `product.type`,
   * `product.engine`, `product.version`, `location`, `labels`, `issues`, fields
   * of availability_info, data_protection_info,'resource_name', etc. The
   * expression is a list of zero or more restrictions combined via logical
   * operators `AND` and `OR`. When `AND` and `OR` are both used in the
   * expression, parentheses must be appropriately used to group the
   * combinations. Example: `location="us-east1"` Example:
   * `container="projects/123" OR container="projects/456"` Example:
   * `(container="projects/123" OR container="projects/456") AND location="us-
   * east1"`
   *
   * @param string $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * Required. Parent can be a project, a folder, or an organization. The search
   * is limited to the resources within the `scope`. The allowed values are: *
   * projects/{PROJECT_ID} (e.g., "projects/foo-bar") *
   * projects/{PROJECT_NUMBER} (e.g., "projects/12345678") *
   * folders/{FOLDER_NUMBER} (e.g., "folders/1234567") *
   * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
   *
   * @param string $parent
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
  /**
   * Optional. Lists of signal types that are issues.
   *
   * @param SignalTypeGroup[] $signalTypeGroups
   */
  public function setSignalTypeGroups($signalTypeGroups)
  {
    $this->signalTypeGroups = $signalTypeGroups;
  }
  /**
   * @return SignalTypeGroup[]
   */
  public function getSignalTypeGroups()
  {
    return $this->signalTypeGroups;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregateIssueStatsRequest::class, 'Google_Service_DatabaseCenter_AggregateIssueStatsRequest');
