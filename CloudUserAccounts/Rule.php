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

class Google_Service_CloudUserAccounts_Rule extends Google_Collection
{
  protected $collection_key = 'permissions';
  public $action;
  public $conditions;
  public $description;
  public $ins;
  public $logConfigs;
  public $notIns;
  public $permissions;

  public function setAction($action)
  {
    $this->action = $action;
  }
  public function getAction()
  {
    return $this->action;
  }
  public function setConditions(array $conditions)
  {
    foreach ($conditions as $c) {
      if (!$c instanceof Google_Service_CloudUserAccounts_Condition) {
        throw new InvalidArgumentException('First argument to setConditions must be an array of Google_Service_CloudUserAccounts_Condition');
      }
    }
    $this->conditions = $conditions;
  }
  public function getConditions()
  {
    return $this->conditions;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setIns(array $ins)
  {
    $this->ins = $ins;
  }
  public function getIns()
  {
    return $this->ins;
  }
  public function setLogConfigs(array $logConfigs)
  {
    foreach ($logConfigs as $l) {
      if (!$l instanceof Google_Service_CloudUserAccounts_LogConfig) {
        throw new InvalidArgumentException('First argument to setLogConfigs must be an array of Google_Service_CloudUserAccounts_LogConfig');
      }
    }
    $this->logConfigs = $logConfigs;
  }
  public function getLogConfigs()
  {
    return $this->logConfigs;
  }
  public function setNotIns(array $notIns)
  {
    $this->notIns = $notIns;
  }
  public function getNotIns()
  {
    return $this->notIns;
  }
  public function setPermissions(array $permissions)
  {
    $this->permissions = $permissions;
  }
  public function getPermissions()
  {
    return $this->permissions;
  }
}
