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

use Google\Service\CloudAuditManager\ListResourceEnrollmentStatusesResponse;
use Google\Service\CloudAuditManager\ResourceEnrollmentStatus;

/**
 * The "resourceEnrollmentStatuses" collection of methods.
 * Typical usage is:
 *  <code>
 *   $auditmanagerService = new Google\Service\CloudAuditManager(...);
 *   $resourceEnrollmentStatuses = $auditmanagerService->folders_locations_resourceEnrollmentStatuses;
 *  </code>
 */
class FoldersLocationsResourceEnrollmentStatuses extends \Google\Service\Resource
{
  /**
   * Gets a resource and its enrollment status. (resourceEnrollmentStatuses.get)
   *
   * @param string $name Required. Name of the resource enrollment status, in one
   * of the following formats: * `folders/{folder}/locations/{location}/resourceEn
   * rollmentStatuses/{resource_enrollment_status}` * `projects/{project}/location
   * s/{location}/resourceEnrollmentStatuses/{resource_enrollment_status}` * `orga
   * nizations/{organization}/locations/{location}/resourceEnrollmentStatuses/{res
   * ource_enrollment_status}`
   * @param array $optParams Optional parameters.
   * @return ResourceEnrollmentStatus
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], ResourceEnrollmentStatus::class);
  }
  /**
   * Lists all the folders and projects in an organization or folder, along with
   * their enrollments.
   * (resourceEnrollmentStatuses.listFoldersLocationsResourceEnrollmentStatuses)
   *
   * @param string $parent Required. Parent organization or folder to list
   * enrollment statuses for, in one of the following formats: *
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
   * @return ListResourceEnrollmentStatusesResponse
   * @throws \Google\Service\Exception
   */
  public function listFoldersLocationsResourceEnrollmentStatuses($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListResourceEnrollmentStatusesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoldersLocationsResourceEnrollmentStatuses::class, 'Google_Service_CloudAuditManager_Resource_FoldersLocationsResourceEnrollmentStatuses');
