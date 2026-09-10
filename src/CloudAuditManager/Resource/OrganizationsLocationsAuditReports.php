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

namespace Google\Service\CloudAuditManager\Resource;

use Google\Service\CloudAuditManager\AuditReport;
use Google\Service\CloudAuditManager\GenerateAuditReportRequest;
use Google\Service\CloudAuditManager\ListAuditReportsResponse;
use Google\Service\CloudAuditManager\Operation;

/**
 * The "auditReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $auditmanagerService = new Google\Service\CloudAuditManager(...);
 *   $auditReports = $auditmanagerService->organizations_locations_auditReports;
 *  </code>
 */
class OrganizationsLocationsAuditReports extends \Google\Service\Resource
{
  /**
   * Registers audit report generation requests. This method returns the operation
   * identifier that you can use to track the report generation progress.
   * (auditReports.generate)
   *
   * @param string $scope Required. Organization, folder, or project that the
   * audit applies to, in one of the following formats: *
   * `projects/{project}/locations/{location}` *
   * `folders/{folder}/locations/{location}` *
   * `organizations/{organization}/locations/{location}`
   * @param GenerateAuditReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function generate($scope, GenerateAuditReportRequest $postBody, $optParams = [])
  {
    $params = ['scope' => $scope, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generate', [$params], Operation::class);
  }
  /**
   * Gets the full metadata and findings for an audit report. (auditReports.get)
   *
   * @param string $name Required. Name of the audit report, in one of the
   * following formats: *
   * `projects/{project}/locations/{location}/auditReports/{audit_report}` *
   * `folders/{folder}/locations/{location}/auditReports/{audit_report}` * `organi
   * zations/{organization}/locations/{location}/auditReports/{audit_report}`
   * @param array $optParams Optional parameters.
   * @return AuditReport
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AuditReport::class);
  }
  /**
   * Lists the audit reports for the organization, folder, or project that you
   * specify as the parent scope.
   * (auditReports.listOrganizationsLocationsAuditReports)
   *
   * @param string $parent Required. Parent organization, folder, or project to
   * list reports for, in one of the following formats: *
   * `projects/{project}/locations/{location}` *
   * `folders/{folder}/locations/{location}` *
   * `organizations/{organization}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of items to return in a
   * single page. The service might return fewer items than this value. If
   * unspecified, the service picks an appropriate default. The maximum value is
   * 100; values above 100 are reduced to 100.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * call, to retrieve the next page of results.
   * @return ListAuditReportsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsAuditReports($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAuditReportsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsAuditReports::class, 'Google_Service_CloudAuditManager_Resource_OrganizationsLocationsAuditReports');
