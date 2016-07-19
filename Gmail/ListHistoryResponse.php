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

class Google_Service_Gmail_ListHistoryResponse extends Google_Collection
{
  protected $collection_key = 'history';
  public $history;
  public $historyId;
  public $nextPageToken;

  public function setHistory(array $history)
  {
    foreach ($history as $h) {
      if (!$h instanceof Google_Service_Gmail_History) {
        throw new InvalidArgumentException('First argument to setHistory must be an array of Google_Service_Gmail_History');
      }
    }
    $this->history = $history;
  }
  public function getHistory()
  {
    return $this->history;
  }
  public function setHistoryId($historyId)
  {
    $this->historyId = $historyId;
  }
  public function getHistoryId()
  {
    return $this->historyId;
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
