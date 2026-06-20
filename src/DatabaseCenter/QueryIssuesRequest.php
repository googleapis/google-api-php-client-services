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

class QueryIssuesRequest extends \Google\Collection
{
  protected $collection_key = 'signalProductsFilters';
  /**
   * Optional. Supported fields are: 'product', `location`, `issue_severity`,
   * 'tags', 'labels',
   *
   * @var string
   */
  public $filter;
  /**
   * Optional. Following fields are sortable: SignalType Product Location
   * IssueSeverity The default order is ascending. Add "DESC" after the field
   * name to indicate descending order. Add "ASC" after the field name to
   * indicate ascending order. It only supports a single field at a time.
   *
   * @var string
   */
  public $orderBy;
  /**
   * Optional. If unspecified, at most 50 issues will be returned. The maximum
   * value is 1000; values above 1000 will be coerced to 1000.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Optional. A page token, received from a previous `QueryIssues` call.
   * Provide this to retrieve the subsequent page. All parameters except page
   * size should match the parameters used in the call that provided the page
   * token.
   *
   * @var string
   */
  public $pageToken;
  /**
   * Required. Parent can be a project, a folder, or an organization. The list
   * is limited to the one attached to resources within the `scope` that a user
   * has access to. The allowed values are: * projects/{PROJECT_ID} (e.g.,
   * "projects/foo-bar") * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
   * * folders/{FOLDER_NUMBER} (e.g., "folders/1234567") *
   * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
   *
   * @var string
   */
  public $parent;
  protected $signalProductsFiltersType = SignalProductsFilters::class;
  protected $signalProductsFiltersDataType = 'array';

  /**
   * Optional. Supported fields are: 'product', `location`, `issue_severity`,
   * 'tags', 'labels',
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
   * Optional. Following fields are sortable: SignalType Product Location
   * IssueSeverity The default order is ascending. Add "DESC" after the field
   * name to indicate descending order. Add "ASC" after the field name to
   * indicate ascending order. It only supports a single field at a time.
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
   * Optional. If unspecified, at most 50 issues will be returned. The maximum
   * value is 1000; values above 1000 will be coerced to 1000.
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
   * Optional. A page token, received from a previous `QueryIssues` call.
   * Provide this to retrieve the subsequent page. All parameters except page
   * size should match the parameters used in the call that provided the page
   * token.
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
   * Required. Parent can be a project, a folder, or an organization. The list
   * is limited to the one attached to resources within the `scope` that a user
   * has access to. The allowed values are: * projects/{PROJECT_ID} (e.g.,
   * "projects/foo-bar") * projects/{PROJECT_NUMBER} (e.g., "projects/12345678")
   * * folders/{FOLDER_NUMBER} (e.g., "folders/1234567") *
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
   * Optional. Filters based on signal and product. The filter list will be ORed
   * across pairs and ANDed within a signal and products pair.
   *
   * @param SignalProductsFilters[] $signalProductsFilters
   */
  public function setSignalProductsFilters($signalProductsFilters)
  {
    $this->signalProductsFilters = $signalProductsFilters;
  }
  /**
   * @return SignalProductsFilters[]
   */
  public function getSignalProductsFilters()
  {
    return $this->signalProductsFilters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryIssuesRequest::class, 'Google_Service_DatabaseCenter_QueryIssuesRequest');
