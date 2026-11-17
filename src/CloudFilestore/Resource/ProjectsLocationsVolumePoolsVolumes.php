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

use Google\Service\CloudFilestore\CreateFromSourceRequest;
use Google\Service\CloudFilestore\FileEmpty;
use Google\Service\CloudFilestore\ListVolumesResponse;
use Google\Service\CloudFilestore\Operation;
use Google\Service\CloudFilestore\UnfreezeVolumeRequest;
use Google\Service\CloudFilestore\Volume;

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fileService = new Google\Service\CloudFilestore(...);
 *   $volumes = $fileService->projects_locations_volumePools_volumes;
 *  </code>
 */
class ProjectsLocationsVolumePoolsVolumes extends \Google\Service\Resource
{
  /**
   * Creates a volume. (volumes.create)
   *
   * @param string $parent Required. The parent volume pool path, in the format
   * `projects/{project}/locations/{location}/volumePools/{volume_pool}`.
   * @param Volume $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string volumeId Required. The ID to use for the volume. The ID
   * must be unique within the specified volume pool.
   * @return Volume
   * @throws \Google\Service\Exception
   */
  public function create($parent, Volume $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Volume::class);
  }
  /**
   * Creates a volume in a volume pool from an existing data source (such as a
   * Filestore backup). (volumes.createFromSource)
   *
   * @param string $parent Required. The parent resource where this volume will be
   * created. Format:
   * projects/{project}/locations/{location}/volumePools/{volume_pool}
   * @param CreateFromSourceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function createFromSource($parent, CreateFromSourceRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('createFromSource', [$params], Operation::class);
  }
  /**
   * Deletes a volume. (volumes.delete)
   *
   * @param string $name Required. The volume resource name, in the format `projec
   * ts/{project}/locations/{location}/volumePools/{volume_pool}/volumes/{volume}`
   * .
   * @param array $optParams Optional parameters.
   * @return FileEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], FileEmpty::class);
  }
  /**
   * Gets the details of a specific volume. (volumes.get)
   *
   * @param string $name Required. The volume resource name, in the format `projec
   * ts/{project}/locations/{location}/volumePools/{volume_pool}/volumes/{volume}`
   * .
   * @param array $optParams Optional parameters.
   * @return Volume
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Volume::class);
  }
  /**
   * Lists all volumes for a specified volume pool.
   * (volumes.listProjectsLocationsVolumePoolsVolumes)
   *
   * @param string $parent Required. The volume pool for which to retrieve volume
   * information, in the format
   * `projects/{project}/locations/{location}/volumePools/{volume_pool}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. List filter.
   * @opt_param string orderBy Optional. Sort results. Supported values are
   * "name", "name desc" or "" (unsorted).
   * @opt_param int pageSize Optional. The maximum number of items to return.
   * @opt_param string pageToken Optional. The next_page_token value to use if
   * there are additional results to retrieve for this list request.
   * @return ListVolumesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsVolumePoolsVolumes($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListVolumesResponse::class);
  }
  /**
   * Updates the settings of a specific volume. (volumes.patch)
   *
   * @param string $name Identifier. The resource name of the volume, in the
   * format `projects/{project}/locations/{location}/volumePools/{volume_pool}/vol
   * umes/{volume}`.
   * @param Volume $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. Mask of fields to update. At least one
   * path must be supplied in this field.
   * @return Volume
   * @throws \Google\Service\Exception
   */
  public function patch($name, Volume $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Volume::class);
  }
  /**
   * Unfreezes a volume. (volumes.unfreeze)
   *
   * @param string $name Required. The name of the volume to unfreeze. Format: `pr
   * ojects/{project}/locations/{location}/volumePools/{volume_pool}/volumes/{volu
   * me}`.
   * @param UnfreezeVolumeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function unfreeze($name, UnfreezeVolumeRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('unfreeze', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsVolumePoolsVolumes::class, 'Google_Service_CloudFilestore_Resource_ProjectsLocationsVolumePoolsVolumes');
