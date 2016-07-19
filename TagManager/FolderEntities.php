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

class Google_Service_TagManager_FolderEntities extends Google_Collection
{
  protected $collection_key = 'variable';
  public $tag;
  public $trigger;
  public $variable;

  public function setTag(array $tag)
  {
    foreach ($tag as $t) {
      if (!$t instanceof Google_Service_TagManager_Tag) {
        throw new InvalidArgumentException('First argument to setTag must be an array of Google_Service_TagManager_Tag');
      }
    }
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
  public function setTrigger(array $trigger)
  {
    foreach ($trigger as $t) {
      if (!$t instanceof Google_Service_TagManager_Trigger) {
        throw new InvalidArgumentException('First argument to setTrigger must be an array of Google_Service_TagManager_Trigger');
      }
    }
    $this->trigger = $trigger;
  }
  public function getTrigger()
  {
    return $this->trigger;
  }
  public function setVariable(array $variable)
  {
    foreach ($variable as $v) {
      if (!$v instanceof Google_Service_TagManager_Variable) {
        throw new InvalidArgumentException('First argument to setVariable must be an array of Google_Service_TagManager_Variable');
      }
    }
    $this->variable = $variable;
  }
  public function getVariable()
  {
    return $this->variable;
  }
}
