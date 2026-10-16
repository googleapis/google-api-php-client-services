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

class GoldengateConnection extends \Google\Model
{
  /**
   * Output only. The date and time that the GoldengateConnection was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The ID of the subscription entitlement associated with the
   * GoldengateConnection.
   *
   * @var string
   */
  public $entitlementId;
  /**
   * Optional. Immutable. The GCP Oracle zone where Oracle GoldengateConnection
   * is hosted. Example: us-east4-b-r2. If not specified, the system will pick a
   * zone based on availability.
   *
   * @var string
   */
  public $gcpOracleZone;
  /**
   * Optional. The labels or tags associated with the GoldengateConnection.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The name of the GoldengateConnection resource in the following
   * format: projects/{project}/locations/{region}/goldengateConnections/{golden
   * gate_connection}
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
   * GoldengateConnection. The format is
   * projects/{project}/locations/{location}/odbNetworks/{odb_network}. It is
   * optional but if specified, this should match the parent ODBNetwork of the
   * OdbSubnet.
   *
   * @var string
   */
  public $odbNetwork;
  /**
   * Optional. Immutable. The name of the OdbSubnet associated with the
   * GoldengateConnection for IP allocation. Format: projects/{project}/location
   * s/{location}/odbNetworks/{odb_network}/odbSubnets/{odb_subnet}
   *
   * @var string
   */
  public $odbSubnet;
  protected $propertiesType = GoldengateConnectionProperties::class;
  protected $propertiesDataType = '';

  /**
   * Output only. The date and time that the GoldengateConnection was created.
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
   * Output only. The ID of the subscription entitlement associated with the
   * GoldengateConnection.
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
   * Optional. Immutable. The GCP Oracle zone where Oracle GoldengateConnection
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
   * Optional. The labels or tags associated with the GoldengateConnection.
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
   * Identifier. The name of the GoldengateConnection resource in the following
   * format: projects/{project}/locations/{region}/goldengateConnections/{golden
   * gate_connection}
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
   * GoldengateConnection. The format is
   * projects/{project}/locations/{location}/odbNetworks/{odb_network}. It is
   * optional but if specified, this should match the parent ODBNetwork of the
   * OdbSubnet.
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
   * Optional. Immutable. The name of the OdbSubnet associated with the
   * GoldengateConnection for IP allocation. Format: projects/{project}/location
   * s/{location}/odbNetworks/{odb_network}/odbSubnets/{odb_subnet}
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
   * Required. Immutable. The properties of the GoldengateConnection.
   *
   * @param GoldengateConnectionProperties $properties
   */
  public function setProperties(GoldengateConnectionProperties $properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return GoldengateConnectionProperties
   */
  public function getProperties()
  {
    return $this->properties;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoldengateConnection::class, 'Google_Service_OracleDatabase_GoldengateConnection');
