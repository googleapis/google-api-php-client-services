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

use Google\Service\CloudObservability\Link;
use Google\Service\CloudObservability\ListLinksResponse;
use Google\Service\CloudObservability\Operation;

/**
 * The "links" collection of methods.
 * Typical usage is:
 *  <code>
 *   $observabilityService = new Google\Service\CloudObservability(...);
 *   $links = $observabilityService->projects_locations_buckets_datasets_links;
 *  </code>
 */
class ProjectsLocationsBucketsDatasetsLinks extends \Google\Service\Resource
{
  /**
   * Create a new link. (links.create)
   *
   * @param string $parent Required. Name of the containing dataset for this link.
   * The format is: projects/[PROJECT_ID]/locations/[LOCATION]/buckets/[BUCKET_ID]
   * /datasets/[DATASET_ID]
   * @param Link $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string linkId Required. Id of the link to create.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Link $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Delete a link. (links.delete)
   *
   * @param string $name Required. Name of the link to delete. The format is: proj
   * ects/[PROJECT_ID]/locations/[LOCATION]/buckets/[BUCKET_ID]/datasets/[DATASET_
   * ID]/links/[LINK_ID]
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
   * Get a link. (links.get)
   *
   * @param string $name Required. Name of the link to retrieve. The format is: pr
   * ojects/[PROJECT_ID]/locations/[LOCATION]/buckets/[BUCKET_ID]/datasets/[DATASE
   * T_ID]/links/[LINK_ID]
   * @param array $optParams Optional parameters.
   * @return Link
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Link::class);
  }
  /**
   * List links of a dataset. (links.listProjectsLocationsBucketsDatasetsLinks)
   *
   * @param string $parent Required. The parent dataset that owns this collection
   * of links. The format is: projects/[PROJECT_ID]/locations/[LOCATION]/buckets/[
   * BUCKET_ID]/datasets/[DATASET_ID]
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of links to return. If
   * unspecified, then at most 100 links are returned. The maximum value is 1000;
   * values above 1000 are coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListLinks` call. Provide this to retrieve the subsequent page.
   * @return ListLinksResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsBucketsDatasetsLinks($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListLinksResponse::class);
  }
  /**
   * Update a link. (links.patch)
   *
   * @param string $name Identifier. Name of the link. The format is: projects/[PR
   * OJECT_ID]/locations/[LOCATION]/buckets/[BUCKET_ID]/datasets/[DATASET_ID]/link
   * s/[LINK_ID]
   * @param Link $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, Link $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsBucketsDatasetsLinks::class, 'Google_Service_CloudObservability_Resource_ProjectsLocationsBucketsDatasetsLinks');
