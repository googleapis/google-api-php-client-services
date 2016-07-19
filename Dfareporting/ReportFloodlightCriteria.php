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

class Google_Service_Dfareporting_ReportFloodlightCriteria extends Google_Collection
{
  protected $collection_key = 'metricNames';
  public $customRichMediaEvents;
  public $dateRange;
  public $dimensionFilters;
  public $dimensions;
  public $floodlightConfigId;
  public $metricNames;
  public $reportProperties;

  public function setCustomRichMediaEvents(array $customRichMediaEvents)
  {
    foreach ($customRichMediaEvents as $c) {
      if (!$c instanceof Google_Service_Dfareporting_DimensionValue) {
        throw new InvalidArgumentException('First argument to setCustomRichMediaEvents must be an array of Google_Service_Dfareporting_DimensionValue');
      }
    }
    $this->customRichMediaEvents = $customRichMediaEvents;
  }
  public function getCustomRichMediaEvents()
  {
    return $this->customRichMediaEvents;
  }
  public function setDateRange(Google_Service_Dfareporting_DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  public function getDateRange()
  {
    return $this->dateRange;
  }
  public function setDimensionFilters(array $dimensionFilters)
  {
    foreach ($dimensionFilters as $d) {
      if (!$d instanceof Google_Service_Dfareporting_DimensionValue) {
        throw new InvalidArgumentException('First argument to setDimensionFilters must be an array of Google_Service_Dfareporting_DimensionValue');
      }
    }
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  public function setDimensions(array $dimensions)
  {
    foreach ($dimensions as $d) {
      if (!$d instanceof Google_Service_Dfareporting_SortedDimension) {
        throw new InvalidArgumentException('First argument to setDimensions must be an array of Google_Service_Dfareporting_SortedDimension');
      }
    }
    $this->dimensions = $dimensions;
  }
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setFloodlightConfigId(Google_Service_Dfareporting_DimensionValue $floodlightConfigId)
  {
    $this->floodlightConfigId = $floodlightConfigId;
  }
  public function getFloodlightConfigId()
  {
    return $this->floodlightConfigId;
  }
  public function setMetricNames(array $metricNames)
  {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames()
  {
    return $this->metricNames;
  }
  public function setReportProperties(Google_Service_Dfareporting_ReportFloodlightCriteriaReportProperties $reportProperties)
  {
    $this->reportProperties = $reportProperties;
  }
  public function getReportProperties()
  {
    return $this->reportProperties;
  }
}
