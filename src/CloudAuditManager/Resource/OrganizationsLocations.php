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

use Google\Service\CloudAuditManager\EnrollResourceRequest;
use Google\Service\CloudAuditManager\Enrollment;

/**
 * The "locations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $auditmanagerService = new Google\Service\CloudAuditManager(...);
 *   $locations = $auditmanagerService->organizations_locations;
 *  </code>
 */
class OrganizationsLocations extends \Google\Service\Resource
{
  /**
   * Adds your project, folder, or organization to Audit Manager. This method
   * creates the Audit Manager service agent in your workload and grants required
   * permissions to the service agent. If you make this request on a workload
   * that's already enrolled, then this method overrides the existing set of
   * destinations. (locations.enrollResource)
   *
   * @param string $scope Required. Organization, folder, or project to enroll in
   * Audit Manager, in one of the following formats: *
   * `projects/{project}/locations/{location}` *
   * `folders/{folder}/locations/{location}` *
   * `organizations/{organization}/locations/{location}`
   * @param EnrollResourceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Enrollment
   * @throws \Google\Service\Exception
   */
  public function enrollResource($scope, EnrollResourceRequest $postBody, $optParams = [])
  {
    $params = ['scope' => $scope, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('enrollResource', [$params], Enrollment::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocations::class, 'Google_Service_CloudAuditManager_Resource_OrganizationsLocations');
