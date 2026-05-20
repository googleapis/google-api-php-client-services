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

class NetworkInterface extends \Google\Model
{
  /**
   * Output only. The description of the interface.
   *
   * @var string
   */
  public $adapterDescription;
  /**
   * Output only. The IP address of the interface and subnet mask in CIDR
   * format. Examples: 192.168.1.0/24, 2001:db8::/32
   *
   * @var string
   */
  public $cidr;
  /**
   * Output only. The name of the network interface. Examples: eth0, eno1
   *
   * @var string
   */
  public $interfaceName;
  /**
   * Output only. The IP address of the interface.
   *
   * @var string
   */
  public $ipAddress;
  /**
   * Output only. The MAC address of the interface.
   *
   * @var string
   */
  public $macAddress;
  /**
   * Output only. Speed of the interface in millions of bits per second.
   *
   * @var string
   */
  public $speed;
  /**
   * Output only. The id of the VLAN.
   *
   * @var string
   */
  public $vlanId;

  /**
   * Output only. The description of the interface.
   *
   * @param string $adapterDescription
   */
  public function setAdapterDescription($adapterDescription)
  {
    $this->adapterDescription = $adapterDescription;
  }
  /**
   * @return string
   */
  public function getAdapterDescription()
  {
    return $this->adapterDescription;
  }
  /**
   * Output only. The IP address of the interface and subnet mask in CIDR
   * format. Examples: 192.168.1.0/24, 2001:db8::/32
   *
   * @param string $cidr
   */
  public function setCidr($cidr)
  {
    $this->cidr = $cidr;
  }
  /**
   * @return string
   */
  public function getCidr()
  {
    return $this->cidr;
  }
  /**
   * Output only. The name of the network interface. Examples: eth0, eno1
   *
   * @param string $interfaceName
   */
  public function setInterfaceName($interfaceName)
  {
    $this->interfaceName = $interfaceName;
  }
  /**
   * @return string
   */
  public function getInterfaceName()
  {
    return $this->interfaceName;
  }
  /**
   * Output only. The IP address of the interface.
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
   * Output only. The MAC address of the interface.
   *
   * @param string $macAddress
   */
  public function setMacAddress($macAddress)
  {
    $this->macAddress = $macAddress;
  }
  /**
   * @return string
   */
  public function getMacAddress()
  {
    return $this->macAddress;
  }
  /**
   * Output only. Speed of the interface in millions of bits per second.
   *
   * @param string $speed
   */
  public function setSpeed($speed)
  {
    $this->speed = $speed;
  }
  /**
   * @return string
   */
  public function getSpeed()
  {
    return $this->speed;
  }
  /**
   * Output only. The id of the VLAN.
   *
   * @param string $vlanId
   */
  public function setVlanId($vlanId)
  {
    $this->vlanId = $vlanId;
  }
  /**
   * @return string
   */
  public function getVlanId()
  {
    return $this->vlanId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NetworkInterface::class, 'Google_Service_NetworkManagement_NetworkInterface');
