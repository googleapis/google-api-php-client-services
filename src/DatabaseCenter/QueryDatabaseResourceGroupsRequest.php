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

class QueryDatabaseResourceGroupsRequest extends \Google\Collection
{
  protected $collection_key = 'signalTypeGroups';
  /**
   * Optional. The expression to filter resources. The following fields are
   * filterable: * full_resource_name * resource_type * container * product.type
   * * product.engine * product.version * location * labels * resource_category
   * * machine_config.cpu_count * machine_config.memory_size_bytes *
   * machine_config.shard_count * resource_name * tags *
   * backupdr_config.backupdr_managed * edition The expression is a list of zero
   * or more restrictions combined via logical operators `AND` and `OR`. When
   * `AND` and `OR` are both used in the expression, parentheses must be
   * appropriately used to group the combinations. Example: `location="us-
   * east1"` Example: `container="projects/123" OR container="projects/456"`
   * Example: `(container="projects/123" OR container="projects/456") AND
   * location="us-east1"` Example: `full_resource_name=~"test"` Example:
   * `full_resource_name=~"test.*master"`
   *
   * @var string
   */
  public $filter;
  /**
   * Optional. A field that specifies the sort order of the results. The
   * following fields are sortable: * full_resource_name * product.type *
   * product.engine * product.version * container * issue_count *
   * machine_config.vcpu_count * machine_config.memory_size_bytes *
   * machine_config.shard_count * resource_name * issue_severity * signal_type *
   * location * resource_type * instance_type * edition *
   * metrics.p99_cpu_utilization * metrics.p95_cpu_utilization *
   * metrics.current_storage_used_bytes * metrics.node_count *
   * metrics.processing_unit_count * metrics.current_memory_used_bytes *
   * metrics.peak_storage_utilization * metrics.peak_number_connections *
   * metrics.peak_memory_utilization The default order is ascending. Add "DESC"
   * after the field name to indicate descending order. Add "ASC" after the
   * field name to indicate ascending order. It only supports a single field at
   * a time. For example: `order_by = "full_resource_name"` sorts response in
   * ascending order `order_by = "full_resource_name DESC"` sorts response in
   * descending order `order_by = "issue_count DESC"` sorts response in
   * descending order of count of all issues associated with a resource. More
   * explicitly, `order_by = "full_resource_name, product"` is not supported.
   *
   * @var string
   */
  public $orderBy;
  /**
   * Optional. If unspecified, at most 50 resource groups will be returned. The
   * maximum value is 1000; values above 1000 will be coerced to 1000.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Optional. A page token, received from a previous
   * `QueryDatabaseResourceGroupsRequest` call. Provide this to retrieve the
   * subsequent page. All parameters except page_token should match the
   * parameters in the call that provided the page page token.
   *
   * @var string
   */
  public $pageToken;
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
  protected $signalFiltersType = SignalFilter::class;
  protected $signalFiltersDataType = 'array';
  protected $signalTypeGroupsType = SignalTypeGroup::class;
  protected $signalTypeGroupsDataType = 'array';

  /**
   * Optional. The expression to filter resources. The following fields are
   * filterable: * full_resource_name * resource_type * container * product.type
   * * product.engine * product.version * location * labels * resource_category
   * * machine_config.cpu_count * machine_config.memory_size_bytes *
   * machine_config.shard_count * resource_name * tags *
   * backupdr_config.backupdr_managed * edition The expression is a list of zero
   * or more restrictions combined via logical operators `AND` and `OR`. When
   * `AND` and `OR` are both used in the expression, parentheses must be
   * appropriately used to group the combinations. Example: `location="us-
   * east1"` Example: `container="projects/123" OR container="projects/456"`
   * Example: `(container="projects/123" OR container="projects/456") AND
   * location="us-east1"` Example: `full_resource_name=~"test"` Example:
   * `full_resource_name=~"test.*master"`
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
   * Optional. A field that specifies the sort order of the results. The
   * following fields are sortable: * full_resource_name * product.type *
   * product.engine * product.version * container * issue_count *
   * machine_config.vcpu_count * machine_config.memory_size_bytes *
   * machine_config.shard_count * resource_name * issue_severity * signal_type *
   * location * resource_type * instance_type * edition *
   * metrics.p99_cpu_utilization * metrics.p95_cpu_utilization *
   * metrics.current_storage_used_bytes * metrics.node_count *
   * metrics.processing_unit_count * metrics.current_memory_used_bytes *
   * metrics.peak_storage_utilization * metrics.peak_number_connections *
   * metrics.peak_memory_utilization The default order is ascending. Add "DESC"
   * after the field name to indicate descending order. Add "ASC" after the
   * field name to indicate ascending order. It only supports a single field at
   * a time. For example: `order_by = "full_resource_name"` sorts response in
   * ascending order `order_by = "full_resource_name DESC"` sorts response in
   * descending order `order_by = "issue_count DESC"` sorts response in
   * descending order of count of all issues associated with a resource. More
   * explicitly, `order_by = "full_resource_name, product"` is not supported.
   *
   * @param string $orderBy
   */
  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }
  /**
   * @return string
   */
  public function getOrderBy()
  {
    return $this->orderBy;
  }
  /**
   * Optional. If unspecified, at most 50 resource groups will be returned. The
   * maximum value is 1000; values above 1000 will be coerced to 1000.
   *
   * @param int $pageSize
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * Optional. A page token, received from a previous
   * `QueryDatabaseResourceGroupsRequest` call. Provide this to retrieve the
   * subsequent page. All parameters except page_token should match the
   * parameters in the call that provided the page page token.
   *
   * @param string $pageToken
   */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /**
   * @return string
   */
  public function getPageToken()
  {
    return $this->pageToken;
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
   * Optional. Filters based on signals. The list will be ORed together and then
   * ANDed with the `filters` field above.
   *
   * @param SignalFilter[] $signalFilters
   */
  public function setSignalFilters($signalFilters)
  {
    $this->signalFilters = $signalFilters;
  }
  /**
   * @return SignalFilter[]
   */
  public function getSignalFilters()
  {
    return $this->signalFilters;
  }
  /**
   * Optional. Groups of signal types that are requested.
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
class_alias(QueryDatabaseResourceGroupsRequest::class, 'Google_Service_DatabaseCenter_QueryDatabaseResourceGroupsRequest');
