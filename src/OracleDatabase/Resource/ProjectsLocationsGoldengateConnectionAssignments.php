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

namespace Google\Service\OracleDatabase\Resource;

use Google\Service\OracleDatabase\GoldengateConnectionAssignment;
use Google\Service\OracleDatabase\ListGoldengateConnectionAssignmentsResponse;
use Google\Service\OracleDatabase\Operation;
use Google\Service\OracleDatabase\TestGoldengateConnectionAssignmentRequest;
use Google\Service\OracleDatabase\TestGoldengateConnectionAssignmentResponse;

/**
 * The "goldengateConnectionAssignments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $oracledatabaseService = new Google\Service\OracleDatabase(...);
 *   $goldengateConnectionAssignments = $oracledatabaseService->projects_locations_goldengateConnectionAssignments;
 *  </code>
 */
class ProjectsLocationsGoldengateConnectionAssignments extends \Google\Service\Resource
{
  /**
   * Creates a new GoldengateConnectionAssignment in a given project and location.
   * (goldengateConnectionAssignments.create)
   *
   * @param string $parent Required. The parent resource where this
   * GoldengateConnectionAssignment will be created. Format:
   * projects/{project}/locations/{location}
   * @param GoldengateConnectionAssignment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string goldengateConnectionAssignmentId Required. The ID of the
   * GoldengateConnectionAssignment to create.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoldengateConnectionAssignment $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single GoldengateConnectionAssignment.
   * (goldengateConnectionAssignments.delete)
   *
   * @param string $name Required. The name of the GoldengateConnectionAssignment
   * to delete. Format: projects/{project}/locations/{location}/goldengateConnecti
   * onAssignments/{goldengate_connection_assignment}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes after the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
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
   * Gets details of a single GoldengateConnectionAssignment.
   * (goldengateConnectionAssignments.get)
   *
   * @param string $name Required. The name of the GoldengateConnectionAssignment
   * to retrieve. Format: projects/{project}/locations/{location}/goldengateConnec
   * tionAssignments/{goldengate_connection_assignment}
   * @param array $optParams Optional parameters.
   * @return GoldengateConnectionAssignment
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoldengateConnectionAssignment::class);
  }
  /**
   * Lists GoldengateConnectionAssignments in a given project and location. (golde
   * ngateConnectionAssignments.listProjectsLocationsGoldengateConnectionAssignmen
   * ts)
   *
   * @param string $parent Required. The parent value for the
   * GoldengateConnectionAssignments. Format:
   * projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that filters
   * GoldengateConnectionAssignments listed in the response.
   * @opt_param string orderBy Optional. A comma-separated list of fields to order
   * by, sorted in ascending order. Use "DESC" after a field name for descending.
   * @opt_param int pageSize Optional. The maximum number of
   * GoldengateConnectionAssignments to return. The service may return fewer than
   * this value. If unspecified, at most 50 GoldengateConnectionAssignments will
   * be returned. The maximum value is 1000; values above 1000 will be coerced to
   * 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListGoldengateConnectionAssignments` call. Provide this to retrieve the
   * subsequent page. When paginating, all other parameters provided to
   * `ListGoldengateConnectionAssignments` must match the call that provided the
   * page token.
   * @return ListGoldengateConnectionAssignmentsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsGoldengateConnectionAssignments($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListGoldengateConnectionAssignmentsResponse::class);
  }
  /**
   * Updates the `labels` of a single GoldengateConnectionAssignment.
   * (goldengateConnectionAssignments.patch)
   *
   * @param string $name Identifier. The name of the
   * GoldengateConnectionAssignment resource in the following format: projects/{pr
   * oject}/locations/{region}/goldengateConnectionAssignments/{goldengate_connect
   * ion_assignment}
   * @param GoldengateConnectionAssignment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional ID to identify the request.
   * This value is used to identify duplicate requests. If you make a request with
   * the same request ID and the original request is still in progress or
   * completed, the server ignores the second request. This prevents clients from
   * accidentally creating duplicate commitments. The request ID must be a valid
   * UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param string updateMask Optional. A mask specifying which fields in the
   * GoldengateConnectionAssignment should be updated. A field specified in the
   * mask is updated. If a mask isn't provided, the service treats this as an
   * implied field mask equivalent to all fields that are populated (have a non-
   * empty value). To clear or unset a field, the field must be explicitly
   * specified in the `update_mask`.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoldengateConnectionAssignment $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
  /**
   * Tests a single GoldengateConnectionAssignment.
   * (goldengateConnectionAssignments.test)
   *
   * @param string $name Required. Name of the connection assignment for which to
   * test connection. projects/{project}/locations/{region}/goldengateConnectionAs
   * signments/{goldengate_connection_assignment}
   * @param TestGoldengateConnectionAssignmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return TestGoldengateConnectionAssignmentResponse
   * @throws \Google\Service\Exception
   */
  public function test($name, TestGoldengateConnectionAssignmentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('test', [$params], TestGoldengateConnectionAssignmentResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsGoldengateConnectionAssignments::class, 'Google_Service_OracleDatabase_Resource_ProjectsLocationsGoldengateConnectionAssignments');
