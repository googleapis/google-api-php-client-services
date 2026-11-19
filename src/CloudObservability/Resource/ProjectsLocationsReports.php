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

use Google\Service\CloudObservability\ListReportsResponse;
use Google\Service\CloudObservability\Operation;
use Google\Service\CloudObservability\Report;
use Google\Service\CloudObservability\SendReportRequest;

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $observabilityService = new Google\Service\CloudObservability(...);
 *   $reports = $observabilityService->projects_locations_reports;
 *  </code>
 */
class ProjectsLocationsReports extends \Google\Service\Resource
{
  /**
   * Create a Report. (reports.create)
   *
   * @param string $parent Required. The full resource name of the location where
   * the report should be created projects/[PROJECT_ID]/locations/[LOCATION_ID]
   * For example: projects/my-project/locations/global
   * @param Report $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string reportId Required. A client-assigned identifier for the
   * report. The maximum length is 63 characters. Valid characters are
   * `a-zA-Z0-9-._~%!$&'()*+,;=@`
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Report $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a Report resource. (reports.delete)
   *
   * @param string $name Required. The resource name of the report to delete.
   * Format: projects/{project}/locations/{location}/reports/{REPORT_ID}
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
   * Report Endpoints Gets a Report resource. (reports.get)
   *
   * @param string $name Required. The resource name of the report to retrieve.
   * Format: projects/{project}/locations/{location}/reports/{REPORT_ID}
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
   * Lists Report resources (reports.listProjectsLocationsReports)
   *
   * @param string $parent Required. The scope of reports to list Format:
   * projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of results to return
   * from this request. Note that the server may return fewer reports than
   * requested. If unspecified, the server will pick an appropriate default. The
   * maximum value is 100; values above 100 will be coerced to 100. If not
   * provided, the default page size is 10.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListReports` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListReports` must match the
   * call that provided the page token (except `page_size`, which may differ).
   * @return ListReportsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsReports($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListReportsResponse::class);
  }
  /**
   * Updates a Report resource. (reports.patch)
   *
   * @param string $name Identifier. The resource name of the report. Format:
   * projects/{project}/locations/{location}/reports/{report}
   * @param Report $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The field mask specifying which fields
   * of the report are to be updated.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, Report $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
  /**
   * Sends a Report resource via email. (reports.send)
   *
   * @param string $name Required. The resource name of the report to send.
   * Format: projects/{project}/locations/{location}/reports/{REPORT_ID}
   * @param SendReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function send($name, SendReportRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('send', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsReports::class, 'Google_Service_CloudObservability_Resource_ProjectsLocationsReports');
