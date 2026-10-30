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

namespace Google\Service\DeveloperConnect\Resource;

use Google\Service\DeveloperConnect\AddGitRepositoryLinkPullRequestCommentRequest;
use Google\Service\DeveloperConnect\AddGitRepositoryLinkPullRequestReviewCommentRequest;
use Google\Service\DeveloperConnect\DeveloperconnectEmpty;
use Google\Service\DeveloperConnect\DiffGitRepositoryLinkCommitResponse;
use Google\Service\DeveloperConnect\FetchGitRefsResponse;
use Google\Service\DeveloperConnect\FetchGitRepositoryLinkCommitListResponse;
use Google\Service\DeveloperConnect\FetchGitRepositoryLinkCommitResponse;
use Google\Service\DeveloperConnect\FetchGitRepositoryLinkFileBlameResponse;
use Google\Service\DeveloperConnect\FetchGitRepositoryLinkPullRequestListResponse;
use Google\Service\DeveloperConnect\FetchReadTokenRequest;
use Google\Service\DeveloperConnect\FetchReadTokenResponse;
use Google\Service\DeveloperConnect\FetchReadWriteTokenRequest;
use Google\Service\DeveloperConnect\FetchReadWriteTokenResponse;
use Google\Service\DeveloperConnect\GitRepositoryLink;
use Google\Service\DeveloperConnect\ListGitRepositoryLinksResponse;
use Google\Service\DeveloperConnect\ModifyGitRepositoryLinkPullRequestRequest;
use Google\Service\DeveloperConnect\OpenGitRepositoryLinkPullRequestRequest;
use Google\Service\DeveloperConnect\Operation;
use Google\Service\DeveloperConnect\ProcessBitbucketCloudWebhookRequest;
use Google\Service\DeveloperConnect\ProcessBitbucketDataCenterWebhookRequest;
use Google\Service\DeveloperConnect\ProcessGitLabEnterpriseWebhookRequest;
use Google\Service\DeveloperConnect\ProcessGitLabWebhookRequest;
use Google\Service\DeveloperConnect\PullRequest;
use Google\Service\DeveloperConnect\PullRequestComment;
use Google\Service\DeveloperConnect\PullRequestReviewComment;

/**
 * The "gitRepositoryLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $developerconnectService = new Google\Service\DeveloperConnect(...);
 *   $gitRepositoryLinks = $developerconnectService->projects_locations_connections_gitRepositoryLinks;
 *  </code>
 */
