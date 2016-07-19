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

class Google_Service_AnalyticsReporting_ReportData extends Google_Collection
{
  protected $collection_key = 'totals';
  public $isDataGolden;
  public $maximums;
  public $minimums;
  public $rowCount;
  public $rows;
  public $samplesReadCounts;
  public $samplingSpaceSizes;
  public $totals;

  public function setIsDataGolden($isDataGolden)
  {
    $this->isDataGolden = $isDataGolden;
  }
  public function getIsDataGolden()
  {
    return $this->isDataGolden;
  }
  public function setMaximums(array $maximums)
  {
    foreach ($maximums as $m) {
      if (!$m instanceof Google_Service_AnalyticsReporting_DateRangeValues) {
        throw new InvalidArgumentException('First argument to setMaximums must be an array of Google_Service_AnalyticsReporting_DateRangeValues');
      }
    }
    $this->maximums = $maximums;
  }
  public function getMaximums()
  {
    return $this->maximums;
  }
  public function setMinimums(array $minimums)
  {
    foreach ($minimums as $m) {
      if (!$m instanceof Google_Service_AnalyticsReporting_DateRangeValues) {
        throw new InvalidArgumentException('First argument to setMinimums must be an array of Google_Service_AnalyticsReporting_DateRangeValues');
      }
    }
    $this->minimums = $minimums;
  }
  public function getMinimums()
  {
    return $this->minimums;
  }
  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }
  public function getRowCount()
  {
    return $this->rowCount;
  }
  public function setRows(array $rows)
  {
    foreach ($rows as $r) {
      if (!$r instanceof Google_Service_AnalyticsReporting_ReportRow) {
        throw new InvalidArgumentException('First argument to setRows must be an array of Google_Service_AnalyticsReporting_ReportRow');
      }
    }
    $this->rows = $rows;
  }
  public function getRows()
  {
    return $this->rows;
  }
  public function setSamplesReadCounts(array $samplesReadCounts)
  {
    $this->samplesReadCounts = $samplesReadCounts;
  }
  public function getSamplesReadCounts()
  {
    return $this->samplesReadCounts;
  }
  public function setSamplingSpaceSizes(array $samplingSpaceSizes)
  {
    $this->samplingSpaceSizes = $samplingSpaceSizes;
  }
  public function getSamplingSpaceSizes()
  {
    return $this->samplingSpaceSizes;
  }
  public function setTotals(array $totals)
  {
    foreach ($totals as $t) {
      if (!$t instanceof Google_Service_AnalyticsReporting_DateRangeValues) {
        throw new InvalidArgumentException('First argument to setTotals must be an array of Google_Service_AnalyticsReporting_DateRangeValues');
      }
    }
    $this->totals = $totals;
  }
  public function getTotals()
  {
    return $this->totals;
  }
}
