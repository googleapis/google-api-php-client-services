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

namespace Google\Service\SQLAdmin\Resource;

use Google\Service\SQLAdmin\InstancesListResponse;

/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google\Service\SQLAdmin(...);
 *   $instances = $sqladminService->instances;
 *  </code>
 */
class Instances extends \Google\Service\Resource
{
  /**
   * Lists instances under a given project. (instances.listInstances)
   *
   * @param string $project Project ID of the project for which to list Cloud SQL
   * instances.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter A filter expression that filters resources listed in
   * the response. The expression is in the form of field:value. For example,
   * 'instanceType:CLOUD_SQL_INSTANCE'. Fields can be nested as needed as per
   * their JSON representation, such as 'settings.userLabels.auto_start:true'.
   * Multiple filter queries are space-separated. For example. 'state:RUNNABLE
   * instanceType:CLOUD_SQL_INSTANCE'. By default, each expression is an AND
   * expression. However, you can include AND and OR expressions explicitly.
   * @opt_param string maxResults The maximum number of results to return per
   * response.
   * @opt_param string pageToken A previously-returned page token representing
   * part of the larger set of results to view.
   * @return InstancesListResponse
   */
  public function listInstances($project, $optParams = [])
  {
    $params = ['project' => $project];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], InstancesListResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Instances::class, 'Google_Service_SQLAdmin_Resource_Instances');
