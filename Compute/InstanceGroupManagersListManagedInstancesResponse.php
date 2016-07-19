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

class Google_Service_Compute_InstanceGroupManagersListManagedInstancesResponse extends Google_Collection
{
  protected $collection_key = 'managedInstances';
  public $managedInstances;

  public function setManagedInstances(array $managedInstances)
  {
    foreach ($managedInstances as $m) {
      if (!$m instanceof Google_Service_Compute_ManagedInstance) {
        throw new InvalidArgumentException('First argument to setManagedInstances must be an array of Google_Service_Compute_ManagedInstance');
      }
    }
    $this->managedInstances = $managedInstances;
  }
  public function getManagedInstances()
  {
    return $this->managedInstances;
  }
}
