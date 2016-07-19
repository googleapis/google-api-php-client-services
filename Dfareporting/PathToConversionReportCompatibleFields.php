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

class Google_Service_Dfareporting_PathToConversionReportCompatibleFields extends Google_Collection
{
  protected $collection_key = 'perInteractionDimensions';
  public $conversionDimensions;
  public $customFloodlightVariables;
  public $kind;
  public $metrics;
  public $perInteractionDimensions;

  public function setConversionDimensions(array $conversionDimensions)
  {
    foreach ($conversionDimensions as $c) {
      if (!$c instanceof Google_Service_Dfareporting_Dimension) {
        throw new InvalidArgumentException('First argument to setConversionDimensions must be an array of Google_Service_Dfareporting_Dimension');
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
      if (!$c instanceof Google_Service_Dfareporting_Dimension) {
        throw new InvalidArgumentException('First argument to setCustomFloodlightVariables must be an array of Google_Service_Dfareporting_Dimension');
      }
    }
    $this->customFloodlightVariables = $customFloodlightVariables;
  }
  public function getCustomFloodlightVariables()
  {
    return $this->customFloodlightVariables;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMetrics(array $metrics)
  {
    foreach ($metrics as $m) {
      if (!$m instanceof Google_Service_Dfareporting_Metric) {
        throw new InvalidArgumentException('First argument to setMetrics must be an array of Google_Service_Dfareporting_Metric');
      }
    }
    $this->metrics = $metrics;
  }
  public function getMetrics()
  {
    return $this->metrics;
  }
  public function setPerInteractionDimensions(array $perInteractionDimensions)
  {
    foreach ($perInteractionDimensions as $p) {
      if (!$p instanceof Google_Service_Dfareporting_Dimension) {
        throw new InvalidArgumentException('First argument to setPerInteractionDimensions must be an array of Google_Service_Dfareporting_Dimension');
      }
    }
    $this->perInteractionDimensions = $perInteractionDimensions;
  }
  public function getPerInteractionDimensions()
  {
    return $this->perInteractionDimensions;
  }
}
