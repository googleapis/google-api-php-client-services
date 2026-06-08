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

namespace Google\Service\NetworkServices\Resource;

use Google\Service\NetworkServices\ListMulticastGroupConsumerActivationsResponse;
use Google\Service\NetworkServices\MulticastGroupConsumerActivation;
use Google\Service\NetworkServices\Operation;

/**
 * The "multicastGroupConsumerActivations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networkservicesService = new Google\Service\NetworkServices(...);
 *   $multicastGroupConsumerActivations = $networkservicesService->projects_locations_multicastGroupConsumerActivations;
 *  </code>
 */
class ProjectsLocationsMulticastGroupConsumerActivations extends \Google\Service\Resource
{
  /**
   * Creates a new multicast group consumer activation in a given project and
   * location. (multicastGroupConsumerActivations.create)
   *
   * @param string $parent Required. The parent resource of the multicast group
   * consumer activation. Use the following format: `projects/locations`.
   * @param MulticastGroupConsumerActivation $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string multicastGroupConsumerActivationId Required. A unique name
   * for the multicast group consumer activation. The name is restricted to lower-
   * case letters, numbers, and hyphen, with the first character a lower-case
   * letter, and the last a letter or a number. The name must not exceed 48
   * characters.
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
  public function create($parent, MulticastGroupConsumerActivation $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single multicast group consumer activation.
   * (multicastGroupConsumerActivations.delete)
   *
   * @param string $name Required. The resource name of the multicast group
   * consumer activation to delete. Use the following format:
   * `projects/locations/multicastGroupConsumerActivations`.
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
   * Gets details of a single multicast group consumer activation.
   * (multicastGroupConsumerActivations.get)
   *
   * @param string $name Required. The resource name of the multicast group
   * consumer activation to get. Use the following format:
   * `projects/locations/multicastGroupConsumerActivations`.
   * @param array $optParams Optional parameters.
   * @return MulticastGroupConsumerActivation
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], MulticastGroupConsumerActivation::class);
  }
  /**
   * Lists multicast group consumer activations in a given project and location. (
   * multicastGroupConsumerActivations.listProjectsLocationsMulticastGroupConsumer
   * Activations)
   *
   * @param string $parent Required. The parent resource for which to list
   * multicast group consumer activations. Use the following format:
   * `projects/locations`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that filters the
   * resources listed in the response. The expression must be of the form ` `
   * where operators: `<`, `>`, `<=`, `>=`, `!=`, `=`, `:` are supported (colon
   * `:` represents a HAS operator which is roughly synonymous with equality). can
   * refer to a proto or JSON field, or a synthetic field. Field names can be
   * camelCase or snake_case. Examples: * Filter by name: name = "RESOURCE_NAME" *
   * Filter by labels: * Resources that have a key named `foo` labels.foo:* *
   * Resources that have a key named `foo` whose value is `bar` labels.foo = bar
   * @opt_param string orderBy Optional. A field used to sort the results by a
   * certain order.
   * @opt_param int pageSize Optional. The maximum number of multicast group
   * consumer activations to return per call.
   * @opt_param string pageToken Optional. A page token from an earlier query, as
   * returned in `next_page_token`.
   * @return ListMulticastGroupConsumerActivationsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsMulticastGroupConsumerActivations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListMulticastGroupConsumerActivationsResponse::class);
  }
  /**
   * Updates the parameters of a single multicast group consumer activation.
   * (multicastGroupConsumerActivations.patch)
   *
   * @param string $name Identifier. The resource name of the multicast group
   * consumer activation. Use the following format:
   * `projects/locations/multicastGroupConsumerActivations`.
   * @param MulticastGroupConsumerActivation $postBody
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
   * @opt_param string updateMask Optional. Field mask is used to specify the
   * fields to be overwritten in the MulticastGroupConsumerActivation resource by
   * the update. The fields specified in the `update_mask` are relative to the
   * resource, not the full request. A field will be overwritten if it is in the
   * mask. If the user does not provide a mask then all mutable fields present in
   * the request will be overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, MulticastGroupConsumerActivation $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsMulticastGroupConsumerActivations::class, 'Google_Service_NetworkServices_Resource_ProjectsLocationsMulticastGroupConsumerActivations');
