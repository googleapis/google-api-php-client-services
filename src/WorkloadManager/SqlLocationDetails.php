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

namespace Google\Service\WorkloadManager;

class SqlLocationDetails extends \Google\Model
{
  /**
   * Unspecified internet access
   */
  public const INTERNET_ACCESS_INTERNET_ACCESS_UNSPECIFIED = 'INTERNET_ACCESS_UNSPECIFIED';
  /**
   * Allow external IP
   */
  public const INTERNET_ACCESS_ALLOW_EXTERNAL_IP = 'ALLOW_EXTERNAL_IP';
  /**
   * Configure NAT
   */
  public const INTERNET_ACCESS_CONFIGURE_NAT = 'CONFIGURE_NAT';
  /**
   * Optional. create a new DNS Zone when the field is empty, Only show for
   * `Using an existing DNS` List of existing DNS Zones tf variable name:
   * existing_dns_zone_name
   *
   * @var string
   */
  public $dnsZone;
  /**
   * Required. the project that infrastructure deployed, currently only supports
   * the same project where the deployment resource exists.
   *
   * @var string
   */
  public $gcpProjectId;
  /**
   * Required. Internet Access
   *
   * @var string
   */
  public $internetAccess;
  /**
   * Required. network name
   *
   * @var string
   */
  public $network;
  /**
   * Required. primary zone
   *
   * @var string
   */
  public $primaryZone;
  /**
   * Required. region name
   *
   * @var string
   */
  public $region;
  /**
   * Optional. secondary zone can't be same as primary_zone and is only for High
   * Availability deployment mode
   *
   * @var string
   */
  public $secondaryZone;
  /**
   * Required. subnetwork name
   *
   * @var string
   */
  public $subnetwork;
  /**
   * Optional. teriary zone can't be same as primary_zone and secondary zone,
   * and it is only for High Availability deployment mode
   *
   * @var string
   */
  public $tertiaryZone;

  /**
   * Optional. create a new DNS Zone when the field is empty, Only show for
   * `Using an existing DNS` List of existing DNS Zones tf variable name:
   * existing_dns_zone_name
   *
   * @param string $dnsZone
   */
  public function setDnsZone($dnsZone)
  {
    $this->dnsZone = $dnsZone;
  }
  /**
   * @return string
   */
  public function getDnsZone()
  {
    return $this->dnsZone;
  }
  /**
   * Required. the project that infrastructure deployed, currently only supports
   * the same project where the deployment resource exists.
   *
   * @param string $gcpProjectId
   */
  public function setGcpProjectId($gcpProjectId)
  {
    $this->gcpProjectId = $gcpProjectId;
  }
  /**
   * @return string
   */
  public function getGcpProjectId()
  {
    return $this->gcpProjectId;
  }
  /**
   * Required. Internet Access
   *
   * Accepted values: INTERNET_ACCESS_UNSPECIFIED, ALLOW_EXTERNAL_IP,
   * CONFIGURE_NAT
   *
   * @param self::INTERNET_ACCESS_* $internetAccess
   */
  public function setInternetAccess($internetAccess)
  {
    $this->internetAccess = $internetAccess;
  }
  /**
   * @return self::INTERNET_ACCESS_*
   */
  public function getInternetAccess()
  {
    return $this->internetAccess;
  }
  /**
   * Required. network name
   *
   * @param string $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Required. primary zone
   *
   * @param string $primaryZone
   */
  public function setPrimaryZone($primaryZone)
  {
    $this->primaryZone = $primaryZone;
  }
  /**
   * @return string
   */
  public function getPrimaryZone()
  {
    return $this->primaryZone;
  }
  /**
   * Required. region name
   *
   * @param string $region
   */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /**
   * @return string
   */
  public function getRegion()
  {
    return $this->region;
  }
  /**
   * Optional. secondary zone can't be same as primary_zone and is only for High
   * Availability deployment mode
   *
   * @param string $secondaryZone
   */
  public function setSecondaryZone($secondaryZone)
  {
    $this->secondaryZone = $secondaryZone;
  }
  /**
   * @return string
   */
  public function getSecondaryZone()
  {
    return $this->secondaryZone;
  }
  /**
   * Required. subnetwork name
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
  /**
   * Optional. teriary zone can't be same as primary_zone and secondary zone,
   * and it is only for High Availability deployment mode
   *
   * @param string $tertiaryZone
   */
  public function setTertiaryZone($tertiaryZone)
  {
    $this->tertiaryZone = $tertiaryZone;
  }
  /**
   * @return string
   */
  public function getTertiaryZone()
  {
    return $this->tertiaryZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SqlLocationDetails::class, 'Google_Service_WorkloadManager_SqlLocationDetails');
