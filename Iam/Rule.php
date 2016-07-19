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

class Google_Service_Iam_Rule extends Google_Collection
{
  protected $collection_key = 'permissions';
  public $action;
  public $conditions;
  public $description;
  public $in;
  public $logConfig;
  public $notIn;
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
      if (!$c instanceof Google_Service_Iam_Condition) {
        throw new InvalidArgumentException('First argument to setConditions must be an array of Google_Service_Iam_Condition');
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
  public function setIn(array $in)
  {
    $this->in = $in;
  }
  public function getIn()
  {
    return $this->in;
  }
  public function setLogConfig(array $logConfig)
  {
    foreach ($logConfig as $l) {
      if (!$l instanceof Google_Service_Iam_LogConfig) {
        throw new InvalidArgumentException('First argument to setLogConfig must be an array of Google_Service_Iam_LogConfig');
      }
    }
    $this->logConfig = $logConfig;
  }
  public function getLogConfig()
  {
    return $this->logConfig;
  }
  public function setNotIn(array $notIn)
  {
    $this->notIn = $notIn;
  }
  public function getNotIn()
  {
    return $this->notIn;
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
