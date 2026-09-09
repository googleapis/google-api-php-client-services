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

class CapacityHistoryRequest extends \Google\Collection
{
  protected $collection_key = 'types';
  protected $instancePropertiesType = CapacityHistoryRequestInstanceProperties::class;
  protected $instancePropertiesDataType = '';
  protected $locationPolicyType = CapacityHistoryRequestLocationPolicy::class;
  protected $locationPolicyDataType = '';
  /**
   * List of history types to get capacity history for.
   *
   * @var string[]
   */
  public $types;

  /**
   * Instance properties for this request.
   *
   * @param CapacityHistoryRequestInstanceProperties $instanceProperties
   */
  public function setInstanceProperties(CapacityHistoryRequestInstanceProperties $instanceProperties)
  {
    $this->instanceProperties = $instanceProperties;
  }
  /**
   * @return CapacityHistoryRequestInstanceProperties
   */
  public function getInstanceProperties()
  {
    return $this->instanceProperties;
  }
  /**
   * Location policy for this request.
   *
   * @param CapacityHistoryRequestLocationPolicy $locationPolicy
   */
  public function setLocationPolicy(CapacityHistoryRequestLocationPolicy $locationPolicy)
  {
    $this->locationPolicy = $locationPolicy;
  }
  /**
   * @return CapacityHistoryRequestLocationPolicy
   */
  public function getLocationPolicy()
  {
    return $this->locationPolicy;
  }
  /**
   * List of history types to get capacity history for.
   *
   * @param string[] $types
   */
  public function setTypes($types)
  {
    $this->types = $types;
  }
  /**
   * @return string[]
   */
  public function getTypes()
  {
    return $this->types;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityHistoryRequest::class, 'Google_Service_Compute_CapacityHistoryRequest');
