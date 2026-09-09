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

namespace Google\Service\Compute\Resource;

use Google\Service\Compute\ProjectView;

/**
 * The "projectViews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google\Service\Compute(...);
 *   $projectViews = $computeService->projectViews;
 *  </code>
 */
class ProjectViews extends \Google\Service\Resource
{
  /**
   * Returns the specified global ProjectViews resource, with a regional context.
   * This regional API endpoint reads resource metadata from regional read-only
   * replicas. Because changes are copied to these regional replicas
   * asynchronously, for real-time resource reads or any write operations
   * (creating, updating, or deleting resources), use the global [projects.get](ht
   * tps://cloud.google.com/compute/docs/reference/rest/v1/projects/get) endpoint.
   * (projectViews.get)
   *
   * @param string $project Required. Project ID for this request. This is part of
   * the URL path.
   * @param string $region Required. Name of the region for this request. This is
   * part of the URL path.
   * @param array $optParams Optional parameters.
   * @return ProjectView
   * @throws \Google\Service\Exception
   */
  public function get($project, $region, $optParams = [])
  {
    $params = ['project' => $project, 'region' => $region];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], ProjectView::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectViews::class, 'Google_Service_Compute_Resource_ProjectViews');
