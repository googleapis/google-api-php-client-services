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

class Google_Service_TagManager_Parameter extends Google_Collection
{
  protected $collection_key = 'map';
  public $key;
  public $list;
  public $map;
  public $type;
  public $value;

  public function setKey($key)
  {
    $this->key = $key;
  }
  public function getKey()
  {
    return $this->key;
  }
  public function setList(array $list)
  {
    foreach ($list as $l) {
      if (!$l instanceof Google_Service_TagManager_Parameter) {
        throw new InvalidArgumentException('First argument to setList must be an array of Google_Service_TagManager_Parameter');
      }
    }
    $this->list = $list;
  }
  public function getList()
  {
    return $this->list;
  }
  public function setMap(array $map)
  {
    foreach ($map as $m) {
      if (!$m instanceof Google_Service_TagManager_Parameter) {
        throw new InvalidArgumentException('First argument to setMap must be an array of Google_Service_TagManager_Parameter');
      }
    }
    $this->map = $map;
  }
  public function getMap()
  {
    return $this->map;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}
