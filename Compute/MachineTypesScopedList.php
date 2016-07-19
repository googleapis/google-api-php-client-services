<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_Compute_MachineTypesScopedList extends Google_Collection
{
  protected $collection_key = 'machineTypes';
  public $machineTypes;
  public $warning;

  public function setMachineTypes(array $machineTypes)
  {
    foreach ($machineTypes as $m) {
      if (!$m instanceof Google_Service_Compute_MachineType) {
        throw new InvalidArgumentException('First argument to setMachineTypes must be an array of Google_Service_Compute_MachineType');
      }
    }
    $this->machineTypes = $machineTypes;
  }
  public function getMachineTypes()
  {
    return $this->machineTypes;
  }
  public function setWarning(Google_Service_Compute_MachineTypesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }
  public function getWarning()
  {
    return $this->warning;
  }
}
