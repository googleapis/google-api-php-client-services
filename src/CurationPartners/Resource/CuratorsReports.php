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

namespace Google\Service\CurationPartners\Resource;

use Google\Service\CurationPartners\CurationpartnersEmpty;
use Google\Service\CurationPartners\ListReportsResponse;
use Google\Service\CurationPartners\Operation;
use Google\Service\CurationPartners\Report;
use Google\Service\CurationPartners\RunReportRequest;

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $curationpartnersService = new Google\Service\CurationPartners(...);
 *   $reports = $curationpartnersService->curators_reports;
 *  </code>
 */
class CuratorsReports extends \Google\Service\Resource
{
  /**
   * Creates a `Report` object. (reports.create)
   *
   * @param string $parent Required. The parent resource where this `Report` will
   * be created. Format: `curators/{account_id}`
   * @param Report $postBody
   * @param array $optParams Optional parameters.
   * @return Report
   * @throws \Google\Service\Exception
   */
  public function create($parent, Report $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Report::class);
  }
  /**
   * Deletes a `Report` object. (reports.delete)
   *
   * @param string $name Required. Resource name of the report to delete. Format:
   * `curators/{account_id}/reports/{report_id}`
   * @param array $optParams Optional parameters.
   * @return CurationpartnersEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], CurationpartnersEmpty::class);
  }
  /**
   * Retrieves a `Report` object. (reports.get)
   *
   * @param string $name Required. The resource name of the report. Format:
   * `curators/{account_id}/reports/{report_id}`
   * @param array $optParams Optional parameters.
   * @return Report
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Report::class);
  }
  /**
   * Lists `Report` objects. (reports.listCuratorsReports)
   *
   * @param string $parent Required. The parent, which owns this collection of
   * reports. Format: `curators/{account_id}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Expression to filter the response. See
   * syntax details at https://developers.google.com/ad-manager/api/beta/filters
   * @opt_param string orderBy Optional. Expression to specify sorting order. See
   * syntax details at https://developers.google.com/ad-
   * manager/api/beta/filters#order
   * @opt_param int pageSize Optional. The maximum number of `Reports` to return.
   * The service may return fewer than this value. If unspecified, at most 50
   * `Reports` will be returned. The maximum value is 1000; values greater than
   * 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListReports` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListReports` must match the
   * call that provided the page token.
   * @opt_param int skip Optional. Number of individual resources to skip while
   * paginating.
   * @return ListReportsResponse
   * @throws \Google\Service\Exception
   */
  public function listCuratorsReports($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListReportsResponse::class);
  }
  /**
   * Updates a `Report` object. (reports.patch)
   *
   * @param string $name Identifier. The resource name of the report. Report
   * resource name have the form: `curators/{account_id}/reports/{report_id}`
   * @param Report $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update.
   * @return Report
   * @throws \Google\Service\Exception
   */
  public function patch($name, Report $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Report::class);
  }
  /**
   * Initiates the execution of an existing report asynchronously. Users can get
   * the report by polling this operation using `OperationsService.GetOperation`.
   * Poll every 5 seconds initially, with an exponential backoff. Once a report is
   * complete, the operation will contain a `RunReportResponse` in its response
   * field containing a report_result that can be passed to the
   * `FetchReportResultRows` method to retrieve the report data. (reports.run)
   *
   * @param string $name Required. The report to run. Format:
   * `curators/{account_id}/reports/{report_id}`
   * @param RunReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function run($name, RunReportRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('run', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CuratorsReports::class, 'Google_Service_CurationPartners_Resource_CuratorsReports');
