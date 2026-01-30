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

namespace Google\Service\CloudDataplex\Resource;

use Google\Service\CloudDataplex\GoogleCloudDataplexV1ListMetadataFeedsResponse;
use Google\Service\CloudDataplex\GoogleCloudDataplexV1MetadataFeed;
use Google\Service\CloudDataplex\GoogleLongrunningOperation;

/**
 * The "metadataFeeds" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataplexService = new Google\Service\CloudDataplex(...);
 *   $metadataFeeds = $dataplexService->projects_locations_metadataFeeds;
 *  </code>
 */
class ProjectsLocationsMetadataFeeds extends \Google\Service\Resource
{
  /**
   * Creates a MetadataFeed. (metadataFeeds.create)
   *
   * @param string $parent Required. The resource name of the parent location, in
   * the format projects/{project_id_or_number}/locations/{location_id}
   * @param GoogleCloudDataplexV1MetadataFeed $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string metadataFeedId Optional. The metadata job ID. If not
   * provided, a unique ID is generated with the prefix metadata-job-.
   * @opt_param bool validateOnly Optional. The service validates the request
   * without performing any mutations. The default is false.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudDataplexV1MetadataFeed $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a MetadataFeed. (metadataFeeds.delete)
   *
   * @param string $name Required. The resource name of the metadata feed, in the
   * format projects/{project_id_or_number}/locations/{location_id}/MetadataFeeds/
   * {metadata_feed_id}.
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets a MetadataFeed. (metadataFeeds.get)
   *
   * @param string $name Required. The resource name of the metadata feed, in the
   * format projects/{project_id_or_number}/locations/{location_id}/MetadataFeeds/
   * {metadata_feed_id}.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDataplexV1MetadataFeed
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudDataplexV1MetadataFeed::class);
  }
  /**
   * Retrieve a list of MetadataFeeds.
   * (metadataFeeds.listProjectsLocationsMetadataFeeds)
   *
   * @param string $parent Required. The resource name of the parent location, in
   * the format projects/{project_id_or_number}/locations/{location_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter request. Filters are case-
   * sensitive. The service supports the following formats: labels.key1 = "value1"
   * labels:key1 name = "value"You can combine filters with AND, OR, and NOT
   * operators.
   * @opt_param string orderBy Optional. The field to sort the results by, either
   * name or create_time. If not specified, the ordering is undefined.
   * @opt_param int pageSize Optional. The maximum number of metadata feeds to
   * return. The service might return fewer feeds than this value. If unspecified,
   * at most 10 feeds are returned. The maximum value is 1,000.
   * @opt_param string pageToken Optional. The page token received from a previous
   * ListMetadataFeeds call. Provide this token to retrieve the subsequent page of
   * results. When paginating, all other parameters that are provided to the
   * ListMetadataFeeds request must match the call that provided the page token.
   * @return GoogleCloudDataplexV1ListMetadataFeedsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsMetadataFeeds($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudDataplexV1ListMetadataFeedsResponse::class);
  }
  /**
   * Updates a MetadataFeed. (metadataFeeds.patch)
   *
   * @param string $name Identifier. The resource name of the metadata feed, in
   * the format projects/{project_id_or_number}/locations/{location_id}/metadataFe
   * eds/{metadata_feed_id}.
   * @param GoogleCloudDataplexV1MetadataFeed $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Mask of fields to update.
   * @opt_param bool validateOnly Optional. Only validate the request, but do not
   * perform mutations. The default is false.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudDataplexV1MetadataFeed $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsMetadataFeeds::class, 'Google_Service_CloudDataplex_Resource_ProjectsLocationsMetadataFeeds');
