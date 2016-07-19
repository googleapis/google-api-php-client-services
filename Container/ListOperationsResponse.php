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

class Google_Service_Container_ListOperationsResponse extends Google_Collection
{
  protected $collection_key = 'operations';
  public $missingZones;
  public $operations;

  public function setMissingZones(array $missingZones)
  {
    $this->missingZones = $missingZones;
  }
  public function getMissingZones()
  {
    return $this->missingZones;
  }
  public function setOperations(array $operations)
  {
    foreach ($operations as $o) {
      if (!$o instanceof Google_Service_Container_Operation) {
        throw new InvalidArgumentException('First argument to setOperations must be an array of Google_Service_Container_Operation');
      }
    }
    $this->operations = $operations;
  }
  public function getOperations()
  {
    return $this->operations;
  }
}
