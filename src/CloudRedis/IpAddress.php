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

namespace Google\Service\CloudRedis;

class IpAddress extends \Google\Model
{
  /**
   * The private IP address assigned to the resource within a Virtual Private
   * Cloud (VPC). This IP is only reachable from within the same VPC network.
   * Stored in standard string format (e.g., "10.0.0.2").
   *
   * @var string
   */
  public $privateIp;
  /**
   * The public IP address assigned to the resource. This IP is reachable from
   * the internet. Stored in standard string format (e.g., "34.72.1.1").
   *
   * @var string
   */
  public $publicIp;

  /**
   * The private IP address assigned to the resource within a Virtual Private
   * Cloud (VPC). This IP is only reachable from within the same VPC network.
   * Stored in standard string format (e.g., "10.0.0.2").
   *
   * @param string $privateIp
   */
  public function setPrivateIp($privateIp)
  {
    $this->privateIp = $privateIp;
  }
  /**
   * @return string
   */
  public function getPrivateIp()
  {
    return $this->privateIp;
  }
  /**
   * The public IP address assigned to the resource. This IP is reachable from
   * the internet. Stored in standard string format (e.g., "34.72.1.1").
   *
   * @param string $publicIp
   */
  public function setPublicIp($publicIp)
  {
    $this->publicIp = $publicIp;
  }
  /**
   * @return string
   */
  public function getPublicIp()
  {
    return $this->publicIp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IpAddress::class, 'Google_Service_CloudRedis_IpAddress');
