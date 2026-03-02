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

class LocationDetails extends \Google\Collection
{
  public const INTERNET_ACCESS_INTERNETACCESS_UNSPECIFIED = 'INTERNETACCESS_UNSPECIFIED';
  public const INTERNET_ACCESS_ALLOW_EXTERNAL_IP = 'ALLOW_EXTERNAL_IP';
  public const INTERNET_ACCESS_CONFIGURE_NAT = 'CONFIGURE_NAT';
  protected $collection_key = 'customTags';
  /**
   * Optional. create firewall, if true, create firewall for the deployment.
   * This field provides an option to not always create firewall for the
   * deployment.
   *
   * @var bool
   */
  public $createCommsFirewall;
  /**
   * Optional. network tags
   *
   * @var string[]
   */
  public $customTags;
  /**
   * Optional. when user skip DNS configuration from UI,
   * deployment_dns_enabled=false otherwise deployment_dns_enabled=true
   *
   * @var bool
   */
  public $deploymentDnsEnabled;
  /**
   * Optional. dns zone name
   *
   * @var string
   */
  public $dnsZone;
  /**
   * Optional. dns_zone_name_suffix
   *
   * @var string
   */
  public $dnsZoneNameSuffix;
  /**
   * @var string
   */
  public $internetAccess;
  /**
   * Optional. network project
   *
   * @var string
   */
  public $networkProject;
  /**
   * Required. region_name
   *
   * @var string
   */
  public $regionName;
  /**
   * Required. subnet_name
   *
   * @var string
   */
  public $subnetName;
  /**
   * Required. vpc_name
   *
   * @var string
   */
  public $vpcName;
  /**
   * Required. zone1_name
   *
   * @var string
   */
  public $zone1Name;
  /**
   * Optional. zone2_name
   *
   * @var string
   */
  public $zone2Name;

  /**
   * Optional. create firewall, if true, create firewall for the deployment.
   * This field provides an option to not always create firewall for the
   * deployment.
   *
   * @param bool $createCommsFirewall
   */
  public function setCreateCommsFirewall($createCommsFirewall)
  {
    $this->createCommsFirewall = $createCommsFirewall;
  }
  /**
   * @return bool
   */
  public function getCreateCommsFirewall()
  {
    return $this->createCommsFirewall;
  }
  /**
   * Optional. network tags
   *
   * @param string[] $customTags
   */
  public function setCustomTags($customTags)
  {
    $this->customTags = $customTags;
  }
  /**
   * @return string[]
   */
  public function getCustomTags()
  {
    return $this->customTags;
  }
  /**
   * Optional. when user skip DNS configuration from UI,
   * deployment_dns_enabled=false otherwise deployment_dns_enabled=true
   *
   * @param bool $deploymentDnsEnabled
   */
  public function setDeploymentDnsEnabled($deploymentDnsEnabled)
  {
    $this->deploymentDnsEnabled = $deploymentDnsEnabled;
  }
  /**
   * @return bool
   */
  public function getDeploymentDnsEnabled()
  {
    return $this->deploymentDnsEnabled;
  }
  /**
   * Optional. dns zone name
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
   * Optional. dns_zone_name_suffix
   *
   * @param string $dnsZoneNameSuffix
   */
  public function setDnsZoneNameSuffix($dnsZoneNameSuffix)
  {
    $this->dnsZoneNameSuffix = $dnsZoneNameSuffix;
  }
  /**
   * @return string
   */
  public function getDnsZoneNameSuffix()
  {
    return $this->dnsZoneNameSuffix;
  }
  /**
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
   * Optional. network project
   *
   * @param string $networkProject
   */
  public function setNetworkProject($networkProject)
  {
    $this->networkProject = $networkProject;
  }
  /**
   * @return string
   */
  public function getNetworkProject()
  {
    return $this->networkProject;
  }
  /**
   * Required. region_name
   *
   * @param string $regionName
   */
  public function setRegionName($regionName)
  {
    $this->regionName = $regionName;
  }
  /**
   * @return string
   */
  public function getRegionName()
  {
    return $this->regionName;
  }
  /**
   * Required. subnet_name
   *
   * @param string $subnetName
   */
  public function setSubnetName($subnetName)
  {
    $this->subnetName = $subnetName;
  }
  /**
   * @return string
   */
  public function getSubnetName()
  {
    return $this->subnetName;
  }
  /**
   * Required. vpc_name
   *
   * @param string $vpcName
   */
  public function setVpcName($vpcName)
  {
    $this->vpcName = $vpcName;
  }
  /**
   * @return string
   */
  public function getVpcName()
  {
    return $this->vpcName;
  }
  /**
   * Required. zone1_name
   *
   * @param string $zone1Name
   */
  public function setZone1Name($zone1Name)
  {
    $this->zone1Name = $zone1Name;
  }
  /**
   * @return string
   */
  public function getZone1Name()
  {
    return $this->zone1Name;
  }
  /**
   * Optional. zone2_name
   *
   * @param string $zone2Name
   */
  public function setZone2Name($zone2Name)
  {
    $this->zone2Name = $zone2Name;
  }
  /**
   * @return string
   */
  public function getZone2Name()
  {
    return $this->zone2Name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocationDetails::class, 'Google_Service_WorkloadManager_LocationDetails');
