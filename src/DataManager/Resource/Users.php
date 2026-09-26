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

namespace Google\Service\DataManager\Resource;

use Google\Service\DataManager\IngestUsersRequest;
use Google\Service\DataManager\IngestUsersResponse;
use Google\Service\DataManager\RemoveUsersRequest;
use Google\Service\DataManager\RemoveUsersResponse;

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $datamanagerService = new Google\Service\DataManager(...);
 *   $users = $datamanagerService->users;
 *  </code>
 */
class Users extends \Google\Service\Resource
{
  /**
   * (users.ingest)
   *
   * @param IngestUsersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return IngestUsersResponse
   * @throws \Google\Service\Exception
   */
  public function ingest(IngestUsersRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('ingest', [$params], IngestUsersResponse::class);
  }
  /**
   * (users.remove)
   *
   * @param RemoveUsersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RemoveUsersResponse
   * @throws \Google\Service\Exception
   */
  public function remove(RemoveUsersRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('remove', [$params], RemoveUsersResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Users::class, 'Google_Service_DataManager_Resource_Users');
