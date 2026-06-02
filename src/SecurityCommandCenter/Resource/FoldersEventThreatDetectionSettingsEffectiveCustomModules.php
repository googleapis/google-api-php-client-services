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

use Google\Service\SecurityCommandCenter\EffectiveEventThreatDetectionCustomModule;
use Google\Service\SecurityCommandCenter\ListEffectiveEventThreatDetectionCustomModulesResponse;

/**
 * The "effectiveCustomModules" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $effectiveCustomModules = $securitycenterService->folders_eventThreatDetectionSettings_effectiveCustomModules;
 *  </code>
 */
class FoldersEventThreatDetectionSettingsEffectiveCustomModules extends \Google\Service\Resource
{
  /**
   * (effectiveCustomModules.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return EffectiveEventThreatDetectionCustomModule
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], EffectiveEventThreatDetectionCustomModule::class);
  }
  /**
   * (effectiveCustomModules.listFoldersEventThreatDetectionSettingsEffectiveCusto
   * mModules)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListEffectiveEventThreatDetectionCustomModulesResponse
   * @throws \Google\Service\Exception
   */
  public function listFoldersEventThreatDetectionSettingsEffectiveCustomModules($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListEffectiveEventThreatDetectionCustomModulesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoldersEventThreatDetectionSettingsEffectiveCustomModules::class, 'Google_Service_SecurityCommandCenter_Resource_FoldersEventThreatDetectionSettingsEffectiveCustomModules');
