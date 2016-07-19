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

class Google_Service_Sheets_Sheet extends Google_Collection
{
  protected $collection_key = 'protectedRanges';
  public $basicFilter;
  public $charts;
  public $conditionalFormats;
  public $data;
  public $filterViews;
  public $merges;
  public $properties;
  public $protectedRanges;

  public function setBasicFilter(Google_Service_Sheets_BasicFilter $basicFilter)
  {
    $this->basicFilter = $basicFilter;
  }
  public function getBasicFilter()
  {
    return $this->basicFilter;
  }
  public function setCharts(array $charts)
  {
    foreach ($charts as $c) {
      if (!$c instanceof Google_Service_Sheets_EmbeddedChart) {
        throw new InvalidArgumentException('First argument to setCharts must be an array of Google_Service_Sheets_EmbeddedChart');
      }
    }
    $this->charts = $charts;
  }
  public function getCharts()
  {
    return $this->charts;
  }
  public function setConditionalFormats(array $conditionalFormats)
  {
    foreach ($conditionalFormats as $c) {
      if (!$c instanceof Google_Service_Sheets_ConditionalFormatRule) {
        throw new InvalidArgumentException('First argument to setConditionalFormats must be an array of Google_Service_Sheets_ConditionalFormatRule');
      }
    }
    $this->conditionalFormats = $conditionalFormats;
  }
  public function getConditionalFormats()
  {
    return $this->conditionalFormats;
  }
  public function setData(array $data)
  {
    foreach ($data as $d) {
      if (!$d instanceof Google_Service_Sheets_GridData) {
        throw new InvalidArgumentException('First argument to setData must be an array of Google_Service_Sheets_GridData');
      }
    }
    $this->data = $data;
  }
  public function getData()
  {
    return $this->data;
  }
  public function setFilterViews(array $filterViews)
  {
    foreach ($filterViews as $f) {
      if (!$f instanceof Google_Service_Sheets_FilterView) {
        throw new InvalidArgumentException('First argument to setFilterViews must be an array of Google_Service_Sheets_FilterView');
      }
    }
    $this->filterViews = $filterViews;
  }
  public function getFilterViews()
  {
    return $this->filterViews;
  }
  public function setMerges(array $merges)
  {
    foreach ($merges as $m) {
      if (!$m instanceof Google_Service_Sheets_GridRange) {
        throw new InvalidArgumentException('First argument to setMerges must be an array of Google_Service_Sheets_GridRange');
      }
    }
    $this->merges = $merges;
  }
  public function getMerges()
  {
    return $this->merges;
  }
  public function setProperties(Google_Service_Sheets_SheetProperties $properties)
  {
    $this->properties = $properties;
  }
  public function getProperties()
  {
    return $this->properties;
  }
  public function setProtectedRanges(array $protectedRanges)
  {
    foreach ($protectedRanges as $p) {
      if (!$p instanceof Google_Service_Sheets_ProtectedRange) {
        throw new InvalidArgumentException('First argument to setProtectedRanges must be an array of Google_Service_Sheets_ProtectedRange');
      }
    }
    $this->protectedRanges = $protectedRanges;
  }
  public function getProtectedRanges()
  {
    return $this->protectedRanges;
  }
}
