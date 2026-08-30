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

namespace Google\Service\AgenciesAndBrands\Resource;

use Google\Service\AgenciesAndBrands\FetchReportResultRowsResponse;

/**
 * The "results" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agenciesandbrandsService = new Google\Service\AgenciesAndBrands(...);
 *   $results = $agenciesandbrandsService->agencies_reports_results;
 *  </code>
 */
class AgenciesReportsResults extends \Google\Service\Resource
{
  /**
   * Returns the result rows from a completed report. The caller must have
   * previously called `RunReport` and waited for that operation to complete. The
   * rows will be returned according to the order specified by the `sorts` member
   * of the report definition. (results.fetchRows)
   *
   * @param string $name The report result being fetched. Format:
   * `agencies/{account_id}/reports/{report_id}/results/{report_result_id}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of rows to return. The
   * service may return fewer than this value. If unspecified, at most 1,000 rows
   * will be returned. The maximum value is 10,000; values greater than 10,000
   * will be reduced to 10,000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `FetchReportResultRows` call. Provide this to retrieve the second and
   * subsequent batches of rows.
   * @return FetchReportResultRowsResponse
   * @throws \Google\Service\Exception
   */
  public function fetchRows($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchRows', [$params], FetchReportResultRowsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgenciesReportsResults::class, 'Google_Service_AgenciesAndBrands_Resource_AgenciesReportsResults');
