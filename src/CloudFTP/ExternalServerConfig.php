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

namespace Google\Service\CloudFTP;

class ExternalServerConfig extends \Google\Collection
{
  protected $collection_key = 'allowedCidrBlocks';
  /**
   * Optional. List of CIDR blocks that are allowed to access the Server. A CIDR
   * range consists of an IP Address and a prefix length to construct the subnet
   * mask. By default, the prefix length is 32 (i.e. matches a single IP
   * address). For now, only IPV4 addresses are supported. Examples:
   * "203.0.113.0/24" - matches with the IP addresses in the range 203.0.113.0 -
   * 203.0.113.255. "0.0.0.0/0" - matches against any IP address. This field
   * must contain at least one entry if the access type is EXTERNAL. The number
   * of allowed CIDR blocks cannot exceed 500. Example: 192.168.0.0/16
   *
   * @var string[]
   */
  public $allowedCidrBlocks;
  /**
   * Output only. IP address of the LB via which clients will connect.
   *
   * @var string
   */
  public $ipAddress;

  /**
   * Optional. List of CIDR blocks that are allowed to access the Server. A CIDR
   * range consists of an IP Address and a prefix length to construct the subnet
   * mask. By default, the prefix length is 32 (i.e. matches a single IP
   * address). For now, only IPV4 addresses are supported. Examples:
   * "203.0.113.0/24" - matches with the IP addresses in the range 203.0.113.0 -
   * 203.0.113.255. "0.0.0.0/0" - matches against any IP address. This field
   * must contain at least one entry if the access type is EXTERNAL. The number
   * of allowed CIDR blocks cannot exceed 500. Example: 192.168.0.0/16
   *
   * @param string[] $allowedCidrBlocks
   */
  public function setAllowedCidrBlocks($allowedCidrBlocks)
  {
    $this->allowedCidrBlocks = $allowedCidrBlocks;
  }
  /**
   * @return string[]
   */
  public function getAllowedCidrBlocks()
  {
    return $this->allowedCidrBlocks;
  }
  /**
   * Output only. IP address of the LB via which clients will connect.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExternalServerConfig::class, 'Google_Service_CloudFTP_ExternalServerConfig');
