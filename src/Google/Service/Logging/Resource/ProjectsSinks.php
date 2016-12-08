<?php
/*
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

/**
 * The "sinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $loggingService = new Google_Service_Logging(...);
 *   $sinks = $loggingService->sinks;
 *  </code>
 */
class Google_Service_Logging_Resource_ProjectsSinks extends Google_Service_Resource
{
  /**
   * Creates a sink. (sinks.create)
   *
   * @param string $parent Required. The resource in which to create the sink.
   * Example: `"projects/my-project-id"`. The new sink must be provided in the
   * request.
   * @param Google_Service_Logging_LogSink $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool uniqueWriterIdentity Optional. Whether the sink will have a
   * dedicated service account returned in the sink's writer_identity. Set this
   * field to be true to export logs from one project to a different project. This
   * field is ignored for non-project sinks (e.g. organization sinks) because
   * those sinks are required to have dedicated service accounts.
   * @return Google_Service_Logging_LogSink
   */
  public function create($parent, Google_Service_Logging_LogSink $postBody, $optParams = array())
  {
    $params = array('parent' => $parent, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_Logging_LogSink");
  }
  /**
   * Deletes a sink. (sinks.delete)
   *
   * @param string $sinkName Required. The resource name of the sink to delete,
   * including the parent resource and the sink identifier.  Example: `"projects
   * /my-project-id/sinks/my-sink-id"`.  It is an error if the sink does not
   * exist.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_LoggingEmpty
   */
  public function delete($sinkName, $optParams = array())
  {
    $params = array('sinkName' => $sinkName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Logging_LoggingEmpty");
  }
  /**
   * Gets a sink. (sinks.get)
   *
   * @param string $sinkName Required. The resource name of the sink to return.
   * Example: `"projects/my-project-id/sinks/my-sink-id"`.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Logging_LogSink
   */
  public function get($sinkName, $optParams = array())
  {
    $params = array('sinkName' => $sinkName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Logging_LogSink");
  }
  /**
   * Lists sinks. (sinks.listProjectsSinks)
   *
   * @param string $parent Required. The resource name where this sink was
   * created. Example: `"projects/my-logging-project"`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of results to return
   * from this request. Non-positive values are ignored.  The presence of
   * `nextPageToken` in the response indicates that more results might be
   * available.
   * @opt_param string pageToken Optional. If present, then retrieve the next
   * batch of results from the preceding call to this method.  `pageToken` must be
   * the value of `nextPageToken` from the previous response.  The values of other
   * method parameters should be identical to those in the previous call.
   * @return Google_Service_Logging_ListSinksResponse
   */
  public function listProjectsSinks($parent, $optParams = array())
  {
    $params = array('parent' => $parent);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Logging_ListSinksResponse");
  }
  /**
   * Updates or creates a sink. (sinks.update)
   *
   * @param string $sinkName Required. The resource name of the sink to update,
   * including the parent resource and the sink identifier.  If the sink does not
   * exist, this method creates the sink.  Example: `"projects/my-project-id/sinks
   * /my-sink-id"`.
   * @param Google_Service_Logging_LogSink $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool uniqueWriterIdentity Optional. Whether the sink will have a
   * dedicated service account returned in the sink's writer_identity. Set this
   * field to be true to export logs from one project to a different project. This
   * field is ignored for non-project sinks (e.g. organization sinks) because
   * those sinks are required to have dedicated service accounts.
   * @return Google_Service_Logging_LogSink
   */
  public function update($sinkName, Google_Service_Logging_LogSink $postBody, $optParams = array())
  {
    $params = array('sinkName' => $sinkName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Logging_LogSink");
  }
}
