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

namespace Google\Service\BigQueryDataTransfer\Resource;

use Google\Service\BigQueryDataTransfer\ListTransferResourcesResponse;
use Google\Service\BigQueryDataTransfer\TransferResource;

/**
 * The "transferResources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigquerydatatransferService = new Google\Service\BigQueryDataTransfer(...);
 *   $transferResources = $bigquerydatatransferService->projects_transferConfigs_transferResources;
 *  </code>
 */
class ProjectsTransferConfigsTransferResources extends \Google\Service\Resource
{
  /**
   * Returns a transfer resource. (transferResources.get)
   *
   * @param string $name Required. The name of the transfer resource in the form
   * of: * `projects/{project}/transferConfigs/{transfer_config}/transferResources
   * /{transfer_resource}` * `projects/{project}/locations/{location}/transferConf
   * igs/{transfer_config}/transferResources/{transfer_resource}`
   * @param array $optParams Optional parameters.
   * @return TransferResource
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], TransferResource::class);
  }
  /**
   * Returns information about transfer resources.
   * (transferResources.listProjectsTransferConfigsTransferResources)
   *
   * @param string $parent Required. Name of transfer configuration for which
   * transfer resources should be retrieved. The name should be in one of the
   * following form: * `projects/{project_id}/transferConfigs/{config_id}` *
   * `projects/{project_id}/locations/{location_id}/transferConfigs/{config_id}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter for the transfer resources.
   * Currently supported filters include: * Resource name: `name` - Wildcard
   * supported * Resource type: `type` * Resource destination: `destination` *
   * Latest resource state: `latest_status_detail.state` * Last update time:
   * `update_time` - RFC-3339 format * Parent table name:
   * `hierarchy_detail.partition_detail.table` Multiple filters can be applied
   * using the `AND/OR` operator. Examples: * `name="*123" AND (type="TABLE" OR
   * latest_status_detail.state="SUCCEEDED")` * `update_time >=
   * "2012-04-21T11:30:00-04:00` * `hierarchy_detail.partition_detail.table =
   * "table1"`
   * @opt_param int pageSize Optional. The maximum number of transfer resources to
   * return. The maximum value is 1000; values above 1000 will be coerced to 1000.
   * The default page size is the maximum value of 1000 results.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListTransferResources` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListTransferResources`
   * must match the call that provided the page token.
   * @return ListTransferResourcesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsTransferConfigsTransferResources($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListTransferResourcesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsTransferConfigsTransferResources::class, 'Google_Service_BigQueryDataTransfer_Resource_ProjectsTransferConfigsTransferResources');
