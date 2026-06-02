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

use Google\Service\SecurityCommandCenter\GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule;
use Google\Service\SecurityCommandCenter\ListDescendantSecurityHealthAnalyticsCustomModulesResponse;
use Google\Service\SecurityCommandCenter\ListSecurityHealthAnalyticsCustomModulesResponse;
use Google\Service\SecurityCommandCenter\SecuritycenterEmpty;
use Google\Service\SecurityCommandCenter\SimulateSecurityHealthAnalyticsCustomModuleRequest;
use Google\Service\SecurityCommandCenter\SimulateSecurityHealthAnalyticsCustomModuleResponse;

/**
 * The "customModules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $customModules = $securitycenterService->organizations_securityHealthAnalyticsSettings_customModules;
 *  </code>
 */
class OrganizationsSecurityHealthAnalyticsSettingsCustomModules extends \Google\Service\Resource
{
  /**
   * (customModules.create)
   *
   * @param string $parent
   * @param GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule::class);
  }
  /**
   * (customModules.delete)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return SecuritycenterEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SecuritycenterEmpty::class);
  }
  /**
   * (customModules.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule::class);
  }
  /**
   * (customModules.listOrganizationsSecurityHealthAnalyticsSettingsCustomModules)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListSecurityHealthAnalyticsCustomModulesResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsSecurityHealthAnalyticsSettingsCustomModules($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSecurityHealthAnalyticsCustomModulesResponse::class);
  }
  /**
   * (customModules.listDescendant)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListDescendantSecurityHealthAnalyticsCustomModulesResponse
   * @throws \Google\Service\Exception
   */
  public function listDescendant($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('listDescendant', [$params], ListDescendantSecurityHealthAnalyticsCustomModulesResponse::class);
  }
  /**
   * (customModules.patch)
   *
   * @param string $name
   * @param GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudSecuritycenterV1SecurityHealthAnalyticsCustomModule::class);
  }
  /**
   * (customModules.simulate)
   *
   * @param string $parent
   * @param SimulateSecurityHealthAnalyticsCustomModuleRequest $postBody
   * @param array $optParams Optional parameters.
   * @return SimulateSecurityHealthAnalyticsCustomModuleResponse
   * @throws \Google\Service\Exception
   */
  public function simulate($parent, SimulateSecurityHealthAnalyticsCustomModuleRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('simulate', [$params], SimulateSecurityHealthAnalyticsCustomModuleResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsSecurityHealthAnalyticsSettingsCustomModules::class, 'Google_Service_SecurityCommandCenter_Resource_OrganizationsSecurityHealthAnalyticsSettingsCustomModules');
