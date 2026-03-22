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

namespace Google\Service\NetAppFiles\Resource;

use Google\Service\NetAppFiles\ExecuteOntapDeleteResponse;
use Google\Service\NetAppFiles\ExecuteOntapGetResponse;
use Google\Service\NetAppFiles\ExecuteOntapPatchRequest;
use Google\Service\NetAppFiles\ExecuteOntapPatchResponse;
use Google\Service\NetAppFiles\ExecuteOntapPostRequest;
use Google\Service\NetAppFiles\ExecuteOntapPostResponse;

/**
 * The "ontap" collection of methods.
 * Typical usage is:
 *  <code>
 *   $netappService = new Google\Service\NetAppFiles(...);
 *   $ontap = $netappService->projects_locations_storagePools_ontap;
 *  </code>
 */
class ProjectsLocationsStoragePoolsOntap extends \Google\Service\Resource
{
  /**
   * `ExecuteOntapDelete` dispatches the ONTAP `DELETE` request to the
   * `StoragePool` cluster. (ontap.executeOntapDelete)
   *
   * @param string $ontapPath Required. The resource path of the ONTAP resource.
   * Format: `projects/{project_number}/locations/{location_id}/storagePools/{stor
   * age_pool_id}/ontap/{ontap_resource_path}`. For example:
   * `projects/123456789/locations/us-central1/storagePools/my-storage-
   * pool/ontap/api/storage/volumes`.
   * @param array $optParams Optional parameters.
   * @return ExecuteOntapDeleteResponse
   * @throws \Google\Service\Exception
   */
  public function executeOntapDelete($ontapPath, $optParams = [])
  {
    $params = ['ontapPath' => $ontapPath];
    $params = array_merge($params, $optParams);
    return $this->call('executeOntapDelete', [$params], ExecuteOntapDeleteResponse::class);
  }
  /**
   * `ExecuteOntapGet` dispatches the ONTAP `GET` request to the `StoragePool`
   * cluster. (ontap.executeOntapGet)
   *
   * @param string $ontapPath Required. The resource path of the ONTAP resource.
   * Format: `projects/{project_number}/locations/{location_id}/storagePools/{stor
   * age_pool_id}/ontap/{ontap_resource_path}`. For example:
   * `projects/123456789/locations/us-central1/storagePools/my-storage-
   * pool/ontap/api/storage/volumes`.
   * @param array $optParams Optional parameters.
   * @return ExecuteOntapGetResponse
   * @throws \Google\Service\Exception
   */
  public function executeOntapGet($ontapPath, $optParams = [])
  {
    $params = ['ontapPath' => $ontapPath];
    $params = array_merge($params, $optParams);
    return $this->call('executeOntapGet', [$params], ExecuteOntapGetResponse::class);
  }
  /**
   * `ExecuteOntapPatch` dispatches the ONTAP `PATCH` request to the `StoragePool`
   * cluster. (ontap.executeOntapPatch)
   *
   * @param string $ontapPath Required. The resource path of the ONTAP resource.
   * Format: `projects/{project_number}/locations/{location_id}/storagePools/{stor
   * age_pool_id}/ontap/{ontap_resource_path}`. For example:
   * `projects/123456789/locations/us-central1/storagePools/my-storage-
   * pool/ontap/api/storage/volumes`.
   * @param ExecuteOntapPatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ExecuteOntapPatchResponse
   * @throws \Google\Service\Exception
   */
  public function executeOntapPatch($ontapPath, ExecuteOntapPatchRequest $postBody, $optParams = [])
  {
    $params = ['ontapPath' => $ontapPath, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('executeOntapPatch', [$params], ExecuteOntapPatchResponse::class);
  }
  /**
   * `ExecuteOntapPost` dispatches the ONTAP `POST` request to the `StoragePool`
   * cluster. (ontap.executeOntapPost)
   *
   * @param string $ontapPath Required. The resource path of the ONTAP resource.
   * Format: `projects/{project_number}/locations/{location_id}/storagePools/{stor
   * age_pool_id}/ontap/{ontap_resource_path}`. For example:
   * `projects/123456789/locations/us-central1/storagePools/my-storage-
   * pool/ontap/api/storage/volumes`.
   * @param ExecuteOntapPostRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ExecuteOntapPostResponse
   * @throws \Google\Service\Exception
   */
  public function executeOntapPost($ontapPath, ExecuteOntapPostRequest $postBody, $optParams = [])
  {
    $params = ['ontapPath' => $ontapPath, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('executeOntapPost', [$params], ExecuteOntapPostResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsStoragePoolsOntap::class, 'Google_Service_NetAppFiles_Resource_ProjectsLocationsStoragePoolsOntap');
