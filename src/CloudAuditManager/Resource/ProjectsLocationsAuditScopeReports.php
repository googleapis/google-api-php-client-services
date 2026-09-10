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

use Google\Service\CloudAuditManager\AuditScopeReport;
use Google\Service\CloudAuditManager\GenerateAuditScopeReportRequest;

/**
 * The "auditScopeReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $auditmanagerService = new Google\Service\CloudAuditManager(...);
 *   $auditScopeReports = $auditmanagerService->projects_locations_auditScopeReports;
 *  </code>
 */
class ProjectsLocationsAuditScopeReports extends \Google\Service\Resource
{
  /**
   * Generates an audit scope report for the given standard. The report includes
   * the following: * The technical attributes and constraints that Audit Manager
   * uses to verify your compliance with a framework. * A list of Google Cloud
   * services and resources that are within the scope of the framework.
   * (auditScopeReports.generate)
   *
   * @param string $scope Required. Project or folder that the audit scope report
   * is generated for, in one of the following formats: *
   * `projects/{project}/locations/{location}` *
   * `folders/{folder}/locations/{location}` *
   * `organizations/{organization}/locations/{location}`
   * @param GenerateAuditScopeReportRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AuditScopeReport
   * @throws \Google\Service\Exception
   */
  public function generate($scope, GenerateAuditScopeReportRequest $postBody, $optParams = [])
  {
    $params = ['scope' => $scope, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generate', [$params], AuditScopeReport::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAuditScopeReports::class, 'Google_Service_CloudAuditManager_Resource_ProjectsLocationsAuditScopeReports');
