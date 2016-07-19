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

class Google_Service_Games_RoomStatus extends Google_Collection
{
  protected $collection_key = 'participants';
  public $autoMatchingStatus;
  public $kind;
  public $participants;
  public $roomId;
  public $status;
  public $statusVersion;

  public function setAutoMatchingStatus(Google_Service_Games_RoomAutoMatchStatus $autoMatchingStatus)
  {
    $this->autoMatchingStatus = $autoMatchingStatus;
  }
  public function getAutoMatchingStatus()
  {
    return $this->autoMatchingStatus;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setParticipants(array $participants)
  {
    foreach ($participants as $p) {
      if (!$p instanceof Google_Service_Games_RoomParticipant) {
        throw new InvalidArgumentException('First argument to setParticipants must be an array of Google_Service_Games_RoomParticipant');
      }
    }
    $this->participants = $participants;
  }
  public function getParticipants()
  {
    return $this->participants;
  }
  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }
  public function getRoomId()
  {
    return $this->roomId;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setStatusVersion($statusVersion)
  {
    $this->statusVersion = $statusVersion;
  }
  public function getStatusVersion()
  {
    return $this->statusVersion;
  }
}
