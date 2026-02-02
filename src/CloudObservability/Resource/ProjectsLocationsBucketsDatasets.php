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

namespace Google\Service\CloudObservability\Resource;

use Google\Service\CloudObservability\Dataset;
use Google\Service\CloudObservability\ListDatasetsResponse;

/**
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $observabilityService = new Google\Service\CloudObservability(...);
 *   $datasets = $observabilityService->projects_locations_buckets_datasets;
 *  </code>
 */
class ProjectsLocationsBucketsDatasets extends \Google\Service\Resource
{
  /**
   * Get a dataset. (datasets.get)
   *
   * @param string $name Required. Name of the dataset to retrieve. The format is:
   * projects/[PROJECT_ID]/locations/[LOCATION]/buckets/[BUCKET_ID]/datasets/[DATA
   * SET_ID]
   * @param array $optParams Optional parameters.
   * @return Dataset
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Dataset::class);
  }
  /**
   * List datasets of a bucket. (datasets.listProjectsLocationsBucketsDatasets)
   *
   * @param string $parent Required. The parent bucket that owns this collection
   * of datasets. The format is:
   * projects/[PROJECT_ID]/locations/[LOCATION]/buckets/[BUCKET_ID]
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of datasets to return.
   * If unspecified, then at most 100 datasets are returned. The maximum value is
   * 1000; values above 1000 are coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListDatasets` call. Provide this to retrieve the subsequent page.
   * @opt_param bool showDeleted Optional. If true, then the response will include
   * deleted datasets.
   * @return ListDatasetsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsBucketsDatasets($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListDatasetsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsBucketsDatasets::class, 'Google_Service_CloudObservability_Resource_ProjectsLocationsBucketsDatasets');
