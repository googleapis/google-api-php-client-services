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

namespace Google\Service\Datapipelines\Resource;

use Google\Service\Datapipelines\GoogleCloudDatapipelinesV1ComputeSchemaRequest;
use Google\Service\Datapipelines\GoogleCloudDatapipelinesV1ListPipelinesResponse;
use Google\Service\Datapipelines\GoogleCloudDatapipelinesV1Schema;

/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datapipelinesService = new Google\Service\Datapipelines(...);
 *   $locations = $datapipelinesService->locations;
 *  </code>
 */
class ProjectsLocations extends \Google\Service\Resource
{
  /**
   * Computes the schema for the transform. Computation from `raw_schema` will
   * always occur if it is set. This requires that the transform supports that
   * encoding. If no raw schema is provided and if the transform is for an IO,
   * then this will attempt to connect to the resource using the details provided
   * in `config` and infer the schema from that. If the transform is not an IO, is
   * a sink that doesn't exist yet, or is a sink with no schema requirement, then
   * this will fall back to basing the schema off the one provided in
   * `input_schemas`. The computed schema will be validated.
   * (locations.computeSchema)
   *
   * @param string $location Required. The full location formatted as "projects
   * /{your-project}/locations/{google-cloud-region}". If attempting to infer the
   * schema from an existing Google Cloud resource, the default Data Pipelines
   * service account for this project will be used in making requests for the
   * resource. If the region given for "{google-cloud-region}" is different than
   * the region where the resource is stored, then the data will be transferred to
   * and processed in the region specified here, but it will not be persistently
   * stored in this region.
   * @param GoogleCloudDatapipelinesV1ComputeSchemaRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDatapipelinesV1Schema
   */
  public function computeSchema($location, GoogleCloudDatapipelinesV1ComputeSchemaRequest $postBody, $optParams = [])
  {
    $params = ['location' => $location, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('computeSchema', [$params], GoogleCloudDatapipelinesV1Schema::class);
  }
  /**
   * Lists pipelines. Returns a "FORBIDDEN" error if the caller doesn't have
   * permission to access it. (locations.listPipelines)
   *
   * @param string $parent Required. The location name. For example:
   * `projects/PROJECT_ID/locations/LOCATION_ID`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter An expression for filtering the results of the
   * request. If unspecified, all pipelines will be returned. Multiple filters can
   * be applied and must be comma separated. Fields eligible for filtering are: +
   * `type`: The type of the pipeline (streaming or batch). Allowed values are
   * `ALL`, `BATCH`, and `STREAMING`. + `status`: The activity status of the
   * pipeline. Allowed values are `ALL`, `ACTIVE`, `ARCHIVED`, and `PAUSED`. For
   * example, to limit results to active batch processing pipelines:
   * type:BATCH,status:ACTIVE
   * @opt_param int pageSize The maximum number of entities to return. The service
   * may return fewer than this value, even if there are additional pages. If
   * unspecified, the max limit is yet to be determined by the backend
   * implementation.
   * @opt_param string pageToken A page token, received from a previous
   * `ListPipelines` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListPipelines` must match the
   * call that provided the page token.
   * @return GoogleCloudDatapipelinesV1ListPipelinesResponse
   */
  public function listPipelines($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('listPipelines', [$params], GoogleCloudDatapipelinesV1ListPipelinesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocations::class, 'Google_Service_Datapipelines_Resource_ProjectsLocations');
