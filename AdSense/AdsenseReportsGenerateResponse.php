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

class Google_Service_AdSense_AdsenseReportsGenerateResponse extends Google_Collection
{
  protected $collection_key = 'warnings';
  public $averages;
  public $endDate;
  public $headers;
  public $kind;
  public $rows;
  public $startDate;
  public $totalMatchedRows;
  public $totals;
  public $warnings;

  public function setAverages(array $averages)
  {
    $this->averages = $averages;
  }
  public function getAverages()
  {
    return $this->averages;
  }
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  public function getEndDate()
  {
    return $this->endDate;
  }
  public function setHeaders(array $headers)
  {
    foreach ($headers as $h) {
      if (!$h instanceof Google_Service_AdSense_AdsenseReportsGenerateResponseHeaders) {
        throw new InvalidArgumentException('First argument to setHeaders must be an array of Google_Service_AdSense_AdsenseReportsGenerateResponseHeaders');
      }
    }
    $this->headers = $headers;
  }
  public function getHeaders()
  {
    return $this->headers;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setRows(array $rows)
  {
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  public function getStartDate()
  {
    return $this->startDate;
  }
  public function setTotalMatchedRows($totalMatchedRows)
  {
    $this->totalMatchedRows = $totalMatchedRows;
  }
  public function getTotalMatchedRows()
  {
    return $this->totalMatchedRows;
  }
  public function setTotals(array $totals)
  {
    $this->totals = $totals;
  }
  public function getTotals()
  {
    return $this->totals;
  }
  public function setWarnings(array $warnings)
  {
    $this->warnings = $warnings;
  }
  public function getWarnings()
  {
    return $this->warnings;
  }
}
