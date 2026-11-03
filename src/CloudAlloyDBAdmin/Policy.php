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

namespace Google\Service\CloudAlloyDBAdmin;

class Policy extends \Google\Model
{
  protected $connectionsCountType = ConnectionsCount::class;
  protected $connectionsCountDataType = '';
  /**
   * The period of time in seconds after a new node is created before the
   * autoscaler will incorporate its resource usage (e.g. CPU utilization) into
   * the autoscaling recommendation algorithm.
   *
   * @var string
   */
  public $coolDownPeriodSec;
  protected $cpuUtilizationType = CpuUtilization::class;
  protected $cpuUtilizationDataType = '';
  /**
   * If true, autoscaling is enabled for the instance. If not set, the default
   * value is false.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Maximum number of nodes for the autoscaler.
   *
   * @var string
   */
  public $maxNodeCount;

  /**
   * Optional. Connections count policy for the autoscaler. If not set, the
   * autoscaler will not use connection count for scaling.
   *
   * @param ConnectionsCount $connectionsCount
   */
  public function setConnectionsCount(ConnectionsCount $connectionsCount)
  {
    $this->connectionsCount = $connectionsCount;
  }
  /**
   * @return ConnectionsCount
   */
  public function getConnectionsCount()
  {
    return $this->connectionsCount;
  }
  /**
   * The period of time in seconds after a new node is created before the
   * autoscaler will incorporate its resource usage (e.g. CPU utilization) into
   * the autoscaling recommendation algorithm.
   *
   * @param string $coolDownPeriodSec
   */
  public function setCoolDownPeriodSec($coolDownPeriodSec)
  {
    $this->coolDownPeriodSec = $coolDownPeriodSec;
  }
  /**
   * @return string
   */
  public function getCoolDownPeriodSec()
  {
    return $this->coolDownPeriodSec;
  }
  /**
   * CPU utilization policy for the autoscaler.
   *
   * @param CpuUtilization $cpuUtilization
   */
  public function setCpuUtilization(CpuUtilization $cpuUtilization)
  {
    $this->cpuUtilization = $cpuUtilization;
  }
  /**
   * @return CpuUtilization
   */
  public function getCpuUtilization()
  {
    return $this->cpuUtilization;
  }
  /**
   * If true, autoscaling is enabled for the instance. If not set, the default
   * value is false.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Maximum number of nodes for the autoscaler.
   *
   * @param string $maxNodeCount
   */
  public function setMaxNodeCount($maxNodeCount)
  {
    $this->maxNodeCount = $maxNodeCount;
  }
  /**
   * @return string
   */
  public function getMaxNodeCount()
  {
    return $this->maxNodeCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Policy::class, 'Google_Service_CloudAlloyDBAdmin_Policy');
