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

use Google\Service\SecurityCommandCenter\EventThreatDetectionCustomModule;
use Google\Service\SecurityCommandCenter\ListEventThreatDetectionCustomModulesResponse;
use Google\Service\SecurityCommandCenter\SecuritycenterEmpty;

/**
 * The "customModules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $customModules = $securitycenterService->folders_eventThreatDetectionSettings_customModules;
 *  </code>
 */
class FoldersEventThreatDetectionSettingsCustomModules extends \Google\Service\Resource
{
  /**
   * Creates an ETD custom module at the given level. Creating a module has a
   * side-effect of creating modules at all descendants. (customModules.create)
   *
   * @param string $parent Required. The new custom module's parent. Its format
   * is: * "organizations/{organization}/eventThreatDetectionSettings". *
   * "folders/{folder}/eventThreatDetectionSettings". *
   * "projects/{project}/eventThreatDetectionSettings".
   * @param EventThreatDetectionCustomModule $postBody
   * @param array $optParams Optional parameters.
   * @return EventThreatDetectionCustomModule
   */
  public function create($parent, EventThreatDetectionCustomModule $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], EventThreatDetectionCustomModule::class);
  }
  /**
   * Deletes an ETD custom module. Deletion at resident level also deletes modules
   * at all descendants. Deletion at any other level is not supported.
   * (customModules.delete)
   *
   * @param string $name Required. Name of the custom module to delete. Its format
   * is: * "organizations/{organization}/eventThreatDetectionSettings/customModule
   * s/{module}". *
   * "folders/{folder}/eventThreatDetectionSettings/customModules/{module}". *
   * "projects/{project}/eventThreatDetectionSettings/customModules/{module}".
   * @param array $optParams Optional parameters.
   * @return SecuritycenterEmpty
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SecuritycenterEmpty::class);
  }
  /**
   * Gets an ETD custom module. Retrieves the module at the given level.
   * (customModules.get)
   *
   * @param string $name Required. Name of the custom module to get. Its format
   * is: * "organizations/{organization}/eventThreatDetectionSettings/customModule
   * s/{module}". *
   * "folders/{folder}/eventThreatDetectionSettings/customModules/{module}". *
   * "projects/{project}/eventThreatDetectionSettings/customModules/{module}".
   * @param array $optParams Optional parameters.
   * @return EventThreatDetectionCustomModule
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], EventThreatDetectionCustomModule::class);
  }
  /**
   * Lists ETD custom modules. Retrieve all resident and inherited modules at the
   * given level (no descendants).
   * (customModules.listFoldersEventThreatDetectionSettingsCustomModules)
   *
   * @param string $parent Required. Name of the parent to list custom modules.
   * Its format is: * "organizations/{organization}/eventThreatDetectionSettings".
   * * "folders/{folder}/eventThreatDetectionSettings". *
   * "projects/{project}/eventThreatDetectionSettings".
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize The maximum number of modules to return. The service
   * may return fewer than this value. If unspecified, at most 10 configs will be
   * returned. The maximum value is 1000; values above 1000 will be coerced to
   * 1000.
   * @opt_param string pageToken A page token, received from a previous
   * `ListEventThreatDetectionCustomModules` call. Provide this to retrieve the
   * subsequent page. When paginating, all other parameters provided to
   * `ListEventThreatDetectionCustomModules` must match the call that provided the
   * page token.
   * @return ListEventThreatDetectionCustomModulesResponse
   */
  public function listFoldersEventThreatDetectionSettingsCustomModules($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListEventThreatDetectionCustomModulesResponse::class);
  }
  /**
   * Updates an ETD custom module at the given level. All config fields can be
   * updated when updating the module at resident level. Only enablement state can
   * be updated when updating the module at inherited levels. Updating the module
   * has a side-effect that it updates all descendants that are inherited from
   * this module. (customModules.patch)
   *
   * @param string $name Immutable. The resource name of the Event Threat
   * Detection custom module. Its format is: * "organizations/{organization}/event
   * ThreatDetectionSettings/customModules/{module}". *
   * "folders/{folder}/eventThreatDetectionSettings/customModules/{module}". *
   * "projects/{project}/eventThreatDetectionSettings/customModules/{module}".
   * @param EventThreatDetectionCustomModule $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The list of fields to be updated. If empty all
   * mutable fields will be updated.
   * @return EventThreatDetectionCustomModule
   */
  public function patch($name, EventThreatDetectionCustomModule $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], EventThreatDetectionCustomModule::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoldersEventThreatDetectionSettingsCustomModules::class, 'Google_Service_SecurityCommandCenter_Resource_FoldersEventThreatDetectionSettingsCustomModules');
