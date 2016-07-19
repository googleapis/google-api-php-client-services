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

class Google_Service_Analytics_GoalUrlDestinationDetails extends Google_Collection
{
  protected $collection_key = 'steps';
  public $caseSensitive;
  public $firstStepRequired;
  public $matchType;
  public $steps;
  public $url;

  public function setCaseSensitive($caseSensitive)
  {
    $this->caseSensitive = $caseSensitive;
  }
  public function getCaseSensitive()
  {
    return $this->caseSensitive;
  }
  public function setFirstStepRequired($firstStepRequired)
  {
    $this->firstStepRequired = $firstStepRequired;
  }
  public function getFirstStepRequired()
  {
    return $this->firstStepRequired;
  }
  public function setMatchType($matchType)
  {
    $this->matchType = $matchType;
  }
  public function getMatchType()
  {
    return $this->matchType;
  }
  public function setSteps(array $steps)
  {
    foreach ($steps as $s) {
      if (!$s instanceof Google_Service_Analytics_GoalUrlDestinationDetailsSteps) {
        throw new InvalidArgumentException('First argument to setSteps must be an array of Google_Service_Analytics_GoalUrlDestinationDetailsSteps');
      }
    }
    $this->steps = $steps;
  }
  public function getSteps()
  {
    return $this->steps;
  }
  public function setUrl($url)
  {
    $this->url = $url;
  }
  public function getUrl()
  {
    return $this->url;
  }
}
