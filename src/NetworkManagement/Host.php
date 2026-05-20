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

namespace Google\Service\NetworkManagement;

class Host extends \Google\Collection
{
  protected $collection_key = 'cloudVirtualNetworkIds';
  /**
   * Output only. The cloud instance id of the host.
   *
   * @var string
   */
  public $cloudInstanceId;
  /**
   * Output only. The cloud project id of the host.
   *
   * @var string
   */
  public $cloudProjectId;
  /**
   * Output only. The cloud provider of the host.
   *
   * @var string
   */
  public $cloudProvider;
  /**
   * Output only. The cloud region of the host.
   *
   * @var string
   */
  public $cloudRegion;
  /**
   * Output only. The ids of cloud virtual networks of the host.
   *
   * @var string[]
   */
  public $cloudVirtualNetworkIds;
  /**
   * Output only. The cloud zone of the host.
   *
   * @var string
   */
  public $cloudZone;
  /**
   * Output only. The operating system of the host.
   *
   * @var string
   */
  public $os;

  /**
   * Output only. The cloud instance id of the host.
   *
   * @param string $cloudInstanceId
   */
  public function setCloudInstanceId($cloudInstanceId)
  {
    $this->cloudInstanceId = $cloudInstanceId;
  }
  /**
   * @return string
   */
  public function getCloudInstanceId()
  {
    return $this->cloudInstanceId;
  }
  /**
   * Output only. The cloud project id of the host.
   *
   * @param string $cloudProjectId
   */
  public function setCloudProjectId($cloudProjectId)
  {
    $this->cloudProjectId = $cloudProjectId;
  }
  /**
   * @return string
   */
  public function getCloudProjectId()
  {
    return $this->cloudProjectId;
  }
  /**
   * Output only. The cloud provider of the host.
   *
   * @param string $cloudProvider
   */
  public function setCloudProvider($cloudProvider)
  {
    $this->cloudProvider = $cloudProvider;
  }
  /**
   * @return string
   */
  public function getCloudProvider()
  {
    return $this->cloudProvider;
  }
  /**
   * Output only. The cloud region of the host.
   *
   * @param string $cloudRegion
   */
  public function setCloudRegion($cloudRegion)
  {
    $this->cloudRegion = $cloudRegion;
  }
  /**
   * @return string
   */
  public function getCloudRegion()
  {
    return $this->cloudRegion;
  }
  /**
   * Output only. The ids of cloud virtual networks of the host.
   *
   * @param string[] $cloudVirtualNetworkIds
   */
  public function setCloudVirtualNetworkIds($cloudVirtualNetworkIds)
  {
    $this->cloudVirtualNetworkIds = $cloudVirtualNetworkIds;
  }
  /**
   * @return string[]
   */
  public function getCloudVirtualNetworkIds()
  {
    return $this->cloudVirtualNetworkIds;
  }
  /**
   * Output only. The cloud zone of the host.
   *
   * @param string $cloudZone
   */
  public function setCloudZone($cloudZone)
  {
    $this->cloudZone = $cloudZone;
  }
  /**
   * @return string
   */
  public function getCloudZone()
  {
    return $this->cloudZone;
  }
  /**
   * Output only. The operating system of the host.
   *
   * @param string $os
   */
  public function setOs($os)
  {
    $this->os = $os;
  }
  /**
   * @return string
   */
  public function getOs()
  {
    return $this->os;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Host::class, 'Google_Service_NetworkManagement_Host');
