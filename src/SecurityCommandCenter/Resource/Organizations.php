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

namespace Google\Service\SecurityCommandCenter\Resource;

use Google\Service\SecurityCommandCenter\OrganizationSettings;

/**
 * The "organizations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $organizations = $securitycenterService->organizations;
 *  </code>
 */
class Organizations extends \Google\Service\Resource
{
  /**
   * (organizations.getOrganizationSettings)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return OrganizationSettings
   * @throws \Google\Service\Exception
   */
  public function getOrganizationSettings($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getOrganizationSettings', [$params], OrganizationSettings::class);
  }
  /**
   * (organizations.updateOrganizationSettings)
   *
   * @param string $name
   * @param OrganizationSettings $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return OrganizationSettings
   * @throws \Google\Service\Exception
   */
  public function updateOrganizationSettings($name, OrganizationSettings $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateOrganizationSettings', [$params], OrganizationSettings::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Organizations::class, 'Google_Service_SecurityCommandCenter_Resource_Organizations');
