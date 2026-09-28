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

namespace Google\Service\DeviceRun;

class DeviceConfig extends \Google\Collection
{
  protected $collection_key = 'actions';
  protected $actionsType = DeviceAction::class;
  protected $actionsDataType = 'array';
  protected $requirementType = DeviceRequirement::class;
  protected $requirementDataType = '';

  /**
   * Optional. The actions to be performed on the device. Actions will be
   * executed in the order they are specified in the list. Each action type can
   * at most have 1 instance in the list.
   *
   * @param DeviceAction[] $actions
   */
  public function setActions($actions)
  {
    $this->actions = $actions;
  }
  /**
   * @return DeviceAction[]
   */
  public function getActions()
  {
    return $this->actions;
  }
  /**
   * Required. The requirement of the device.
   *
   * @param DeviceRequirement $requirement
   */
  public function setRequirement(DeviceRequirement $requirement)
  {
    $this->requirement = $requirement;
  }
  /**
   * @return DeviceRequirement
   */
  public function getRequirement()
  {
    return $this->requirement;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceConfig::class, 'Google_Service_DeviceRun_DeviceConfig');
