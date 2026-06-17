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

namespace Google\Service\OracleDatabase;

class ConfigureExascaleCloudExadataInfrastructureRequest extends \Google\Model
{
  /**
   * Optional. An optional ID to identify the request.
   *
   * @var string
   */
  public $requestId;
  /**
   * Required. The total storage to be allocated to Exascale in GBs.
   *
   * @var int
   */
  public $totalStorageSizeGb;

  /**
   * Optional. An optional ID to identify the request.
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
   * Required. The total storage to be allocated to Exascale in GBs.
   *
   * @param int $totalStorageSizeGb
   */
  public function setTotalStorageSizeGb($totalStorageSizeGb)
  {
    $this->totalStorageSizeGb = $totalStorageSizeGb;
  }
  /**
   * @return int
   */
  public function getTotalStorageSizeGb()
  {
    return $this->totalStorageSizeGb;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConfigureExascaleCloudExadataInfrastructureRequest::class, 'Google_Service_OracleDatabase_ConfigureExascaleCloudExadataInfrastructureRequest');
