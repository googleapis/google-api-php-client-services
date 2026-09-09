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

class CapacityHistoryRequestInstancePropertiesScheduling extends \Google\Model
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
   * The provisioning model to get capacity history for. This field must be set
   * to SPOT.
   *
   * For more information, see Compute Engine instances provisioning models.
   *
   * @var string
   */
  public $provisioningModel;

  /**
   * The provisioning model to get capacity history for. This field must be set
   * to SPOT.
   *
   * For more information, see Compute Engine instances provisioning models.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityHistoryRequestInstancePropertiesScheduling::class, 'Google_Service_Compute_CapacityHistoryRequestInstancePropertiesScheduling');
