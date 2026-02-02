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

use Google\Service\CloudObservability\ListViewsResponse;
use Google\Service\CloudObservability\View;

/**
 * The "views" collection of methods.
 * Typical usage is:
 *  <code>
 *   $observabilityService = new Google\Service\CloudObservability(...);
 *   $views = $observabilityService->projects_locations_buckets_datasets_views;
 *  </code>
 */
class ProjectsLocationsBucketsDatasetsViews extends \Google\Service\Resource
{
  /**
   * Get a view. (views.get)
   *
   * @param string $name Required. Name of the view to retrieve. The format is: pr
   * ojects/[PROJECT_ID]/locations/[LOCATION]/buckets/[BUCKET_ID]/datasets/[DATASE
   * T_ID]/views/[VIEW_ID]
   * @param array $optParams Optional parameters.
   * @return View
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], View::class);
  }
  /**
   * List views of a dataset. (views.listProjectsLocationsBucketsDatasetsViews)
   *
   * @param string $parent Required. Dataset whose views are to be listed. The
   * format is: projects/[PROJECT_ID]/locations/[LOCATION]/buckets/[BUCKET_ID]/dat
   * asets/[DATASET_ID]
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of views to return. If
   * unspecified, then at most 100 views are returned. The maximum value is 1000;
   * values above 1000 are coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListViews` call. Provide this to retrieve the subsequent page.
   * @return ListViewsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsBucketsDatasetsViews($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListViewsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsBucketsDatasetsViews::class, 'Google_Service_CloudObservability_Resource_ProjectsLocationsBucketsDatasetsViews');
