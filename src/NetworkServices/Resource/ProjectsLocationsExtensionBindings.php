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

use Google\Service\NetworkServices\ExtensionBinding;
use Google\Service\NetworkServices\ListExtensionBindingsResponse;
use Google\Service\NetworkServices\Operation;

/**
 * The "extensionBindings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networkservicesService = new Google\Service\NetworkServices(...);
 *   $extensionBindings = $networkservicesService->projects_locations_extensionBindings;
 *  </code>
 */
class ProjectsLocationsExtensionBindings extends \Google\Service\Resource
{
  /**
   * Creates a new `ExtensionBinding` resource in a given project and location.
   * (extensionBindings.create)
   *
   * @param string $parent Required. The parent resource of the `ExtensionBinding`
   * resource. Must be in the format `projects/{project}/locations/{location}`.
   * @param ExtensionBinding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string extensionBindingId Required. Short name of the
   * `ExtensionBinding` resource to be created.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, ExtensionBinding $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes the specified `ExtensionBinding` resource. (extensionBindings.delete)
   *
   * @param string $name Required. The name of the `ExtensionBinding` resource to
   * delete. Must be in the format `projects/{project}/locations/{location}/extens
   * ionBindings/{extension_binding}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The ETag of the `ExtensionBinding` to
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
   * Gets details of the specified `ExtensionBinding` resource.
   * (extensionBindings.get)
   *
   * @param string $name Required. The name of the `ExtensionBinding` resource to
   * get. Must be in the format `projects/{project}/locations/{location}/extension
   * Bindings/{extension_binding}`.
   * @param array $optParams Optional parameters.
   * @return ExtensionBinding
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], ExtensionBinding::class);
  }
  /**
   * Lists `ExtensionBinding` resources in a given project and location.
   * (extensionBindings.listProjectsLocationsExtensionBindings)
   *
   * @param string $parent Required. The project and location from which the
   * `ExtensionBinding` resources should be listed, specified in the format
   * `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of `ExtensionBinding`
   * resources to return per call.
   * @opt_param string pageToken Optional. The value returned by the last
   * `ListExtensionBindingsResponse`. Indicates that this is a continuation of a
   * prior `ListExtensionBindings` call, and that the system should return the
   * next page of data.
   * @return ListExtensionBindingsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsExtensionBindings($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListExtensionBindingsResponse::class);
  }
  /**
   * Updates the parameters of the specified `ExtensionBinding` resource.
   * (extensionBindings.patch)
   *
   * @param string $name Identifier. Name of the `ExtensionBinding` resource in
   * the following format: `projects/{project}/locations/{location}/extensionBindi
   * ngs/{extension_binding}`.
   * @param ExtensionBinding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to specify the
   * fields to be overwritten in the `ExtensionBinding` resource by the update.
   * The fields specified in the `update_mask` are relative to the resource, not
   * the full request. A field is overwritten if it is in the mask. If the user
   * does not provide a mask then all fields are overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, ExtensionBinding $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsExtensionBindings::class, 'Google_Service_NetworkServices_Resource_ProjectsLocationsExtensionBindings');
