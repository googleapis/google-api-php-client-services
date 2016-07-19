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

class Google_Service_Games_EventUpdateResponse extends Google_Collection
{
  protected $collection_key = 'playerEvents';
  public $batchFailures;
  public $eventFailures;
  public $kind;
  public $playerEvents;

  public function setBatchFailures(array $batchFailures)
  {
    foreach ($batchFailures as $b) {
      if (!$b instanceof Google_Service_Games_EventBatchRecordFailure) {
        throw new InvalidArgumentException('First argument to setBatchFailures must be an array of Google_Service_Games_EventBatchRecordFailure');
      }
    }
    $this->batchFailures = $batchFailures;
  }
  public function getBatchFailures()
  {
    return $this->batchFailures;
  }
  public function setEventFailures(array $eventFailures)
  {
    foreach ($eventFailures as $e) {
      if (!$e instanceof Google_Service_Games_EventRecordFailure) {
        throw new InvalidArgumentException('First argument to setEventFailures must be an array of Google_Service_Games_EventRecordFailure');
      }
    }
    $this->eventFailures = $eventFailures;
  }
  public function getEventFailures()
  {
    return $this->eventFailures;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setPlayerEvents(array $playerEvents)
  {
    foreach ($playerEvents as $p) {
      if (!$p instanceof Google_Service_Games_PlayerEvent) {
        throw new InvalidArgumentException('First argument to setPlayerEvents must be an array of Google_Service_Games_PlayerEvent');
      }
    }
    $this->playerEvents = $playerEvents;
  }
  public function getPlayerEvents()
  {
    return $this->playerEvents;
  }
}
