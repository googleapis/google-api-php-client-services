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

class Google_Service_Classroom_ListInvitationsResponse extends Google_Collection
{
  protected $collection_key = 'invitations';
  public $invitations;
  public $nextPageToken;

  public function setInvitations(array $invitations)
  {
    foreach ($invitations as $i) {
      if (!$i instanceof Google_Service_Classroom_Invitation) {
        throw new InvalidArgumentException('First argument to setInvitations must be an array of Google_Service_Classroom_Invitation');
      }
    }
    $this->invitations = $invitations;
  }
  public function getInvitations()
  {
    return $this->invitations;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
