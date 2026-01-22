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

namespace Google\Service\HypercomputeCluster;

class SlurmLoginNodes extends \Google\Collection
{
  protected $collection_key = 'storageConfigs';
  protected $bootDiskType = BootDisk::class;
  protected $bootDiskDataType = '';
  /**
   * Required. Number of login node instances to create.
   *
   * @var string
   */
  public $count;
  /**
   * Optional. Whether [OS Login](https://cloud.google.com/compute/docs/oslogin)
   * should be enabled on login node instances.
   *
   * @var bool
   */
  public $enableOsLogin;
  /**
   * Optional. Whether login node instances should be assigned [external IP
   * addresses](https://cloud.google.com/compute/docs/ip-
   * addresses#externaladdresses).
   *
   * @var bool
   */
  public $enablePublicIps;
  protected $instancesType = ComputeInstance::class;
  protected $instancesDataType = 'array';
  /**
   * Optional. [Labels](https://cloud.google.com/compute/docs/labeling-
   * resources) that should be applied to each login node instance.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Required. Name of the Compute Engine [machine
   * type](https://cloud.google.com/compute/docs/machine-resource) to use for
   * login nodes, e.g. `n2-standard-2`.
   *
   * @var string
   */
  public $machineType;
  /**
   * Optional. [Startup
   * script](https://cloud.google.com/compute/docs/instances/startup-
   * scripts/linux) to be run on each login node instance. Max 256KB. The script
   * must complete within the system-defined default timeout of 5 minutes. For
   * tasks that require more time, consider running them in the background using
   * methods such as `&` or `nohup`.
   *
   * @var string
   */
  public $startupScript;
  protected $storageConfigsType = StorageConfig::class;
  protected $storageConfigsDataType = 'array';
  /**
   * Required. Name of the zone in which login nodes should run, e.g., `us-
   * central1-a`. Must be in the same region as the cluster, and must match the
   * zone of any other resources specified in the cluster.
   *
   * @var string
   */
  public $zone;

  /**
   * Optional. Boot disk for the login node.
   *
   * @param BootDisk $bootDisk
   */
  public function setBootDisk(BootDisk $bootDisk)
  {
    $this->bootDisk = $bootDisk;
  }
  /**
   * @return BootDisk
   */
  public function getBootDisk()
  {
    return $this->bootDisk;
  }
  /**
   * Required. Number of login node instances to create.
   *
   * @param string $count
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return string
   */
  public function getCount()
  {
    return $this->count;
  }
  /**
   * Optional. Whether [OS Login](https://cloud.google.com/compute/docs/oslogin)
   * should be enabled on login node instances.
   *
   * @param bool $enableOsLogin
   */
  public function setEnableOsLogin($enableOsLogin)
  {
    $this->enableOsLogin = $enableOsLogin;
  }
  /**
   * @return bool
   */
  public function getEnableOsLogin()
  {
    return $this->enableOsLogin;
  }
  /**
   * Optional. Whether login node instances should be assigned [external IP
   * addresses](https://cloud.google.com/compute/docs/ip-
   * addresses#externaladdresses).
   *
   * @param bool $enablePublicIps
   */
  public function setEnablePublicIps($enablePublicIps)
  {
    $this->enablePublicIps = $enablePublicIps;
  }
  /**
   * @return bool
   */
  public function getEnablePublicIps()
  {
    return $this->enablePublicIps;
  }
  /**
   * Output only. Information about the login node instances that were created
   * in Compute Engine.
   *
   * @param ComputeInstance[] $instances
   */
  public function setInstances($instances)
  {
    $this->instances = $instances;
  }
  /**
   * @return ComputeInstance[]
   */
  public function getInstances()
  {
    return $this->instances;
  }
  /**
   * Optional. [Labels](https://cloud.google.com/compute/docs/labeling-
   * resources) that should be applied to each login node instance.
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
   * Required. Name of the Compute Engine [machine
   * type](https://cloud.google.com/compute/docs/machine-resource) to use for
   * login nodes, e.g. `n2-standard-2`.
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
   * Optional. [Startup
   * script](https://cloud.google.com/compute/docs/instances/startup-
   * scripts/linux) to be run on each login node instance. Max 256KB. The script
   * must complete within the system-defined default timeout of 5 minutes. For
   * tasks that require more time, consider running them in the background using
   * methods such as `&` or `nohup`.
   *
   * @param string $startupScript
   */
  public function setStartupScript($startupScript)
  {
    $this->startupScript = $startupScript;
  }
  /**
   * @return string
   */
  public function getStartupScript()
  {
    return $this->startupScript;
  }
  /**
   * Optional. How storage resources should be mounted on each login node.
   *
   * @param StorageConfig[] $storageConfigs
   */
  public function setStorageConfigs($storageConfigs)
  {
    $this->storageConfigs = $storageConfigs;
  }
  /**
   * @return StorageConfig[]
   */
  public function getStorageConfigs()
  {
    return $this->storageConfigs;
  }
  /**
   * Required. Name of the zone in which login nodes should run, e.g., `us-
   * central1-a`. Must be in the same region as the cluster, and must match the
   * zone of any other resources specified in the cluster.
   *
   * @param string $zone
   */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /**
   * @return string
   */
  public function getZone()
  {
    return $this->zone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SlurmLoginNodes::class, 'Google_Service_HypercomputeCluster_SlurmLoginNodes');
