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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListServingProfilesResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ServingProfile;
use Google\Service\Aiplatform\GoogleLongrunningOperation;
use Google\Service\Aiplatform\GoogleProtobufEmpty;

/**
 * The "servingProfiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $servingProfiles = $aiplatformService->projects_locations_servingProfiles;
 *  </code>
 */
class ProjectsLocationsServingProfiles extends \Google\Service\Resource
{
  /**
   * Creates a ServingProfile. (servingProfiles.create)
   *
   * @param string $parent Required. The resource name of the Location to create
   * the ServingProfile in. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1ServingProfile $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string servingProfileId Required. The ID to use for the
   * ServingProfile, which will become the final component of the ServingProfile's
   * resource name. This value should be 1-63 characters, and valid characters are
   * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1ServingProfile $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a ServingProfile. (servingProfiles.delete)
   *
   * @param string $name Required. The name of the ServingProfile resource to be
   * deleted. Format:
   * `projects/{project}/locations/{location}/servingProfiles/{serving_profile}`
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Gets a ServingProfile. (servingProfiles.get)
   *
   * @param string $name Required. The name of the ServingProfile resource.
   * Format:
   * `projects/{project}/locations/{location}/servingProfiles/{serving_profile}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1ServingProfile
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1ServingProfile::class);
  }
  /**
   * Lists ServingProfiles in a Location.
   * (servingProfiles.listProjectsLocationsServingProfiles)
   *
   * @param string $parent Required. The resource name of the Location to list the
   * ServingProfiles from. Format: `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The standard list page size. If
   * unspecified, at most 100 ServingProfiles will be returned. The maximum value
   * is 1000; values above 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. The standard list page token.
   * @return GoogleCloudAiplatformV1ListServingProfilesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsServingProfiles($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListServingProfilesResponse::class);
  }
  /**
   * Updates a ServingProfile. (servingProfiles.patch)
   *
   * @param string $name Identifier. The resource name of the ServingProfile.
   * @param GoogleCloudAiplatformV1ServingProfile $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update; see
   * https://developers.google.com/protocol-
   * buffers/docs/reference/google.protobuf#fieldmask. If omitted, all populated
   * (non-empty) mutable fields are updated; if set to `["*"]`, all mutable fields
   * are fully replaced (unpopulated values are cleared).
   * @return GoogleCloudAiplatformV1ServingProfile
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudAiplatformV1ServingProfile $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudAiplatformV1ServingProfile::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsServingProfiles::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsServingProfiles');
