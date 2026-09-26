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

namespace Google\Service\CloudTasks;

class BatchCreateTasksRequest extends \Google\Collection
{
  protected $collection_key = 'requests';
  /**
   * Optional. This field will be used to identify the long running operation,
   * avoiding duplication when user retries. If not provided, then a UUID will
   * be generated at server side.
   *
   * @var string
   */
  public $requestId;
  protected $requestsType = CreateTaskRequest::class;
  protected $requestsDataType = 'array';

  /**
   * Optional. This field will be used to identify the long running operation,
   * avoiding duplication when user retries. If not provided, then a UUID will
   * be generated at server side.
   *
   * @param string $requestId
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /**
   * Required. The list of requests to create tasks. The queue specified in
   * parent field of each CreateTaskRequest will be the same. This validation
   * happens on the client side as well as in the handler.
   * BatchCreateTasksRequest.parent will also be the same value as the
   * individual CreateTaskRequest.parent . The maximum number of requests is
   * 100.
   *
   * @param CreateTaskRequest[] $requests
   */
  public function setRequests($requests)
  {
    $this->requests = $requests;
  }
  /**
   * @return CreateTaskRequest[]
   */
  public function getRequests()
  {
    return $this->requests;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchCreateTasksRequest::class, 'Google_Service_CloudTasks_BatchCreateTasksRequest');
