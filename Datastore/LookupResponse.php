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

class Google_Service_Datastore_LookupResponse extends Google_Collection
{
  protected $collection_key = 'missing';
  public $deferred;
  public $found;
  public $missing;

  public function setDeferred(array $deferred)
  {
    foreach ($deferred as $d) {
      if (!$d instanceof Google_Service_Datastore_Key) {
        throw new InvalidArgumentException('First argument to setDeferred must be an array of Google_Service_Datastore_Key');
      }
    }
    $this->deferred = $deferred;
  }
  public function getDeferred()
  {
    return $this->deferred;
  }
  public function setFound(array $found)
  {
    foreach ($found as $f) {
      if (!$f instanceof Google_Service_Datastore_EntityResult) {
        throw new InvalidArgumentException('First argument to setFound must be an array of Google_Service_Datastore_EntityResult');
      }
    }
    $this->found = $found;
  }
  public function getFound()
  {
    return $this->found;
  }
  public function setMissing(array $missing)
  {
    foreach ($missing as $m) {
      if (!$m instanceof Google_Service_Datastore_EntityResult) {
        throw new InvalidArgumentException('First argument to setMissing must be an array of Google_Service_Datastore_EntityResult');
      }
    }
    $this->missing = $missing;
  }
  public function getMissing()
  {
    return $this->missing;
  }
}
