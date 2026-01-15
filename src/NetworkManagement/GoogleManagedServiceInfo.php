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

class GoogleManagedServiceInfo extends \Google\Model
{
  /**
   * Service type is unspecified.
   */
  public const SERVICE_TYPE_SERVICE_TYPE_UNSPECIFIED = 'SERVICE_TYPE_UNSPECIFIED';
  /**
   * Unsupported Google-managed service.
   */
  public const SERVICE_TYPE_UNSUPPORTED = 'UNSUPPORTED';
  /**
   * Cloud SQL Instance.
   */
  public const SERVICE_TYPE_CLOUD_SQL = 'CLOUD_SQL';
  /**
   * GKE Cluster control plane.
   */
  public const SERVICE_TYPE_GKE_CLUSTER_CONTROL_PLANE = 'GKE_CLUSTER_CONTROL_PLANE';
  /**
   * Redis Cluster.
   */
  public const SERVICE_TYPE_REDIS_CLUSTER = 'REDIS_CLUSTER';
  /**
   * Redis Instance.
   */
  public const SERVICE_TYPE_REDIS_INSTANCE = 'REDIS_INSTANCE';
  /**
   * IP address of the Google-managed service endpoint.
   *
   * @var string
   */
  public $ipAddress;
  /**
   * URI of the Google-managed service endpoint network, it is empty if the IP
   * address is a public IP address.
   *
   * @var string
   */
  public $networkUri;
  /**
   * Type of a Google-managed service.
   *
   * @var string
   */
  public $serviceType;
  /**
   * URI of the Google-managed service.
   *
   * @var string
   */
  public $serviceUri;

  /**
   * IP address of the Google-managed service endpoint.
   *
   * @param string $ipAddress
   */
  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /**
   * @return string
   */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /**
   * URI of the Google-managed service endpoint network, it is empty if the IP
   * address is a public IP address.
   *
   * @param string $networkUri
   */
  public function setNetworkUri($networkUri)
  {
    $this->networkUri = $networkUri;
  }
  /**
   * @return string
   */
  public function getNetworkUri()
  {
    return $this->networkUri;
  }
  /**
   * Type of a Google-managed service.
   *
   * Accepted values: SERVICE_TYPE_UNSPECIFIED, UNSUPPORTED, CLOUD_SQL,
   * GKE_CLUSTER_CONTROL_PLANE, REDIS_CLUSTER, REDIS_INSTANCE
   *
   * @param self::SERVICE_TYPE_* $serviceType
   */
  public function setServiceType($serviceType)
  {
    $this->serviceType = $serviceType;
  }
  /**
   * @return self::SERVICE_TYPE_*
   */
  public function getServiceType()
  {
    return $this->serviceType;
  }
  /**
   * URI of the Google-managed service.
   *
   * @param string $serviceUri
   */
  public function setServiceUri($serviceUri)
  {
    $this->serviceUri = $serviceUri;
  }
  /**
   * @return string
   */
  public function getServiceUri()
  {
    return $this->serviceUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleManagedServiceInfo::class, 'Google_Service_NetworkManagement_GoogleManagedServiceInfo');
