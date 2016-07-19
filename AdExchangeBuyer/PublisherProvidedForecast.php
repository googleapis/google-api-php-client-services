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

class Google_Service_AdExchangeBuyer_PublisherProvidedForecast extends Google_Collection
{
  protected $collection_key = 'dimensions';
  public $dimensions;
  public $weeklyImpressions;
  public $weeklyUniques;

  public function setDimensions(array $dimensions)
  {
    foreach ($dimensions as $d) {
      if (!$d instanceof Google_Service_AdExchangeBuyer_Dimension) {
        throw new InvalidArgumentException('First argument to setDimensions must be an array of Google_Service_AdExchangeBuyer_Dimension');
      }
    }
    $this->dimensions = $dimensions;
  }
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setWeeklyImpressions($weeklyImpressions)
  {
    $this->weeklyImpressions = $weeklyImpressions;
  }
  public function getWeeklyImpressions()
  {
    return $this->weeklyImpressions;
  }
  public function setWeeklyUniques($weeklyUniques)
  {
    $this->weeklyUniques = $weeklyUniques;
  }
  public function getWeeklyUniques()
  {
    return $this->weeklyUniques;
  }
}
