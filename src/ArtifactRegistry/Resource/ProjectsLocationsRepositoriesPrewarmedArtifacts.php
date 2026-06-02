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

namespace Google\Service\ArtifactRegistry\Resource;

use Google\Service\ArtifactRegistry\ListPrewarmedArtifactsResponse;

/**
 * The "prewarmedArtifacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $artifactregistryService = new Google\Service\ArtifactRegistry(...);
 *   $prewarmedArtifacts = $artifactregistryService->projects_locations_repositories_prewarmedArtifacts;
 *  </code>
 */
class ProjectsLocationsRepositoriesPrewarmedArtifacts extends \Google\Service\Resource
{
  /**
   * Lists all streamed artifacts in a repository.
   * (prewarmedArtifacts.listProjectsLocationsRepositoriesPrewarmedArtifacts)
   *
   * @param string $parent Required. The repository of the artifact to list.
   * Format: projects/{project}/locations/{location}/repositories/{repository}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter should only support The location of
   * the prewarmed artifacts. multi-region is not supported for this field.
   * @opt_param int pageSize Optional. The maximum number of prewarmed artifacts
   * to return. Maximum page size is 1,000. Default page size is 100.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list request, if any.
   * @return ListPrewarmedArtifactsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsRepositoriesPrewarmedArtifacts($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListPrewarmedArtifactsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsRepositoriesPrewarmedArtifacts::class, 'Google_Service_ArtifactRegistry_Resource_ProjectsLocationsRepositoriesPrewarmedArtifacts');
