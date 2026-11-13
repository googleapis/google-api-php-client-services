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

use Google\Service\NetworkServices\ListProducerExtensionsResponse;
use Google\Service\NetworkServices\Operation;
use Google\Service\NetworkServices\ProducerExtension;

/**
 * The "producerExtensions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networkservicesService = new Google\Service\NetworkServices(...);
 *   $producerExtensions = $networkservicesService->projects_locations_producerExtensions;
 *  </code>
 */
class ProjectsLocationsProducerExtensions extends \Google\Service\Resource
{
  /**
   * Creates a new `ProducerExtension` resource in a given project and location.
   * (producerExtensions.create)
   *
   * @param string $parent Required. The parent resource of the
   * `ProducerExtension` resource. Must be in the format
   * `projects/{project}/locations/{location}`.
   * @param ProducerExtension $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string producerExtensionId Required. The short name of the
   * `ProducerExtension` resource to be created.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, ProducerExtension $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes the specified `ProducerExtension` resource.
   * (producerExtensions.delete)
   *
   * @param string $name Required. The name of the `ProducerExtension` resource to
   * delete. It must be in this format: `projects/{project}/locations/{location}/p
   * roducerExtensions/{producer_extension}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The ETag of the `ProducerExtension` to
   * delete.
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
   * Gets details of the specified `ProducerExtension` resource.
   * (producerExtensions.get)
   *
   * @param string $name Required. The name of the `ProducerExtension` resource to
   * get. It must be in this format: `projects/{project}/locations/{location}/prod
   * ucerExtensions/{producer_extension}`.
   * @param array $optParams Optional parameters.
   * @return ProducerExtension
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], ProducerExtension::class);
  }
  /**
   * Lists `ProducerExtension` resources in a given project and location.
   * (producerExtensions.listProjectsLocationsProducerExtensions)
   *
   * @param string $parent Required. The project and location from which the
   * `ProducerExtension` resources should be listed, specified in this format:
   * `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of `ProducerExtension`
   * resources to return per call.
   * @opt_param string pageToken Optional. The value returned by the last
   * `ListProducerExtensionsResponse`. It indicates that this is a continuation of
   * a prior `ListProducerExtensions` call, and that the system should return the
   * next page of data.
   * @return ListProducerExtensionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsProducerExtensions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListProducerExtensionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsProducerExtensions::class, 'Google_Service_NetworkServices_Resource_ProjectsLocationsProducerExtensions');
