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

namespace Google\Service\Compute;

class CapacityAdviceResponseRecommendationShard extends \Google\Model
{
  /**
   * Instance is provisioned using the Flex Start provisioning model and has a
   * limited runtime.
   */
  public const PROVISIONING_MODEL_FLEX_START = 'FLEX_START';
  /**
   * Bound to the lifecycle of the reservation in which it is provisioned.
   */
  public const PROVISIONING_MODEL_RESERVATION_BOUND = 'RESERVATION_BOUND';
  /**
   * Heavily discounted, no guaranteed runtime.
   */
  public const PROVISIONING_MODEL_SPOT = 'SPOT';
  /**
   * Standard provisioning with user controlled runtime, no discounts.
   */
  public const PROVISIONING_MODEL_STANDARD = 'STANDARD';
  /**
   * The number of instances.
   *
   * @var int
   */
  public $instanceCount;
  /**
   * The machine type corresponds to the instance selection in the request.
   *
   * @var string
   */
  public $machineType;
  /**
   * The provisioning model that you want to view recommendations for.
   *
   * @var string
   */
  public $provisioningModel;
  /**
   * Output only. The zone name for this shard.
   *
   * @var string
   */
  public $zone;

  /**
   * The number of instances.
   *
   * @param int $instanceCount
   */
  public function setInstanceCount($instanceCount)
  {
    $this->instanceCount = $instanceCount;
  }
  /**
   * @return int
   */
  public function getInstanceCount()
  {
    return $this->instanceCount;
  }
  /**
   * The machine type corresponds to the instance selection in the request.
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
   * The provisioning model that you want to view recommendations for.
   *
   * Accepted values: FLEX_START, RESERVATION_BOUND, SPOT, STANDARD
   *
   * @param self::PROVISIONING_MODEL_* $provisioningModel
   */
  public function setProvisioningModel($provisioningModel)
  {
    $this->provisioningModel = $provisioningModel;
  }
  /**
   * @return self::PROVISIONING_MODEL_*
   */
  public function getProvisioningModel()
  {
    return $this->provisioningModel;
  }
  /**
   * Output only. The zone name for this shard.
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
class_alias(CapacityAdviceResponseRecommendationShard::class, 'Google_Service_Compute_CapacityAdviceResponseRecommendationShard');
