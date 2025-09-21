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

namespace Google\Service\Dataform\Resource;

use Google\Service\Dataform\CommitRepositoryChangesRequest;
use Google\Service\Dataform\CommitRepositoryChangesResponse;
use Google\Service\Dataform\ComputeRepositoryAccessTokenStatusResponse;
use Google\Service\Dataform\DataformEmpty;
use Google\Service\Dataform\FetchRemoteBranchesResponse;
use Google\Service\Dataform\FetchRepositoryHistoryResponse;
use Google\Service\Dataform\ListRepositoriesResponse;
use Google\Service\Dataform\QueryRepositoryDirectoryContentsResponse;
use Google\Service\Dataform\ReadRepositoryFileResponse;
use Google\Service\Dataform\Repository;

/**
 * The "repositories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataformService = new Google\Service\Dataform(...);
 *   $repositories = $dataformService->projects_locations_repositories;
 *  </code>
 */
class ProjectsLocationsRepositories extends \Google\Service\Resource
{
  /**
   * Applies a Git commit to a Repository. The Repository must not have a value
   * for `git_remote_settings.url`. (repositories.commit)
   *
   * @param string $name Required. The repository's name.
   * @param CommitRepositoryChangesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CommitRepositoryChangesResponse
   * @throws \Google\Service\Exception
   */
  public function commit($name, CommitRepositoryChangesRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('commit', [$params], CommitRepositoryChangesResponse::class);
  }
  /**
   * Computes a Repository's Git access token status.
   * (repositories.computeAccessTokenStatus)
   *
   * @param string $name Required. The repository's name.
   * @param array $optParams Optional parameters.
   * @return ComputeRepositoryAccessTokenStatusResponse
   * @throws \Google\Service\Exception
   */
  public function computeAccessTokenStatus($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('computeAccessTokenStatus', [$params], ComputeRepositoryAccessTokenStatusResponse::class);
  }
  /**
   * Creates a new Repository in a given project and location.
   * (repositories.create)
   *
   * @param string $parent Required. The location in which to create the
   * repository. Must be in the format `projects/locations`.
   * @param Repository $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string repositoryId Required. The ID to use for the repository,
   * which will become the final component of the repository's resource name.
   * @return Repository
   * @throws \Google\Service\Exception
   */
  public function create($parent, Repository $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Repository::class);
  }
  /**
   * Deletes a single Repository. (repositories.delete)
   *
   * @param string $name Required. The repository's name.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to true, child resources of this
   * repository (compilation results and workflow invocations) will also be
   * deleted. Otherwise, the request will only succeed if the repository has no
   * child resources. **Note:** *This flag doesn't support deletion of workspaces,
   * release configs or workflow configs. If any of such resources exists in the
   * repository, the request will fail.*.
   * @return DataformEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DataformEmpty::class);
  }
  /**
   * Fetches a Repository's history of commits. The Repository must not have a
   * value for `git_remote_settings.url`. (repositories.fetchHistory)
   *
   * @param string $name Required. The repository's name.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of commits to return. The
   * server may return fewer items than requested. If unspecified, the server will
   * pick an appropriate default.
   * @opt_param string pageToken Optional. Page token received from a previous
   * `FetchRepositoryHistory` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `FetchRepositoryHistory`,
   * with the exception of `page_size`, must match the call that provided the page
   * token.
   * @return FetchRepositoryHistoryResponse
   * @throws \Google\Service\Exception
   */
  public function fetchHistory($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchHistory', [$params], FetchRepositoryHistoryResponse::class);
  }
  /**
   * Fetches a Repository's remote branches. (repositories.fetchRemoteBranches)
   *
   * @param string $name Required. The repository's name.
   * @param array $optParams Optional parameters.
   * @return FetchRemoteBranchesResponse
   * @throws \Google\Service\Exception
   */
  public function fetchRemoteBranches($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchRemoteBranches', [$params], FetchRemoteBranchesResponse::class);
  }
  /**
   * Fetches a single Repository. (repositories.get)
   *
   * @param string $name Required. The repository's name.
   * @param array $optParams Optional parameters.
   * @return Repository
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Repository::class);
  }
  /**
   * Lists Repositories in a given project and location. **Note:** *This method
   * can return repositories not shown in the [Dataform
   * UI](https://console.cloud.google.com/bigquery/dataform)*.
   * (repositories.listProjectsLocationsRepositories)
   *
   * @param string $parent Required. The location in which to list repositories.
   * Must be in the format `projects/locations`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter for the returned list.
   * @opt_param string orderBy Optional. This field only supports ordering by
   * `name`. If unspecified, the server will choose the ordering. If specified,
   * the default order is ascending for the `name` field.
   * @opt_param int pageSize Optional. Maximum number of repositories to return.
   * The server may return fewer items than requested. If unspecified, the server
   * will pick an appropriate default.
   * @opt_param string pageToken Optional. Page token received from a previous
   * `ListRepositories` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListRepositories`, with the
   * exception of `page_size`, must match the call that provided the page token.
   * @return ListRepositoriesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsRepositories($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListRepositoriesResponse::class);
  }
  /**
   * Updates a single Repository. **Note:** *This method does not fully implement
   * [AIP/134](https://google.aip.dev/134). The wildcard entry () is treated as a
   * bad request, and when the `field_mask` is omitted, the request is treated as
   * a full update on all modifiable fields.* (repositories.patch)
   *
   * @param string $name Identifier. The repository's name.
   * @param Repository $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Specifies the fields to be updated in
   * the repository. If left unset, all fields will be updated.
   * @return Repository
   * @throws \Google\Service\Exception
   */
  public function patch($name, Repository $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Repository::class);
  }
  /**
   * Returns the contents of a given Repository directory. The Repository must not
   * have a value for `git_remote_settings.url`.
   * (repositories.queryDirectoryContents)
   *
   * @param string $name Required. The repository's name.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string commitSha Optional. The Commit SHA for the commit to query
   * from. If unset, the directory will be queried from HEAD.
   * @opt_param int pageSize Optional. Maximum number of paths to return. The
   * server may return fewer items than requested. If unspecified, the server will
   * pick an appropriate default.
   * @opt_param string pageToken Optional. Page token received from a previous
   * `QueryRepositoryDirectoryContents` call. Provide this to retrieve the
   * subsequent page. When paginating, all other parameters provided to
   * `QueryRepositoryDirectoryContents`, with the exception of `page_size`, must
   * match the call that provided the page token.
   * @opt_param string path Optional. The directory's full path including
   * directory name, relative to root. If left unset, the root is used.
   * @return QueryRepositoryDirectoryContentsResponse
   * @throws \Google\Service\Exception
   */
  public function queryDirectoryContents($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('queryDirectoryContents', [$params], QueryRepositoryDirectoryContentsResponse::class);
  }
  /**
   * Returns the contents of a file (inside a Repository). The Repository must not
   * have a value for `git_remote_settings.url`. (repositories.readFile)
   *
   * @param string $name Required. The repository's name.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string commitSha Optional. The commit SHA for the commit to read
   * from. If unset, the file will be read from HEAD.
   * @opt_param string path Required. Full file path to read including filename,
   * from repository root.
   * @return ReadRepositoryFileResponse
   * @throws \Google\Service\Exception
   */
  public function readFile($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('readFile', [$params], ReadRepositoryFileResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsRepositories::class, 'Google_Service_Dataform_Resource_ProjectsLocationsRepositories');
