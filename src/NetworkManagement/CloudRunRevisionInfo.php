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

class CloudRunRevisionInfo extends \Google\Model
{
  /**
   * Name of a Cloud Run revision.
   *
   * @var string
   */
  public $displayName;
  /**
   * IP address of a Cloud Run revision. If the Cloud Run revision is in dual-
   * stack subnetwork, this is the IP address relevant to the trace. Populated
   * for `ARRIVE_AT_CLOUD_RUN_REVISION` steps.
   *
   * @var string
   */
  public $ipAddress;
  /**
   * Location in which this revision is deployed.
   *
   * @var string
   */
  public $location;
  /**
   * URI of Cloud Run service this revision belongs to. Format:
   * `projects/{project}/locations/{location}/services/{service}` Mutually
   * exclusive with `worker_pool_uri`.
   *
   * @var string
   */
  public $serviceUri;
  /**
   * URI of the Cloud Run revision. Format:
   * `projects/{project}/locations/{location}/revisions/{revision}`
   *
   * @var string
   */
  public $uri;
  /**
   * URI of Cloud Run worker pool this revision belongs to. Format:
   * `projects/{project}/locations/{location}/workerPools/{worker_pool}`
   * Mutually exclusive with `service_uri`.
   *
   * @var string
   */
  public $workerPoolUri;

  /**
   * Name of a Cloud Run revision.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * IP address of a Cloud Run revision. If the Cloud Run revision is in dual-
   * stack subnetwork, this is the IP address relevant to the trace. Populated
   * for `ARRIVE_AT_CLOUD_RUN_REVISION` steps.
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
   * Location in which this revision is deployed.
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * URI of Cloud Run service this revision belongs to. Format:
   * `projects/{project}/locations/{location}/services/{service}` Mutually
   * exclusive with `worker_pool_uri`.
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
  /**
   * URI of the Cloud Run revision. Format:
   * `projects/{project}/locations/{location}/revisions/{revision}`
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
  /**
   * URI of Cloud Run worker pool this revision belongs to. Format:
   * `projects/{project}/locations/{location}/workerPools/{worker_pool}`
   * Mutually exclusive with `service_uri`.
   *
   * @param string $workerPoolUri
   */
  public function setWorkerPoolUri($workerPoolUri)
  {
    $this->workerPoolUri = $workerPoolUri;
  }
  /**
   * @return string
   */
  public function getWorkerPoolUri()
  {
    return $this->workerPoolUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudRunRevisionInfo::class, 'Google_Service_NetworkManagement_CloudRunRevisionInfo');
