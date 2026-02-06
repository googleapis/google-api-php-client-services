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

namespace Google\Service\CustomerEngagementSuite\Resource;

use Google\Service\CustomerEngagementSuite\App;
use Google\Service\CustomerEngagementSuite\ExecuteToolRequest;
use Google\Service\CustomerEngagementSuite\ExecuteToolResponse;
use Google\Service\CustomerEngagementSuite\ExportAppRequest;
use Google\Service\CustomerEngagementSuite\ImportAppRequest;
use Google\Service\CustomerEngagementSuite\ListAppsResponse;
use Google\Service\CustomerEngagementSuite\Operation;
use Google\Service\CustomerEngagementSuite\RetrieveToolSchemaRequest;
use Google\Service\CustomerEngagementSuite\RetrieveToolSchemaResponse;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $apps = $cesService->projects_locations_apps;
 *  </code>
 */
class ProjectsLocationsApps extends \Google\Service\Resource
{
  /**
   * Creates a new app in the given project and location. (apps.create)
   *
   * @param string $parent Required. The resource name of the location to create
   * an app in.
   * @param App $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string appId Optional. The ID to use for the app, which will
   * become the final component of the app's resource name. If not provided, a
   * unique ID will be automatically assigned for the app.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, App $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes the specified app. (apps.delete)
   *
   * @param string $name Required. The resource name of the app to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The current etag of the app. If an etag is
   * not provided, the deletion will overwrite any concurrent changes. If an etag
   * is provided and does not match the current etag of the app, deletion will be
   * blocked and an ABORTED error will be returned.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Executes the given tool with the given arguments. (apps.executeTool)
   *
   * @param string $parent Required. The resource name of the app which the
   * tool/toolset belongs to. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   * @param ExecuteToolRequest $postBody
   * @param array $optParams Optional parameters.
   * @return ExecuteToolResponse
   * @throws \Google\Service\Exception
   */
  public function executeTool($parent, ExecuteToolRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('executeTool', [$params], ExecuteToolResponse::class);
  }
  /**
   * Exports the specified app. (apps.exportApp)
   *
   * @param string $name Required. The resource name of the app to export.
   * @param ExportAppRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function exportApp($name, ExportAppRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('exportApp', [$params], Operation::class);
  }
  /**
   * Gets details of the specified app. (apps.get)
   *
   * @param string $name Required. The resource name of the app to retrieve.
   * @param array $optParams Optional parameters.
   * @return App
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], App::class);
  }
  /**
   * Imports the specified app. (apps.importApp)
   *
   * @param string $parent Required. The parent resource name with the location of
   * the app to import.
   * @param ImportAppRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function importApp($parent, ImportAppRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('importApp', [$params], Operation::class);
  }
  /**
   * Lists apps in the given project and location.
   * (apps.listProjectsLocationsApps)
   *
   * @param string $parent Required. The resource name of the location to list
   * apps from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the
   * apps. See https://google.aip.dev/160 for more details.
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListApps call.
   * @return ListAppsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsApps($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAppsResponse::class);
  }
  /**
   * Updates the specified app. (apps.patch)
   *
   * @param string $name Identifier. The unique identifier of the app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   * @param App $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to control which
   * fields get updated. If the mask is not present, all fields will be updated.
   * @return App
   * @throws \Google\Service\Exception
   */
  public function patch($name, App $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], App::class);
  }
  /**
   * Retrieve the schema of the given tool. The schema is computed on the fly for
   * the given instance of the tool. (apps.retrieveToolSchema)
   *
   * @param string $parent Required. The resource name of the app which the
   * tool/toolset belongs to. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   * @param RetrieveToolSchemaRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RetrieveToolSchemaResponse
   * @throws \Google\Service\Exception
   */
  public function retrieveToolSchema($parent, RetrieveToolSchemaRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('retrieveToolSchema', [$params], RetrieveToolSchemaResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsApps::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsApps');
