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

namespace Google\Service\AccessContextManager\Resource;

use Google\Service\AccessContextManager\LookupConfiguredServicePerimeterResponse;

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $accesscontextmanagerService = new Google\Service\AccessContextManager(...);
 *   $projects = $accesscontextmanagerService->projects;
 *  </code>
 */
class Projects extends \Google\Service\Resource
{
  /**
   * Looks up the configured ServicePerimeter for a given resource.
   * (projects.lookupConfiguredServicePerimeter)
   *
   * @param string $resource Required. The resource name. Format:
   * `projects/{project_number}` or `folders/{folder_number}` (for example,
   * `projects/123` or `folders/456`)
   * @param array $optParams Optional parameters.
   * @return LookupConfiguredServicePerimeterResponse
   * @throws \Google\Service\Exception
   */
  public function lookupConfiguredServicePerimeter($resource, $optParams = [])
  {
    $params = ['resource' => $resource];
    $params = array_merge($params, $optParams);
    return $this->call('lookupConfiguredServicePerimeter', [$params], LookupConfiguredServicePerimeterResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Projects::class, 'Google_Service_AccessContextManager_Resource_Projects');
