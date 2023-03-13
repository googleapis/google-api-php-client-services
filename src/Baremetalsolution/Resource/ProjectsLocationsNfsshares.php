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

namespace Google\Service\Baremetalsolution\Resource;

use Google\Service\Baremetalsolution\NfsShare;
use Google\Service\Baremetalsolution\RenameNfsShareRequest;

/**
 * The "nfsshares" collection of methods.
 * Typical usage is:
 *  <code>
 *   $baremetalsolutionService = new Google\Service\Baremetalsolution(...);
 *   $nfsshares = $baremetalsolutionService->projects_locations_nfsshares;
 *  </code>
 */
class ProjectsLocationsNfsshares extends \Google\Service\Resource
{
  /**
   * RenameNfsShare sets a new name for an nfsshare. Use with caution, previous
   * names become immediately invalidated. (nfsshares.rename)
   *
   * @param string $name Required. The `name` field is used to identify the
   * nfsshare. Format:
   * projects/{project}/locations/{location}/nfsshares/{nfsshare}
   * @param RenameNfsShareRequest $postBody
   * @param array $optParams Optional parameters.
   * @return NfsShare
   */
  public function rename($name, RenameNfsShareRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rename', [$params], NfsShare::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsNfsshares::class, 'Google_Service_Baremetalsolution_Resource_ProjectsLocationsNfsshares');
