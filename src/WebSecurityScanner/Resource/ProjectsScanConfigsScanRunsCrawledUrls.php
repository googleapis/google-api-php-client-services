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

use Google\Service\WebSecurityScanner\ListCrawledUrlsResponse;

/**
 * The "crawledUrls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $websecurityscannerService = new Google\Service\WebSecurityScanner(...);
 *   $crawledUrls = $websecurityscannerService->projects_scanConfigs_scanRuns_crawledUrls;
 *  </code>
 */
class ProjectsScanConfigsScanRunsCrawledUrls extends \Google\Service\Resource
{
  /**
   * List CrawledUrls under a given ScanRun.
   * (crawledUrls.listProjectsScanConfigsScanRunsCrawledUrls)
   *
   * @param string $parent Required. The parent resource name, which should be a
   * scan run resource name in the format
   * 'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of CrawledUrls to return, can be
   * limited by server. If not specified or not positive, the implementation will
   * select a reasonable value.
   * @opt_param string pageToken A token identifying a page of results to be
   * returned. This should be a `next_page_token` value returned from a previous
   * List request. If unspecified, the first page of results is returned.
   * @return ListCrawledUrlsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsScanConfigsScanRunsCrawledUrls($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListCrawledUrlsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsScanConfigsScanRunsCrawledUrls::class, 'Google_Service_WebSecurityScanner_Resource_ProjectsScanConfigsScanRunsCrawledUrls');
