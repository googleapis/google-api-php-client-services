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

namespace Google\Service\DeviceRun\Resource;

use Google\Service\DeviceRun\CancelSessionRequest;
use Google\Service\DeviceRun\CancelSessionResponse;
use Google\Service\DeviceRun\GoogleLongrunningOperation;
use Google\Service\DeviceRun\ListSessionsResponse;
use Google\Service\DeviceRun\Session;

/**
 * The "sessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $devicerunService = new Google\Service\DeviceRun(...);
 *   $sessions = $devicerunService->projects_locations_sessions;
 *  </code>
 */
class ProjectsLocationsSessions extends \Google\Service\Resource
{
  /**
   * Cancels an in-progress automation session. This RPC returns immediately and
   * cancellation proceeds asynchronously. If the session is already finished,
   * this RPC will have no effect. (sessions.cancel)
   *
   * @param string $name Required. The name of the session. Format:
   * "projects/{project}/locations/{location}/sessions/{session}"
   * @param CancelSessionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CancelSessionResponse
   * @throws \Google\Service\Exception
   */
  public function cancel($name, CancelSessionRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('cancel', [$params], CancelSessionResponse::class);
  }
  /**
   * Starts an automation session with the specified configuration. This method
   * returns a long-running `Operation`, awaiting the completion of all jobs in
   * the session. (sessions.create)
   *
   * @param string $parent Required. The parent resource where this session will
   * be created. Format: `projects/{project}/locations/{location}`.
   * @param Session $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. A unique identifier for this request.
   * This request is only idempotent if a `request_id` is provided, i.e. if a
   * request with the same `request_id` is received, then the previous result will
   * be returned. The server will guarantee that for at least 60 minutes after the
   * first request. The value must be a UUID (e.g.,
   * 123e4567-e89b-12d3-a456-426655440000). See github.com/google/uuid for more
   * details.
   * @opt_param string sessionId Optional. The ID to use for the session, which
   * will become the final component of the resource name. If not provided, the
   * server will generate a value for this field. When provided, this value must
   * be between 4 and 63 characters, and match the following regex:
   * ^a-z{2,61}[a-z0-9]$.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Session $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a session. This RPC returns immediately and deletion proceeds
   * asynchronously. It will cancel the session at first if it is still running.
   * (sessions.delete)
   *
   * @param string $name Required. The name of the session. Format:
   * `projects/{project}/locations/{location}/sessions/{session}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. A unique identifier for this request.
   * This request is only idempotent if a `request_id` is provided, i.e. if a
   * request with the same `request_id` is received, then the previous result will
   * be returned. The server will guarantee that for at least 60 minutes after the
   * first request. The value must be a UUID (e.g.,
   * 123e4567-e89b-12d3-a456-426655440000). See github.com/google/uuid for more
   * details.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Returns information about a previously created automation session.
   * (sessions.get)
   *
   * @param string $name Required. The name of the session. Format:
   * `projects/{project}/locations/{location}/sessions/{session}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. The view of the session to return. If not
   * set, the default BASIC view will be returned.
   * @return Session
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Session::class);
  }
  /**
   * Lists previously created automation sessions. Sessions may still be in-
   * progress, or may have finished successfully, or unsuccessfully.
   * (sessions.listProjectsLocationsSessions)
   *
   * @param string $parent Required. Parent value for ListSessionsRequest The
   * parent of the collection of sessions. Format:
   * `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The raw filter text to constrain the
   * results.
   * @opt_param string orderBy Optional. The order to sort results by. Supported
   * values: `name`, `name desc`, `create_time`, `create_time desc`. Values must
   * use the snake_case field name; `createTime` is not accepted. Ordering by
   * `create_time` is not supported when listing across all locations
   * (`locations/-`). If unspecified, results are returned in an unspecified
   * order.
   * @opt_param int pageSize Optional. The maximum number of sessions to return.
   * The server may return fewer items than this value. If unspecified, at most
   * 500 sessions will be returned. The maximum value is 1000, values above will
   * be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListSessions` call. Provide this to receive the subsequent page. When
   * paginating, all other parameters provided to `ListSessions` must match the
   * call that provided the page token.
   * @opt_param string view Optional. The view of the sessions to return. If not
   * set, the `BASIC` view will be returned.
   * @return ListSessionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSessions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSessionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSessions::class, 'Google_Service_DeviceRun_Resource_ProjectsLocationsSessions');
