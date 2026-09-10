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

use Google\Service\CloudAuditManager\ListControlsResponse;

/**
 * The "controls" collection of methods.
 * Typical usage is:
 *  <code>
 *   $auditmanagerService = new Google\Service\CloudAuditManager(...);
 *   $controls = $auditmanagerService->organizations_locations_standards_controls;
 *  </code>
 */
class OrganizationsLocationsStandardsControls extends \Google\Service\Resource
{
  /**
   * Lists the controls that you must implement to become compliant to a
   * regulatory standard. (controls.listOrganizationsLocationsStandardsControls)
   *
   * @param string $parent Required. Standard to list controls for, in one of the
   * following formats: *
   * `projects/{project}/locations/{location}/standards/{standard}` *
   * `folders/{folder}/locations/{location}/standards/{standard}` *
   * `organizations/{organization}/locations/{location}/standards/{standard}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of items to return in a
   * single page. The service might return fewer items than this value. If
   * unspecified, the service picks an appropriate default. The maximum value is
   * 100; values above 100 are reduced to 100.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * call, to retrieve the next page of results.
   * @return ListControlsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsStandardsControls($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListControlsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsStandardsControls::class, 'Google_Service_CloudAuditManager_Resource_OrganizationsLocationsStandardsControls');
