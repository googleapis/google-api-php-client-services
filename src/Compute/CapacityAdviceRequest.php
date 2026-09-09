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

class CapacityAdviceRequest extends \Google\Model
{
  protected $distributionPolicyType = CapacityAdviceRequestDistributionPolicy::class;
  protected $distributionPolicyDataType = '';
  protected $instanceFlexibilityPolicyType = CapacityAdviceRequestInstanceFlexibilityPolicy::class;
  protected $instanceFlexibilityPolicyDataType = '';
  protected $instancePropertiesType = CapacityAdviceRequestInstanceProperties::class;
  protected $instancePropertiesDataType = '';
  /**
   * The number of VM instances to request.
   *
   * @var int
   */
  public $size;

  /**
   * Policy specifying the distribution of instances across zones within the
   * requested region.
   *
   * @param CapacityAdviceRequestDistributionPolicy $distributionPolicy
   */
  public function setDistributionPolicy(CapacityAdviceRequestDistributionPolicy $distributionPolicy)
  {
    $this->distributionPolicy = $distributionPolicy;
  }
  /**
   * @return CapacityAdviceRequestDistributionPolicy
   */
  public function getDistributionPolicy()
  {
    return $this->distributionPolicy;
  }
  /**
   * Policy for instance selectors.
   *
   * @param CapacityAdviceRequestInstanceFlexibilityPolicy $instanceFlexibilityPolicy
   */
  public function setInstanceFlexibilityPolicy(CapacityAdviceRequestInstanceFlexibilityPolicy $instanceFlexibilityPolicy)
  {
    $this->instanceFlexibilityPolicy = $instanceFlexibilityPolicy;
  }
  /**
   * @return CapacityAdviceRequestInstanceFlexibilityPolicy
   */
  public function getInstanceFlexibilityPolicy()
  {
    return $this->instanceFlexibilityPolicy;
  }
  /**
   * Instance properties for this request.
   *
   * @param CapacityAdviceRequestInstanceProperties $instanceProperties
   */
  public function setInstanceProperties(CapacityAdviceRequestInstanceProperties $instanceProperties)
  {
    $this->instanceProperties = $instanceProperties;
  }
  /**
   * @return CapacityAdviceRequestInstanceProperties
   */
  public function getInstanceProperties()
  {
    return $this->instanceProperties;
  }
  /**
   * The number of VM instances to request.
   *
   * @param int $size
   */
  public function setSize($size)
  {
    $this->size = $size;
  }
  /**
   * @return int
   */
  public function getSize()
  {
    return $this->size;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityAdviceRequest::class, 'Google_Service_Compute_CapacityAdviceRequest');
