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

class Google_Service_Sheets_BasicChartSpec extends Google_Collection
{
  protected $collection_key = 'series';
  public $axis;
  public $chartType;
  public $domains;
  public $headerCount;
  public $legendPosition;
  public $series;

  public function setAxis(array $axis)
  {
    foreach ($axis as $a) {
      if (!$a instanceof Google_Service_Sheets_BasicChartAxis) {
        throw new InvalidArgumentException('First argument to setAxis must be an array of Google_Service_Sheets_BasicChartAxis');
      }
    }
    $this->axis = $axis;
  }
  public function getAxis()
  {
    return $this->axis;
  }
  public function setChartType($chartType)
  {
    $this->chartType = $chartType;
  }
  public function getChartType()
  {
    return $this->chartType;
  }
  public function setDomains(array $domains)
  {
    foreach ($domains as $d) {
      if (!$d instanceof Google_Service_Sheets_BasicChartDomain) {
        throw new InvalidArgumentException('First argument to setDomains must be an array of Google_Service_Sheets_BasicChartDomain');
      }
    }
    $this->domains = $domains;
  }
  public function getDomains()
  {
    return $this->domains;
  }
  public function setHeaderCount($headerCount)
  {
    $this->headerCount = $headerCount;
  }
  public function getHeaderCount()
  {
    return $this->headerCount;
  }
  public function setLegendPosition($legendPosition)
  {
    $this->legendPosition = $legendPosition;
  }
  public function getLegendPosition()
  {
    return $this->legendPosition;
  }
  public function setSeries(array $series)
  {
    foreach ($series as $s) {
      if (!$s instanceof Google_Service_Sheets_BasicChartSeries) {
        throw new InvalidArgumentException('First argument to setSeries must be an array of Google_Service_Sheets_BasicChartSeries');
      }
    }
    $this->series = $series;
  }
  public function getSeries()
  {
    return $this->series;
  }
}
