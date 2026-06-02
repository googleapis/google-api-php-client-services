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

use Google\Service\SecurityCommandCenter\GoogleCloudSecuritycenterV1ExternalSystem;

/**
 * The "externalSystems" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $externalSystems = $securitycenterService->organizations_sources_findings_externalSystems;
 *  </code>
 */
class OrganizationsSourcesFindingsExternalSystems extends \Google\Service\Resource
{
  /**
   * (externalSystems.patch)
   *
   * @param string $name
   * @param GoogleCloudSecuritycenterV1ExternalSystem $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return GoogleCloudSecuritycenterV1ExternalSystem
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudSecuritycenterV1ExternalSystem $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudSecuritycenterV1ExternalSystem::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsSourcesFindingsExternalSystems::class, 'Google_Service_SecurityCommandCenter_Resource_OrganizationsSourcesFindingsExternalSystems');
