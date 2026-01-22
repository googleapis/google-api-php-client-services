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

namespace Google\Service\DataprocMetastore;

class Consumer extends \Google\Model
{
  /**
   * Output only. The location of the endpoint URI. Format:
   * projects/{project}/locations/{location}.
   *
   * @var string
   */
  public $endpointLocation;
  /**
   * Output only. The URI of the endpoint used to access the metastore service.
   *
   * @var string
   */
  public $endpointUri;
  /**
   * Immutable. The subnetwork of the customer project from which an IP address
   * is reserved and used as the Dataproc Metastore service's endpoint. It is
   * accessible to hosts in the subnet and to all hosts in a subnet in the same
   * region and same network. There must be at least one IP address available in
   * the subnet's primary range. The subnet is specified in the following form:p
   * rojects/{project_number}/regions/{region_id}/subnetworks/{subnetwork_id}
   *
   * @var string
   */
  public $subnetwork;

  /**
   * Output only. The location of the endpoint URI. Format:
   * projects/{project}/locations/{location}.
   *
   * @param string $endpointLocation
   */
  public function setEndpointLocation($endpointLocation)
  {
    $this->endpointLocation = $endpointLocation;
  }
  /**
   * @return string
   */
  public function getEndpointLocation()
  {
    return $this->endpointLocation;
  }
  /**
   * Output only. The URI of the endpoint used to access the metastore service.
   *
   * @param string $endpointUri
   */
  public function setEndpointUri($endpointUri)
  {
    $this->endpointUri = $endpointUri;
  }
  /**
   * @return string
   */
  public function getEndpointUri()
  {
    return $this->endpointUri;
  }
  /**
   * Immutable. The subnetwork of the customer project from which an IP address
   * is reserved and used as the Dataproc Metastore service's endpoint. It is
   * accessible to hosts in the subnet and to all hosts in a subnet in the same
   * region and same network. There must be at least one IP address available in
   * the subnet's primary range. The subnet is specified in the following form:p
   * rojects/{project_number}/regions/{region_id}/subnetworks/{subnetwork_id}
   *
   * @param string $subnetwork
   */
  public function setSubnetwork($subnetwork)
  {
    $this->subnetwork = $subnetwork;
  }
  /**
   * @return string
   */
  public function getSubnetwork()
  {
    return $this->subnetwork;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Consumer::class, 'Google_Service_DataprocMetastore_Consumer');
