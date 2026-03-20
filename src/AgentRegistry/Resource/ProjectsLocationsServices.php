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

namespace Google\Service\AgentRegistry\Resource;

use Google\Service\AgentRegistry\ListServicesResponse;
use Google\Service\AgentRegistry\Operation;
use Google\Service\AgentRegistry\Service;

/**
 * The "services" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentregistryService = new Google\Service\AgentRegistry(...);
 *   $services = $agentregistryService->projects_locations_services;
 *  </code>
 */
class ProjectsLocationsServices extends \Google\Service\Resource
{
  /**
   * Creates a new Service in a given project and location. (services.create)
   *
   * @param string $parent Required. The project and location to create the
   * Service in. Expected format: `projects/{project}/locations/{location}`.
   * @param Service $postBody
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
   * @opt_param string serviceId Required. The ID to use for the service, which
   * will become the final component of the service's resource name. This value
   * should be 4-63 characters, and valid characters are `/a-z-/`.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Service $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single Service. (services.delete)
   *
   * @param string $name Required. The name of the Service. Format:
   * `projects/{project}/locations/{location}/services/{service}`.
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
   * Gets details of a single Service. (services.get)
   *
   * @param string $name Required. The name of the Service. Format:
   * `projects/{project}/locations/{location}/services/{service}`.
   * @param array $optParams Optional parameters.
   * @return Service
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Service::class);
  }
  /**
   * Lists Services in a given project and location.
   * (services.listProjectsLocationsServices)
   *
   * @param string $parent Required. The project and location to list services in.
   * Expected format: `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A query string used to filter the list of
   * services returned. The filter expression must follow AIP-160 syntax.
   * Filtering is supported on the `name`, `display_name`, `description`, and
   * `labels` fields. Some examples: * `name =
   * "projects/p1/locations/l1/services/s1"` * `display_name = "my-service"` *
   * `description : "myservice description"` * `labels.env = "prod"`
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListServicesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsServices($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListServicesResponse::class);
  }
  /**
   * Updates the parameters of a single Service. (services.patch)
   *
   * @param string $name Identifier. The resource name of the Service. Format:
   * `projects/{project}/locations/{location}/services/{service}`.
   * @param Service $postBody
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
   * fields to be overwritten in the Service resource by the update. The fields
   * specified in the update_mask are relative to the resource, not the full
   * request. A field will be overwritten if it is in the mask. If the user does
   * not provide a mask then all fields present in the request will be
   * overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, Service $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsServices::class, 'Google_Service_AgentRegistry_Resource_ProjectsLocationsServices');
