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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1PurgeMemoriesRequest extends \Google\Collection
{
  protected $collection_key = 'filterGroups';
  /**
   * Required. The standard list filter to determine which memories to purge.
   * More detail in [AIP-160](https://google.aip.dev/160).
   *
   * @var string
   */
  public $filter;
  protected $filterGroupsType = GoogleCloudAiplatformV1MemoryConjunctionFilter::class;
  protected $filterGroupsDataType = 'array';
  /**
   * Optional. If true, the memories will actually be purged. If false, the
   * purge request will be validated but not executed.
   *
   * @var bool
   */
  public $force;

  /**
   * Required. The standard list filter to determine which memories to purge.
   * More detail in [AIP-160](https://google.aip.dev/160).
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
   * Optional. Metadata filters that will be applied to the memories to be
   * purged. Filters are defined using disjunctive normal form (OR of ANDs). For
   * example: `filter_groups: [{filters: [{key: "author", value: {string_value:
   * "agent 123"}, op: EQUAL}]}, {filters: [{key: "label", value: {string_value:
   * "travel"}, op: EQUAL}, {key: "author", value: {string_value: "agent 321"},
   * op: EQUAL}]}]` would be equivalent to the logical expression:
   * `(metadata.author = "agent 123" OR (metadata.label = "travel" AND
   * metadata.author = "agent 321"))`.
   *
   * @param GoogleCloudAiplatformV1MemoryConjunctionFilter[] $filterGroups
   */
  public function setFilterGroups($filterGroups)
  {
    $this->filterGroups = $filterGroups;
  }
  /**
   * @return GoogleCloudAiplatformV1MemoryConjunctionFilter[]
   */
  public function getFilterGroups()
  {
    return $this->filterGroups;
  }
  /**
   * Optional. If true, the memories will actually be purged. If false, the
   * purge request will be validated but not executed.
   *
   * @param bool $force
   */
  public function setForce($force)
  {
    $this->force = $force;
  }
  /**
   * @return bool
   */
  public function getForce()
  {
    return $this->force;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1PurgeMemoriesRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1PurgeMemoriesRequest');
