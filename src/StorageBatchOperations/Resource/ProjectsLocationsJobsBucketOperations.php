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

namespace Google\Service\StorageBatchOperations\Resource;

use Google\Service\StorageBatchOperations\BucketOperation;
use Google\Service\StorageBatchOperations\ListBucketOperationsResponse;

/**
 * The "bucketOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storagebatchoperationsService = new Google\Service\StorageBatchOperations(...);
 *   $bucketOperations = $storagebatchoperationsService->projects_locations_jobs_bucketOperations;
 *  </code>
 */
class ProjectsLocationsJobsBucketOperations extends \Google\Service\Resource
{
  /**
   * Gets a BucketOperation. (bucketOperations.get)
   *
   * @param string $name Required. `name` of the bucket operation to retrieve.
   * Format: projects/{project_id}/locations/global/jobs/{job_id}/bucketOperations
   * /{bucket_operation_id}.
   * @param array $optParams Optional parameters.
   * @return BucketOperation
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], BucketOperation::class);
  }
  /**
   * Lists BucketOperations in a given project and job.
   * (bucketOperations.listProjectsLocationsJobsBucketOperations)
   *
   * @param string $parent Required. Format:
   * projects/{project_id}/locations/global/jobs/{job_id}.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filters results as defined by
   * https://google.aip.dev/160.
   * @opt_param string orderBy Optional. Field to sort by. Supported fields are
   * name, create_time.
   * @opt_param int pageSize Optional. The list page size. Default page size is
   * 100.
   * @opt_param string pageToken Optional. The list page token.
   * @return ListBucketOperationsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsJobsBucketOperations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListBucketOperationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsJobsBucketOperations::class, 'Google_Service_StorageBatchOperations_Resource_ProjectsLocationsJobsBucketOperations');
