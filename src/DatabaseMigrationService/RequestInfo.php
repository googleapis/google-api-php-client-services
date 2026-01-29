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

namespace Google\Service\DatabaseMigrationService;

class RequestInfo extends \Google\Model
{
  /**
   * An opaque string that should only be interpreted by the service generating
   * it. For example, it can be used to identify requests in the service's logs.
   *
   * @var string
   */
  public $requestId;
  /**
   * Any data that was used to serve this request. For example, an encrypted
   * stack trace that can be sent back to the service provider for debugging.
   *
   * @var string
   */
  public $servingData;

  /**
   * An opaque string that should only be interpreted by the service generating
   * it. For example, it can be used to identify requests in the service's logs.
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
   * Any data that was used to serve this request. For example, an encrypted
   * stack trace that can be sent back to the service provider for debugging.
   *
   * @param string $servingData
   */
  public function setServingData($servingData)
  {
    $this->servingData = $servingData;
  }
  /**
   * @return string
   */
  public function getServingData()
  {
    return $this->servingData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RequestInfo::class, 'Google_Service_DatabaseMigrationService_RequestInfo');
