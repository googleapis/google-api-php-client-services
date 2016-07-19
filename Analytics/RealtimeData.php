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

class Google_Service_Analytics_RealtimeData extends Google_Collection
{
  protected $collection_key = 'rows';
  public $columnHeaders;
  public $id;
  public $kind;
  public $profileInfo;
  public $query;
  public $rows;
  public $selfLink;
  public $totalResults;
  public $totalsForAllResults;

  public function setColumnHeaders(array $columnHeaders)
  {
    foreach ($columnHeaders as $c) {
      if (!$c instanceof Google_Service_Analytics_RealtimeDataColumnHeaders) {
        throw new InvalidArgumentException('First argument to setColumnHeaders must be an array of Google_Service_Analytics_RealtimeDataColumnHeaders');
      }
    }
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setProfileInfo(Google_Service_Analytics_RealtimeDataProfileInfo $profileInfo)
  {
    $this->profileInfo = $profileInfo;
  }
  public function getProfileInfo()
  {
    return $this->profileInfo;
  }
  public function setQuery(Google_Service_Analytics_RealtimeDataQuery $query)
  {
    $this->query = $query;
  }
  public function getQuery()
  {
    return $this->query;
  }
  public function setRows(array $rows)
  {
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  public function setTotalResults($totalResults)
  {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults()
  {
    return $this->totalResults;
  }
  public function setTotalsForAllResults(array $totalsForAllResults)
  {
    $this->totalsForAllResults = $totalsForAllResults;
  }
  public function getTotalsForAllResults()
  {
    return $this->totalsForAllResults;
  }
}
