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

class ComputePerformance extends \Google\Model
{
  /**
   * Unspecified compute model.
   */
  public const COMPUTE_MODEL_COMPUTE_MODEL_UNSPECIFIED = 'COMPUTE_MODEL_UNSPECIFIED';
  /**
   * Abstract measure of compute resources. ECPUs are based on the number of
   * cores elastically allocated from a pool of compute and storage servers.
   */
  public const COMPUTE_MODEL_COMPUTE_MODEL_ECPU = 'COMPUTE_MODEL_ECPU';
  /**
   * Physical measure of compute resources. OCPUs are based on the physical core
   * of a processor.
   */
  public const COMPUTE_MODEL_COMPUTE_MODEL_OCPU = 'COMPUTE_MODEL_OCPU';
  /**
   * Output only. The number of compute servers for the DB system.
   *
   * @var int
   */
  public $computeCount;
  /**
   * Output only. The compute model for Base Database Service.
   *
   * @var string
   */
  public $computeModel;
  /**
   * Output only. The number of CPU cores available.
   *
   * @var int
   */
  public $cpuCoreCount;
  /**
   * Output only. The amount of memory allocated for the VMDB System in GBs.
   *
   * @var 
   */
  public $memoryInGbs;

  /**
   * Output only. The number of compute servers for the DB system.
   *
   * @param int $computeCount
   */
  public function setComputeCount($computeCount)
  {
    $this->computeCount = $computeCount;
  }
  /**
   * @return int
   */
  public function getComputeCount()
  {
    return $this->computeCount;
  }
  /**
   * Output only. The compute model for Base Database Service.
   *
   * Accepted values: COMPUTE_MODEL_UNSPECIFIED, COMPUTE_MODEL_ECPU,
   * COMPUTE_MODEL_OCPU
   *
   * @param self::COMPUTE_MODEL_* $computeModel
   */
  public function setComputeModel($computeModel)
  {
    $this->computeModel = $computeModel;
  }
  /**
   * @return self::COMPUTE_MODEL_*
   */
  public function getComputeModel()
  {
    return $this->computeModel;
  }
  /**
   * Output only. The number of CPU cores available.
   *
   * @param int $cpuCoreCount
   */
  public function setCpuCoreCount($cpuCoreCount)
  {
    $this->cpuCoreCount = $cpuCoreCount;
  }
  /**
   * @return int
   */
  public function getCpuCoreCount()
  {
    return $this->cpuCoreCount;
  }
  public function setMemoryInGbs($memoryInGbs)
  {
    $this->memoryInGbs = $memoryInGbs;
  }
  public function getMemoryInGbs()
  {
    return $this->memoryInGbs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComputePerformance::class, 'Google_Service_OracleDatabase_ComputePerformance');
