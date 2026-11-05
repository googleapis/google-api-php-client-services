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

class FlexComponentProperties extends \Google\Model
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
   * Unspecified default
   */
  public const HARDWARE_TYPE_HARDWARE_TYPE_UNSPECIFIED = 'HARDWARE_TYPE_UNSPECIFIED';
  /**
   * COMPUTE
   */
  public const HARDWARE_TYPE_COMPUTE = 'COMPUTE';
  /**
   * CELL
   */
  public const HARDWARE_TYPE_CELL = 'CELL';
  /**
   * Output only. The maximum number of CPU cores that can be enabled on the DB
   * system for this shape.
   *
   * @var int
   */
  public $availableCoreCount;
  /**
   * Output only. The maximum storage that can be enabled on the Storage Server
   * for this Flex Component.
   *
   * @var int
   */
  public $availableDbNodeStoragePerNodeGb;
  /**
   * Output only. The maximum local storage that can be enabled on the DB Server
   * for this Flex Component.
   *
   * @var int
   */
  public $availableLocalStorageGb;
  /**
   * Output only. The maximum memory size that can be enabled on the DB Server
   * for this Flex Component.
   *
   * @var int
   */
  public $availableMemoryGb;
  /**
   * Output only. The compute model of the DB Server for this Flex Component.
   *
   * @var string
   */
  public $computeModel;
  /**
   * Output only. The description summary for this Flex Component.
   *
   * @var string
   */
  public $descriptionSummary;
  /**
   * Output only. The hardware type of the DB (Compute) or Storage (Cell) Server
   * for this Flex Component.
   *
   * @var string
   */
  public $hardwareType;
  /**
   * Output only. The minimum number of CPU cores that can be enabled on the DB
   * Server for this Flex Component.
   *
   * @var int
   */
  public $minimumCoreCount;
  /**
   * Output only. The name of the Flex Component used for the DB system.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The runtime minimum number of CPU cores that can be enabled
   * for this Flex Component.
   *
   * @var int
   */
  public $runtimeMinimumCoreCount;
  /**
   * Output only. The name of the DB system shape for this Flex Component.
   *
   * @var string
   */
  public $shape;

  /**
   * Output only. The maximum number of CPU cores that can be enabled on the DB
   * system for this shape.
   *
   * @param int $availableCoreCount
   */
  public function setAvailableCoreCount($availableCoreCount)
  {
    $this->availableCoreCount = $availableCoreCount;
  }
  /**
   * @return int
   */
  public function getAvailableCoreCount()
  {
    return $this->availableCoreCount;
  }
  /**
   * Output only. The maximum storage that can be enabled on the Storage Server
   * for this Flex Component.
   *
   * @param int $availableDbNodeStoragePerNodeGb
   */
  public function setAvailableDbNodeStoragePerNodeGb($availableDbNodeStoragePerNodeGb)
  {
    $this->availableDbNodeStoragePerNodeGb = $availableDbNodeStoragePerNodeGb;
  }
  /**
   * @return int
   */
  public function getAvailableDbNodeStoragePerNodeGb()
  {
    return $this->availableDbNodeStoragePerNodeGb;
  }
  /**
   * Output only. The maximum local storage that can be enabled on the DB Server
   * for this Flex Component.
   *
   * @param int $availableLocalStorageGb
   */
  public function setAvailableLocalStorageGb($availableLocalStorageGb)
  {
    $this->availableLocalStorageGb = $availableLocalStorageGb;
  }
  /**
   * @return int
   */
  public function getAvailableLocalStorageGb()
  {
    return $this->availableLocalStorageGb;
  }
  /**
   * Output only. The maximum memory size that can be enabled on the DB Server
   * for this Flex Component.
   *
   * @param int $availableMemoryGb
   */
  public function setAvailableMemoryGb($availableMemoryGb)
  {
    $this->availableMemoryGb = $availableMemoryGb;
  }
  /**
   * @return int
   */
  public function getAvailableMemoryGb()
  {
    return $this->availableMemoryGb;
  }
  /**
   * Output only. The compute model of the DB Server for this Flex Component.
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
   * Output only. The description summary for this Flex Component.
   *
   * @param string $descriptionSummary
   */
  public function setDescriptionSummary($descriptionSummary)
  {
    $this->descriptionSummary = $descriptionSummary;
  }
  /**
   * @return string
   */
  public function getDescriptionSummary()
  {
    return $this->descriptionSummary;
  }
  /**
   * Output only. The hardware type of the DB (Compute) or Storage (Cell) Server
   * for this Flex Component.
   *
   * Accepted values: HARDWARE_TYPE_UNSPECIFIED, COMPUTE, CELL
   *
   * @param self::HARDWARE_TYPE_* $hardwareType
   */
  public function setHardwareType($hardwareType)
  {
    $this->hardwareType = $hardwareType;
  }
  /**
   * @return self::HARDWARE_TYPE_*
   */
  public function getHardwareType()
  {
    return $this->hardwareType;
  }
  /**
   * Output only. The minimum number of CPU cores that can be enabled on the DB
   * Server for this Flex Component.
   *
   * @param int $minimumCoreCount
   */
  public function setMinimumCoreCount($minimumCoreCount)
  {
    $this->minimumCoreCount = $minimumCoreCount;
  }
  /**
   * @return int
   */
  public function getMinimumCoreCount()
  {
    return $this->minimumCoreCount;
  }
  /**
   * Output only. The name of the Flex Component used for the DB system.
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
   * Output only. The runtime minimum number of CPU cores that can be enabled
   * for this Flex Component.
   *
   * @param int $runtimeMinimumCoreCount
   */
  public function setRuntimeMinimumCoreCount($runtimeMinimumCoreCount)
  {
    $this->runtimeMinimumCoreCount = $runtimeMinimumCoreCount;
  }
  /**
   * @return int
   */
  public function getRuntimeMinimumCoreCount()
  {
    return $this->runtimeMinimumCoreCount;
  }
  /**
   * Output only. The name of the DB system shape for this Flex Component.
   *
   * @param string $shape
   */
  public function setShape($shape)
  {
    $this->shape = $shape;
  }
  /**
   * @return string
   */
  public function getShape()
  {
    return $this->shape;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FlexComponentProperties::class, 'Google_Service_OracleDatabase_FlexComponentProperties');
