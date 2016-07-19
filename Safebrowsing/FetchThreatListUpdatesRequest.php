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

class Google_Service_Safebrowsing_FetchThreatListUpdatesRequest extends Google_Collection
{
  protected $collection_key = 'listUpdateRequests';
  public $client;
  public $listUpdateRequests;

  public function setClient(Google_Service_Safebrowsing_ClientInfo $client)
  {
    $this->client = $client;
  }
  public function getClient()
  {
    return $this->client;
  }
  public function setListUpdateRequests(array $listUpdateRequests)
  {
    foreach ($listUpdateRequests as $l) {
      if (!$l instanceof Google_Service_Safebrowsing_ListUpdateRequest) {
        throw new InvalidArgumentException('First argument to setListUpdateRequests must be an array of Google_Service_Safebrowsing_ListUpdateRequest');
      }
    }
    $this->listUpdateRequests = $listUpdateRequests;
  }
  public function getListUpdateRequests()
  {
    return $this->listUpdateRequests;
  }
}
