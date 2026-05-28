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

namespace Google\Service\VMwareEngine;

class MigrateManagementVmsRequest extends \Google\Model
{
  /**
   * Required. The user-provided identifier of the workload cluster to which the
   * management VMs are to be migrated. The cluster must be in the same private
   * cloud as the one specified in `name`, and must be a workload cluster. The
   * eventual cluster name will be constructed from the private cloud name and
   * this cluster ID.
   *
   * @var string
   */
  public $clusterId;
  /**
   * Optional. Checksum used to ensure that the user-provided value is up to
   * date before the server processes the request. The server compares provided
   * checksum with the current checksum of the resource. If the user-provided
   * value is out of date, this request returns an `ABORTED` error.
   *
   * @var string
   */
  public $etag;
  /**
   * Optional. A request ID to identify requests. Specify a unique request ID so
   * that if you must retry your request, the server will know to ignore the
   * request if it has already been completed. The server guarantees that a
   * request doesn't result in creation of duplicate commitments for at least 60
   * minutes. For example, consider a situation where you make an initial
   * request and the request times out. If you make the request again with the
   * same request ID, the server can check if the original operation with the
   * same request ID was received, and if so, will ignore the second request.
   * This prevents clients from accidentally creating duplicate commitments. The
   * request ID must be a valid UUID with the exception that zero UUID is not
   * supported (00000000-0000-0000-0000-000000000000).
   *
   * @var string
   */
  public $requestId;

  /**
   * Required. The user-provided identifier of the workload cluster to which the
   * management VMs are to be migrated. The cluster must be in the same private
   * cloud as the one specified in `name`, and must be a workload cluster. The
   * eventual cluster name will be constructed from the private cloud name and
   * this cluster ID.
   *
   * @param string $clusterId
   */
  public function setClusterId($clusterId)
  {
    $this->clusterId = $clusterId;
  }
  /**
   * @return string
   */
  public function getClusterId()
  {
    return $this->clusterId;
  }
  /**
   * Optional. Checksum used to ensure that the user-provided value is up to
   * date before the server processes the request. The server compares provided
   * checksum with the current checksum of the resource. If the user-provided
   * value is out of date, this request returns an `ABORTED` error.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Optional. A request ID to identify requests. Specify a unique request ID so
   * that if you must retry your request, the server will know to ignore the
   * request if it has already been completed. The server guarantees that a
   * request doesn't result in creation of duplicate commitments for at least 60
   * minutes. For example, consider a situation where you make an initial
   * request and the request times out. If you make the request again with the
   * same request ID, the server can check if the original operation with the
   * same request ID was received, and if so, will ignore the second request.
   * This prevents clients from accidentally creating duplicate commitments. The
   * request ID must be a valid UUID with the exception that zero UUID is not
   * supported (00000000-0000-0000-0000-000000000000).
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MigrateManagementVmsRequest::class, 'Google_Service_VMwareEngine_MigrateManagementVmsRequest');
