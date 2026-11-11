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

namespace Google\Service\CCAIPlatform\Resource;

use Google\Service\CCAIPlatform\ListPhoneNumbersResponse;

/**
 * The "phoneNumbers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactcenteraiplatformService = new Google\Service\CCAIPlatform(...);
 *   $phoneNumbers = $contactcenteraiplatformService->projects_locations_contactCenters_phoneNumbers;
 *  </code>
 */
class ProjectsLocationsContactCentersPhoneNumbers extends \Google\Service\Resource
{
  /**
   * Lists phone numbers allocated to a single ContactCenter.
   * (phoneNumbers.listProjectsLocationsContactCentersPhoneNumbers)
   *
   * @param string $parent Required. The parent ContactCenter resource name.
   * Format:
   * projects/{project}/locations/{location}/contactCenters/{contact_center}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Requested page size. The maximum value is
   * 1000; values above 1000 will be coerced to 1000. If unspecified, the default
   * page size is 500.
   * @opt_param string pageToken Optional. Page token from a previous
   * ListPhoneNumbers call.
   * @return ListPhoneNumbersResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsContactCentersPhoneNumbers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListPhoneNumbersResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsContactCentersPhoneNumbers::class, 'Google_Service_CCAIPlatform_Resource_ProjectsLocationsContactCentersPhoneNumbers');
