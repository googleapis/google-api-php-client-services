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

class Google_Service_Dfareporting_ReportPathToConversionCriteria extends Google_Collection
{
  protected $collection_key = 'perInteractionDimensions';
  public $activityFilters;
  public $conversionDimensions;
  public $customFloodlightVariables;
  public $customRichMediaEvents;
  public $dateRange;
  public $floodlightConfigId;
  public $metricNames;
  public $perInteractionDimensions;
  public $reportProperties;

  public function setActivityFilters(array $activityFilters)
  {
    foreach ($activityFilters as $a) {
      if (!$a instanceof Google_Service_Dfareporting_DimensionValue) {
        throw new InvalidArgumentException('First argument to setActivityFilters must be an array of Google_Service_Dfareporting_DimensionValue');
      }
    }
    $this->activityFilters = $activityFilters;
  }
  public function getActivityFilters()
  {
    return $this->activityFilters;
  }
  public function setConversionDimensions(array $conversionDimensions)
  {
    foreach ($conversionDimensions as $c) {
      if (!$c instanceof Google_Service_Dfareporting_SortedDimension) {
        throw new InvalidArgumentException('First argument to setConversionDimensions must be an array of Google_Service_Dfareporting_SortedDimension');
      }
    }
    $this->conversionDimensions = $conversionDimensions;
  }
  public function getConversionDimensions()
  {
    return $this->conversionDimensions;
  }
  public function setCustomFloodlightVariables(array $customFloodlightVariables)
  {
    foreach ($customFloodlightVariables as $c) {
      if (!$c instanceof Google_Service_Dfareporting_SortedDimension) {
        throw new InvalidArgumentException('First argument to setCustomFloodlightVariables must be an array of Google_Service_Dfareporting_SortedDimension');
      }
    }
    $this->customFloodlightVariables = $customFloodlightVariables;
  }
  public function getCustomFloodlightVariables()
  {
    return $this->customFloodlightVariables;
  }
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
  public function setPerInteractionDimensions(array $perInteractionDimensions)
  {
    foreach ($perInteractionDimensions as $p) {
      if (!$p instanceof Google_Service_Dfareporting_SortedDimension) {
        throw new InvalidArgumentException('First argument to setPerInteractionDimensions must be an array of Google_Service_Dfareporting_SortedDimension');
      }
    }
    $this->perInteractionDimensions = $perInteractionDimensions;
  }
  public function getPerInteractionDimensions()
  {
    return $this->perInteractionDimensions;
  }
  public function setReportProperties(Google_Service_Dfareporting_ReportPathToConversionCriteriaReportProperties $reportProperties)
  {
    $this->reportProperties = $reportProperties;
  }
  public function getReportProperties()
  {
    return $this->reportProperties;
  }
}
