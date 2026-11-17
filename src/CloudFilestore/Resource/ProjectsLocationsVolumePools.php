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

namespace Google\Service\CloudFilestore\Resource;

use Google\Service\CloudFilestore\ListVolumePoolsResponse;
use Google\Service\CloudFilestore\Operation;
use Google\Service\CloudFilestore\VolumePool;

/**
 * The "volumePools" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fileService = new Google\Service\CloudFilestore(...);
 *   $volumePools = $fileService->projects_locations_volumePools;
 *  </code>
 */
class ProjectsLocationsVolumePools extends \Google\Service\Resource
{
  /**
   * Creates a volume pool. (volumePools.create)
   *
   * @param string $parent Required. The project and location for which to create
   * the volume pool, in the format `projects/{project}/locations/{location}`.
   * @param VolumePool $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string volumePoolId Required. The ID to use for the volume pool,
   * which will become the final component of the volume pool's resource name.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, VolumePool $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a volume pool. (volumePools.delete)
   *
   * @param string $name Required. The volume pool resource name, in the format
   * `projects/{project}/locations/{location}/volumePools/{volume_pool}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to `true`, the volume pool is deleted
   * even if it has volumes, and its volumes are deleted with it. Otherwise, the
   * request fails if the volume pool has any volumes.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Gets the details of a specific volume pool. (volumePools.get)
   *
   * @param string $name Required. The volume pool resource name, in the format
   * `projects/{project}/locations/{location}/volumePools/{volume_pool}`.
   * @param array $optParams Optional parameters.
   * @return VolumePool
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], VolumePool::class);
  }
  /**
   * Lists all volume pools in a project for either a specified location or for
   * all locations. (volumePools.listProjectsLocationsVolumePools)
   *
   * @param string $parent Required. The project and location for which to
   * retrieve volume pool information, in the format
   * `projects/{project}/locations/{location}`. To retrieve volume pool
   * information for all locations, use "-" as the value of `{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. List filter.
   * @opt_param string orderBy Optional. Sort results. Supported values are
   * "name", "name desc" or "" (unsorted).
   * @opt_param int pageSize Optional. The maximum number of items to return.
   * @opt_param string pageToken Optional. The next_page_token value to use if
   * there are additional results to retrieve for this list request.
   * @return ListVolumePoolsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsVolumePools($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListVolumePoolsResponse::class);
  }
  /**
   * Updates the settings of a specific volume pool. (volumePools.patch)
   *
   * @param string $name Identifier. The resource name of the volume pool, in the
   * format `projects/{project}/locations/{location}/volumePools/{volume_pool}`.
   * @param VolumePool $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Mask of fields to update. At least one
   * path must be supplied in this field.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, VolumePool $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsVolumePools::class, 'Google_Service_CloudFilestore_Resource_ProjectsLocationsVolumePools');