class ProjectsLocationsConnectionsGitRepositoryLinks extends \Google\Service\Resource
{
  /**
   * Add a comment to a Pull Request. (gitRepositoryLinks.addPullRequestComment)
   *
   * @param string $name Required. The resource name of the GitRepositoryLink in
   * the format `projects/locations/connections/gitRepositoryLinks`.
   * @param AddGitRepositoryLinkPullRequestCommentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return PullRequestComment
   * @throws \Google\Service\Exception
   */
  public function addPullRequestComment($name, AddGitRepositoryLinkPullRequestCommentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('addPullRequestComment', [$params], PullRequestComment::class);
  }
  /**
   * Add a review comment (inline on diff) to a Pull Request.
   * (gitRepositoryLinks.addPullRequestReviewComment)
   *
   * @param string $name Required. The resource name of the GitRepositoryLink in
   * the format `projects/locations/connections/gitRepositoryLinks`.
   * @param AddGitRepositoryLinkPullRequestReviewCommentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return PullRequestReviewComment
   * @throws \Google\Service\Exception
   */
  public function addPullRequestReviewComment($name, AddGitRepositoryLinkPullRequestReviewCommentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('addPullRequestReviewComment', [$params], PullRequestReviewComment::class);
  }
  /**
   * Creates a GitRepositoryLink. Upon linking a Git Repository, Developer Connect
   * will configure the Git Repository to send webhook events to Developer
   * Connect. Connections that use Firebase GitHub Application will have events
   * forwarded to the Firebase service. Connections that use Gemini Code Assist
   * will have events forwarded to Gemini Code Assist service. All other
   * Connections will have events forwarded to Cloud Build.
   * (gitRepositoryLinks.create)
   *
   * @param string $parent Required. Value for parent.
   * @param GitRepositoryLink $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string gitRepositoryLinkId Required. The ID to use for the
   * repository, which will become the final component of the repository's
   * resource name. This ID should be unique in the connection. Allows
   * alphanumeric characters and any of -._~%!$&'()*+,;=@.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param bool validateOnly Optional. If set, validate the request, but do
   * not actually post it.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GitRepositoryLink $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single GitRepositoryLink. (gitRepositoryLinks.delete)
   *
   * @param string $name Required. Name of the resource
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. This checksum is computed by the server
   * based on the value of other fields, and may be sent on update and delete
   * requests to ensure the client has an up-to-date value before proceeding.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes after the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param bool validateOnly Optional. If set, validate the request, but do
   * not actually post it.
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
   * Diff commits for a GitRepositoryLink. (gitRepositoryLinks.diffCommit)
   *
   * @param string $name Required. The resource name of the GitRepositoryLink.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string baseSha Required. The base commit SHA or ref.
   * @opt_param string headSha Required. The head commit SHA or ref.
   * @opt_param string pathFilters Optional. Path patterns or exact paths to
   * filter returned files. When `path_filters` is specified, `FileDiff.patch` is
   * populated for all matching files (use `["**"]` to include patches for all
   * changed files). When `path_filters` is omitted or empty, the full list of
   * `FileDiff` is returned without patch diffs (`FileDiff.patch` is empty).
   * @return DiffGitRepositoryLinkCommitResponse
   * @throws \Google\Service\Exception
   */
  public function diffCommit($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('diffCommit', [$params], DiffGitRepositoryLinkCommitResponse::class);
  }
  /**
   * Fetch Commit details from a Git repository link.
   * (gitRepositoryLinks.fetchCommit)
   *
   * @param string $name Required. The resource name of the GitRepositoryLink in
   * the format `projects/locations/connections/gitRepositoryLinks`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string commitSha Required. The commit SHA, or symbolic revision
   * (for example, branch name, tag, or Git reference).
   * @opt_param string pathFilters Optional. Path patterns or exact paths to
   * filter returned files (only applicable in `FULL` view). When `path_filters`
   * is specified, `FileDiff.patch` is populated for all matching files (use
   * `["**"]` to include patches for all changed files). When `path_filters` is
   * omitted or empty, the full list of `FileDiff` is returned without patch diffs
   * (`FileDiff.patch` is empty).
   * @opt_param string view Optional. The level of commit details to return in the
   * response. Defaults to `FULL` if unspecified. In `FULL` view, `files` metadata
   * (paths and statuses) are returned; `path_filters` must also be specified to
   * populate line patch hunks.
   * @return FetchGitRepositoryLinkCommitResponse
   * @throws \Google\Service\Exception
   */
  public function fetchCommit($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchCommit', [$params], FetchGitRepositoryLinkCommitResponse::class);
  }
  /**
   * Fetch a list of Commits from a Git repository link.
   * (gitRepositoryLinks.fetchCommitList)
   *
   * @param string $name Required. The resource name of the GitRepositoryLink in
   * the format `projects/locations/connections/gitRepositoryLinks`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Number of results to return in the list.
   * Default is 50. Max is 100.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `FetchGitRepositoryLinkCommitList` call. Provide this to retrieve the
   * subsequent page. When paginating, all other parameters provided to
   * `FetchGitRepositoryLinkCommitList` must match the call that provided the page
   * token.
   * @opt_param string ref Optional. The commit SHA, or symbolic revision (for
   * example, branch name, tag, or Git reference) from which to start listing
   * commits.
   * @opt_param string view Optional. The level of commit details to return in the
   * response. Only `BASIC` is supported; `FULL` returns `INVALID_ARGUMENT`.
   * Defaults to `BASIC` if unspecified. Use `FetchGitRepositoryLinkCommit` to get
   * file diffs for a single commit.
   * @return FetchGitRepositoryLinkCommitListResponse
   * @throws \Google\Service\Exception
   */
  public function fetchCommitList($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchCommitList', [$params], FetchGitRepositoryLinkCommitListResponse::class);
  }
  /**
   * Fetches blame information for a file or line range in a file.
   * (gitRepositoryLinks.fetchFileBlame)
   *
   * @param string $name Required. The resource name of the GitRepositoryLink in
   * the format `projects/locations/connections/gitRepositoryLinks`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int firstLine Optional. The 1-indexed starting line number of the
   * range to blame (inclusive). If not specified, blame begins at line 1.
   * @opt_param int lastLine Optional. The 1-indexed ending line number of the
   * range to blame (inclusive). If not specified, blame extends to the end of the
   * file.
   * @opt_param string path Required. The file path within the repository.
   * @opt_param string ref Required. The SCM commit SHA, or symbolic revision (for
   * example, branch name, tag) from which to fetch the blame.
   * @return FetchGitRepositoryLinkFileBlameResponse
   * @throws \Google\Service\Exception
   */
  public function fetchFileBlame($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchFileBlame', [$params], FetchGitRepositoryLinkFileBlameResponse::class);
  }
  /**
   * Fetch the list of branches or tags for a given repository.
   * (gitRepositoryLinks.fetchGitRefs)
   *
   * @param string $gitRepositoryLink Required. The resource name of
   * GitRepositoryLink in the format
   * `projects/locations/connections/gitRepositoryLinks`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Number of results to return in the list.
   * Default to 20.
   * @opt_param string pageToken Optional. Page start.
   * @opt_param string refType Required. Type of refs to fetch.
   * @return FetchGitRefsResponse
   * @throws \Google\Service\Exception
   */
  public function fetchGitRefs($gitRepositoryLink, $optParams = [])
  {
    $params = ['gitRepositoryLink' => $gitRepositoryLink];
    $params = array_merge($params, $optParams);
    return $this->call('fetchGitRefs', [$params], FetchGitRefsResponse::class);
  }
  /**
   * Fetch Pull Request details from a Git repository link.
   * (gitRepositoryLinks.fetchPullRequest)
   *
   * @param string $name Required. The resource name of the GitRepositoryLink in
   * the format `projects/locations/connections/gitRepositoryLinks`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pullRequestId Required. The ID of the Pull Request.
   * @return PullRequest
   * @throws \Google\Service\Exception
   */
  public function fetchPullRequest($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchPullRequest', [$params], PullRequest::class);
  }
  /**
   * Fetches a list of Pull Requests from the remote repository.
   * (gitRepositoryLinks.fetchPullRequestList)
   *
   * @param string $name Required. The GitRepositoryLink resource name in the
   * format `projects/locations/connections/gitRepositoryLinks`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that filters the pull
   * requests returned in the response. Only a single equality comparison on
   * `state` is supported, for example `state = "OPEN"`. Supported values are
   * `OPEN`, `CLOSED`, and `MERGED`. `DECLINED` is only supported for SCM
   * providers that support declining pull requests, and returns
   * `INVALID_ARGUMENT` for GitHub, GitHub Enterprise, GitLab, and GitLab
   * Enterprise. Other values or expressions return `INVALID_ARGUMENT`. Defaults
   * to `state = "OPEN"` if unspecified.
   * @opt_param int pageSize Optional. Number of results to return in the list.
   * Default is 20. Max is 100. A page may contain fewer than `page_size` results
   * even when more results are available; use `next_page_token` to check for more
   * pages.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `FetchGitRepositoryLinkPullRequestList` call. Provide this to retrieve the
   * subsequent page.
   * @return FetchGitRepositoryLinkPullRequestListResponse
   * @throws \Google\Service\Exception
   */
  public function fetchPullRequestList($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('fetchPullRequestList', [$params], FetchGitRepositoryLinkPullRequestListResponse::class);
  }
  /**
   * Fetches read token of a given gitRepositoryLink.
   * (gitRepositoryLinks.fetchReadToken)
   *
   * @param string $gitRepositoryLink Required. The resource name of the
   * gitRepositoryLink in the format
   * `projects/locations/connections/gitRepositoryLinks`.
   * @param FetchReadTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return FetchReadTokenResponse
   * @throws \Google\Service\Exception
   */
  public function fetchReadToken($gitRepositoryLink, FetchReadTokenRequest $postBody, $optParams = [])
  {
    $params = ['gitRepositoryLink' => $gitRepositoryLink, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('fetchReadToken', [$params], FetchReadTokenResponse::class);
  }
  /**
   * Fetches read/write token of a given gitRepositoryLink.
   * (gitRepositoryLinks.fetchReadWriteToken)
   *
   * @param string $gitRepositoryLink Required. The resource name of the
   * gitRepositoryLink in the format
   * `projects/locations/connections/gitRepositoryLinks`.
   * @param FetchReadWriteTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return FetchReadWriteTokenResponse
   * @throws \Google\Service\Exception
   */
  public function fetchReadWriteToken($gitRepositoryLink, FetchReadWriteTokenRequest $postBody, $optParams = [])
  {
    $params = ['gitRepositoryLink' => $gitRepositoryLink, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('fetchReadWriteToken', [$params], FetchReadWriteTokenResponse::class);
  }
  /**
   * Gets details of a single GitRepositoryLink. (gitRepositoryLinks.get)
   *
   * @param string $name Required. Name of the resource
   * @param array $optParams Optional parameters.
   * @return GitRepositoryLink
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GitRepositoryLink::class);
  }
  /**
   * Lists GitRepositoryLinks in a given project, location, and connection.
   * (gitRepositoryLinks.listProjectsLocationsConnectionsGitRepositoryLinks)
   *
   * @param string $parent Required. Parent value for
   * ListGitRepositoryLinksRequest.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filtering results.
   * @opt_param string orderBy Optional. Hint for how to order the results.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListGitRepositoryLinksResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsConnectionsGitRepositoryLinks($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListGitRepositoryLinksResponse::class);
  }
  /**
   * Modifies a Pull Request in the remote SCM repository associated with a
   * GitRepositoryLink. (gitRepositoryLinks.modifyPullRequest)
   *
   * @param string $name Required. The GitRepositoryLink resource name in the
   * format `projects/locations/connections/gitRepositoryLinks`.
   * @param ModifyGitRepositoryLinkPullRequestRequest $postBody
   * @param array $optParams Optional parameters.
   * @return PullRequest
   * @throws \Google\Service\Exception
   */
  public function modifyPullRequest($name, ModifyGitRepositoryLinkPullRequestRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('modifyPullRequest', [$params], PullRequest::class);
  }
  /**
   * Opens a Pull Request in the remote SCM repository associated with a
   * GitRepositoryLink. (gitRepositoryLinks.openPullRequest)
   *
   * @param string $name Required. The GitRepositoryLink resource name in the
   * format `projects/locations/connections/gitRepositoryLinks`.
   * @param OpenGitRepositoryLinkPullRequestRequest $postBody
   * @param array $optParams Optional parameters.
   * @return PullRequest
   * @throws \Google\Service\Exception
   */
  public function openPullRequest($name, OpenGitRepositoryLinkPullRequestRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('openPullRequest', [$params], PullRequest::class);
  }
  /**
   * ProcessBitbucketCloudWebhook is called by the external Bitbucket Cloud
   * instances for notifying events.
   * (gitRepositoryLinks.processBitbucketCloudWebhook)
   *
   * @param string $name Required. The GitRepositoryLink where the webhook will be
   * received. Format: `projects/locations/connections/gitRepositoryLinks`.
   * @param ProcessBitbucketCloudWebhookRequest $postBody
   * @param array $optParams Optional parameters.
   * @return DeveloperconnectEmpty
   * @throws \Google\Service\Exception
   */
  public function processBitbucketCloudWebhook($name, ProcessBitbucketCloudWebhookRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('processBitbucketCloudWebhook', [$params], DeveloperconnectEmpty::class);
  }
  /**
   * ProcessBitbucketDataCenterWebhook is called by the external Bitbucket Data
   * Center instances for notifying events.
   * (gitRepositoryLinks.processBitbucketDataCenterWebhook)
   *
   * @param string $name Required. The GitRepositoryLink where the webhook will be
   * received. Format: `projects/locations/connections/gitRepositoryLinks`.
   * @param ProcessBitbucketDataCenterWebhookRequest $postBody
   * @param array $optParams Optional parameters.
   * @return DeveloperconnectEmpty
   * @throws \Google\Service\Exception
   */
  public function processBitbucketDataCenterWebhook($name, ProcessBitbucketDataCenterWebhookRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('processBitbucketDataCenterWebhook', [$params], DeveloperconnectEmpty::class);
  }
  /**
   * ProcessGitLabEnterpriseWebhook is called by the external GitLab Enterprise
   * instances for notifying events.
   * (gitRepositoryLinks.processGitLabEnterpriseWebhook)
   *
   * @param string $name Required. The GitRepositoryLink resource where the
   * webhook will be received. Format:
   * `projects/locations/connections/gitRepositoryLinks`.
   * @param ProcessGitLabEnterpriseWebhookRequest $postBody
   * @param array $optParams Optional parameters.
   * @return DeveloperconnectEmpty
   * @throws \Google\Service\Exception
   */
  public function processGitLabEnterpriseWebhook($name, ProcessGitLabEnterpriseWebhookRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('processGitLabEnterpriseWebhook', [$params], DeveloperconnectEmpty::class);
  }
  /**
   * ProcessGitLabWebhook is called by the GitLab.com for notifying events.
   * (gitRepositoryLinks.processGitLabWebhook)
   *
   * @param string $name Required. The GitRepositoryLink resource where the
   * webhook will be received. Format:
   * `projects/locations/connections/gitRepositoryLinks`.
   * @param ProcessGitLabWebhookRequest $postBody
   * @param array $optParams Optional parameters.
   * @return DeveloperconnectEmpty
   * @throws \Google\Service\Exception
   */
  public function processGitLabWebhook($name, ProcessGitLabWebhookRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('processGitLabWebhook', [$params], DeveloperconnectEmpty::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsConnectionsGitRepositoryLinks::class, 'Google_Service_DeveloperConnect_Resource_ProjectsLocationsConnectionsGitRepositoryLinks');
