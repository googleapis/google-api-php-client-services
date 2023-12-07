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

namespace Google\Service\CloudDeploy\Resource;

use Google\Service\CloudDeploy\CustomTargetType;
use Google\Service\CloudDeploy\ListCustomTargetTypesResponse;
use Google\Service\CloudDeploy\Operation;

/**
 * The "customTargetTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $clouddeployService = new Google\Service\CloudDeploy(...);
 *   $customTargetTypes = $clouddeployService->projects_locations_customTargetTypes;
 *  </code>
 */
class ProjectsLocationsCustomTargetTypes extends \Google\Service\Resource
{
  /**
   * Creates a new CustomTargetType in a given project and location.
   * (customTargetTypes.create)
   *
   * @param string $parent Required. The parent collection in which the
   * `CustomTargetType` should be created in. Format should be
   * `projects/{project_id}/locations/{location_name}`.
   * @param CustomTargetType $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customTargetTypeId Required. ID of the `CustomTargetType`.
   * @opt_param string requestId Optional. A request ID to identify requests.
   * Specify a unique request ID so that if you must retry your request, the
   * server will know to ignore the request if it has already been completed. The
   * server will guarantee that for at least 60 minutes since the first request.
   * For example, consider a situation where you make an initial request and the
   * request times out. If you make the request again with the same request ID,
   * the server can check if original operation with the same request ID was
   * received, and if so, will ignore the second request. This prevents clients
   * from accidentally creating duplicate commitments. The request ID must be a
   * valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param bool validateOnly Optional. If set to true, the request is
   * validated and the user is provided with an expected result, but no actual
   * change is made.
   * @return Operation
   */
  public function create($parent, CustomTargetType $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single CustomTargetType. (customTargetTypes.delete)
   *
   * @param string $name Required. The name of the `CustomTargetType` to delete.
   * Format must be `projects/{project_id}/locations/{location_name}/customTargetT
   * ypes/{custom_target_type}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If set to true, then deleting an
   * already deleted or non-existing `CustomTargetType` will succeed.
   * @opt_param string etag Optional. This checksum is computed by the server
   * based on the value of other fields, and may be sent on update and delete
   * requests to ensure the client has an up-to-date value before proceeding.
   * @opt_param string requestId Optional. A request ID to identify requests.
   * Specify a unique request ID so that if you must retry your request, the
   * server will know to ignore the request if it has already been completed. The
   * server will guarantee that for at least 60 minutes after the first request.
   * For example, consider a situation where you make an initial request and the
   * request times out. If you make the request again with the same request ID,
   * the server can check if original operation with the same request ID was
   * received, and if so, will ignore the second request. This prevents clients
   * from accidentally creating duplicate commitments. The request ID must be a
   * valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param bool validateOnly Optional. If set to true, the request is
   * validated but no actual change is made.
   * @return Operation
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Gets details of a single CustomTargetType. (customTargetTypes.get)
   *
   * @param string $name Required. Name of the `CustomTargetType`. Format must be
   * `projects/{project_id}/locations/{location_name}/customTargetTypes/{custom_ta
   * rget_type}`.
   * @param array $optParams Optional parameters.
   * @return CustomTargetType
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], CustomTargetType::class);
  }
  /**
   * Lists CustomTargetTypes in a given project and location.
   * (customTargetTypes.listProjectsLocationsCustomTargetTypes)
   *
   * @param string $parent Required. The parent that owns this collection of
   * custom target types. Format must be
   * `projects/{project_id}/locations/{location_name}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter custom target types to be returned.
   * See https://google.aip.dev/160 for more details.
   * @opt_param string orderBy Optional. Field to sort by. See
   * https://google.aip.dev/132#ordering for more details.
   * @opt_param int pageSize Optional. The maximum number of `CustomTargetType`
   * objects to return. The service may return fewer than this value. If
   * unspecified, at most 50 `CustomTargetType` objects will be returned. The
   * maximum value is 1000; values above 1000 will be set to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListCustomTargetTypes` call. Provide this to retrieve the subsequent page.
   * When paginating, all other provided parameters match the call that provided
   * the page token.
   * @return ListCustomTargetTypesResponse
   */
  public function listProjectsLocationsCustomTargetTypes($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListCustomTargetTypesResponse::class);
  }
  /**
   * Updates a single CustomTargetType. (customTargetTypes.patch)
   *
   * @param string $name Optional. Name of the `CustomTargetType`. Format is
   * `projects/{project}/locations/{location}/customTargetTypes/a-z{0,62}`.
   * @param CustomTargetType $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If set to true, updating a
   * `CustomTargetType` that does not exist will result in the creation of a new
   * `CustomTargetType`.
   * @opt_param string requestId Optional. A request ID to identify requests.
   * Specify a unique request ID so that if you must retry your request, the
   * server will know to ignore the request if it has already been completed. The
   * server will guarantee that for at least 60 minutes since the first request.
   * For example, consider a situation where you make an initial request and the
   * request times out. If you make the request again with the same request ID,
   * the server can check if original operation with the same request ID was
   * received, and if so, will ignore the second request. This prevents clients
   * from accidentally creating duplicate commitments. The request ID must be a
   * valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param string updateMask Required. Field mask is used to specify the
   * fields to be overwritten in the `CustomTargetType` resource by the update.
   * The fields specified in the update_mask are relative to the resource, not the
   * full request. A field will be overwritten if it is in the mask. If the user
   * does not provide a mask then all fields will be overwritten.
   * @opt_param bool validateOnly Optional. If set to true, the request is
   * validated and the user is provided with an expected result, but no actual
   * change is made.
   * @return Operation
   */
  public function patch($name, CustomTargetType $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCustomTargetTypes::class, 'Google_Service_CloudDeploy_Resource_ProjectsLocationsCustomTargetTypes');
