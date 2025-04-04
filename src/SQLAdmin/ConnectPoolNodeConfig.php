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

namespace Google\Service\SQLAdmin;

class ConnectPoolNodeConfig extends \Google\Collection
{
  protected $collection_key = 'ipAddresses';
  /**
   * @var string
   */
  public $dnsName;
  protected $dnsNamesType = DnsNameMapping::class;
  protected $dnsNamesDataType = 'array';
  protected $ipAddressesType = IpMapping::class;
  protected $ipAddressesDataType = 'array';
  /**
   * @var string
   */
  public $name;

  /**
   * @param string
   */
  public function setDnsName($dnsName)
  {
    $this->dnsName = $dnsName;
  }
  /**
   * @return string
   */
  public function getDnsName()
  {
    return $this->dnsName;
  }
  /**
   * @param DnsNameMapping[]
   */
  public function setDnsNames($dnsNames)
  {
    $this->dnsNames = $dnsNames;
  }
  /**
   * @return DnsNameMapping[]
   */
  public function getDnsNames()
  {
    return $this->dnsNames;
  }
  /**
   * @param IpMapping[]
   */
  public function setIpAddresses($ipAddresses)
  {
    $this->ipAddresses = $ipAddresses;
  }
  /**
   * @return IpMapping[]
   */
  public function getIpAddresses()
  {
    return $this->ipAddresses;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConnectPoolNodeConfig::class, 'Google_Service_SQLAdmin_ConnectPoolNodeConfig');
