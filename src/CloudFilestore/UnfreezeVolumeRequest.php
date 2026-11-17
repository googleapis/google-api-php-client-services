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

namespace Google\Service\CloudFilestore;

class UnfreezeVolumeRequest extends \Google\Collection
{
  protected $collection_key = 'ipAcls';
  protected $ipAclsType = NfsExportOptions::class;
  protected $ipAclsDataType = 'array';
  /**
   * Optional. The limit for how much data can be written to this volume, in
   * MiB.
   *
   * @var string
   */
  public $quota;
  /**
   * Optional. A unique ID used to identify the request, so retries are
   * idempotent. Must be a valid UUID4; the zero UUID
   * (`00000000-0000-0000-0000-000000000000`) is not supported.
   *
   * @var string
   */
  public $requestId;

  /**
   * Optional. IP ACLs defining permissions/ACLs to apply to the unfrozen volume
   *
   * @param NfsExportOptions[] $ipAcls
   */
  public function setIpAcls($ipAcls)
  {
    $this->ipAcls = $ipAcls;
  }
  /**
   * @return NfsExportOptions[]
   */
  public function getIpAcls()
  {
    return $this->ipAcls;
  }
  /**
   * Optional. The limit for how much data can be written to this volume, in
   * MiB.
   *
   * @param string $quota
   */
  public function setQuota($quota)
  {
    $this->quota = $quota;
  }
  /**
   * @return string
   */
  public function getQuota()
  {
    return $this->quota;
  }
  /**
   * Optional. A unique ID used to identify the request, so retries are
   * idempotent. Must be a valid UUID4; the zero UUID
   * (`00000000-0000-0000-0000-000000000000`) is not supported.
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
class_alias(UnfreezeVolumeRequest::class, 'Google_Service_CloudFilestore_UnfreezeVolumeRequest');
