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

class Google_Service_AndroidPublisher_ApkListingsListResponse extends Google_Collection
{
  protected $collection_key = 'listings';
  public $kind;
  public $listings;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setListings(array $listings)
  {
    foreach ($listings as $l) {
      if (!$l instanceof Google_Service_AndroidPublisher_ApkListing) {
        throw new InvalidArgumentException('First argument to setListings must be an array of Google_Service_AndroidPublisher_ApkListing');
      }
    }
    $this->listings = $listings;
  }
  public function getListings()
  {
    return $this->listings;
  }
}
