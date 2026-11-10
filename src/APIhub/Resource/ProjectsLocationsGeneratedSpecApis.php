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

namespace Google\Service\APIhub\Resource;

use Google\Service\APIhub\GoogleCloudApihubV1GenerateSpecRequest;
use Google\Service\APIhub\GoogleCloudApihubV1GenerateSpecResponse;
use Google\Service\APIhub\GoogleCloudApihubV1GeneratedSpecApi;
use Google\Service\APIhub\GoogleCloudApihubV1ListGeneratedSpecApisResponse;

/**
 * The "generatedSpecApis" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apihubService = new Google\Service\APIhub(...);
 *   $generatedSpecApis = $apihubService->projects_locations_generatedSpecApis;
 *  </code>
 */
class ProjectsLocationsGeneratedSpecApis extends \Google\Service\Resource
{
  /**
   * Merges the per-day stored specs across the requested window and returns the
   * merged OpenAPI document. Preview: this method is in Public Preview. Behavior
   * and the API surface may change until the Spec Generation feature reaches
   * General Availability. (generatedSpecApis.generateSpec)
   *
   * @param string $name Required. The resource name of the GeneratedSpecApi to
   * generate from. Format: `projects/{project}/locations/{location}/generatedSpec
   * Apis/{generated_spec_api}`
   * @param GoogleCloudApihubV1GenerateSpecRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApihubV1GenerateSpecResponse
   * @throws \Google\Service\Exception
   */
  public function generateSpec($name, GoogleCloudApihubV1GenerateSpecRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateSpec', [$params], GoogleCloudApihubV1GenerateSpecResponse::class);
  }
  /**
   * Gets a single GeneratedSpecApi by resource name. Preview: this method is in
   * Public Preview. Behavior and the API surface may change until the Spec
   * Generation feature reaches General Availability. (generatedSpecApis.get)
   *
   * @param string $name Required. The resource name of the GeneratedSpecApi to
   * retrieve. Format: `projects/{project}/locations/{location}/generatedSpecApis/
   * {generated_spec_api}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudApihubV1GeneratedSpecApi
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudApihubV1GeneratedSpecApi::class);
  }
  /**
   * Lists the APIs the pipeline is tracking, ordered by `update_time desc`.
   * Preview: this method is in Public Preview. Behavior and the API surface may
   * change until the Spec Generation feature reaches General Availability.
   * (generatedSpecApis.listProjectsLocationsGeneratedSpecApis)
   *
   * @param string $parent Required. The parent resource, which owns this
   * collection of tracked APIs. Format: `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An AIP-160 filter. This release supports
   * the fields `state` and `source.source_type`, the `=` comparison operator
   * only, and `AND` conjunction only. Examples: - `state = "SPEC_GENERATED"` -
   * `state = "SPEC_ASSOCIATED" AND source.source_type = APIGEE_X`
   * @opt_param int pageSize Optional. The maximum number of results to return.
   * The service may return fewer. If unspecified, at most 50 will be returned.
   * The maximum value is 1000; values above 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListGeneratedSpecApis` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters (except `page_size`) provided to
   * `ListGeneratedSpecApis` must match the call that provided the page token.
   * @return GoogleCloudApihubV1ListGeneratedSpecApisResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsGeneratedSpecApis($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudApihubV1ListGeneratedSpecApisResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsGeneratedSpecApis::class, 'Google_Service_APIhub_Resource_ProjectsLocationsGeneratedSpecApis');
