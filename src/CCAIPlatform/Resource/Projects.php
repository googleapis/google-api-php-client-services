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

use Google\Service\CCAIPlatform\ContactCenterQuota;

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactcenteraiplatformService = new Google\Service\CCAIPlatform(...);
 *   $projects = $contactcenteraiplatformService->projects;
 *  </code>
 */
class Projects extends \Google\Service\Resource
{
  /**
   * Queries the contact center quota, an aggregation over all the projects, that
   * belongs to the billing account, which the input project belongs to.
   * (projects.queryContactCenterQuota)
   *
   * @param string $parent Required. Parent project resource id.
   * @param array $optParams Optional parameters.
   * @return ContactCenterQuota
   */
  public function queryContactCenterQuota($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('queryContactCenterQuota', [$params], ContactCenterQuota::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Projects::class, 'Google_Service_CCAIPlatform_Resource_Projects');
