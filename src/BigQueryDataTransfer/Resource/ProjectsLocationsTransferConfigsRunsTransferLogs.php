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

use Google\Service\BigQueryDataTransfer\ListTransferLogsResponse;

/**
 * The "transferLogs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigquerydatatransferService = new Google\Service\BigQueryDataTransfer(...);
 *   $transferLogs = $bigquerydatatransferService->projects_locations_transferConfigs_runs_transferLogs;
 *  </code>
 */
class ProjectsLocationsTransferConfigsRunsTransferLogs extends \Google\Service\Resource
{
  /**
   * Returns log messages for the transfer run.
   * (transferLogs.listProjectsLocationsTransferConfigsRunsTransferLogs)
   *
   * @param string $parent Required. Transfer run name. If you are using the
   * regionless method, the location must be `US` and the name should be in the
   * following form: *
   * `projects/{project_id}/transferConfigs/{config_id}/runs/{run_id}` If you are
   * using the regionalized method, the name should be in the following form: * `p
   * rojects/{project_id}/locations/{location_id}/transferConfigs/{config_id}/runs
   * /{run_id}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string messageTypes Message types to return. If not populated -
   * INFO, WARNING and ERROR messages are returned.
   * @opt_param int pageSize Page size. The default page size is the maximum value
   * of 1000 results.
   * @opt_param string pageToken Pagination token, which can be used to request a
   * specific page of `ListTransferLogsRequest` list results. For multiple-page
   * results, `ListTransferLogsResponse` outputs a `next_page` token, which can be
   * used as the `page_token` value to request the next page of list results.
   * @return ListTransferLogsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsTransferConfigsRunsTransferLogs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListTransferLogsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsTransferConfigsRunsTransferLogs::class, 'Google_Service_BigQueryDataTransfer_Resource_ProjectsLocationsTransferConfigsRunsTransferLogs');
