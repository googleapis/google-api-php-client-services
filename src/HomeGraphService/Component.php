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

namespace Google\Service\HomeGraphService;

class Component extends \Google\Collection
{
  protected $collection_key = 'traitData';
  protected $childComponentsType = Component::class;
  protected $childComponentsDataType = 'array';
  /**
   * Required. List of Device types associated with this component. Supported
   * device types are defined in
   * cs//depot/google3/home/homeservicelayer/uddm/types/uddm_device_types.proto
   * and the type string is the enum name, for example: ON_OFF_LIGHT =>
   * "ON_OFF_LIGHT".
   *
   * @var string[]
   */
  public $deviceTypes;
  /**
   * Required. ID of the component from the device provider.
   *
   * @var string
   */
  public $id;
  protected $traitDataType = TraitData::class;
  protected $traitDataDataType = 'array';

  /**
   * Optional. Child components.
   *
   * @param Component[] $childComponents
   */
  public function setChildComponents($childComponents)
  {
    $this->childComponents = $childComponents;
  }
  /**
   * @return Component[]
   */
  public function getChildComponents()
  {
    return $this->childComponents;
  }
  /**
   * Required. List of Device types associated with this component. Supported
   * device types are defined in
   * cs//depot/google3/home/homeservicelayer/uddm/types/uddm_device_types.proto
   * and the type string is the enum name, for example: ON_OFF_LIGHT =>
   * "ON_OFF_LIGHT".
   *
   * @param string[] $deviceTypes
   */
  public function setDeviceTypes($deviceTypes)
  {
    $this->deviceTypes = $deviceTypes;
  }
  /**
   * @return string[]
   */
  public function getDeviceTypes()
  {
    return $this->deviceTypes;
  }
  /**
   * Required. ID of the component from the device provider.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Required. List of trait data associated with the component.
   *
   * @param TraitData[] $traitData
   */
  public function setTraitData($traitData)
  {
    $this->traitData = $traitData;
  }
  /**
   * @return TraitData[]
   */
  public function getTraitData()
  {
    return $this->traitData;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Component::class, 'Google_Service_HomeGraphService_Component');
