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

class AggregateQueryStatsRequest extends \Google\Model
{
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
   * east1"` Additional specific fields for query stats are: `metric_window`,
   * `query_hash`, `normalized_query`. Example: `metric_window="LAST_ONE_DAY"`
   * (Possible values for `metric_window` are: `LAST_ONE_DAY`, `LAST_ONE_WEEK`,
   * `LAST_TWO_WEEKS`) Example: `query_hash="12345678"` Example:
   * `normalized_query="SELECT * FROM table"`
   *
   * @var string
   */
  public $filter;
  /**
   * Optional. The expression to order the results by. Example:
   * `order_by="execution_count"` Example: `order_by="execution_count desc"`
   * Supported order by fields are `execution_count`, `rows_processed`,
   * `total_cpu_time`, `avg_cpu_time`.
   *
   * @var string
   */
  public $orderBy;
  /**
   * Optional. If unspecified, at most 100 query stats will be returned. The
   * maximum value is 1000; values above 1000 will be coerced to 1000.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Optional. A page token, received from a previous
   * `AggregateQueryStatsRequest` call. Provide this to retrieve the subsequent
   * page. All parameters except page_token should match the parameters in the
   * call that provided the page token.
   *
   * @var string
   */
  public $pageToken;

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
   * east1"` Additional specific fields for query stats are: `metric_window`,
   * `query_hash`, `normalized_query`. Example: `metric_window="LAST_ONE_DAY"`
   * (Possible values for `metric_window` are: `LAST_ONE_DAY`, `LAST_ONE_WEEK`,
   * `LAST_TWO_WEEKS`) Example: `query_hash="12345678"` Example:
   * `normalized_query="SELECT * FROM table"`
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
   * Optional. The expression to order the results by. Example:
   * `order_by="execution_count"` Example: `order_by="execution_count desc"`
   * Supported order by fields are `execution_count`, `rows_processed`,
   * `total_cpu_time`, `avg_cpu_time`.
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
   * Optional. If unspecified, at most 100 query stats will be returned. The
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
   * `AggregateQueryStatsRequest` call. Provide this to retrieve the subsequent
   * page. All parameters except page_token should match the parameters in the
   * call that provided the page token.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AggregateQueryStatsRequest::class, 'Google_Service_DatabaseCenter_AggregateQueryStatsRequest');
