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

namespace Google\Service\MigrationCenterAPI\Resource;

use Google\Service\MigrationCenterAPI\AssetsExportJob;
use Google\Service\MigrationCenterAPI\ListAssetsExportJobsResponse;
use Google\Service\MigrationCenterAPI\Operation;
use Google\Service\MigrationCenterAPI\RunAssetsExportJobRequest;

/**
 * The "assetsExportJobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $migrationcenterService = new Google\Service\MigrationCenterAPI(...);
 *   $assetsExportJobs = $migrationcenterService->projects_locations_assetsExportJobs;
 *  </code>
 */
class ProjectsLocationsAssetsExportJobs extends \Google\Service\Resource
{
  /**
   * Creates a new assets export job. (assetsExportJobs.create)
   *
   * @param string $parent Required. The parent resource where the assts export
   * job will be created.
   * @param AssetsExportJob $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string assetsExportJobId Required. The ID to use for the asset
   * export job.
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
  public function create($parent, AssetsExportJob $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes an assets export job. (assetsExportJobs.delete)
   *
   * @param string $name Required. The name of the assets export job to delete.
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
   * Gets the details of an assets export job. (assetsExportJobs.get)
   *
   * @param string $name Required. Name of the resource.
   * @param array $optParams Optional parameters.
   * @return AssetsExportJob
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AssetsExportJob::class);
  }
  /**
   * Lists all the assets export jobs in a given project and location.
   * (assetsExportJobs.listProjectsLocationsAssetsExportJobs)
   *
   * @param string $parent Required. Parent resource.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. The server may return
   * fewer items than requested. If unspecified, the server will pick an
   * appropriate default value.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * that the server should return.
   * @return ListAssetsExportJobsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAssetsExportJobs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAssetsExportJobsResponse::class);
  }
  /**
   * Runs an assets export job, returning an AssetsExportJobExecution.
   * (assetsExportJobs.run)
   *
   * @param string $name Required. Name of the resource.
   * @param RunAssetsExportJobRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function run($name, RunAssetsExportJobRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('run', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAssetsExportJobs::class, 'Google_Service_MigrationCenterAPI_Resource_ProjectsLocationsAssetsExportJobs');
