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

class Google_Service_Analytics_McfData extends Google_Collection
{
  protected $collection_key = 'rows';
  public $columnHeaders;
  public $containsSampledData;
  public $id;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $profileInfo;
  public $query;
  public $rows;
  public $sampleSize;
  public $sampleSpace;
  public $selfLink;
  public $totalResults;
  public $totalsForAllResults;

  public function setColumnHeaders(array $columnHeaders)
  {
    foreach ($columnHeaders as $c) {
      if (!$c instanceof Google_Service_Analytics_McfDataColumnHeaders) {
        throw new InvalidArgumentException('First argument to setColumnHeaders must be an array of Google_Service_Analytics_McfDataColumnHeaders');
      }
    }
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders()
  {
    return $this->columnHeaders;
  }
  public function setContainsSampledData($containsSampledData)
  {
    $this->containsSampledData = $containsSampledData;
  }
  public function getContainsSampledData()
  {
    return $this->containsSampledData;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setItemsPerPage($itemsPerPage)
  {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage()
  {
    return $this->itemsPerPage;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setNextLink($nextLink)
  {
    $this->nextLink = $nextLink;
  }
  public function getNextLink()
  {
    return $this->nextLink;
  }
  public function setPreviousLink($previousLink)
  {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink()
  {
    return $this->previousLink;
  }
  public function setProfileInfo(Google_Service_Analytics_McfDataProfileInfo $profileInfo)
  {
    $this->profileInfo = $profileInfo;
  }
  public function getProfileInfo()
  {
    return $this->profileInfo;
  }
  public function setQuery(Google_Service_Analytics_McfDataQuery $query)
  {
    $this->query = $query;
  }
  public function getQuery()
  {
    return $this->query;
  }
  public function setRows(array $rows)
  {
    foreach ($rows as $r) {
      if (!$r instanceof Google_Service_Analytics_McfDataRows) {
        throw new InvalidArgumentException('First argument to setRows must be an array of Google_Service_Analytics_McfDataRows');
      }
    }
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
  public function setSampleSize($sampleSize)
  {
    $this->sampleSize = $sampleSize;
  }
  public function getSampleSize()
  {
    return $this->sampleSize;
  }
  public function setSampleSpace($sampleSpace)
  {
    $this->sampleSpace = $sampleSpace;
  }
  public function getSampleSpace()
  {
    return $this->sampleSpace;
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
