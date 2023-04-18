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

use Google\Service\MigrationCenterAPI\AggregateAssetsValuesRequest;
use Google\Service\MigrationCenterAPI\AggregateAssetsValuesResponse;
use Google\Service\MigrationCenterAPI\Asset;
use Google\Service\MigrationCenterAPI\BatchDeleteAssetsRequest;
use Google\Service\MigrationCenterAPI\BatchUpdateAssetsRequest;
use Google\Service\MigrationCenterAPI\BatchUpdateAssetsResponse;
use Google\Service\MigrationCenterAPI\Frames;
use Google\Service\MigrationCenterAPI\ListAssetsResponse;
use Google\Service\MigrationCenterAPI\MigrationcenterEmpty;
use Google\Service\MigrationCenterAPI\ReportAssetFramesResponse;

/**
 * The "assets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $migrationcenterService = new Google\Service\MigrationCenterAPI(...);
 *   $assets = $migrationcenterService->projects_locations_assets;
 *  </code>
 */
class ProjectsLocationsAssets extends \Google\Service\Resource
{
  /**
   * Aggregates the requested fields based on provided function.
   * (assets.aggregateValues)
   *
   * @param string $parent Required. Parent value for
   * `AggregateAssetsValuesRequest`.
   * @param AggregateAssetsValuesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AggregateAssetsValuesResponse
   */
  public function aggregateValues($parent, AggregateAssetsValuesRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('aggregateValues', [$params], AggregateAssetsValuesResponse::class);
  }
  /**
   * Deletes list of Assets. (assets.batchDelete)
   *
   * @param string $parent Required. Parent value for batch asset delete.
   * @param BatchDeleteAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return MigrationcenterEmpty
   */
  public function batchDelete($parent, BatchDeleteAssetsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', [$params], MigrationcenterEmpty::class);
  }
  /**
   * Updates the parameters of a list of assets. (assets.batchUpdate)
   *
   * @param string $parent Required. Parent value for batch asset update.
   * @param BatchUpdateAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BatchUpdateAssetsResponse
   */
  public function batchUpdate($parent, BatchUpdateAssetsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', [$params], BatchUpdateAssetsResponse::class);
  }
  /**
   * Gets the details of an asset. (assets.get)
   *
   * @param string $name Required. Name of the resource.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view View of the assets. Defaults to BASIC.
   * @return Asset
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Asset::class);
  }
  /**
   * Lists all the assets in a given project and location.
   * (assets.listProjectsLocationsAssets)
   *
   * @param string $parent Required. Parent value for `ListAssetsRequest`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Filtering results.
   * @opt_param string orderBy Field to sort by. See
   * https://google.aip.dev/132#ordering for more details.
   * @opt_param int pageSize Requested page size. Server may return fewer items
   * than requested. If unspecified, server will pick an appropriate default.
   * @opt_param string pageToken A token identifying a page of results the server
   * should return.
   * @opt_param string view View of the assets. Defaults to BASIC.
   * @return ListAssetsResponse
   */
  public function listProjectsLocationsAssets($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAssetsResponse::class);
  }
  /**
   * Reports a set of frames. (assets.reportAssetFrames)
   *
   * @param string $parent Required. Parent of the resource.
   * @param Frames $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source Required. Reference to a source.
   * @return ReportAssetFramesResponse
   */
  public function reportAssetFrames($parent, Frames $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('reportAssetFrames', [$params], ReportAssetFramesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAssets::class, 'Google_Service_MigrationCenterAPI_Resource_ProjectsLocationsAssets');
