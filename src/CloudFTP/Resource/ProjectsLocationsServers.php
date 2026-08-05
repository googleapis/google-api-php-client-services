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

namespace Google\Service\CloudFTP\Resource;

use Google\Service\CloudFTP\ListServersResponse;
use Google\Service\CloudFTP\Operation;
use Google\Service\CloudFTP\Server;
use Google\Service\CloudFTP\StartServerRequest;
use Google\Service\CloudFTP\StopServerRequest;

/**
 * The "servers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ftpService = new Google\Service\CloudFTP(...);
 *   $servers = $ftpService->projects_locations_servers;
 *  </code>
 */
class ProjectsLocationsServers extends \Google\Service\Resource
{
  /**
   * Creates a new Server in a given project and location. (servers.create)
   *
   * @param string $parent Required. Value for parent.
   * @param Server $postBody
   * @param array $optParams Optional parameters.
   *
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
   * @opt_param string serverId Required. Id of the requesting object If auto-
   * generating Id server-side, remove this field and server_id from the
   * method_signature of Create RPC
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Server $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single Server. (servers.delete)
   *
   * @param string $name Required. Name of the resource
   * @param array $optParams Optional parameters.
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
   * Gets details of a single Server. (servers.get)
   *
   * @param string $name Required. Name of the resource
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. The view of the Server resource to return.
   * @return Server
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Server::class);
  }
  /**
   * Lists Servers in a given project and location.
   * (servers.listProjectsLocationsServers)
   *
   * @param string $parent Required. Parent value for ListServersRequest
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filtering results
   * @opt_param string orderBy Optional. Hint for how to order the results
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @opt_param string view Optional. The view of the Server resource to return.
   * @return ListServersResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsServers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListServersResponse::class);
  }
  /**
   * Updates the parameters of a single Server. (servers.patch)
   *
   * @param string $name Identifier. name of resource
   * @param Server $postBody
   * @param array $optParams Optional parameters.
   *
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
   * @opt_param string updateMask Optional. Field mask is used to specify the
   * fields to be overwritten in the Server resource by the update. The fields
   * specified in the update_mask are relative to the resource, not the full
   * request. A field will be overwritten if it is in the mask. If the user does
   * not provide a mask then all fields present in the request will be
   * overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, Server $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
  /**
   * Starts a stopping/stopped Server. (servers.start)
   *
   * @param string $name Required. Name of the resource Format:
   * `projects/{project}/locations/{location}/servers/{server}`
   * @param StartServerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function start($name, StartServerRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('start', [$params], Operation::class);
  }
  /**
   * Stops an active Server. (servers.stop)
   *
   * @param string $name Required. Name of the resource. Format:
   * `projects/{project}/locations/{location}/servers/{server}`
   * @param StopServerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function stop($name, StopServerRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('stop', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsServers::class, 'Google_Service_CloudFTP_Resource_ProjectsLocationsServers');
