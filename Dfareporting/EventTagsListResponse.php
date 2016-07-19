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

class Google_Service_Dfareporting_EventTagsListResponse extends Google_Collection
{
  protected $collection_key = 'eventTags';
  public $eventTags;
  public $kind;

  public function setEventTags(array $eventTags)
  {
    foreach ($eventTags as $e) {
      if (!$e instanceof Google_Service_Dfareporting_EventTag) {
        throw new InvalidArgumentException('First argument to setEventTags must be an array of Google_Service_Dfareporting_EventTag');
      }
    }
    $this->eventTags = $eventTags;
  }
  public function getEventTags()
  {
    return $this->eventTags;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
}
