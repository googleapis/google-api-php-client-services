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

class Database extends \Google\Model
{
  /**
   * Unspecified tenancy model
   */
  public const TENANCY_MODEL_TENANCY_MODEL_UNSPECIFIED = 'TENANCY_MODEL_UNSPECIFIED';
  /**
   * Shared tenancy model
   */
  public const TENANCY_MODEL_SHARED = 'SHARED';
  /**
   * Sole Tenant tenancy model
   */
  public const TENANCY_MODEL_SOLE_TENANT = 'SOLE_TENANT';
  /**
   * Required. disk_type
   *
   * @var string
   */
  public $diskType;
  /**
   * Optional. only useful for Linux High Availability setup
   *
   * @var string
   */
  public $floatingIpAddress;
  /**
   * Required. machine type
   *
   * @var string
   */
  public $machineType;
  /**
   * Optional. the name of a secondary-sole-tenant node/node group
   *
   * @var string
   */
  public $secondarySoleTenantNode;
  /**
   * Optional. the type of a secondary-sole-tenant node/node group e.g.
   * compute.googleapis.com/node-name
   *
   * @var string
   */
  public $secondarySoleTenantNodeType;
  /**
   * Required. secret_manager_secret
   *
   * @var string
   */
  public $secretManagerSecret;
  /**
   * Required. whether simultaneous multithreading is enabled or not
   *
   * @var bool
   */
  public $smt;
  /**
   * Optional. the name of a primary sole-tenant node/node group
   *
   * @var string
   */
  public $soleTenantNode;
  /**
   * Optional. the type of a primary sole-tenant node/node group e.g.
   * compute.googleapis.com/node-name
   *
   * @var string
   */
  public $soleTenantNodeType;
  /**
   * Required. whether to have TempDB on local SSD
   *
   * @var bool
   */
  public $tempdbOnSsd;
  /**
   * Required. SHARED or SOLE_TENANT
   *
   * @var string
   */
  public $tenancyModel;

  /**
   * Required. disk_type
   *
   * @param string $diskType
   */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /**
   * @return string
   */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /**
   * Optional. only useful for Linux High Availability setup
   *
   * @param string $floatingIpAddress
   */
  public function setFloatingIpAddress($floatingIpAddress)
  {
    $this->floatingIpAddress = $floatingIpAddress;
  }
  /**
   * @return string
   */
  public function getFloatingIpAddress()
  {
    return $this->floatingIpAddress;
  }
  /**
   * Required. machine type
   *
   * @param string $machineType
   */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /**
   * @return string
   */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /**
   * Optional. the name of a secondary-sole-tenant node/node group
   *
   * @param string $secondarySoleTenantNode
   */
  public function setSecondarySoleTenantNode($secondarySoleTenantNode)
  {
    $this->secondarySoleTenantNode = $secondarySoleTenantNode;
  }
  /**
   * @return string
   */
  public function getSecondarySoleTenantNode()
  {
    return $this->secondarySoleTenantNode;
  }
  /**
   * Optional. the type of a secondary-sole-tenant node/node group e.g.
   * compute.googleapis.com/node-name
   *
   * @param string $secondarySoleTenantNodeType
   */
  public function setSecondarySoleTenantNodeType($secondarySoleTenantNodeType)
  {
    $this->secondarySoleTenantNodeType = $secondarySoleTenantNodeType;
  }
  /**
   * @return string
   */
  public function getSecondarySoleTenantNodeType()
  {
    return $this->secondarySoleTenantNodeType;
  }
  /**
   * Required. secret_manager_secret
   *
   * @param string $secretManagerSecret
   */
  public function setSecretManagerSecret($secretManagerSecret)
  {
    $this->secretManagerSecret = $secretManagerSecret;
  }
  /**
   * @return string
   */
  public function getSecretManagerSecret()
  {
    return $this->secretManagerSecret;
  }
  /**
   * Required. whether simultaneous multithreading is enabled or not
   *
   * @param bool $smt
   */
  public function setSmt($smt)
  {
    $this->smt = $smt;
  }
  /**
   * @return bool
   */
  public function getSmt()
  {
    return $this->smt;
  }
  /**
   * Optional. the name of a primary sole-tenant node/node group
   *
   * @param string $soleTenantNode
   */
  public function setSoleTenantNode($soleTenantNode)
  {
    $this->soleTenantNode = $soleTenantNode;
  }
  /**
   * @return string
   */
  public function getSoleTenantNode()
  {
    return $this->soleTenantNode;
  }
  /**
   * Optional. the type of a primary sole-tenant node/node group e.g.
   * compute.googleapis.com/node-name
   *
   * @param string $soleTenantNodeType
   */
  public function setSoleTenantNodeType($soleTenantNodeType)
  {
    $this->soleTenantNodeType = $soleTenantNodeType;
  }
  /**
   * @return string
   */
  public function getSoleTenantNodeType()
  {
    return $this->soleTenantNodeType;
  }
  /**
   * Required. whether to have TempDB on local SSD
   *
   * @param bool $tempdbOnSsd
   */
  public function setTempdbOnSsd($tempdbOnSsd)
  {
    $this->tempdbOnSsd = $tempdbOnSsd;
  }
  /**
   * @return bool
   */
  public function getTempdbOnSsd()
  {
    return $this->tempdbOnSsd;
  }
  /**
   * Required. SHARED or SOLE_TENANT
   *
   * Accepted values: TENANCY_MODEL_UNSPECIFIED, SHARED, SOLE_TENANT
   *
   * @param self::TENANCY_MODEL_* $tenancyModel
   */
  public function setTenancyModel($tenancyModel)
  {
    $this->tenancyModel = $tenancyModel;
  }
  /**
   * @return self::TENANCY_MODEL_*
   */
  public function getTenancyModel()
  {
    return $this->tenancyModel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Database::class, 'Google_Service_WorkloadManager_Database');
