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

class Google_Service_ShoppingContent_AccounttaxCustomBatchResponse extends Google_Collection
{
  protected $collection_key = 'entries';
  public $entries;
  public $kind;

  public function setEntries(array $entries)
  {
    foreach ($entries as $e) {
      if (!$e instanceof Google_Service_ShoppingContent_AccounttaxCustomBatchResponseEntry) {
        throw new InvalidArgumentException('First argument to setEntries must be an array of Google_Service_ShoppingContent_AccounttaxCustomBatchResponseEntry');
      }
    }
    $this->entries = $entries;
  }
  public function getEntries()
  {
    return $this->entries;
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
