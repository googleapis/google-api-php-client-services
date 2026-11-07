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

namespace Google\Service\Backupdr\Resource;

use Google\Service\Backupdr\ListRestoreTemplatesResponse;
use Google\Service\Backupdr\Operation;
use Google\Service\Backupdr\RestoreTemplate;
use Google\Service\Backupdr\RunRestoreTemplateRequest;

/**
 * The "restoreTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $backupdrService = new Google\Service\Backupdr(...);
 *   $restoreTemplates = $backupdrService->projects_locations_restoreTemplates;
 *  </code>
 */
class ProjectsLocationsRestoreTemplates extends \Google\Service\Resource
{
  /**
   * Creates a new RestoreTemplate in a given project and location.
   * (restoreTemplates.create)
   *
   * @param string $parent Required. The restore template project and location in
   * the format 'projects/{project_id}/locations/{location}'.
   * @param RestoreTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The request ID must be a valid UUID with the exception that zero UUID is not
   * supported (00000000-0000-0000-0000-000000000000).
   * @opt_param string restoreTemplateId Required. The ID of the restore template
   * to create. The ID must be unique for the specified project and location.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, RestoreTemplate $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a RestoreTemplate. (restoreTemplates.delete)
   *
   * @param string $name Required. The name of the restore template to delete.
   * Format: 'projects/{project_id}/locations/{location}/restoreTemplates/{restore
   * _template_id}'
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to true, any child
   * RestoreTemplateExecutions will also be deleted. If false and the
   * RestoreTemplate has any child executions, the request will fail.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The request ID must be a valid UUID with the exception that zero UUID is not
   * supported (00000000-0000-0000-0000-000000000000).
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
   * Gets details of a RestoreTemplate. (restoreTemplates.get)
   *
   * @param string $name Required. The name of the restore template to retrieve.
   * Format: 'projects/{project_id}/locations/{location}/restoreTemplates/{restore
   * _template_id}'
   * @param array $optParams Optional parameters.
   * @return RestoreTemplate
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], RestoreTemplate::class);
  }
  /**
   * Lists RestoreTemplates in a given project and location.
   * (restoreTemplates.listProjectsLocationsRestoreTemplates)
   *
   * @param string $parent Required. The project and location from which to list
   * the restore templates. Format: `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Field match expression used to filter the
   * results.
   * @opt_param string orderBy Optional. Field by which to sort the results.
   * @opt_param int pageSize Optional. The maximum number of items to return.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListRestoreTemplates` call.
   * @return ListRestoreTemplatesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsRestoreTemplates($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListRestoreTemplatesResponse::class);
  }
  /**
   * Updates the settings of a RestoreTemplate. (restoreTemplates.patch)
   *
   * @param string $name Identifier. The resource name of the RestoreTemplate.
   * @param RestoreTemplate $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The request ID must be a valid UUID with the exception that zero UUID is not
   * supported (00000000-0000-0000-0000-000000000000).
   * @opt_param string updateMask Optional. The list of fields to update. Field
   * mask is used to specify the fields to be overwritten in the RestoreTemplate
   * resource by the update. The fields specified in the update_mask are relative
   * to the resource, not the full request. A field will be overwritten if it is
   * in the mask.
   * @opt_param bool validateOnly Optional. Only validate the request, but do not
   * perform mutations. The default is 'false'.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, RestoreTemplate $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
  /**
   * Runs a RestoreTemplate. (restoreTemplates.run)
   *
   * @param string $name Required. The name of the restore template to run.
   * Format: 'projects/{project_id}/locations/{location}/restoreTemplates/{restore
   * _template_id}'
   * @param RunRestoreTemplateRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function run($name, RunRestoreTemplateRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('run', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsRestoreTemplates::class, 'Google_Service_Backupdr_Resource_ProjectsLocationsRestoreTemplates');
