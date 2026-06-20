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

namespace Google\Service\DatabaseCenter\Resource;

use Google\Service\DatabaseCenter\AggregateQueryStatsRequest;
use Google\Service\DatabaseCenter\AggregateQueryStatsResponse;

/**
 * The "organizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $databasecenterService = new Google\Service\DatabaseCenter(...);
 *   $organizations = $databasecenterService->organizations;
 *  </code>
 */
class Organizations extends \Google\Service\Resource
{
  /**
   * AggregateQueryStats provides database resource query execution statistics.
   * (organizations.aggregateQueryStats)
   *
   * @param string $parent Required. Parent can be a project, a folder, or an
   * organization. The search is limited to the resources within the `parent`. The
   * allowed values are: * projects/{PROJECT_ID} (e.g., "projects/foo-bar") *
   * projects/{PROJECT_NUMBER} (e.g., "projects/12345678") *
   * folders/{FOLDER_NUMBER} (e.g., "folders/1234567") *
   * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
   * @param AggregateQueryStatsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AggregateQueryStatsResponse
   * @throws \Google\Service\Exception
   */
  public function aggregateQueryStats($parent, AggregateQueryStatsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('aggregateQueryStats', [$params], AggregateQueryStatsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Organizations::class, 'Google_Service_DatabaseCenter_Resource_Organizations');
