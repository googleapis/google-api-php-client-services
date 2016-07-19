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

class Google_Service_Appsactivity_Move extends Google_Collection
{
  protected $collection_key = 'removedParents';
  public $addedParents;
  public $removedParents;

  public function setAddedParents(array $addedParents)
  {
    foreach ($addedParents as $a) {
      if (!$a instanceof Google_Service_Appsactivity_AppsactivityParent) {
        throw new InvalidArgumentException('First argument to setAddedParents must be an array of Google_Service_Appsactivity_AppsactivityParent');
      }
    }
    $this->addedParents = $addedParents;
  }
  public function getAddedParents()
  {
    return $this->addedParents;
  }
  public function setRemovedParents(array $removedParents)
  {
    foreach ($removedParents as $r) {
      if (!$r instanceof Google_Service_Appsactivity_AppsactivityParent) {
        throw new InvalidArgumentException('First argument to setRemovedParents must be an array of Google_Service_Appsactivity_AppsactivityParent');
      }
    }
    $this->removedParents = $removedParents;
  }
  public function getRemovedParents()
  {
    return $this->removedParents;
  }
}
