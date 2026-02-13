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

use Google\Service\CustomerEngagementSuite\BatchDeleteConversationsRequest;
use Google\Service\CustomerEngagementSuite\CesEmpty;
use Google\Service\CustomerEngagementSuite\Conversation;
use Google\Service\CustomerEngagementSuite\ListConversationsResponse;
use Google\Service\CustomerEngagementSuite\Operation;

/**
 * The "conversations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $conversations = $cesService->projects_locations_apps_conversations;
 *  </code>
 */
class ProjectsLocationsAppsConversations extends \Google\Service\Resource
{
  /**
   * Batch deletes the specified conversations. (conversations.batchDelete)
   *
   * @param string $parent Required. The resource name of the app to delete
   * conversations from. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   * @param BatchDeleteConversationsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function batchDelete($parent, BatchDeleteConversationsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', [$params], Operation::class);
  }
  /**
   * Deletes the specified conversation. (conversations.delete)
   *
   * @param string $name Required. The resource name of the conversation to
   * delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source Optional. Indicate the source of the conversation.
   * If not set, Source.Live will be applied by default.
   * @return CesEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], CesEmpty::class);
  }
  /**
   * Gets details of the specified conversation. (conversations.get)
   *
   * @param string $name Required. The resource name of the conversation to
   * retrieve.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string source Optional. Indicate the source of the conversation.
   * If not set, all source will be searched.
   * @return Conversation
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Conversation::class);
  }
  /**
   * Lists conversations in the given app.
   * (conversations.listProjectsLocationsAppsConversations)
   *
   * @param string $parent Required. The resource name of the app to list
   * conversations from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the
   * conversations. See https://google.aip.dev/160 for more details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListConversations call.
   * @opt_param string source Optional. Indicate the source of the conversation.
   * If not set, Source.Live will be applied by default. Will be deprecated in
   * favor of `sources` field.
   * @opt_param string sources Optional. Indicate the sources of the
   * conversations. If not set, all available sources will be applied by default.
   * @return ListConversationsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsConversations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListConversationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsConversations::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsConversations');
