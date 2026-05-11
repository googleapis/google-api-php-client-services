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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchLimits extends \Google\Model
{
  /**
   * Optional. The maximum depth of the search. The default value is 5 and
   * maximum value is 100.
   *
   * @var int
   */
  public $maxDepth;
  /**
   * Optional. The maximum number of processes to return per link. The default
   * value is 0 and the maximum value is 100. If this value is non-zero, the
   * response will contain process names for the links. To retrieve full process
   * details in the response, include `links.processes.process` in the
   * [FieldMask](https://developers.google.com/workspace/docs/api/how-tos/field-
   * masks#read_with_a_field_mask).
   *
   * @var int
   */
  public $maxProcessPerLink;
  /**
   * Optional. The maximum number of links to return in the response. The
   * default value is 1_000 and the maximum value is 10_000.
   *
   * @var int
   */
  public $maxResults;

  /**
   * Optional. The maximum depth of the search. The default value is 5 and
   * maximum value is 100.
   *
   * @param int $maxDepth
   */
  public function setMaxDepth($maxDepth)
  {
    $this->maxDepth = $maxDepth;
  }
  /**
   * @return int
   */
  public function getMaxDepth()
  {
    return $this->maxDepth;
  }
  /**
   * Optional. The maximum number of processes to return per link. The default
   * value is 0 and the maximum value is 100. If this value is non-zero, the
   * response will contain process names for the links. To retrieve full process
   * details in the response, include `links.processes.process` in the
   * [FieldMask](https://developers.google.com/workspace/docs/api/how-tos/field-
   * masks#read_with_a_field_mask).
   *
   * @param int $maxProcessPerLink
   */
  public function setMaxProcessPerLink($maxProcessPerLink)
  {
    $this->maxProcessPerLink = $maxProcessPerLink;
  }
  /**
   * @return int
   */
  public function getMaxProcessPerLink()
  {
    return $this->maxProcessPerLink;
  }
  /**
   * Optional. The maximum number of links to return in the response. The
   * default value is 1_000 and the maximum value is 10_000.
   *
   * @param int $maxResults
   */
  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }
  /**
   * @return int
   */
  public function getMaxResults()
  {
    return $this->maxResults;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchLimits::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchLimits');
