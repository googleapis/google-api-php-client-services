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

class Google_Service_Games_Room extends Google_Collection
{
  protected $collection_key = 'participants';
  public $applicationId;
  public $autoMatchingCriteria;
  public $autoMatchingStatus;
  public $creationDetails;
  public $description;
  public $inviterId;
  public $kind;
  public $lastUpdateDetails;
  public $participants;
  public $roomId;
  public $roomStatusVersion;
  public $status;
  public $variant;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }
  public function getApplicationId()
  {
    return $this->applicationId;
  }
  public function setAutoMatchingCriteria(Google_Service_Games_RoomAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }
  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }
  public function setAutoMatchingStatus(Google_Service_Games_RoomAutoMatchStatus $autoMatchingStatus)
  {
    $this->autoMatchingStatus = $autoMatchingStatus;
  }
  public function getAutoMatchingStatus()
  {
    return $this->autoMatchingStatus;
  }
  public function setCreationDetails(Google_Service_Games_RoomModification $creationDetails)
  {
    $this->creationDetails = $creationDetails;
  }
  public function getCreationDetails()
  {
    return $this->creationDetails;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setInviterId($inviterId)
  {
    $this->inviterId = $inviterId;
  }
  public function getInviterId()
  {
    return $this->inviterId;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastUpdateDetails(Google_Service_Games_RoomModification $lastUpdateDetails)
  {
    $this->lastUpdateDetails = $lastUpdateDetails;
  }
  public function getLastUpdateDetails()
  {
    return $this->lastUpdateDetails;
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
  public function setRoomStatusVersion($roomStatusVersion)
  {
    $this->roomStatusVersion = $roomStatusVersion;
  }
  public function getRoomStatusVersion()
  {
    return $this->roomStatusVersion;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setVariant($variant)
  {
    $this->variant = $variant;
  }
  public function getVariant()
  {
    return $this->variant;
  }
}
