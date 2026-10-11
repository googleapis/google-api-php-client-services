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

namespace Google\Service\FirebaseDataConnect\Resource;

use Google\Service\FirebaseDataConnect\HttpBody;

/**
 * The "postgrest" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasedataconnectService = new Google\Service\FirebaseDataConnect(...);
 *   $postgrest = $firebasedataconnectService->projects_locations_services_postgrest;
 *  </code>
 */
class ProjectsLocationsServicesPostgrest extends \Google\Service\Resource
{
  /**
   * Executes a dynamic DELETE mutation on rows matching the URL filters.
   * (postgrest.postgrestDelete)
   *
   * @param string $firebasedataconnectService Required. The resource name of the
   * service, in the format:
   * `projects/{project}/locations/{location}/services/{service}`
   * @param string $firebasedataconnectTable Required. The name of the table to
   * delete from.
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function postgrestDelete($firebasedataconnectService, $firebasedataconnectTable, $optParams = [])
  {
    $params = ['firebasedataconnectService' => $firebasedataconnectService, 'firebasedataconnectTable' => $firebasedataconnectTable];
    $params = array_merge($params, $optParams);
    return $this->call('postgrestDelete', [$params], HttpBody::class);
  }
  /**
   * Executes a dynamic INSERT (create) or UPSERT mutation on a target table.
   * (postgrest.postgrestInsert)
   *
   * @param string $firebasedataconnectService Required. The resource name of the
   * service, in the format:
   * `projects/{project}/locations/{location}/services/{service}`
   * @param string $firebasedataconnectTable Required. The name of the table to
   * insert into.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function postgrestInsert($firebasedataconnectService, $firebasedataconnectTable, HttpBody $postBody, $optParams = [])
  {
    $params = ['firebasedataconnectService' => $firebasedataconnectService, 'firebasedataconnectTable' => $firebasedataconnectTable, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('postgrestInsert', [$params], HttpBody::class);
  }
  /**
   * Executes a dynamic SELECT (read) query on a target PostgreSQL table.
   * Projections, filters, sorting, and embeddings are mapped from the HTTP URL
   * query parameters. (postgrest.postgrestSelect)
   *
   * @param string $firebasedataconnectService Required. The resource name of the
   * service, in the format:
   * `projects/{project}/locations/{location}/services/{service}`
   * @param string $firebasedataconnectTable Required. The name of the table to
   * select from.
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function postgrestSelect($firebasedataconnectService, $firebasedataconnectTable, $optParams = [])
  {
    $params = ['firebasedataconnectService' => $firebasedataconnectService, 'firebasedataconnectTable' => $firebasedataconnectTable];
    $params = array_merge($params, $optParams);
    return $this->call('postgrestSelect', [$params], HttpBody::class);
  }
  /**
   * Executes a dynamic UPDATE (modify) mutation on rows matching the URL filters.
   * (postgrest.postgrestUpdate)
   *
   * @param string $firebasedataconnectService Required. The resource name of the
   * service, in the format:
   * `projects/{project}/locations/{location}/services/{service}`
   * @param string $firebasedataconnectTable Required. The name of the table to
   * update.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function postgrestUpdate($firebasedataconnectService, $firebasedataconnectTable, HttpBody $postBody, $optParams = [])
  {
    $params = ['firebasedataconnectService' => $firebasedataconnectService, 'firebasedataconnectTable' => $firebasedataconnectTable, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('postgrestUpdate', [$params], HttpBody::class);
  }
  /**
   * Executes a dynamic UPSERT (replace or create) mutation on a target table
   * identified by primary key filters. (postgrest.postgrestUpsert)
   *
   * @param string $firebasedataconnectService Required. The resource name of the
   * service, in the format:
   * `projects/{project}/locations/{location}/services/{service}`
   * @param string $firebasedataconnectTable Required. The name of the table to
   * upsert into.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function postgrestUpsert($firebasedataconnectService, $firebasedataconnectTable, HttpBody $postBody, $optParams = [])
  {
    $params = ['firebasedataconnectService' => $firebasedataconnectService, 'firebasedataconnectTable' => $firebasedataconnectTable, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('postgrestUpsert', [$params], HttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsServicesPostgrest::class, 'Google_Service_FirebaseDataConnect_Resource_ProjectsLocationsServicesPostgrest');
