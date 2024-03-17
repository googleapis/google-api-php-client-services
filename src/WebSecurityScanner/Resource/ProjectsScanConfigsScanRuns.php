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

namespace Google\Service\WebSecurityScanner\Resource;

use Google\Service\WebSecurityScanner\ListScanRunsResponse;
use Google\Service\WebSecurityScanner\ScanRun;
use Google\Service\WebSecurityScanner\StopScanRunRequest;

/**
 * The "scanRuns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $websecurityscannerService = new Google\Service\WebSecurityScanner(...);
 *   $scanRuns = $websecurityscannerService->projects_scanConfigs_scanRuns;
 *  </code>
 */
class ProjectsScanConfigsScanRuns extends \Google\Service\Resource
{
  /**
   * Gets a ScanRun. (scanRuns.get)
   *
   * @param string $name Required. The resource name of the ScanRun to be
   * returned. The name follows the format of
   * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
   * @param array $optParams Optional parameters.
   * @return ScanRun
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], ScanRun::class);
  }
  /**
   * Lists ScanRuns under a given ScanConfig, in descending order of ScanRun stop
   * time. (scanRuns.listProjectsScanConfigsScanRuns)
   *
   * @param string $parent Required. The parent resource name, which should be a
   * scan resource name in the format
   * 'projects/{projectId}/scanConfigs/{scanConfigId}'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of ScanRuns to return, can be
   * limited by server. If not specified or not positive, the implementation will
   * select a reasonable value.
   * @opt_param string pageToken A token identifying a page of results to be
   * returned. This should be a `next_page_token` value returned from a previous
   * List request. If unspecified, the first page of results is returned.
   * @return ListScanRunsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsScanConfigsScanRuns($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListScanRunsResponse::class);
  }
  /**
   * Stops a ScanRun. The stopped ScanRun is returned. (scanRuns.stop)
   *
   * @param string $name Required. The resource name of the ScanRun to be stopped.
   * The name follows the format of
   * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
   * @param StopScanRunRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ScanRun
   * @throws \Google\Service\Exception
   */
  public function stop($name, StopScanRunRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('stop', [$params], ScanRun::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsScanConfigsScanRuns::class, 'Google_Service_WebSecurityScanner_Resource_ProjectsScanConfigsScanRuns');
