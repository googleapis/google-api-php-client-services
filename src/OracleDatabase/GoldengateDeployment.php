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

namespace Google\Service\OracleDatabase;

class GoldengateDeployment extends \Google\Model
{
  /**
   * Output only. The date and time that the GoldengateDeployment was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Immutable. The display name for the GoldengateDeployment.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The ID of the subscription entitlement associated with the
   * GoldengateDeployment
   *
   * @var string
   */
  public $entitlementId;
  /**
   * Optional. Immutable. The GCP Oracle zone where Oracle GoldengateDeployment
   * is hosted. Example: us-east4-b-r2. If not specified, the system will pick a
   * zone based on availability.
   *
   * @var string
   */
  public $gcpOracleZone;
  /**
   * Optional. The labels or tags associated with the GoldengateDeployment.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The name of the GoldengateDeployment resource in the following
   * format: projects/{project}/locations/{region}/goldengateDeployments/{golden
   * gate_deployment}
   *
   * @var string
   */
  public $name;
  /**
   * Output only. HTTPS link to OCI resources exposed to Customer via UI
   * Interface.
   *
   * @var string
   */
  public $ociUrl;
  /**
   * Optional. Immutable. The name of the OdbNetwork associated with the
   * GoldengateDeployment.
   *
   * @var string
   */
  public $odbNetwork;
  /**
   * Required. Immutable. The name of the OdbSubnet associated with the
   * GoldengateDeployment for IP allocation.
   *
   * @var string
   */
  public $odbSubnet;
  protected $propertiesType = GoldengateDeploymentProperties::class;
  protected $propertiesDataType = '';

  /**
   * Output only. The date and time that the GoldengateDeployment was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Required. Immutable. The display name for the GoldengateDeployment.
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
   * Output only. The ID of the subscription entitlement associated with the
   * GoldengateDeployment
   *
   * @param string $entitlementId
   */
  public function setEntitlementId($entitlementId)
  {
    $this->entitlementId = $entitlementId;
  }
  /**
   * @return string
   */
  public function getEntitlementId()
  {
    return $this->entitlementId;
  }
  /**
   * Optional. Immutable. The GCP Oracle zone where Oracle GoldengateDeployment
   * is hosted. Example: us-east4-b-r2. If not specified, the system will pick a
   * zone based on availability.
   *
   * @param string $gcpOracleZone
   */
  public function setGcpOracleZone($gcpOracleZone)
  {
    $this->gcpOracleZone = $gcpOracleZone;
  }
  /**
   * @return string
   */
  public function getGcpOracleZone()
  {
    return $this->gcpOracleZone;
  }
  /**
   * Optional. The labels or tags associated with the GoldengateDeployment.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. The name of the GoldengateDeployment resource in the following
   * format: projects/{project}/locations/{region}/goldengateDeployments/{golden
   * gate_deployment}
   *
   * @param string $name
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
  /**
   * Output only. HTTPS link to OCI resources exposed to Customer via UI
   * Interface.
   *
   * @param string $ociUrl
   */
  public function setOciUrl($ociUrl)
  {
    $this->ociUrl = $ociUrl;
  }
  /**
   * @return string
   */
  public function getOciUrl()
  {
    return $this->ociUrl;
  }
  /**
   * Optional. Immutable. The name of the OdbNetwork associated with the
   * GoldengateDeployment.
   *
   * @param string $odbNetwork
   */
  public function setOdbNetwork($odbNetwork)
  {
    $this->odbNetwork = $odbNetwork;
  }
  /**
   * @return string
   */
  public function getOdbNetwork()
  {
    return $this->odbNetwork;
  }
  /**
   * Required. Immutable. The name of the OdbSubnet associated with the
   * GoldengateDeployment for IP allocation.
   *
   * @param string $odbSubnet
   */
  public function setOdbSubnet($odbSubnet)
  {
    $this->odbSubnet = $odbSubnet;
  }
  /**
   * @return string
   */
  public function getOdbSubnet()
  {
    return $this->odbSubnet;
  }
  /**
   * Required. Immutable. The properties of the GoldengateDeployment.
   *
   * @param GoldengateDeploymentProperties $properties
   */
  public function setProperties(GoldengateDeploymentProperties $properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return GoldengateDeploymentProperties
   */
  public function getProperties()
  {
    return $this->properties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoldengateDeployment::class, 'Google_Service_OracleDatabase_GoldengateDeployment');
